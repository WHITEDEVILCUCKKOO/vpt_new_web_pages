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
</style>


<!-- HERO -->
<section class="hero">
    <div class="container" style="padding-top:60px;">
        <div class="hero-content">

            <h1 style="color: #fff;">Armature Manufacturer and supplier in Bangalore, Karnataka, India</h1>

            <p>
                If you are looking for Armature Manufacturer and supplier in Bengaluru, Karnataka,
                Vicky Power Tools is a Delhi based manufacturer and supplier of power tools
                armatures, field coils and other power tools components.
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

                <p>
                    We produce and supply armatures for a wide range of compatible electric power
                    tools for workshops, repair shops, industrial applications, construction work
                    and maintenance activities.
                </p>

                <p>
                    Vicky Power Tools is headquartered in New Delhi, India and caters to clients in
                    Bengaluru and other parts of Karnataka from its manufacturing and business unit
                    in Delhi.
                </p>

                <p>
                    If you require a replacement armature, or just standard stock for your business
                    or bulk quantities for commercial needs, please contact Vicky Power Tools with
                    your specific product details.
                </p>

            </div>

        </div>
    </div>
</section>


<!-- MANUFACTURER FOR BANGALORE -->
<section class="products">
    <div class="container">

        <div class="section-title">
            <h2>Manufacturer of Armature for Power Tools for Bangalore</h2>
        </div>

        <div style="max-width:900px;margin:auto;text-align:center;color:#555;">

            <p>
                The armature is one of the important components inside an electric power tools
                motor. It must meet the requirements which the particular machine makes as to
                winding and shaft, commutator, gear and general construction.
            </p>

            <br>

            <p>
                Vicky Power Tools is a specialist manufacturer of armatures for a wide variety of
                power tools models and uses.
            </p>

            <br>

            <p>Our armatures are available for compatible applications such as:</p>

        </div>

        <div style="max-width:700px;margin:20px auto 0;">
            <div class="oem-list">
                <div>Angle grinders</div>
                <div>Drilling equipment</div>
                <div>Cutoff machines</div>
                <div>Stonecutters</div>
                <div>- Straight grinders</div>
                <div>Power tools</div>
                <div>Other compatible powered tools</div>
            </div>
        </div>

        <p style="text-align:center;margin-top:30px;color:#555;">
            We offer our Bengaluru customers a hassle-free process to obtain replacement armatures
            from a manufacturer based in Delhi.
        </p>

    </div>
</section>


<!-- SUPPLIER -->
<section class="industry-section">
    <div class="container">

        <div class="section-title">
            <h2>Armature Manufacturer and supplier in Bangalore</h2>
            <p>
                Finding the right Armature Supplier in Bengaluru is important for businesses
                involved in power tools repair, maintenance and distribution.
            </p>
            <p>
                Vicky Power Tools supplies armatures for different models and applications,
                subject to product specifications and availability.
            </p>
            <p>We meet requirements of:</p>
        </div>

        <div class="industry-grid">
            <div class="industry"><h3>Dealers in power tools</h3></div>
            <div class="industry"><h3>Repairs Centers</h3></div>
            <div class="industry"><h3>Hardware companies</h3></div>
            <div class="industry"><h3>Electric repair shops</h3></div>
            <div class="industry"><h3>The workshops industrial</h3></div>
            <div class="industry"><h3>Tools retailers</h3></div>
            <div class="industry"><h3>Service centers</h3></div>
            <div class="industry"><h3>Maintenance firms</h3></div>
            <div class="industry"><h3>Wholesalers</h3></div>
        </div>

        <p style="text-align:center;margin-top:30px;color:#cbd5df;">
            Are you searching for regular supply of armatures in Bengaluru, then do share your
            machine model, required quantity and product details with our team.
        </p>

    </div>
</section>


<!-- DEALER -->
<section class="oem">
    <div class="container">

        <div class="oem-box">

            <h2>Karnataka Armature Dealer</h2>

            <p>Vicky Power Tools also deals in business for Armature Dealer in Karnataka.</p>

            <p>
                We supply compatible armatures from our manufacturing unit in Delhi to customers
                outside Delhi, including Bengaluru and other parts of Karnataka.
            </p>

            <p>You can offer the: For the right product choice</p>

            <p><strong>Brand + machine model + armature photo + size + quantity required.</strong></p>

            <p>This way you find the right armature for your application.</p>

        </div>

    </div>
</section>


