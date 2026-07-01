<?php $pageTitle = "Contact"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/head.php'; ?>
<script src="https://cdn.tailwindcss.com"></script>
<script>
  tailwind.config = {
    theme: {
      extend: {
        colors: {
          primary: '#334155', secondary: '#94A3B8',
          neutral: '#F8F9FA',
          vorange: '#F97316', vgreen: '#16A34A', vred: '#E11D48',
          vblue: '#0EA5E9', vviolet: '#8B5CF6', vteal: '#0D9488'
        },
        fontFamily: { sans: ['Montserrat', 'sans-serif'] }
      }
    }
  }
</script>
<style>
  .contact-page .reveal{opacity:0;transform:translateY(24px);transition:opacity .65s ease,transform .65s ease;}
  .contact-page .reveal.is-visible{opacity:1;transform:none;}
  .contact-page .field label{display:block;font-size:12.5px;font-weight:700;color:#334155;margin-bottom:5px;text-transform:uppercase;letter-spacing:0.4px;}
  .contact-page .field input,
  .contact-page .field textarea{
    width:100%;padding:12px 14px;border-radius:10px;border:1.5px solid #e2e8f0;
    font-family:'Montserrat',sans-serif;font-size:14px;color:#334155;background:#fff;
    transition:border-color .2s,box-shadow .2s;
  }
  .contact-page .field input:focus,
  .contact-page .field textarea:focus{outline:none;border-color:#F97316;box-shadow:0 0 0 3px rgba(249,115,22,0.15);}
  .contact-page .field textarea{resize:vertical;min-height:100px;}

  /* Animated map */
  .contact-page .map-card{
    position:relative;
    background:radial-gradient(ellipse 140% 120% at 75% 15%, #2f6fa3 0%, #3a82bb 35%, #4a93c9 60%, #5fa3d2 100%);
    transition:transform .4s ease, box-shadow .4s ease;
  }
  .contact-page .map-card:hover{transform:translateY(-4px);box-shadow:0 20px 40px -10px rgba(51,65,85,0.25);}
  .contact-page .map-svg{position:absolute;inset:0;width:100%;height:100%;}
  .contact-page .map-pin-wrap{position:relative;display:flex;align-items:center;justify-content:center;}
  .contact-page .map-pin-radar{
    position:absolute;width:60px;height:60px;border-radius:50%;
    background:rgba(255,255,255,0.3);
    animation:ctRadar 2.4s ease-out infinite;
  }
  .contact-page .map-pin-radar.delay{animation-delay:1.2s;}
  @keyframes ctRadar{0%{transform:scale(0.3);opacity:0.7;}100%{transform:scale(2.4);opacity:0;}}
  .contact-page .map-pin{
    position:relative;z-index:2;
    animation:ctBounce 2.4s ease-in-out infinite;
    filter:drop-shadow(0 4px 6px rgba(0,0,0,0.4));
  }
  @keyframes ctBounce{0%,100%{transform:translateY(0);}50%{transform:translateY(-9px);}}
  .contact-page .map-dot{
    position:absolute;width:8px;height:8px;border-radius:50%;background:#fff;
    box-shadow:0 0 0 3px rgba(255,255,255,0.4);z-index:1;
  }
</style>
</head>
<body class="contact-page">

<?php include 'includes/header.php'; ?>

<!-- BANNER -->
<div class="bg-primary text-white pt-28 pb-14 md:pt-32 md:pb-16 text-center">
  <div class="max-w-3xl mx-auto px-6">
    <div class="flex justify-center gap-2 text-xs text-slate-300 mb-4">
      <a href="index.php" class="hover:text-white transition-colors">Home</a><span>/</span><span class="text-white font-semibold">Contact</span>
    </div>
    <h1 class="text-3xl md:text-4xl font-extrabold text-white mb-3">Get In Touch</h1>
    <p class="text-slate-300 text-base">Questions about a sewer, drain, or plumbing issue? Reach out — we're available 24/7 for emergencies.</p>
  </div>
</div>

<!-- CONTACT CARDS -->
<section class="py-12 bg-neutral border-b border-slate-200">
  <div class="max-w-6xl mx-auto px-6 grid sm:grid-cols-2 md:grid-cols-4 gap-5 reveal">
    <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200 text-center hover:-translate-y-1 hover:shadow-md transition-all">
      <div class="w-12 h-12 bg-vgreen rounded-full flex items-center justify-center mx-auto mb-3"><i class="fa-solid fa-phone text-white text-lg"></i></div>
      <h4 class="font-bold text-primary mb-1">Call Us</h4>
      <a href="tel:+15164029213" class="text-sm text-slate-500 hover:text-vgreen transition-colors">+1 516-402-9213</a>
    </div>
    <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200 text-center hover:-translate-y-1 hover:shadow-md transition-all">
      <div class="w-12 h-12 bg-vblue rounded-full flex items-center justify-center mx-auto mb-3"><i class="fa-solid fa-envelope text-white text-lg"></i></div>
      <h4 class="font-bold text-primary mb-1">Email Us</h4>
      <a href="mailto:tbm1789@gmail.com" class="text-sm text-slate-500 hover:text-vblue transition-colors">tbm1789@gmail.com</a>
    </div>
    <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200 text-center hover:-translate-y-1 hover:shadow-md transition-all">
      <div class="w-12 h-12 bg-vviolet rounded-full flex items-center justify-center mx-auto mb-3"><i class="fa-solid fa-location-dot text-white text-lg"></i></div>
      <h4 class="font-bold text-primary mb-1">Service Area</h4>
      <p class="text-sm text-slate-500">Nassau County, NY</p>
    </div>
    <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200 text-center hover:-translate-y-1 hover:shadow-md transition-all">
      <div class="w-12 h-12 bg-vorange rounded-full flex items-center justify-center mx-auto mb-3"><i class="fa-solid fa-clock text-white text-lg"></i></div>
      <h4 class="font-bold text-primary mb-1">Hours</h4>
      <p class="text-sm text-slate-500">Mon–Fri 7am–7pm<br>Sat 8am–5pm<br><span class="text-vgreen font-semibold">Emergency: 24/7</span></p>
    </div>
  </div>
</section>

<!-- MAP + FORM -->
<section class="py-16 bg-white">
  <div class="max-w-6xl mx-auto px-6 grid lg:grid-cols-2 gap-12 items-start">

    <!-- MAP SIDE -->
    <div class="space-y-6 reveal">
      <div>
        <span class="text-secondary font-semibold uppercase tracking-widest text-xs">Where We Serve</span>
        <h2 class="text-3xl font-extrabold text-primary mt-2 mb-4">Nassau County Service Hub</h2>
        <p class="text-slate-600 leading-relaxed">Based in Nassau County, NY — we dispatch fast to Franklin Square, Elmont, Valley Stream, Floral Park, New Hyde Park, Queens Village, and surrounding areas.</p>
      </div>

      <!-- Animated map -->
      <div class="relative w-full map-card rounded-2xl overflow-hidden border-4 border-white shadow-xl" style="height:280px;">
        <svg class="map-svg" viewBox="0 0 500 280" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
          <path d="M0,30 C70,12 150,50 210,38 C280,24 330,62 390,52 C440,44 470,72 500,65 L500,280 L0,280 Z" fill="#7fa66a" opacity="0.5"/>
          <path d="M0,60 C60,44 130,80 185,66 C250,50 295,88 355,78 C405,70 455,95 500,88 L500,280 L0,280 Z" fill="#8fb578" opacity="0.55"/>
          <g stroke="#ffffff" stroke-linecap="round" opacity="0.8">
            <path d="M30,250 L140,140" stroke-width="2"/>
            <path d="M75,270 L220,148" stroke-width="2.5"/>
            <path d="M130,275 L290,165" stroke-width="3"/>
            <path d="M180,275 L360,185" stroke-width="2"/>
            <path d="M0,170 L380,95" stroke-width="1.5"/>
            <path d="M0,210 L420,125" stroke-width="1.5"/>
            <path d="M85,145 L55,275" stroke-width="1.2"/>
            <path d="M155,138 L120,275" stroke-width="1.2"/>
            <path d="M225,148 L190,278" stroke-width="1.2"/>
            <path d="M295,162 L262,278" stroke-width="1.2"/>
            <path d="M355,178 L325,278" stroke-width="1.2"/>
          </g>
          <path d="M0,130 C120,90 270,100 500,55" stroke="#fff" stroke-width="3.5" fill="none" opacity="0.9"/>
        </svg>
        <div class="map-dot" style="top:40%;left:28%;"></div>
        <div class="map-dot" style="top:52%;left:50%;"></div>
        <div class="map-dot" style="top:62%;left:36%;"></div>
        <div class="map-dot" style="top:68%;left:65%;"></div>
        <div class="absolute inset-0 flex items-center justify-center">
          <div class="map-pin-wrap">
            <div class="map-pin-radar"></div>
            <div class="map-pin-radar delay"></div>
            <i class="fa-solid fa-location-dot map-pin text-white text-4xl"></i>
          </div>
        </div>
        <div class="absolute bottom-3 left-3 right-3 bg-white/90 backdrop-blur-md px-3 py-2 rounded-xl">
          <p class="text-xs text-slate-600 text-center">Franklin Square • Elmont • Valley Stream • Floral Park • New Hyde Park • Queens Village</p>
        </div>
      </div>

      <!-- Quick info -->
      <div class="grid grid-cols-2 gap-4">
        <div class="bg-neutral rounded-xl p-4 border border-slate-200">
          <p class="text-xs font-bold text-slate-400 uppercase tracking-wide mb-1">Response Time</p>
          <p class="font-bold text-primary">Within 1 hour</p>
          <p class="text-xs text-slate-500">for emergencies</p>
        </div>
        <div class="bg-neutral rounded-xl p-4 border border-slate-200">
          <p class="text-xs font-bold text-slate-400 uppercase tracking-wide mb-1">Availability</p>
          <p class="font-bold text-vgreen">24/7</p>
          <p class="text-xs text-slate-500">including holidays</p>
        </div>
      </div>

      <div class="bg-neutral border border-slate-200 rounded-xl p-5">
        <p class="text-sm font-semibold text-primary mb-3">Need to schedule a service? Use our full booking form instead:</p>
        <a href="book.php" class="inline-flex items-center gap-2 bg-vorange text-white font-bold px-5 py-2.5 rounded-lg hover:shadow-md transition-all text-sm">
          <i class="fa-solid fa-calendar-check"></i> Go to Book Now
        </a>
      </div>
    </div>

    <!-- FORM SIDE -->
    <div class="bg-white border border-slate-200 rounded-2xl p-8 shadow-md reveal">
      <h3 class="text-xl font-bold text-primary mb-1">Send a Message</h3>
      <p class="text-slate-400 text-sm mb-6">Quick question or general enquiry? We'll get back to you within the same day.</p>

      <?php if (isset($_GET['success'])): ?>
        <div class="flex items-center gap-3 bg-green-50 border border-vgreen/30 text-vgreen px-4 py-3 rounded-xl text-sm mb-5">
          <i class="fa-solid fa-circle-check"></i> Thanks! Your message has been received — we'll be in touch soon.
        </div>
      <?php endif; ?>

      <form action="includes/handle_booking.php" method="POST" class="space-y-4">
        <div class="grid grid-cols-2 gap-4">
          <div class="field"><label>Name</label><input type="text" name="name" placeholder="John Smith" required></div>
          <div class="field"><label>Phone</label><input type="tel" name="phone" placeholder="(516) 000-0000" required></div>
        </div>
        <div class="field"><label>Email Address</label><input type="email" name="email" placeholder="you@email.com"></div>
        <div class="field"><label>Your Message</label><textarea name="message" placeholder="How can we help? Describe your issue or ask a question..."></textarea></div>

        <!-- Preferred contact method -->
        <div>
          <p class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-2">Preferred Contact Method</p>
          <div class="flex gap-3 flex-wrap">
            <label class="flex items-center gap-2 cursor-pointer text-sm font-semibold text-primary">
              <input type="radio" name="contact_pref" value="phone" checked class="accent-vorange"> Phone
            </label>
            <label class="flex items-center gap-2 cursor-pointer text-sm font-semibold text-primary">
              <input type="radio" name="contact_pref" value="email" class="accent-vorange"> Email
            </label>
            <label class="flex items-center gap-2 cursor-pointer text-sm font-semibold text-primary">
              <input type="radio" name="contact_pref" value="whatsapp" class="accent-vorange"> WhatsApp
            </label>
          </div>
        </div>

        <button type="submit" class="w-full bg-vblue text-white font-bold py-4 rounded-xl hover:shadow-lg hover:-translate-y-0.5 transition-all text-base">
          <i class="fa-solid fa-paper-plane mr-2"></i> Send Message
        </button>
        <p class="text-xs text-slate-400 text-center">We respond to all messages within the same business day.</p>
      </form>
    </div>
  </div>
</section>

<!-- FINAL CTA -->
<section class="py-12 text-white" style="background:linear-gradient(120deg,#0EA5E9 0%,#0D9488 100%);">
  <div class="max-w-6xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-8 text-center md:text-left">
    <div>
      <h2 class="text-2xl md:text-3xl font-bold mb-1">Need to book a full service appointment?</h2>
      <p class="text-white/85">Use our detailed service request form with service type, address, and scheduling.</p>
    </div>
    <div class="flex flex-wrap gap-3 justify-center">
      <a href="book.php" class="bg-white text-primary font-bold px-7 py-3.5 rounded-xl hover:shadow-lg transition-all flex items-center gap-2">
        <i class="fa-solid fa-calendar-check"></i> Book Now
      </a>
      <a href="tel:+15164029213" class="bg-vorange text-white font-bold px-7 py-3.5 rounded-xl hover:shadow-lg transition-all flex items-center gap-2">
        <i class="fa-solid fa-phone"></i> Call Us
      </a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
<script src="assets/js/main.js"></script>
<script>
  document.querySelectorAll('.reveal').forEach(el => {
    new IntersectionObserver(([e]) => { if(e.isIntersecting){el.classList.add('is-visible');} }, {threshold:.12}).observe(el);
  });
</script>
</body>
</html>