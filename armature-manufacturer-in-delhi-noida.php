<?php
include_once 'includes/header.php';
?>
<style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body { font-family: Arial, Helvetica, sans-serif; color: #222; line-height: 1.7; background: #f7f8fa; }
    a { text-decoration: none; }
    .container { width: 90%; max-width: 1200px; margin: auto; position: relative; }

    /* HERO */
    .hero {
        background: linear-gradient(135deg, rgba(8, 18, 35, .95), rgba(18, 53, 86, .92)), url("images/armature-manufacturing.jpg") center/cover;
        padding: 110px 0; color: #fff;
    }
    .hero-content { max-width: 780px; }
    .tag { display: inline-block; background: #f7941d; color: #fff; padding: 7px 18px; border-radius: 30px; font-size: 14px; font-weight: bold; margin-bottom: 20px; }
    .hero h1 { font-size: 52px; line-height: 1.15; margin-bottom: 22px; }
    .hero p { font-size: 19px; color: #e6edf5; margin-bottom: 32px; }
    .buttons { display: flex; gap: 15px; flex-wrap: wrap; }
    .btn { padding: 14px 28px; border-radius: 5px; font-weight: bold; display: inline-block; transition: .3s; }
    .btn-primary { background: #f7941d; color: #fff; }
    .btn-primary:hover { background: #db7608; transform: translateY(-2px); }
    .btn-outline { border: 1px solid #fff; color: #fff; }
    .btn-outline:hover { background: #fff; color: #16283d; }

    /* STATS */
    .stats { margin-top: -45px; position: relative; }
    .stats-grid { display: grid; grid-template-columns: repeat(4, 1fr); background: #fff; box-shadow: 0 10px 35px rgba(0, 0, 0, .1); border-radius: 10px; overflow: hidden; }
    .stat { text-align: center; padding: 28px 15px; border-right: 1px solid #eee; }
    .stat:last-child { border-right: 0; }
    .stat h3 { color: #f7941d; font-size: 30px; }
    .stat p { color: #555; font-size: 14px; }

    /* SECTIONS */
    section { padding: 85px 0; }
    .section-title { text-align: center; margin-bottom: 45px; }
    .section-title span { color: #f7941d; font-weight: bold; text-transform: uppercase; font-size: 14px; letter-spacing: 1px; }
    .section-title h2 { font-size: 38px; color: #15283d; margin-top: 8px; }
    .section-title p { max-width: 750px; margin: 12px auto 0; color: #666; }

    /* ABOUT */
    .about-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center; }
    .about-image { min-height: 400px; border-radius: 12px; background: linear-gradient(rgba(0, 0, 0, .25), rgba(0, 0, 0, .25)), url("images/armature-factory.jpg") center/cover; }
    .about-content h2 { font-size: 36px; color: #15283d; margin-bottom: 20px; }
    .about-content p { margin-bottom: 15px; color: #555; }

    /* PRODUCTS */
    .products { background: #fff; }
    .product-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 22px; }
    .product-card { background: #f8f9fb; padding: 30px; border-radius: 10px; border: 1px solid #e8e8e8; transition: .3s; }
    .product-card:hover { transform: translateY(-7px); box-shadow: 0 12px 30px rgba(0, 0, 0, .09); border-color: #f7941d; }
    .product-icon { width: 55px; height: 55px; background: #fff0df; color: #f7941d; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 24px; margin-bottom: 18px; }
    .product-card h3 { color: #15283d; margin-bottom: 10px; }
    .product-card p { color: #666; font-size: 15px; }

    /* INDUSTRIES / CUSTOMERS */
    .industry-section { background: #15283d; color: #fff; }
    .industry-section .section-title h2 { color: #fff; }
    .industry-section .section-title p { color: #cbd5df; }
    .industry-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; }
    .industry { border: 1px solid rgba(255, 255, 255, .15); padding: 25px; border-radius: 8px; background: rgba(255, 255, 255, .04); }
    .industry h3 { margin-bottom: 8px; }
    .industry p { color: #cbd5df; font-size: 14px; }

    /* OEM */
    .oem { background: #fff; }
    .oem-box { background: linear-gradient(135deg, #fff5e8, #ffffff); padding: 50px; border-left: 5px solid #f7941d; border-radius: 10px; }
    .oem-box h2 { color: #15283d; margin-bottom: 15px; }
    .oem-box p { color: #555; margin-bottom: 15px; }
    .oem-list { display: grid; grid-template-columns: repeat(2, 1fr); gap: 10px; margin-top: 20px; }
    .oem-list div { font-weight: 600; }
    .oem-list div::before { content: "✓"; color: #f7941d; margin-right: 8px; }

    /* FAQ */
    .faq { max-width: 850px; margin: auto; }
    .faq-item { background: #fff; margin-bottom: 12px; border-radius: 7px; overflow: hidden; border: 1px solid #e5e5e5; }
    .faq-question { padding: 18px 22px; font-weight: bold; cursor: pointer; color: #15283d; position: relative; }
    .faq-question::after { content: "+"; position: absolute; right: 22px; font-size: 20px; }
    .faq-answer { display: none; padding: 0 22px 20px; color: #666; }
    .faq-item.active .faq-answer { display: block; }
    .faq-item.active .faq-question::after { content: "-"; }

    /* CTA */
    .cta { background: linear-gradient(135deg, #f7941d, #d96f05); color: #fff; text-align: center; }
    .cta h2 { font-size: 40px; margin-bottom: 15px; }
    .cta p { max-width: 700px; margin: 0 auto 28px; }
    .cta .btn { background: #15283d; color: #fff; }

    /* RESPONSIVE */
    @media(max-width:900px) {
        .hero h1 { font-size: 40px; }
        .stats-grid, .product-grid, .industry-grid { grid-template-columns: repeat(2, 1fr); }
        .about-grid { grid-template-columns: 1fr; }
    }
    @media(max-width:600px) {
        .hero { padding: 75px 0; }
        .hero h1 { font-size: 34px; }
        .hero p { font-size: 16px; }
        .stats-grid, .product-grid, .industry-grid, .oem-list { grid-template-columns: 1fr; }
        .stat { border-right: 0; border-bottom: 1px solid #eee; }
        section { padding: 60px 0; }
        .section-title h2 { font-size: 30px; }
        .oem-box { padding: 30px 22px; }
        .cta h2 { font-size: 30px; }
    }

    .uoasdu { width: 100%; border-radius: 15px; }
    .asdhuiih {
        position: absolute; width: 300px; left: 100%; top: 50%;
        transform: translate(-100%, -50%); border-radius: 15px; overflow: hidden; margin-top: 26px;
        img { transition: .25s ease; width: 100%; }
    }
    .asdhuiih:hover img { transform: scale(1.05); transition: .25s ease; }
    @media (max-width:640px) { .asdhuiih { display: none !important; } }

    /* ALIGNMENT FIXES */
    .section-title { max-width: 1000px; margin-left: auto; margin-right: auto; }
    .section-title h2 { font-size: 40px; letter-spacing: 1px; width: 100%; text-align: center !important; }
    .section-title p,
    .oem-box h2,
    .oem-box p,
    div[style*="text-align:center"] p,
    p[style*="text-align:center"] { text-align: center !important; }
    .about-content h2 { text-align: left; }
    @media(max-width:600px) { .section-title h2 { font-size: 28px; } }
</style>


<!-- HERO -->
<section class="hero">
    <div class="container" style="padding-top:60px;">
        <div class="hero-content">

            <h1 style="color: #fff;">Armature Manufacturer in Noida</h1>

            <p>
                If you are searching for a Armature Manufacturer in Noida, Vicky Power Tools is a
                Delhi based manufacturer and supplier of power tool armatures catering to customers
                in Noida and the entire Delhi-NCR region.
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


<!-- ABOUT -->
<section>
    <div class="container">
        <div class="about-grid">

            <div class="about-image">
                <img class="uoasdu" src="assets/img/00033.jpg" alt="">
            </div>

            <div class="about-content">

                <h2>Vicky Power Tools - Armature Manufacturer for Noida</h2>

                <p>
                    We manufacture and supply armatures, field coils and other power tool
                    components for various applications. Our products are used for angle grinders,
                    drilling machines, cut-off machines, marble cutters, straight grinders and
                    other electric tools compatible with power tools.
                </p>

                <p>
                    <strong>Vicky Power Tools</strong> is located in <strong>New Delhi</strong> not in Noida. We are a Delhi based
                    manufacturing and business location serving the needs of customers in Noida,
                    providing Noida based dealers, workshops, repair centers, distributors and
                    businesses with the ability to source power tool armatures.
                </p>

            </div>

        </div>
    </div>
</section>


<!-- MANUFACTURER FOR POWER TOOL -->
<section class="products">
    <div class="container">

        <div class="section-title">
            <h2>Armature Manufacturer in Noida for Power Tool</h2>
        </div>

        <div style="max-width:900px;margin:auto;text-align:center;color:#555;">

            <p>
                <strong>Vicky Power Tools</strong> has been manufacturing and exporting armatures and field coils
                for Power Tools since 1982. The company is located in <strong>New Delhi</strong> and provides
                products to customers in various parts of India.
            </p>

            <br>

            <p>
                An armature is an essential part of an electric power tool motor. The right
                armature has to be compatible with the specific machine in model, shaft, gear,
                winding and other specs.
            </p>

            <br>

            <p>
                Hence, the customers searching for <strong>armature manufacturer</strong> in Noida can contact
                <strong>Vicky Power Tools</strong> with their machine model, existing armature photograph or
                technical specification.
            </p>

        </div>

    </div>
</section>


<!-- SUPPLIER -->
<section class="industry-section">
    <div class="container">

        <div class="section-title">
            <h2>Armature Supplier in Noida</h2>
            <p>
                <strong>Vicky Power Tools</strong> also works as an <strong>Armature Supplier</strong> in Noida, supplying compatible
                power tool armatures to businesses and professional users.
            </p>
            <p>Our customers may include:</p>
        </div>

        <div class="industry-grid">
            <div class="industry"><h3>Power tool dealers</h3></div>
            <div class="industry"><h3>Power tool repair centres</h3></div>
            <div class="industry"><h3>Electrical repair shops</h3></div>
            <div class="industry"><h3>Hardware suppliers</h3></div>
            <div class="industry"><h3>Industrial workshops</h3></div>
            <div class="industry"><h3>Tool distributors</h3></div>
            <div class="industry"><h3>Service centres</h3></div>
            <div class="industry"><h3>Maintenance professionals</h3></div>
            <div class="industry"><h3>Wholesale buyers</h3></div>
        </div>

        <p style="text-align:center;margin-top:30px;color:#cbd5df;">
            Whether you need a replacement armature for repair work or require armatures for
            regular business stock, you can contact our team with your requirements.
        </p>

    </div>
</section>


<!-- DEALER -->
<section class="oem">
    <div class="container">

        <div class="oem-box">

            <h2>Armature Dealer Noida</h2>

            <p>
                If you are looking for a <strong>Armature Dealer</strong> in Noida, <strong>Vicky Power Tools</strong> can supply
                armatures directly from its Delhi based operations.
            </p>

            <p>
                We are providing Replacement Armatures for Various Power Tool Applications in
                Noida. Products availability depends on a model and technical specifications.
            </p>

            <p>Customers can share for faster identification:</p>

            <div class="oem-list">
                <div>Brand of power tools</div>
                <div>Machine model number.</div>
                <div>Existing photo of armature</div>
                <div>Armature diameter</div>
                <div>Necessary amount</div>
            </div>

            <p style="margin-top:20px;">
                This information is helpful in finding the right replacement product.
            </p>

        </div>

    </div>
</section>


<!-- PRODUCTS -->
<section>
    <div class="container">

        <div class="section-title">
            <h2>Armature for Power Tools</h2>
            <p>
                <strong>Vicky Power Tools</strong> manufacturers and supplies armatures for a wide variety of
                compatible power tool applications.
            </p>
        </div>

        <div class="product-grid">

            <div class="product-card">
                <div class="product-icon">⚙</div>
                <h3>Armatures of Angle Grinders</h3>
                <p>
                    Replacement armatures for suitable angle grinder models used in fabrication,
                    construction, workshops and maintenance applications.
                </p>
            </div>

            <div class="product-card">
                <div class="product-icon">⚡</div>
                <h3>Armature Drilling Machine</h3>
                <p>
                    Armature for compatible electric drilling machines for workshop, installation
                    and general maintenance work.
                </p>
            </div>

            <div class="product-card">
                <div class="product-icon">◉</div>
                <h3>Armatures for Cut-Off Machine</h3>
                <p>Replacement armatures for various cut-off machine models and applications.</p>
            </div>

            <div class="product-card">
                <div class="product-icon">⚙</div>
                <h3>Armatures for marble cutters</h3>
                <p>Armatures compatible with marble, tile, stone cutting machines.</p>
            </div>

            <div class="product-card">
                <div class="product-icon">+</div>
                <h3>Armatures for Straight Grinders</h3>
                <p>Replacement armatures for selected straight grinders.</p>
            </div>

            <div class="product-card">
                <div class="product-icon">✓</div>
                <h3>Other Armatures for Power Tools</h3>
                <p>
                    We manufacture and supply armatures according to model and technical
                    specifications for other compatible electric power tools.
                </p>
            </div>

        </div>

        <p style="text-align:center;margin-top:35px;color:#555;">
            Today our product range includes armatures associated with Bosch, Ralli Wolf,
            Hitachi/Hikoki, DeWalt, KPT, Makita, Hilti and many more.
        </p>

    </div>
</section>


<!-- WHY CHOOSE -->
<section class="oem">
    <div class="container">

        <div class="oem-box">

            <h2>Why Should You Choose Vicky Power Tools For Your Needs in Noida?</h2>

            <p>
                <strong>Vicky Power Tools</strong> is a manufacturer and exporter of armatures, field coils,
                electric tools and power tools based in Delhi.
            </p>

            <p>
                This implies that if you are a customer from Noida, you can directly reach out to
                a manufacturer in the nearby Delhi without assuming that the manufacturer must
                have a physical manufacturing plant in Noida.
            </p>

            <p>We are focused on:</p>

            <div class="oem-list">
                <div>Armature Production for Power Tools</div>
                <div>Supply of Replacement Armatures</div>
                <div>Manufacturing of field coils</div>
                <div>Products specific to the model</div>
                <div>Bulk requirements for</div>
                <div>Enquiries from dealers and distributors</div>
                <div>Power tool repair requirements Supply in Delhi-NCR and India</div>
            </div>

            <p style="margin-top:20px;">
                The company says its manufacturing facility is configured for armature and
                field-coil production and products are subject to quality-control and testing
                procedures.
            </p>

        </div>

    </div>
</section>


<!-- HOW TO ORDER -->
<section>
    <div class="container">

        <div class="section-title">
            <h2>How to order armature for Noida ?</h2>
            <p>
                If you are looking for an armature in Noida there are a few simple steps:
            </p>
        </div>

        <div class="product-grid">

            <div class="product-card">
                <h3>1. Know your power tool:</h3>
                <p>Note the brand and the exact model of the machined</p>
            </div>

            <div class="product-card">
                <h3>2. Take a picture of armature :</h3>
                <p>A clear photo of the armature can be of help to identify it.</p>
            </div>

            <div class="product-card">
                <h3>3. send pictuure with specifications :</h3>
                <p>Providing dimensions or other information will help us to identify the armature.</p>
            </div>

            <div class="product-card">
                <h3>4. Quantity :</h3>
                <p>please specify, If you want one replacement or bulk quantity.</p>
            </div>

            <div class="product-card">
                <h3>5. Get in touch with Vicky Power Tools:</h3>
                <p>Our team can verify the respective product and availability.</p>
            </div>

        </div>

    </div>
</section>


<!-- CONTACT -->
<section class="products">
    <div class="container">

        <div class="section-title">
            <h2>Contact a Delhi-based Armature Manufacturer Providing Services in Noida</h2>
        </div>

        <div style="max-width:900px;margin:auto;text-align:center;color:#555;">

            <p>
                <strong>Vicky Power Tools</strong> is a transparent option to source power tools armatures from a
                <strong>New Delhi</strong> based manufacturer, if you are searching for “<strong>Armature Manufacturer</strong> in
                Noida”.
            </p>

            <br>

            <p>
                We are involved in the manufacturing and supplying of armatures and field coils
                for compatible power tools to customers across Delhi-NCR including Noida.
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
                <div class="faq-question">Is Vicky Power Tools armature manufacturer in Noida?</div>
                <div class="faq-answer">
                    Vicky Power Tools is based in New Delhi not in Noida. We manufacture armatrues
                    in Delhi and supply armatures to Noida and other parts of Delhi-NCR.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">2. Does Vicky Power Tools provide armatures in Noida?</div>
                <div class="faq-answer">
                    Yes, from its Delhi operations, Vicky Power Tools supplies power tool armatures
                    to the customers of Noida. The company also covers other areas including Noida.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">3. Where is Vicky Power Tools based?</div>
                <div class="faq-answer">
                    Vicky Power Tools is situated in New delhi = 71/2-A, Rama Road Industrial Area,
                    Najafgarh Road, New Delhi – 110015, India.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">4. Is there a way to buy a power tools armature in Noida?</div>
                <div class="faq-answer">
                    Yes. Customers from Noida can check the right product by contacting Vicky Power
                    Tools with their Power tool model, armature photograph or technical
                    specifications.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">5. Do you also provide armatures to power tool dealers in Noida ?</div>
                <div class="faq-answer">
                    Yes. Dealers, distributors, repairing centers and factories in Noida can
                    contact Vicky Power Tools for different armatures.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">6. What power tool armatures do you make?</div>
                <div class="faq-answer">
                    Vicky Power Tools produces and supplies armatures for compatible power tools
                    like angle grinders, drilling machines, cut-off machines, marble cutters,
                    straight grinders and other electric tools.
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