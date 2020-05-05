<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> Proyecto DAW | Noel Íñiguez Fernández </title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/lightbox.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css')}}" />


    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('images/ico/apple-touch-icon-57-precomposed.png')}}">

</head>

<body>

    <header id="header">
        <div class="navbar navbar-inverse navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                <a class="navbar-brand" href="{{url('/')}}">
                        <h1 id="logo_text"><img src="images/logo_leon.png" id="logo_img" alt="logo" width="60"> HOLYROOD
                            ENGLISH SCHOOL
                        </h1>
                    </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#methology" class="menu-item">METODOLOGÍA</a></li>
                        <li class="active"><a href="#courses" class="menu-item">CURSOS DE IDIOMAS</a></li>
                        <li class="active"><a href="#travels" class="menu-item">APRENDE VIAJANDO</a></li>
                        <li class="active"><a href="#training" class="menu-item">FORMACIÓN A EMPRESAS</a></li>
                        <li class="active"><a href="#contact" class="menu-item">CONTACTO</a></li>
                </div>
            </div>
        </div>
    </header>

    <!--/header-->

    <section id="home-slider">
        <div class="container">
            <div class="row">
                <div class="main-slider">
                    <div class="slide-text">
                        <h1>Aprende inglés de una vez por todas</h1>
                        <p>Contamos con las metodogías más avanzadas y con los mejores profesores con amplia experiencia
                            internacional. No lo dudes. Hazte estudiante de nuestra increíble comunidad.</p>
                        <a href="{{route('home')}}" class="btn btn-common">ÁREA PRIVADA</a>
                    </div>
                    <img src="images/home/slider/hill.png" class="slider-hill" alt="slider image">
                    <img src="images/home/slider/fondo_londres.png" class="slider-fondo" alt="slider image" width="550"
                        height="270">
                    <img src="images/home/slider/birds1.png" class="slider-birds1" alt="slider image">
                    <img src="images/home/slider/birds2.png" class="slider-birds2" alt="slider image">
                </div>
            </div>
        </div>
        <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
    </section>

    <!--/home-slider-->

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                            <img src="images/medalla.jpg" alt="">
                        </div>
                        <h2>Diplomas oficiales de Cambridge</h2>
                        <p>Centro de examinación oficial de Cambridge y centro de preparación oficial a exámenes de
                            Cambridge.
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                            <img src="images/profesor.jpg" alt="">
                        </div>
                        <h2>Profesorado Nativo</h2>
                        <p>Nuestras clases son impartidas por profesores nativos procedentes de diversos países. Todos
                            con amplía experiencia demostrada en la enseñanza de inglés.</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                            <img src="images/sistema.jpg" alt="">
                        </div>
                        <h2>Sistema Educativo Británico</h2>
                        <p>Sistema educativo de excelencia basado en el aprendizaje a través de juegos y motivación de
                            los alumnos.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--/services-->

    <section id="action" class="responsive">
        <div class="vertical-center" id="methodology">
            <div class="container">
                <div class="row">
                    <div class="action take-tour">
                        <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                            <h1 class="title">METODOLOGÍA INNOVADORA</h1>
                            <p>Deja a tras la forma tradicional de aprender inglés y sumérgete en un nuevo mundo donde
                                la creatividad y la cooperación van de la mano.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="features">
        <div class="container">
            <div class="row">
                <div class="single-features">
                    <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="images/motivacion.jpg" class="img-responsive" alt="gente_motivada" width="400"
                            height="184">
                    </div>
                    <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2>ALUMNOS MOTIVADOS</h2>
                        <P>El fundamento de CBS Language Academy es mostrar a nuestros alumnos que el aprendizaje puede
                            ser también algo divertido. Es esencial que los estudiantes quieran venir a clase y
                            encuentren interés en su proceso cognitivo. Sabemos que si conseguimos sembrar la semilla de
                            la curiosidad en nuestros hijos, habremos conseguido mucho más que si les enseñamos
                            cualquier concepto. Queremos que los estudiantes quieran aprender.</P>
                    </div>
                </div>
                <div class="single-features">
                    <div class="col-sm-6 col-sm-offset-1 align-right wow fadeInLeft" data-wow-duration="500ms"
                        data-wow-delay="300ms">
                        <h2>CAPACIDAD DE COMUNICACIÓN</h2>
                        <P>El objetivo principal en todos nuestros cursos de idiomas es desarrollar la capacidad de los
                            estudiantes para comunicarse. Nuestro método favorece el aspecto comunicativo de la teoría:
                            la gramática puesta al servicio de la práctica. Combinamos un enfoque gramatical sólido con
                            situaciones reales de comunicación para fortalecer el proceso de aprendizaje y alcanzar las
                            metas establecidas.</P>
                    </div>
                    <div class="col-sm-5 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="images/conversacion.jpg" class="img-responsive" alt="personas_conversando" width="400"
                            height="184">
                    </div>
                </div>
                <div class="single-features">
                    <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="images/educacion.jpg" class="img-responsive" alt="profesor_británico" width="380"
                            height="184">
                    </div>
                    <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2>SISTEMA EDUCATIVO BRITÁNICO</h2>
                        <P>El Sistema Británico se apuesta por la creatividad, la interactividad y cómo no, la autonomía
                            y el crecimiento personal de cada uno de los alumnos. Desde pequeños comienzan aprendiendo a
                            través de juegos y actividades. Se fomenta el trabajo en equipo con la intención de buscar
                            distintos puntos de vista para así entablar un debate entre los alumnos, lo que les da la
                            oportunidad de argumentar sus opiniones y expresar sus ideas comparándolas con las de sus
                            compañeros.
                        </P>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--/methodology-->

    <section id="action">
        <div class="vertical-center sun" id="courses">
            <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">CURSOS DE IDIOMAS</h1>
                            <p>No importa el nivel de inglés que tengas. Tenemos el curso perfecto para ti.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="tab-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-header"></h2>
                </div>
                <div class="col-sm-5 col-sm-offset-1 align-left wow fadeInLeft" data-wow-duration="500ms"
                    data-wow-delay="300ms">
                    <img src="images/royal-guard.png" alt="" class="img img-rounded" width="75" height="75">PRE-A1
                    STARTERS (YLE STARTERS)
                    <ul id="tab1" class="nav nav-tabs">
                        <li class="active"><a href="#tab1-item1" data-toggle="tab">Información General</a></li>
                        <li><a href="#tab1-item2" data-toggle="tab">Descripción</a></li>
                        <li><a href="#tab1-item3" data-toggle="tab">Objetivos</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="tab1-item1">
                            <p><strong>Edad:</strong> Alumnos de 7 a 8 años.</p>
                            <p><strong>Clases</strong> 2 horas semanales.</p>
                            <p><strong>Nivel:</strong> Pre A1.</p>
                            <p><strong>Inicio y fin de curso:</strong> 2 de septiembre 2019 / 20 de junio 2020</p>
                            <p><strong>Horarios:</strong> Tardes. Consultar horarios en la secretaría del centro</p>
                            <p><strong>Alumnos por clase:</strong> Máximo 10 alumnos por clase</p>
                            <p><strong>Precio:</strong> 65€</p>
                        </div>
                        <div class="tab-pane fade" id="tab1-item2">
                            <p>Pre A1 Starters es el primero de los tres exámenes diseñados para los más pequeños.Toda
                                esta gama de exámenes, con sus tres versiones, ayudan a los niños a iniciar su camino en
                                el aprendizaje del inglés de forma divertida y son un excelente medio para que adquieran
                                confianza y mejoren su inglés.
                            </p>
                            <p>En las clases, se presta especial atención a la expresión oral y la comprensión auditiva
                                sobre todo, pero a su vez desarrollan la lectura y escritura, así, los alumnos tienen la
                                opción a final del curso de realizar las pruebas oficiales de Cambridge Young Learners
                                Starters, donde pueden adquirir su diploma que certifica que el alumno tiene el nivel
                                Pre A1.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="tab1-item3">
                            <p>El objetivo es conseguir motivar a los niños en el aprendizaje del inglés. No queremos
                                que se convierta en una obligación su asistencia a clase, sino una experiencia
                                enriquecedora. En el nivel Pre A1 buscamos que los alumnos desarrollen el oído y ganen
                                confianza a la hora de hablar en otro idioma.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5 col-sm-offset-1 align-left wow fadeInRight" data-wow-duration="500ms"
                    data-wow-delay="300ms">
                    <img src="images/big-ben.png" alt="" class="img img-rounded" width="75" height="75">A1 MOVERS (YLE
                    MOVERS)
                    <ul id="tab1" class="nav nav-tabs">
                        <li class="active"><a href="#tab2-item1" data-toggle="tab">Información General</a></li>
                        <li><a href="#tab2-item2" data-toggle="tab">Descripción</a></li>
                        <li><a href="#tab2-item3" data-toggle="tab">Objetivos</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="tab2-item1">
                            <p><strong>Edad:</strong> Alumnos de 9 a 10 años.</p>
                            <p><strong>Clases</strong> 2 horas semanales.</p>
                            <p><strong>Nivel:</strong> A1.</p>
                            <p><strong>Inicio y fin de curso:</strong> 2 de septiembre 2019 / 20 de junio 2020</p>
                            <p><strong>Horarios:</strong> Tardes. Consultar horarios en la secretaría del centro</p>
                            <p><strong>Alumnos por clase:</strong> Máximo 10 alumnos por clase</p>
                            <p><strong>Precio:</strong> 65€</p>
                        </div>
                        <div class="tab-pane fade" id="tab2-item2">
                            <p>A1 Movers es el segundo de los tres exámenes diseñados para los más pequeños. Toda esta
                                gama de exámenes, con sus tres versiones, introducen a los niños en el inglés hablado y
                                escrito de uso cotidiano y son un excelente medio para que adquieran confianza y mejoren
                                su inglés.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="tab2-item3">
                            <p>Al igual que en l curso anterior. El objetivo sigue siendo el mismo. No es otro que
                                conseguir motivar a los niños en el aprendizaje del inglés. No queremos que se convierta
                                en una obligación su asistencia a clase, sino una experiencia enriquecedora. En el nivel
                                A1 se busca desarrollar las habilidades más importantes como es la capacidad auditiva y
                                su capacidad de interacción con el resto de los alumnos.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <h2 class="page-header"></h2>
                </div>
                <div class="col-sm-5 col-sm-offset-1 align-left wow fadeInLeft" data-wow-duration="500ms"
                    data-wow-delay="300ms">
                    <img src="images/double-decker.png" alt="" class="img img-rounded" width="75" height="75"> A2 FLYERS
                    (YLE FLYERS)
                    <ul id="tab1" class="nav nav-tabs">
                        <li class="active"><a href="#tab3-item1" data-toggle="tab">Información General</a></li>
                        <li><a href="#tab3-item2" data-toggle="tab">Descripción</a></li>
                        <li><a href="#tab3-item3" data-toggle="tab">Objetivos</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="tab3-item1">
                            <p><strong>Edad:</strong> Alumnos de 11 a 12 años.</p>
                            <p><strong>Clases</strong> 2 horas semanales.</p>
                            <p><strong>Nivel:</strong> A2.</p>
                            <p><strong>Inicio y fin de curso:</strong> 2 de septiembre 2019 / 20 de junio 2020</p>
                            <p><strong>Horarios:</strong> Tardes. Consultar horarios en la secretaría del centro</p>
                            <p><strong>Alumnos por clase:</strong> Máximo 10 alumnos por clase</p>
                            <p><strong>Precio:</strong> 65€</p>
                        </div>
                        <div class="tab-pane fade" id="tab3-item2">
                            <p>A2 Flyers es el tercero de los tres exámenes diseñados para niños. Toda esta gama de
                                exámenes, con sus tres versiones, introducen a los niños en el inglés hablado y escrito
                                de uso cotidiano y son un excelente medio para que adquieran confianza y mejoren su
                                inglés.
                            </p>
                            <p>Las pruebas están redactadas en torno a temas que resulten familiares y se centran en las
                                destrezas que son necesarias para comunicarse en inglés de manera efectiva, es decir,
                                comprensión auditiva (Listening), expresión oral (Speaking), comprensión de lectura
                                (Reading) y expresión escrita (Writing).</p>
                        </div>
                        <div class="tab-pane fade" id="tab3-item3">
                            <p>Comprender el inglés escrito elemental</p>
                            <p>Comunicarse en situaciones que resulten familiares</p>
                            <p>Comprender y usar frases y expresiones básicas</p>
                            <p>Interactuar con personas que hablen inglés despacio y con claridad</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5 col-sm-offset-1 align-left wow fadeInRight" data-wow-duration="500ms"
                    data-wow-delay="300ms">
                    <img src="images/gherkin.png" alt="" class="img img-rounded" width="75" height="75">B2 FIRST (FCE)
                    <ul id="tab1" class="nav nav-tabs">
                        <li class="active"><a href="#tab4-item1" data-toggle="tab">Información General</a></li>
                        <li><a href="#tab4-item2" data-toggle="tab">Descripción</a></li>
                        <li><a href="#tab4-item3" data-toggle="tab">Objetivos</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="tab4-item1">
                            <p><strong>Edad:</strong> Adolescentes y adultos.</p>
                            <p><strong>Clases</strong> 3 horas semanales.</p>
                            <p><strong>Nivel:</strong> B2.</p>
                            <p><strong>Inicio y fin de curso:</strong> 2 de septiembre 2019 / 20 de junio 2020</p>
                            <p><strong>Horarios:</strong> Mañanas y Tardes (lunes y miércoles o martes y jueves)
                                Consultar horarios en la secretaría del centro</p>
                            <p><strong>Alumnos por clase:</strong> Máximo 10 alumnos por clase</p>
                            <p><strong>Precio:</strong> 70€</p>
                        </div>
                        <div class="tab-pane fade" id="tab4-item2">
                            <p>La titulación B2 First for Schools demuestra que el alumno posee las destrezas
                                lingüísticas necesarias para comunicarse en un entorno angloparlante.
                                <p>También es una excelente manera de prepararse para exámenes de nivel superior, como
                                    C1 Advanced.
                                </p>
                                <p>B2 First for Schools está enfocado al mismo nivel del MCER que B2 First , pero el
                                    contenido se dirige a los alumnos en edad escolar.</p>
                        </div>
                        <div class="tab-pane fade" id="tab4-item3">
                            <p>Tener una comunicación clara y efectiva, expresando opiniones y presentando argumentos.
                            </p>
                            <p>Escribir un inglés claro y preciso que permita expresar opiniones y explicar las ventajas
                                y desventajas de diferentes puntos de vista.</p>
                            <p>Estar informado con noticias actuales</p>
                            <p>Escribir cartas, informes, historias y muchos otros tipos de texto en inglés.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <h2 class="page-header"></h2>
            </div>
            <div class="col-sm-5 col-sm-offset-1 align-left wow fadeInLeft" data-wow-duration="500ms"
                data-wow-delay="300ms">
                <img src="images/london-eye.png" alt="" class="img img-rounded" width="75" height="75">C1 ADVANCED (CAE)
                <ul id="tab1" class="nav nav-tabs">
                    <li class="active"><a href="#tab5-item1" data-toggle="tab">Información General</a></li>
                    <li><a href="#tab5-item2" data-toggle="tab">Descripción</a></li>
                    <li><a href="#tab5-item3" data-toggle="tab">Objetivos</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="tab5-item1">
                        <p><strong>Edad:</strong> Adolescentes y adultos</p>
                        <p><strong>Clases</strong> 3 horas semanales.</p>
                        <p><strong>Nivel:</strong> C1.</p>
                        <p><strong>Inicio y fin de curso:</strong> 2 de septiembre 2019 / 20 de junio 2020</p>
                        <p><strong>Horarios:</strong> Mañanas y Tardes (lunes y miércoles o martes y jueves) Consultar
                            horarios en la secretaría del centro</p>
                        <p><strong>Alumnos por clase:</strong> Máximo 10 alumnos por clase</p>
                        <p><strong>Precio:</strong> 70€</p>
                    </div>
                    <div class="tab-pane fade" id="tab5-item2">
                        <p>Más de 8.000 instituciones educativas, empresas y organismos oficiales de todo el mundo
                            aceptan C1 Advanced como prueba de un elevado rendimiento en el aprendizaje del inglés.</p>
                        <p>La preparación para C1 Advanced te ayuda a obtener las destrezas lingüísticas necesarias para
                            desarrollarte al máximo en el estudio, en el trabajo y la residir en países angloparlantes.
                        </p>
                        <p>Dentro de tu camino de aprendizaje, este examen es el paso intermedio entre B2 First y C2
                            Proficiency.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="tab5-item3">
                        <p>Seguir un curso académico de nivel universitario</p>
                        <p>Comunicarte de manera efectiva a nivel administrativo y profesional</p>
                        <p>Participar con soltura en reuniones de trabajo, clases y seminarios académicos</p>
                        <p>Expresarte con un elevado nivel de fluidez</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-5 col-sm-offset-1 align-left wow fadeInRight" data-wow-duration="500ms"
                data-wow-delay="300ms">
                <img src="images/queen.png" alt="" class="img img-rounded" width="75" height="75">C2 PROFICIENCY (CPE)
                <ul id="tab1" class="nav nav-tabs">
                    <li class="active"><a href="#tab6-item1" data-toggle="tab">Información General</a></li>
                    <li><a href="#tab6-item2" data-toggle="tab">Descripción</a></li>
                    <li><a href="#tab6-item3" data-toggle="tab">Objetivos</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="tab6-item1">
                        <p><strong>Edad:</strong> Adolescentes y adultos</p>
                        <p><strong>Clases</strong> 4 horas semanales.</p>
                        <p><strong>Nivel:</strong> C2.</p>
                        <p><strong>Inicio y fin de curso:</strong> 2 de septiembre 2019 / 20 de junio 2020</p>
                        <p><strong>Horarios:</strong> Tardes (lunes y miércoles o martes y jueves) Consultar horarios en
                            secretaría
                        </p>
                        <p><strong>Alumnos por clase:</strong> Máximo 10 alumnos por clase</p>
                        <p><strong>Precio:</strong> 80€</p>
                    </div>
                    <div class="tab-pane fade" id="tab6-item2">
                        <p>La titulación C2 Proficiency demuestra al mundo que dominas el inglés a un nivel excepcional.
                            Prueba que puedes comunicarte con la fluidez y la complejidad de un hablante de inglés
                            altamente capacitado.
                        </p>
                        <p>Preparar el examen y aprobarlo implica que posees el nivel de inglés necesario para estudiar
                            o trabajar en un entorno profesional o académico de muy alto rango, por ejemplo, en
                            programas de posgrado o de doctorado.</p>
                    </div>
                    <div class="tab-pane fade" id="tab6-item3">
                        <p>Estudiar programas internacionales de posgrado y de doctorado.</p>
                        <p>Negociar y persuadir de manera efectiva frente a un nivel directivo en una empresa
                            internacional.
                        </p>
                        <p>Comprender las ideas principales de textos complejos.</p>
                        <p>Hablar sobre asuntos complejos o delicados y abordar con fluidez cuestiones problemáticas.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <h2 class="page-header"></h2>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>

    <!--/courses-->

    <section id="action">
        <div class="vertical-center sun wow fadeInLeft" id="travels">
            <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">APRENDE VIAJANDO</h1>
                            <p>No hay mejor forma de aprender un idioma. Vive la experiencia con nosotros. No busques
                                más, nosotros nos encargamos del alojamiento y el curso de inglés en el lugar que
                                elijas. Tenemos los mejores destinos en el Reino Unido para ti.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="features">
        <div class="container">
            <div class="row">
                <div class="container">
                    <div class="item-grid wow fadeInLeftwow fadeInRight" data-wow-duration="500ms"
                        data-wow-delay="300ms">

                        <div class="item">
                            <div class="item-image">
                                <img src="images/Londres_thumbnail.jpg" alt="Londres" />
                            </div>
                            <div class="item-text">
                                <div class="item-text-wrapper">
                                    <p class="item-text-dek">Londres</p>
                                    <h2 class="item-text-title">Alojamiento y curso (350€/semana)</h2>
                                </div>
                            </div>
                            <a class="item-link" href="https://youtu.be/X8zLJlU_-60">Londres</a>
                        </div>

                        <div class="item">
                            <div class="item-image">
                                <img src="images/edinburgh_thumbnail.jpg" alt="Edimburgo" />
                            </div>
                            <div class="item-text">
                                <div class="item-text-wrapper">
                                    <p class="item-text-dek">Edimburgo</p>
                                    <h2 class="item-text-title">Alojamiento y curso (320€/semana)</h2>
                                </div>
                            </div>
                            <a class="item-link" href="https://youtu.be/SRNyfBRhq0A">Edimburgo</a>
                        </div>

                        <div class="item">
                            <div class="item-image">
                                <img src="images/Dublin_thumbnail.jpg" alt="Dublin" />
                            </div>
                            <div class="item-text">
                                <div class="item-text-wrapper">
                                    <p class="item-text-dek">Dublin</p>
                                    <h2 class="item-text-title">Alojamiento y curso (300€/semana)</h2>
                                </div>
                            </div>
                            <a class="item-link" href="https://youtu.be/r3btlOJhJmc">Dublin</a>
                        </div>

                        <div class="item">
                            <div class="item-image">
                                <img src="images/Manchester_thumbnail.jpg" alt="Manchester" />
                            </div>
                            <div class="item-text">
                                <div class="item-text-wrapper">
                                    <p class="item-text-dek">Manchester</p>
                                    <h2 class="item-text-title">Alojamiento y curso (300€/semana)</h2>
                                </div>
                            </div>
                            <a class="item-link" href="https://youtu.be/uri8aXslIj8">Manchester</a>
                        </div>

                        <div class="item">
                            <div class="item-image">
                                <img src="images/Brighton_thumbnail.jpg" alt="" />
                            </div>
                            <div class="item-text">
                                <div class="item-text-wrapper">
                                    <p class="item-text-dek">Brighton</p>
                                    <h2 class="item-text-title">Alojamiento y curso (300€/semana)</h2>
                                </div>
                            </div>
                            <a class="item-link" href="https://youtu.be/RafrNUe9uVA">Brighton</a>
                        </div>

                        <div class="item">
                            <div class="item-image">
                                <img src="images/Liverpool_thumbnail.jpg" alt="" />
                            </div>
                            <div class="item-text">
                                <div class="item-text-wrapper">
                                    <p class="item-text-dek">Liverpool</p>
                                    <h2 class="item-text-title">Alojamiento y curso (300€/semana)</h2>
                                </div>
                            </div>
                            <a class="item-link" href="https://youtu.be/xUrrGk7OiEM">Liverpool</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    </div>

    <!--/travels-->

    <section id="action">
        <div class="vertical-center sun" id="cursos">
            <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">FORMACIÓN A EMPRESAS</h1>
                            <p> Somos líderes en la enseñanza de ingles a nivel empresarial. Ofrecemos soluciones
                                integrales para cualquier necesidad de formación en las
                                organizaciones (one to one, clases presenciales con grupos reducidos, formación blended
                                ...)
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="training">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="clients-logo wow fadeIn" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="images/ArcelorMittal-Logo.jpg" class="img-responsive" alt=""
                                    width="130" height="50"></a>
                        </div>
                        <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="images/dxc_technology_logo.jpg" class="img-responsive" alt=""
                                    width="130" height="50"></a>
                        </div>
                        <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="images/software-ag.jpg" class="img-responsive" alt=""></a>
                        </div>
                        <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="images/metalux.jpg" class="img-responsive" alt=""></a>
                        </div>
                        <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="images/imasa_logo.jpg" class="img-responsive" alt=""></a>
                        </div>
                        <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="images/dupont_logo.jpg" class="img-responsive" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="features">
        <div class="container">
            <div class="row">
                <div class="single-features">
                    <div class="col-sm-6 col-sm-offset-1 align-right wow fadeInLeft" data-wow-duration="500ms"
                        data-wow-delay="300ms">
                        <h2>AMPLIA EXPERIENCIA</h2>
                        <p>Todos nuestros clientes nos avalan. Desde el 2007, en Holyrood English School trabajamos
                            conjuntamente con algunas de las empresas más importantes de la georgrafía asturiana
                            ofreciendo la mejor solución
                            acorde a sus necesidades. We always do our best!
                        </p>
                    </div>
                    <div class="col-sm-5 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="images/clientes_satisfechos.jpg" class="img-responsive" alt="personas_conversando"
                            width="400" height="184">
                    </div>
                </div>
                <div class="single-features">
                    <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="images/test_cambridge.jpg" class="img-responsive" alt="gente_motivada" width="400"
                            height="184">
                    </div>
                    <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2>PREPARACIÓN DE EXÁMENES OFICIALES</h2>
                        <p>Desde Holyrood English School ofrecemos la posibilidad de preparar a sus trabajadores para la
                            realización de los exámenes oficiales de Cambridge. Nos adaptamos a sus necesidades, los
                            cursos pueden ser anuales (3 horas a la semana), semi intensivos (6 horas semanales) o
                            intensivos (9 horas semanales). Los alumnos pueden prepararse para los niveles de Cambridge
                            de A2, B1, B2, C1 y C2, o bien para los cursos específicos de Business Cambridge, según las
                            necesidades requeridas y el nivel del alumno. Precios desde 70€/alumno. </p>
                    </div>
                </div>
                <div class="single-features">
                    <div class="col-sm-6 col-sm-offset-1 align-right wow fadeInLeft" data-wow-duration="500ms"
                        data-wow-delay="300ms">
                        <h2>ONE TO ONE BUSINESS</h2>
                        <p>Estas clases de adaptan a las necesidades del alumno para cubrir objetivos específicos,
                            progresar con rápidez o amoldarse a un horario laboral poco flexible. Nuestros cursos parten
                            del nivel del alumno, teniendo en cuenta sus inquietudes para satisfacer sus necesidades. En
                            nuestras clases ONE to ONE tu nivel de inglés alcanzará cotas nunca antes vistas, mejorarás
                            en todas las destrezas necesarias en inglés para comunicarte eficazmente. Precio desde 110€.
                        </p>
                    </div>
                    <div class="col-sm-5 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="images/uno_a_uno.jpg" class="img-responsive" alt="personas_conversando" width="400"
                            height="184">
                    </div>
                </div>
                <div class="single-features">
                    <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="images/cursos_especificos.jpg" class="img-responsive" alt="profesor_británico"
                            width="380" height="184">
                    </div>
                    <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2>CURSOS ESPECÍFICOS EN LA EMPRESA</h2>
                        <p> Si necesitas una mayor especialización en el uso del inglés a nivel empresarial, nada mejor
                            que nos comentes lo que necesitas. Los cursos se pueden realizar en las instalaciones de la
                            misma empresa o en las nuestras. Se pueden contratar cursos de 10 horas, 20 horas y de 40
                            horas según las necesidades de la empresa, en grupos reducidos. Ofrecemos la posibilidad de
                            realizar cursos de las siguientes modalidades: Contabilidad, administración, comunicación,
                            reuniones y negociaciones, presentaciones, correspondencia comercial y traducción,
                            programador, medicina y representante de ventas.
                            Los trabajadores podrán hacer uso del campus virtual Edmodo para comunicarse con los
                            profesores y seguir eficazmente las clases. Precios desde 85€/alumno.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--/training-->

    <section id="action">
        <div class="vertical-center sun" id="contact">
            <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">CONTACTO</h1>
                            <p> No dudes en ponerte en contacto con nosotros. Te resolveremos cualquier duda. Pero antes
                                de nada, echa un vistazo en nuestra seccion de Preguntas Más Frequentes (FAQ) por si ya
                                hubiera sido resuelta antes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-5 col-sm-offset-1 align-left wow fadeInLeft" data-wow-duration="500ms"
                        data-wow-delay="300ms">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-modi" type="button" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="false"
                                            aria-controls="collapseOne">
                                            ¿Cómo me inscribo a los exámenes de Cambridge?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        No te preocupes por nada. Cuando estés preparado nosotros nos encargaremos de
                                        realizar la inscripción por ti.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-modi" type="button"
                                            data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            ¿Cuántos alumnos hay por clase?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        El máximo de alumnos por clase son diez. Creemos que es importante que el número
                                        de alumnos se mantenga bajo para favorecer la interaccion con el profesor.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-modi" type="button"
                                            data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            ¿Se puede acudir a una clase de prueba?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        Por supuesto que si. Es muy recomendable, porque de esta forma podrás ver de
                                        primera mano el funcionamiento de la academia, y podremos comprobar si tu nivel
                                        de inglés corresponde con el curso elegido.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-modi" type="button"
                                            data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                                            aria-controls="collapseFour">
                                            ¿Cuáles son los horarios de la academia?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        En Holyrood English School encontrarás siempre el horario que mejor te convenga.
                                        Dependiendo del curso tendrás disponible diversos horarios de mañana y de tarde.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFive">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-modi" type="button"
                                            data-toggle="collapse" data-target="#collapseFive" aria-expanded="false"
                                            aria-controls="collapseFive">
                                            ¿Cómo se realiza el seguimiento del alumno?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        Todas las incidencias del curso se notificarán a través de la intranet (faltas
                                        de asistencia, comportamiento etc.). Todos los profesores realizan una reunión
                                        semanal con la dirección del centro donde se tratan dichos temas. Así mismo,
                                        cabe la posibilidad de consultarlo en el área de alumnos de nuestra página web o
                                        bien solicitando una reunión con el profesor.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-offset-1 align-left wow fadeInLeft" data-wow-duration="500ms"
                        data-wow-delay="300ms">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingSix">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-modi" type="button" data-toggle="collapse"
                                            data-target="#collapseSix" aria-expanded="false"
                                            aria-controls="collapseSix">
                                            ¿Cómo se realiza el seguimiento de los alumnos?
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        En Holyrood English School realizamos controles trimestrales de todas las
                                        habilidades básicas del idioma (listening, speaking, grammar, reading, writing)
                                        para ver como evolucionan los alumnos y potenciar sus carencias.
                                    </div>
                                </div>
                            </div>
                            <div class="card">

                                <div class="card-header" id="headingSeven">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-modi" type="button"
                                            data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false"
                                            aria-controls="collapseSeven">
                                            ¿Son nativos los profesores?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        Todos nuestros profesores son nativos y/o bilingües, altamente cualificados y
                                        preparados oficialmente para la enseñanza de idiomas.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingEight">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-modi" type="button"
                                            data-toggle="collapse" data-target="#collapseEight" aria-expanded="false"
                                            aria-controls="collapseEight">
                                            ¿Cómo identificamos el nivel de los alumnnos?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseEight" class="collapse" aria-labelledby="headingEight"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        Todos los alumnos pasan al inicio un examen para conocer con precisión su nivel.
                                        Además, nuestros profesores gracias a sus años de experiencia son capaces de
                                        detectar las capacidades de los alumnos de forma precisa.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingNine">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-modi" type="button"
                                            data-toggle="collapse" data-target="#collapseNine" aria-expanded="false"
                                            aria-controls="collapseNine">
                                            ¿Puedo cambiar de nivel durante el curso?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseNine" class="collapse" aria-labelledby="headingNine"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        Por supuesto que si. Podrás acordar con tu profesor el nivel que más te
                                        conviene.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTen">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-modi" type="button"
                                            data-toggle="collapse" data-target="#collapseTen" aria-expanded="false"
                                            aria-controls="collapseTen">
                                            ¿Puedo cambiar de horario durante el curso?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTen" class="collapse" aria-labelledby="headingTen"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        Nuestro objetivo es que puedas compatibilizar tus clases de inglés con el resto
                                        de tus actividades diarias. Te ofreceremos la mejor alternativa posible para
                                        satisfacer tus necesidades.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!--Frequently Asked Questions-->

    <section id="contact-form-map">
        <div class="container">
            <div class="row wow fadeInLeft">
                <div class="col-md-7 col-sm-12">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2891.302763942212!2d-5.9322324843523555!3d43.55857397912459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2ses!4v1571988611769!5m2!1ses!2ses"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                        class="map"></iframe>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="contact-form bottom">
                        <h2>Envíanos un mensaje</h2>                        
                        <form method="POST" action="{{ route('external__emails.store') }}" accept-charset="UTF-8" id="create_external__email_form" name="create_external__email_form">
                            {{ csrf_field() }}
                            
                            @include ('external__emails.form', [
                                        'externalEmail' => null,
                                      ])
                        </form>
                        @if(Session::has('success_message'))
                        <div class="alert alert-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            {!! session('success_message') !!}
                
                            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Contact-->

    <footer id="footer">
        <div class="container">
            <div class="row wow fadeInRight">
                <div class="col-md-12">
                    <h2 class="page-header"></h2>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="testimonial bottom">
                        <h2>Nuestros Alumnos</h2>
                        <div class="media">
                            <div class="pull-left">
                                <img src="images/profile2.jpg" alt="Alumno Enrique Fernández" width="81" height="81">
                            </div>
                            <div class="media-body">
                                <blockquote>Sus clases son las mejores. Su metodología no tiene nada que ver con la
                                    forma tradicional de aprender inglés.
                                </blockquote>
                                <h3><i>Enrique Fernández</i></h3>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <img src="images/profile1.jpg" alt="Alumna Carmen Martínez" width="81" height="81">
                            </div>
                            <div class="media-body">
                                <blockquote>Pasé de un nivel B2 a C2 en sólo un año. No me lo creo. He encontrado el
                                    trabajo de mis sueños. Muchas gracias.
                                </blockquote>
                                <h3><i>Carmen Martínez</i></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="contact-info bottom">
                        <h2>Contacto</h2>
                        <br />
                        <p>
                            Email: <a href="mailto:holyroodenglish@gmail.com">holyrood_english@gmail.com</a>
                        </p>
                        <p>
                            Teléfono: 985528988
                        </p>
                        <p>
                            Síguenos en nuestras redes sociales
                            <ul class="nav nav-pills">
                                <li><a href="https://es-es.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://es.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </p>
                        <br />
                        <h2>Direccion</h2>
                        <p>Calle del Prado s/n, Avilés (Asturias)</p>
                        <p>CP 33401 (España)</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="contact-info bottom">
                        <h2>Quienes somos</h2>
                        <br />
                        <p>
                            Una academia de idiomas nacida en Asturias. Llevamos más de 20 años comprometidos con la
                            enseñanza del inglés y miles de alumnos nos avalan.</a>
                        </p>
                        <br />
                        <br />
                        <br />
                        <br />
                        <h2>Acreditaciones</h2>
                        <p>
                            <a href="https://www.cambridgeenglish.org"><img src="images/cambridgelearningpartner.png"
                                    alt="Socio Cambridge University" height="50" width="105" class="logo_filtro"></a>
                            <a href="https://www.cambridgeenglish.org/es/exams-and-tests/qualifications/"><img
                                    src="images/cambridgepreparationcentre.png"
                                    alt="Centro Preparación Cambridge University" height="50" width="105"
                                    class="logo_filtro"></a>
                            <a href="https://fecei.org"><img src="images/Logo-FECEI-Horizontal.png"
                                    alt="Federación Española de Centros de Enseñanza de Idiomas" height="50" width="105"
                                    class="logo_filtro"></a>
                        </p>

                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="copyright-text text-center">
                        <p>Holyrood English School. Proyecto de Desarrollo Web (CIFP Avilés).</p>
                        <p>Designed by Noel Íñiguez Fernández</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--/footer-->

    <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
    <script>
        window.cookieconsent.initialise({
            "palette": {
                "popup": {
                    "background": "#acdce4"
                },
                "button": {
                    "background": "#00aeef",
                    "text": "#ffffff"
                }
            },
            "theme": "classic",
            "position": "bottom-right",
            "content": {
                "message": "Utilizamos cookies propias y de terceros para mejorar nuestros servicios y mostrarle publicidad relacionada con sus preferencias mediante el análisis de sus hábitos de navegación. Si continua navegando, consideramos que acepta su uso.",
                "dismiss": "OK!",
                "link": ""
            }
        });
    </script>

    <!--Cookie Consent-->

    <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/lightbox.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/wow.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>

</body>
</html>