<!-- PRODUCTS -->
<section>
    <div class="container">

        <div class="section-title">
            <h2>Alternative Armature for Different Power Tools</h2>
            <p>
                Different power tools have different armature specifications. One model’s armature
                may not be compatible with another model.
            </p>
            <p>
                Therefore, Vicky Power Tools offers armature solutions specific to the model of the
                relevant power tools.
            </p>
        </div>

        <div class="product-grid">

            <div class="product-card">
                <div class="product-icon">⚙</div>
                <h3>Armatures for Angle Grinders</h3>
                <p>Replacement angle grinder armatures for compatible models for use in fabrication, construction, workshops and general maintenance.</p>
            </div>

            <div class="product-card">
                <div class="product-icon">⚡</div>
                <h3>Drill Machine Armature</h3>
                <p>Armature for use with electric drilling machines and applicable power tools models.</p>
            </div>

            <div class="product-card">
                <div class="product-icon">◉</div>
                <h3>Cut-Off Machine</h3>
                <p>Replacement armatures for compatible cut-off machines in workshops and industrial use.</p>
            </div>

            <div class="product-card">
                <div class="product-icon">⚙</div>
                <h3>Armatures for marble cutter</h3>
                <p>Armatures for marble, tile and stone cutting machines.</p>
            </div>

            <div class="product-card">
                <div class="product-icon">+</div>
                <h3>Straight Grinder Armature</h3>
                <p>Replacement armatures for use with compatible straight grinder models for grinding and finishing applications</p>
            </div>

            <div class="product-card">
                <div class="product-icon">✓</div>
                <h3>Other Electric Tools Armature</h3>
                <p>We also manufacture and supply armatures for other compatible electric power tools as per model and technical specifications.</p>
            </div>

        </div>

    </div>
</section>


<!-- BUSINESS -->
<section class="products">
    <div class="container">

        <div class="section-title">
            <h2>Armature Manufacturers for Business in Bengaluru</h2>
        </div>

        <div style="max-width:900px;margin:auto;text-align:center;color:#555;">

            <p>
                Bengaluru has a huge ecosystem of engineering, manufacturing, construction,
                maintenance and service businesses. These are industries where power tools are used
                often, so there’s a need for replacement and repair parts.
            </p>

            <br>

            <p>
                Vicky Power Tools provides armatures for companies that need suitable replacement
                parts for their power tools.
            </p>

            <br>

            <p>Our products are useful for companies who are involved in:</p>

        </div>

        <div style="max-width:700px;margin:20px auto 0;">
            <div class="oem-list">
                <div>Power tools repair</div>
                <div>Electric repair</div>
                <div>Maintenance industrial</div>
                <div>Hardware distribution</div>
                <div>Tools sales</div>
                <div>Workshop running</div>
                <div>Maintenance of construction equipment</div>
            </div>
        </div>

        <p style="text-align:center;margin-top:30px;color:#555;">
            If you are running a business in Bengaluru and need armatures regularly, you can get in
            touch with our team to know the product details and availability.
        </p>

    </div>
</section>


<!-- WHY CHOOSE -->
<section>
    <div class="container">

        <div class="oem-box">

            <h2>Why Choose Vicky Power Tools?</h2>

            <p>
                The most important thing when sourcing a replacement armature is that it is
                compatible with the particular power tools.
            </p>

            <p>Vicky Power Tools is focusing on:</p>

            <div class="oem-list">
                <div>Power tools armature production</div>
                <div>Armature (Replacement)</div>
                <div>Field coils</div>
                <div>Products specific to model</div>
                <div>Dealer wants</div>
                <div>Wholesale supply.</div>
                <div>Bulk orders</div>
                <div>Power Tools Repair Needs</div>
                <div>Requirements of business and industry</div>
            </div>

            <p style="margin-top:20px;">
                We can be provided with existing armature details of customers to understand the
                product requirement before supply.
            </p>

        </div>

    </div>
</section>


<!-- WHOLESALE -->
<section class="oem">
    <div class="container">

        <div class="oem-box">

            <h2>Wholesale Armature Supply in Bangalore</h2>

            <p>
                Dealers, distributors, repair shops and industrial companies may need larger
                amounts of armatures.
            </p>

            <p>
                Vicky Power Tools is open to business enquiries for large orders depending on the
                model and product availability.
            </p>

            <p>For bulk enquiries, please supply:</p>

            <div class="oem-list">
                <div>Model/Product Number</div>
                <div>Quantity Needed</div>
                <div>Current product image</div>
                <div>Shipping address</div>
                <div>Any technical specifications available</div>
            </div>

            <p style="margin-top:20px;">
                It helps us to understand your requirement in better way.
            </p>

        </div>

    </div>
</section>


<!-- CONTACT -->
<section>
    <div class="container">

        <div class="section-title">
            <h2>Get in touch with Vicky Power Tools</h2>
        </div>

        <div style="max-width:900px;margin:auto;text-align:center;color:#555;">

            <p>
                If you are looking for “Armature Manufacturers in Bengaluru, Karnataka”, then Vicky
                Power Tools is a good option. We are manufacturers and suppliers based in Delhi.
            </p>

            <br>

            <p>
                We are manufacturers & suppliers of armatures, power tools components etc. to
                customers in Bengaluru & Karnataka.
            </p>

            <br>

            <p><strong>Vicky Power Tools 71/2-A, Rama Road Industrial Area Najafgarh Road, New Delhi - 110015 India</strong></p>

        </div>

    </div>
</section>


<!-- CTA -->
<section class="cta" id="contact">
    <div class="container">
        <a href="https://wa.me/918595734416?text=Hello%20Vicky%20Power%20Tools%2C%20I%20need%20a%20quote%20for%20armature." target="_blank" rel="noopener" class="btn">Contact Vicky Power Tools</a>
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