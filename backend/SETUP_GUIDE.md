# My Drain DR — Inquiry System Setup Guide

Your backend is **fully built and ready**. All three forms already send inquiries to Gmail and save to a database. You just need to plug in your Gmail credentials.

---

## How It Works

| Form | Source Tag | Fields |
|------|------------|--------|
| Home page "Get a Free Estimate" | `homepage` | Name, Phone, Email, Service, Message |
| Contact page "Get Your Free Quote" | `contact_quote` | First/Last Name, Phone, Email, Service, Urgency, Address, Message |
| Contact page "Send a Quick Message" | `contact_quick` | Name, Email, Phone, Message |

**Every submission does 3 things automatically:**
1. ✅ Saved to SQLite database (`backend/data/inquiries.db`)
2. ✅ Gmail notification sent to you (business owner) with quick Call/Reply buttons
3. ✅ Auto-reply confirmation sent to the customer (if they provided email)

---

## Setup in 5 Minutes

### Step 1 — Create a Gmail App Password

> You need an **App Password**, NOT your regular Gmail password.

1. Go to **https://myaccount.google.com/apppasswords**
2. Make sure **2-Step Verification is ON** on your Google account
3. Click **"Create"** → Name it `MyDrainDR` → Click **Create**
4. Copy the **16-character password** shown (e.g. `abcd efgh ijkl mnop`)

---

### Step 2 — Create Your `.env` File

Inside the `backend/` folder, copy `.env.example` to `.env`:

```bash
cd backend
cp .env.example .env
```

Then edit `.env` with your real values:

```env
GMAIL_USER=youremail@gmail.com      # Gmail that sends & receives
GMAIL_PASS=abcd efgh ijkl mnop      # App Password from Step 1
OWNER_EMAIL=drain.dr8@gmail.com     # Where YOU get inquiry notifications
ADMIN_KEY=change-this-secret        # Secret to view all inquiries via API
PORT=3001
ALLOWED_ORIGIN=*
```

> **Tip:** `GMAIL_USER` and `OWNER_EMAIL` can be the same address, or different.
> For example, send FROM `noreply@gmail.com` but deliver TO `drain.dr8@gmail.com`.

---

### Step 3 — Install & Start the Server

```bash
cd backend
npm install
npm start
```

Server starts at **http://localhost:3001**

The entire site is served from here:
- `http://localhost:3001` → Home page
- `http://localhost:3001/pages/contact.html` → Contact page
- `http://localhost:3001/api/inquiry` → Form submission endpoint (POST)

---

## Viewing Inquiries

### Option A — Admin API (JSON)

```
GET http://localhost:3001/api/admin/inquiries?key=YOUR_ADMIN_KEY
```

Returns all inquiries as JSON, newest first (up to 200).

### Option B — Open the Database File

The database file is at `backend/data/inquiries.db` (auto-created on first run).

Open it with one of these free tools:
- **DB Browser for SQLite** — https://sqlitebrowser.org/ (desktop app)
- **SQLite Viewer** — VS Code extension (search "SQLite Viewer")

---

## Database Schema

```sql
CREATE TABLE inquiries (
  id          INTEGER PRIMARY KEY AUTOINCREMENT,
  created_at  TEXT    NOT NULL DEFAULT (datetime('now')),
  source      TEXT    NOT NULL,   -- homepage | contact_quote | contact_quick
  first_name  TEXT    NOT NULL,
  last_name   TEXT,
  email       TEXT,
  phone       TEXT,
  service     TEXT,
  urgency     TEXT,
  address     TEXT,
  message     TEXT,
  status      TEXT    NOT NULL DEFAULT 'new'  -- new | contacted | closed
);
```

### Useful SQL Queries

```sql
-- New inquiries
SELECT * FROM inquiries WHERE status = 'new' ORDER BY created_at DESC;

-- Today's inquiries
SELECT * FROM inquiries WHERE date(created_at) = date('now');

-- Emergency requests only
SELECT * FROM inquiries WHERE urgency = 'Emergency — right now';

-- Mark as contacted
UPDATE inquiries SET status = 'contacted' WHERE id = 5;
```

---

## Email Previews

### Email YOU Receive (Owner Notification)

- **Subject:** `[New Inquiry] Drain Cleaning — John Smith`
- Emergency inquiries get a 🚨 badge and red emergency label
- Contains: name, phone (clickable), email (clickable), service, urgency, address, message
- Has **"📞 Call Back"** and **"✉️ Reply by Email"** action buttons

### Email CUSTOMER Receives (Auto-Reply)

- **Subject:** `We got your request, John! 🔧 My Drain DR`
- Confirms their service request with a summary
- Reminds them you'll call within 30 minutes
- Shows emergency call number if they need faster help

---

## Production Deployment (VPS / Hosting)

```bash
# Install PM2 process manager
npm install -g pm2

# Start the server
pm2 start backend/server.js --name mydrain

# Auto-restart on server reboot
pm2 save
pm2 startup
```

Update `.env` before going live:
```env
ALLOWED_ORIGIN=https://www.mydraindr.com
```

---

## File Structure

```
mydrain/
├── index.html                 ← Home page (Get a Free Estimate form)
├── pages/
│   ├── contact.html           ← Contact page (2 forms: Free Quote + Quick Message)
│   ├── services.html
│   ├── about.html
│   └── blog.html
├── css/style.css
├── js/main.js
└── backend/
    ├── server.js              ← Main server (Express + Nodemailer + SQLite)
    ├── package.json
    ├── .env.example           ← Template — copy to .env and fill in
    ├── .env                   ← Your real credentials (never commit this!)
    └── data/
        └── inquiries.db       ← Auto-created on first run
```

---

## Troubleshooting

| Problem | Fix |
|---------|-----|
| Email not sending | Make sure 2FA is ON and you're using an App Password, not your Gmail login |
| `EAUTH` error in console | Wrong App Password — regenerate one |
| Form shows "Connection error" | Server isn't running, or wrong port. Run `npm start` |
| Database not found | It's auto-created on first `npm start` — no manual setup needed |
| Rate limit hit | Max 5 submissions per IP per 15 min. Wait or restart server for testing |
