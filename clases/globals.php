<?php

// VARIABLES SUPER GLOBALES

// SESSION
echo '<h2>SESSION</h2>';
session_start();
$_SESSION['user'] = ['name' => 'Pablo'];
var_dump($_SESSION);
echo '<hr>';

// SERVER
echo '<h2>SERVER</h2>';
var_dump($_SERVER);
echo '<hr>';

// GET
echo '<h2>GET</h2>';
var_dump($_GET);
echo '<hr>';

// POST
echo '<h2>POST</h2>';
$_POST['data'] = [];
var_dump($_POST);
echo '<hr>';

// ENV

// ENTORNOS

// PRE[DESARROLLO] PRE-PROD[JEFES] PROD[CLIENTES]
// DOTENV
$_ENV['pre'] = [];
$_ENV['preProd'] = [];
$_ENV['prod'] = [];
echo '<h2>ENVIRONMENT</h2>';
$appName = 'MyApp2';
$_ENV['appName'] = $appName;
var_dump($_ENV);
echo '<hr>';

// REQUEST
echo '<h2>REQUEST</h2>';
var_dump($_REQUEST);
echo '<hr>';

// GLOBALS
echo '<h2>GLOBALS</h2>';
var_dump($GLOBALS);
echo '<hr>';
