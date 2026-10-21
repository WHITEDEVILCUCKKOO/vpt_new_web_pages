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
                <img class="uoasdu" src="assets_2_0/img/00033.jpg" alt="Armature Manufacturers in Bhopal">
            </div>

            <div class="about-content">

                <h1>Armature Manufacturer &amp; supplier in Bhopal, Madhya Pradesh</h1>

                <p>
                    The reliability of a power tool can only be as good as the parts that are inside it. When an armature has to be replaced, it is important for repair shops, dealers, workshops and industrial users to find the right product from a reliable source.

                    Based in Delhi, Vicky Power Tools manufacture and supply armatures for compatible electric and power tool applications. We cater to our esteemed customers in Bhopal, Madhya Pradesh and other parts of the state and all over India.
                </p>

                <p>
                    If you are looking for Armature Manufacturer in Bhopal, Armature Supplier in Bhopal, Armature Dealer in Bhopal then you can contact Vicky Power Tools with your required model and specifications.
                </p>

            </div>

        </div>
    </div>
</section>


<!-- DEALER -->
<section class="oem">
    <div class="container">

        <div class="oem-box">

            <h2>Choosing the right armature for your power tools</h2>

            <p>
                Each power tool requires a different armature design. Even similar looking armatures may have different shaft sizes, gear teeth, commutator size, winding and other specs.

                We strongly recommend to check the exact model of the machine before purchasing a replacement for this reason.
            </p>

            <p>
                In Bhopal, customers can know the product they require by sharing the model number of the machine or photos of the existing armature.
            </p>

        </div>

    </div>
</section>


<!-- section 3 -->
<!-- MANUFACTURER BHOPAL -->
<section class="products" style="display: none;">
    <div class="container">

        <div class="section-title">
            <h2 >Armature Manufacturer - Bhopal - Power Tools</h2>
        </div>

        <div style="max-width:900px;margin:auto;text-align:center;color:#555;">

            <p>
                Vicky Power Tools manufacture and supply replacement armatures for a wide range of power tool applications. We aim for steady production, correct balancing, quality copper winding and precise gear construction.Properly manufactured armatures are important to the performance of an electric power tool . The proper armature can contribute to smooth rotation, efficient transmission of power and reliable operation.We offer armature options to customers who need replacement parts for repair, maintenance, wholesale and regular power tool needs.
            </p>


        </div>
</section>


