<!doctype html>
<html lang="en">

<head>
    <title>Wings</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="app/views/css/nav.css">
    <link rel="stylesheet" type="text/css" href="app/views/css/style.css">
    <link rel="icon" type="text/css" href="app/views/css/style2.css">

</head>

<body>
    <!-- Navbar-->
    <header class="header">

        <nav class="navbar navbar-expand-lg fixed-top py-3">
            <div class="container">

                <a href="index.html"><img class="navbar-brand" src="app/views/mediaimg/logoSwings.png" id="logo"></a>

                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right">
                    <i class="fa fa-bars"></i>
                </button>

                <div id="navbarSupportedContent" class="collapse navbar-collapse">

                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item px-4 dropdown">
                            <a class="dropdown-toggle nav-link text-uppercase font-weight-bold" data-toggle="dropdown" href="#">Menú</a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">


                                <div class="d-md-flex align-items-start justify-content-start">
                                    <div>
                                        <div class="dropdown-header">Entradas</div>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#entradas">Aros de cebolla</a>
                                        <a class="dropdown-item" href="#entradas">Bacon cheese</a>
                                        <a class="dropdown-item" href="#entradas">Mozzarella sticks</a>
                                    </div>
                                    <div>
                                        <div class="dropdown-header">Combos</div>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#comboAlitas">Alitas</a>
                                        <a class="dropdown-item" href="#comboCostillas">Costillas</a>
                                        <a class="dropdown-item" href="#comboCombiados">Combinados</a>
                                    </div>
                                    <div>
                                        <div class="dropdown-header">Alitas</div>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#alitas">Alitas</a>
                                        <a class="dropdown-item" href="#bombones">Bombones</a>
                                    </div>
                                    <div>
                                        <div class="dropdown-header">Costillas</div>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#costillas">Full Rack</a>
                                        <a class="dropdown-item" href="#costillas">Medio Rack</a>
                                    </div>

                                </div>
                            </div>
                        </li>

                        <li class="nav-item  active">
                            <a href="#promociones" class="nav-link text-uppercase font-weight-bold">Promociones</a>
                        </li>

                        <li class="dropdown">
                            <a class="dropdown-toggle nav-link text-uppercase font-weight-bold" data-toggle="dropdown" href="#">Domicilios</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#" class="dropdown-item hvr-sweep-to-top">Zona de cobertura</a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a class="dropdown-toggle nav-link text-uppercase font-weight-bold" data-toggle="dropdown" href="#">Sobre nosotros</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#contacto" class="dropdown-item hvr-sweep-to-top">Contactanos</a>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-item hvr-sweep-to-top">Donde estamos</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item  active">
                            <a href="registro.html" class="nav-link text-uppercase font-weight-bold">Registrate</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="section-one" id="section-one">
        <div class="container">

            <div class="row">

                <div class="row align-items-center">
                    <div class="col-md-12">

                        <div class="pasion">
                            <h1 class="title-pasion">Pasión por las alitas</h1>
                        </div>
                    </div>
                </div>

            </div>
    </section>


    <section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb img">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-5 order-md-last d-flex align-items-stretch">
                    <div class="donation-wrap">
                        <div class="total-donate d-flex align-items-center">

                            <p class="align-items-center">
                                <h1>Iniciar sesión</h1>
                            </p>

                        </div>
                        <form action="index.php" method="post" class="appointment">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">Usuario</label>
                                        <div class="input-wrap">
                                            <input type="text" name="user" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">Contraseña</label>
                                        <div class="input-wrap">
                                            <input type="password" name="password" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for=""></label>
                                        <div class="input-wrap">
                                            <!-- <a href="admin.html?action=registro" class="btn btn-secondary py-3 px-4">Ingresar</a> -->
                                            <button type="submit" name="submit"  class="btn btn-secondary py-3 px-4">Ingresar</button> 

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-7 wrap-about py-5">
                    <div class="heading-section pr-md-5 pt-md-5">
                        <span class="subheading">Bienvenido</span>
                        <h2 class="mb-4">Estamos aquí para servirte</h2>
                        <p>Nos mueve la pasión por darte las mejores alitas de la ciudad, acompañado de un excelente servicio.
                        </p>
                    </div>

                    <p><a href="registro.html" class="btn btn-secondary btn-outline-secondary">Registrate</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Seccion promociones -->

    <section id="promociones">

        <div class="container">
            <div class="row">
                <div class="col-md-12 align-items-center">
                    <div class="elementor-widget-divider">
                        <div class="elementor-widget-container">
                            <div class="elementor-divider">
                                <span class="elementor-divider-separator"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 align-items-center">
                    <h1 class="abs-center">PROMOCIONES</h1>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="img-alitas">
                        <h2>2x1 EN ALITAS</h2>
                        <img src="app/views/mediaimg/swings-24.jpg">
                    </div>
                    <div class="info">
                        <p>Martes y Miércoles</p>
                        <a href="#" class="text-danger">Ver más</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-alitas">
                        <h2>30% EN COMBOS</h2>
                        <img src="app/views/mediaimg/swings-50.jpg">
                    </div>
                    <div class="info">
                        <p>En Combos de 30 y 50 Alitas</p>
                        <a href="#" class="text-danger">Ver más</a>
                    </div>
                </div>

            </div>

        </div>

    </section>




    <!-- Seccion Entradas -->

    <section id="entradas">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-items-center">
                    <div class="elementor-widget-divider">
                        <div class="elementor-widget-container">
                            <div class="elementor-divider">
                                <span class="elementor-divider-separator"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 align-items-center">
                    <h1 class="abs-center">ENTRADAS</h1>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="img-alitas">
                        <h2>Aros de cebolla</h2>
                        <img src="app/views/mediaimg/ArosdeCebolla.jpg">
                    </div>
                    <div class="info">
                        <p>Deliciosos y crujientes aros de cebolla</p>
                        <p>7.000</p>
                        <a href="#" class="text-danger">Ver más</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="img-alitas">
                        <h2>Bacon cheese</h2>
                        <img src="app/views/mediaimg/BaconCheeseFries.jpg">
                    </div>
                    <div class="info">
                        <p>Papas a la francesa bañadas con queso cheddar y tocineta crujiente</p>
                        <p>16.900</p>
                        <a href="#" class="text-danger">Ver más</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="img-alitas">
                        <h2>Mozzarella sticks</h2>
                        <img src="app/views/mediaimg/MozzarellaSticks.jpg">
                    </div>
                    <div class="info">
                        <p>Dedos de mozarella con salsa de frutos rojos</p>
                        <p>15.000</p>
                        <a href="#" class="text-danger">Ver más</a>
                    </div>
                </div>


            </div>

        </div>
    </section>




    <!-- Seccion combos -->

    <section id="Combos">
        <div class="container">

            <div class="row">
                <div class="col-md-12 align-items-center">
                    <div class="elementor-widget-divider">
                        <div class="elementor-widget-container">
                            <div class="elementor-divider">
                                <span class="elementor-divider-separator"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 align-items-center">
                    <h1 class="abs-center">COMBOS</h1>
                </div>
            </div>

            <!-- Seccion combos alitas-->

            <section id="comboAlitas">
                <div class="row">
                    <div class="col-md-12 align-items-center">
                        <h1 class="abs-center">Alitas</h1>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="img-alitas">
                            <h2>Combo 1</h2>
                            <img src="app/views/mediaimg/Combo1.jpg">
                        </div>
                        <div class="info">
                            <p>6 Alitas, 1 Porción de Papas y 1 Gaseosa de 400ml</p>
                            <p>Elige una salsa</p>
                            <p>20.900</p>
                            <a href="#" class="text-danger">Ver más</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="img-alitas">
                            <h2>Combo 2</h2>
                            <img src="app/views/mediaimg/Combo2.jpg">
                        </div>
                        <div class="info">
                            <p>12 Alitas, 2 Porciones de Papas y 2 Gaseosas de 400ml</p>
                            <p>Elige dos salsas</p>
                            <p>35.900</p>
                            <a href="#" class="text-danger">Ver más</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="img-alitas">
                            <h2>Combo 3</h2>
                            <img src="app/views/mediaimg/Combo3.jpg">
                        </div>
                        <div class="info">
                            <p>30 Alitas, 1 Caja de Papas y 3 Gaseosas de 400ml</p>
                            <p>Elige cuatro salsas</p>
                            <p>70.000</p>
                            <a href="#" class="text-danger">Ver más</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="img-alitas">
                            <h2>Combo 4</h2>
                            <img src="app/views/mediaimg/Combo4.jpg">
                        </div>
                        <div class="info">
                            <p>50 Alitas, 2 Cajas de Papas y 4 Gaseosas de 400ml</p>
                            <p>Elige todas las salsas</p>
                            <p>105.000</p>
                            <a href="#" class="text-danger">Ver más</a>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Seccion combos costillas-->

            <section id="comboCostillas">
                <div class="row">
                    <div class="col-md-12 align-items-center">
                        <h1 class="abs-center">Costillas</h1>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="img-alitas">
                            <h2>Combo 1</h2>
                            <img src="app/views/mediaimg/ComboCostillaMedioRack.jpg">
                        </div>
                        <div class="info">
                            <p>350g de Costilla BBQ + 2 Acompañantes</p>
                            <p>27.900</p>
                            <a href="#" class="text-danger">Ver más</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="img-alitas">
                            <h2>Combo 2</h2>
                            <img src="app/views/mediaimg/ComboCostillaFullRack.jpg">
                        </div>
                        <div class="info">
                            <p>750g de Costilla BBQ + 2 Acompañantes</p>
                            <p>46.900</p>
                            <a href="#" class="text-danger">Ver más</a>
                        </div>
                    </div>

                </div>
            </section>

            <!-- Seccion combos combinados-->

            <section id="comboCombiados">
                <div class="row">
                    <div class="col-md-12 align-items-center">
                        <h1 class="abs-center">Combinados</h1>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="img-alitas">
                            <h2>Combo jumbo</h2>
                            <img src="app/views/mediaimg/JumboCombo.jpg">
                        </div>
                        <div class="info">
                            <p>12 alitas, 1 porción de bacon cheese fries, 1 porción de camarón popcorn, 1 porción de dedos apanados y 1 porción de mozarella sticks </p>
                            <p>85.900</p>
                            <a href="#" class="text-danger">Ver más</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="img-alitas">
                            <h2>Combo alitas y costillas</h2>
                            <img src="app/views/mediaimg/ComboCostillasyAlitas.jpg">
                        </div>
                        <div class="info">
                            <p>350g de Costillas BBQ + 6 Alitas</p>
                            <p>+ 2 acompañantes</p>
                            <p>46.900</p>

                            <a href="#" class="text-danger">Ver más</a>
                        </div>
                    </div>

                </div>
            </section>

        </div>
    </section>


    <!-- Seccion ALITAS -->

    <section id="alitas">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-items-center">
                    <div class="elementor-widget-divider">
                        <div class="elementor-widget-container">
                            <div class="elementor-divider">
                                <span class="elementor-divider-separator"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 align-items-center">
                    <h1 class="abs-center">ALITAS</h1>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-3">
                    <div class="img-alitas">
                        <h2>6 unidades</h2>
                        <img src="app/views/mediaimg/swings-6.jpg">
                    </div>
                    <div class="info">
                        <p>Elige una salsa</p>
                        <p>20.000</p>
                        <a href="#" class="text-danger">Ver más</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="img-alitas">
                        <h2>12 unidades</h2>
                        <img src="app/views/mediaimg/swings-12.jpg">
                    </div>
                    <div class="info">
                        <p>Elige dos salsas</p>
                        <p>35.000</p>
                        <a href="#" class="text-danger">Ver más</a>
                    </div>c
                </div>
                <div class="col-md-3">
                    <div class="img-alitas">
                        <h2>24 unidades</h2>
                        <img src="app/views/mediaimg/swings-24.jpg">
                    </div>
                    <div class="info">
                        <p>Elige cuatro salsas</p>
                        <p>65.000</p>
                        <a href="#" class="text-danger">Ver más</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="img-alitas">
                        <h2>50 unidades</h2>
                        <img src="app/views/mediaimg/swings-50.jpg">
                    </div>
                    <div class="info">
                        <p>Elige todas las salsas</p>
                        <p>95.000</p>
                        <a href="#" class="text-danger">Ver más</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Seccion bombones -->

    <section id="bombones">

        <div class="container">
            <div class="row">
                <div class="col-md-12 align-items-center">
                    <div class="elementor-widget-divider">
                        <div class="elementor-widget-container">
                            <div class="elementor-divider">
                                <span class="elementor-divider-separator"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 align-items-center">
                    <h1 class="abs-center">BOMBONES</h1>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="img-alitas">
                        <h2>6 bombones</h2>
                        <img src="app/views/media/img/swings-6.jpg">
                    </div>
                    <div class="info">
                        <p>Elige una salsa</p>
                        <p>19.000</p>
                        <a href="#" class="text-danger">Ver más</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-alitas">
                        <h2>12 bombones</h2>
                        <img src="app/views/media/img/swings-12.jpg">
                    </div>
                    <div class="info">
                        <p>Elige dos salsas</p>
                        <p>34.000</p>
                        <a href="#" class="text-danger">Ver más</a>
                    </div>
                </div>

            </div>

        </div>

    </section>


    <!-- Seccion costillas -->

    <section id="costillas">

        <div class="container">
            <div class="row">
                <div class="col-md-12 align-items-center">
                    <div class="elementor-widget-divider">
                        <div class="elementor-widget-container">
                            <div class="elementor-divider">
                                <span class="elementor-divider-separator"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 align-items-center">
                    <h1 class="abs-center">COSTILLAS</h1>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="img-alitas">
                        <h2>Costilla Medio Rack</h2>
                        <img src="app/views/mediaimg/ComboCostillaMedioRack.jpg">
                    </div>
                    <div class="info">
                        <p>350g de Costilla BBQ + 2 Acompañantes</p>
                        <p>27.900</p>
                        <a href="#" class="text-danger">Ver más</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-alitas">
                        <h2>Costilla Full Rack</h2>
                        <img src="app/views/mediaimg/ComboCostillaFullRack.jpg">
                    </div>
                    <div class="info">
                        <p>750g de Costilla BBQ + 2 Acompañantes</p>
                        <p>46.900</p>
                        <a href="#" class="text-danger">Ver más</a>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- Seccion contacto -->
    <section class="section-contact section-image" id="contacto">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-items-center">
                    <h1 class="abs-center-2">CONTÁCTANOS</h1>
                </div>
            </div>
            <div class="row align-items-center abs-center-2">
                <div class="col-md-4">
                    <div class="hestia-info info info-horizontal">

                        <div class="description">

                            <img src="app/views/mediaimg/location.png" alt="" width="32" height="32">
                            <h4 class="info-title">Dónde Estamos Ubicados</h4>
                            <p>Calle 95 # 79 A - 13, Robledo</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="hestia-info info info-horizontal">
                        <img src="app/views/mediaimg/telephone.png" alt="" width="32" height="32">
                        <div class="description">
                            <h4 class="info-title">Linea única</h4>
                            <p>587 88 59</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="hestia-info info info-horizontal">
                        <img src="app/views/mediaimg/schedule.png" alt="" width="32" height="32">
                        <div class="description">
                            <h4 class="info-title">Horario</h4>
                            <p>Lunes a Domigo 12 pm a 10 pm</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="app/views/js/nav.js"></script>
