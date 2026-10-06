<?php
include_once 'includes/header.php';
?>
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
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
        margin-top: 20px;
    }

    .oem-list div {
        font-weight: 600;
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
</style>


<!-- HERO -->
<section class="hero">
    <div class="container" style="padding-top:60px;">
        <div class="hero-content">

            <h1 style="color: #fff;">Armature Manufacturers & Supplier in Ahmedabad, Gujarat</h1>

            <p>
                Vicky Power Tools is a reliable Armature Manufacturers & supplier in Ahmedabad,
                Gujarat. We offer quality armatures for all kinds of power tools and electric
                machines. We produce and supply armatures for power tools to ensure reliable
                performance, accurate fitting and long service life.
            </p>

            <div class="buttons" style="justify-content: left;">
                <a href="https://wa.me/918595734416?text=Hello%20Vicky%20Power%20Tools%2C%20I%20need%20a%20quote%20for%20armature." target="_blank" rel="noopener" class="btn btn-primary">Get a Quote</a>
                <a href="tel:+918595734416" class="btn btn-outline">Call Now</a>
            </div>
        </div>

        <span class="asdhuiih">
            <img src="assets/img/armarture1.jpg" alt="">
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
                <img class="uoasdu" src="assets/img/00033.jpg" alt="Armature Manufacturers in Ahmedabad">
            </div>

            <div class="about-content">

                <h3>Armature Manufacturers & Supplier in Ahmedabad, Gujarat</h3>

                <p>
                    <strong>Vicky Power Tools</strong> is a reliable Armature Manufacturers & supplier in Ahmedabad, Gujarat. We offer quality armatures for all kinds of power tools and electric machines. We produce and supply armatures for power tools to ensure reliable performance, accurate fitting and long service life.
                </p>

                <p>
                    <strong>Vicky Power Tools</strong> is one of the best power tools and armature industry companies, offering a wide range of power tools and armature industry services to customers looking for <strong>armature manufacturer</strong>, <strong>armature supplier</strong> and <strong>armature dealer</strong> in Gujarat. Our armatures are suited for a variety of power tools, including angle grinders, drilling machines, cut-off machines, marble cutters, straight grinders and other electric tools.
                </p>

            </div>

        </div>
    </div>
</section>




<!-- section 3 -->
<!-- MANUFACTURER GUJARAT -->
<section class="products">
    <div class="container">

        <div class="section-title">
            <h3 style="font-weight: 700;">Armature Manufacturer - Gujarat - Power Tools</h3>
        </div>

        <div style="max-width:900px;margin:auto;text-align:center;color:#555;">

            <p>
                Vicky Power Tools manufacture and supply replacement armatures for a wide range of power tool applications. We aim for steady production, correct balancing, quality copper winding and precise gear construction.Properly manufactured armatures are important to the performance of an electric power tool . The proper armature can contribute to smooth rotation, efficient transmission of power and reliable operation.We offer armature options to customers who need replacement parts for repair, maintenance, wholesale and regular power tool needs.
            </p>


        </div>
</section>


<!-- SUPPLIER -->
<section class="industry-section">
    <div class="container">

        <div class="section-title">
            <h2>Armature Supplier in Gujarat</h2>
            <p>
                Looking for <strong>Armature Supplier</strong> in Gujarat for your business or repair needs? <strong>Vicky
                    Power Tools</strong> is a supplier of armatures for a wide range of models and applications
                of power tools.
            </p>
            <p>Our products can be usefull to:</p>
        </div>

        <div class="industry-grid">
            <div class="industry iahwdiawdsi">
                <p style="text-align: center;">Power tool service firms</p>
            </div>
            <div class="industry iahwdiawdsi">
                <p style="text-align: center;">Electrical repair shops</p>
            </div>
            <div class="industry iahwdiawdsi">
                <p style="text-align: center;">Power Tool Retailer</p>
            </div>
            <div class="industry iahwdiawdsi">
                <p style="text-align: center;">Hardware Providers</p>
            </div>
            <div class="industry iahwdiawdsi">
                <p style="text-align: center;">Distributors for industrial tools</p>
            </div>
            <div class="industry iahwdiawdsi">
                <p style="text-align: center;">Maintenance personnel.</p>
            </div>
            <div class="industry iahwdiawdsi">
                <p style="text-align: center;">Workshops</p>
            </div>
            <div class="industry iahwdiawdsi">
                <p style="text-align: center;">Wholesale customers</p>
            </div>
            <div class="industry iahwdiawdsi">
                <p style="text-align: center;">Power tool service centers</p>
            </div>
        </div>

        <p style="text-align:center;margin-top:30px;color:#cbd5df;">
            We know when you are buying replacement armatures that it is important to you to have
            them in stock and that they are the right product for your needs. <strong>Vicky Power Tools</strong> can
            be contacted by a customer with his power tool model or armature needs and a product
            will be found that fits.
        </p>

    </div>
</section>


<!-- DEALER -->
<section class="oem">
    <div class="container">

        <div class="oem-box">

            <h2>Gujarat Armature Dealer</h2>

            <p>
                <strong>Vicky Power Tools</strong> also offers <strong>Armature Dealer</strong> in Gujarat to the customers. We carry
                armature products for a wide range of power tool applications, and support dealers,
                distributors, repair professionals and businesses that require replacement
                armatures.
            </p>

            <p>
                Please contact us to discuss your product specifications and availability of single
                replacement armature or armatures to fit your normal business needs.
            </p>

        </div>

    </div>
</section>


<!-- QUALITY -->
<section>
    <div class="container">

        <div class="oem-box">

            <h2>Power Tool Armature Quality</h2>

            <p>
                The armature is one of the most significant parts in an electric power tool. It,
                together with the field coil and other motor parts, converts electrical energy to
                mechanical rotation.
            </p>

            <p>
                Important armature characteristics such as are considered in <strong>Vicky Power Tools</strong>:
            </p>

            <div class="oem-list">
                <div>1. Copper Winding Superior</div>
                <div>2. Precision gear teeth</div>
                <div>3. Correct balance</div>
                <div>4. Appropriate shaft sizes</div>
                <div>5. Uniform manufacturing</div>
                <div>6. Construction steady</div>
                <div>7. For use with the power tool models listed below</div>
            </div>

            <div class="note-box">The armature specifications may differ from one power tool model to another. Customers are advised to check the model, dimensions and technical specification before ordering.</div>

        </div>

    </div>
</section>


<!-- PRODUCTS -->
<section class="products">
    <div class="container">

        <div class="section-title">
            <h2>Armature for Various Power Tools</h2>
            <p>
                <strong>Vicky Power Tools</strong> produces and distributes armatures for a range of power tool
                applications. Model and requirement armatures can be used in:
            </p>
        </div>

        <div class="product-grid">

            <div class="product-card">
                <div class="product-icon">⚙</div>
                <h3>Angle Grinders</h3>
                <p>Armatures for various angle grinder models.</p>
            </div>

            <div class="product-card">
                <div class="product-icon">⚡</div>
                <h3>Drilling Machines</h3>
                <p>Armatures for electric drilling machines are available for the corresponding types.</p>
            </div>

            <div class="product-card">
                <div class="product-icon">◉</div>
                <h3>Cut-Off Machines</h3>
                <p>Replacement armatures for different cut-off machines.</p>
            </div>

            <div class="product-card">
                <div class="product-icon">⚙</div>
                <h3>Marble Cutters machines</h3>
                <p>we have Armatures for the all marble and tile cutters.</p>
            </div>

            <div class="product-card">
                <div class="product-icon">+</div>
                <h3>Grinder machines</h3>
                <p>Replacement armatures for different grinder models.</p>
            </div>

            <div class="product-card">
                <div class="product-icon">✓</div>
                <h3>Other Electric Tools</h3>
                <p>Armature solutions for different power tool as per samples also, customers can share the machine model, old armature details or required dimensions with our team.</p>
            </div>

        </div>

    </div>
</section>


<!-- WHY -->
<section>
    <div class="container">

        <div class="oem-box">

            <h2>Why Vicky Power Tools?</h2>

            <p>
                Selecting the right armature is important to maintain the performance of a power
                tool. <strong>Vicky Power Tools</strong> is committed to supplying armatures that are suitable for
                specific power tool applications.
            </p>

            <p>Our main areas of focus:</p>

            <div class="oem-list">
                <div>Manufacturing of power tool armatures</div>
                <div>Solutions for replacement armatures</div>
                <div>Armature availability specific to model</div>
                <div>Quality-focused production</div>
                <div>Commercial and wholesale needs</div>
                <div>Aid from suppliers and dealers</div>
                <div>Genuine product information Customer service across Gujarat</div>
            </div>

            <p style="margin-top:20px;">
                <strong>Vicky Power Tools</strong> can be contacted for <strong>Armature Manufacturers</strong> in Ahmedabad, Gujarat
                for product details, availability and business requirements.
            </p>

        </div>

    </div>
</section>


<!-- MANUFACTURERS GUJARAT -->
<section class="products">
    <div class="container">

        <div class="section-title">
            <h2>Armature Manufacturers in Gujarat</h2>
        </div>

        <div style="max-width:900px;margin:auto;text-align:center;color:#555;">

            <p>
                Ahmedabad is a major industrial and commercial hub of Gujarat and has a wide range
                of manufacturing, engineering, electrical and power tool industries. Therefore it
                is important for workshops, repair centers, dealers and industrial users to have
                replacement power tool components available. Vicky Power Tools has the motive to provide reliable armature products & replacement solutions to the customers across Gujarat.We can serve requirements from Ahmedabad and other parts of Gujarat subject to product availability and specifications.


            </p>

          
        </div>

    </div>
</section>


<!-- FAQ -->
<section>
    <div class="container">

        <div class="section-title">
            <h2>Frequently Asked Questions</h2>
        </div>

        <div class="faq">

            <div class="faq-item">
                <div class="faq-question">1. Who are the Armature Manufacturers in Ahmedabad Gujarat?</div>
                <div class="faq-answer">
                    Vicky Power Tools is a manufacturer and supplier of armatures for wide variety of armatures for different power tools. Customers in Ahmedabad and all over Gujarat can contact us for armature requirements, product details and availability.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">2. Vicky Power Tools supplier of armatures in Gujarat for sale ?</div>
                <div class="faq-answer">
                    Yes. Vicky Power Tools offers variety of power tools armatures for different purposes. They have customers looking for armature products in Gujarat.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">3. Where can I locate a Armatures in Gujarat?</div>
                <div class="faq-answer">
                    Vicky Power Tools has wide range of armatures for power tools. Please contact us with your machine's model number and armature specification to check availability.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">4. Do you have a Armature Dealership in Gujarat ?</div>
                <div class="faq-answer">
                    Vicky Power Tools supplies armatures for power tools to dealers, distributors, repair shops and other customers in Gujarat.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">5. What type of power tools armature are you making?</div>
                <div class="faq-answer">
                    We are manufacture & supplied armatures for different power tools like angle grinders, drilling machines, cut-off machines, marble cutters, straight grinders & other electric tools.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">6. How can I select the right armature for my power tools?</div>
                <div class="faq-answer">
                    You can provide the brand and model number of the power tools to us and photos dimensions of the existing armature. This will help us to identify the right armature.
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