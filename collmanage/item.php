<?php
    /*  --- LIBRARIUM. COLLECTION MANAGEMENT ---
	This is the script for retrieving  and adding basic item information on
	all items on Librarium.

    This is all new code making use of various JavaScript functions
    to do most of the hard work, returning only JSON data.

    This script can be used for both public and private collections/shelves.
    It accepts an ID and a shelf name, if the shelf name is ommitted it will
    simply load the default shelf (usually "My Collection"). If the ID is
    ommitted, the user must be logged in.

    (C) 2018 Logan Burrell / Green Warrior Productions
    (C) 2017-2018 SPLITelevision Productions c/o Troy .J. Malcolm

    Version 3.180815                                                         */

    /* var query = {
        id: id,
        shelf: shelf,
        fser: filter.series,
        fttl: filter.title,
        fatr: filter.author,
        fpub: filter.publisher,
        fgen: filter.genre,
        ftyp: filter.type,
        fmed: filter.medium,
        frel: filter.release,
        fown: filter.owner
	}; */

	// First, lets set up assignments for the data we've got

    // Check if a shelf is set and use that, or default to "collection"
    $table = (!empty($_GET['shelf'])) ? $_GET['shelf'] : "collection";

	// Set the filters, defaulting to the SQL wildcard "%" for most, if not set
	// The only one that does not default to "%", is the year operator. That defaults to "LIKE"
    $series = (!empty($_GET['fser'])) ? '%'.$_GET['fser'].'%' : "%";
    $title = (!empty($_GET['fttl'])) ? '%'.$_GET['fttl'].'%' : "%";
    $author = (!empty($_GET['fatr'])) ? '%'.$_GET['fatr'].'%' : "%";
    $publisher = (!empty($_GET['fpub'])) ? '%'.$_GET['fpub'].'%' : "%";
	$genre = (!empty($_GET['fgen'])) ? '%'.$_GET['fgen'].'%' : "%";
	$type = (!empty($_GET['ftyp'])) ? '%'.$_GET['ftyp'].'%' : "%";
	$medium = (!empty($_GET['fmed'])) ? '%'.$_GET['fmed'].'%' : "%";
	$release = (!empty($_GET['frel'])) ? $_GET['frel'] : "%";
	$releaseop = (!empty($_GET['frop'])) ? $_GET['frop'] : "LIKE";
	$owner = (!empty($_GET['fown'])) ? $_GET['fown'] : "%";

	// Order by what columns, in what order, either ASC or DESC. This will be filled in JS
	$order = (!empty($_GET['ford'])) ? $_GET['ford'] : "series, CAST(seriesno AS UNSIGNED), seriesno, title, release ASC";

	// Set the SQL statement using the filters above
	// The only options that don't have preset values are "title" and "release"
	// so we don't have to worry too much about operators here
	$sqlst =	'SELECT * FROM ' . $table . ' WHERE' . 
				' series LIKE :series' .
				' AND title LIKE :title' .
				' AND author LIKE :author' .
				' AND publisher LIKE :publisher' .
				' AND genre LIKE :genre' .
				' AND type LIKE :type' .
				' AND medium LIKE :medium' .
				' AND release ' . $releaseop . ' :release' .
				' AND owner LIKE :owner' .
				' ORDER BY ' . $order;

    // Make sure there's an ID set, either through GET or SESSION
    if(!empty($_GET['id'])) {
		// If the ID is set in the URL, set the ID to something a little more friendly and continue
		$collID = $_GET['id'];
		try {
			//create PDO connection
			$collDB = new PDO("sqlite:userdb/".$collID.".db");
			$collDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  
			$collSt = $collDB->prepare($sqlst);
				$collSt->execute(array(
					':series' => $series,
					':title' => $title,
					':author' => $author,
					':publisher' => $publisher,
					':genre' => $genre,
					':type' => $type,
					':medium' => $medium,
					':release' => $release,
					':owner' => $owner
					));
	  
			$collLS = $collSt->fetchAll(PDO::FETCH_ASSOC);
	  
			$ownSt = $collDB->prepare('SELECT * FROM owners');
			$ownSt->execute();
	  
			$ownLS = $ownSt->fetchAll();

			// Create an empty array for our data
			$itemsarr = array();

			// Iterate through our data, and insert them into the array
			foreach ($collLS as $i => $item) {
				// Easy access to the owner ID
				$ownID = $item['owner'];
				// Create an image in memory from the cover blob data to retrieve dimensions
				$cover = imagecreatefromstring($item['cover']);
				// If we don't have a cover, return that to JQuery so that we don't show a blank image
				if (!empty($item['cover'])) {
					// 'cover' cell isn't empty, return true
					$hascover = true;
				} else {
					// 'cover' cell is empty, return false
					$hascover = false;
				}
	  
				$jsitem->id = $item['id'];
				$jsitem->series = $item['series'];
				$jsitem->serno = $item['seriesno'];
				$jsitem->title = $item['title'];
				$jsitem->author = $item['author'];
				$jsitem->publish = $item['publisher'];
				$jsitem->genre = $item['genre'];
				$jsitem->type = $item['type'];
				$jsitem->medium = $item['medium'];
				$jsitem->release = $item['release'];
				$jsitem->rating = $item['rating'];
				$jsitem->fave = $item['favourite'];
				$jsitem->notes = $item['notes'];
				$jsitem->owner = $ownLS[$ownID]['name'];
				$jsitem->owncol = $ownLS[$ownID]['colour'];
				$jsitem->cover = $hascover;
				$jsitem->coverw = imagesx($cover);
				$jsitem->coverh = imagesy($cover);
				$jsitem->loan = $item['onloan'];

				// Push the above items to the array
				array_push($itemsarr,$jsitem);
				// Clear our items so we start fresh on the next loop
				$jsitem = null;
			}
			echo json_encode($itemsarr);
		  } catch(PDOException $e) {
			//show error
			echo '<p class="errorMsg">'.$e->getMessage().'</p>';
			exit;
		  }
    } elseif(isset($_SESSION['id'])) {
		// If the ID is set in the user session, set the ID to something a little more friendly and continue
		$collID = $_SESSION['id'];
		//..//
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
    

?>