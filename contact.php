<?php $pageTitle = "Contact"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/head.php'; ?>
</head>
<body>

<?php include 'includes/header.php'; ?>

<div class="page-banner">
  <div class="container">
    <div class="breadcrumb"><a href="index.php">Home</a> / Contact</div>
    <h1>Get In Touch</h1>
    <p>Questions about a sewer, drain, or plumbing issue? Reach out — we're available 24/7 for emergencies.</p>
  </div>
</div>

<section style="padding-top:60px;">
  <div class="container">
    <div class="contact-cards">
      <div class="contact-card">
        <div class="ico"><i class="fa-solid fa-phone"></i></div>
        <h4>Call Us</h4>
        <p><a href="tel:+15164029213" style="color:var(--text-muted);">+1 516-402-9213</a></p>
      </div>
      <div class="contact-card">
        <div class="ico"><i class="fa-solid fa-envelope"></i></div>
        <h4>Email Us</h4>
        <p><a href="mailto:tbm1789@gmail.com" style="color:var(--text-muted);">tbm1789@gmail.com</a></p>
      </div>
      <div class="contact-card">
        <div class="ico"><i class="fa-solid fa-location-dot"></i></div>
        <h4>Service Area</h4>
        <p>Nassau County, NY</p>
      </div>
    </div>
  </div>
</section>

<section class="book" style="padding-top:0;">
  <div class="container book-wrap">
    <div class="book-info">
      <span class="eyebrow-dark">Send a Message</span>
      <h2>We'd Love to Hear From You</h2>
      <p>Fill out the form and our team will get back to you shortly. For urgent sewer or plumbing emergencies, please call us directly.</p>
      <div class="hours-card">
        <strong>24/7 Emergency Service Available</strong>
        <span>Day or night, we're ready to respond.</span>
      </div>
    </div>

    <div class="form-card">
      <h3>Contact Form</h3>
      <p class="sub">Prefer to book a service instead? <a href="book.php" style="color:var(--secondary);font-weight:600;">Go to Book Now</a>.</p>

      <?php if (isset($_GET['success'])): ?>
        <p style="background:var(--pastel-sage);color:#3f5c45;padding:12px 14px;border-radius:8px;font-size:14px;margin-bottom:16px;">
          <i class="fa-solid fa-circle-check"></i> Thanks! Your message has been received.
        </p>
      <?php endif; ?>

      <form action="includes/handle_booking.php" method="POST">
        <div class="form-row">
          <div class="field"><label>Name</label><input type="text" name="name" placeholder="John Smith" required></div>
          <div class="field"><label>Phone Number</label><input type="tel" name="phone" placeholder="(516) 000-0000" required></div>
        </div>
        <div class="field"><label>Email Address</label><input type="email" name="email" placeholder="you@email.com"></div>
        <div class="field"><label>Your Message</label><textarea name="message" placeholder="How can we help?"></textarea></div>
        <button class="submit-btn" type="submit">Send Message</button>
      </form>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

<script src="assets/js/main.js"></script>
</body>
</html>
