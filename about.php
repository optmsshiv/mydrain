<?php $pageTitle = "About Us"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/head.php'; ?>
</head>
<body>

<?php include 'includes/header.php'; ?>

<div class="page-banner">
  <div class="container">
    <div class="breadcrumb"><a href="index.php">Home</a> / About</div>
    <h1>About Trailblazer Plumbing</h1>
    <p>Locally operated, honest, and reliable sewer, drain, and plumbing service for Nassau County.</p>
  </div>
</div>

<section class="about" id="about" style="padding-top:60px;">
  <div class="container about-grid">
    <div class="about-visual">
      <div class="about-visual-inner">
        <div class="badge"><i class="fa-solid fa-wrench"></i></div>
        <h4>Locally Operated</h4>
        <p>Dependable service, honest recommendations, and quality workmanship for every customer in Nassau County.</p>
      </div>
    </div>
    <div class="about-copy">
      <span class="eyebrow-dark">About Us</span>
      <h2>About Trailblazer Plumbing</h2>
      <p>Trailblazer Plumbing is a locally operated sewer, drain, and plumbing company serving Nassau County and surrounding communities.</p>
      <p>We focus on providing dependable service, honest recommendations, and quality workmanship for every customer. Whether it's a clogged sewer line, a leaking pipe, root intrusion, hydro jetting service, or emergency plumbing repair, our team is committed to finding the right solution quickly and efficiently.</p>
      <p>Our experience with sewer systems, drain cleaning, camera inspections, and pipe repairs allows us to solve problems that many homeowners face every day. At Trailblazer Plumbing, customer satisfaction and reliable results are our top priorities.</p>
    </div>
  </div>
</section>

<section class="areas">
  <div class="container areas-wrap">
    <div>
      <span class="eyebrow-dark">Service Areas</span>
      <h2 style="font-size:30px;margin-bottom:16px;">Proudly Serving Nassau County</h2>
      <p style="color:var(--text-muted);font-size:15.5px;margin-bottom:24px;">We provide fast, reliable sewer, drain, and plumbing services throughout Nassau County, including:</p>
      <div class="areas-list">
        <div class="area-pin"><span class="ico"><i class="fa-solid fa-location-dot"></i></span>Franklin Square</div>
        <div class="area-pin"><span class="ico"><i class="fa-solid fa-location-dot"></i></span>Elmont</div>
        <div class="area-pin"><span class="ico"><i class="fa-solid fa-location-dot"></i></span>Valley Stream</div>
        <div class="area-pin"><span class="ico"><i class="fa-solid fa-location-dot"></i></span>Floral Park</div>
        <div class="area-pin"><span class="ico"><i class="fa-solid fa-location-dot"></i></span>New Hyde Park</div>
        <div class="area-pin"><span class="ico"><i class="fa-solid fa-location-dot"></i></span>Queens Village</div>
        <div class="area-pin" style="grid-column:1/-1;justify-content:center;background:var(--primary);color:#fff;"><i class="fa-solid fa-location-dot"></i> All of Nassau County</div>
      </div>
    </div>
    <div class="map-card">
      <svg viewBox="0 0 400 300" fill="none">
        <rect width="400" height="300" rx="16" fill="#F8F9FA"/>
        <path d="M40 60 L120 40 L200 70 L280 50 L360 90 L340 180 L260 220 L160 240 L70 200 Z" fill="none" stroke="#334155" stroke-width="2" opacity="0.25"/>
        <circle cx="120" cy="80" r="6" fill="#94A3B8"/>
        <circle cx="190" cy="100" r="6" fill="#94A3B8"/>
        <circle cx="240" cy="150" r="6" fill="#94A3B8"/>
        <circle cx="160" cy="170" r="6" fill="#94A3B8"/>
        <circle cx="280" cy="120" r="6" fill="#94A3B8"/>
        <circle cx="210" cy="60" r="9" fill="#334155"/>
        <text x="200" y="270" text-anchor="middle" font-family="Montserrat, sans-serif" font-size="13" fill="#64748a">Nassau County Service Map</text>
      </svg>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

<script src="assets/js/main.js"></script>
</body>
</html>
