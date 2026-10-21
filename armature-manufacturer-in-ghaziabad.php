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
        /* font-weight: bold; */
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
                <img class="uoasdu" src="assets_2_0/img/00033.jpg" alt="Armature Manufacturers in Ghaziabad">
            </div>

            <div class="about-content">

                <h1>Armature Manufacturers &amp; Suppliers Ghaziabad</h1>

                <p>
                    Looking for Armature Manufacturers &amp; Suppliers in Ghaziabad for power tools, electric motors and industrial applications? Vicky Power Tools, Delhi based manufacturer &amp; supplier of quality armatures, serving customers, dealers, repair professionals &amp; industrial buyers in Ghaziabad and all over Delhi-NCR region.
                </p>

                <p>
                    We have a long history of manufacturing armatures and power tools components and we supply replacement armatures for compatible electric tools and machines. Our products are suitable for tools repair, maintenance, workshops, distributors and bulk needs.
                </p>

            </div>

        </div>
    </div>
</section>


<section class="oem">
    <div class="container">

        <div class="oem-box">

            <h2>Armature Manufacturers in Ghaziabad</h2>

            <p>
                An armature is one of the most important parts inside an electric motor or power tools. An armature properly constructed assists in preserving the rotation, performance and the overall efficiency of the motor.
            </p>

            <p>
                Vicky Power Tools fabricates and supplies armature for various types of electric and power tools. We provide the compatible armatures to the customers from our manufacturing and supply unit in Delhi to Ghaziabad.
            </p>

            <p>
                Whether you need a single replacement armature or regular workshop supply or bulk quantities for business requirements, we can help you identify the appropriate model according to the tools and application.
            </p>

        </div>

    </div>
</section>


<section class="industry-section">
    <div class="container">

        <div class="section-title">
            <h2>Power Tools Armature Supplier in Ghaziabad</h2>
            <p>
                We provide armatures for various types of widely used power tools and electric equipment. Our product range includes armatures for: (depending on the model and availability)
            </p>
        </div>

        <div class="industry-grid">
            <div class="industry iahwdiawdsi">
                <p style="text-align: center;">Angle Grinder</p>
            </div>
            <div class="industry iahwdiawdsi">
                <p style="text-align: center;">Cut-Off Machine</p>
            </div>
            <div class="industry iahwdiawdsi">
                <p style="text-align: center;">Marble Cutter Machine</p>
            </div>
            <div class="industry iahwdiawdsi">
                <p style="text-align: center;">Drill Machine</p>
            </div>
            <div class="industry iahwdiawdsi">
                <p style="text-align: center;">Electric Drill Machine</p>
            </div>
            <div class="industry iahwdiawdsi">
                <p style="text-align: center;">Straight Grinder</p>
            </div>
            <div class="industry iahwdiawdsi">
                <p style="text-align: center;">Planers</p>
            </div>
            <div class="industry iahwdiawdsi">
                <p style="text-align: center;">Other Compatible Electric Power Tools</p>
            </div>
        </div>

        <p style="text-align:center;margin-top:30px;color:#cbd5df;">
            Before ordering an armature, it is important to make sure the armature is matched to the correct tools model. Customers can tell us information like existing armature, tools model number, dimensions or product images to help identify the correct replacement.
        </p>

    </div>
</section>


<section class="oem">
    <div class="container">

        <div class="oem-box">

            <h2>Armature Manufacturer in Ghaziabad - Power Tools</h2>

            <p>
                Ghaziabad has a large network of industrial units, workshops, hardware shops and power tools users. So, the availability of spare parts is a must for companies that are dependent on electric tools for their everyday use.
            </p>

            <p>
                Vicky Power Tools offers armatures for various power tools applications. We also provide services to customers in Ghaziabad from our Delhi based facility.
            </p>

            <p>
                We are committed to providing practical replacement solutions for businesses that need reliable armatures for repair, maintenance and regular supply needs.
            </p>

        </div>

    </div>
</section>


<section class="oem">
    <div class="container">

        <div class="oem-box">

            <h2>Ghaziabad Armature Trader</h2>

            <p>
                If you are a dealer, repair shop or reseller and looking for armatures in Ghaziabad, you can contact Vicky Power Tools for availability and business needs.
            </p>

            <p>
                We assist with:
            </p>

            <div class="oem-list">
                <div>Identification of armature products</div>
                <div>Model compatibility and volume needs</div>
                <div>Dealer enquiries</div>
                <div>Replacement conditions</div>
                <div>Power tools repair requirements</div>
                <div>Product in stock</div>
            </div>

            <div class="note-box">For normal business needs, customers can refer to the required model and quantity before placing an order.</div>

        </div>

    </div>
</section>


