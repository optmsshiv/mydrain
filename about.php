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

  /* Animated map card (realistic coastal map style) */
  .about-page .map-card{
    position:relative;
    background:
      radial-gradient(ellipse 140% 120% at 75% 15%, #2f6fa3 0%, #3a82bb 35%, #4a93c9 60%, #5fa3d2 100%);
    transition:transform .4s ease, box-shadow .4s ease;
  }
  .about-page .map-card:hover{transform:translateY(-6px) scale(1.01);box-shadow:0 25px 40px -10px rgba(51,65,85,0.25);}
  .about-page .map-card .map-svg{position:absolute;inset:0;width:100%;height:100%;}
  .about-page .map-pin-wrap{position:relative;display:flex;align-items:center;justify-content:center;}
  .about-page .map-pin-radar{
    position:absolute;width:70px;height:70px;border-radius:50%;
    background:rgba(255,255,255,0.35);
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
    filter:drop-shadow(0 6px 6px rgba(0,0,0,0.45));
  }
  @keyframes pinBounce{
    0%, 100%{transform:translateY(0);}
    50%{transform:translateY(-10px);}
  }
  .about-page .map-card:hover .map-pin{animation-duration:0.9s;}
  .about-page .map-dot{
    position:absolute;width:9px;height:9px;border-radius:50%;background:#fff;
    box-shadow:0 0 0 4px rgba(255,255,255,0.4), 0 2px 4px rgba(0,0,0,0.3);
    z-index:1;
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
    <img src="assets/images/check_tech.png" 
     alt="Sewer line repair technician at work" 
     class="rounded-2xl shadow-xl aspect-[3/2] object-cover w-full">
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

<!-- VALUES THAT GUIDE US -->
<section class="py-16 bg-neutral">
  <div class="max-w-3xl mx-auto px-6 text-center reveal">
    <h2 class="text-3xl font-extrabold text-primary mb-4">Values That Guide Us</h2>
    <p class="text-slate-600 leading-relaxed">Our commitment to excellence is non-negotiable. Every job we perform is rooted in these four pillars.</p>
  </div>

  <div class="max-w-6xl mx-auto px-6 grid sm:grid-cols-2 md:grid-cols-4 gap-6 mt-12 reveal">
    <div class="bg-white p-6 rounded-2xl space-y-3 shadow-sm hover:-translate-y-1 hover:shadow-md transition-all">
      <i class="fa-solid fa-people-carry-box text-vblue text-2xl"></i>
      <h4 class="text-lg font-bold text-primary">Quality Workmanship</h4>
      <p class="text-sm text-slate-500">We don't cut corners. Every repair is executed with precision using premium materials built to endure.</p>
    </div>
    <div class="bg-white p-6 rounded-2xl space-y-3 shadow-sm hover:-translate-y-1 hover:shadow-md transition-all">
      <i class="fa-solid fa-clipboard-check text-vblue text-2xl"></i>
      <h4 class="text-lg font-bold text-primary">Honest Service</h4>
      <p class="text-sm text-slate-500">Transparent pricing and straightforward advice. If it doesn't need replacing, we won't tell you it does.</p>
    </div>
    <div class="bg-white p-6 rounded-2xl space-y-3 shadow-sm hover:-translate-y-1 hover:shadow-md transition-all">
      <i class="fa-solid fa-bolt text-vblue text-2xl"></i>
      <h4 class="text-lg font-bold text-primary">Fast Response</h4>
      <p class="text-sm text-slate-500">Plumbing emergencies wait for no one. Our efficient dispatch system ensures a technician arrives swiftly.</p>
    </div>
    <div class="bg-white p-6 rounded-2xl space-y-3 shadow-sm hover:-translate-y-1 hover:shadow-md transition-all">
      <i class="fa-solid fa-heart text-vblue text-2xl"></i>
      <h4 class="text-lg font-bold text-primary">Customer First</h4>
      <p class="text-sm text-slate-500">Your satisfaction is our ultimate metric. We treat your home with the same respect we'd show our own.</p>
    </div>
  </div>
</section>

<!-- WHAT SETS US APART -->
<section class="py-16 bg-white">
  <div class="max-w-3xl mx-auto px-6 text-center reveal">
    <span class="text-secondary font-semibold uppercase tracking-widest text-xs">The Trailblazer Difference</span>
    <h2 class="text-3xl font-extrabold text-primary mt-2 mb-4">What Sets Us Apart</h2>
    <p class="text-slate-600 leading-relaxed">The tools, training, and habits that separate us from the rest.</p>
  </div>

  <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-5 mt-12 reveal">
    <div class="bg-neutral p-7 rounded-2xl space-y-2">
      <i class="fa-solid fa-user-shield text-vblue text-2xl"></i>
      <h4 class="text-lg font-bold text-primary">Professional Technicians</h4>
      <p class="text-sm text-slate-500">Background-checked, drug-tested, and highly trained experts.</p>
    </div>
    <div class="bg-primary text-white p-7 rounded-2xl space-y-2">
      <i class="fa-solid fa-robot text-vblue text-2xl"></i>
      <h4 class="text-lg font-bold text-white">Modern Equipment</h4>
      <p class="text-sm text-slate-300">We invest in the latest tools to provide faster, more accurate solutions for every plumbing challenge.</p>
    </div>

    <div class="bg-neutral p-7 rounded-2xl space-y-2">
      <i class="fa-solid fa-video text-vblue text-2xl"></i>
      <h4 class="text-lg font-bold text-primary">Camera Inspections</h4>
      <p class="text-sm text-slate-500">High-definition sewer line visuals for pinpoint diagnostic accuracy.</p>
    </div>
    <div class="bg-neutral p-7 rounded-2xl space-y-2">
      <i class="fa-solid fa-droplet text-vblue text-2xl"></i>
      <h4 class="text-lg font-bold text-primary">Hydro Jetting</h4>
      <p class="text-sm text-slate-500">Powerful, high-pressure water cleaning for the most stubborn blockages.</p>
    </div>
    <div class="bg-neutral p-7 rounded-2xl space-y-2">
      <i class="fa-solid fa-broom text-vblue text-2xl"></i>
      <h4 class="text-lg font-bold text-primary">Clean Work Practices</h4>
      <p class="text-sm text-slate-500">Shoe covers and drop cloths used on every job to protect your floors.</p>
    </div>

    <div class="md:col-span-2 bg-vblue text-white p-7 rounded-2xl flex items-center gap-4">
      <i class="fa-solid fa-shield-halved text-2xl flex-shrink-0"></i>
      <div>
        <h4 class="text-lg font-bold text-white">Long-Term Solutions</h4>
        <p class="text-sm text-white/85">We fix the cause, not just the symptom, ensuring permanent results that save you money over time.</p>
      </div>
    </div>
  </div>
</section>

<!-- CORE EXPERTISE -->
<section class="py-16 bg-neutral">
  <div class="max-w-3xl mx-auto px-6 text-center reveal">
    <h2 class="text-3xl font-extrabold text-primary mb-4">Core Expertise</h2>
    <p class="text-slate-600 leading-relaxed">Mastery across every facet of residential and commercial plumbing.</p>
  </div>

  <div class="max-w-6xl mx-auto px-6 grid grid-cols-2 md:grid-cols-4 gap-4 mt-12 reveal">
    <div class="bg-white p-5 rounded-xl text-center space-y-2 shadow-sm hover:-translate-y-1 hover:shadow-md transition-all">
      <i class="fa-solid fa-screwdriver-wrench text-vblue text-xl"></i>
      <p class="text-sm font-semibold text-primary">Sewer Repair</p>
    </div>
    <div class="bg-white p-5 rounded-xl text-center space-y-2 shadow-sm hover:-translate-y-1 hover:shadow-md transition-all">
      <i class="fa-solid fa-broom text-vblue text-xl"></i>
      <p class="text-sm font-semibold text-primary">Drain Cleaning</p>
    </div>
    <div class="bg-white p-5 rounded-xl text-center space-y-2 shadow-sm hover:-translate-y-1 hover:shadow-md transition-all">
      <i class="fa-solid fa-faucet text-vblue text-xl"></i>
      <p class="text-sm font-semibold text-primary">Fixture Install</p>
    </div>
    <div class="bg-white p-5 rounded-xl text-center space-y-2 shadow-sm hover:-translate-y-1 hover:shadow-md transition-all">
      <i class="fa-solid fa-fire-burner text-vblue text-xl"></i>
      <p class="text-sm font-semibold text-primary">Water Heaters</p>
    </div>
    <div class="bg-white p-5 rounded-xl text-center space-y-2 shadow-sm hover:-translate-y-1 hover:shadow-md transition-all">
      <i class="fa-solid fa-wave-square text-vblue text-xl"></i>
      <p class="text-sm font-semibold text-primary">Leak Detection</p>
    </div>
    <div class="bg-white p-5 rounded-xl text-center space-y-2 shadow-sm hover:-translate-y-1 hover:shadow-md transition-all">
      <i class="fa-solid fa-fire text-vblue text-xl"></i>
      <p class="text-sm font-semibold text-primary">Gas Line Service</p>
    </div>
    <div class="bg-white p-5 rounded-xl text-center space-y-2 shadow-sm hover:-translate-y-1 hover:shadow-md transition-all">
      <i class="fa-solid fa-screwdriver text-vblue text-xl"></i>
      <p class="text-sm font-semibold text-primary">Pipe Replacement</p>
    </div>
    <div class="bg-white p-5 rounded-xl text-center space-y-2 shadow-sm hover:-translate-y-1 hover:shadow-md transition-all">
      <i class="fa-solid fa-triangle-exclamation text-vblue text-xl"></i>
      <p class="text-sm font-semibold text-primary">Emergency Repairs</p>
    </div>
  </div>
</section>

<!-- HOW WE WORK -->
<section class="py-16 bg-white overflow-hidden">
  <div class="max-w-6xl mx-auto px-6">
    <h2 class="text-3xl font-extrabold text-primary text-center mb-14 reveal">How We Work</h2>
    <div class="relative reveal">
      <div class="hidden md:block absolute top-5 left-0 w-full h-0.5 bg-slate-200 z-0"></div>
      <div class="grid sm:grid-cols-2 md:grid-cols-6 gap-8 relative z-10">
        <div class="text-center">
          <div class="w-10 h-10 bg-primary text-white rounded-full flex items-center justify-center mx-auto mb-3 font-bold">1</div>
          <h4 class="font-bold text-primary mb-1 text-sm">Inspect</h4>
          <p class="text-xs text-slate-500">Thorough visual and mechanical assessment.</p>
        </div>
        <div class="text-center">
          <div class="w-10 h-10 bg-primary text-white rounded-full flex items-center justify-center mx-auto mb-3 font-bold">2</div>
          <h4 class="font-bold text-primary mb-1 text-sm">Diagnose</h4>
          <p class="text-xs text-slate-500">Identify root causes with precision tools.</p>
        </div>
        <div class="text-center">
          <div class="w-10 h-10 bg-primary text-white rounded-full flex items-center justify-center mx-auto mb-3 font-bold">3</div>
          <h4 class="font-bold text-primary mb-1 text-sm">Recommend</h4>
          <p class="text-xs text-slate-500">Present clear options and upfront pricing.</p>
        </div>
        <div class="text-center">
          <div class="w-10 h-10 bg-primary text-white rounded-full flex items-center justify-center mx-auto mb-3 font-bold">4</div>
          <h4 class="font-bold text-primary mb-1 text-sm">Repair</h4>
          <p class="text-xs text-slate-500">Expert execution with quality materials.</p>
        </div>
        <div class="text-center">
          <div class="w-10 h-10 bg-primary text-white rounded-full flex items-center justify-center mx-auto mb-3 font-bold">5</div>
          <h4 class="font-bold text-primary mb-1 text-sm">Final Testing</h4>
          <p class="text-xs text-slate-500">Verify performance and system integrity.</p>
        </div>
        <div class="text-center">
          <div class="w-10 h-10 bg-vgreen text-white rounded-full flex items-center justify-center mx-auto mb-3 font-bold">6</div>
          <h4 class="font-bold text-primary mb-1 text-sm">Satisfaction</h4>
          <p class="text-xs text-slate-500">Walkthrough and sign-off.</p>
        </div>
      </div>
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
        <img src="assets/images/work.png" 
     alt="Sewer line repair technician at work" 
     class="rounded-2xl shadow-xl aspect-[3/2] object-cover w-full">
        <h4 class="font-bold text-primary mt-4">Experienced Technicians</h4>
        <p class="text-sm text-slate-500 mt-1">Trained on the latest diagnostic and repair equipment.</p>
      </div>
      <div class="reveal">
        <img src="assets/images/service_vehicle.png" 
     alt="Sewer line repair technician at work" 
     class="rounded-2xl shadow-xl aspect-[3/2] object-cover w-full">
        <h4 class="font-bold text-primary mt-4">Fully Equipped Fleet</h4>
        <p class="text-sm text-slate-500 mt-1">Stocked and ready to dispatch across Nassau County.</p>
      </div>
      <div class="reveal">
        <img src="assets/images/result.png" 
     alt="Completed sewer line repair" 
     class="rounded-2xl shadow-xl aspect-[3/2] object-cover w-full">
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
      <svg class="map-svg" viewBox="0 0 400 400" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
        <!-- Land mass -->
        <path d="M0,40 C60,20 120,55 170,45 C230,33 270,70 320,60 C360,52 380,80 400,75 L400,400 L0,400 Z" fill="#7fa66a" opacity="0.55"/>
        <path d="M0,70 C50,55 110,90 160,78 C220,64 260,100 310,90 C355,82 380,105 400,100 L400,400 L0,400 Z" fill="#8fb578" opacity="0.6"/>
        <path d="M20,400 C40,300 60,220 110,170 C150,130 190,150 230,130 C280,105 300,140 340,160 C370,175 390,230 400,260 L400,400 Z" fill="#c9d8c0" opacity="0.5"/>
        <!-- Long island barrier strip -->
        <path d="M250,140 C300,150 340,180 390,210 L400,230 L400,260 C350,225 300,195 245,165 Z" fill="#a9bf94" opacity="0.7"/>

        <!-- Roads (white grid lines, denser near center) -->
        <g stroke="#ffffff" stroke-linecap="round" opacity="0.85">
          <path d="M40,260 L130,150" stroke-width="2"/>
          <path d="M70,300 L190,160" stroke-width="2.4"/>
          <path d="M110,330 L240,180" stroke-width="3"/>
          <path d="M150,350 L290,210" stroke-width="2"/>
          <path d="M30,210 L300,150" stroke-width="1.6"/>
          <path d="M60,260 L330,195" stroke-width="1.6"/>
          <path d="M100,310 L360,235" stroke-width="1.6"/>
          <path d="M140,345 L380,265" stroke-width="1.4"/>
          <!-- cross streets -->
          <path d="M90,170 L60,330" stroke-width="1.2"/>
          <path d="M140,165 L100,345" stroke-width="1.2"/>
          <path d="M190,160 L150,355" stroke-width="1.2"/>
          <path d="M235,165 L195,355" stroke-width="1.2"/>
          <path d="M280,175 L245,345" stroke-width="1.2"/>
        </g>

        <!-- main highway -->
        <path d="M10,180 C100,140 220,150 400,90" stroke="#fff" stroke-width="3.5" fill="none" opacity="0.9"/>
      </svg>

      <div class="map-dot" style="top:38%;left:34%;"></div>
      <div class="map-dot" style="top:48%;left:55%;"></div>
      <div class="map-dot" style="top:60%;left:30%;"></div>
      <div class="map-dot" style="top:68%;left:62%;"></div>

      <div class="absolute inset-0 flex items-center justify-center">
        <div class="map-pin-wrap">
          <div class="map-pin-radar"></div>
          <div class="map-pin-radar delay"></div>
          <i class="fa-solid fa-location-dot map-pin text-white text-5xl"></i>
        </div>
      </div>
      <div class="absolute bottom-4 left-4 right-4 bg-white/90 backdrop-blur-md p-3 rounded-xl">
        <p class="text-xs text-slate-600">Franklin Square • Elmont • Valley Stream • Floral Park • New Hyde Park • Queens Village</p>
      </div>
    </div>
  </div>
</section>

<!-- FINAL CTA -->
<section class="text-white py-12" style="background:linear-gradient(120deg, #0EA5E9 0%, #0D9488 100%);">
  <div class="max-w-6xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-8 text-center md:text-left">
    <div>
      <h2 class="text-2xl md:text-3xl font-bold mb-1">Ready to work with a local team you can trust?</h2>
      <p class="text-white/85">Get honest, reliable plumbing service — available 24/7 for emergencies.</p>
    </div>
    <div class="flex flex-wrap gap-3 justify-center">
      <a href="tel:+15164029213" class="bg-white text-primary font-bold px-7 py-3.5 rounded-xl hover:shadow-lg transition-all flex items-center gap-2">
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