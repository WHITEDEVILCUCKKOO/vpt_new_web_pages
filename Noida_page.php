<?php
include_once'includes/header.php'
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
        }

        /* HERO */
        .hero {
            background:
                linear-gradient(135deg, rgba(8,18,35,.95), rgba(18,53,86,.92)),
                url("images/armature-manufacturing.jpg") center/cover;
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
            box-shadow: 0 10px 35px rgba(0,0,0,.1);
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
            min-height: 400px;
            border-radius: 12px;
            background:
                linear-gradient(rgba(0,0,0,.25),rgba(0,0,0,.25)),
                url("images/armature-factory.jpg") center/cover;
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
            box-shadow: 0 12px 30px rgba(0,0,0,.09);
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

        /* WHY US */
        .why-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .why-card {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0,0,0,.05);
        }

        .why-card h3 {
            color: #15283d;
            margin-bottom: 10px;
        }

        .why-card p {
            color: #666;
        }

        /* INDUSTRIES */
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
            grid-template-columns: repeat(3,1fr);
            gap: 20px;
        }

        .industry {
            border: 1px solid rgba(255,255,255,.15);
            padding: 25px;
            border-radius: 8px;
            background: rgba(255,255,255,.04);
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
            background: linear-gradient(135deg,#fff5e8,#ffffff);
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
            grid-template-columns: repeat(2,1fr);
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
            background: linear-gradient(135deg,#f7941d,#d96f05);
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

        /* FOOTER */
        footer {
            background: #0c1928;
            color: #b9c3cd;
            padding: 30px 0;
            text-align: center;
            font-size: 14px;
        }

        /* RESPONSIVE */
        @media(max-width:900px) {
            .hero h1 {
                font-size: 40px;
            }

            .stats-grid,
            .product-grid,
            .why-grid,
            .industry-grid {
                grid-template-columns: repeat(2,1fr);
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
            .why-grid,
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
    </style>


<!-- HERO -->
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <span class="tag">Trusted Power Tool Component Manufacturer</span>

            <h1>Armature Manufacturing Company in Noida</h1>

            <p>
                Vicky Power Tools is a reliable armature manufacturing company
                serving Noida and Delhi NCR with quality power tool armatures,
                electric tool armatures, customized armatures and industrial
                motor components.
            </p>

            <div class="buttons">
                <a href="#contact" class="btn btn-primary">Get a Quote</a>
                <a href="tel:+919999999999" class="btn btn-outline">Call Now</a>
            </div>
        </div>
    </div>
</section>


<!-- STATS -->
<div class="stats">
    <div class="container">
        <div class="stats-grid">

            <div class="stat">
                <h3>40+</h3>
                <p>Years of Industry Experience</p>
            </div>

            <div class="stat">
                <h3>100+</h3>
                <p>Armature Models</p>
            </div>

            <div class="stat">
                <h3>OEM</h3>
                <p>Customized Solutions</p>
            </div>

            <div class="stat">
                <h3>India</h3>
                <p>Supply & Export Support</p>
            </div>

        </div>
    </div>
</div>


<!-- ABOUT -->
<section>
    <div class="container">

        <div class="about-grid">

            <div class="about-image"></div>

            <div class="about-content">

                <span class="tag">About Vicky Power Tools</span>

                <h2>Reliable Armature Manufacturer in Noida</h2>

                <p>
                    Vicky Power Tools is a trusted name in the manufacturing
                    and supply of armatures and power tool components. With
                    decades of experience in the industry, the company focuses
                    on providing dependable products for power tools, portable
                    electric tools and various motor applications.
                </p>

                <p>
                    As an experienced armature manufacturing company in Noida,
                    we understand that every power tool requires a precisely
                    manufactured motor component for smooth operation,
                    efficiency and long-term performance.
                </p>

                <p>
                    Our product range includes power tool armatures, electric
                    tool armatures, cut-off machine armatures and other
                    application-specific motor components. We also support
                    customized requirements for businesses looking for
                    consistent quality and reliable supply.
                </p>

            </div>

        </div>

    </div>
</section>


<!-- ARMATURE MANUFACTURING -->
<section class="products">
    <div class="container">

        <div class="section-title">
            <span>Our Expertise</span>
            <h2>Armature Manufacturing in Noida</h2>

            <p>
                Precision-focused manufacturing for power tools, electric
                motors and industrial applications.
            </p>
        </div>

        <div style="max-width:900px;margin:auto;text-align:center;color:#555;">

            <p>
                Armatures are one of the most important components of an
                electric motor. The performance, efficiency and reliability
                of a power tool can depend greatly on the quality of its
                armature. At Vicky Power Tools, we focus on manufacturing
                armatures that meet application-specific requirements while
                maintaining consistent production standards.
            </p>

            <br>

            <p>
                Our armatures are designed for applications such as angle
                grinders, drilling machines, marble cutters, cut-off machines,
                polishers, blowers and other portable electric tools. We
                manufacture and supply components for different power tool
                requirements and support businesses that need replacement,
                compatible or customized armature solutions.
            </p>

            <br>

            <p>
                For customers searching for an <strong>armature manufacturer
                in Noida</strong>, Vicky Power Tools provides a practical
                combination of manufacturing experience, product variety,
                customization support and business-oriented service. Our
                objective is to help distributors, dealers, repair businesses,
                manufacturers and industrial buyers source dependable
                armature products.
            </p>

        </div>

    </div>
</section>


<!-- PRODUCTS -->
<section>
    <div class="container">

        <div class="section-title">
            <span>What We Manufacture</span>
            <h2>Our Armature Products</h2>
        </div>

        <div class="product-grid">

            <div class="product-card">
                <div class="product-icon">⚙</div>
                <h3>Power Tool Armatures</h3>
                <p>
                    Armatures suitable for different types of portable
                    electric power tools and motor applications.
                </p>
            </div>

            <div class="product-card">
                <div class="product-icon">⚡</div>
                <h3>Electric Tool Armatures</h3>
                <p>
                    Reliable electric tool armature solutions designed for
                    consistent motor performance.
                </p>
            </div>

            <div class="product-card">
                <div class="product-icon">◉</div>
                <h3>Cut-Off Machine Armatures</h3>
                <p>
                    Application-focused armatures for cut-off machines and
                    heavy-duty portable tools.
                </p>
            </div>

            <div class="product-card">
                <div class="product-icon">⚙</div>
                <h3>Grinder Armatures</h3>
                <p>
                    Armature solutions for angle grinders and other grinding
                    equipment.
                </p>
            </div>

            <div class="product-card">
                <div class="product-icon">+</div>
                <h3>Drill Machine Armatures</h3>
                <p>
                    Motor components suitable for different drilling tool
                    applications and replacement requirements.
                </p>
            </div>

            <div class="product-card">
                <div class="product-icon">✓</div>
                <h3>Customized Armatures</h3>
                <p>
                    Customized manufacturing support according to required
                    dimensions, specifications and application needs.
                </p>
            </div>

        </div>

    </div>
</section>


<!-- WHY CHOOSE -->
<section class="products">
    <div class="container">

        <div class="section-title">
            <span>Why Choose Us</span>
            <h2>Why Choose Vicky Power Tools?</h2>
        </div>

        <div class="why-grid">

            <div class="why-card">
                <h3>Manufacturing Experience</h3>
                <p>
                    Decades of experience in power tool components and
                    armature manufacturing help us understand different
                    application requirements.
                </p>
            </div>

            <div class="why-card">
                <h3>Quality-Focused Production</h3>
                <p>
                    We focus on manufacturing consistency and product
                    reliability for professional and industrial applications.
                </p>
            </div>

            <div class="why-card">
                <h3>Customized Solutions</h3>
                <p>
                    We support businesses looking for armatures according to
                    specific product and application requirements.
                </p>
            </div>

            <div class="why-card">
                <h3>Wide Product Range</h3>
                <p>
                    Our range covers armatures for grinders, drills,
                    cut-off machines and other electric power tools.
                </p>
            </div>

            <div class="why-card">
                <h3>B2B Supply Support</h3>
                <p>
                    We work with dealers, distributors, manufacturers,
                    service providers and industrial buyers.
                </p>
            </div>

            <div class="why-card">
                <h3>Reliable Service</h3>
                <p>
                    Our goal is to provide responsive communication and
                    dependable support throughout the business relationship.
                </p>
            </div>

        </div>

    </div>
</section>


<!-- INDUSTRIES -->
<section class="industry-section">
    <div class="container">

        <div class="section-title">
            <span>Applications</span>
            <h2>Industries & Applications We Serve</h2>

            <p>
                Our armature solutions can support a wide range of
                power-tool and electric motor applications.
            </p>
        </div>

        <div class="industry-grid">

            <div class="industry">
                <h3>Power Tools</h3>
                <p>
                    Components for angle grinders, drills, cutters,
                    polishers and other portable power tools.
                </p>
            </div>

            <div class="industry">
                <h3>Construction</h3>
                <p>
                    Motor components for construction-related portable
                    electric equipment.
                </p>
            </div>

            <div class="industry">
                <h3>Engineering</h3>
                <p>
                    Armature solutions for engineering and motor-related
                    applications.
                </p>
            </div>

            <div class="industry">
                <h3>Manufacturing</h3>
                <p>
                    Reliable components for manufacturers requiring
                    consistent production supply.
                </p>
            </div>

            <div class="industry">
                <h3>Repair & Service</h3>
                <p>
                    Replacement armatures for repair shops and service
                    professionals.
                </p>
            </div>

            <div class="industry">
                <h3>Industrial Equipment</h3>
                <p>
                    Application-specific motor components for various
                    industrial equipment.
                </p>
            </div>

        </div>

    </div>
</section>


<!-- OEM -->
<section class="oem">
    <div class="container">

        <div class="oem-box">

            <h2>OEM & Customized Armature Manufacturing</h2>

            <p>
                Every power tool application can have different technical
                requirements. For this reason, Vicky Power Tools also provides
                customized armature manufacturing support for businesses
                looking for application-specific solutions.
            </p>

            <p>
                Whether you require a particular armature design, dimensions,
                shaft configuration or other specifications, our team can
                discuss your requirements and suggest a suitable manufacturing
                solution.
            </p>

            <div class="oem-list">
                <div>Customized Dimensions</div>
                <div>Application-Specific Designs</div>
                <div>Bulk Manufacturing</div>
                <div>B2B Supply Support</div>
                <div>Replacement Armatures</div>
                <div>OEM Requirements</div>
            </div>

        </div>

    </div>
</section>


<!-- FAQ -->
<section>
    <div class="container">

        <div class="section-title">
            <span>FAQ</span>
            <h2>Frequently Asked Questions</h2>
        </div>

        <div class="faq">

            <div class="faq-item">
                <div class="faq-question">
                    Who is a reliable armature manufacturer in Noida?
                </div>
                <div class="faq-answer">
                    Vicky Power Tools is an experienced manufacturer and
                    supplier of power tool armatures and electric tool
                    components serving customers in Noida and other markets.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    What types of armatures do you manufacture?
                </div>
                <div class="faq-answer">
                    We manufacture and supply power tool armatures, electric
                    tool armatures, grinder armatures, cut-off machine
                    armatures, drill machine armatures and customized
                    armature solutions.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    Do you manufacture customized armatures?
                </div>
                <div class="faq-answer">
                    Yes. Customized manufacturing can be discussed according
                    to product dimensions, application requirements and
                    technical specifications.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    Do you supply armatures in bulk?
                </div>
                <div class="faq-answer">
                    Yes. We support B2B requirements for dealers,
                    distributors, manufacturers, service providers and
                    industrial buyers.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    Do you supply armatures outside Noida?
                </div>
                <div class="faq-answer">
                    Yes. Vicky Power Tools serves customers across India and
                    can discuss requirements for other locations and markets.
                </div>
            </div>

        </div>

    </div>
</section>


<!-- CTA -->
<section class="cta" id="contact">

    <div class="container">

        <h2>Looking for an Armature Manufacturer in Noida?</h2>

        <p>
            Talk to Vicky Power Tools about your power tool armature,
            electric tool armature or customized manufacturing requirements.
        </p>

        <a href="tel:+919999999999" class="btn">Contact Vicky Power Tools</a>

    </div>

</section>


<!-- FOOTER -->
<footer>
    <div class="container">
        © 2026 Vicky Power Tools. All Rights Reserved.
        | Armature Manufacturing Company in Noida
    </div>
</footer>


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
include_once'includes/footer.php'
?>