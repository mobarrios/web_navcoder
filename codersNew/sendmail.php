<?php
$name       = !empty($_POST['name']) ? @trim(stripslashes($_POST['name'])) : 'Sin nombre'; 
$from       = !empty($_POST['email']) ? @trim(stripslashes($_POST['email'])) : 'Sin email'; 
$subject       = !empty($_POST['subject']) ? @trim(stripslashes($_POST['subject'])) : 'Sin asunto'; 
$message       = !empty($_POST['message']) ? @trim(stripslashes($_POST['message'])) : 'Sin mensaje'; 

$to   		= 'joni.creatividad@gmail.com';//replace with your email

$headers = "From: {".$name."} <{".$from."}> \r\n";
$headers .= "Reply-To: <{".$from."}> \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$headers .= "Subject: {".$subject."}";

$mensaje = '
<html>
<head>
    <style>
        *{
            padding:0;
            margin: 0;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            font-size: 11px;
        }

        body {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            font-family: Helvetica,Arial,sans-serif;
            font-weight: 400;
            overflow-x: hidden;
            overflow-y: auto;
            width: 100%;
            max-width: 800px;
            margin: auto;

        }

        html, body {
            min-height: 100%;

        }

        body {
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
            font-size: 14px;
            line-height: 1.42857143;
            color: #333;
            background-color: #fff;
        }


        html {
            font-size: 10px;
            -webkit-tap-highlight-color: rgba(0,0,0,0);
        }

        .color-coders{
            color: #ff5800;
        }

        .img-responsive{
            width: 100%;
        }


        .row {
            margin-right: 20px;
            margin-left: 20px;
        }


        /*Tablas*/
        .table {
            width: 100%;
            margin-bottom: 20px;
        }

        table {
            background-color: transparent;
        }

        table {
            border-spacing: 0;
            border-collapse: collapse;
            border: 1px solid #ddd;
            margin: 10px 0;
        }


        table.no-border {
            border-spacing: 0;
            border-collapse: collapse;
            border: none;
        }

        .table>thead:first-child>tr:first-child>th {
            border-top: 0;
        }

        .table>thead>tr>th {
            border-bottom: 2px solid #f4f4f4;
        }

        .table>thead>tr>th, .table>tbody>tr>th, .table>tfoot>tr>th, .table>thead>tr>td, .table>tbody>tr>td, .table>tfoot>tr>td {
            border-top: 1px solid #f4f4f4;
        }

        .table>thead>tr>th {
            vertical-align: bottom;
            border-bottom: 2px solid #ddd;
        }

        .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
            padding: 8px;
            line-height: 1.42857143;
            vertical-align: top;
            border-top: 1px solid #ddd;
        }

        th {
            text-align: left;
        }

        td, th {
            padding: 0;
            margin-top:5px !important;
        }

        td>*{

            margin-left:15px !important;
        }

        .no-border>tbody>tr>td, .no-border>tbody>tr>th, .no-border>tfoot>tr>td, .no-border>tfoot>tr>th, .no-border>thead>tr>td, .no-border>thead>tr>th{
            border: none !important;
        }

        .table-striped>thead>tr:nth-child(2) {
            background-color: #f9f9f9;
        }


        .bold{
            font-weight: bold;
        }


        .bloque1{
            width:100%;
        }


        .col-xs-9 {
            width: 75%;
        }

        .col-xs-3 {
            width: 25%;
        }

        hr{
            margin-top: 10px !important;
            margin-bottom: 10px !important;;
        }


        .fecha span{
            border: 1px solid #bcbcbc;
            color: #4f4f4f;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            width: 40px;
            height: 40px;
            display:inline-block;
            vertical-align: middle;
            font-size: 15px;
            line-height: 40px;
            text-align:center;
            margin:0 3px;
        }

        .mt-40{
            margin-top: 40px;
        }



    </style>

</head>


<body>
    <div class="row mt-40" style="background-color: #ff5800;padding:10px;">
        <table class="bloque1 no-border">
            <tr>
                <td class="col-xs-9" colspan="2">
                    <span class="bold" style="margin-left:20px;font-size:15px;color: white;">{coders}</span>
                </td>
                <td class="col-xs-3">
                    <div class="pull-right">
                        <span style="color: white;">Mail desde la web</span>
                    </div>

                </td>
            </tr>
        </table>
    </div>



    <div class="row">
        <table class="bloque1 no-border">
            <tr>
                <td class="col-xs-3"><b>Nombre: </b></td>
                <td class="col-xs-3">'.$name.'</td>
            </tr>
            <tr>
                <td class="col-xs-3"><b>E-mail: </b></td>
                <td class="col-xs-3">'.$from.'</td>
            </tr>
            <tr>
                <td class="col-xs-3"><b>Asunto: </b></td>
                <td class="col-xs-3">'.$subject.'</td>
            </tr>
            <tr>
                <td class="col-xs-3"><b>Mensaje: </b></td>
                <td class="col-xs-3">'.$message.'</td>
            </tr>
        </table>

    </div>

</body>
</html>
';

mail($to, $subject, $mensaje, $headers);

die;