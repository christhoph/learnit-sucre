<!DOCTYPE html>
<html lang="es">

  <head>
    <!-- Required meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no, user-scalable=no">

    <title><?php echo $title . 'Instituto Superior Tecnológico Sucre'; ?></title>

    <link rel="icon" href="../img/favicon.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../vendors/linericon/style.css">
    <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="../vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="../vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="../vendors/animate-css/animate.css">
    <link rel="stylesheet" href="../vendors/popup/magnific-popup.css">

    <!-- main css -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/estilosedu.css">
    <link rel="stylesheet" href="../css/responsive.css">
  </head>

  <body style="font-size: 16px">
    <!--================Header Menu Area =================-->

    <header class="header_area">
      <div class="top_menu row m0">
        <div class="container">
          <div class="float-left">
            <ul class="list header_social">
              <li>
                <a href="https://www.facebook.com/SUCREInstitutooficial/" target="_blank">
                  <i class="fab fa-facebook"></i>
                </a>
              </li>
              <li>
                <a href="https://twitter.com/SUCREInstituto?lang=es" target="_blank">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li>
                <a href="https://www.flickr.com/photos/155422704@N07/albums" target="_blank">
                  <i class="fab fa-flickr"></i>
                </a>
              </li>
              <li>
                <a href="https://www.instagram.com/sucreinstituto/" target="_blank">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li>
                <a href="https://www.youtube.com/channel/UCqFgzfJwSuh2Z4S1RCUZQGA" target="_blank">
                  <i class="fab fa-youtube"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="float-right">
            <a class="dn_btn" href="http://www.tecnologicosucre.edu.ec/academico/itssu/index.php" target="_blank">
              SAGA DOCENTES
            </a>
            <a class="dn_btn" href="http://tecnologicosucre.edu.ec/academico/itssu/loginalumnado.php" target="_blank">
              SAGA ESTUDIANTES
            </a>
            <a class="dn_btn" href="../sucre-admision.php">ADMISIONES</a>
          </div>
        </div>
      </div>
      <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="../index.php"><img src="../img/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset colla" id="navbarSupportedContent">
              <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item <?php if ($tab_active == 1): echo "active"; endif; ?>">
                  <a class="nav-link" href="../index.php">Inicio</a></li>
                <li class="nav-item submenu dropdown <?php if ($tab_active == 2): echo "active"; endif; ?>">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">Sucre</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="../Organizacion.php">Organización</a>
                    </li>
                    <li class="nav-item new-menu">
                      <a class="nav-link" href="#">Documentos</a>
                      <div class="new-submenu">
                        <div class="new-nav-item new-menu-2">
                          <a class="new-nav-link">Reglamentos</a>
                          <div class="new-submenu-2">
                            <div class="new-nav-item-2">
                              <a href="https://drive.google.com/file/d/1AoTAtQq5FnYbSnnq4EW4cAavL4XzjT6p/view?usp=sharing"
                                target="_blank" class="new-nav-link-2">Disciplinario del ISTSucre
                            </div>
                            <div class="new-nav-item-2">
                              <a href="https://drive.google.com/file/d/1eVSIEg9W1Jw8dJIMMP0NUkEay34TTroE/view?usp=sharing"
                                target="_blank" class="new-nav-link-2">Consejo Estudiantil del ISTSucre
                            </div>
                            <div class="new-nav-item-2">
                              <a href="https://drive.google.com/file/d/1SZespLX1-uh1p75uAjxoy_Wo1wPkZajG/view?usp=sharing"
                                target="_blank" class="new-nav-link-2">Funcionamiento del Órgano Colegiado Superior del
                                ISTSucre
                            </div>
                            <div class="new-nav-item-2">
                              <a href="https://drive.google.com/file/d/1PvJmi1v3C-f1YlH2C7Ev16htBZRI5fUq/view?usp=sharing"
                                target="_blank" class="new-nav-link-2">Código de Ética ISTSucre
                            </div>
                            <div class="new-nav-item-2">
                              <a href="https://drive.google.com/file/d/13evJr4zxxaFYgzvSrWKQBm1Vu8zjxqTo/view?usp=sharing"
                                target="_blank" class="new-nav-link-2">Admisión, Matriculación, Reconocimiento u
                                Homologación.
                            </div>
                            <div class="new-nav-item-2">
                              <a href="https://drive.google.com/file/d/1ERMUU2qF9ucbMA4EXf_HOLkr8wu0YDYB/view?usp=sharing"
                                target="_blank" class="new-nav-link-2">Investigación, Desarrollo Tecnológico e
                                Innovación del ISTSucre.
                            </div>
                            <div class="new-nav-item-2">
                              <a href="https://drive.google.com/file/d/1yJFYKeRJs8l1agUbGAjO4A4ojami5lEb/view?usp=sharing"
                                target="_blank" class="new-nav-link-2"> Unidad de Integración Curricular del ISTSucre.
                            </div>
                            <div class="new-nav-item-2">
                              <a href="https://drive.google.com/file/d/17rP5syrVBLoGHBbNnNyJZ5HUM0HdXhbx/view?usp=sharing"
                                target="_blank" class="new-nav-link-2"> Vinculación con la Sociedad del ISTSucre.
                            </div>
                            <div class="new-nav-item-2">
                              <a href="https://drive.google.com/file/d/1W9SzcQWwsj3XX4G1jQbemHzxBINih8_j/view?usp=sharing"
                                target="_blank" class="new-nav-link-2"> Centro de Idiomas del ISTSucre.
                            </div>
                            <div class="new-nav-item-2">
                              <a href="https://drive.google.com/file/d/1_r2su1KXeFZWbMnHWd5r0_mgGatwKcw7/view?usp=sharing"
                                target="_blank" class="new-nav-link-2">Elecciones del ISTSucre
                            </div>
                          </div>
                        </div>
                        <div class="new-nav-item">
                          <a href="https://drive.google.com/file/d/1Qf8eLEwa5n1hHSeLAD8G7n1v5p_DXduP/view"
                            target="_blank" class="new-nav-link">Manual de imagen</a>
                        </div>
                        <div class="new-nav-item">
                          <a href="https://drive.google.com/file/d/1ZYuzTYM9nUuhxCAnCAFKo1xOaSWYSmFN/view"
                            target="_blank" class="new-nav-link">PEDI 2015 - 2020</a>
                        </div>
                        <div class="new-nav-item">
                          <a href="https://drive.google.com/file/d/1GeH6zakHIAT3kqudsp1YFjjDeOVn-4CZ/view"
                            target="_blank" class="new-nav-link">Dossier de presentación</a>
                        </div>
                      </div>
                    </li>
                    <li class="nav-item new-menu">
                      <a class="nav-link" href="#">Planta Docente</a>
                      <div class="new-submenu">
                        <div class="new-nav-item new-menu-2">
                          <a href="#" class="new-nav-link">Tradicionales</a>
                          <div class="new-submenu-2">
                            <div class="new-nav-item-2">
                              <a href="../DContabilidad.php" class="new-nav-link-2">Contabilidad<a>
                            </div>
                            <div class="new-nav-item-2">
                              <a href="../DDesarrollo.php" class="new-nav-link-2">Desarrollo de Software<a>
                            </div>
                            <div class="new-nav-item-2">
                              <a href="../DElectricidad.php" class="new-nav-link-2">Electricidad<a>
                            </div>
                            <div class="new-nav-item-2">
                              <a href="../DElectroMecanica.php" class="new-nav-link-2">Electromecánica</a>
                            </div>
                            <div class="new-nav-item-2">
                              <a href="../DElectronica.php" class="new-nav-link-2">Electrónica</a>
                            </div>
                            <div class="new-nav-item-2">
                              <a href="../DGestionAmbiental.php" class="new-nav-link-2">Gestión Ambiental</a>
                            </div>
                            <div class="new-nav-item-2">
                              <a href="../DMarketing.php" class="new-nav-link-2">Marketing</a>
                            </div>
                            <div class="new-nav-item-2">
                              <a href="../DProd-y-RealAudiovisual.php" class="new-nav-link-2">
                                Producción y Realización Audiovisual
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="new-nav-item new-menu-2">
                          <a href="#" class="new-nav-link">Duales</a>
                          <div class="new-submenu-2">
                            <div class="new-nav-item-2">
                              <a href="../DDesarrolloInfantil.php" class="new-nav-link-2">
                                Desarrollo Infantil Integral
                              </a>
                            </div>
                            <div class="new-nav-item-2">
                              <a href="../DProduccion-Textil.php" class="new-nav-link-2">Producción Textil</a>
                            </div>
                          </div>
                        </div>
                        <div class="new-nav-item new-menu-2">
                          <a href="../DCentroIdiomas.php" class="new-nav-link">Centro de Idiomas</a>
                        </div>
                        <div class="new-nav-item new-menu-2">
                          <a href="https://forms.gle/SyLAYQu1dqXX7n5m9" class="new-nav-link" target="_blank">
                            Registro Docentes
                          </a>
                        </div>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="http://186.4.188.30:8080/share/page/site/sucre/dashboard"
                        target="_blank">Gestión Documental</a>
                    </li>
                    <!-- Calendario Académico 2019-II -->
                    <li class="nav-item">
                      <a class="nav-link"
                        href="https://drive.google.com/file/d/1W6jh5aGzlOLxYZysqS0glXm4XHE0rQCy/view?usp=sharing"
                        target="_blank">Calendario Académico 2019-II</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item submenu dropdown <?php if ($tab_active == 3): echo "active"; endif; ?>">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">Carreras</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item new-menu">
                      <a class="nav-link" href="#">Tradicionales</a>
                      <div class="new-submenu">
                        <div class="new-nav-item new-menu-2">
                          <a href="../contabilidad-superior.php" class="new-nav-link">Contabilidad Superior</a>
                        </div>
                        <div class="new-nav-item new-menu-2">
                          <a href="../desarrollo-software.php" class="new-nav-link">Desarrollo de Software</a>
                        </div>
                        <div class="new-nav-item new-menu-2">
                          <a href="../electricidad.php" class="new-nav-link">Electricidad</a>
                        </div>
                        <div class="new-nav-item new-menu-2">
                          <a href="../electromecanica-industrial.php" class="new-nav-link">Electromecánica</a>
                        </div>
                        <div class="new-nav-item new-menu-2">
                          <a href="../electronica.php" class="new-nav-link">Electrónica</a>
                        </div>
                        <div class="new-nav-item new-menu-2">
                          <a href="../gestion-ambiental.php" class="new-nav-link">Gestión Ambiental</a>
                        </div>
                        <div class="new-nav-item new-menu-2">
                          <a href="../marketing.php" class="new-nav-link">Marketing</a>
                        </div>
                        <div class="new-nav-item new-menu-2">
                          <a href="../produccion-realizacion-audiovisual.php" class="new-nav-link">Producción y
                            Realización Audiovisual</a>
                        </div>
                      </div>
                    </li>
                    <li class="nav-item new-menu">
                      <a class="nav-link" href="#">Duales</a>
                      <div class="new-submenu">
                        <div class="new-nav-item new-menu-2">
                          <a href="../desarrollo-infantil-integral.php" class="new-nav-link">Desarrollo Infantil
                            Integral</a>
                        </div>
                        <div class="new-nav-item new-menu-2">
                          <a href="../produccion-textil.php" class="new-nav-link">Producción textil</a>
                        </div>
                      </div>
                    </li>
                    <!--Centro de idioma-->
                    <li class="nav-item new-menu">
                      <a class="nav-link" href="#">CENTRO DE IDIOMAS</a>
                    <li>
                      <!--  fin centro de Idiomas --->
                  </ul>
                </li>
                <li class="nav-item submenu dropdown <?php if ($tab_active == 4): echo "active"; endif; ?>">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">Servicios Estudiantiles</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="../Descargas.php">Documentación Estudiantil</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="../unidaddebienestarestudiantil.php">Unidad De Bienestar Estudiantil</a>
                    </li>
                    <li class="nav-item new-menu">
                      <a class="nav-link" href="#">Bolsa De Empleo</a>
                      <div class="new-submenu">
                        <div class="new-nav-item new-menu-2">
                          <a href="../Bolsa de Empleos.php" class="new-nav-link">Bolsa De Empleo</a>
                        </div>
                        <div class="new-nav-item new-menu-2">
                          <a href="https://drive.google.com/drive/u/0/folders/1nNIrulZSSyzgM40y1PMjBtmyZV17Q6J-?ogsrc=32"
                            target="_blank" class="new-nav-link">Perfiles Profesionales</a>
                        </div>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link"
                        href="https://drive.google.com/drive/folders/1sIoL4OkSfS8eMndMioFyhbEsRU8o3sVZ"
                        target="_blank">Repositorio digital</a>
                    </li>
                    <li class="nav-item new-menu">
                      <a class="nav-link" href="#">Saga</a>
                      <div class="new-submenu">
                        <div class="new-nav-item new-menu-2">
                          <a href="http://www.tecnologicosucre.edu.ec/academico/itssu/prematricula.php" target="_blank"
                            class="new-nav-link">Pre-Matrícula</a>
                        </div>
                        <div class="new-nav-item new-menu-2">
                          <a href="http://www.tecnologicosucre.edu.ec/academico/itssu/index.php" target="_blank"
                            class="new-nav-link">Saga Docentes</a>
                        </div>
                        <div class="new-nav-item new-menu-2">
                          <a href="http://tecnologicosucre.edu.ec/academico/itssu/loginalumnado.php" target="_blank"
                            class="new-nav-link">Saga Estudiantes</a>
                        </div>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="http://186.4.188.5:9090/EvaluacionWeb/faces/index.xhtml"
                        target="_blank">Evaluación docente</a>
                    </li>
                    <!--SeguiMIENTO A GRADUADOS-->
                    <li class="nav-item">
                      <a class="nav-link" href="#">SEGUIMIENTO A GRADUADOS</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item submenu dropdown <?php if ($tab_active == 5): echo "active"; endif; ?>">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">Investigación</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a class="nav-link"
                        href="http://www.tecnologicosucre.edu.ec/page/investigacion/ReglamentodeInvestigacionDesarrolloTecnologicoeInnovaciondelInstitutoSuperiorTecnologicoSucre.pdf">Reglamento
                        de investigación</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link"
                        href="http://www.tecnologicosucre.edu.ec/page/investigacion/L%C3%ADneas%20de%20Investigaci%C3%B3n%20ISTS.pdf">Líneas
                        de investigación</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link"
                        href="https://drive.google.com/drive/u/0/folders/1hN9r3M9-vuV6TieX6adZgfjWIJQKaxBC">Repositorio</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="https://sucre-review-22a75.firebaseapp.com/Inicio">Revista Sucre
                        Review</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link"
                        href="https://drive.google.com/drive/folders/1oFTqHfm9tgOGR0fMFIulMCDulDFjKKdA?usp=sharing">Proyectos</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item submenu dropdown <?php if ($tab_active == 6): echo "active"; endif; ?>">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">Educación Continua</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="../educacion_continua.php">Cursos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">CertificaciÓN por Competencias</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item new-menu <?php if ($tab_active == 7): echo "active"; endif; ?>">
                  <a class="nav-link" href="http://186.4.188.30/" target="_blank">Aula Virtual</a>
                </li>
                <li class="nav-item new-menu <?php if ($tab_active == 8): echo "active"; endif; ?>">
                  <a class="nav-link" href="../contact.php">Ubícanos</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>

    <?php include '../accessibility/accessibility_tab.php'; ?>