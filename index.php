<?php $pageTitle = "Home"; ?>
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
  .home-page .img-placeholder{
    background:repeating-linear-gradient(135deg, var(--neutral) 0 14px, #eef1f4 14px 28px);
    display:flex;align-items:center;justify-content:center;color:#94a3b8;font-size:13px;text-align:center;
    border:1.5px dashed #cbd5e1;
  }
  .home-page .reveal{opacity:0;transform:translateY(28px);transition:opacity .7s ease, transform .7s ease;}
  .home-page .reveal.is-visible{opacity:1;transform:translateY(0);}

  /* Animated map card (same as Services page) */
  .home-page .map-card{
    background-image:
      linear-gradient(rgba(207,227,236,0.55), rgba(207,227,236,0.55)),
      repeating-linear-gradient(0deg, transparent 0 38px, rgba(51,65,85,0.06) 38px 40px),
      repeating-linear-gradient(90deg, transparent 0 38px, rgba(51,65,85,0.06) 38px 40px);
    transition:transform .4s ease, box-shadow .4s ease;
  }
  .home-page .map-card:hover{transform:translateY(-6px) scale(1.01);box-shadow:0 25px 40px -10px rgba(51,65,85,0.25);}
  .home-page .map-card .road{position:absolute;background:rgba(51,65,85,0.18);}
  .home-page .map-card .road.h1{top:32%;left:0;right:0;height:6px;}
  .home-page .map-card .road.h2{top:68%;left:0;right:0;height:4px;}
  .home-page .map-card .road.v1{left:28%;top:0;bottom:0;width:6px;}
  .home-page .map-card .road.v2{left:72%;top:0;bottom:0;width:4px;}
  .home-page .map-pin-wrap{position:relative;display:flex;align-items:center;justify-content:center;}
  .home-page .map-pin-radar{
    position:absolute;width:70px;height:70px;border-radius:50%;
    background:rgba(51,65,85,0.18);
    animation:radarPulse 2.4s ease-out infinite;
  }
  .home-page .map-pin-radar.delay{animation-delay:1.2s;}
  @keyframes radarPulse{
    0%{transform:scale(0.3);opacity:0.7;}
    100%{transform:scale(2.2);opacity:0;}
  }
  .home-page .map-pin{
    position:relative;z-index:2;
    animation:pinBounce 2.4s ease-in-out infinite;
    filter:drop-shadow(0 6px 6px rgba(51,65,85,0.35));
  }
  @keyframes pinBounce{
    0%, 100%{transform:translateY(0);}
    50%{transform:translateY(-10px);}
  }
  .home-page .map-card:hover .map-pin{animation-duration:0.9s;}
  .home-page .map-dot{
    position:absolute;width:9px;height:9px;border-radius:50%;background:#334155;
    box-shadow:0 0 0 4px rgba(255,255,255,0.7);
  }
</style>
</head>
<body class="home-page">

<?php include 'includes/header.php'; ?>

<!-- HERO -->
<section class="relative overflow-hidden pt-28 pb-12 md:pt-32 md:pb-20">
  <div class="absolute inset-0 z-0 img-placeholder" data-replace="Hero photo — technician at a Nassau County home">
    <span><i class="fa-solid fa-image text-2xl block mb-2"></i>Replace with hero photo</span>
  </div>
  <div class="absolute inset-0 z-[1]" style="background:linear-gradient(90deg, #F8F9FA 0%, rgba(248,249,250,0.85) 45%, rgba(248,249,250,0.1) 100%);"></div>

  <div class="relative z-10 max-w-6xl mx-auto px-6">
    <div class="max-w-xl">
      <div class="inline-flex items-center gap-2 px-4 py-2 bg-white rounded-full mb-5 shadow-sm">
        <i class="fa-solid fa-triangle-exclamation text-vred text-sm"></i>
        <span class="text-sm font-semibold text-primary">24/7 Emergency Plumbing Available</span>
      </div>
      <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-primary mb-5 leading-tight">
        Sewer, Drain &amp; <span class="text-vorange">Plumbing Experts</span> You Can Trust
      </h1>
      <p class="text-base text-slate-600 mb-7 leading-relaxed">Fast, reliable sewer and drain solutions for homeowners and businesses throughout Franklin Square, Elmont, Valley Stream, Floral Park, New Hyde Park, Queens Village, and surrounding Nassau County areas.</p>
      <div class="flex flex-wrap gap-3 mb-8">
        <a href="book.php" class="bg-vorange text-white font-semibold px-6 py-3 rounded-xl shadow hover:-translate-y-0.5 transition-all">Request Service</a>
        <a href="tel:+15164029213" class="bg-vgreen text-white font-semibold px-6 py-3 rounded-xl shadow hover:-translate-y-0.5 transition-all flex items-center gap-2">
          <i class="fa-solid fa-phone"></i> Call Now
        </a>
      </div>
      <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        <div class="flex items-center gap-2"><i class="fa-solid fa-check-circle text-vgreen"></i><span class="text-xs font-semibold text-slate-700">Sewer Line Repair</span></div>
        <div class="flex items-center gap-2"><i class="fa-solid fa-check-circle text-vgreen"></i><span class="text-xs font-semibold text-slate-700">Hydro Jetting</span></div>
        <div class="flex items-center gap-2"><i class="fa-solid fa-check-circle text-vgreen"></i><span class="text-xs font-semibold text-slate-700">Camera Inspections</span></div>
        <div class="flex items-center gap-2"><i class="fa-solid fa-check-circle text-vgreen"></i><span class="text-xs font-semibold text-slate-700">Root Removal</span></div>
        <div class="flex items-center gap-2"><i class="fa-solid fa-check-circle text-vgreen"></i><span class="text-xs font-semibold text-slate-700">Pipe Repair</span></div>
        <div class="flex items-center gap-2"><i class="fa-solid fa-check-circle text-vgreen"></i><span class="text-xs font-semibold text-slate-700">Emergency Plumbing</span></div>
      </div>
    </div>
  </div>
</section>

<!-- TRUST STRIP -->
<section class="bg-neutral border-y border-slate-200 py-5">
  <div class="max-w-6xl mx-auto px-6 flex flex-wrap justify-between gap-5">
    <div class="flex items-center gap-2"><i class="fa-solid fa-bolt text-vorange"></i><span class="text-sm font-semibold text-primary">24/7 Emergency Service</span></div>
    <div class="flex items-center gap-2"><i class="fa-solid fa-video text-vblue"></i><span class="text-sm font-semibold text-primary">Camera-Verified Diagnosis</span></div>
    <div class="flex items-center gap-2"><i class="fa-solid fa-toolbox text-vviolet"></i><span class="text-sm font-semibold text-primary">Locally Operated Team</span></div>
    <div class="flex items-center gap-2"><i class="fa-solid fa-droplet text-vteal"></i><span class="text-sm font-semibold text-primary">Honest, Upfront Pricing</span></div>
  </div>
</section>

<!-- WHY CHOOSE US -->
<section class="py-16 bg-white">
  <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
    <div class="reveal">
      <span class="text-secondary font-semibold uppercase tracking-widest text-xs">Why Choose Us</span>
      <h2 class="text-3xl font-extrabold text-primary mt-2 mb-5">Why Choose Trailblazer Plumbing</h2>
      <p class="text-slate-600 mb-3 leading-relaxed">When sewer and drain problems strike, you need experienced professionals who can quickly identify the issue and provide lasting solutions.</p>
      <p class="text-slate-600 mb-7 leading-relaxed">We specialize in diagnosing and repairing sewer line problems, drain blockages, leaking pipes, and underground plumbing issues — using advanced sewer camera inspections and professional hydro jetting equipment to restore proper flow and prevent future problems.</p>
      <div class="space-y-5">
        <div class="flex gap-4">
          <div class="w-9 h-9 rounded-lg bg-vorange/10 text-vorange font-bold flex items-center justify-center flex-shrink-0">1</div>
          <div><h4 class="font-bold text-primary mb-0.5">Honest Service</h4><p class="text-sm text-slate-500">Clear answers and straightforward recommendations, every visit.</p></div>
        </div>
        <div class="flex gap-4">
          <div class="w-9 h-9 rounded-lg bg-vblue/10 text-vblue font-bold flex items-center justify-center flex-shrink-0">2</div>
          <div><h4 class="font-bold text-primary mb-0.5">Reliable Workmanship</h4><p class="text-sm text-slate-500">Repairs built to last, not just a quick patch.</p></div>
        </div>
        <div class="flex gap-4">
          <div class="w-9 h-9 rounded-lg bg-vgreen/10 text-vgreen font-bold flex items-center justify-center flex-shrink-0">3</div>
          <div><h4 class="font-bold text-primary mb-0.5">Long-Term Solutions</h4><p class="text-sm text-slate-500">We fix the root cause so the problem doesn't come back.</p></div>
        </div>
      </div>
    </div>

    <div class="bg-primary rounded-2xl p-8 text-white reveal">
      <h3 class="text-white text-lg font-bold mb-6">Our Diagnostic Approach</h3>
      <div class="space-y-5">
        <div>
          <div class="flex justify-between text-sm text-slate-300 mb-2"><span>Camera Inspection Accuracy</span><span>98%</span></div>
          <div class="h-2 bg-white/10 rounded-full overflow-hidden"><div class="h-full bg-vblue rounded-full" style="width:98%"></div></div>
        </div>
        <div>
          <div class="flex justify-between text-sm text-slate-300 mb-2"><span>Hydro Jetting Effectiveness</span><span>95%</span></div>
          <div class="h-2 bg-white/10 rounded-full overflow-hidden"><div class="h-full bg-vteal rounded-full" style="width:95%"></div></div>
        </div>
        <div>
          <div class="flex justify-between text-sm text-slate-300 mb-2"><span>First-Visit Resolution</span><span>90%</span></div>
          <div class="h-2 bg-white/10 rounded-full overflow-hidden"><div class="h-full bg-vorange rounded-full" style="width:90%"></div></div>
        </div>
        <div>
          <div class="flex justify-between text-sm text-slate-300 mb-2"><span>Emergency Response Readiness</span><span>100%</span></div>
          <div class="h-2 bg-white/10 rounded-full overflow-hidden"><div class="h-full bg-vgreen rounded-full" style="width:100%"></div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- TEAM / PROOF PHOTO STRIP -->
<section class="py-16 bg-white">
  <div class="max-w-6xl mx-auto px-6">
    <div class="text-center max-w-2xl mx-auto mb-12 reveal">
      <span class="text-secondary font-semibold uppercase tracking-widest text-xs">The People Behind The Work</span>
      <h2 class="text-3xl font-extrabold text-primary mt-2">A Team Nassau County Homeowners Recognize</h2>
      <p class="text-slate-600 mt-4 leading-relaxed">Same trucks, same faces, same honest service — every time we show up at your door.</p>
    </div>

    <div class="grid md:grid-cols-3 gap-6">
      <div class="reveal">
        <div class="img-placeholder rounded-2xl shadow-md aspect-[4/3]" data-replace="Team / technician photo 1">
          <span><i class="fa-solid fa-image text-2xl block mb-2"></i>Team photo<br>(technician at work)</span>
        </div>
        <h4 class="font-bold text-primary mt-4">Background-Checked Technicians</h4>
        <p class="text-sm text-slate-500 mt-1">Every member of our team is vetted, uniformed, and trained.</p>
      </div>
      <div class="reveal">
        <div class="img-placeholder rounded-2xl shadow-md aspect-[4/3]" data-replace="Branded service van photo">
          <span><i class="fa-solid fa-image text-2xl block mb-2"></i>Branded van photo</span>
        </div>
        <h4 class="font-bold text-primary mt-4">Fully Equipped Service Vehicles</h4>
        <p class="text-sm text-slate-500 mt-1">Stocked with diagnostic cameras and jetting equipment, ready to dispatch.</p>
      </div>
      <div class="reveal">
        <div class="img-placeholder rounded-2xl shadow-md aspect-[4/3]" data-replace="Completed job / before-after photo">
          <span><i class="fa-solid fa-image text-2xl block mb-2"></i>Completed job photo</span>
        </div>
        <h4 class="font-bold text-primary mt-4">Work You Can See</h4>
        <p class="text-sm text-slate-500 mt-1">Real results from real Nassau County homes — see more on our Services page.</p>
      </div>
    </div>
  </div>
</section>

<!-- SERVICES TEASER -->
<section class="py-16 bg-neutral">
  <div class="max-w-3xl mx-auto px-6 text-center reveal">
    <span class="text-secondary font-semibold uppercase tracking-widest text-xs">What We Do</span>
    <h2 class="text-3xl font-extrabold text-primary mt-2 mb-4">Complete Plumbing &amp; Sewer Solutions</h2>
    <p class="text-slate-600 leading-relaxed">From everyday drain clogs to full sewer line replacements, our team handles it all with the right tools and honest pricing.</p>
  </div>

  <div class="max-w-6xl mx-auto px-6 grid sm:grid-cols-2 md:grid-cols-3 gap-6 mt-12 reveal">
    <div class="bg-white border border-slate-200 p-6 rounded-2xl space-y-3 shadow-sm hover:-translate-y-1 hover:shadow-md transition-all">
      <div class="w-12 h-12 rounded-xl bg-vorange/10 flex items-center justify-center"><i class="fa-solid fa-screwdriver-wrench text-vorange text-lg"></i></div>
      <h4 class="font-bold text-primary">Sewer Line Repair</h4>
      <p class="text-sm text-slate-500">Trenchless and traditional repair methods with minimal disruption.</p>
    </div>
    <div class="bg-white border border-slate-200 p-6 rounded-2xl space-y-3 shadow-sm hover:-translate-y-1 hover:shadow-md transition-all">
      <div class="w-12 h-12 rounded-xl bg-vblue/10 flex items-center justify-center"><i class="fa-solid fa-water text-vblue text-lg"></i></div>
      <h4 class="font-bold text-primary">Hydro Jetting</h4>
      <p class="text-sm text-slate-500">High-pressure cleaning that clears grease, scale, and root debris.</p>
    </div>
    <div class="bg-white border border-slate-200 p-6 rounded-2xl space-y-3 shadow-sm hover:-translate-y-1 hover:shadow-md transition-all">
      <div class="w-12 h-12 rounded-xl bg-vviolet/10 flex items-center justify-center"><i class="fa-solid fa-video text-vviolet text-lg"></i></div>
      <h4 class="font-bold text-primary">Camera Inspections</h4>
      <p class="text-sm text-slate-500">HD diagnostics to pinpoint problems without guesswork.</p>
    </div>
    <div class="bg-white border border-slate-200 p-6 rounded-2xl space-y-3 shadow-sm hover:-translate-y-1 hover:shadow-md transition-all">
      <div class="w-12 h-12 rounded-xl bg-vteal/10 flex items-center justify-center"><i class="fa-solid fa-tree text-vteal text-lg"></i></div>
      <h4 class="font-bold text-primary">Root Removal</h4>
      <p class="text-sm text-slate-500">Mechanical and chemical solutions to clear invasive roots.</p>
    </div>
    <div class="bg-white border border-slate-200 p-6 rounded-2xl space-y-3 shadow-sm hover:-translate-y-1 hover:shadow-md transition-all">
      <div class="w-12 h-12 rounded-xl bg-vgreen/10 flex items-center justify-center"><i class="fa-solid fa-shower text-vgreen text-lg"></i></div>
      <h4 class="font-bold text-primary">Drain Cleaning</h4>
      <p class="text-sm text-slate-500">Fast relief for stubborn sinks, tubs, and main lines.</p>
    </div>
    <div class="bg-white border border-slate-200 p-6 rounded-2xl space-y-3 shadow-sm hover:-translate-y-1 hover:shadow-md transition-all">
      <div class="w-12 h-12 rounded-xl bg-vred/10 flex items-center justify-center"><i class="fa-solid fa-house-circle-exclamation text-vred text-lg"></i></div>
      <h4 class="font-bold text-primary">Emergency Plumbing</h4>
      <p class="text-sm text-slate-500">24/7 rapid response for burst pipes and major backups.</p>
    </div>
  </div>

  <div class="text-center mt-10 reveal">
    <a href="services.php" class="inline-block bg-primary text-white font-semibold px-7 py-3 rounded-xl hover:opacity-90 transition-all">View All Services</a>
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

<!-- FINAL EMERGENCY CTA -->
<section class="bg-primary text-white py-12">
  <div class="max-w-6xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-8 text-center md:text-left">
    <div>
      <h2 class="text-2xl md:text-3xl font-bold mb-1">Have a sewer or drain emergency?</h2>
      <p class="text-slate-300">Our team is available 24/7 — call now or request service online.</p>
    </div>
    <div class="flex flex-wrap gap-3 justify-center">
      <a href="tel:+15164029213" class="bg-vgreen text-white font-bold px-7 py-3.5 rounded-xl hover:shadow-lg transition-all flex items-center gap-2">
        <i class="fa-solid fa-phone"></i> Call +1 516-402-9213
      </a>
      <a href="book.php" class="bg-vorange text-white font-bold px-7 py-3.5 rounded-xl hover:shadow-lg transition-all">Request Service</a>
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