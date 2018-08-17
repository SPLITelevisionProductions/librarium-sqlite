<?php
/*  --- BASE SCRIPT FOR LIBRARIUM. V3 ---
    This file sets some basic functions, and includes various
    other scripts.

    (C) 2018 Logan Burrell / Green Warrior Productions
    (C) 2017-2018 SPLITelevision Productions c/o Troy .J. Malcolm

    Version 3-180504                                               */

require_once('config.php');
require_once(__DIR__.'/../vendor/autoload.php');

if(isset($_GET['version'])) {
	echo LIBVER;
	exit;
}

// Attempt a connection to the MySQL database
try {
    // Create a PDO instance
    $msqdb = new PDO("mysql:host=".MSQHOST.";dbname=".MSQNAME, MSQUSER, MSQPASS);
    // Set the attributes for our connection, making sure we show errors
    $msqdb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  } catch(PDOException $e) {
    // Catch any errors and output them to a dialogue
    echo "<div class='errorDiag'><h1>A Database Error Occured</h1><p>".$e->getMessage()."</p><p>Please reload and try again.</p></div>";
  }

// Include authentication script
require_once(__DIR__.'/../usrmanage/user.php');
$user = new LibAuth($msqdb);

// Include error page script
//include('errors/error.php');
//$errorpg = new LibError();

// Include database sanity/upgrade script
//include('../collmanage/upgrade.php');
//$dbsanity = new LibDBSan();

// This file will now be included by all scripts
?>