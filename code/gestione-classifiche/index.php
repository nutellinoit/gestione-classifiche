<?php
error_reporting(0);
require "vendor/autoload.php";
use CrudKit\CrudKitApp;
use CrudKit\Pages\SQLiteTablePage;
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

if ($login->getLoggedInUser () === "user") {
    // If the user isn't `admin` then use read-only
    $app->setReadOnly (true);
}




$classifiche_moto1 = new SQLiteTablePage ("sqlite3", "demo_database.sqlite");
$classifiche_moto1->setName("Classifica Moto 1")
    ->setTableName("classifica_moto1")
    ->setRowsPerPage (20)
    ->setPrimaryColumn("Ordine")
    ->addColumn("Nome", "Nome", array(
        'required' => true
    ))
    ->addColumn("Posizione", "Posizione")
    ->addColumn("Tempo", "Tempo")
    ->addColumn("Country", "Country")
    ->addColumn("Email", "E-mail")
    ->setSummaryColumns(array("Nome", "Posizione","Tempo","Country","Email"));
$app->addPage($classifiche_moto1);




// Render the app. This will display the HTML
$app->render ();
