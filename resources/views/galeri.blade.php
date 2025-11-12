<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Galeri Kami - Tasty Food</title>

  <!-- CSS -->
  <link rel="stylesheet" href="{{ asset('css/Galeri.css') }}" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
</head>
<body>

<!-- NAVBAR -->
<header class="navbar">
  <div class="logo">TASTY FOOD</div>
  <nav class="nav-links">
    <a href="{{ route('home') }}">HOME</a>
    <a href="{{ route('tentang') }}">TENTANG</a>
    <a href="{{ route('berita') }}">BERITA</a>
    <a href="{{ route('galeri') }}" class="active">GALERI</a>
    <a href="{{ route('kontak') }}">KONTAK</a>
  </nav>
</header>

<!-- HERO -->
<section class="galeri-hero">
  <h1>GALERI KAMI</h1>
</section>

<!-- CAROUSEL -->
<section class="carousel" aria-label="Image carousel">
  <button class="prev" aria-label="Previous">❮</button>
  <div class="carousel-images">
    <img src="{{ asset('ASET/ella-olsson-mmnKI8kMxpc-unsplash.jpg') }}" alt="Image 1" class="active" />
    <img src="{{ asset('ASET/brooke-lark-oaz0raysASk-unsplash.jpg') }}" alt="Image 2" />
  </div>
  <button class="next" aria-label="Next">❯</button>
</section>

<style>
.carousel{display:flex;align-items:center;justify-content:center;gap:12px;max-width:1000px;margin:32px auto;padding:0 12px;}
.carousel-images{position:relative;width:100%;max-width:820px;height:420px;overflow:hidden;border-radius:8px;background:#000;}
.carousel-images img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;opacity:0;transition:opacity .6s ease;}
.carousel-images img.active{opacity:1;}
.carousel button{background:#fff;border:1px solid rgba(0,0,0,.1);padding:8px 12px;border-radius:6px;cursor:pointer;font-size:18px;}
@media (max-width:768px){
  .carousel-images{height:240px;}
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const carousel = document.querySelector('.carousel');
  if (!carousel) return;
  const imgs = Array.from(carousel.querySelectorAll('.carousel-images img'));
  const prevBtn = carousel.querySelector('.prev');
  const nextBtn = carousel.querySelector('.next');
  let index = imgs.findIndex(i => i.classList.contains('active'));
  if (index === -1) index = 0, imgs[0].classList.add('active');

  function show(i) {
    imgs.forEach((img, idx) => img.classList.toggle('active', idx === i));
  }
  function next() { index = (index + 1) % imgs.length; show(index); }
  function prev() { index = (index - 1 + imgs.length) % imgs.length; show(index); }

  nextBtn.addEventListener('click', () => { next(); resetTimer(); });
  prevBtn.addEventListener('click', () => { prev(); resetTimer(); });

  // keyboard support
  carousel.tabIndex = 0;
  carousel.addEventListener('keydown', e => {
    if (e.key === 'ArrowRight') { next(); resetTimer(); }
    if (e.key === 'ArrowLeft') { prev(); resetTimer(); }
  });

  // autoplay
  let timer = setInterval(next, 4000);
  function resetTimer() { clearInterval(timer); timer = setInterval(next, 4000); }
});
</script>

<!-- GALLERY GRID -->
<section class="gallery-grid">
  <div class="grid">
    <div class="grid-item"><img src="{{ asset('ASET/anh-nguyen-kcA-c3f_3FE-unsplash.jpg') }}" alt="Image 1" /></div>
    <div class="grid-item"><img src="{{ asset('ASET/anna-pelzer-IGfIGP5ONV0-unsplash.jpg') }}" alt="Image 2" /></div>
    <div class="grid-item"><img src="{{ asset('ASET/brooke-lark-1Rm9GLHV0UA-unsplash.jpg') }}" alt="Image 3" /></div>
    <div class="grid-item"><img src="{{ asset('ASET/brooke-lark-nBtmglfY0HU-unsplash.jpg') }}" alt="Image 4" /></div>
    <div class="grid-item"><img src="{{ asset('ASET/brooke-lark-oaz0raysASk-unsplash.jpg') }}" alt="Image 5" /></div>
    <div class="grid-item"><img src="{{ asset('ASET/eiliv-aceron-ZuIDLSz3XLg-unsplash.jpg') }}" alt="Image 6" /></div>
    <div class="grid-item"><img src="{{ asset('ASET/fathul-abrar-T-qI_MI2EMA-unsplash.jpg') }}" alt="Image 7" /></div>
    <div class="grid-item"><img src="{{ asset('ASET/jimmy-dean-Jvw3pxgeiZw-unsplash.jpg') }}" alt="Image 8" /></div>
    <div class="grid-item"><img src="{{ asset('ASET/luisa-brimble-HvXEbkcXjSk-unsplash.jpg') }}" alt="Image 9" /></div>
    <div class="grid-item"><img src="{{ asset('ASET/sebastian-coman-photography-eBmyH7oO5wY-unsplash.jpg') }}" alt="Image 10" /></div>
    <div class="grid-item"><img src="{{ asset('ASET/sanket-shah-SVA7TyHxojY-unsplash.jpg') }}" alt="Image 11" /></div>
    <div class="grid-item"><img src="{{ asset('ASET/monika-grabkowska-P1aohbiT-EY-unsplash.jpg') }}" alt="Image 12" /></div>
  </div>
</section>

<!-- FOOTER -->
<footer class="footer">
  <div class="footer-container">
    <div class="footer-col brand">
      <h4>Tasty Food</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
      <div class="social-icons">
        <img src="{{ asset('ASET/001-facebook.png') }}" alt="Facebook" />
        <img src="{{ asset('ASET/002-twitter.png') }}" alt="Twitter" />
      </div>
    </div>
    <div class="footer-col">
      <h4>Useful links</h4>
      <ul>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Hewan</a></li>
        <li><a href="{{ route('galeri') }}">Galeri</a></li>
        <li><a href="#">Testimonial</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>Privacy</h4>
      <ul>
        <li><a href="#">Karir</a></li>
        <li><a href="{{ route('tentang') }}">Tentang Kami</a></li>
        <li><a href="{{ route('kontak') }}">Kontak Kami</a></li>
        <li><a href="#">Servis</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>Contact Info</h4>
      <ul>
        <li>tastyfood@gmail.com</li>
        <li>+62 812 3456 7890</li>
        <li>Kota Bandung, Jawa Barat</li>
      </ul>
    </div>
  </div>

  <div class="footer-bottom">
    <p>&copy; 2023 All rights reserved</p>
  </div>
</footer>