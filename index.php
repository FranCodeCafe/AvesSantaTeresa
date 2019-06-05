<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#349615" />
    <title>Aves Santa Teresa</title>
    <link rel="icon" href="img/chicken.png">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }
        #logo {
            vertical-align:center;
            margin:-10px 10px -10px 10px;
        }
        #name {
            font-family:'Poppins','Source Sans Pro',Calibri,Candara,Arial,sans-serif;
            font-size:24px;
            vertical-align:center;
        }
        #slogan {
            font-family:'Poppins','Source Sans Pro',Calibri,Candara,Arial,sans-serif;
            font-size:16px;
            vertical-align:center;
        }
        #razas-img-modal {
        }
        @media (max-width: 580px) {
            #logo {
                width:70px;
                margin:-10px -10px -10px -15px;
            }
            #name {
                font-size:16px;
            }
            #slogan {
                font-size:14px;
            }
            #navbar-toggler {
            }
            #razas-img-modal {
                width:310px;
            }
        }
    </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <div id="wrapper" style="position:relative;">
<!-- NavBar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top" style="-webkit-box-shadow: 0px 2px 5px -1px rgba(0,0,0,0.5);-moz-box-shadow: 0px 2px 5px -1px rgba(0,0,0,0.5);box-shadow: 0px 2px 5px -1px rgba(0,0,0,0.5);">
            <!-- Logo -->
            <a class="navbar-brand" href="#" style="color:#fff;text-decoration:none;text-align:center;vertical-align:top;">
                <img id="logo" alt="Logo" src="img/logo2.png" width="70">
            </a>
            <a class="navbar-brand" href="#" style="color:#fff;text-decoration:none;text-align:center;vertical-align:center;">
                <span id="name">AVES SANTA TERESA</span>
                <br>
                <span id="slogan">Llay Llay - Chile</span>
            </a>
            <!-- Responsive Nav Button -->
            <button id="navbar-toggler" style="vertical-align:top;display:row;justify-content:right;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Nav Links -->
            <div class="collapse navbar-collapse" id="navbarColor02" style="padding-right:40px;">
                <ul class="navbar-nav ml-auto text-center">
                <li style="padding-left:30px;" class="nav-item active">
                    <a class="nav-link" href="#"><i class="fas fa-home"></i> Inicio</a>
                </li>
                <li style="padding-left:30px;" class="nav-item">
                    <a class="nav-link" href="#somos"><i class="fas fa-egg"></i> Quiénes Somos</a>
                </li>
                <li style="padding-left:30px;" class="nav-item">
                    <a class="nav-link" href="#razas"><i class="fas fa-feather-alt"></i> Razas</a>
                </li>
                <li style="padding-left:30px;" class="nav-item">
                    <a class="nav-link" href="#contacto"><i class="fab fa-whatsapp"></i> Contacto</a>
                </li>
                </ul>
            </div>
        </nav>

<!-- Carousel -->
        <div id="slider" class="carousel slide" data-ride="carousel" style="padding-top:30px;">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="img/chicken01.jpg" alt="Los Angeles" width="1024" height="400">
                <div class="carousel-caption">
                    <h3>Los Angeles</h3>
                    <p>We had such a great time in LA!</p>
                </div>   
                </div>
                <div class="carousel-item">
                <img src="img/chicken02.jpg" alt="Chicago" width="1024" height="400">
                <div class="carousel-caption">
                    <h3>Chicago</h3>
                    <p>Thank you, Chicago!</p>
                </div>   
                </div>
                <div class="carousel-item">
                <img src="img/chicken03.jpg" alt="New York" width="1024" height="400">
                <div class="carousel-caption">
                    <h3>New York</h3>
                    <p>We love the Big Apple!</p>
                </div>   
                </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>

