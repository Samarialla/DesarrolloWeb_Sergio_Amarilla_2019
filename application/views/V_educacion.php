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
                    <li><a href="<?php echo base_url() ?>Experiencia" title="Enlace genérico">Experiencia</a></li>
                    <li><a href="<?php echo base_url() ?>Welcome" title="Enlace genérico">Inicio</a></li>
                    <!--<li><a href="#" title="Enlace genérico">Experiencia</a></li>-->

                </ul>


            </nav>
            <div>
                <h4>Soy <b>Sergio Amarilla Ayala</b> , naci el <b>23 de Octubre de 1993</b> en la Ciudad de <b>Luque- Paraguay</b></h4>
            </div>

            <h2><b>Educacion</b></h2>  


            <div>

                <h2><b>Perfil</b></h2>

                <p align="justify"><ul><li>El desarrollo web es un  mundo que abarca infinidad de ambientes en ambito tecnologico por ello es bueno tomar un tiempo y capacitarte cada dia mas, por el simple hecho que la tecnologia va avanzando a una escala sin precedente y nosotros tenemos que estar acorde al tema a las espectativas que con lleva en ambiente informatico.</li>

                </ul></p>
            </div>

            <table id="tblinternos" class="table table-hover display">
                <thead>
                    <tr>
                        <th class="">Año</th>
                        <th>Institución</th>
                        <th>Lugar</th>
                        <th>¿Culmino?</th>


                    </tr>

                </thead>

                <tbody>
                    <!--// para obtner de la base de datos de forma basica atraves de for each-->

                    <tr>

                       
                        <td>2017</td>
                        <td>UTIC</td>
                        <td>Asuncion</td>
                        <td>SI</td>
                    </tr>

                </tbody>
            </table> 
            <div>
                <h2><b>Agregar Estudios</b></h2>
                <label for="name" class=""><b>Año</b></label>
                <select class=" form-control-lg col-md-2"  required="true">
                    <option>2016</option>
                    <option>2017</option>
                    <option>2018</option>
                </select>

                <div class="" >
                    <label for="name" class=""><b>Institucion:</b></label>
                    <input  type="text" id="" class="f-control-lg col-md-6" name="" placeholder="Ingrese los datos que necesita"></input>
                </div>
                 <div class="" >
                    <label for="name" class=""><b>Lugar:</b></label>
                    <input  type="text" id="" class="f-control-lg col-md-6" name="" placeholder="Ingrese los datos que necesita"></input>
                </div>
                <button type="button" id="" class="btn btn-success">Enviar</button>
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
