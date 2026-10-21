<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Vicky Power Tools</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Add All Genereal Links -->
    <?php include_once 'includes/all_links.php'; ?>

</head>

<!-- Add Header -->
<?php include_once 'includes/header.php'; ?>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, Helvetica, sans-serif;
        color: #222;
        line-height: 1.7;
        background: #f7f8fa;
    }

    a {
        text-decoration: none;
    }

    .container {
        width: 90%;
        max-width: 1200px;
        margin: auto;
        position: relative;
    }

    /* HERO */
    .hero {
        background: linear-gradient(135deg, rgba(8, 18, 35, .95), rgba(18, 53, 86, .92)), url("images/armature-manufacturing.jpg") center/cover;
        padding: 110px 0;
        color: #fff;
    }

    .hero-content {
        max-width: 780px;
    }

    .tag {
        display: inline-block;
        background: #f7941d;
        color: #fff;
        padding: 7px 18px;
        border-radius: 30px;
        font-size: 14px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .hero h1 {
        font-size: 52px;
        line-height: 1.15;
        margin-bottom: 22px;
    }

    .hero p {
        font-size: 19px;
        color: #e6edf5;
        margin-bottom: 32px;
    }

    .buttons {
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
    }

    .btn {
        padding: 14px 28px;
        border-radius: 5px;
        font-weight: bold;
        display: inline-block;
        transition: .3s;
    }

    .btn-primary {
        background: #f7941d;
        color: #fff;
    }

    .btn-primary:hover {
        background: #db7608;
        transform: translateY(-2px);
    }

    .btn-outline {
        border: 1px solid #fff;
        color: #fff;
    }

    .btn-outline:hover {
        background: #fff;
        color: #16283d;
    }

    /* STATS */
    .stats {
        margin-top: -45px;
        position: relative;
    }

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        background: #fff;
        box-shadow: 0 10px 35px rgba(0, 0, 0, .1);
        border-radius: 10px;
        overflow: hidden;
    }

    .stat {
        text-align: center;
        padding: 28px 15px;
        border-right: 1px solid #eee;
    }

    .stat:last-child {
        border-right: 0;
    }

    .stat h3 {
        color: #f7941d;
        font-size: 30px;
    }

    .stat p {
        color: #555;
        font-size: 14px;
    }

    /* SECTIONS */
    section {
        padding: 85px 0;
    }

    .section-title {
        text-align: center;
        margin-bottom: 45px;
    }

    .section-title span {
        color: #f7941d;
        font-weight: bold;
        text-transform: uppercase;
        font-size: 14px;
        letter-spacing: 1px;
    }

    .section-title h2 {
        font-size: 38px;
        color: #15283d;
        margin-top: 8px;
    }

    .section-title p {
        max-width: 750px;
        margin: 12px auto 0;
        color: #666;
    }

    /* ABOUT */
    .about-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 50px;
        align-items: center;
    }

    .about-image {
        width: 400px;
        border-radius: 12px;
        background: linear-gradient(rgba(0, 0, 0, .25), rgba(0, 0, 0, .25)), url("images/armature-factory.jpg") center/cover;
    }

    .about-content h2 {
        font-size: 36px;
        color: #15283d;
        margin-bottom: 20px;
    }

    .about-content p {
        margin-bottom: 15px;
        color: #555;
    }

    /* PRODUCTS */
    .products {
        background: #fff;
    }

    .product-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 22px;
    }

    .product-card {
        background: #f8f9fb;
        padding: 30px;
        border-radius: 10px;
        border: 1px solid #e8e8e8;
        transition: .3s;
    }

    .product-card:hover {
        transform: translateY(-7px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, .09);
        border-color: #f7941d;
    }

    .product-icon {
        width: 55px;
        height: 55px;
        background: #fff0df;
        color: #f7941d;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        margin-bottom: 18px;
    }

    .product-card h3 {
        color: #15283d;
        margin-bottom: 10px;
    }

    .product-card p {
        color: #666;
        font-size: 15px;
    }

    /* INDUSTRIES / CUSTOMERS */
    .industry-section {
        background: #15283d;
        color: #fff;
    }

    .industry-section .section-title h2 {
        color: #fff;
    }

    .industry-section .section-title p {
        color: #cbd5df;
    }

    .industry-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    .industry {
        border: 1px solid rgba(255, 255, 255, .15);
        padding: 25px;
        border-radius: 8px;
        background: rgba(255, 255, 255, .04);
    }

    .industry h3 {
        margin-bottom: 8px;
    }

    .industry p {
        color: #cbd5df;
        font-size: 14px;
    }

    /* OEM */
    .oem {
        background: #fff;
    }

    .oem-box {
        background: linear-gradient(135deg, #fff5e8, #ffffff);
        padding: 50px;
        border-left: 5px solid #f7941d;
        border-radius: 10px;
    }

    .oem-box h2 {
        color: #15283d;
        margin-bottom: 15px;
    }

    .oem-box p {
        color: #555;
        margin-bottom: 15px;
    }

    .oem-list {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        text-align: center;
        gap: 10px;
        margin-top: 20px;
    }

    .oem-list div {
        font-weight: 600;
        width: max-content;
    }

    .oem-list div::before {
        content: "✓";
        color: #f7941d;
        margin-right: 8px;
    }

    /* FAQ */
    .faq {
        max-width: 850px;
        margin: auto;
    }

    .faq-item {
        background: #fff;
        margin-bottom: 12px;
        border-radius: 7px;
        overflow: hidden;
        border: 1px solid #e5e5e5;
    }

    .faq-question {
        padding: 18px 22px;
        font-weight: bold;
        cursor: pointer;
        color: #15283d;
        position: relative;
    }

    .faq-question::after {
        content: "+";
        position: absolute;
        right: 22px;
        font-size: 20px;
    }

    .faq-answer {
        display: none;
        padding: 0 22px 20px;
        color: #666;
    }

    .faq-item.active .faq-answer {
        display: block;
    }

    .faq-item.active .faq-question::after {
        content: "-";
    }

    /* CTA */
    .cta {
        background: linear-gradient(135deg, #f7941d, #d96f05);
        color: #fff;
        text-align: center;
    }

    .cta h2 {
        font-size: 40px;
        margin-bottom: 15px;
    }

    .cta p {
        max-width: 700px;
        margin: 0 auto 28px;
    }

    .cta .btn {
        background: #15283d;
        color: #fff;
    }

    /* RESPONSIVE */
    @media(max-width:900px) {
        .hero h1 {
            font-size: 40px;
        }

        .stats-grid,
        .product-grid,
        .industry-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .about-grid {
            grid-template-columns: 1fr;
        }
    }

    @media(max-width:600px) {
        .hero {
            padding: 75px 0;
        }

        .hero h1 {
            font-size: 34px;
        }

        .hero p {
            font-size: 16px;
        }

        .stats-grid,
        .product-grid,
        .industry-grid,
        .oem-list {
            grid-template-columns: 1fr;
        }

        .stat {
            border-right: 0;
            border-bottom: 1px solid #eee;
        }

        section {
            padding: 60px 0;
        }

        .section-title h2 {
            font-size: 30px;
        }

        .oem-box {
            padding: 30px 22px;
        }

        .cta h2 {
            font-size: 30px;
        }
    }

    .uoasdu {
        width: 100%;
        border-radius: 15px;
    }

    .asdhuiih {
        position: absolute;
        width: 300px;
        left: 100%;
        top: 50%;
        transform: translate(-100%, -50%);
        border-radius: 15px;
        overflow: hidden;
        margin-top: 26px;

        img {
            transition: .25s ease;
            width: 100%;
        }
    }

    .asdhuiih:hover img {
        transform: scale(1.05);
        transition: .25s ease;
    }

    @media (max-width:640px) {
        .asdhuiih {
            display: none !important;
        }
    }

    /* ALIGNMENT FIXES */
    .section-title {
        max-width: 1000px;
        margin-left: auto;
        margin-right: auto;
    }

    .section-title h2 {
        font-size: 40px;
        letter-spacing: 1px;
        width: 100%;
        text-align: center !important;
    }

    .section-title p,
    .oem-box h2,
    .oem-box p,
    div[style*="text-align:center"] p,
    p[style*="text-align:center"] {
        text-align: center !important;
    }

    .about-content h2 {
        text-align: left;
    }

    @media(max-width:600px) {
        .section-title h2 {
            font-size: 28px;
        }
    }

    .note-box {
        margin-top: 25px;
        background: #fff8ef;
        border: 1px solid #f7d9b0;
        border-left: 5px solid #f7941d;
        border-radius: 6px;
        padding: 16px 22px;
        color: #555;
        font-size: 15px;
        text-align: center;
    }


    @media (max-width:494px) {
        .about-image {
            width: 293px !important;
        }

        .oem-list div {
            width: 100% !important;
        }
    }

      h2{
        font-size: 30px !important;
    }
</style>


<!-- HERO -->
<section class="hero">
    <div class="container" style="padding-top:60px;">
        <div class="hero-content">

            <h2 style="color: #fff;">Welcome to Vicky Power Tools</h2>

            <p>
                Manufacturing quality-driven Armatures, Field Coils, Electric Tools & Special Purpose Motors at competitive prices.
            </p>

            <div class="buttons" style="justify-content: left;">
                <a href="https://wa.me/918595734416?text=Hello%20Vicky%20Power%20Tools%2C%20I%20need%20a%20quote%20for%20armature." target="_blank" rel="noopener" class="btn btn-primary">Get a Quote</a>
                <a href="tel:+918595734416" class="btn btn-outline">Call Now</a>
            </div>
        </div>

        <span class="asdhuiih">
            <img src="assets_2_0/img/armarture1.jpg" alt="">
        </span>
    </div>
</section>


<!-- STATS -->
<div class="stats">
    <div class="container">
        <div class="stats-grid">

            <div class="stat">
                <h3>40+</h3>
                <p style="text-align: center;">Years of Industry Experience</p>
            </div>

            <div class="stat">
                <h3>2000+</h3>
                <p style="text-align: center;">Armature Models</p>
            </div>

            <div class="stat">
                <h3>OEM</h3>
                <p style="text-align: center;">Customized Solutions</p>
            </div>

            <div class="stat">
                <h3>India</h3>
                <p style="text-align: center;">Supply & Export Support</p>
            </div>

        </div>
    </div>
</div>


<!-- section -->
<style>
    /* Aapke layout ke liye specific unique CSS (No *, :root, html, body) */
    .vpt-about-section {
        padding: 60px 20px;
        /* background: #ffffff; */
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    }

    .vpt-about-section .container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .vpt-about-section .about-grid {
        display: grid;
        grid-template-columns: 1fr 1.5fr;
        gap: 10px;
        align-items: center;
    }

    .vpt-about-section .about-image img.uoasdu {
        width: 100%;
        height: auto;
        border-radius: 8px;
        object-fit: cover;
    }

    .vpt-about-section .about-content h2,
    .vpt-about-section .about-content h3 {
        font-size: 24px;
        font-weight: bold;
        color: #111111;
        margin-bottom: 20px;
        line-height: 1.4;
    }

    .vpt-about-section .about-content p {
        font-size: 15px;
        line-height: 1.6;
        margin-bottom: 20px;
        color: #333333;
    }

    .vpt-about-section .about-content strong {
        font-weight: 600;
        color: #111111;
    }

    /* Responsive design for smaller screens */
    @media (max-width: 768px) {
        .vpt-about-section .about-grid {
            grid-template-columns: 1fr;
        }
    }

    .iahwdiawdsi {
        padding: 15px 15px 10px;
        position: relative;
        transition: .25s ease;

    }

    .iahwdiawdsi::before {
        content: '✅';
        display: flex;
        align-items: center;
        justify-content: center;
        width: max-content;
        position: absolute;
        top: 50%;
        left: 10%;
        transform: translateY(-50%);
    }


    .iahwdiawdsi:hover {
        transform: scale(1.05);
        transition: .25s ease;
    }
</style>




<section class="vpt-about-section">
    <div class="container">
        <div class="about-grid">

            <div class="about-image">
                <img class="uoasdu" src="assets_2_0/img/00033.jpg" alt="Armature Manufacturers in Chennai">
            </div>

            <div class="about-content">

                <h1>Armature Manufacturers - Wholesaler in Chennai, Tamil Nadu</h1>

                <p>
                    The armature must be suitable for the motor and the tool it is intended for. For power-tool manufacturers, repair centers, distributors and industrial buyers it is often more important to find the right component rather than just to find a seller.
                </p>

                <p>
                    Vicky Power Tools manufacture &amp; supply armatures for power tools &amp; electric motor applications. We are based out of New Delhi, India and serve the customers all over India including Chennai and other parts of Tamil Nadu.
                </p>

                <p>
                    If you are looking for armature manufacturers in Chennai, Tamil Nadu, an armature supplier in Chennai or an armature dealer in Chennai, you can contact Vicky Power Tools for product compatibility, specifications and supply requirements.
                </p>

            </div>

        </div>
    </div>
</section>


<section class="oem">
    <div class="container">

        <div class="oem-box">

            <h2>Not all armatures are for all machines</h2>

            <p>
                Two armatures may appear to be the same, but are very different technically. Using the wrong replacement might lead to fitting problems or the tool not working as it should.
            </p>

            <p>
                Good idea to check before you buy an armature:
            </p>

            <div class="oem-list">
                <div>Name and model of the power tool</div>
                <div>Diameter of shaft and overall length of shaft</div>
                <div>Number of teeth and size of the wheels</div>
                <div>Bearing size and location</div>
                <div>Sizes of commutators</div>
                <div>Total length of armature and its construction</div>
            </div>

            <div class="note-box">Vicky Power Tools caters to armature needs for a variety of electric tools and power-tool models. Customers can also send information or pictures of the existing component to help find a suitable replacement.</div>

        </div>

    </div>
</section>


<section class="alt-sec">
    <div class="container">

        <div class="alt-head">
            <h2>Armature Manufacturing for Various Power Tool Applications</h2>

            <p>
                Many motor driven tools used in repair, construction, fabrication and industrial maintenance environments have armatures. Vicky Power Tools Armature Range For Compatible Applications including:
            </p>
            <p>
                Actual product selection will vary by machine. Availability check, please contact us with your model details.
            </p>
        </div>

        <div class="alt-grid" style="grid-template-columns:repeat(2,1fr);">

            <div class="alt-card">
                <span class="alt-no">01</span>
                <div class="alt-icon">⚙</div>
                <h3>Grinders and Cutting Machines</h3>
                <p>Armature for some angle grinders and cut-off machines.</p>
            </div>

            <div class="alt-card">
                <span class="alt-no">02</span>
                <div class="alt-icon">⚡</div>
                <h3>Drill Equipment</h3>
                <p>Armatures for electric drills and other compatible drill equipment.</p>
            </div>

            <div class="alt-card">
                <span class="alt-no">03</span>
                <div class="alt-icon">◉</div>
                <h3>Planing and Finishing Tools</h3>
                <p>Fittings for certain planing and polishing machines and associated equipment.</p>
            </div>

            <div class="alt-card">
                <span class="alt-no">04</span>
                <div class="alt-icon">+</div>
                <h3>Specialised Power Tools</h3>
                <p>Armature for other compatible machines, subject to model and specifications.</p>
            </div>

        </div>

    </div>
</section>


<style>
    /* Is section ka CSS (scoped: sirf .alt-sec par lagu hoga) */
    .alt-sec .alt-head {
        max-width: 900px;
        margin: 0 auto 50px;
        text-align: center;
    }

    .alt-sec .alt-head h2 {
        font-size: 40px;
        letter-spacing: 1px;
        color: #15283d;
        margin-bottom: 20px;
        text-align: center;
    }

    .alt-sec .alt-head p {
        color: #666;
        margin-bottom: 12px;
        text-align: center !important;
    }

    .alt-sec .alt-head .alt-highlight {
        display: inline-block;
        background: #fff8ef;
        border: 1px solid #f7d9b0;
        border-left: 5px solid #f7941d;
        border-radius: 6px;
        padding: 14px 24px;
        color: #15283d;
        margin-top: 8px;
    }

    .alt-sec .alt-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 24px;
    }

    .alt-sec .alt-card {
        position: relative;
        background: #fff;
        border-radius: 12px;
        border-top: 4px solid #f7941d;
        padding: 34px 28px 30px;
        box-shadow: 0 6px 22px rgba(0, 0, 0, .06);
        overflow: hidden;
        transition: .3s;
    }

    .alt-sec .alt-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 16px 36px rgba(0, 0, 0, .12);
    }

    .alt-sec .alt-no {
        position: absolute;
        top: 8px;
        right: 18px;
        font-size: 54px;
        font-weight: bold;
        color: #f1f3f6;
        line-height: 1;
    }

    .alt-sec .alt-icon {
        position: relative;
        width: 55px;
        height: 55px;
        background: #fff0df;
        color: #f7941d;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        margin-bottom: 18px;
    }

    .alt-sec .alt-card h3 {
        position: relative;
        color: #15283d;
        margin-bottom: 10px;
    }

    .alt-sec .alt-card p {
        position: relative;
        color: #666;
        font-size: 15px;
        text-align: left;
    }

    @media(max-width:900px) {
        .alt-sec .alt-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media(max-width:600px) {
        .alt-sec .alt-head h2 {
            font-size: 28px;
        }

        .alt-sec .alt-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<section class="industry-section">
    <div class="container">

        <div class="section-title">
            <h2>Armature Supplier in Chennai for Businesses Needing Consistent Sourcing</h2>
            <p>
                An armature is not simply a spare for a repairer or an industrial buyer. It's a part that has to fit the machine, meet the specs and be available through a practical purchasing process.
            </p>
            <p>Vicky Power Tools welcomes enquiries from Chennai based business such as:</p>
        </div>

        <div class="industry-grid">
            <div class="industry iahwdiawdsi">
                <p style="text-align: center;">Power tool repair and service centers</p>
            </div>
            <div class="industry iahwdiawdsi">
                <p style="text-align: center;">Industrial maintenance departments</p>
            </div>
            <div class="industry iahwdiawdsi">
                <p style="text-align: center;">Dealers of electrical and electronic equipment</p>
            </div>
            <div class="industry iahwdiawdsi">
                <p style="text-align: center;">Power tool distributors and resellers</p>
            </div>
            <div class="industry iahwdiawdsi">
                <p style="text-align: center;">Workshop and Fabrication Firms</p>
            </div>
            <div class="industry iahwdiawdsi">
                <p style="text-align: center;">OEMs and companies with special component requirements</p>
            </div>
        </div>

        <p style="text-align:center;margin-top:30px;color:#cbd5df;">
            In case you have a specific replacement armature requirement or wish to discuss recurring procurement, kindly share your model wise requirement to understand the application.
        </p>

    </div>
</section>


<section class="oem">
    <div class="container">

        <div class="oem-box">

            <h2>Custom Armature Development for OEM Needs</h2>

            <p>
                Some applications require an armature built around a particular machine, sample or technical specification. If the part has specific size or electrical requirements, a generic replacement may not be the answer.
            </p>

            <p>
                Vicky Power Tools develops armatures and related products to customer requirements, samples and specifications including different voltage requirements.
            </p>

            <p>
                We can discuss the following information with OEMs and businesses with specialised needs:
            </p>

            <div class="oem-list">
                <div>Type of machine and application</div>
                <div>Technical drawing or existing model</div>
                <div>Dimensions needed</div>
                <div>Voltage and electrical specifications</div>
                <div>Expected amount</div>
                <div>Test or performance requirements</div>
            </div>

            <div class="note-box">Custom development needs technical evaluation and confirmation by the company.</div>

        </div>

    </div>
</section>


<section class="alt-sec">
    <div class="container">

        <div class="alt-head">
            <h2>Why Choose Vicky Power Tools?</h2>
        </div>

        <div class="alt-grid">

            <div class="alt-card">
                <span class="alt-no">01</span>
                <div class="alt-icon">⚙</div>
                <h3>Experience in Armature Manufacturing</h3>
                <p>Vicky Power Tools has a history dating back to 1982 and began manufacturing power-tool armatures in 1986.</p>
            </div>

            <div class="alt-card">
                <span class="alt-no">02</span>
                <div class="alt-icon">⚡</div>
                <h3>Manufacturing &amp; Export Operations</h3>
                <p>The company is a manufacturer &amp; exporter of armatures, field coils, electric tools, power tools &amp; special purpose motors.</p>
            </div>

            <div class="alt-card">
                <span class="alt-no">03</span>
                <div class="alt-icon">◉</div>
                <h3>Product-Related Questions</h3>
                <p>Customers can enquire by exact model number, sample or technical specification rather than just appearance.</p>
            </div>

            <div class="alt-card">
                <span class="alt-no">04</span>
                <div class="alt-icon">+</div>
                <h3>Custom and OEM Requirements</h3>
                <p>The company develops according to the customer's requirements, samples, and specifications, subject to technical assessment.</p>
            </div>

            <div class="alt-card">
                <span class="alt-no">05</span>
                <div class="alt-icon">✓</div>
                <h3>Serving Customers All Over India</h3>
                <p>Vicky Power Tools is a New Delhi based company that caters to customers from other parts of India looking for armature supply for Chennai.</p>
            </div>

        </div>

    </div>
</section>


<!-- FAQ -->
<section style="display: none;">
    <div class="container">

        <div class="section-title">
            <h2>Frequently Asked Questions</h2>
        </div>

        <div class="faq">

            <div class="faq-item">
                <div class="faq-question">1. Do you supply armatures to customers in Chennai?</div>
                <div class="faq-answer">
                    Vicky Power Tools is an armature manufacturer based in Delhi, supplying armatures to customers all over India, including Chennai and Tamil Nadu.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">2. Can I contact Vicky Power Tools as a dealer in armature in Chennai?</div>
                <div class="faq-answer">
                    Yes. Dealers, distributors and resellers can enquire on compatible armatures, availability of products and bulk requirements.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">3. Is Vicky Power Tools situated in Chennai?</div>
                <div class="faq-answer">
                    No. The company is based in New Delhi and caters to its customers in Chennai through its operations from New Delhi.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">4. Can you order a replacement armature from a photo?</div>
                <div class="faq-answer">
                    A clear photo can help in identification, especially when used with the machine brand, model number and dimensions available. Please check final compatibility before ordering.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">5. Are custom armatures manufactured by Vicky Power Tools?</div>
                <div class="faq-answer">
                    The company manufactures products according to customer requirements, samples and specifications. Technical review applies to custom work.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">6. How to choose the right armature for an industrial tool?</div>
                <div class="faq-answer">
                    Just by providing machine model, technical specifications, shaft and gear information, and photograph of armature.
                </div>
            </div>

        </div>

    </div>
</section>



<script>
    document.querySelectorAll(".faq-question").forEach(question => {
        question.addEventListener("click", () => {
            const item = question.parentElement;
            document.querySelectorAll(".faq-item").forEach(faq => {
                if (faq !== item) {
                    faq.classList.remove("active");
                }
            });
            item.classList.toggle("active");
        });
    });
</script>
<?php
include_once 'includes/footer.php';
?>