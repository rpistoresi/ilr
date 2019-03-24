<?php /* file to test out db_v2.php routines */
	$first = "Ray";
	$last = "Pistoresi";
	$email = "unr@gmail.com";
	$zip = "89506";
	$db = "ilr_subscriber";

	include "db_v2.php";


$result = getBusinessesByType( "coffee" );

$row = $result->fetch_assoc();
echo $row["id"];
  // $id = 1;
  // $banking = 1;
  // $food = 0;
  // $coffee = 1;
  // $recreation = 1;
  // $family = 0;
  // $nonprofit = 1;
  // $other = 1;

	// $i = addBusinessType( $id,
	//                           $banking,
	//                           $food,
	//                           $coffee,
	//                           $recreation,
	//                           $family,
	//                           $nonprofit,
	//                           $other );

	// echo $i;

	// $name = "Yomama";
 //    $email = "gmailcom";
 //    $business = "snubs";
 //    $phone = "775";
 //    $address = "6880";
 //    $city = "Reno";
 //    $state = "NV";
 //    $zip = "89506";
 //    $website = "wwww";
 //    $type = "coffee";
 //    $description = "coffee";
 //    $wifi = 0;
 //    $chair = 1;
 //    $urls = "meyoucom";

	// $b = addBusiness(   $name,
 //                        $email,
 //                        $business,
 //                        $phone,
 //                        $address,
 //                        $city,
 //                        $state,
 //                        $zip,
 //                        $website,
 //                        $type,
 //                        $description,
 //                        $wifi, 
 //                        $chair, 
 //                        $urls );

 //  echo $b;

	//showAllSubscribers();
	//echo "BEFORE ADD()";
	//addSubscriber( $first, $last, $email, $zip );
	//echo "AFTER ADD()";
	//showAllSubscribers();
	// for( $i = 0; $i < 100; $i++ )
	// {
	 	//deleteSubscriber(104);
	// }
	
	//echo "AFTER DELETE()";
	//showAllSubscribers();

///////////////////////////////////////////////////////////////////////////////

	// $title = "Ryan's Party";
	// $start_date_time = "05\-05\-2017 07:30PM";
	// $end_date_time = '05';
	// $location = 'UNR';
	// $description  = 'Party';
	// $phone = '800';
	// $email = 'workingirl@hotmail.com';

	// for( $i = 0; $i < 100; $i++ )
	// {
	//  	deleteEvent($i);
	// }
	//showAllEvents();

	//echo "<br/><br/>";
	//findEvent('84');
	//findEvent( 1 );
	// // echo "<br> BEFORE EVENT ADD() <br>";
	// addEvent( $title, $start_date_time, $end_date_time, $location, $description, $phone, $email );
	// // echo "<br> AFTER EVENT ADD() <br>";
	//showAllEvents();
	// echo "<br> BEFORE DELETE() <br>";
	 //deleteEvent(96);
	// deleteEvent(106);
	// deleteEvent(107);
	// deleteEvent(108);

	// echo "<br> AFTER DELETE() <br>";
	//getEventDateRange( "03-01-2017", "03-32-2017" );
	// //showAllEvents();

      $nonprofit=0;
      $fundraiser=0;
      $familyfriendly=0;
      $festival=0;
      $cause=1;
      $foodanddrink=0;
      $entertainment=0;
      $tedtalks=0;
      $beauty=1;
      $health=0;
      $neighborhood=0;
      $holiday=1;
      $grandopening=0;
      $laketahoe=0;
      $outdoor=0;
      $sports=1;
      $tradeshow=0;
      $happyhour=0;
      $foodtrucks=0;
      $education=0;
      $crawl=0;

 $eventsID = addEvent( "test", "$start_date_time", "$end_date_time", "location", "description", "d", "email", "mytext", "urls", '1' );


 echo "<br/>" . $eventsID . "<br/>";

  addTags( $eventsID,
      $nonprofit,
      $fundraiser,
      $familyfriendly,
      $festival,
      $cause,
      $foodanddrink,
      $entertainment,
      $tedtalks,
      $beauty,
      $health,
      $neighborhood,
      $holiday,
      $grandopening,
      $laketahoe,
      $outdoor,
      $sports,
      $tradeshow,
      $happyhour,
      $foodtrucks,
      $education,
      $crawl );

