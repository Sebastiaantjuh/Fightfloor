<?php
include 'templates/head.php';
?>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="57">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand" href="?fun=home">fightfloor</a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="?fun=home">home</a></li>
                    <li class="nav-item"><a class="nav-link" href="">over ons</a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">Sporten</a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="?fun=1">inloggen</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="text-center text-white d-flex masthead" style="background: url('templates/assets/img/19905-professional_boxing-muscle-hook-boxing_rings-fitness_professional-1920x1236.jpg');">
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h1 class="text-uppercase"><strong>FIGHTFLOOR</strong></h1>
                </div>
            </div>
            <div class="col-lg-8 mx-auto">
                <p class="text-faded mb-5" style="font-family: 'Open Sans', sans-serif;">vechtsporten</p>
            </div>
        </div>
    </header>
    <section id="about" style="background: #00366f;">
        <div class="container">
            <div class="row">
                <div class="col offset-lg-8 text-center mx-auto">
                    <h2 class="text-white section-heading">Lorem ipsum dolor sit amet</h2>
                    <p class="text-faded mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ipsum odio, tempor et quam in, 
                        pharetra bibendum nunc. Ut nulla turpis, eleifend in dui et, elementum finibus lacus. Duis feugiat facilisis dolor, ac luctus enim fringilla non. 
                        Morbi sit amet.<br></p>
                </div>
            </div>
        </div>
    </section>
    <section id="services"><img src="templates/assets/img/photo-1513151233558-d860c5398176.jpg" style="width: 350px;float: left;margin: 0px;margin-left: 35px;margin-right: 35px;">
        <h1 style="/*padding-left: 1px;*/">Heading</h1>
        <p><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ipsum odio, tempor et quam in, pharetra bibendum nunc. Ut nulla turpis, eleifend in dui et, 
            elementum finibus lacus. Duis feugiat facilisis dolor, ac luctus enim fringilla non. Morbi sit amet.<br><br></p>
            <br>
            <br>
    </section>
    <section id="services" style="padding-top: 1rem !Important"><img src="templates/assets/img/photo-1513151233558-d860c5398176.jpg" style="width: 350px;float: left;margin: 0px;margin-left: 35px;margin-right: 35px;">
        <h1 style="/*padding-left: 1px;*/">Heading</h1>
        <p><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ipsum odio, tempor et quam in, pharetra bibendum nunc. Ut nulla turpis, eleifend in dui et, 
            elementum finibus lacus. Duis feugiat facilisis dolor, ac luctus enim fringilla non. Morbi sit amet.<br><br></p>
            <br>
            <br>
    </section>
    <section id="services" style="padding-top: 1rem !Important"><img src="templates/assets/img/photo-1513151233558-d860c5398176.jpg" style="width: 350px;float: left;margin: 0px;margin-left: 35px;margin-right: 35px;">
        <h1 style="/*padding-left: 1px;*/">Heading</h1>
        <p><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ipsum odio, tempor et quam in, pharetra bibendum nunc. Ut nulla turpis, eleifend in dui et, 
            elementum finibus lacus. Duis feugiat facilisis dolor, ac luctus enim fringilla non. Morbi sit amet.<br><br></p>
            <br>
            <br>
    </section>
    <section id="contact" style="height: 746px;padding: 0px;">
        <section class="contact-clean" style="background: rgb(255,255,255);">
            <form method="post" action="../PHP/newsletter.php">
                <h2 class="text-center">Nieuwsbrief</h2>
                <div class="mb-3"><input class="form-control" type="text" name="name" placeholder="Name" style="border-radius: 20px;"></div>
                <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email" style="border-radius: 20px;"></div>
                <div class="mb-3"></div>
                <div class="mb-3"><button class="btn btn-primary" type="submit" style="color: rgb(255, 255, 255);background: #00366f;">send </button></div>
            </form>
        </section>
        <footer class="footer-clean" style="height: 215px;background: #00366f;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Hosting</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3"></div>
                    <div class="col-sm-4 col-md-3 item"></div>
                    <div class="col-lg-3 item social"></div>
                </div>
            </div>
        </footer>
    </section>
    <script src="templates/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="templates/assets/js/creative.js"></script>
</body>

</html>