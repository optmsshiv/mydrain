<?php $pageTitle = "Services"; ?>
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
          primary: '#334155',
          secondary: '#94A3B8',
          tertiary: '#E2E8F0',
          neutral: '#F8F9FA',
          peach: '#F3DFD2',
          sky: '#CFE3EC',
          sage: '#D9E5D6',
          lavender: '#D8DEEF',
          rose: '#F0DCE0'
        },
        fontFamily: {
          sans: ['Montserrat', 'sans-serif']
        }
      }
    }
  }
</script>
<style>
  /* Scoped tweaks for this Tailwind-built page only */
  .svc-page summary::-webkit-details-marker{display:none;}
  .svc-page details[open] .chev{transform:rotate(180deg);}
  .img-placeholder{
    background:repeating-linear-gradient(135deg, var(--neutral) 0 14px, #eef1f4 14px 28px);
    display:flex;align-items:center;justify-content:center;color:#94a3b8;font-size:13px;text-align:center;
    border:1.5px dashed #cbd5e1;
  }
  .svc-page .before-after-slider{position:relative;overflow:hidden;border-radius:1rem;cursor:ew-resize;}
  .svc-page .slider-divider{position:absolute;top:0;bottom:0;width:3px;background:#fff;left:50%;transform:translateX(-50%);z-index:10;}
  .svc-page .slider-handle{
    position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:40px;height:40px;background:#fff;
    border-radius:50%;display:flex;align-items:center;justify-content:center;box-shadow:0 4px 6px rgba(0,0,0,.2);z-index:11;color:#334155;
  }
</style>
</head>
<body class="svc-page">

<?php include 'includes/header.php'; ?>

<!-- HERO -->
<section class="relative overflow-hidden" style="padding-top:120px;padding-bottom:64px;">
  <div class="absolute inset-0 z-0 img-placeholder" style="background-image:url('assets/images/hero.png'); background-size:cover; background-position:center;">
    <span><i class="fa-solid fa-image text-2xl block mb-2"></i>Replace with hero photo<br>(technicians / service van)</span>
  </div>
  <div class="absolute inset-0 z-[1]" style="background:linear-gradient(90deg, #F8F9FA 0%, rgba(248,249,250,0.85) 45%, rgba(248,249,250,0.1) 100%);"></div>

  <div class="relative z-10 max-w-6xl mx-auto px-6">
    <div class="max-w-xl">
      <div class="inline-flex items-center gap-2 px-4 py-2 bg-white rounded-full mb-5 shadow-sm">
        <i class="fa-solid fa-circle-check text-primary text-sm"></i>
        <span class="text-sm font-semibold text-primary">Nassau County's Premier Sewer Experts</span>
      </div>
      <h1 class="text-4xl md:text-5xl font-extrabold text-primary mb-5 leading-tight">Professional Sewer, Drain &amp; Plumbing Services</h1>
      <p class="text-base text-slate-600 mb-7 leading-relaxed">Precision plumbing solutions for Nassau County homeowners. From emergency root removal to complete pipe replacement, we combine advanced technology with master craftsmanship.</p>
      <div class="flex flex-wrap gap-3 mb-8">
        <a href="book.php" class="bg-peach text-[#7a4a22] font-semibold px-6 py-3 rounded-xl shadow hover:-translate-y-0.5 transition-all">Book Service Now</a>
        <a href="tel:+15164029213" class="bg-sky text-[#2c4b56] font-semibold px-6 py-3 rounded-xl shadow hover:-translate-y-0.5 transition-all flex items-center gap-2">
          <i class="fa-solid fa-phone"></i> Call Now
        </a>
      </div>
      <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <div class="flex items-center gap-2"><i class="fa-solid fa-shield-halved text-primary"></i><span class="text-xs font-semibold text-slate-700">Licensed &amp; Insured</span></div>
        <div class="flex items-center gap-2"><i class="fa-solid fa-bolt text-primary"></i><span class="text-xs font-semibold text-slate-700">Fast Response</span></div>
        <div class="flex items-center gap-2"><i class="fa-solid fa-id-badge text-primary"></i><span class="text-xs font-semibold text-slate-700">Experienced Pros</span></div>
        <div class="flex items-center gap-2"><i class="fa-solid fa-house-circle-exclamation text-primary"></i><span class="text-xs font-semibold text-slate-700">24/7 Emergency</span></div>
      </div>
    </div>
  </div>
</section>

<!-- SERVICES OVERVIEW INTRO -->
<section class="py-16 bg-white">
  <div class="max-w-3xl mx-auto px-6 text-center">
    <h2 class="text-3xl font-extrabold text-primary mb-5">Complete Plumbing &amp; Sewer Solutions</h2>
    <p class="text-slate-600 leading-relaxed">At Trailblazer Plumbing, we treat your infrastructure as a vital part of your home. Our approach blends honest service with reliable diagnostic tools to ensure every pipe is in good shape and every drain flows freely. We don't just fix problems — we provide lasting solutions tailored to the plumbing systems found throughout Nassau County.</p>
  </div>

  <!-- Service 1: Sewer Line Repair -->
  <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center mt-16">
    <img src="assets/images/hero.png" 
     alt="Sewer line repair technician at work" 
     class="rounded-2xl shadow-xl aspect-[3/2] object-cover w-full">
    <div class="space-y-4 order-1 md:order-2">
      <span class="text-secondary font-semibold uppercase tracking-widest text-xs">Repair Services</span>
      <h3 class="text-2xl font-bold text-primary">Sewer Line Repair</h3>
      <p class="text-slate-600">Persistent clogs or wet spots in your yard? Our experts use trenchless and traditional repair methods to restore your system with minimal disruption.</p>
      <ul class="space-y-2">
        <li class="flex items-center gap-2 text-slate-700"><i class="fa-solid fa-check text-emerald-600/80"></i> Trenchless repair options</li>
        <li class="flex items-center gap-2 text-slate-700"><i class="fa-solid fa-check text-emerald-600/80"></i> Advanced excavation technology</li>
        <li class="flex items-center gap-2 text-slate-700"><i class="fa-solid fa-check text-emerald-600/80"></i> Long-term structural integrity</li>
      </ul>
      <a href="book.php" class="inline-block bg-peach text-[#7a4a22] font-semibold px-5 py-2.5 rounded-lg hover:opacity-90 transition-all">Request Service</a>
    </div>
  </div>

  <!-- Service 2: Hydro Jetting -->
  <div class="bg-neutral py-16 mt-16">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">
      <div class="space-y-4">
        <span class="text-secondary font-semibold uppercase tracking-widest text-xs">Maintenance</span>
        <h3 class="text-2xl font-bold text-primary">Hydro Jetting</h3>
        <p class="text-slate-600">High-pressure water cleaning that blasts through the toughest grease, scale, and debris, leaving your pipes like new.</p>
        <ul class="space-y-2">
          <li class="flex items-center gap-2 text-slate-700"><i class="fa-solid fa-check text-emerald-600/80"></i> High-pressure cleaning power</li>
          <li class="flex items-center gap-2 text-slate-700"><i class="fa-solid fa-check text-emerald-600/80"></i> Chemical-free process</li>
          <li class="flex items-center gap-2 text-slate-700"><i class="fa-solid fa-check text-emerald-600/80"></i> Effective for all pipe diameters</li>
        </ul>
        <a href="book.php" class="inline-block bg-primary text-white font-semibold px-5 py-2.5 rounded-lg hover:opacity-90 transition-all">Schedule Hydro Jetting</a>
      </div>
      <img src="assets/images/hydro_jetting.png" 
     alt="Sewer line repair technician at work" 
     class="rounded-2xl shadow-xl aspect-[3/2] object-cover w-full">
    </div>
  </div>

  <!-- Service 3: Sewer Camera Inspection -->
  <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center mt-16">
    <img src="assets/images/sewer_camera_inspection.png" 
     alt="Sewer line repair technician at work" 
     class="rounded-2xl shadow-xl aspect-[3/2] object-cover w-full">
    <div class="space-y-4 order-1 md:order-2">
      <span class="text-secondary font-semibold uppercase tracking-widest text-xs">Diagnostics</span>
      <h3 class="text-2xl font-bold text-primary">Sewer Camera Inspection</h3>
      <p class="text-slate-600">No more guessing. Our HD diagnostic cameras provide a real-time visual of your internal pipe conditions to pinpoint issues exactly.</p>
      <ul class="space-y-2">
        <li class="flex items-center gap-2 text-slate-700"><i class="fa-solid fa-check text-emerald-600/80"></i> High-definition video recording</li>
        <li class="flex items-center gap-2 text-slate-700"><i class="fa-solid fa-check text-emerald-600/80"></i> Precision location tracking</li>
        <li class="flex items-center gap-2 text-slate-700"><i class="fa-solid fa-check text-emerald-600/80"></i> Comprehensive inspection reports</li>
      </ul>
      <a href="book.php" class="inline-block bg-peach text-[#7a4a22] font-semibold px-5 py-2.5 rounded-lg hover:opacity-90 transition-all">Book Inspection</a>
    </div>
  </div>

  <!-- Service 4: Root Removal -->
  <div class="bg-neutral py-16 mt-16">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">
      <div class="space-y-4">
        <span class="text-secondary font-semibold uppercase tracking-widest text-xs">Specialized</span>
        <h3 class="text-2xl font-bold text-primary">Root Removal</h3>
        <p class="text-slate-600">Invasive tree roots are a leading cause of sewer failure in Nassau County. We use mechanical and chemical solutions to clear your line completely.</p>
        <ul class="space-y-2">
          <li class="flex items-center gap-2 text-slate-700"><i class="fa-solid fa-check text-emerald-600/80"></i> Mechanical root cutting blades</li>
          <li class="flex items-center gap-2 text-slate-700"><i class="fa-solid fa-check text-emerald-600/80"></i> Root-inhibiting treatments</li>
          <li class="flex items-center gap-2 text-slate-700"><i class="fa-solid fa-check text-emerald-600/80"></i> Preventive maintenance plans</li>
        </ul>
        <a href="book.php" class="inline-block bg-primary text-white font-semibold px-5 py-2.5 rounded-lg hover:opacity-90 transition-all">Get Root Removal Service</a>
      </div>
      <div class="img-placeholder rounded-2xl shadow-xl aspect-[3/2]" data-replace="Root removal photo">
        <span><i class="fa-solid fa-image text-2xl block mb-2"></i>Root Removal photo</span>
      </div>
    </div>
  </div>

  <!-- Service 5-7: small grid -->
  <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-3 gap-6 mt-16">
    <div class="bg-white border border-slate-200 p-5 rounded-2xl space-y-3 shadow-sm">
      <img src="assets/images/drain_cleaning.png" 
     alt="Sewer line repair technician at work" 
     class="rounded-2xl shadow-xl aspect-[3/2] object-cover w-full">
      <h4 class="text-lg font-bold text-primary">Drain Cleaning</h4>
      <p class="text-sm text-slate-500">Quick relief for stubborn sinks and slow tubs.</p>
      <a href="book.php" class="text-secondary font-semibold text-sm hover:underline">Book Drain Cleaning →</a>
    </div>
    <div class="bg-white border border-slate-200 p-5 rounded-2xl space-y-3 shadow-sm">
      <img src="assets/images/pipe_repair.png" 
     alt="Sewer line repair technician at work" 
     class="rounded-2xl shadow-xl aspect-[3/2] object-cover w-full">
      <h4 class="text-lg font-bold text-primary">Pipe Repair</h4>
      <p class="text-sm text-slate-500">Expert replacement and repair for all pipe types.</p>
      <a href="book.php" class="text-secondary font-semibold text-sm hover:underline">Request Repair →</a>
    </div>
    <div class="bg-white border border-slate-200 p-5 rounded-2xl space-y-3 shadow-sm">
      <img src="assets/images/leak_detection.png" 
     alt="Sewer line repair technician at work" 
     class="rounded-2xl shadow-xl aspect-[3/2] object-cover w-full">
      <h4 class="text-lg font-bold text-primary">Leak Detection</h4>
      <p class="text-sm text-slate-500">Electronic precision to find hidden water leaks.</p>
      <a href="book.php" class="text-secondary font-semibold text-sm hover:underline">Schedule Detection →</a>
    </div>
  </div>

  <!-- Emergency Plumbing -->
  <div class="bg-primary text-white py-16 mt-16">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">
      <div class="space-y-4">
        <div class="inline-block bg-rose text-[#7a3340] px-3 py-1 rounded text-xs font-bold tracking-wide">URGENT</div>
        <h3 class="text-2xl font-bold text-white">24/7 Emergency Plumbing</h3>
        <p class="text-slate-300">Burst pipes and major sewage backups don't wait for business hours. Our rapid response team is ready across Nassau County for immediate dispatch.</p>
        <a class="inline-flex items-center gap-2 bg-peach text-[#7a4a22] px-6 py-3 rounded-xl font-bold hover:scale-105 transition-transform" href="tel:+15164029213">
          <i class="fa-solid fa-phone"></i> Call Emergency Team
        </a>
      </div>
      <div class="img-placeholder rounded-2xl aspect-[3/2]" style="border-color:rgba(255,255,255,0.25);color:rgba(255,255,255,0.6);background:rgba(255,255,255,0.05);" data-replace="Emergency response truck photo">
        <span><i class="fa-solid fa-image text-2xl block mb-2"></i>Emergency response photo</span>
      </div>
    </div>
  </div>
</section>

<!-- BEFORE / AFTER -->
<section class="py-16 bg-white">
  <div class="max-w-6xl mx-auto px-6">
    <div class="text-center mb-10">
      <h2 class="text-3xl font-extrabold text-primary mb-2">See The Difference</h2>
      <p class="text-slate-500">Real results from our hydro jetting and pipe cleaning services.</p>
    </div>
    <div class="max-w-3xl mx-auto before-after-slider h-[420px]" id="sliderContainer">
      <div class="absolute inset-0 img-placeholder" style="border:none;background:#1f2733;color:#94a3b8;" data-replace="AFTER photo">
        <span><i class="fa-solid fa-image text-2xl block mb-2"></i>AFTER photo</span>
      </div>
      <div class="absolute inset-0 img-placeholder" id="beforeImage" style="border:none;width:50%;background:#3a3a3a;color:#cbd5e1;" data-replace="BEFORE photo">
        <span><i class="fa-solid fa-image text-2xl block mb-2"></i>BEFORE photo</span>
      </div>
      <div class="slider-divider" id="sliderControl" style="left:50%;">
        <div class="slider-handle"><i class="fa-solid fa-left-right"></i></div>
      </div>
      <div class="absolute bottom-4 left-4 bg-black/50 text-white px-3 py-1 rounded-full text-xs font-semibold z-20">BEFORE</div>
      <div class="absolute bottom-4 right-4 bg-black/50 text-white px-3 py-1 rounded-full text-xs font-semibold z-20">AFTER</div>
    </div>
  </div>
</section>

<!-- WHY CHOOSE -->
<section class="py-16 bg-neutral">
  <div class="max-w-6xl mx-auto px-6">
    <div class="text-center mb-10">
      <h2 class="text-3xl font-extrabold text-primary">Why Homeowners Trust Trailblazer</h2>
    </div>
    <div class="grid md:grid-cols-4 gap-6">
      <div class="bg-white p-7 rounded-2xl text-center space-y-3 shadow-sm">
        <div class="w-16 h-16 bg-sky rounded-full flex items-center justify-center mx-auto"><i class="fa-solid fa-tools text-primary text-2xl"></i></div>
        <h4 class="text-lg font-bold text-primary">Advanced Equipment</h4>
        <p class="text-sm text-slate-500">We invest in the latest diagnostic cameras and high-pressure jetting tech.</p>
      </div>
      <div class="bg-white p-7 rounded-2xl text-center space-y-3 shadow-sm">
        <div class="w-16 h-16 bg-peach rounded-full flex items-center justify-center mx-auto"><i class="fa-solid fa-people-group text-primary text-2xl"></i></div>
        <h4 class="text-lg font-bold text-primary">Experienced Team</h4>
        <p class="text-sm text-slate-500">Our plumbers are background checked and continuously trained.</p>
      </div>
      <div class="bg-white p-7 rounded-2xl text-center space-y-3 shadow-sm">
        <div class="w-16 h-16 bg-lavender rounded-full flex items-center justify-center mx-auto"><i class="fa-solid fa-stopwatch text-primary text-2xl"></i></div>
        <h4 class="text-lg font-bold text-primary">Fast Response</h4>
        <p class="text-sm text-slate-500">We respect your time — punctual arrivals and efficient work.</p>
      </div>
      <div class="bg-white p-7 rounded-2xl text-center space-y-3 shadow-sm">
        <div class="w-16 h-16 bg-sage rounded-full flex items-center justify-center mx-auto"><i class="fa-solid fa-certificate text-primary text-2xl"></i></div>
        <h4 class="text-lg font-bold text-primary">Guaranteed Work</h4>
        <p class="text-sm text-slate-500">We stand by our repairs with reliable service warranties.</p>
      </div>
    </div>
  </div>
</section>

<!-- PROCESS -->
<section class="py-16 bg-white overflow-hidden">
  <div class="max-w-6xl mx-auto px-6">
    <h2 class="text-3xl font-extrabold text-primary text-center mb-14">Our Professional Process</h2>
    <div class="relative">
      <div class="hidden md:block absolute top-12 left-0 w-full h-0.5 bg-slate-200 z-0"></div>
      <div class="grid md:grid-cols-5 gap-8 relative z-10">
        <div class="text-center group">
          <div class="w-20 h-20 bg-white border-4 border-primary rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
            <span class="font-bold text-primary">01</span>
          </div>
          <h4 class="font-bold text-primary mb-1">Inspection</h4>
          <p class="text-xs text-slate-500">Diagnostic camera overview to see the real issue.</p>
        </div>
        <div class="text-center group">
          <div class="w-20 h-20 bg-white border-4 border-primary rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
            <span class="font-bold text-primary">02</span>
          </div>
          <h4 class="font-bold text-primary mb-1">Diagnosis</h4>
          <p class="text-xs text-slate-500">Detailed explanation and upfront pricing options.</p>
        </div>
        <div class="text-center group">
          <div class="w-20 h-20 bg-white border-4 border-primary rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
            <span class="font-bold text-primary">03</span>
          </div>
          <h4 class="font-bold text-primary mb-1">Repair</h4>
          <p class="text-xs text-slate-500">Execution with precision and clean equipment.</p>
        </div>
        <div class="text-center group">
          <div class="w-20 h-20 bg-white border-4 border-primary rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
            <span class="font-bold text-primary">04</span>
          </div>
          <h4 class="font-bold text-primary mb-1">Testing</h4>
          <p class="text-xs text-slate-500">Verifying structural integrity and flow rates.</p>
        </div>
        <div class="text-center group">
          <div class="w-20 h-20 bg-white border-4 border-emerald-600/70 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
            <span class="font-bold text-emerald-700">05</span>
          </div>
          <h4 class="font-bold text-primary mb-1">Approval</h4>
          <p class="text-xs text-slate-500">Final walkthrough and full satisfaction sign-off.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SERVICE AREAS + FAQ -->
<section class="py-16 bg-neutral">
  <div class="max-w-6xl mx-auto px-6 grid lg:grid-cols-2 gap-12">
    <div class="space-y-6">
      <h2 class="text-3xl font-extrabold text-primary">Serving All of Nassau County</h2>
      <div class="relative w-full aspect-square bg-sky rounded-3xl overflow-hidden border-4 border-white shadow-xl flex items-center justify-center">
        <div class="text-center space-y-3">
          <i class="fa-solid fa-location-dot text-primary text-5xl"></i>
          <p class="font-bold text-primary">Nassau County Service Hub</p>
        </div>
        <div class="absolute bottom-4 left-4 right-4 bg-white/90 backdrop-blur-md p-3 rounded-xl">
          <p class="text-xs text-slate-600">Franklin Square • Elmont • Valley Stream • Floral Park • New Hyde Park • Queens Village</p>
        </div>
      </div>
    </div>
    <div class="space-y-6">
      <h2 class="text-3xl font-extrabold text-primary text-center lg:text-left">Frequently Asked Questions</h2>
      <div class="space-y-4">
        <details class="group bg-white rounded-xl shadow-sm overflow-hidden" open>
          <summary class="flex justify-between items-center p-4 cursor-pointer font-semibold text-primary">
            <span>How do I know if my sewer line needs repair?</span>
            <i class="fa-solid fa-chevron-down chev transition-transform"></i>
          </summary>
          <div class="p-4 pt-0 text-slate-600 text-sm border-t border-slate-100">Common signs include slow drains throughout the house, gurgling noises from toilets, persistent sewage odors, and unusually lush green patches in your yard.</div>
        </details>
        <details class="group bg-white rounded-xl shadow-sm overflow-hidden">
          <summary class="flex justify-between items-center p-4 cursor-pointer font-semibold text-primary">
            <span>Is hydro jetting safe for older pipes?</span>
            <i class="fa-solid fa-chevron-down chev transition-transform"></i>
          </summary>
          <div class="p-4 pt-0 text-slate-600 text-sm border-t border-slate-100">Our technicians always perform a camera inspection first. If the pipe is structurally sound, hydro jetting is the safest way to clear scale and roots without abrasive mechanical tools.</div>
        </details>
        <details class="group bg-white rounded-xl shadow-sm overflow-hidden">
          <summary class="flex justify-between items-center p-4 cursor-pointer font-semibold text-primary">
            <span>Do you offer 24/7 emergency services?</span>
            <i class="fa-solid fa-chevron-down chev transition-transform"></i>
          </summary>
          <div class="p-4 pt-0 text-slate-600 text-sm border-t border-slate-100">Yes. We understand that plumbing emergencies don't happen on a schedule. Our teams are available 24 hours a day, 7 days a week, including holidays.</div>
        </details>
        <details class="group bg-white rounded-xl shadow-sm overflow-hidden">
          <summary class="flex justify-between items-center p-4 cursor-pointer font-semibold text-primary">
            <span>How long does a typical sewer repair take?</span>
            <i class="fa-solid fa-chevron-down chev transition-transform"></i>
          </summary>
          <div class="p-4 pt-0 text-slate-600 text-sm border-t border-slate-100">Most minor repairs are completed in one day. Larger trenchless pipe lining projects typically take 1–2 days, significantly faster than traditional excavation.</div>
        </details>
      </div>
    </div>
  </div>
</section>

<!-- FINAL EMERGENCY CTA -->
<section class="bg-primary text-white py-12">
  <div class="max-w-6xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-8">
    <div class="text-center md:text-left">
      <h2 class="text-2xl md:text-3xl font-bold mb-1">Plumbing Emergency in Nassau?</h2>
      <p class="text-slate-300">Our experts are standing by. Get a technician at your door today.</p>
    </div>
    <a class="bg-peach text-[#7a4a22] font-bold px-8 py-4 rounded-xl hover:shadow-lg transition-all" href="tel:+15164029213">
      Call +1 516-402-9213
    </a>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

<script src="assets/js/main.js"></script>
<script>
  // Before/After slider interaction
  const container = document.getElementById('sliderContainer');
  const beforeImg = document.getElementById('beforeImage');
  const sliderControl = document.getElementById('sliderControl');

  function moveSlider(e) {
    const rect = container.getBoundingClientRect();
    let x = e.clientX || (e.touches && e.touches[0].clientX);
    let position = ((x - rect.left) / rect.width) * 100;
    if (position < 0) position = 0;
    if (position > 100) position = 100;
    beforeImg.style.width = position + '%';
    sliderControl.style.left = position + '%';
  }

  if (container) {
    container.addEventListener('mousemove', moveSlider);
    container.addEventListener('touchmove', moveSlider);
  }
</script>
</body>
</html>