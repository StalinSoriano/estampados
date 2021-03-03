<section id="header">
    <a href="#" class="logo">LIONS DECORMOTORS<span>.</span></a>
    <ul class="navigation">
        <li><a href="#banner">Inicio</a></li>
        <li><a href="#banner">Catálogo</a></li>
        <li><a href="#about">Nosotros</a></li>
        <li><a href="#team">Nuestro Equipo</a></li>
        <li><a href="#contact">Contáctanos</a></li>
    </ul>
</section>
<section class="banner" id="banner">
    <div class="content">
        <h2>El Rey de los Estampados</h2>
        <p>Conoce nuestra variedad de productos con un solo click !</p>
        <a href="#" class="btn">Catálogo</a>
    </div>
</section>

<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <h2 class="titleN"><span>N</span>osotros</h2>
                <p>Somos una empresa dedicada a satisfacer las necesidades de nuestros clientes, contamos con muchos
                    años de experiencia siempre brindado un trabajo de calidad a un bajo costo!
                    <br><br>
                    Realizamos todo tipo de estampados por ejemplo puertas, ventanas, mesas, paredes. También realizamos
                    letreros o banner de todo tamaño y acorde a su presupuesto.
                </p>

            </div>
            <div class="col-sm-12 col-lg-6 imgBx">
                <img src="assets/img/logo.jpg" class="img-fluid" alt="...">
            </div>
        </div>
    </div>
</section>

<section id="team">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 titleTeam">
                <h2><span>N</span>uestro <span>E</span>quipo</h2>
            </div>

            <div class="col-lg-3 ">

                <div class="card">
                    <img src="assets/img/a.jpg" alt="">
                    <h3>nombre</h3>
                    <p>cargo</p>
                </div>

            </div>
            <div class="col-lg-3 ">

                <div class="card">
                    <img src="assets/img/a.jpg" alt="">
                    <h3>nombre</h3>
                    <p>cargo</p>
                </div>

            </div>
            <div class="col-lg-3 ">

                <div class="card">
                    <img src="assets/img/a.jpg" alt="">
                    <h3>nombre</h3>
                    <p>cargo</p>
                </div>

            </div>
            <div class="col-lg-3 ">

                <div class="card">
                    <img src="assets/img/a.jpg" alt="">
                    <h3>Stalin Soriano</h3>
                    <p>cargo</p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="contact">
    <div class="container">
        <div class="row">

            <div class="col-sm-12 titleContact">
                <h2><span>C</span>ontáctanos</h2>
            </div>
            <div class="col-lg-3 info">
                <h3>Información</h3>
                <i class="bi bi-geo-alt-fill"></i> <span>Dirección:</span>
                <p> bolivar bla bla bla</p>
                <i class="bi bi-telephone-fill"></i> <span>Teléfono:</span>
                <p> bolivar bla bla bla</p>
                <i class="bi bi-envelope-fill"></i> <span>Email:</span>
                <p> bolivar bla bla bla</p>

            </div>
            <div class="col-lg-9 infoMapa">
                <h3>Visítanos</h3>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.47723276108!2d-79.72579008552206!3d-1.962868198568985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902d3d4ed245dfc5%3A0xce8ea89b714b58af!2sBolivar%2C%20Samborond%C3%B3n!5e0!3m2!1ses-419!2sec!4v1614736542700!5m2!1ses-419!2sec"
                    width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>


        </div>
    </div>
</section>

<section id="footer">
    <div class="container">
        <div class="row">

            <div class="col-sm-12 redesSociales">
                <ul>
                    <li>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="bi bi-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="bi bi-whatsapp"></i></a>
                    </li>

                </ul>
            </div>
            <div class="col-sm-12 text-center copyright">

                © 2021 Copyright: S.D.S.A.

            </div>
        </div>
    </div>
</section>


<script>
window.addEventListener('scroll', function() {
    const header = document.getElementById('header');
    header.classList.toggle('sticky', window.scrollY > 0);

});
</script>