<!-- Us -->
        <div id="somos" class="container-fluid" style="padding:100px 50px 20px 50px;text-align:center;">
            <h1 id="section-title">Quiénes Somos</h1>
            <h1 id="section-icon" style="padding-bottom:40px;"><i class="fas fa-egg" style="color:#FFA600;"></i></h1>
            <div class="row">
                <!-- Us Carousel Column -->
                <div class="col-sm-6" style="padding-bottom:30px;">
                    <div id="somos-slider" class="carousel slide" data-ride="carousel">
                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                        </ul>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/example01.jpg" alt="Los Angeles">
                            </div>
                            <div class="carousel-item">
                                <img src="img/example02.jpg" alt="Chicago">
                            </div>
                            <div class="carousel-item">
                                <img src="img/example03.jpg" alt="New York"> 
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
                <!-- Us Description Column -->
                <div class="col-sm-6">
                   <p style="text-align:justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In lobortis eros orci. Fusce turpis ex, fermentum eget sapien a, vehicula scelerisque tellus. Cras imperdiet gravida pulvinar. Donec eleifend semper nibh id dapibus. Morbi suscipit posuere metus non luctus. Donec a euismod turpis, at rutrum nisl. Curabitur sed luctus velit. In pharetra lorem id dignissim finibus. Suspendisse potenti. Phasellus vel porttitor orci. Donec ut libero auctor, congue enim quis, laoreet lacus.</p>
                   <p style="text-align:justify;">Quisque vitae feugiat libero. Curabitur sodales lobortis ornare. Vivamus suscipit viverra laoreet. Etiam faucibus quis quam vitae porta. Donec commodo sit amet odio id tristique. Nunc purus lorem, interdum nec pretium eu, tincidunt sit amet magna. In hac habitasse platea dictumst.</p>
                </div>
            </div>
        </div>

<!-- Breeds -->
        <div id="razas" class="container-fluid" style="padding:100px 50px 20px 50px;text-align:center;">
            <h1 id="section-title">Razas</h1>
            <h1 id="section-icon" style="padding-bottom:40px;"><i class="fas fa-feather-alt" style="color:#FFE228;"></i></h1>
            <div class="row">
                <div class="col-sm-4">
                    <a href="#" style="color:#373a3c;text-decoration:none;"><img src="img/example02.jpg" alt="New York" width="200" height="200" style="border-radius:50%;">
                    <h3 style="padding:10px 0px 50px 0px;font-weight:600;"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-razas">Nombre 1</button></h3>
                </div>
                <div class="col-sm-4">
                    <a href="#" style="color:#373a3c;text-decoration:none;"><img src="img/example02.jpg" alt="New York" width="200" height="200" style="border-radius:50%;">
                    <h3 style="padding:10px 0px 50px 0px;font-weight:600;"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-razas">Nombre 2</button></h3>
                </div>
                <div class="col-sm-4">
                    <a href="#" style="color:#373a3c;text-decoration:none;"><img src="img/example02.jpg" alt="New York" width="200" height="200" style="border-radius:50%;">
                    <h3 style="padding:10px 0px 50px 0px;font-weight:600;"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-razas">Nombre 3</button></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <a href="#" style="color:#373a3c;text-decoration:none;"><img src="img/example02.jpg" alt="New York" width="200" height="200" style="border-radius:50%;">
                    <h3 style="padding:10px 0px 50px 0px;font-weight:600;"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-razas">Nombre 4</button></h3>
                </div>
                <div class="col-sm-4">
                    <a href="#" style="color:#373a3c;text-decoration:none;"><img src="img/example02.jpg" alt="New York" width="200" height="200" style="border-radius:50%;">
                    <h3 style="padding:10px 0px 50px 0px;font-weight:600;"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-razas">Nombre 5</button></h3>
                </div>
                <div class="col-sm-4">
                    <a href="#" style="color:#373a3c;text-decoration:none;"><img src="img/example02.jpg" alt="New York" width="200" height="200" style="border-radius:50%;">
                    <h3 style="padding:10px 0px 50px 0px;font-weight:600;"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-razas">Nombre 6</button></h3>
                </div>
            </div>
        </div>

        <!-- Breeds Modal -->
        <div class="modal fade" id="modal-razas">
            <div class="modal-dialog modal-xl">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                <h1 class="modal-title">Modal Heading</h1>
                <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                    <h3 style="padding-bottom:20px;">Some text to enable scrolling..</h3>
                    <div class="alert alert-dismissible alert-warning">
                        <!--<button type="button" class="close" data-dismiss="alert">&times;</button>-->
                        <h4 class="alert-heading">Warning!</h4>
                        <p style="padding-bottom:20px;" class="mb-0">Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, <a href="#" class="alert-link">vel scelerisque nisl consectetur et</a>.</p>
                    </div>
                    <div class="row">
                        <div id="razas-modal-col" class="col-sm" style="padding-bottom:20px;">
                            <img id="razas-img-modal" src="img/example01.jpg" alt="">
                        </div>
                        <div id="razas-modal-col" class="col-sm" style="padding-bottom:20px;">
                            <p style="text-align:justify;">Some text to enable scrolling.. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div id="razas-modal-col" class="col-sm" style="padding-bottom:20px;">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                <th scope="col">Type</th>
                                <th scope="col">Column heading</th>
                                <th scope="col">Column heading</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-primary">
                                <th scope="row">Primary</th>
                                <td>Column content</td>
                                <td>Column content</td>
                                </tr>
                                <tr class="table-success">
                                <th scope="row">Success</th>
                                <td>Column content</td>
                                <td>Column content</td>
                                </tr>
                                <tr class="table-danger">
                                <th scope="row">Danger</th>
                                <td>Column content</td>
                                <td>Column content</td>
                                </tr>
                                <tr class="table-warning">
                                <th scope="row">Warning</th>
                                <td>Column content</td>
                                <td>Column content</td>
                                </tr>
                                <tr class="table-info">
                                <th scope="row">Info</th>
                                <td>Column content</td>
                                <td>Column content</td>
                                </tr>
                            </tbody>
                            </table>
                            <!--<div class="card border-primary mb-3" style="max-width: 20rem;">
                                <div class="card-header">Header</div>
                                <div class="card-body">
                                    <h4 class="card-title">Primary card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>-->
                        </div>
                        <div id="razas-modal-col" class="col-sm" style="padding-bottom:20px;">
                            <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Cras justo odio
                                <span class="badge badge-primary badge-pill">14</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Dapibus ac facilisis in
                                <span class="badge badge-primary badge-pill">2</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Morbi leo risus
                                <span class="badge badge-primary badge-pill">1</span>
                            </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
                
            </div>
            </div>
        </div>

