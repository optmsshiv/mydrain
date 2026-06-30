<?php $pageTitle = "About Us"; ?>
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
          rose: '#F0DCE0',
          vorange: '#F97316',
          vgreen: '#16A34A',
          vred: '#E11D48',
          vblue: '#0EA5E9',
          vviolet: '#8B5CF6',
          vteal: '#0D9488'
        },
        fontFamily: {
          sans: ['Montserrat', 'sans-serif']
        }
      }
    }
  }
</script>
<style>
  .about-page .img-placeholder{
    background:repeating-linear-gradient(135deg, var(--neutral) 0 14px, #eef1f4 14px 28px);
    display:flex;align-items:center;justify-content:center;color:#94a3b8;font-size:13px;text-align:center;
    border:1.5px dashed #cbd5e1;
  }
  .about-page .reveal{opacity:0;transform:translateY(28px);transition:opacity .7s ease, transform .7s ease;}
  .about-page .reveal.is-visible{opacity:1;transform:translateY(0);}

  /* Animated map card (same as Home / Services) */
  .about-page .map-card{
    background-image:
      linear-gradient(rgba(207,227,236,0.55), rgba(207,227,236,0.55)),
      repeating-linear-gradient(0deg, transparent 0 38px, rgba(51,65,85,0.06) 38px 40px),
      repeating-linear-gradient(90deg, transparent 0 38px, rgba(51,65,85,0.06) 38px 40px);
    transition:transform .4s ease, box-shadow .4s ease;
  }
  .about-page .map-card:hover{transform:translateY(-6px) scale(1.01);box-shadow:0 25px 40px -10px rgba(51,65,85,0.25);}
  .about-page .map-card .road{position:absolute;background:rgba(51,65,85,0.18);}
  .about-page .map-card .road.h1{top:32%;left:0;right:0;height:6px;}
  .about-page .map-card .road.h2{top:68%;left:0;right:0;height:4px;}
  .about-page .map-card .road.v1{left:28%;top:0;bottom:0;width:6px;}
  .about-page .map-card .road.v2{left:72%;top:0;bottom:0;width:4px;}
  .about-page .map-pin-wrap{position:relative;display:flex;align-items:center;justify-content:center;}
  .about-page .map-pin-radar{
    position:absolute;width:70px;height:70px;border-radius:50%;
    background:rgba(51,65,85,0.18);
    animation:radarPulse 2.4s ease-out infinite;
  }
  .about-page .map-pin-radar.delay{animation-delay:1.2s;}
  @keyframes radarPulse{
    0%{transform:scale(0.3);opacity:0.7;}
    100%{transform:scale(2.2);opacity:0;}
  }
  .about-page .map-pin{
    position:relative;z-index:2;
    animation:pinBounce 2.4s ease-in-out infinite;
    filter:drop-shadow(0 6px 6px rgba(51,65,85,0.35));
  }
  @keyframes pinBounce{
    0%, 100%{transform:translateY(0);}
    50%{transform:translateY(-10px);}
  }
  .about-page .map-card:hover .map-pin{animation-duration:0.9s;}
  .about-page .map-dot{
    position:absolute;width:9px;height:9px;border-radius:50%;background:#334155;
    box-shadow:0 0 0 4px rgba(255,255,255,0.7);
  }
</style>
</head>
<body class="about-page">

<?php include 'includes/header.php'; ?>

<!-- PAGE BANNER -->
<div class="bg-primary text-white pt-28 pb-14 md:pt-32 md:pb-16 text-center">
  <div class="max-w-3xl mx-auto px-6">
    <div class="flex justify-center gap-2 text-xs text-slate-300 mb-4">
      <a href="index.php" class="hover:text-white transition-colors">Home</a><span>/</span><span class="text-white font-semibold">About</span>
    </div>
    <h1 class="text-3xl md:text-4xl font-extrabold text-white mb-3">About Trailblazer Plumbing</h1>
    <p class="text-slate-300 text-base">Locally operated, honest, and reliable sewer, drain, and plumbing service for Nassau County.</p>
  </div>
</div>

<!-- ABOUT INTRO -->
<section class="py-16 bg-white">
  <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
    <div class="img-placeholder rounded-2xl shadow-xl aspect-[4/3] reveal" data-replace="Owner / team founding photo">
      <span><i class="fa-solid fa-image text-2xl block mb-2"></i>Replace with team or owner photo</span>
    </div>
    <div class="reveal">
      <span class="text-secondary font-semibold uppercase tracking-widest text-xs">About Us</span>
      <h2 class="text-3xl font-extrabold text-primary mt-2 mb-5">A Local Team Nassau County Trusts</h2>
      <p class="text-slate-600 mb-4 leading-relaxed">Trailblazer Plumbing is a locally operated sewer, drain, and plumbing company serving Nassau County and surrounding communities.</p>
      <p class="text-slate-600 mb-4 leading-relaxed">We focus on providing dependable service, honest recommendations, and quality workmanship for every customer. Whether it's a clogged sewer line, a leaking pipe, root intrusion, hydro jetting service, or emergency plumbing repair, our team is committed to finding the right solution quickly and efficiently.</p>
      <p class="text-slate-600 leading-relaxed">Our experience with sewer systems, drain cleaning, camera inspections, and pipe repairs allows us to solve problems that many homeowners face every day. At Trailblazer Plumbing, customer satisfaction and reliable results are our top priorities.</p>
    </div>
  </div>
</section>

<!-- STATS STRIP -->
<section class="bg-neutral border-y border-slate-200 py-10">
  <div class="max-w-6xl mx-auto px-6 grid grid-cols-2 md:grid-cols-4 gap-8 text-center reveal">
    <div>
      <div class="text-3xl font-extrabold text-vorange mb-1">24/7</div>
      <div class="text-xs font-semibold text-slate-600 uppercase tracking-wide">Emergency Response</div>
    </div>
    <div>
      <div class="text-3xl font-extrabold text-vblue mb-1">7+</div>
      <div class="text-xs font-semibold text-slate-600 uppercase tracking-wide">Towns Served</div>
    </div>
    <div>
      <div class="text-3xl font-extrabold text-vgreen mb-1">100%</div>
      <div class="text-xs font-semibold text-slate-600 uppercase tracking-wide">Locally Operated</div>
    </div>
    <div>
      <div class="text-3xl font-extrabold text-vviolet mb-1">5★</div>
      <div class="text-xs font-semibold text-slate-600 uppercase tracking-wide">Customer Focused</div>
    </div>
  </div>
</section>

<!-- OUR VALUES -->
<section class="py-16 bg-white">
  <div class="max-w-3xl mx-auto px-6 text-center reveal">
    <span class="text-secondary font-semibold uppercase tracking-widest text-xs">What We Stand For</span>
    <h2 class="text-3xl font-extrabold text-primary mt-2 mb-4">Our Values</h2>
    <p class="text-slate-600 leading-relaxed">Three commitments guide every job we take on, big or small.</p>
  </div>

  <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-3 gap-6 mt-12 reveal">
    <div class="bg-white border border-slate-200 p-7 rounded-2xl text-center space-y-3 shadow-sm hover:-translate-y-1 hover:shadow-md transition-all">
      <div class="w-14 h-14 bg-vorange/10 rounded-full flex items-center justify-center mx-auto"><i class="fa-solid fa-handshake text-vorange text-xl"></i></div>
      <h4 class="text-lg font-bold text-primary">Honest Service</h4>
      <p class="text-sm text-slate-500">Clear answers and straightforward recommendations, every visit — no upselling, no surprises.</p>
    </div>
    <div class="bg-white border border-slate-200 p-7 rounded-2xl text-center space-y-3 shadow-sm hover:-translate-y-1 hover:shadow-md transition-all">
      <div class="w-14 h-14 bg-vblue/10 rounded-full flex items-center justify-center mx-auto"><i class="fa-solid fa-screwdriver-wrench text-vblue text-xl"></i></div>
      <h4 class="text-lg font-bold text-primary">Reliable Workmanship</h4>
      <p class="text-sm text-slate-500">Repairs built to last, not just a quick patch — done right the first time.</p>
    </div>
    <div class="bg-white border border-slate-200 p-7 rounded-2xl text-center space-y-3 shadow-sm hover:-translate-y-1 hover:shadow-md transition-all">
      <div class="w-14 h-14 bg-vgreen/10 rounded-full flex items-center justify-center mx-auto"><i class="fa-solid fa-leaf text-vgreen text-xl"></i></div>
      <h4 class="text-lg font-bold text-primary">Long-Term Solutions</h4>
      <p class="text-sm text-slate-500">We fix the root cause so the problem doesn't come back to bother you again.</p>
    </div>
  </div>
</section>

<!-- TEAM / PROOF PHOTO STRIP -->
<section class="py-16 bg-neutral">
  <div class="max-w-6xl mx-auto px-6">
    <div class="text-center max-w-2xl mx-auto mb-12 reveal">
      <span class="text-secondary font-semibold uppercase tracking-widest text-xs">Behind The Work</span>
      <h2 class="text-3xl font-extrabold text-primary mt-2">Meet The Trailblazer Team</h2>
      <p class="text-slate-600 mt-4 leading-relaxed">Background-checked, uniformed, and trained — the same faces show up every time.</p>
    </div>

    <div class="grid md:grid-cols-3 gap-6">
      <div class="reveal">
        <div class="img-placeholder rounded-2xl shadow-md aspect-[4/3]" data-replace="Technician portrait or at-work photo">
          <span><i class="fa-solid fa-image text-2xl block mb-2"></i>Technician photo</span>
        </div>
        <h4 class="font-bold text-primary mt-4">Experienced Technicians</h4>
        <p class="text-sm text-slate-500 mt-1">Trained on the latest diagnostic and repair equipment.</p>
      </div>
      <div class="reveal">
        <div class="img-placeholder rounded-2xl shadow-md aspect-[4/3]" data-replace="Branded service van photo">
          <span><i class="fa-solid fa-image text-2xl block mb-2"></i>Branded van photo</span>
        </div>
        <h4 class="font-bold text-primary mt-4">Fully Equipped Fleet</h4>
        <p class="text-sm text-slate-500 mt-1">Stocked and ready to dispatch across Nassau County.</p>
      </div>
      <div class="reveal">
        <div class="img-placeholder rounded-2xl shadow-md aspect-[4/3]" data-replace="Completed job site photo">
          <span><i class="fa-solid fa-image text-2xl block mb-2"></i>Completed job photo</span>
        </div>
        <h4 class="font-bold text-primary mt-4">Proven Results</h4>
        <p class="text-sm text-slate-500 mt-1">See real work on our <a href="services.php" class="text-vorange font-semibold hover:underline">Services page</a>.</p>
      </div>
    </div>
  </div>
</section>

<!-- SERVICE AREAS -->
<section class="py-16 bg-white">
  <div class="max-w-6xl mx-auto px-6 grid lg:grid-cols-2 gap-12 items-center">
    <div class="reveal">
      <span class="text-secondary font-semibold uppercase tracking-widest text-xs">Service Areas</span>
      <h2 class="text-3xl font-extrabold text-primary mt-2 mb-5">Proudly Serving Nassau County</h2>
      <p class="text-slate-600 mb-7 leading-relaxed">We provide fast, reliable sewer, drain, and plumbing services throughout Nassau County, including:</p>
      <div class="grid grid-cols-2 gap-3">
        <div class="flex items-center gap-2 bg-neutral border border-slate-200 rounded-lg px-3 py-2.5 text-sm font-semibold text-primary"><i class="fa-solid fa-location-dot text-vorange"></i> Franklin Square</div>
        <div class="flex items-center gap-2 bg-neutral border border-slate-200 rounded-lg px-3 py-2.5 text-sm font-semibold text-primary"><i class="fa-solid fa-location-dot text-vorange"></i> Elmont</div>
        <div class="flex items-center gap-2 bg-neutral border border-slate-200 rounded-lg px-3 py-2.5 text-sm font-semibold text-primary"><i class="fa-solid fa-location-dot text-vorange"></i> Valley Stream</div>
        <div class="flex items-center gap-2 bg-neutral border border-slate-200 rounded-lg px-3 py-2.5 text-sm font-semibold text-primary"><i class="fa-solid fa-location-dot text-vorange"></i> Floral Park</div>
        <div class="flex items-center gap-2 bg-neutral border border-slate-200 rounded-lg px-3 py-2.5 text-sm font-semibold text-primary"><i class="fa-solid fa-location-dot text-vorange"></i> New Hyde Park</div>
        <div class="flex items-center gap-2 bg-neutral border border-slate-200 rounded-lg px-3 py-2.5 text-sm font-semibold text-primary"><i class="fa-solid fa-location-dot text-vorange"></i> Queens Village</div>
        <div class="col-span-2 flex items-center justify-center gap-2 bg-primary text-white rounded-lg px-3 py-2.5 text-sm font-semibold"><i class="fa-solid fa-location-dot"></i> All of Nassau County</div>
      </div>
    </div>
    <div class="relative w-full aspect-square map-card rounded-3xl overflow-hidden border-4 border-white shadow-xl reveal">
      <div class="road h1"></div>
      <div class="road h2"></div>
      <div class="road v1"></div>
      <div class="road v2"></div>
      <div class="map-dot" style="top:22%;left:35%;"></div>
      <div class="map-dot" style="top:40%;left:62%;"></div>
      <div class="map-dot" style="top:60%;left:30%;"></div>
      <div class="map-dot" style="top:74%;left:68%;"></div>
      <div class="absolute inset-0 flex items-center justify-center">
        <div class="map-pin-wrap">
          <div class="map-pin-radar"></div>
          <div class="map-pin-radar delay"></div>
          <i class="fa-solid fa-location-dot map-pin text-primary text-5xl"></i>
        </div>
      </div>
      <div class="absolute bottom-4 left-4 right-4 bg-white/90 backdrop-blur-md p-3 rounded-xl">
        <p class="text-xs text-slate-600">Franklin Square • Elmont • Valley Stream • Floral Park • New Hyde Park • Queens Village</p>
      </div>
    </div>
  </div>
</section>

<!-- FINAL CTA -->
<section class="bg-primary text-white py-12">
  <div class="max-w-6xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-8 text-center md:text-left">
    <div>
      <h2 class="text-2xl md:text-3xl font-bold mb-1">Ready to work with a local team you can trust?</h2>
      <p class="text-slate-300">Get honest, reliable plumbing service — available 24/7 for emergencies.</p>
    </div>
    <div class="flex flex-wrap gap-3 justify-center">
      <a href="tel:+15164029213" class="bg-vgreen text-white font-bold px-7 py-3.5 rounded-xl hover:shadow-lg transition-all flex items-center gap-2">
        <i class="fa-solid fa-phone"></i> Call +1 516-402-9213
      </a>
      <a href="book.php" class="bg-vorange text-white font-bold px-7 py-3.5 rounded-xl hover:shadow-lg transition-all">Book Service</a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

<script src="assets/js/main.js"></script>
<script>
  // Scroll reveal animation
  const revealEls = document.querySelectorAll('.reveal');
  const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        revealObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.15 });
  revealEls.forEach(el => revealObserver.observe(el));
</script>
</body>
</html>