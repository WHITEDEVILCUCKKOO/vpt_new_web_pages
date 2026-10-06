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

            <h1 style="color: #fff;">Armature Manufacturers and seller in Jaipur, Rajasthan</h1>

            <p>
                Vicky Power Tools is a Delhi based manufacturers and suppliers of power tools
                armatures for customers in Jaipur and all over Rajasthan if you are looking for
                Armature Manufacturers in Jaipur, Rajasthan.
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

                <h2>Vicky Power Tools - Armature Manufacturer for Jaipur</h2>

                <p>
                    We manufacture and supply armatures for a wide range of electrical machines
                    and power tools. Our products are suitable for power tools repair shops,
                    dealers, workshops, distributors, service centers and other customers looking
                    for replacement armatures.
                </p>

                <p>
                    <strong>Vicky Power Tools</strong> is based in Delhi but we supply and distribute our products
                    to Jaipur and other parts of Rajasthan through our extensive supply and
                    distribution network.
                </p>

            </div>

        </div>
    </div>
</section>


<!-- SERVING JAIPUR -->
<section class="products">
    <div class="container">

        <div class="section-title">
            <h2>Power Tools Armature Manufacturer Serving Jaipur</h2>
        </div>

        <div style="max-width:900px;margin:auto;text-align:center;color:#555;">

            <p>
                Power Tools is an OEM manufacturer and supplier of replacement armatures for many
                power tools applications. And not just the right components, but the right
                components for the right power tools models.
            </p>

            <br>

            <p>
                The armature is an important part of an electric motor. Construction, winding,
                balancing, shaft sizes and gear specifications can affect the functioning of a
                power tools. Hence, the correct replacement armature should be selected according
                to the machine model and specifications.
            </p>

            <br>

            <p>
                <strong>Vicky Power Tools</strong> is the right place for customers in Jaipur to get their power
                tools armature needs as they don’t need to look beyond for an unknown local
                supplier.
            </p>

        </div>

    </div>
</section>


<!-- SUPPLIER / CUSTOMERS -->
<section class="industry-section">
    <div class="container">

        <div class="section-title">
            <h2>Armature Supplier Jaipur, Rajasthan</h2>
            <p>
                Looking for <strong>Armature Supplier</strong> in Jaipur Rajasthan? <strong>Vicky Power Tools</strong> offers power
                tools armatures in Jaipur and other parts of Rajasthan. We serve businesses and
                professionals who need replacement armatures for repair, maintenance, resale and
                regular stock needs.
            </p>
            <p>Our customers can be:</p>
        </div>

        <div class="industry-grid">
            <div class="industry"><h3>Power tools dealers.</h3></div>
            <div class="industry"><h3>Electrical repair stores</h3></div>
            <div class="industry"><h3>Power tools repair shops</h3></div>
            <div class="industry"><h3>Hardware suppliers</h3></div>
            <div class="industry"><h3>Workshops</h3></div>
            <div class="industry"><h3>Industrial maintenance companies</h3></div>
            <div class="industry"><h3>Tools distributors</h3></div>
            <div class="industry"><h3>Service centers</h3></div>
            <div class="industry"><h3>Buyers wholesale</h3></div>
        </div>

        <p style="text-align:center;margin-top:30px;color:#cbd5df;">
            Let us know the brand and model of your power tools and we will look for the correct
            armature as well as availability.
        </p>

    </div>
</section>


<!-- DEALER -->
<section class="oem">
    <div class="container">

        <div class="oem-box">

            <h2>Armature Dealer in Jaipur</h2>

            <p>
                <strong>Vicky Power Tools</strong> also provides armatures to the customers who are looking for
                <strong>Armature Dealer</strong> in Jaipur.
            </p>

            <p>
                We are a Delhi based power tools <strong>armature manufacturer</strong> and supplier. We can cater
                Jaipur based dealers, repair professionals and businesses that requires
                replacement armatures.
            </p>

            <p>
                The customer must provide the power tools model number, armature picture or
                technical data for the selection of the right product. This allows to find a
                suitable replacement product.
            </p>

        </div>

    </div>
</section>


<!-- PRODUCTS -->
<section>
    <div class="container">

        <div class="section-title">
            <h2>Armatures For Various Power Tools</h2>
            <p>
                <strong>Vicky Power Tools</strong> produces different armatures for different power tools.
                Depending upon model number and specifications, our armatures can be used for:
            </p>
        </div>

        <div class="product-grid">

            <div class="product-card">
                <div class="product-icon">⚙</div>
                <h3>Angle Grinder</h3>
                <p>
                    we have best armatures for angle grinder suitable for workshop, fabrication
                    and construction applications.
                </p>
            </div>

            <div class="product-card">
                <div class="product-icon">⚡</div>
                <h3>Drilling Machines</h3>
                <p>
                    Armatures for electric drilling machines for maintenance, installation and
                    workshop applications.
                </p>
            </div>

            <div class="product-card">
                <div class="product-icon">◉</div>
                <h3>Cut-Off Machine</h3>
                <p>Replacement armatures for certain cut-off machine models.</p>
            </div>

            <div class="product-card">
                <div class="product-icon">⚙</div>
                <h3>Marble Cutters</h3>
                <p>Armatures for compatible marble, tile & stone cutting machinery.</p>
            </div>

            <div class="product-card">
                <div class="product-icon">+</div>
                <h3>Straight Grinders</h3>
                <p>
                    Replacement armatures for appropriate straight grinder models for grinding
                    and finishing applications.
                </p>
            </div>

            <div class="product-card">
                <div class="product-icon">✓</div>
                <h3>Other power tools</h3>
                <p>
                    We also have armature solutions for other compatible electric power tools.
                    Availability dependent upon model and technical requirements.
                </p>
            </div>

        </div>

    </div>
</section>


<!-- FAQ -->
<section class="products">
    <div class="container">

        <div class="section-title">
            <h2>Frequently Asked Questions</h2>
        </div>

        <div class="faq">

            <div class="faq-item">
                <div class="faq-question">1. Vicky Power Tools is from Jaipur, Rajasthan?</div>
                <div class="faq-answer">
                    No. Vicky Power Tools is located in Delhi. We are manufacturer and supplier of
                    Power Tools Armature from Delhi for the customers of Jaipur and other parts of
                    Rajasthan.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">2. Does Vicky Power Tools supply armatures in Jaipur ?</div>
                <div class="faq-answer">
                    Yes. Vicky Power Tools supplies armatures to customers in Jaipur and other
                    parts of Rajasthan.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">3. Are you a manufacturer of Armature from Jaipur?</div>
                <div class="faq-answer">
                    Vicky Power Tools is a manufacturer and supplier of armature in jaipur. Based
                    in delhi. No we do not have any manufacturing plant situated in Jaipur.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">4. Vicky Power Tools Jaipur Power tools armature Can I buy?</div>
                <div class="faq-answer">
                    Yeah. Vicky Power Tools is the best place to contact for power tools armatures
                    in Jaipur. You can also check details in out website.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">5. Do you supply armatures to the dealers in Jaipur?</div>
                <div class="faq-answer">
                    Yes. Vicky Power Tools will supply armatures to dealers, distributors, repair
                    shops and other industries in Jaipur.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">6. What kind of power tools armatures do you supply?</div>
                <div class="faq-answer">
                    We produce and supply armatures for relevant angle grinders, drilling machines,
                    cut-off machines, marble cutters, straight grinders and other electric power
                    tools.
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