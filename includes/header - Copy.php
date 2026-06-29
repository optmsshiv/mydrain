<?php
// Current page filename, used to highlight the active nav link
$current = basename($_SERVER['PHP_SELF']);
function navClass($page, $current) {
    return $page === $current ? 'active' : '';
}
?>
<header>
  <div class="nav">
    <a href="index.php" class="logo"><div class="logo-mark"><i class="fa-solid fa-wrench"></i></div>Trailblazer Plumbing</a>
    <nav class="nav-links">
      <a href="index.php" class="<?= navClass('index.php', $current) ?>">Home</a>
      <a href="services.php" class="<?= navClass('services.php', $current) ?>">Services</a>
      <a href="about.php" class="<?= navClass('about.php', $current) ?>">About</a>
      <a href="book.php" class="<?= navClass('book.php', $current) ?>">Book Now</a>
      <a href="contact.php" class="<?= navClass('contact.php', $current) ?>">Contact</a>
    </nav>
    <div class="nav-cta">
      <a href="tel:+15164029213" class="phone-pill"><i class="fa-solid fa-phone"></i> +1 516-402-9213</a>
      <a href="book.php" class="btn btn-primary">Book Service</a>
    </div>
    <button class="menu-toggle" id="menuToggle" aria-label="Toggle menu"><i class="fa-solid fa-bars"></i></button>
  </div>
  <!-- Mobile nav drawer -->
  <div class="mobile-nav" id="mobileNav">
    <a href="index.php" class="<?= navClass('index.php', $current) ?>">Home</a>
    <a href="services.php" class="<?= navClass('services.php', $current) ?>">Services</a>
    <a href="about.php" class="<?= navClass('about.php', $current) ?>">About</a>
    <a href="book.php" class="<?= navClass('book.php', $current) ?>">Book Now</a>
    <a href="contact.php" class="<?= navClass('contact.php', $current) ?>">Contact</a>
    <a href="tel:+15164029213" class="phone-pill"><i class="fa-solid fa-phone"></i> +1 516-402-9213</a>
  </div>
</header>