<!-- PRODUCTS -->
<style>
    /* Is section ka CSS (scoped: sirf .arm-sec par lagu hoga) */
    .arm-sec .arm-head {
        max-width: 900px;
        margin: 0 auto 45px;
        text-align: center;
    }

    .arm-sec .arm-head h2 {
        font-size: 40px;
        letter-spacing: 1px;
        color: #15283d;
        margin-bottom: 18px;
        text-align: center;
    }

    .arm-sec .arm-head p {
        color: #666;
        margin-bottom: 12px;
        text-align: center !important;
    }

    .arm-sec .arm-head .arm-lead {
        color: #15283d;
        font-weight: bold;
        margin-top: 22px;
    }

    .arm-sec .arm-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 22px;
    }

    .arm-sec .arm-card {
        background: #f8f9fb;
        border: 1px solid #e8e8e8;
        border-radius: 10px;
        padding: 30px;
        transition: .3s;
    }

    .arm-sec .arm-card:hover {
        transform: translateY(-7px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, .09);
        border-color: #f7941d;
    }

    .arm-sec .arm-card.wide {
        grid-column: 1 / -1;
        display: flex;
        align-items: center;
        gap: 22px;
    }

    .arm-sec .arm-icon {
        flex: 0 0 55px;
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

    .arm-sec .arm-card.wide .arm-icon {
        margin-bottom: 0;
    }

    .arm-sec .arm-card h3 {
        color: #15283d;
        margin-bottom: 10px;
    }

    .arm-sec .arm-card p {
        color: #666;
        font-size: 15px;
    }

    .arm-sec .arm-dealer {
        margin-top: 55px;
        display: grid;
        grid-template-columns: .5fr 1.5fr;
        background: #15283d;
        border-radius: 14px;
        overflow: hidden;
        box-shadow: 0 15px 40px rgba(0, 0, 0, .15);
    }

    .arm-sec .arm-dealer-text {
        padding: 45px;
        color: #cbd5df;
    }

    .arm-sec .arm-dealer-text h3 {
        color: #fff;
        font-size: 28px;
        margin-bottom: 16px;
    }

    .arm-sec .arm-dealer-text h3::after {
        content: "";
        display: block;
        width: 55px;
        height: 4px;
        background: #f7941d;
        border-radius: 3px;
        margin-top: 12px;
    }

    .arm-sec .arm-dealer-text p {
        margin-bottom: 14px;
        text-align: left;
    }

    .arm-sec .arm-dealer-form {
        background: linear-gradient(135deg, #f7941d, #d96f05);
        padding: 40px;
        color: #fff;
    }

    .arm-sec .arm-dealer-form p {
        color: #fff;
        font-weight: bold;
        margin-bottom: 18px;
        text-align: left;
    }

    .arm-sec .arm-chips {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .arm-sec .arm-chips span {
        background: rgba(255, 255, 255, .18);
        border: 1px solid rgba(255, 255, 255, .45);
        padding: 9px 18px;
        border-radius: 30px;
        font-size: 14px;
        font-weight: bold;
    }

    .arm-sec .arm-dealer-form .arm-small {
        margin: 22px 0 0;
        font-weight: normal;
        font-size: 15px;
    }

    .arm-sec .arm-foot {
        text-align: center !important;
        margin-top: 30px;
        color: #555;
    }

    @media(max-width:900px) {
        .arm-sec .arm-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .arm-sec .arm-dealer {
            grid-template-columns: 1fr;
        }
    }

    @media(max-width:600px) {
        .arm-sec .arm-head h2 {
            font-size: 28px;
        }

        .arm-sec .arm-grid {
            grid-template-columns: 1fr;
        }

        .arm-sec .arm-card.wide {
            display: block;
        }

        .arm-sec .arm-card.wide .arm-icon {
            margin-bottom: 18px;
        }

        .arm-sec .arm-dealer-text,
        .arm-sec .arm-dealer-form {
            padding: 30px 22px;
        }
    }
</style>

<!-- PRODUCTS -->
<section class="products arm-sec" style="display: none;">
    <div class="container">

        <div class="arm-head">
            <h2>Armature Manufacturer and supplier in Bhopal</h2>

            <p>
                Finding the right Armature Supplier in Bhopal is important for businesses involved in power tools repair, maintenance and distribution.
            </p>


        </div>



        <!-- MADHYA PRADESH / BHOPAL CONTENT -->
        <div class="arm-dealer">

            <div class="arm-dealer-text">
                <!-- <h3>Armature Dealer in Madhya Pradesh</h3> -->
                <p>
                    Vicky Power Tools supplies armatures for different models and applications, subject to product specifications and availability.
                </p>
                <!-- <p>
                    This information helps our team identify and supply the right armature
                    for your application.
                </p> -->
            </div>

            <div class="arm-dealer-form">
                <p>We meet requirements of:</p>
                <div class="arm-chips">
                    <span>Dealers in power tools</span>
                    <span>Repairs Centers</span>
                    <span>Hardware companies</span>
                    <span>Electric repair shops</span>
                    <span>The workshops industrial</span>
                    <span>Tools retailers Service centers</span>
                    <span>Maintenance firms</span>
                    <span>Wholesalers</span>
                </div>
            </div>

        </div>

        <p class="arm-foot">
            Are you searching for regular supply of armatures in Bhopal, then do share your machine model, required quantity and product details with our team.
        </p>

    </div>
</section>



<!-- SUPPLIER -->
<section class="industry-section">
    <div class="container">

        <div class="section-title">
            <h2>Armature Supply in Bhopal for Repair and Maintenance</h2>
            <p>
                If you operate a power-tool repair business, waiting for the right replacement part can delay the entire repair job.
            </p>
            <p>
                Vicky Power Tools is a supplier of compatible armatures for various power tool applications and invites enquiries from Bhopal-based:
            </p>
        </div>

        <div class="industry-grid">
            <div class="industry iahwdiawdsi">
                <p style="text-align: center;">Repair Centers</p>
            </div>
            <div class="industry iahwdiawdsi">
                <p style="text-align: center;">Hardware Shops</p>
            </div>
            <div class="industry iahwdiawdsi">
                <p style="text-align: center;">Tool Workshops</p>
            </div>
            <div class="industry iahwdiawdsi">
                <p style="text-align: center;">Sellers</p>
            </div>
            <div class="industry iahwdiawdsi">
                <p style="text-align: center;">Distributors</p>
            </div>
            <div class="industry iahwdiawdsi">
                <p style="text-align: center;">Industrial Users</p>
            </div>
        </div>

        <p style="text-align:center;margin-top:30px;color:#cbd5df;">
            We serve businesses with both one-off replacement needs and ongoing requirements.
        </p>

    </div>
</section>


<!-- DEALER -->
<section class="oem">
    <div class="container">

        <div class="oem-box">

            <h2>Madhya Pradesh Armature Manufacturers</h2>

            <p>
                We are not confined to Bhopal for our supply service. Vicky Power Tools is able to meet your armature demands from different parts of Madhya Pradesh.
            </p>

            <p>
                Companies and clients from cities like:
            </p>

            <div class="oem-list">
                <div>Ujjain</div>
                <div>Bhopal</div>
                <div>Indore</div>
                <div>Sagar</div>
                <div>Ratlam</div>
                <div>Dewas</div>
                <div>Jabalpur</div>
                <div>Gwalior</div>
            </div>

            <p style="margin-top:20px;">
                can contact us for compatible armature requirements.
            </p>

            <div class="note-box">For Customers outside Delhi, the products are supplied from our operation based in Delhi subject to product availability and order requirements.</div>

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

<!-- ALTERNATIVE ARMATURE -->
<section class="alt-sec">
    <div class="container">

        <div class="alt-head">
            <h2>Armatures For Various Power Tools</h2>

            <p>
                Armature may be required for applications such as:
            </p>

        </div>

        <div class="alt-grid">

            <div class="alt-card">
                <span class="alt-no">01</span>
                <div class="alt-icon">⚙</div>
                <h3>Angle Grinder</h3>
                <p>
                    Replacement angle grinder armatures for compatible models for use in fabrication, construction, workshops and general maintenance.
                </p>
            </div>

            <div class="alt-card">
                <span class="alt-no">02</span>
                <div class="alt-icon">⚡</div>
                <h3>Drill Machine</h3>
                <p>
                    Armatures for electric drilling machines for maintenance, installation and workshop applications.
                </p>
            </div>

            <div class="alt-card">
                <span class="alt-no">03</span>
                <div class="alt-icon">◉</div>
                <h3>Cutting Tools</h3>
                <p>
                    Replacement armatures for certain cut-off and cutting machine models.
                </p>
            </div>

            <div class="alt-card">
                <span class="alt-no">04</span>
                <div class="alt-icon">+</div>
                <h3>Straight Grinder</h3>
                <p>
                    Replacement armatures for appropriate straight grinder models for grinding and finishing applications.
                </p>
            </div>

            <div class="alt-card">
                <span class="alt-no">05</span>
                <div class="alt-icon">⚙</div>
                <h3>Stone Cutter</h3>
                <p>
                    Armatures for compatible marble, tile &amp; stone cutting machinery.
                </p>
            </div>

            <div class="alt-card">
                <span class="alt-no">06</span>
                <div class="alt-icon">✓</div>
                <h3>Planers, Polishers &amp; Other Tools</h3>
                <p>
                    Armatures for planers and polisher machines, and other compatible power tools. Availability dependent upon model and technical requirements.
                </p>
            </div>

        </div>

    </div>
</section>




















<!-- REPAIR -->
<section class="vpt-armature-wholesale-section">
    <div class="vpt-armature-wholesale-container">

        <div class="vpt-armature-wholesale-intro">
            <span class="vpt-armature-wholesale-label">REPAIR &amp; REPLACEMENT</span>

            <h2 class="vpt-armature-wholesale-title">
                Old or Broken Power Tools Replacement Armature
            </h2>

            <p class="vpt-armature-wholesale-text">
                Power tools that are used regularly in workshops, construction and industrial environments may eventually require replacement of motor components.
            </p>

            <p class="vpt-armature-wholesale-text">
                If the armature is damaged, worn or no longer working properly, it may be an option to replace the compatible armature instead of replacing the complete machine.
            </p>

            <p class="vpt-armature-wholesale-text">
                Before ordering, compare the existing armature to the replacement specification. Important points of identification are:
            </p>
        </div>

        <div class="vpt-armature-wholesale-grid">

            <div class="vpt-armature-wholesale-card">
                <h3 class="vpt-armature-wholesale-card-title">
                    Machine Model
                </h3>

                <p class="vpt-armature-wholesale-card-text">
                    One of the most useful pieces of information is the exact model number.
                </p>
            </div>

            <div class="vpt-armature-wholesale-card">
                <h3 class="vpt-armature-wholesale-card-title">
                    Shaft Diameter
                </h3>

                <p class="vpt-armature-wholesale-card-text">
                    Similar armatures can be differentiated by shaft diameter and length.
                </p>
            </div>

            <div class="vpt-armature-wholesale-card">
                <h3 class="vpt-armature-wholesale-card-title">
                    About Gear
                </h3>

                <p class="vpt-armature-wholesale-card-text">
                    The number of teeth and the type of gear determine proper compatibility.
                </p>
            </div>

            <div class="vpt-armature-wholesale-card">
                <h3 class="vpt-armature-wholesale-card-title">
                    Size of Bearing
                </h3>

                <p class="vpt-armature-wholesale-card-text">
                    The bearing size should match the application.
                </p>
            </div>

            <div class="vpt-armature-wholesale-card">
                <h3 class="vpt-armature-wholesale-card-title">
                    Commutator
                </h3>

                <p class="vpt-armature-wholesale-card-text">
                    Commutator specifications can also aid in product identification.
                </p>
            </div>

            <div class="vpt-armature-wholesale-card">
                <h3 class="vpt-armature-wholesale-card-title">
                    Photos
                </h3>

                <p class="vpt-armature-wholesale-card-text">
                    Clear photographs of the old armature may help if the model number is not available.
                </p>
            </div>

        </div>

    </div>
</section>



<!-- WHY -->
<!-- <section>
    <div class="container">

        <div class="oem-box">

            <h2>Why Choose Vicky Power Tools?</h2>

            <p>The most important thing when sourcing a replacement armature is that it is compatible with the particular power tools.
            </p>

            <p>Vicky Power Tools is focusing on:</p>

            <div class="oem-list">
                <div>Power tools armature production</div>
                <div>Armature (Replacement)</div>
                <div>Field coils</div>
                <div>Products specific to model</div>
                <div>Dealer wants</div>
                <div>Wholesale supply</div>
                <div>Bulk orders</div>
                <div>Power Tools Repair Needs</div>
                <div>Requirements of business and industry</div>
            </div>

            <p style="margin-top:20px;">
                We can be provided with existing armature details of customers to understand the product requirement before supply.
            </p>

        </div>

    </div>
</section> -->







<!-- WHOLESALE -->
<section class="products">
    <div class="container">

        <div class="section-title">
            <h2>Armatures For Wholesalers, Workshops &amp; Bulk Buyers</h2>
            <p>
                A commercial procurement requirement and a single armature requirement are different.
            </p>
            <p>
                A repair shop might prioritise finding one particular replacement quickly. But for a dealer or a distributor, more models might be more important.
            </p>
            <p>Please send enquiries to:</p>
        </div>

        <div class="product-grid">
            <div class="product-card">
                <h3>Power Tool Repair Shops</h3>
                <p>For replacement armatures in normal repair work.</p>
            </div>

            <div class="product-card">
                <h3>Hardware and Tool Dealers</h3>
                <p>For customers needing replacement power-tool parts.</p>
            </div>

            <div class="product-card">
                <h3>Dealers</h3>
                <p>For businesses that trade in larger volumes across their market.</p>
            </div>

            <div class="product-card">
                <h3>Industrial Workshops</h3>
                <p>For service of compatible electrical tools.</p>
            </div>

            <div class="product-card">
                <h3>Bulk Purchasers</h3>
                <p>For procurement model wise or quantity wise.</p>
            </div>

        </div>

    </div>
</section>

<style>
    .vpt-armature-wholesale-section {
        width: 100%;
        padding: clamp(45px, 7vw, 85px) 20px;
        background: #f6f8fb;
        box-sizing: border-box;
    }

    .vpt-armature-wholesale-container {
        width: 100%;
        max-width: 1180px;
        margin: 0 auto;
        box-sizing: border-box;
    }

    .vpt-armature-wholesale-intro {
        width: 100%;
        max-width: 850px;
        margin: 0 auto 45px;
        text-align: center;
    }

    .vpt-armature-wholesale-label {
        display: inline-block;
        margin-bottom: 12px;
        color: #e87516;
        font-size: 13px;
        line-height: 1.4;
        font-weight: 700;
        letter-spacing: 1.5px;
    }

    .vpt-armature-wholesale-title {
        margin: 0 0 20px;
        color: #172b4d;
        font-size: clamp(28px, 4vw, 40px);
        line-height: 1.2;
        /* font-weight: 750; */
    }

    .vpt-armature-wholesale-text {
        margin: 0 0 14px;
        color: #606b7a;
        font-size: clamp(14px, 1.5vw, 16px);
        line-height: 1.8;
    }

    .vpt-armature-wholesale-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: clamp(18px, 3vw, 28px);
        width: 100%;
    }

    .vpt-armature-wholesale-card {
        width: 100%;
        padding: clamp(24px, 4vw, 36px);
        background: #ffffff;
        border: 1px solid #e5e9ef;
        border-radius: 14px;
        box-sizing: border-box;
        box-shadow: 0 10px 35px rgba(23, 43, 77, 0.06);
    }

    .vpt-armature-wholesale-card-title {
        margin: 0 0 18px;
        color: #172b4d;
        font-size: clamp(20px, 2.5vw, 24px);
        line-height: 1.35;
    }

    .vpt-armature-wholesale-card-text {
        margin: 0 0 18px;
        color: #626d7c;
        font-size: clamp(14px, 1.5vw, 15px);
        line-height: 1.8;
    }

    .vpt-armature-wholesale-list {
        width: 100%;
        margin: 0 0 20px;
        padding: 0;
        list-style: none;
    }

    .vpt-armature-wholesale-list li {
        position: relative;
        margin: 0 0 12px;
        padding-left: 24px;
        color: #3f4a59;
        font-size: clamp(14px, 1.5vw, 15px);
        line-height: 1.6;
    }

    .vpt-armature-wholesale-list li::before {
        content: "✓";
        position: absolute;
        left: 0;
        top: 0;
        color: #e87516;
        font-weight: 700;
    }

    .vpt-armature-wholesale-address {
        display: flex;
        flex-direction: column;
        gap: 7px;
        margin-top: 22px;
        padding: 20px;
        background: #f7f9fc;
        border-left: 3px solid #e87516;
        border-radius: 5px;
        box-sizing: border-box;
    }

    .vpt-armature-wholesale-address strong {
        color: #172b4d;
        font-size: 16px;
        line-height: 1.5;
    }

    .vpt-armature-wholesale-address span {
        color: #626d7c;
        font-size: 14px;
        line-height: 1.7;
        overflow-wrap: anywhere;
    }

    @media (max-width: 900px) {
        .vpt-armature-wholesale-grid {
            grid-template-columns: 1fr;
        }

        .vpt-armature-wholesale-card {
            max-width: 100%;
        }
    }

    @media (max-width: 600px) {
        .vpt-armature-wholesale-section {
            padding: 50px 15px;
        }

        .vpt-armature-wholesale-intro {
            margin-bottom: 30px;
        }

        .vpt-armature-wholesale-label {
            font-size: 11px;
            letter-spacing: 1px;
        }

        .vpt-armature-wholesale-card {
            padding: 22px 18px;
            border-radius: 10px;
        }

        .vpt-armature-wholesale-list li {
            padding-left: 22px;
        }

        .vpt-armature-wholesale-address {
            padding: 16px;
        }
    }

    @media (max-width: 380px) {
        .vpt-armature-wholesale-section {
            padding-left: 12px;
            padding-right: 12px;
        }

        .vpt-armature-wholesale-card {
            padding: 20px 15px;
        }

        .vpt-armature-wholesale-title {
            font-size: 25px;
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
                <div class="faq-question">1. Is Vicky Power Tools an armature’s manufacturer in Bhopal?</div>
                <div class="faq-answer">
                    Vicky Power Tools is a Delhi-based armature manufacturer and serve different customers in Bhopal and other parts of Madhya Pradesh. The manufacturing base is in New Delhi.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">2. Do you supply armatures to Bhopal?</div>
                <div class="faq-answer">
                    Yes. Customers, repair shops, dealers in Bhopal can enquire about different armatures.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">3. Do you have an armature’s dealer for Bhopal?</div>
                <div class="faq-answer">
                    Yes, Vicky Power Tools have dealers, distributors, repair shops and resellers in Bhopal for compatible armatures.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">4. In Which power tools machines has replacement armatures?</div>
                <div class="faq-answer">
                    Armatures are used in different electric power tools, including grinders, drills, cut-off machines, planers, marble cutters and other equipment etc
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">5. How can I enquire about an armature?</div>
                <div class="faq-answer">
                    By sending your power tool brand name, model number, required quantity and clear photographs of the existing armature.
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