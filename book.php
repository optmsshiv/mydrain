<?php $pageTitle = "Book Now"; ?>
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
  .book-page .reveal{opacity:0;transform:translateY(24px);transition:opacity .65s ease,transform .65s ease;}
  .book-page .reveal.is-visible{opacity:1;transform:none;}
  .book-page .field label{display:block;font-size:12.5px;font-weight:700;color:#334155;margin-bottom:5px;text-transform:uppercase;letter-spacing:0.4px;}
  .book-page .field input,
  .book-page .field select,
  .book-page .field textarea{
    width:100%;padding:12px 14px;border-radius:10px;border:1.5px solid #e2e8f0;
    font-family:'Montserrat',sans-serif;font-size:14px;color:#334155;background:#fff;
    transition:border-color .2s,box-shadow .2s;
  }
  .book-page .field input:focus,
  .book-page .field select:focus,
  .book-page .field textarea:focus{outline:none;border-color:#0EA5E9;box-shadow:0 0 0 3px rgba(14,165,233,0.15);}
  .book-page .field textarea{resize:vertical;min-height:90px;}
</style>
</head>
<body class="book-page">

<?php include 'includes/header.php'; ?>

<!-- BANNER -->
<div class="bg-primary text-white pt-28 pb-14 md:pt-32 md:pb-16 text-center">
  <div class="max-w-3xl mx-auto px-6">
    <div class="flex justify-center gap-2 text-xs text-slate-300 mb-4">
      <a href="index.php" class="hover:text-white transition-colors">Home</a><span>/</span><span class="text-white font-semibold">Book Now</span>
    </div>
    <h1 class="text-3xl md:text-4xl font-extrabold text-white mb-3">Schedule Your Plumbing Service</h1>
    <p class="text-slate-300 text-base">Request service today and a member of our team will contact you as soon as possible.</p>
  </div>
</div>

<!-- TRUST STRIP -->
<section class="bg-neutral border-b border-slate-200 py-5">
  <div class="max-w-6xl mx-auto px-6 flex flex-wrap justify-between gap-5">
    <div class="flex items-center gap-2"><i class="fa-solid fa-bolt text-vorange"></i><span class="text-sm font-semibold text-primary">Fast Response</span></div>
    <div class="flex items-center gap-2"><i class="fa-solid fa-shield-halved text-vblue"></i><span class="text-sm font-semibold text-primary">Licensed &amp; Insured</span></div>
    <div class="flex items-center gap-2"><i class="fa-solid fa-clock text-vviolet"></i><span class="text-sm font-semibold text-primary">24/7 Availability</span></div>
    <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-vgreen"></i><span class="text-sm font-semibold text-primary">Upfront Pricing</span></div>
  </div>
</section>

<!-- MAIN CONTENT -->
<section class="py-16 bg-white">
  <div class="max-w-6xl mx-auto px-6 grid lg:grid-cols-2 gap-12 items-start">

    <!-- LEFT: Info panel -->
    <div class="reveal">
      <span class="text-secondary font-semibold uppercase tracking-widest text-xs">Book Now</span>
      <h2 class="text-3xl font-extrabold text-primary mt-2 mb-5">Get a Technician On The Way</h2>
      <p class="text-slate-600 mb-8 leading-relaxed">Need professional sewer, drain, or plumbing services? Fill out the form and a member of our team will contact you as soon as possible. For emergencies, call us directly.</p>

      <!-- Contact rows -->
      <div class="space-y-4 mb-8">
        <div class="flex items-center gap-4 p-4 bg-neutral rounded-xl border border-slate-200">
          <div class="w-11 h-11 bg-vgreen rounded-xl flex items-center justify-center flex-shrink-0"><i class="fa-solid fa-phone text-white"></i></div>
          <div><div class="text-xs text-slate-400 font-semibold uppercase tracking-wide">Call Us</div><div class="font-bold text-primary text-base">+1 516-402-9213</div></div>
        </div>
        <div class="flex items-center gap-4 p-4 bg-neutral rounded-xl border border-slate-200">
          <div class="w-11 h-11 bg-vblue rounded-xl flex items-center justify-center flex-shrink-0"><i class="fa-solid fa-envelope text-white"></i></div>
          <div><div class="text-xs text-slate-400 font-semibold uppercase tracking-wide">Email Us</div><div class="font-bold text-primary text-base">tbm1789@gmail.com</div></div>
        </div>
        <div class="flex items-center gap-4 p-4 bg-neutral rounded-xl border border-slate-200">
          <div class="w-11 h-11 bg-vviolet rounded-xl flex items-center justify-center flex-shrink-0"><i class="fa-solid fa-location-dot text-white"></i></div>
          <div><div class="text-xs text-slate-400 font-semibold uppercase tracking-wide">Service Area</div><div class="font-bold text-primary text-base">Nassau County, NY</div></div>
        </div>
      </div>

      <!-- Emergency hours card -->
      <div class="rounded-xl p-5 border border-vgreen/40" style="background:linear-gradient(135deg,#d9e5d6,#cfe3ec);">
        <div class="flex items-center gap-3 mb-2">
          <i class="fa-solid fa-truck-fast text-vgreen text-lg"></i>
          <strong class="text-primary font-bold">24/7 Emergency Service Available</strong>
        </div>
        <p class="text-slate-600 text-sm">Day or night, our team is ready to respond — including weekends and holidays.</p>
        <a href="tel:+15164029213" class="inline-flex items-center gap-2 mt-4 bg-vgreen text-white font-bold px-5 py-2.5 rounded-lg hover:shadow-lg transition-all text-sm">
          <i class="fa-solid fa-phone"></i> Call Now — Emergency Line
        </a>
      </div>

      <!-- Services we cover -->
      <div class="mt-8">
        <p class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-3">Services We Cover</p>
        <div class="flex flex-wrap gap-2">
          <?php foreach(['Sewer Line Repair','Hydro Jetting','Camera Inspection','Root Removal','Drain Cleaning','Pipe Repair','Leak Detection','Emergency Plumbing'] as $s): ?>
          <span class="bg-neutral border border-slate-200 text-primary text-xs font-semibold px-3 py-1.5 rounded-full"><?= $s ?></span>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

    <!-- RIGHT: Form -->
    <div class="bg-white border border-slate-200 rounded-2xl p-8 shadow-md reveal">
      <h3 class="text-xl font-bold text-primary mb-1">Service Request Form</h3>
      <p class="text-slate-400 text-sm mb-6">Fill out the form and we'll be in touch shortly.</p>

      <?php if (isset($_GET['success'])): ?>
        <div class="flex items-center gap-3 bg-sage/40 border border-vgreen/40 text-vgreen px-4 py-3 rounded-xl text-sm mb-5">
          <i class="fa-solid fa-circle-check"></i> Thanks! Your request has been received — we'll be in touch shortly.
        </div>
      <?php elseif (!empty($_GET['error'])): ?>
        <div class="flex items-center gap-3 bg-red-50 border border-vred/30 text-vred px-4 py-3 rounded-xl text-sm mb-5">
          <i class="fa-solid fa-triangle-exclamation"></i> <?= htmlspecialchars($_GET['error']) ?>
        </div>
      <?php endif; ?>

      <form action="includes/handle_booking.php" method="POST" class="space-y-4">
        <div class="grid grid-cols-2 gap-4">
          <div class="field"><label>Name</label><input type="text" name="name" placeholder="John Smith" required></div>
          <div class="field"><label>Phone Number</label><input type="tel" name="phone" placeholder="(516) 000-0000" required></div>
        </div>
        <div class="field"><label>Email Address</label><input type="email" name="email" placeholder="you@email.com"></div>
        <div class="field"><label>Service Needed</label>
          <select name="service">
            <option>Sewer Line Repair</option>
            <option>Hydro Jetting</option>
            <option>Camera Inspection</option>
            <option>Drain Cleaning</option>
            <option>Root Removal</option>
            <option>Pipe Repair</option>
            <option>Leak Detection</option>
            <option>Emergency Plumbing</option>
          </select>
        </div>
        <div class="field"><label>Property Address</label><input type="text" name="address" placeholder="Street, City, NY"></div>
        <div class="field"><label>Describe Your Issue</label><textarea name="message" placeholder="Tell us what's going on..."></textarea></div>
        <div class="field"><label>Preferred Appointment Time</label><input type="text" name="preferred_time" placeholder="e.g. Tomorrow morning, ASAP"></div>
        <button type="submit" class="w-full bg-vorange text-white font-bold py-4 rounded-xl hover:shadow-lg hover:-translate-y-0.5 transition-all text-base">
          <i class="fa-solid fa-calendar-check mr-2"></i> Request Service
        </button>
        <p class="text-xs text-slate-400 text-center">We'll confirm within 1 hour during business hours. For emergencies call directly.</p>
      </form>
    </div>
  </div>
</section>

<!-- FINAL CTA -->
<section class="py-12 text-white" style="background:linear-gradient(120deg,#F97316 0%,#E11D48 100%);">
  <div class="max-w-6xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-8 text-center md:text-left">
    <div>
      <h2 class="text-2xl md:text-3xl font-bold mb-1">Plumbing emergency right now?</h2>
      <p class="text-white/85">Don't wait — call us directly for immediate dispatch 24/7.</p>
    </div>
    <a href="tel:+15164029213" class="bg-white text-vorange font-bold px-8 py-4 rounded-xl hover:shadow-xl transition-all flex items-center gap-3 text-lg whitespace-nowrap">
      <i class="fa-solid fa-phone"></i> +1 516-402-9213
    </a>
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