</body>
<footer>
    <!-- Footer -->
    <section id="footer">
        <div class="container">
            <div class="row text-center text-xs-center text-sm-left text-md-left">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="row">
                        <div class="col-md-12 align-items-center">
                            <div class="elementor-widget-divider">
                                <div class="elementor-widget-container">
                                    <div class="elementor-divider">
                                        <span class="elementor-divider-separator"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="list-unstyled quick-links">
                        <li><a href="#entradas"><i class="fa fa-angle-double-right"></i>Menú</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Sobre nosotros</a></li>
                        <li><a href="#contacto"><i class="fa fa-angle-double-right"></i>Contáctanos</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="row">
                        <div class="col-md-12 align-items-center">
                            <div class="elementor-widget-divider">
                                <div class="elementor-widget-container">
                                    <div class="elementor-divider">
                                        <span class="elementor-divider-separator"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="list-unstyled quick-links">
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Terminos y condiciones</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Pliticas de privacidad</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="row">
                        <div class="col-md-12 align-items-center">
                            <div class="elementor-widget-divider">
                                <div class="elementor-widget-container">
                                    <div class="elementor-divider">
                                        <span class="elementor-divider-separator"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="list-unstyled quick-links">
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Domicilios</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                    <ul class="text-center">

                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/gowingsco/" target="blanck"><img class="navbar-brand" src="app/views/media/img/facebook@2x.png"></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://twitter.com/login?lang=es/" target="blanck"><img class="navbar-brand" src="app/views/media/img/twitter@2x.png"></a>
                        </li>
                        <li class="list-inline-item">
                            <a href=""><img class="navbar-brand" src="app/views/media/img/instagram@2x.png"></a>
                        </li>
                        <li class="list-inline-item">
                            <a href=""><img class="navbar-brand" src="app/views/media/img/google+@2x.png"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="" target="_blank"><img class="navbar-brand" src="app/views/mediaimg/mail@2x.png"></a>
                        </li>
                    </ul>
                </div>
                <hr>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                    <p class="h6">© Todos los derechos reservados.</p>
                </div>
                <hr>
            </div>
        </div>
    </section>


</footer>
<!-- ./Footer -->

</html>