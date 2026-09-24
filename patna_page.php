<?php
include_once 'includes/header.php'
?>
<style>
  :root {
    --vpa-navy: #0c1c46;
    --vpa-navy-deep: #081334;
    --vpa-orange: #f26522;
    --vpa-orange-dark: #d8531a;
    --vpa-ink: #2a2f3a;
    --vpa-muted: #5c6270;
    --vpa-line: #e7e9ee;
    --vpa-card: #f6f7fb;
    --vpa-bg: #ffffff;
  }

  /* Everything below is scoped inside .vpa-page so it never leaks into
     (or gets overridden by) the site's global CSS. All class names are
     unique/prefixed with "vpa-" as requested. */

  .vpa-page,
  .vpa-page * {
    box-sizing: border-box;
  }

  .vpa-page {
    font-family: 'Segoe UI', Arial, sans-serif;
    font-size: 16px;
    background: var(--vpa-bg);
    color: var(--vpa-ink);
    -webkit-font-smoothing: antialiased;
    display: flex;
    align-items: flex-start;
    gap: 40px;
    max-width: 1300px;
    margin: 0 auto;
    padding: 133px 24px 64px;
  }

  .vpa-page a {
    color: inherit;
    text-decoration: none;
  }

  /* ---------- LEFT: scrolling content ---------- */
  .vpa-left {
    flex: 1 1 auto;
    min-width: 0;
  }

  .vpa-hero-banner {
    background-image: url('/../img/about-bk.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;

    border-radius: 10px;
    padding: 93px 41px 39px;
    margin-bottom: 32px;

    display: flex;
    align-items: center;
    gap: 10px;

    min-height: 90px;
    box-sizing: border-box;
  }

  .vpa-hero-tab {
    background: #fff;
    color: var(--vpa-navy);
    font-weight: 600;
    font-size: 14px;
    padding: 8px 18px;
    border-radius: 5px;
  }

  .vpa-hero-tab-active {
    background: #ffffff;
    color: #198fd3;
  }

  .vpa-h1 {
    font-size: 34px;
    margin: 0 0 16px;
    color: var(--vpa-navy);
    letter-spacing: -.02em;
    line-height: 1.2;
  }

  .vpa-h2 {
    font-size: 24px;
    color: var(--vpa-navy);
    margin: 38px 0 14px;
    letter-spacing: -.01em;
    line-height: 1.3;
  }

  .vpa-p {
    line-height: 1.7;
    color: var(--vpa-muted);
    margin: 0 0 16px;
    font-size: 15.5px;
  }

  .vpa-strong {
    color: var(--vpa-ink);
  }

  .vpa-top-grid {
    display: flex;
    gap: 40px;
    margin-bottom: 16px;
  }

  .vpa-intro {
    flex: 1.5;
  }

  .vpa-thumb {
    flex: 1;
    background: var(--vpa-card);
    border: 1px solid var(--vpa-line);
    border-radius: 10px;
    padding: 19px;
    text-align: center;
  }

  .vpa-thumb img {
    max-width: 100%;
    border-radius: 6px;
  }

  .vpa-brand-cols {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 8px 32px;
    margin: 24px 0 40px;
  }

  .vpa-brand-link {
    color: #3a6fd8;
    font-size: 14.5px;
    padding: 4px 0;
    display: block;
  }

  .vpa-brand-link::before {
    content: "↗ ";
    color: var(--vpa-orange);
  }

  .vpa-list {
    padding-left: 18px;
    margin: 0 0 16px;
    color: var(--vpa-muted);
  }

  .vpa-list-item {
    margin-bottom: 6px;
    line-height: 1.6;
    font-size: 15.5px;
  }

  .vpa-list-item .vpa-strong {
    color: var(--vpa-ink);
  }

  .vpa-why-grid {
    display: flex;
    gap: 32px;
    align-items: stretch;
    margin: 24px 0 32px;
  }

  .vpa-why-col {
    flex: 1.4;
  }

  .vpa-why-col-intro {
    margin-bottom: 10px;
  }

  .vpa-why-box {
    flex: 1;
    background: var(--vpa-navy);
    border-radius: 10px;
    padding: 32px 24px;
    color: #fff;
    font-weight: 800;
    font-size: 30px;
    line-height: 1.25;
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  .vpa-why-box img {
    max-width: 100%;
    border-radius: 6px;
  }

  .vpa-accent {
    color: var(--vpa-orange);
  }

  /* ---------- RIGHT: sticky sidebar ---------- */
  .vpa-right {
    flex: 0 0 300px;
    position: sticky;
    top: 115px;
    align-self: flex-start;
    display: flex;
    flex-direction: column;
    gap: 19px;
  }

  .vpa-side-card {
    background: var(--vpa-card);
    border: 1px solid var(--vpa-line);
    border-radius: 12px;
    padding: 18px;
  }

  .vpa-video-box {
    position: relative;
    border-radius: 8px;
    overflow: hidden;
    background: var(--vpa-navy-deep);
    aspect-ratio: 16/10;
    display: flex;
    align-items: flex-end;
    padding: 13px;
  }

  .vpa-video-box::before {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(160deg, var(--vpa-navy), #1c2f66 60%, var(--vpa-navy-deep));
    opacity: .9;
  }

  .vpa-video-label {
    position: relative;
    z-index: 2;
    color: #fff;
    font-weight: 700;
    font-size: 15px;
    line-height: 1.3;
  }

  .vpa-video-sub {
    display: block;
    font-weight: 400;
    opacity: .75;
    font-size: 12px;
    margin-top: 3px;
  }

  .vpa-play-btn {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 52px;
    height: 52px;
    background: var(--vpa-orange);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 2;
    box-shadow: 0 6px 18px rgba(242, 101, 34, .45);
  }

  .vpa-play-btn::after {
    content: "";
    border-left: 14px solid #fff;
    border-top: 9px solid transparent;
    border-bottom: 9px solid transparent;
    margin-left: 3px;
  }

  .vpa-side-title {
    margin: 0 0 14px;
    font-size: 17px;
    color: var(--vpa-navy);
    font-weight: 700;
  }

  .vpa-field {
    width: 100%;
    padding: 10px 13px;
    margin-bottom: 10px;
    border: 1px solid var(--vpa-line);
    border-radius: 6px;
    background: #fff;
    font-size: 14px;
    color: var(--vpa-ink);
    font-family: inherit;
  }

  .vpa-textarea {
    resize: none;
    min-height: 70px;
  }

  .vpa-phone-row {
    display: flex;
    gap: 6px;
  }

  .vpa-phone-code {
    flex: 0 0 64px;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 1px solid var(--vpa-line);
    border-radius: 6px;
    font-size: 13px;
    color: var(--vpa-muted);
    background: #fff;
  }

  .vpa-captcha {
    display: flex;
    align-items: center;
    gap: 8px;
    border: 1px solid var(--vpa-line);
    border-radius: 6px;
    padding: 10px 13px;
    font-size: 13px;
    color: var(--vpa-muted);
    margin-bottom: 14px;
  }

  .vpa-btn {
    display: block;
    width: 100%;
    text-align: center;
    background: var(--vpa-orange);
    color: #fff;
    font-weight: 700;
    padding: 12px;
    border: none;
    border-radius: 24px;
    font-size: 15px;
    cursor: pointer;
  }

  .vpa-help-card {
    background: var(--vpa-navy);
    border-radius: 12px;
    padding: 19px;
    color: #fff;
  }

  .vpa-help-title {
    margin: 0 0 10px;
    font-size: 16px;
    font-weight: 600;
    line-height: 1.4;
  }

  .vpa-help-num {
    color: var(--vpa-orange);
    font-size: 21px;
    font-weight: 800;
    margin-bottom: 11px;
  }

  .vpa-help-text {
    color: #c7cbe0;
    font-size: 13px;
    line-height: 1.5;
    margin-bottom: 16px;
  }

  .vpa-help-actions {
    display: flex;
    gap: 10px;
  }

  .vpa-help-action {
    flex: 1;
    text-align: center;
    padding: 10px 6px;
    border-radius: 20px;
    font-size: 13px;
    font-weight: 700;
  }

  .vpa-help-enquire {
    background: var(--vpa-orange);
    color: #fff;
  }

  .vpa-help-whatsapp {
    background: #25d366;
    color: #fff;
  }

  @media (max-width:900px) {
    .vpa-page {
      flex-direction: column;
    }

    .vpa-right {
      position: static;
      width: 100%;
      flex: none;
    }

    .vpa-top-grid {
      flex-direction: column;
    }

    .vpa-brand-cols {
      grid-template-columns: repeat(2, 1fr);
    }

    .vpa-why-grid {
      flex-direction: column;
    }
  }
</style>
</head>

<body>

  <div class="vpa-page">

    <!-- LEFT COLUMN (scrolls) -->
    <div class="vpa-left">

      <div class="vpa-hero-banner">
        <span class="vpa-hero-tab">Home</span>
        <span class="vpa-hero-tab vpa-hero-tab-active" style="cursor: pointer;" onclick="window.location.href='#'">Armatures</span>
      </div>

      <div class="vpa-top-grid">
        <div class="vpa-intro">
          <h1 class="vpa-h1">Armature Manufacturer</h1>
          <p class="vpa-p">Are you looking for a reliable armature manufacturer in India ?? Then, Vicky Power Tools can provide suitable solutions for your requirements.</p>
          <p class="vpa-p">Vicky Power Tools is India’s No. 1 armature manufacturer located in New Delhi, Which make wide range of quality armatures for electric tools, Motors and Power Tools. Since 1982, the company has been manufacturing armatures for different types of Electric Tools, Motors and Power Tools including grinders, drills, hammers, cutters, blowers, circular saws, magnetic drill machine, threading machine, core cutting machines etc. With modern manufacturing facilities, skilled manpower and a strong focus on quality, Vicky Power Tools provides reliable products for industrial and commercial requirements. The company also develops armatures according to customer samples, specifications and voltage requirements such as 220V, 110V, 90V, 48V, 36V, 24V and 12V. Its brand PowerSpeed range includes armatures suitable for several leading power tool models and brands. Vicky Power Tools also supports OEM customers with design, development, testing and manufacturing solutions. With experience, product variety and customized manufacturing capabilities, the company serves customers across India as well as international markets.</p>
        </div>
        <div class="vpa-thumb">
          <img src="/../img/products/armarture1.jpg" alt="Armature Manufacturer">
        </div>
      </div>

      <div class="vpa-brand-cols">
        <a class="vpa-brand-link" href="#">Ralli Wolf</a><a class="vpa-brand-link" href="#">Atlas Copco</a><a class="vpa-brand-link" href="#">Keyang</a>
        <a class="vpa-brand-link" href="#">Bosch / Skil</a><a class="vpa-brand-link" href="#">Milwaukee</a><a class="vpa-brand-link" href="#">Cumi</a>
        <a class="vpa-brand-link" href="#">Hitachi / HIKOKI</a><a class="vpa-brand-link" href="#">LG</a><a class="vpa-brand-link" href="#">PowerSpeed</a>
        <a class="vpa-brand-link" href="#">Black &amp; Decker</a><a class="vpa-brand-link" href="#">Aarvy/Mitachi</a><a class="vpa-brand-link" href="#">Baw</a>
        <a class="vpa-brand-link" href="#">Dewalt</a><a class="vpa-brand-link" href="#">Nippon / Neutron</a><a class="vpa-brand-link" href="#">Dongcheng</a>
        <a class="vpa-brand-link" href="#">KPT</a><a class="vpa-brand-link" href="#">Metabo</a><a class="vpa-brand-link" href="#">Endico</a>
        <a class="vpa-brand-link" href="#">Ryobi</a><a class="vpa-brand-link" href="#">Eastman</a><a class="vpa-brand-link" href="#">Ferm</a>
        <a class="vpa-brand-link" href="#">Makita</a><a class="vpa-brand-link" href="#">Casal/Kress</a><a class="vpa-brand-link" href="#">Ken</a>
        <a class="vpa-brand-link" href="#">Webtool</a><a class="vpa-brand-link" href="#">Hilti</a><a class="vpa-brand-link" href="#">Powertex</a>
        <a class="vpa-brand-link" href="#">Jepson</a><a class="vpa-brand-link" href="#">Horse Power</a><a class="vpa-brand-link" href="#">Stanley</a>
        <a class="vpa-brand-link" href="#">Aeg</a><a class="vpa-brand-link" href="#">Agp</a><a class="vpa-brand-link" href="#">Miscellaneous</a>
      </div>

      <h2 class="vpa-h2">Power Tools Armature</h2>
      <p class="vpa-p">Armature is very important component of the motor that helps a power tool operate efficiently. Vicky Power Tools manufactures a wide range of power tool armatures for different applications and machine types. Its product range includes armatures suitable for grinder machines, magnetic drill machine, threading machine, drill machines, hammer machines, cutter machines, blowers, vacuum motors, broach cutters, core cutting machines, circular saws and screwdrivers. The company manufactures armatures under the brand name PowerSpeed and can also develop products according to customer requirements, samples and technical specifications. Vicky Power Tools manufacture Armatures in Different voltage like 220V, 110V, 90V, 48V, 36V, 24V and 12V. Vicky Power Tools make armatures which are suitable for different power tools brands and models, which make easier for dealers, repairing professionals, distributors and industrial buyers to find the right replacement of Armature. Quality control and testing are important parts of the company's manufacturing process. With decades of experience in the industry, Vicky Power Tools focuses on providing more than 2000 types armatures with consistent performance and suitable specifications for different power tools.</p>

      <h2 class="vpa-h2">Armature Wholesale Suppliers</h2>
      <p class="vpa-p">Vicky Power Tools is an Armature manufacturer and armature wholesale supplier in New Delhi, India which offer a wide range of armatures for power tools and electric motors. The company supplies products for different machines like grinders, drills, magnetic drill machine, threading machine, rotary hammers, cutters, blowers, circular saws, core cutting machines etc. The huge range of armatures is designed to meet the requirements of distributors, wholesalers, dealers, repair businesses, OEMs and industrial customers. Vicky Power Tools manufactures products under the brand name Power Speed and offers customized solutions for armature based on customer samples and specifications. The company has manufacturing facilities for making different armature in different voltage requirements which helps for making it suitable for customers with varied technical needs. Its product range covers armatures suitable for several major power tool models and brands which help buyers source multiple requirements from one supplier. With manufacturing experience since 1982, modern production facilities and quality testing processes, Vicky Power Tools focus on consistent product quality and timely delivery. For customers who are searching for armature wholesale suppliers in India, the company offers a wide range of Armatures, competitive solutions and customized manufacturing support for both domestic and international market.</p>

      <h2 class="vpa-h2">Power Tools Armature Dealer</h2>
      <p class="vpa-p">Vicky Power Tools is a top power tools armature dealer and manufacturer in India which supplying armatures for a wide variety of electric power tools and machines. The company offers armatures suitable for different machines including angle grinders, drill machines, rotary hammers, marble cutters, magnetic drills, threading machine, circular saws, blowers, core cutting machines and other professional tools. Through its brand Power Speed, customers can find armatures suitable for many popular power tools brands and models. This makes the company a useful source for dealers, repair centers, distributors, workshops and industrial buyers looking for replacement armatures. Vicky Power Tools also provides customized solution for different armatures on customer requirements, samples and specifications, including different voltage options. The company has been working in the power tools and electrical component industry since 1982 and has developed manufacturing and quality-control system to serve both Indian and international customers. Its product portfolio includes armatures, field coils, power tools and SPM special purpose motors. Whether customer require a single model or bulk supply, PowerSpeed is an experienced power tools armature dealer which can help to ensure better product availability and all time technical support. Vicky Power Tools meet different armature requirements by combining manufacturing experience, product variety and customer focused service which make PowerSpeed brand first choice in India.</p>

      <h2 class="vpa-h2">Why Choose Vicky Power Tools?</h2>
      <div class="vpa-why-grid">
        <div class="vpa-why-col">
          <p class="vpa-p vpa-why-col-intro">Here's what makes them stand out:</p>
          <ul class="vpa-list">
            <li class="vpa-list-item">Over 40 years of experience</li>
            <li class="vpa-list-item">Tailor-made solutions for different voltage and usage needs</li>
            <li class="vpa-list-item">Trusted quality and long-lasting performance</li>
            <li class="vpa-list-item">A wide product range including armatures, motors and power tools</li>
            <li class="vpa-list-item">Fast and helpful customer support</li>
            <li class="vpa-list-item">Global clients, made proudly in India</li>
          </ul>
          <p class="vpa-p">They don't just manufacture parts — they help build industries. Their components help assemble cars, build homes, run factories and so much more.</p>
        </div>
        <div class="vpa-why-box"><img src="/../img/av8.png" alt="Vicky Power Tools"></div>
      </div>

  </div>

  <!-- RIGHT COLUMN (sticky) -->
  <div class="vpa-right">

    <div class="vpa-side-card" style="padding:0;overflow:hidden;">
      <div class="vpa-video-box">
        <div class="vpa-play-btn"></div>
        <div class="vpa-video-label">This Is What 30 Years of Gears Looks Like<small class="vpa-video-sub">Swadeshi Gears</small></div>
      </div>
    </div>

    <div class="vpa-side-card">
      <h3 class="vpa-side-title">Request A <span class="vpa-accent">Call Back</span> Now</h3>
      <input class="vpa-field" type="text" placeholder="First Name*">
      <input class="vpa-field" type="email" placeholder="Email*">
      <div class="vpa-phone-row">
        <div class="vpa-phone-code">🇮🇳 +91</div>
        <input class="vpa-field" style="flex:1;" type="tel" placeholder="Mobile Number">
      </div>
      <input class="vpa-field" type="text" placeholder="Your Location*">
      <textarea class="vpa-field vpa-textarea" placeholder="Your Message*"></textarea>
      <label class="vpa-captcha"><input type="checkbox"> I'm not a robot</label>
      <button class="vpa-btn">Let's Connect →</button>
    </div>

    <div class="vpa-help-card">
      <h4 class="vpa-help-title">Need help with Armature Manufacturing?</h4>
      <div class="vpa-help-num">+91-88102-54866</div>
      <p class="vpa-help-text">Get expert support for armature manufacturing, pricing and customization. Call or WhatsApp us for quick assistance and reliable solutions!</p>
      <div class="vpa-help-actions">
        <a href="#" class="vpa-help-action vpa-help-enquire">Send Enquiry</a>
        <a href="#" class="vpa-help-action vpa-help-whatsapp">WhatsApp</a>
      </div>
    </div>

  </div>

</div>
<?php
include_once 'includes/footer.php'
?>