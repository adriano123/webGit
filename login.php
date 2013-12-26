<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$usuario =$_GET["usr"];
$passwd = $_GET["pwd"];


if($usuario=="admin" and $passwd=="123"){
    $respuesta = "1";
}else{
    $respuesta = "0";
}
echo json_encode($respuesta);