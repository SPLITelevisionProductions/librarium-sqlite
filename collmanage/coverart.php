<?php
    /*  --- LIBRARIUM. COVER MANAGEMENT ---
    This is the script for managing and viewing cover images on Librarium.
    What is output depends on what parameters the script is given

    This is mostly new code making use of various JavaScript functions
    to do most of the hard work like the cropping and initial resizing.

    (C) 2018 Logan Burrell / Green Warrior Productions
    (C) 2017-2018 SPLITelevision Productions c/o Troy .J. Malcolm

    Version 3.180507                                                         */


    // Make sure there's an ID set, either through GET or SESSION
    if(isset($_GET['id'])) {
		// If the ID is set in the URL, set the ID to something a little more friendly and continue
        $collID = $_GET['id'];
    } elseif(isset($_SESSION['id'])) {
		// If the ID is set in the user session, set the ID to something a little more friendly and continue
        $collID = $_SESSION['id'];
    } else {
		// If nothing is set, we can't really do anything
        // Show a "Bad Request" error page
		// This will be replaced with an error function when that is ready
		// Tell AJAX the request was unsuccessful
		header('HTTP/1.1 400 Bad Request');
		// Display the page
		include('../admin/errors/400.php');
		// Stop processing any code
        exit;
    }

    // Check if we're uploading/migrating or requesting

    if(isset($_GET['upload']) && isset($_FILES['croppedImage']) and !$_FILES['croppedImage']['error']) {
		// We're uploading...
        // Get the item ID
        $itemID = $_GET['upload'];
        // This will use $LibAuth->isAuthd() and $_SESSION['id'] in production
        $uploadID = 'testdb';

        try {
            // Create a PDO connection
            $collDB = new PDO("sqlite:userdb/".$uploadID.".db");
            $collDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Set the temporary upload path variable to something more friendly
			$tmpName = $_FILES['croppedImage']['tmp_name'];
			// Open the temporary upload file
            $inputData = fopen($tmpName, 'rb');
			
			// Prepare the SQL statement, setting our cover image to the opened file in the row with our item ID
			$collSt = $collDB->prepare('UPDATE collection SET cover = :img WHERE id = :id');
			// Bind the parameters for the image and item ID
            $collSt->bindParam(':img', $inputData, \PDO::PARAM_LOB); // "\PDO::PARAM_LOB" tells PDO that this is a large object
			$collSt->bindParam(':id', $itemID);
			// Output any error info
			$collDB->errorInfo();
			// Execute the statement
            $collSt->execute();

			// Tell AJAX that our entry has been created
            header('HTTP/1.1 201 Created');
      
        } catch(PDOException $e) {
			// Show a "Bad Request" error page
			// This will be replaced with an error function when that is ready
			// Tell AJAX the request was unsuccessful
			header('HTTP/1.1 400 Bad Request');
			// Display the page
			include('../admin/errors/400.php');
			// Stop processing any code
            exit;
        }
    } elseif(isset($_GET['view'])) {
		// We're viewing...
		// Get the item ID
    	$itemID = $_GET['view'];
      
      	try {
        	// Create a PDO connection
        	$collDB = new PDO("sqlite:userdb/".$collID.".db");
        	$collDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
			// Prepare the SQL statement, getting our cover image from the row with our item ID
			$collSt = $collDB->prepare('SELECT cover FROM collection WHERE id = :itemID');
			// Bind the parameter for our item ID and execute the statement
			$collSt->execute(array(':itemID' => $itemID));
			
			// Retrieve the data from the database and set it to $cover
        	$cover = $collSt->fetch();

       		if(isset($_GET['width'])) {
				// If a width is set, create a PHP image from the Blob, and scale it to said width
        		$img = imagescale(imagecreatefromstring($cover['cover']), $_GET['width']);
        	} else {
				// Otherwise, if no width is set, just create a PHP image from the Blob
          		$img = imagecreatefromstring($cover['cover']);
        	}

			// Tell the browser we're actually a JPEG image
			header('content-type: image/jpeg');

			// Output a JPEG-compressed version of the PHP image
			// We technically don't need to do this for the unscaled image, but this requires less lines of code,
			// and it compresses it slightly more, so we have a smaller image to transfer
        	imagejpeg($img);
  
      	} catch(PDOException $e) {
        	// Show a "Bad Request" error page
			// This will be replaced with an error function when that is ready
			// Tell AJAX the request was unsuccessful
			header('HTTP/1.1 400 Bad Request');
			// Display the page
			include('../admin/errors/400.php');
			// Stop processing any code
            exit;
      	}
    } else {
		// Otherwise, someone has probably visited the page without specifying anything,
		// or forgot to actually send the form
    	// Show a "Bad Request" error page
		// This will be replaced with an error function when that is ready
		// Tell AJAX the request was unsuccessful
		header('HTTP/1.1 400 Bad Request');
		// Display the page
		include('../admin/errors/400.php');
		// Stop processing any code
        exit;
    }

?>