<!-- Contact -->
        <div id="contacto" class="container-fluid" style="padding:100px 50px 50px 50px;text-align:center;">
            <h1 id="section-title">Contacto</h1>
            <h1 id="section-icon" style="padding-bottom:40px;"><i class="fab fa-whatsapp" style="color:#25d366;"></i></h1>
            <div class="row">
                <!-- Contact Form -->
                <!-- ¡HOLA PERSONA CURIOSA! ¿DANDO UN PASEO POR EL CÓDIGO? NO ES CIENCIA DE COHETES LOL -->
                <div class="col-sm-6">
                   <form action="contacto.php" method="POST" style="padding-bottom:30px;text-align:left;background-color:#fff;border-radius:15px;">
                        <p style="text-align:justify;">Puedes enviarnos un mensaje con tus dudas y te responderemos a la brevedad.</p>
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="nombre" class="form-control" id="nombre" placeholder="Ingrese su nombre" name="nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="asunto">Asunto:</label>
                            <input type="asunto" class="form-control" id="asunto" placeholder="Ingrese un asunto" name="asunto" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Ingrese su correo" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="mensaje">Mensaje:</label>
                            <textarea class="form-control" rows="7" id="mensaje" placeholder="Ingrese su mensaje" name="mensaje" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>

                <!-- Contact Links -->
                <div class="col-sm-6" style="text-align:left;">
                    <div id="container-contacto" style="text-align:left;background-color:#fff;padding:0px 20px 20px 20px;border-radius:15px;">
                        <div class="alert alert-dismissible alert-success" style="text-align:justify;">
                            <!--<button type="button" class="close" data-dismiss="alert">&times;</button>-->
                            <strong>¡Atención!</strong> Si deseas visitarnos, por favor <strong>contáctanos para pedir una hora primero</strong>. De esta forma nos aseguramos de no realizar planes y podemos atenderte bien.
                        </div>
                        <p><a style="text-decoration:none;color:#000;" href="tel:+56956015395"><i style="font-size:18px;" class="fas fa-phone"></i>  Llámanos al +56 9 56015395</a></p>
                        <p><a style="text-decoration:none;color:#000;" href="https://api.whatsapp.com/send?phone=+56956015395"><i style="font-size:18px;" class="fab fa-whatsapp"></i> Hablemos por WhatsApp</a></p>
                        <p><a style="text-decoration:none;color:#000;" href="https://www.facebook.com/Aves-Santa-Teresa-696794420517801/"><i style="font-size:18px;" class="fab fa-facebook"></i> Visita nuestro FanPage en Facebook</a></p>
                        <p><a style="text-decoration:none;color:#000;" href="https://m.me/696794420517801?fbclid=IwAR0W-LcSYanSCDU2yCdWG6Pc_kP9Q2_UNGg6MyjdePfirCGgMrwUIDgcAlY"><i style="font-size:18px;" class="fab fa-facebook-messenger"></i> Envíanos un mensaje por Messenger</a></p>
                        <p><a style="text-decoration:none;color:#000;" href="mailto:avessantateresa@gmail.com"><i style="font-size:18px;" class="fas fa-at"></i> AvesSantaTeresa@gmail.com</a></p>
                        <p><a href="https://www.google.com/maps/place/Aves+Santa+Teresa/@-32.841078,-70.939512,18z/data=!4m5!3m4!1s0x0:0xfca390054855f838!8m2!3d-32.841078!4d-70.9395124?hl=es-419" style="text-decoration:none;color:#000;"><i style="font-size:18px;" class="fas fa-map-marker-alt"></i> Calle San Ignacio 19, Población Santa Teresa, Llay Llay, Región de Valparaíso.</a></p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d323.10839612277755!2d-70.9393659499479!3d-32.841068347190316!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x96883bbce4b65d67%3A0xfca390054855f838!2sAves+Santa+Teresa!5e0!3m2!1ses-419!2scl!4v1557787354971!5m2!1ses-419!2scl" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
 
