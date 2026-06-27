<?php $pageTitle = "Book Now"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/head.php'; ?>
</head>
<body>

<?php include 'includes/header.php'; ?>

<div class="page-banner">
  <div class="container">
    <div class="breadcrumb"><a href="index.php">Home</a> / Book Now</div>
    <h1>Schedule Your Plumbing Service</h1>
    <p>Request service today and a member of our team will contact you as soon as possible.</p>
  </div>
</div>

<section class="book" id="book" style="padding-top:60px;">
  <div class="container book-wrap">
    <div class="book-info">
      <span class="eyebrow-dark">Book Now</span>
      <h2>Schedule Your Plumbing Service</h2>
      <p>Need professional sewer, drain, or plumbing services? Request service today and a member of our team will contact you as soon as possible.</p>
      <div class="info-row">
        <div class="ico"><i class="fa-solid fa-phone"></i></div>
        <div><h4>Call Us</h4><p>+1 516-402-9213</p></div>
      </div>
      <div class="info-row">
        <div class="ico"><i class="fa-solid fa-envelope"></i></div>
        <div><h4>Email Us</h4><p>tbm1789@gmail.com</p></div>
      </div>
      <div class="hours-card">
        <strong>24/7 Emergency Service Available</strong>
        <span>Day or night, we're ready to respond.</span>
      </div>
    </div>

    <div class="form-card">
      <h3>Service Request Form</h3>
      <p class="sub">Fill out the form and we'll be in touch shortly.</p>

      <?php if (isset($_GET['success'])): ?>
        <p style="background:var(--pastel-sage);color:#3f5c45;padding:12px 14px;border-radius:8px;font-size:14px;margin-bottom:16px;">
          <i class="fa-solid fa-circle-check"></i> Thanks! Your request has been received — we'll be in touch shortly.
        </p>
      <?php elseif (!empty($_GET['error'])): ?>
        <p style="background:var(--pastel-rose);color:#7a3340;padding:12px 14px;border-radius:8px;font-size:14px;margin-bottom:16px;">
          <i class="fa-solid fa-triangle-exclamation"></i> <?= htmlspecialchars($_GET['error']) ?>
        </p>
      <?php endif; ?>

      <form action="includes/handle_booking.php" method="POST">
        <div class="form-row">
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
        <div class="field"><label>Describe Your Plumbing Issue</label><textarea name="message" placeholder="Tell us what's going on..."></textarea></div>
        <div class="field"><label>Preferred Appointment Time</label><input type="text" name="preferred_time" placeholder="e.g. Tomorrow morning"></div>
        <button class="submit-btn" type="submit">Request Service</button>
      </form>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

<script src="assets/js/main.js"></script>
</body>
</html>
