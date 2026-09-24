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

  /* .vpa-hero-banner{
    background:linear-gradient(120deg,var(--vpa-navy-deep),var(--vpa-navy));
    border-radius:10px;
    padding:18px 24px;
    margin-bottom:32px;
    display:flex;
    gap:10px;
  } */
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

  .vpa-thumb-tag {
    font-weight: 800;
    color: var(--vpa-navy);
    font-size: 14px;
    letter-spacing: .05em;
  }

  .vpa-thumb-brand {
    font-weight: 800;
    color: var(--vpa-orange);
    font-size: 21px;
    margin: 3px 0;
  }

  .vpa-thumb-sub {
    font-size: 11px;
    letter-spacing: .15em;
    color: var(--vpa-muted);
    margin-bottom: 13px;
  }

  .vpa-thumb-circle {
    width: 120px;
    height: 120px;
    margin: 0 auto;
    border-radius: 50%;
    background: radial-gradient(circle at 35% 30%, #f3c94a, #2b6fd6 55%, #12386e 100%);
    position: relative;
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

  .vpa-industries {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    gap: 14px;
    margin: 24px 0;
  }

  .vpa-industry-card {
    background: var(--vpa-card);
    border: 1px solid var(--vpa-line);
    border-radius: 10px;
    text-align: center;
    padding: 19px 8px;
    font-size: 13.5px;
    font-weight: 600;
    color: var(--vpa-navy);
  }

  .vpa-industry-icon {
    font-size: 26px;
    display: block;
    margin-bottom: 8px;
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

  .vpa-accent {
    color: var(--vpa-orange);
  }

  .vpa-final-thoughts {
    border-top: 1px solid var(--vpa-line);
    margin-top: 40px;
    padding-top: 29px;
  }

  .vpa-final-thoughts .vpa-h2 {
    margin-top: 0;
  }

  /* ---------- RIGHT: sticky sidebar ---------- */
  .vpa-right {
    flex: 0 0 300px;
    position: sticky;
    top: 24px;
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

    .vpa-industries {
      grid-template-columns: repeat(3, 1fr);
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
          <h1 class="vpa-h1">Power Tools Armatures</h1>
          <p class="vpa-p">We are known as <strong class="vpa-strong">ARMATURES SPECIALIST</strong> as we provide complete solutions for all types of armatures in different motors or tools like grinder machine, drill machine, hammer machine, cutter machine, blower machine, vacuum motor, broach cutter machine, seaming motor, core cutting machine, circular saw, screw driver etc, under the brand name <strong class="vpa-strong">Vicky PowerSpeed</strong>.</p>
          <p class="vpa-p">We specialize in providing products as per customer's requirement, samples &amp; specifications in any kind of volt like <strong class="vpa-strong">220v, 110v, 90v, 48v, 36v, 24v, 12v</strong> etc.</p>
        </div>
        <div class="vpa-thumb">

          <img src="/../img/products/armarture1.jpg" alt="">
          <!-- <div class="vpa-thumb-tag">VICKY</div>
        <div class="vpa-thumb-brand">Power Speed</div>
        <div class="vpa-thumb-sub">ARMATURE</div>
        <div class="vpa-thumb-circle"></div> -->
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

      <h2 class="vpa-h2">Vicky Power Tools</h2>
      <p class="vpa-p">Every time you use a drill, cutter or grinder, there's a powerful engine inside that makes it all possible. But have you ever thought about what's really running the show? The answer is a small but mighty part called an <strong class="vpa-strong">armature</strong> — and one company in India has been perfecting this part for over 40 years, i.e. Vicky Power Tools.</p>
      <p class="vpa-p">Headquartered in <strong class="vpa-strong">New Delhi</strong>, Vicky Power Tools is a well-known <strong class="vpa-strong">Armature Manufacturer, Exporter and Dealer</strong>, trusted by customers across India and around the world. Working under the brand name <strong class="vpa-strong">PowerSpeed</strong>, they've been creating strong, high-performance motor parts and power tools since <strong class="vpa-strong">1982</strong>. Over the years, they've built a very solid reputation for quality, precision and reliability.</p>

      <h2 class="vpa-h2">What Exactly Do They Do?</h2>
      <p class="vpa-p">Vicky Power Tools makes the key components that drive electric tools. These aren't just parts — they're the heart and soul of every motor-powered machine. Here's what they offer:</p>
      <ul class="vpa-list">
        <li class="vpa-list-item"><strong class="vpa-strong">Armatures:</strong> Think of these as the core part of your motor. Vicky manufactures armatures that are super tough and made to last through years of hard use.</li>
        <li class="vpa-list-item"><strong class="vpa-strong">Field Coils:</strong> These help create the magnetic force needed for motors to work. Without them, your tools wouldn't spin or move.</li>
        <li class="vpa-list-item"><strong class="vpa-strong">Power Tools:</strong> They don't just make motor parts, they also build powerful tools like drills, grinders and cutters used in construction, repair shops and industries.</li>
        <li class="vpa-list-item"><strong class="vpa-strong">Special Purpose Motors:</strong> Need a motor that runs on a specific voltage like 220V, 110V, 90V or 12V? Vicky can create it — great for special machines and custom setups.</li>
        <li class="vpa-list-item"><strong class="vpa-strong">Construction Tools and Abrasives:</strong> Whether you're cutting tiles or polishing metal, Vicky offers tools that get the job done right.</li>
      </ul>

      <h2 class="vpa-h2">A Journey of Trust, Quality, and Growth</h2>
      <p class="vpa-p">Vicky Power Tools started small in the early 1980s, with a mission to build electric motor parts that professionals could depend on. Today, they've grown into one of the most trusted names in India's power tools industry. Their products are now used across industries, including:</p>

      <div class="vpa-industries">
        <div class="vpa-industry-card"><span class="vpa-industry-icon">🚗</span>Automotive</div>
        <div class="vpa-industry-card"><span class="vpa-industry-icon">✈️</span>Aviation</div>
        <div class="vpa-industry-card"><span class="vpa-industry-icon">🏗️</span>Construction</div>
        <div class="vpa-industry-card"><span class="vpa-industry-icon">🏭</span>Manufacturing</div>
        <div class="vpa-industry-card"><span class="vpa-industry-icon">⚡</span>Energy</div>
        <div class="vpa-industry-card"><span class="vpa-industry-icon">🚚</span>Transportation</div>
      </div>

      <p class="vpa-p">Their success didn't happen overnight. It's the result of staying focused on <strong class="vpa-strong">quality</strong>, building strong <strong class="vpa-strong">customer relationships</strong>, and always looking for ways to improve.</p>

      <h2 class="vpa-h2">Armature Manufacturer in India</h2>
      <p class="vpa-p">Looking for a reliable armature manufacturer in India? Vicky Power Tools is India's leading armature manufacturer, based in New Delhi, making a wide range of quality armatures for electric tools, motors and power tools. Since 1982, the company has manufactured armatures for grinders, drills, hammers, cutters, blowers, circular saws, magnetic drill machines, threading machines, core cutting machines and more. With modern manufacturing facilities, skilled manpower and a strong focus on quality, Vicky Power Tools develops armatures to customer samples, specifications and voltage requirements such as 220V, 110V, 90V, 48V, 36V, 24V and 12V. Its brand PowerSpeed covers armatures suitable for several leading power tool models and brands, and the company also supports OEM customers with design, development, testing and manufacturing solutions across India and international markets.</p>

      <h2 class="vpa-h2">Power Tools Armature</h2>
      <p class="vpa-p">The armature is one of the most important components of a motor, helping a power tool run efficiently. Vicky Power Tools manufactures armatures for grinder machines, magnetic drill machines, threading machines, drill machines, hammer machines, cutter machines, blowers, vacuum motors, broach cutters, core cutting machines, circular saws and screwdrivers &mdash; under the PowerSpeed brand, and also to customer specifications. Armatures are available in different voltages including 220V, 110V, 90V, 48V, 36V, 24V and 12V, and are made to suit a wide range of power tool brands and models, making it easier for dealers, repair professionals, distributors and industrial buyers to find the right replacement. With decades of experience, Vicky Power Tools offers more than 2000 types of armatures with consistent performance and quality.</p>

      <h2 class="vpa-h2">Armature Wholesale Suppliers</h2>
      <p class="vpa-p">Vicky Power Tools is an armature manufacturer and wholesale supplier based in New Delhi, offering armatures for grinders, drills, magnetic drill machines, threading machines, rotary hammers, cutters, blowers, circular saws, core cutting machines and more. The range is built for distributors, wholesalers, dealers, repair businesses, OEMs and industrial customers, manufactured under the PowerSpeed brand with customized solutions based on customer samples and specifications. Different voltage options are available to suit varied technical needs, and the product range covers several major power tool models and brands so buyers can source multiple requirements from a single supplier. With manufacturing experience since 1982, modern production facilities and quality testing processes, Vicky Power Tools focuses on consistent quality and timely delivery for both domestic and international markets.</p>

      <h2 class="vpa-h2">Power Tools Armature Dealer</h2>
      <p class="vpa-p">Vicky Power Tools is a top power tools armature dealer and manufacturer in India, supplying armatures for angle grinders, drill machines, rotary hammers, marble cutters, magnetic drills, threading machines, circular saws, blowers, core cutting machines and other professional tools. Through the PowerSpeed brand, customers can find armatures suited to many popular power tool brands and models, making the company a reliable source for dealers, repair centers, distributors, workshops and industrial buyers. Customized armature solutions are available based on customer requirements, samples, specifications and voltage. Serving the power tools and electrical component industry since 1982, the product portfolio also includes field coils and special purpose motors (SPM), backed by dependable technical support for single-unit or bulk supply requirements.</p>

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
        <div class="vpa-why-box"><img src="/../img/av8.png" alt=""></div>
      </div>

      <div class="vpa-final-thoughts">
        <h2 class="vpa-h2">Final Thoughts</h2>
        <p class="vpa-p">If you're looking for a trusted partner in the world of power tools and motor components, Vicky Power Tools is a name you should definitely know. With decades of experience, top-quality products and a commitment to customer satisfaction, they're not just a manufacturer — they're someone you can rely on.</p>
        <p class="vpa-p">So, next time your power tool works like a champ, take a second to think about what's spinning inside. Chances are, it's powered by Vicky Power Tools — the brand behind the strength.</p>
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