<!-- Footer -->
        <div id="footer" class="container-fluid" style="background-color:#051908;">
            <div class="row">
                <!-- Logo Column -->
                <div class="col-sm-4" style="font-family:'Poppins','Source Sans Pro',Calibri,Candara,Arial,sans-serif;color:#fff;text-align:center;padding:35px 20px 30px 20px;">
                    <a style="color:#fff;text-decoration:none;" href="#"><h4>AVES SANTA TERESA</h4>
                        <span>Llay Llay - Chile</span>
                    </a>
                </div>
                
                <!-- Nav Links Column -->
                <div class="col-sm-4" style="font-size:14px;text-align:center;padding:30px 10px 30px 10px;display:flex;justify-content:space-around;">
                    <a style="color:#fff;" class="nav-link" href="#somos">Quiénes Somos</a>
                    <a style="color:#fff;" class="nav-link" href="#razas">Razas</a>
                    <a style="color:#fff;" class="nav-link" href="#contacto">Contacto</a>
                </div>
                <!-- Social Links Column -->
                <div id="social-icon-col" class="col-sm-4" style="font-size:30px;text-align:center;padding:30px 0px 30px 10px;">
                    <a style="color:#fff;" href="https://api.whatsapp.com/send?phone=+56956015395" target="_blank"><i style="padding-right:20px;" class="fab fa-whatsapp"></i></a>
                    <a style="color:#fff;" href="https://www.facebook.com/Aves-Santa-Teresa-696794420517801" target="_blank"><i style="padding-right:20px;" class="fab fa-facebook"></i></a>
                    <a style="color:#fff;" href="https://m.me/696794420517801?fbclid=IwAR0W-LcSYanSCDU2yCdWG6Pc_kP9Q2_UNGg6MyjdePfirCGgMrwUIDgcAlY" target="_blank"><i style="padding-right:20px;" class="fab fa-facebook-messenger"></i></a>
                    <a style="color:#fff;" href="https://www.instagram.com/aves_sta_teresa/" target="_blank"><i style="padding-right:20px;" class="fab fa-instagram"></i></a>
                    <a style="color:#fff;" href="https://www.google.com/maps/place/Aves+Santa+Teresa/@-32.841078,-70.939512,18z/data=!4m5!3m4!1s0x0:0xfca390054855f838!8m2!3d-32.841078!4d-70.9395124?hl=es-419" target="_blank"><i style="padding-right:20px;" class="fas fa-map-marked-alt"></i></a>
                </div>
            </div>
        </div>
            <!-- Copyright -->
        <div id="copyright" class="container-fluid" style="font-size:12px;color:#fff;background-color:#143319;height:40px;width:100%;display:flex;justify-content:center;padding:10px 0px 20px 0px;">
            <a style="color:#fff;text-decoration:none;" href="https://github.com/FranVanHouten" target="_blank">
            <p>Hecho con <i class="fas fa-heart"></i> y <i class="fas fa-coffee"></i> por Francisca Salinas Castillo</p>
            </a>
        </div> 

    </div> <!-- Wrapper End -->
</body>
</html>