<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <title>منارة التقنية | Manara Tech</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Animate.css -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
  <!-- AOS (Animate On Scroll) -->
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Cairo', sans-serif;
      background: #fff;
      color: #000;
      scroll-behavior: smooth;
    }

    .navbar {
      background-color:rgb(233, 212, 235);
    }

    .navbar-brand {
      color: #fff !important;
      font-weight: bold;
    }

    .lang-switch {
      cursor: pointer;
      background: white;
      color:rgb(230, 134, 207);
      border: 1px solidrgb(36, 9, 39);
      border-radius: 5px;
      padding: 5px 10px;
      font-size: 14px;
    }

    header {
      background:rgb(112, 77, 116);
      color: white;
      padding: 100px 0;
      text-align: center;
    }

    .section-title {
      font-size: 2.5rem;
      margin-bottom: 30px;
      color: #333;
    }

    .section-light {
      background: #f9f9f9;
    }

    .section-dark {
      background: #000;
      color: white;
    }

    .card-custom {
      border: none;
      box-shadow: 0 4px 10px rgba(224, 22, 171, 0.1);
      transition: transform 0.3s;
    }

    .card-custom:hover {
      transform: translateY(-10px);
    }

    footer {
      background: rgb(112, 77, 116);
      color: white;
      padding: 20px;
      text-align: center;
    }

    .lang-hidden {
      display: none;
    }

    [dir="ltr"] .text-end {
      text-align: left !important;
    }

    [dir="ltr"] .text-start {
      text-align: right !important;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">           MANARA-TECH</a>

    <div class="ms-auto">
      <button class="lang-switch" onclick="switchLang('ar')">AR</button>
      <button class="lang-switch" onclick="switchLang('en')">EN</button>
    </div>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link lang" href="#home" data-ar="الصفحة الرئيسية" data-en="Home">الصفحة الرئيسية</a>
        </li>
        <li class="nav-item">
          <a class="nav-link lang" href="#about" data-ar="من نحن" data-en="About Us">من نحن</a>
        </li>
        <li class="nav-item">
          <a class="nav-link lang" href="#projects" data-ar="أعمالنا" data-en="Our Works">أعمالنا</a>
        </li>
        <li class="nav-item">
          <a class="nav-link lang" href="#services" data-ar="خدماتنا" data-en="Services">خدماتنا</a>
        </li>
        <li class="nav-item">
          <a class="nav-link lang" href="#contact" data-ar="تواصل معنا" data-en="Contact Us">تواصل معنا</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Header -->
<header class="mt-5 pt-5">
  <div class="container">
    <img src="https://via.placeholder.com/150" alt="Logo" class="mb-4 animate__animated animate__zoomIn">
    <h1 class="animate__animated animate__fadeInDown lang" data-ar="مرحباً بك في منارة التقنية" data-en="Welcome to Manara Tech">مرحباً بك في منارة التقنية</h1>
    <p class="lead animate__animated animate__fadeInUp lang" data-ar="منصة احترافية لتقنيات الويب والتصميم العصري" data-en="A professional platform for modern web technologies and design">منصة احترافية لتقنيات الويب والتصميم العصري</p>
  </div>
</header>

<!-- About Section -->
<section class="py-5 section-light" id="about">
  <div class="container" data-aos="fade-up">
    <h2 class="section-title text-center lang" data-ar="من نحن" data-en="About Us">من نحن</h2>
    <p class="text-center w-75 mx-auto lang" data-ar="نحن فريق متخصص في تطوير المواقع باستخدام أحدث الأدوات مثل PHP وHTML5 وCSS3." data-en="We are a team specialized in modern web development using PHP, HTML5, and CSS3.">نحن فريق متخصص في تطوير المواقع باستخدام أحدث الأدوات مثل PHP وHTML5 وCSS3.</p>
  </div>
</section>

<!-- Services Section -->
<section class="py-5" id="services">
  <div class="container" data-aos="zoom-in">
    <h2 class="section-title text-center lang" data-ar="خدماتنا" data-en="Our Services">خدماتنا</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card card-custom p-4 text-center">
          <h5 class="mb-3 lang" data-ar="تصميم مواقع" data-en="Web Design">تصميم مواقع</h5>
          <p class="lang" data-ar="نصمم مواقع متجاوبة بجودة عالية وأسلوب عصري." data-en="Responsive, high-quality, and modern website design.">نصمم مواقع متجاوبة بجودة عالية وأسلوب عصري.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-custom p-4 text-center">
          <h5 class="mb-3 lang" data-ar="برمجة PHP" data-en="PHP Development">برمجة PHP</h5>
          <p class="lang" data-ar="أنظمة متكاملة ولوحات تحكم ديناميكية باستخدام PHP." data-en="Dynamic PHP systems and dashboards.">أنظمة متكاملة ولوحات تحكم ديناميكية باستخدام PHP.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-custom p-4 text-center">
          <h5 class="mb-3 lang" data-ar="استضافة ودعم" data-en="Hosting & Support">استضافة ودعم</h5>
          <p class="lang" data-ar="نوفر حلول استضافة موثوقة مع دعم فني مستمر." data-en="Reliable hosting solutions with continuous support.">نوفر حلول استضافة موثوقة مع دعم فني مستمر.</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Projects Section -->
<section class="py-5 section-light" id="projects">
  <div class="container" data-aos="fade-up">
    <h2 class="section-title text-center lang" data-ar="مواقعنا الأخرى" data-en="Our Projects">اعمالنا</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card card-custom">
          <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="project 1">
          <div class="card-body">
            <h5 class="card-title lang" data-ar="موقع تعليمي" data-en="Educational Website">موقع تعليمي</h5>
            <p class="card-text lang" data-ar="منصة لتقديم الدروس والفيديوهات التعليمية." data-en="A platform for delivering lessons and educational videos.">منصة لتقديم الدروس والفيديوهات التعليمية.</p>
            <a href="#" target="_blank" class="btn btn-info lang" data-ar="زيارة" data-en="Visit">زيارة</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card card-custom">
          <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="project 2">
          <div class="card-body">
            <h5 class="card-title lang" data-ar="متجر إلكتروني" data-en="E-commerce Store">متجر إلكتروني</h5>
            <p class="card-text lang" data-ar="متجر حديث لبيع منتجات إلكترونية وديجيتال." data-en="Modern store for selling digital and tech products.">متجر حديث لبيع منتجات إلكترونية وديجيتال.</p>
            <a href="#" target="_blank" class="btn btn-info lang" data-ar="زيارة" data-en="Visit">زيارة</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card card-custom">
          <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="project 3">
          <div class="card-body">
            <h5 class="card-title lang" data-ar="موقع شركة" data-en="Corporate Website">موقع شركة</h5>
            <p class="card-text lang" data-ar="موقع تعريفي لشركة خدمات برمجية وويب." data-en="Corporate website for a software and web services company.">موقع تعريفي لشركة خدمات برمجية وويب.</p>
            <a href="#" target="_blank" class="btn btn-info lang" data-ar="زيارة" data-en="Visit">زيارة</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- Contact Section -->
<section class="py-5" id="contact" style="background-color:rgb(203, 194, 203); color: #4B0082;">
  <div class="container" data-aos="fade-up">
    <h2 class="section-title text-center lang" data-ar="تواصل معنا" data-en="Contact Us">تواصل معنا</h2>
    <form action="#" method="POST" class="w-75 mx-auto">
      <div class="mb-3">
        <input type="text" name="name" class="form-control" placeholder="اسمك / Your Name" required>
      </div>
      <div class="mb-3">
        <input type="email" name="email" class="form-control" placeholder="البريد الإلكتروني / Email" required>
      </div>
      <div class="mb-3">
        <textarea name="message" class="form-control" placeholder="رسالتك / Your Message" rows="5" required></textarea>
      </div>
      <button type="submit" class="btn btn-info w-100 lang" data-ar="إرسال" data-en="Send">إرسال</button>
    </form>
  </div>
</section>


<!-- Footer -->
<footer>
  <span class="lang" data-ar="جميع الحقوق محفوظة ©" data-en="All rights reserved ©">جميع الحقوق محفوظة ©</span> <?php echo date("Y"); ?> Manara Tech
</footer>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init();

  function switchLang(lang) {
    document.documentElement.lang = lang;
    document.documentElement.dir = (lang === 'ar') ? 'rtl' : 'ltr';

    document.querySelectorAll('.lang').forEach(el => {
      el.textContent = el.dataset[lang];
    });
  }
</script>
</body>
</html>
