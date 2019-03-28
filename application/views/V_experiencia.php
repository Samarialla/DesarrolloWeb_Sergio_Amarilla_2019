<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<assets/css/bootstrap-theme.min.css">
        <script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="assets/js/bootstrap.min.js">
        <title>Welcome to CodeIgniter</title>

        <style type="text/css">

            ::selection { background-color: #E13300; color: white; }
            ::-moz-selection { background-color: #E13300; color: white; }

            body {
                background-color: #fff;
                margin: 40px;
                font: 13px/20px normal Helvetica, Arial, sans-serif;
                color: #4F5155;
            }

            a {
                color: #003399;
                background-color: transparent;
                font-weight: normal;
            }



            code {
                font-family: Consolas, Monaco, Courier New, Courier, monospace;
                font-size: 12px;
                background-color: #f9f9f9;
                border: 1px solid #D0D0D0;
                color: #002166;
                display: block;
                margin: 14px 0 14px 0;
                padding: 12px 10px 12px 10px;
            }

            #body {
                margin: 0 15px 0 15px;
            }

            p.footer {
                text-align: right;
                font-size: 11px;
                border-top: 1px solid #D0D0D0;
                line-height: 32px;
                padding: 0 10px 0 10px;
                margin: 20px 0 0 0;
            }

            #container {
                margin: 10px;
                border: 1px solid #D0D0D0;
                box-shadow: 0 0 8px #D0D0D0;
            }

            ul.menu li {
                float: left;

            }

        </style>
    </head>
    <body>

        <div id="container">
            <div style="">
                <h1 style="">
                    <img src="assets/images/descarga.svg" alt="triangle with all three sides equal" width="40px" height="30px" >
                    Curriculum Vitae!
                </h1>    
            </div>
            <nav class="navbar navbar-light"style="background-color: #e3f2fd;">

                <ul>
                    <li><a href="<?php echo base_url() ?>Educacion" title="Enlace genérico">Educacion</a></li>
                    <li><a href="<?php echo base_url() ?>Welcome" title="Enlace genérico">Inicio</a></li>
                    <!--<li><a href="#" title="Enlace genérico">Experiencia</a></li>-->

                </ul>


            </nav>
            <div>
                <h4>Soy <b>Sergio Amarilla Ayala</b> , naci el <b>23 de Octubre de 1993</b> en la Ciudad de <b>Luque- Paraguay</b></h4>
            </div>

            <h2><b>Experiencia</b></h2>  


            <div>
                <h2><b>Datos Personales</b></h2>

                <p align="justify"><ul><li>El desarrollo web es un  mundo que abarca infinidad de ambientes en ambito tecnologico por ello es bueno tomar un tiempo y capacitarte cada dia mas, por el simple hecho que la tecnologia va avanzando a una escala sin precedente y nosotros tenemos que estar acorde al tema a las espectativas que con lleva en ambiente informatico</li>

                </ul></p>
            </div>


            <div>
                <h2><b>La mejor tecnica de Desarrollo</b></h2> 

            </div>

            <div style="border: 1px">
                <h3>El video de Html</h3>
                <video width="400" height="300" controls>
                    <source src="<?php echo base_url() ?>assets/images/Video.mp4" type="video/mp4">
                    <!--<source src=”assets/images/Audio.ogg” type=”video/ogg”>-->
                    Tu navegador no soporta vídeo.
                </video>
            </div>
            <div style="border: 2px">

                <h3> El audio de HTML<h3>
                        <audio controls="auto">

                    <source src="<?php echo base_url() ?>assets/images/Audio.mp3" type="audio/mp3">
                </audio>
            </div>
            <footer style="background-color: #e3f2fd; ">
                <div class="site-info">
                    <div class="container">
                        <p>Copyright © All rights reserved. | sergojavier23@gmail.com <a href="" rel="designer"></a>.</p>

                    </div><!-- .container -->
                </div>

            </footer>
        </div>

    </body>
</html>
