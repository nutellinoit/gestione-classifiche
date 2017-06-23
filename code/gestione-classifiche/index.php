<?php

error_reporting(0);
require "vendor/autoload.php";
use CrudKit\CrudKitApp;
use CrudKit\Pages\MySQLTablePage;
use CrudKit\Pages\BasicLoginPage;

// Create a new CrudKitApp object
$app = new CrudKitApp ();
$app->setStaticRoot ("static/crudkit/");
$app->setAppName ("Admin Panel");

//
// HANDLE LOGIN
//
$login = new BasicLoginPage ();
$login->setWelcomeMessage ("Inserisci le tue credenziali");
if ($login->userTriedLogin ()) {
    $username = $login->getUserName ();
    $password = $login->getPassword ();

    // TODO: you should use your own authentication scheme here
    if ($username === 'admin' && $password === 'moto') {
        $login->success ();
    }
    else if ($username === 'user' && $password === 'demo') {
        $login->success ();
    }
    else {
        $login->fail ("Please check your password ");
    }
}
$app->useLogin ($login);
//
// END HANDLING LOGIN.
//
/*
if ($login->getLoggedInUser () === "user") {
    // If the user isn't `admin` then use read-only
    $app->setReadOnly (true);
}*/


$classifiche_moto1 = new MySQLTablePage("mysql1", "dev","123456", "myapp", array('host' =>'db' ,'charset' => "UTF8"));
$classifiche_moto1->setName("Classifica Moto 1")
    ->setTableName("classifica_moto1")
    ->setRowsPerPage (20)
    ->setPrimaryColumn("id")
    ->addColumn("Pilota", "Pilota", array(
        'required' => true
    ))
    ->addColumn("Posizione", "Posizione")
    ->addColumn("Nazione", "Nazione")
    ->addColumn("Moto", "Moto")
    ->addColumn("Punti", "Punti")
    ->setSummaryColumns(array("Posizione", "Pilota","Nazione","Moto","Punti"));
$app->addPage($classifiche_moto1);

$classifiche_moto2 = new MySQLTablePage("mysql2", "dev","123456", "myapp", array('host' =>'db' ,'charset' => "UTF8"));
$classifiche_moto2->setName("Classifica Moto 2")
    ->setTableName("classifica_moto2")
    ->setRowsPerPage (20)
    ->setPrimaryColumn("id")
    ->addColumn("Pilota", "Pilota", array(
        'required' => true
    ))
    ->addColumn("Posizione", "Posizione")
    ->addColumn("Nazione", "Nazione")
    ->addColumn("Moto", "Moto")
    ->addColumn("Punti", "Punti")
    ->setSummaryColumns(array("Posizione", "Pilota","Nazione","Moto","Punti"));
$app->addPage($classifiche_moto2);

$classifiche_moto3 = new MySQLTablePage("mysql3", "dev","123456", "myapp", array('host' =>'db' ,'charset' => "UTF8"));
$classifiche_moto3->setName("Classifica Moto 3")
    ->setTableName("classifica_moto3")
    ->setRowsPerPage (20)
    ->setPrimaryColumn("id")
    ->addColumn("Pilota", "Pilota", array(
        'required' => true
    ))
    ->addColumn("Posizione", "Posizione")
    ->addColumn("Nazione", "Nazione")
    ->addColumn("Moto", "Moto")
    ->addColumn("Punti", "Punti")
    ->setSummaryColumns(array("Posizione", "Pilota","Nazione","Moto","Punti"));
$app->addPage($classifiche_moto3);


// Render the app. This will display the HTML
$app->render ();
