<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<!-- NAVBAR -->
<nav class="navbar navbar-dark bg-transparent position-absolute w-100">
  <div class="container d-flex justify-content-between">
    <img src="/assets/img/LOGO.png" alt="logo" class="navlogo">
    <div>
      <a href="#" class="text-white">PRODUCTS</a>
      <a href="#" class="text-white">ABOUT US</a>
      <a href="#" class="text-white">CAREER</a>
    </div>
  </div>
</nav>

<!-- HERO -->
<section class="hero">
  
  <div class="container hero-content">
    <img src="/assets/img/LOGO.svg" alt="logo" class="logo">
    <div class="row align-items-center">
      <div class="col-lg-7">
        <p class="small-text text-white">Building on the success of IronPDF for .NET</p>
        <h1 class='main1'>Beta Software Program</h1>
        <h1 class='main2'>IronPDF for C++</h1>
        <p class="coming">Coming soon</p>
      </div>
      <div class="col-lg-5 text-center">
        <img src="/assets/img/IMAGE.png" alt="C++ Logo" class="hero-img">
      </div>
    </div>
  </div>
</section>

<!-- SIGNUP STRIP -->
<section class="signup-strip">
  <div class="container justify-content-between align-items-center">
    <div>
      <h2 class="text-white">Be one of the first</h2>
      <p>Sign up NOW to get early access!</p>
    </div>
    <form class="signup-form">
      <input type="email" placeholder="Enter email address">
      <button>Sign up now</button>
    </form>
    <div class='footnote d-flex'>
      <p class='hashtag'># Coming Soon</p>
      <p class='text text-white'>IronPDF Beta Program also coming soon for Python | Node.JS | Java</p>
    </div>
  </div>
</section>

<!-- FEATURES -->
<section class="features text-center">
  <div class="container">
    <div class="header">
      <h2 class="text-white">IronPDF for C++</h2>
      <img src="/assets/img/badge.png" alt="coming soon" class="timebadge">
    </div>
    <div class="row mt-4">
      <div class="col-md-4 text-white">Generate PDFs from HTML in C++</div>
      <div class="col-md-4 text-white">Combine, split, modify PDFs quickly in C++</div>
      <div class="col-md-4 text-white">Extract text & images from PDFs using C++</div>
    </div>
  </div>
</section>

<!-- DESCRIPTION -->
<section class="description">
  <div class="container">
    <p class="text-white">
      The new IronPDF library for C++ will enhance the C++ developer's tool set with robust PDF generation and conversion capabilities.
      Developers will be able to generate new PDFs from HTML content (from text or from a URL), as well as to combine, split, extract, and modify content from existing PDFs.
    </p>
    <p class="text-white">
      IronPDF for C++ will help developers create C++ applications that can do all of these PDF processing task and more, with speed, precision, control, and excellence.
    </p>
  </div>
</section>

<!-- WHY -->
<section class="why">
  <div class="container d-flex align-items-center">
    <img src="/assets/img/Group79.png" alt="HTMLtoPDF">
    <div>
      <h2 class="text-white">Why make a C++ PDF Library</h2>
      <p class="text-white">C++ is one of the most popular, oldest, and important programming languages in use, being the language of choice in low-level systems and network programming and other domainns where perfomance is critical.</p>
      <p class="text-white">The release of IronPDF for c++ will aid developers in building performant applications that can carry out PDF-related processing tasks.</p>
    </div>
  </div>
</section>

<!-- EARLY ACCESS -->
<section class="early-access text-center">
  <div class="container">
    <h2 class="text-white">Early Access to C++ PDF Library</h2>
    <p>
      Joining the early access program will allow you to collaborate closely with our engineering team.
      You will be playing a key role in the development process as you share your early experiences using the C++ PDF library before its official launch.
      Your continual feedback after we release the library will be immersely helpful as we release new features and improve on existing features.
    </p>
    <div class="row mt-4">
      <div class="col-md-4">
        <div class="card-pill">
          <p class="status--released"># Released</p>
          <p class="product"><b>IRON</b>PDF<br>for Java</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-pill">
          <p class="status"># Coming Soon</p>
          <p class="product"><b>IRON</b>PDF<br>for Python</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-pill">
          <p class="status"># Coming Soon</p>
          <p class="product"><b>IRON</b>PDF<br>for Node.JS</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER CTA -->
<section class="footer-cta text-center">
  <h3 class="text-white">Sign up to our Beta Program</h3>
  <form class="signup-form center">
    <input type="email" placeholder="Enter email address">
    <button>Sign up now</button>
  </form>
</section>

<?= $this->endSection() ?>