//   // // Create a database connection
//   // $dbhost = "aa1qo18bxrq2p2l.ciurdt0cug1d.us-west-2.rds.amazonaws.com";
//   // $dbuser = "ilovereno";
//   // $dbpass = "Ilovereno123#";
//   // $dbname = "ebdb";
// // CONNECTION TO DB ///////////////////////////////////////////////////////////
  //    $eventsID=1;
      // $nonprofit=0;
      // $fundraiser=0;
      // $familyfriendly=0;
      // $festival=0;
      // $cause=0;
      // $foodanddrink=0;
      // $entertainment=0;
      // $tedtalks=0;
      // $beauty=0;
      // $health=0;
      // $neighborhood=0;
      // $holiday=0;
      // $grandopening=0;
      // $laketahoe=0;
      // $outdoor=0;
      // $sports=0;
      // $tradeshow=0;
      // $happyhour=0;
      // $foodtrucks=0;
      // $education=0;
      // $crawl=0;

  // addTags( $eventsID,
  //     $nonprofit,
  //     $fundraiser,
  //     $familyfriendly,
  //     $festival,
  //     $cause,
  //     $foodanddrink,
  //     $entertainment,
  //     $tedtalks,
  //     $beauty,
  //     $health,
  //     $neighborhood,
  //     $holiday,
  //     $grandopening,
  //     $laketahoe,
  //     $outdoor,
  //     $sports,
  //     $tradeshow,
  //     $happyhour,
  //     $foodtrucks,
  //     $education,
  //     $crawl );


  // // Connect to db and test if connection occurred.
  // $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  // if(mysqli_connect_errno()) 
  // {
  //     die("Database connection failed: " . 
  //         mysqli_connect_error() . 
  //             " (" . mysqli_connect_errno() . ")"
  //   );
  // }

//getBusinesses();

// showAllEvents();


// echo "<br/>Hello Ya'll <br/>";


// $array = getEventsByTag( "beer" );


//print_r( array_values($array) );

//showAllSubscribers();
 //showAllBusiness();
	// $sql = "CREATE TABLE ilr_business (
 //  id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, 
 //  fullname VARCHAR(60) NOT NULL,
 //  email VARCHAR(60) NOT NULL,
 //  businessname VARCHAR(60) NOT NULL,
 //  phone VARCHAR(30) NOT NULL,
 //  address VARCHAR(30) NOT NULL,
 //  city VARCHAR(30) NOT NULL,
 //  state VARCHAR(30) NOT NULL,
 //  zip VARCHAR(15) NOT NULL,
 //  website VARCHAR(60) NOT NULL,
 //  type VARCHAR(60) NOT NULL,
 //  description VARCHAR(60) NOT NULL,
 //  wifi INT UNSIGNED NOT NULL,
 //  Wchair INT UNSIGNED NOT NULL,
 //  reg_date TIMESTAMP
 //  )";

//   	$sql = "CREATE TABLE ilr_tags (
// id INT UNSIGNED NOT NULL PRIMARY KEY, 
// nonprofit TINYINT(1) DEFAULT '0',
// fundraiser TINYINT(1) DEFAULT '0',
// tedtalks TINYINT(1) DEFAULT '0',
// sports TINYINT(1) DEFAULT '0',
// beauty TINYINT(1) DEFAULT '0',
// tradeshow TINYINT(1) DEFAULT '0',
// familyfriendly TINYINT(1) DEFAULT '0',
// health TINYINT(1) DEFAULT '0',
// happyhour TINYINT(1) DEFAULT '0',
// festival TINYINT(1) DEFAULT '0',
// neighborhood TINYINT(1) DEFAULT '0',
// foodtrucks TINYINT(1) DEFAULT '0',
// cause TINYINT(1) DEFAULT '0',
// holiday TINYINT(1) DEFAULT '0',
// education TINYINT(1) DEFAULT '0',
// foodanddrink TINYINT(1) DEFAULT '0',
// grandopening TINYINT(1) DEFAULT '0',
// crawl TINYINT(1) DEFAULT '0',
// entertainment TINYINT(1) DEFAULT '0',
// laketahoe TINYINT(1) DEFAULT '0',
// outdoor TINYINT(1) DEFAULT '0',
// other TINYINT(1) DEFAULT '1'
//   )";

// 

 //$sql = "DROP TABLE ilr_tags ";
    // Routine to delete table from db
//  $sql = "ALTER TABLE ilr_events ADD feature BOOLEAN DEFAULT FALSE";


//$array = array("beer","shot","burger", "combo" );
//$array = base64_encode(serialize( $array ));
//$sql = "INSERT INTO ilr_events (tags) VALUES ('{$array}' )";




  //$retval = mysqli_query( $sql, $connection );


  // if(! $retval ) {
  //   die('Could not delete table: ' . mysqli_error());
  // }
  // echo "Table deleted successfully\n";

//  $new = 177;

  //$sql = "SELECT * from ilr_events WHERE id = $new";

 //$result = mysqli_query($connection, $sql );
// //$new;
// //       // // output data of each row
//         if($row = $result->fetch_assoc()) {
//         	$new = unserialize( base64_decode( $row["tags"] ) );

//         	if( in_array( "beer", $new )){
//         		echo "does it work now";
//         	}
//         }
//         echo "<br/>"  . $new[0]. "<br/><br/>";

// showAllEvents();

//   echo "<br/><br/>";

  if ($connection->query($sql) == TRUE) {
    echo "Table Events created successfully";
  } else {
    echo "Error creating table: " . $connection->error;
  }

 // 5. Close database connection
  //mysqli_close($connection);
?>