<section class="industry-section">
    <div class="container">

        <div class="section-title">
            <h2>Armature for Different Power Tools Brands</h2>
            <p>
                Vicky Power Tools provides armatures for various models and brands compatible with power tools.
            </p>
            <p>
                We can offer armatures for power tools of the following brands:
            </p>
        </div>

        <div class="industry-grid">
            <div class="industry iahwdiawdsi">
                <p style="text-align: center;">Ralli Wolf</p>
            </div>
            <div class="industry iahwdiawdsi">
                <p style="text-align: center;">Bosch</p>
            </div>
            <div class="industry iahwdiawdsi">
                <p style="text-align: center;">DeWalt</p>
            </div>
            <div class="industry iahwdiawdsi">
                <p style="text-align: center;">Makita</p>
            </div>
            <div class="industry iahwdiawdsi">
                <p style="text-align: center;">Hitachi / Hikoki</p>
            </div>
            <div class="industry iahwdiawdsi">
                <p style="text-align: center;">KPT</p>
            </div>
            <div class="industry iahwdiawdsi">
                <p style="text-align: center;">Metabo</p>
            </div>
            <div class="industry iahwdiawdsi">
                <p style="text-align: center;">Other compatible power-tools models</p>
            </div>
        </div>

        <p style="text-align:center;margin-top:30px;color:#cbd5df;">
            Compatibility depends on specific tools model, armature spec and dimensions. Model needs to be verified before ordering.
        </p>

    </div>
</section>


<section class="oem">
    <div class="container">

        <div class="oem-box">

            <h2>Armature Supplier Ghaziabad for Dealers &amp; Repair Shops</h2>

            <p>
                For a repair shop or hardware dealer the right armature can make the power-tools repair job easier and faster.
            </p>

            <p>
                If you are running a power tools repair shop in Ghaziabad then you can get connected with Vicky Power Tools for your regular armature needs. Our team can help confirm compatible models and products that are available.
            </p>

            <p>
                Whether you require one replacement armature or regular bulk supply, providing the correct model information will enable us to process your inquiry more efficiently.
            </p>

        </div>

    </div>
</section>


<section class="alt-sec">
    <div class="container">

        <div class="alt-head">
            <h2>Selecting the Correct Armature?</h2>

            <p>
                The choice of armature is critical for fit and motor performance. Before placing an order, please review the following details:
            </p>
        </div>

        <div class="alt-grid">

            <div class="alt-card">
                <span class="alt-no">01</span>
                <div class="alt-icon">⚙</div>
                <h3>Make of Power Tools</h3>
                <p>What is the brand of the machine?</p>
            </div>

            <div class="alt-card">
                <span class="alt-no">02</span>
                <div class="alt-icon">⚡</div>
                <h3>Model Number</h3>
                <p>Check the exact model number which is mentioned on the machine.</p>
            </div>

            <div class="alt-card">
                <span class="alt-no">03</span>
                <div class="alt-icon">◉</div>
                <h3>Size of Armature</h3>
                <p>Armatures can be identified by shaft length, shaft diameter, bearing size, gear information and overall dimensions.</p>
            </div>

            <div class="alt-card">
                <span class="alt-no">04</span>
                <div class="alt-icon">+</div>
                <h3>Gear and Commutator Details</h3>
                <p>By the number of teeth on the gear, the size of the commutator, and the pattern of the windings, the motor can be identified.</p>
            </div>

            <div class="alt-card">
                <span class="alt-no">05</span>
                <div class="alt-icon">✓</div>
                <h3>Product Images</h3>
                <p>If you don't know the model, good photos of the armature and your current power tools can help find a compatible replacement.</p>
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

<!-- FAQ -->
<section style="display: none;">
    <div class="container">

        <div class="section-title">
            <h2>Frequently Asked Questions</h2>
        </div>

        <div class="faq">

            <div class="faq-item">
                <div class="faq-question">1. Who is the armature manufacturer serving in Ghaziabad?</div>
                <div class="faq-answer">
                    Vicky Power Tools is a Delhi-based manufacturer and supplier of armatures serving in Ghaziabad and other Delhi NCR locations.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">2. Do you supply replacement armatures in Ghaziabad?</div>
                <div class="faq-answer">
                    Yes. Vicky Power Tools supplies different types of replacement armatures to customers, dealers, repair shops etc. in Ghaziabad.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">3. Do you have an armature dealer in Ghaziabad?</div>
                <div class="faq-answer">
                    Yes, we have customers and dealers in Ghaziabad who can contact Vicky Power Tools directly for their requirements.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">4. How can I find the correct armature for my machine?</div>
                <div class="faq-answer">
                    Just by sharing the brand name, model number, dimensions or clear picture of the armature and machine.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">5. Is Vicky Power Tools located in Ghaziabad?</div>
                <div class="faq-answer">
                    No. Vicky Power Tools is located in New Delhi but serves in Ghaziabad and across Delhi NCR.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">6. Do you supply armatures to power-tools repair shops?</div>
                <div class="faq-answer">
                    Yes. We supply different armatures to power tools repair shops and service professionals.
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