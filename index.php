<!DOCTYPE html>
<html lang="en">

<head>
    <title>Elements Css DAJ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://raw.githubusercontent.com/AgusTheKing/agustheking.github.io/main/DAJ.png">
    <meta name="description" content="Web HTML and CSS elements, Free for you to use on your website">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <style>
        html{
            height: 300%;
        }
        body {
            background: linear-gradient(108deg, #5E3481 0%, #00B3B1 100%);
            margin: 0;
            padding: 20px 10px;
            text-align: center;
            font: x-small/1.5em "Trebuchet MS", Verdana, Arial, Sans-serif;
            color: #333;
            font-size: small;
            overflow-x: hidden;
        }
        
        .post-title {
            font-size: 17px;
            color: black;
            float: left;
        }
        
         ::-webkit-scrollbar {
            width: 12px;
            border-radius: 30px;
            border: 1px solid rgba(255, 255, 255, 0.80);
            background: rgba(245, 245, 245, 0.09);
            backdrop-filter: blur(26.149999618530273px);
        }
        
         ::-webkit-scrollbar-thumb {
            border-radius: 30px;
            border: 1px solid rgba(255, 255, 255, 0.80);
            background: rgba(94, 54, 130, 0.60);
            backdrop-filter: blur(26.149999618530273px);
        }
        
         ::-webkit-scrollbar-track {
            background: linear-gradient(143deg, #1795A6 43.13%, #01B3B1 100%);
        }
        
        #ad {
            background-color: rgba(44, 39, 39, 0.425);
            height: 160px;
            margin: 10px;
            margin-top: 50px;
            padding: 20px 10px;
            text-align: center;
            font: x-small/1.5em "Trebuchet MS", Verdana, Arial, Sans-serif;
            color: #333;
            font-size: small;
            border-radius: 20px;
        }
        
        .theme-checkbox {
            float: right;
            --toggle-size: 12px;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            width: 4.25em;
            height: 2.125em;
            background: -webkit-gradient(linear, left top, right top, color-stop(50%, #2a2a2a), color-stop(50%, #efefef)) no-repeat;
            background: -o-linear-gradient(left, #2a2a2a 50%, #efefef 50%) no-repeat;
            background: linear-gradient(to right, #2a2a2a 50%, #efefef 50%) no-repeat;
            background-size: 205%;
            background-position: 0;
            -webkit-transition: 0.4s;
            -o-transition: 0.4s;
            transition: 0.4s;
            border-radius: 99em;
            position: relative;
            cursor: pointer;
            font-size: var(--toggle-size);
        }
        
        .theme-checkbox::before {
            content: "";
            width: 1.25em;
            height: 1.25em;
            position: absolute;
            top: 0.438em;
            left: 0.438em;
            background: -webkit-gradient(linear, left top, right top, color-stop(50%, #2a2a2a), color-stop(50%, #efefef)) no-repeat;
            background: -o-linear-gradient(left, #2a2a2a 50%, #efefef 50%) no-repeat;
            background: linear-gradient(to right, #2a2a2a 50%, #efefef 50%) no-repeat;
            background-size: 205%;
            background-position: 100%;
            border-radius: 50%;
            -webkit-transition: 0.4s;
            -o-transition: 0.4s;
            transition: 0.4s;
        }
        
        .theme-checkbox:checked::before {
            left: calc(100% - 2.25em - 0.438em);
            background-position: 0;
        }
        
        .theme-checkbox:checked {
            background-position: 100%;
        }
        /* Page Structure */
        
        #content {
            width: 100%;
            height: 1900px;
            margin: 0 auto;
        }
        
        #main {
            width: 100%;
            margin: 20px;
        }
        
        #main2 {
            float: left;
            width: 100%;
            margin: 20px;
            padding: 10px 0 0;
        }
        
        #main3 {
            float: left;
            padding: 0;
        }
        
        #sidebar {
            width: 240px;
            float: right;
            margin: 15px 0 0;
            font-size: 97%;
            line-height: 1.5em;
        }
        /* Links */
        
        a:link {
            color: rgb(255, 255, 255);
        }
        

        a:hover {
            color: rgb(68, 23, 23);
        }
        
        a img {
            border-width: 0;
        }
        /* Blog Header */
        
        #header {
            width: 99%;
            border-radius: 50px;
            border: 1px solid rgba(255, 255, 255, 0.80);
            background: rgba(245, 245, 245, 0.09);
            backdrop-filter: blur(26.149999618530273px);
            margin-left: 10px;
        }
        
        #header div {}
        
        #blog-title {
            color: #ececec;
            -webkit-text-stroke-color: #ffffff;
            -webkit-text-stroke: 3px #ffffff;
            font-size: 150px;
            font-style: normal;
            font-weight: 400;
            line-height: 150px;
            font: x-small/1.5em "Trebuchet MS", Verdana, Arial, Sans-serif;
            font-size: 140px;
        }
        
        #blog-title a {
            text-decoration: none;
            color: #fff;
        }
        
        #description {
            margin: 0;
            padding: 5px 30px 10px;
            font-size: 94%;
            line-height: 1.5em;
        }
        /* Posts */
        
        .post {
            width: 350px;
            height: 430px;
            float: left;
            margin: 20px;
            border-radius: 30px;
            border: 3px solid rgba(255, 255, 255, 0.80);
            background: rgba(217, 217, 217, 0.90);
            box-shadow: 0px 0px 11.3px 2px rgba(0, 0, 0, 0.25) inset;
            padding: 30px;
            position: relative;
        }
        /* Sidebar Boxes */
        
        .box {
            background: #fff url("https://resources.blogblog.com/blogblog/data/rounders/corners_side_top.gif") no-repeat left top;
            margin: 0 0 15px;
            padding: 10px 0 0;
            color: #666;
        }
        
        .box2 {
            background: url("https://resources.blogblog.com/blogblog/data/rounders/corners_side_bot.gif") no-repeat left bottom;
            padding: 0 13px 8px;
        }
        
        .sidebar-title {
            margin: 0;
            padding: 0 0 .2em;
            border-bottom: 1px dotted #9b9;
            font-size: 115%;
            line-height: 1.5em;
            color: #333;
        }
        
        .box ul {
            margin: .5em 0 1.25em;
            padding: 0 0px;
            list-style: none;
        }
        
        .box ul li {
            background: url("https://resources.blogblog.com/blogblog/data/rounders/icon_arrow_sm.gif") no-repeat 2px .25em;
            margin: 0;
            padding: 0 0 3px 16px;
            margin-bottom: 3px;
            border-bottom: 1px dotted #eee;
            line-height: 1.4em;
        }
        
        .box p {
            margin: 0 0 .6em;
        }
        
        #footer {
            display: none;
            clear: both;
            position: fixed;
            bottom: 0;
            width: 98%;
            margin: 0 auto;
            border-radius: 30px 30px 0px 0px;
            border: 1px solid rgba(255, 255, 255, 0.80);
            background: rgba(245, 245, 245, 0.30);
            backdrop-filter: blur(26.149999618530273px);
            padding: 15px 0 15px;
        }
        
        @media all {
            #footer div {}
            #footer div div {}
        }
        
        @media handheld {
            #footer div {}
            #footer div div {}
        }
        
        #footer hr {
            display: none;
        }
        
        #footer p {
            margin: 0;
        }
        
        #footer a {
            color: #fff;
        }
        /* Feeds */
        
        #blogfeeds {}
        
        #postfeeds {
            padding: 0 15px 0;
        }
        /* Etiquetas */
        
        .hover-container:hover .button9 img {
            transform: translateX(-40px) scale(0.9);
        }
        
        .hover-container:hover .button9::before {
            opacity: 1;
            transform: translateY(30px);
        }
        /* BOTON - Cambios para apariencia predeterminada */
        
        .theme-checkbox {
            --toggle-size: 12px;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            width: 4.25em;
            height: 2.125em;
            background: -webkit-gradient(linear, left top, right top, color-stop(50%, #2a2a2a), color-stop(50%, #efefef)) no-repeat;
            background: -o-linear-gradient(left, #2a2a2a 50%, #efefef 50%) no-repeat;
            background: linear-gradient(to right, #2a2a2a 50%, #efefef 50%) no-repeat;
            background-size: 205%;
            background-position: 0;
            -webkit-transition: 0.4s;
            -o-transition: 0.4s;
            transition: 0.4s;
            border-radius: 99em;
            position: relative;
            cursor: pointer;
            font-size: var(--toggle-size);
        }
        
        .theme-checkbox::before {
            content: "";
            width: 1.25em;
            height: 1.25em;
            position: absolute;
            top: 0.438em;
            left: 0.438em;
            background: -webkit-gradient(linear, left top, right top, color-stop(50%, #2a2a2a), color-stop(50%, #efefef)) no-repeat;
            background: -o-linear-gradient(left, #2a2a2a 50%, #efefef 50%) no-repeat;
            background: linear-gradient(to right, #2a2a2a 50%, #efefef 50%) no-repeat;
            background-size: 205%;
            background-position: 100%;
            border-radius: 50%;
            -webkit-transition: 0.4s;
            -o-transition: 0.4s;
            transition: 0.4s;
        }
        /* BOTON - Cambios al hacer clic */
        
        .theme-checkbox:checked::before {
            left: calc(120% - 2.25em - 0.438em);
            background-position: 0;
        }
        
        .theme-checkbox:checked {
            background-position: 100%;
        }
        /* BOTON - SHOW CODE  */
        
        .btn-showcode {
            --clr-font-main: hsla(0 0% 20% / 100);
            --btn-bg-1: hsla(194 100% 69% / 1);
            --btn-bg-2: hsla(217 100% 56% / 1);
            --btn-bg-color: hsla(360 100% 100% / 1);
            --radii: 0.5em;
            cursor: pointer;
            padding: 0.9em 1.4em;
            min-width: 120px;
            min-height: 44px;
            font-size: var(--size, 1rem);
            font-family: "Segoe UI", system-ui, sans-serif;
            font-weight: 500;
            transition: 0.8s;
            background-size: 280% auto;
            background-image: linear-gradient(325deg, var(--btn-bg-2) 0%, var(--btn-bg-1) 55%, var(--btn-bg-2) 90%);
            border: none;
            border-radius: var(--radii);
            color: var(--btn-bg-color);
            box-shadow: 0px 0px 20px rgba(71, 184, 255, 0.5), 0px 5px 5px -1px rgba(58, 125, 233, 0.25), inset 4px 4px 8px rgba(175, 230, 255, 0.5), inset -4px -4px 8px rgba(19, 95, 216, 0.35);
        }
        
        .btn-showcode:hover {
            background-position: right top;
        }
        
        .btn-showcode:is(:focus,
         :focus-visible,
         :active) {
            outline: none;
            box-shadow: 0 0 0 3px var(--btn-bg-color), 0 0 0 6px var(--btn-bg-2);
        }
        
        @media (prefers-reduced-motion: reduce) {
            .btn-showcode {
                transition: linear;
            }
        }
        /* BBARRA DE BUSQUEDA Y TAGS */
        
        #search-and-tags-container {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            margin: 20px;
        }
        
        #search-box {
            width: 50%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        
        #tags {
            display: flex;
            flex-wrap: wrap;
            margin-left: 50px;
        }
        
        .tag-button {
            margin: 5px;
            padding: 5px 10px;
            border-radius: 5px;
            border: 2px solid rgba(255, 255, 255, 0.80);
            background: rgba(217, 217, 217, 0.90);
            box-shadow: 0px 0px 11.3px 2px rgba(29, 29, 29, 0.25) inset;
            cursor: pointer;
        }
        
        #search-box {
            border-radius: 5px;
            border: 2px solid rgba(255, 255, 255, 0.80);
            background: rgba(217, 217, 217, 0.90);
            box-shadow: 0px 0px 11.3px 2px rgba(29, 29, 29, 0.25) inset;
        }
        /* FOOTER */
        
        .columna11footer {
            float: left;
            width: 50%;
            color: #000000;
        }
        
        .columna22footer {
            float: right;
            width: 50%;
            color: #000000;
        }
        
        .columna1footer a,
        .columna2footer a {
            color: #7a1246;
            /* Cambia este color al que desees */
            text-decoration: none;
            /* Opcional: quita la subrayado predeterminado */
        }
        
        .footer-container {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            /* Tres columnas con igual ancho */
        }
        
        .footer-container {
            display: flex;
            justify-content: space-between;
            /* Distribuye el espacio entre las columnas */
        }
    
        
        .tags-container {
            display: flex;
            flex-wrap: wrap;
            margin-top: 10px;
            position: relative;
            left: 5%;
            align-items: center;
            /* Centra verticalmente el contenido */
        }
        
        .tags-container::before {
            content: "Tags: ";
            margin-right: 4px;
            color: rgba(142, 142, 142, 1);
            font-weight: bold;
        }
        
        .tag {
            margin: 5px;
            padding: 4px 10px;
            border-radius: 5px;
            border: 1px solid rgba(85, 85, 85, 1);
            background: rgba(42, 42, 42, 1);
            color: rgba(142, 142, 142, 1);
        }
        
        .show-code-btn {
            position: relative;
            left: 20%;
            /* Ajusta esta distancia según sea necesario */
            /* Coloca el botón en el centro horizontalmente */
            transform: translateX(-50%);
            padding: 10px 20px;
            border: 1px solid rgba(85, 85, 85, 1);
            border-radius: 30px;
            background-color: rgba(42, 42, 42, 1);
            color: white;
            cursor: pointer;
        }
        
        .show-code-btn:hover {
            background-color: rgb(53, 52, 52);
        }

        nav {
            background-color: #22222200;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
            z-index: 1000;
            
        }
        
        nav img {
            width: 40px;
            height: auto;
        }
        
        nav ul {
            margin: 10px;
            padding: 0;
            list-style-type: none;
            display: flex;
            align-items: center;
       
            /* Alinea verticalmente los elementos */
        }
        
        nav ul li {
            margin-right: 20px;
        }
        
        nav ul li:last-child {
            margin-right: 0;
        }
        
        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
        /* Estilos para el campo de búsqueda */
        
        nav input[type="text"] {
            margin-left: auto;
            margin-right: 2%;
            /* Alinear a la derecha */
            padding: 5px;
            width: 150px;
            /* Ancho del campo de búsqueda */
            border-radius: 5px;
            background: rgba(240, 240, 240, 0.9);
            border-radius: 17px;
            border-style: solid;
            border-color: rgba(216, 216, 216, 0.76);
            border-width: 3px;
            box-shadow: inset 0px 0px 11.3px 4px rgba(0, 0, 0, 0.25);
        }
        /* Estilos para los botones */
        
        nav button {
            margin-left: 20px;
            /* Añadir margen a los botones */
            padding: 8px 16px;
            border-radius: 5px;
            border: none;
            background-color: #333;
            color: #ffffff;
            font-weight: bold;
            cursor: pointer;
        }
        
        nav button:last-child {
            margin-right: 0;
        }
        .gg-arrow-left-o {
            box-sizing: border-box;
            position: relative;
            display: block;
            width: 22px;
            height: 22px;
            border: 2px solid;
            transform: scale(var(--ggs,1));
            border-radius: 22px
        }
        .gg-arrow-left-o::after,
        .gg-arrow-left-o::before {
            content: "";
            display: block;
            box-sizing: border-box;
            position: absolute;
            left: 4px
        }
        .gg-arrow-left-o::after {
            width: 6px;
            height: 6px;
            border-bottom: 2px solid;
            border-left: 2px solid;
            transform: rotate(45deg);
            bottom: 6px
        }
        .gg-arrow-left-o::before {
            width: 10px;
            height: 2px;
            bottom: 8px;
            background: currentColor
        }
    </style>

    <!-- HTML ----- WEB DE AGUSTHEKING -->
</head>

<body>
    <div id="ad">
        Div
    </div>

    <div id="content">
        <nav>
            <!-- Logo de la web -->
            <img src="../DAJ.png" alt="Logo de la web" width="100" height="100">
    
            <!-- Enlaces -->
            <ul>
                <li><a href="/elements/elemento1.html">Home</a></li>
                <li><a href="/">Elementos CSS</a></li>
                <li><a href="/tutorials/menututorials.html">Tutorials</a></li>
                <li><a href="/Aboutme.html">About DAJ</a></li>
                <li><a href="/editorhtml/editor.html">Editor Code</span></a></li>
               
            </ul>
            <span style="margin-left: auto; padding: 5px;">
    
        </nav>    
        <div id="header">
            
            <!-- Your header content goes here -->
            <div style="display: flex; align-items: center; justify-content: space-between; margin-left:20px;">
                <div>
                    <h1 id="blog-title">Elements Css Free</h1>
                </div>

                <div style="flex-shrink: 0; margin-left: 20px; display: flex; align-items: center;">
                    <!-- Add your logo/image here -->
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEim9XUno9EVVr29zcw0wvf9i-cYBSTsTHqe-2wgDemXhXARVQd-OVsU6VuTtDVmMc4vePOnBGp8aa_mKrdgQ4VaJXC2mmrtkRUmvKk-Cg-VgxNfbJEgiCCO3GaDMwBk1-5FwXdyJu1EkObSK6FemFmUZdbDPMyXQSuYKAB5UNIww8pBbdLHVhYto-2C7xDw/s686/DAJ.png"
                        alt="Logo" style="max-width: 300px; max-height: 300px; vertical-align: middle;">
                </div>
            </div>
            <!-- End header content -->
        </div>

        <div id="main">
            <div id="main2">
                <!-- Add search bar and tags container -->
                <div id="search-and-tags-container">
                    <input type="text" id="search-box" placeholder="Search...">
                    <button class="tag-button" onclick="limpiarBusqueda()"><i class="gg-arrow-left-o"></i></button>
                    <div id="tags">
                        <button class="tag-button" data-tag="button">Button</button>
                        <button class="tag-button" data-tag="checkboxes">Checkboxes</button>
                        <button class="tag-button" data-tag="toggle">Toggle Switches</button>
                        <button class="tag-button" data-tag="cards">cards</button>
                        <button class="tag-button" data-tag="loaders">loaders</button>
                        <button class="tag-button" data-tag="inputs">inputs</button>
                        <button class="tag-button" data-tag="form">form</button>
                        <!-- Add more tags as needed -->
                    </div>

                </div>

                <div id="main3">
                <!-- -----------POSTS---------- -->
                <!-- Posts DIV CON POST dentro Botones etc...-->
                <div class="main3" id="elements">
                <?php
                // Incluir el archivo postcss.php para obtener el arreglo de publicaciones
                $publicaciones = include '/elements/estilos/php/postcss.php';

                // Iterar sobre todas las publicaciones
                foreach ($publicaciones as $publicacion) {
                    // Obtener los datos de la publicación actual
                    $titulo = $publicacion['titulo'];
                    $tags = $publicacion['tags'];
                    $estilos = $publicacion['estilos'];
                    $contenido = $publicacion['contenido'];
                    $enlace = $publicacion['enlace'];

                    // Generar el HTML para los tags
                    $tags_html = '';
                    $tags_array = explode(',', $tags);
                    foreach ($tags_array as $tag) {
                        $tags_html .= '<div class="tag">' . ucfirst(trim($tag)) . '</div>';
                    }

                    // Generar el HTML para la publicación actual
                    echo '
                    <div class="post" data-tags="' . $tags . '">
                        <input type="checkbox" class="theme-checkbox">
                        <h3 class="post-title">' . $titulo . '</h3>
                        <style>' . $estilos . '</style>
                        ' . $contenido . '

                        <!-- Código adicional después del contenido -->
                        <a href="' . $enlace . '" target="_blank"><button class="show-code-btn">Show Code { }</button></a>
                        <div class="tags-container">
                            ' . $tags_html . '
                        </div>
                    </div>';
                }
                ?>

                </div>

                    </div>
                                                                                          
                        <!-- Fin de los posts -->
                    </div>
                </div>
            </div>

            <footer>
                <hr>
                <div class="columna11footer">
                    <p>Elementos CSS DAJ tiene licencia CC BY-NC 4.0.© 1 por AgusTheKing</p>
                    <p xmlns:cc="http://creativecommons.org/ns">Esta WEB tiene la licencia <a href="http://creativecommons.org/licenses/by-nc/4.0/?ref=chooser-v1" target="_blank" rel="licencia noopener noreferrer" style="display:inline-block;">CC BY-NC 4.0<img style="height:22px!important;margin-left:3px;vertical-align:textoinferior;" src="https://mirrors.creativecommons.org/presskit/icons/cc.svg?ref=chooser-v1" alt="cc"><img style="height:22px!important;margin-left:3px;vertical-align:text-abajo;" src="https://mirrors.creativecommons.org/presskit/icons/by.svg?ref=chooser-v1" alt="👤"><img style="height:22px!important;margin-left:3px;vertical-align:text-abajo;" src="https://mirrors.creativecommons.org/presskit/icons/nc.svg?ref=chooser-v1" alt="$/"></a></p>
                </div>
                <div class="columna22footer">
                    <a href="/Privacidad%20y%20Cookies.html" id="aboutMeBtn">Terms & Conditions</a>
                    <p id="rights">Todos los derechos reservados ElementsCSSDAJ© 2024</p>
                </div>
            </footer>
            

        </div>
</body>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Obtener todos los checkboxes y los contenedores .post
                var checkboxes = document.querySelectorAll('.theme-checkbox');
                var postContainers = document.querySelectorAll('.post');

                // Agregar un evento de cambio a cada checkbox
                checkboxes.forEach(function(checkbox, index) {
                    checkbox.addEventListener('change', function() {
                        // Verificar si el checkbox está marcado
                        if (checkbox.checked) {
                            // Cambiar el fondo a negro, el color del texto a blanco y el borde a negro para el contenedor correspondiente
                            postContainers[index].style.background = 'rgba(23, 23, 23, 0.90)';
                            postContainers[index].style.color = '#fff';
                            postContainers[index].style.border = '3px solid rgba(45, 45, 45, 0.76)';
                            postContainers[index].style.boxShadow = '0px 0px 11.3px 4px rgba(0, 0, 0, 0.25) inset';

                            // Adjust the color of the post-title directly
                            var postTitle = postContainers[index].querySelector('.post-title');
                            if (postTitle) {
                                postTitle.style.color = '#fff';
                            }
                        } else {
                            // Restaurar el fondo original, el color del texto original y el borde original para el contenedor correspondiente
                            postContainers[index].style.background = 'rgba(217, 217, 217, 0.90)';
                            postContainers[index].style.color = 'white';
                            postContainers[index].style.border = '3px solid rgba(255, 255, 255, 0.80)';
                            postContainers[index].style.boxShadow = '0px 0px 11.3px 2px rgba(0, 0, 0, 0.25) inset';

                            // Adjust the color of the post-title directly
                            var postTitle = postContainers[index].querySelector('.post-title');
                            if (postTitle) {
                                postTitle.style.color = 'black';
                            }
                        }
                    });
                });
            });

            //CODE PARA TAGS
            document.addEventListener('DOMContentLoaded', function() {
                // Obtener todos los checkboxes y los contenedores .post
                var checkboxes = document.querySelectorAll('.theme-checkbox');
                var postContainers = document.querySelectorAll('.post');

                // Agregar un evento de cambio a cada checkbox
                checkboxes.forEach(function(checkbox, index) {
                    checkbox.addEventListener('change', function() {
                        // Verificar si el checkbox está marcado
                        if (checkbox.checked) {
                            // Cambiar el fondo a negro, el color del texto a blanco y el borde a negro para el contenedor correspondiente
                            postContainers[index].style.background = 'rgba(23, 23, 23, 0.90)';
                            postContainers[index].style.color = '#fff';
                            postContainers[index].style.border = '3px solid rgba(45, 45, 45, 0.76)';
                            postContainers[index].style.boxShadow = '0px 0px 11.3px 4px rgba(0, 0, 0, 0.25) inset';

                            // Adjust the color of the post-title directly
                            var postTitle = postContainers[index].querySelector('.post-title');
                            if (postTitle) {
                                postTitle.style.color = '#fff';
                            }
                        } else {
                            // Restaurar el fondo original, el color del texto original y el borde original para el contenedor correspondiente
                            postContainers[index].style.background = 'rgba(217, 217, 217, 0.90)';
                            postContainers[index].style.color = 'white';
                            postContainers[index].style.border = '3px solid rgba(255, 255, 255, 0.80)';
                            postContainers[index].style.boxShadow = '0px 0px 11.3px 2px rgba(0, 0, 0, 0.25) inset';

                            // Adjust the color of the post-title directly
                            var postTitle = postContainers[index].querySelector('.post-title');
                            if (postTitle) {
                                postTitle.style.color = 'black';
                            }
                        }
                    });
                });

                //CODE PARA TAGS
                $(document).ready(function() {
                    var $searchInput = $('#search-box');
                    var $tagButtons = $('.tag-button');
                    var $posts = $('#main3 .post'); // Update the selector to target posts under the "main3" container

                    $searchInput.on('keyup', function() {
                        var searchTerm = $(this).val().toLowerCase();
                        $posts.hide().filter(function() {
                            var postTitle = $(this).text().toLowerCase();
                            return postTitle.includes(searchTerm);
                        }).show();
                    });

                    $tagButtons.on('click', function() {
                        var tag = $(this).data('tag').toLowerCase();
                        $posts.hide().filter(function() {
                            var postTags = $(this).data('tags') || '';
                            return postTags.split(',').map(function(t) {
                                return t.trim();
                            }).includes(tag);
                        }).show();
                    });
                });
            });

                    // BORRADOR
                    function limpiarBusqueda() {
        // Limpiar el contenido del input de búsqueda
        document.getElementById('search-box').value = '';
    }
        </script>

</html>
