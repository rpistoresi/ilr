<?php include '../../../wp-load.php';
// Globale variables //////////////////////////////////////////////////////////

  // Create a database connection
  $dbhost = "host";
  $dbuser = "user";
  $dbpass = "password";
  $dbname = "db";

// CONNECTION TO DB ///////////////////////////////////////////////////////////

  // Connect to db and test if connection occurred.
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  if(mysqli_connect_errno()) 
  {
      die("Database connection failed: " . 
          mysqli_connect_error() . 
              " (" . mysqli_connect_errno() . ")"
    );
  }

// FUNCTION TO ADD ONE SUBSCRIBER /////////////////////////////////////////////
  function addSubscriber( $first, $last, $email, $zip )
  {
    global $dbhost, $dbuser, $dbpass, $dbname;
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    $query  = "INSERT INTO ilr_subscriber (";
    $query .= " firstname, lastname, email, zip";
    $query .= ") VALUES (";
    $query .= " '{$first}', '{$last}', '{$email}', '{$zip}' ";
    $query .= ")";
    $result = mysqli_query($connection, $query );

    if ($result) {
      // Success
      echo "Success! Subsciber added to ilr_subscriber DB.";
    } else {
      // Failure
      die("Database ilr_subscriber query failed. " . mysqli_error($connection));
    }

    if ($result) {
      // Success
      echo "Success! Subsciber added to wp_es_emaillist DB.";
    } else {
      // Failure
      die("Database wp_es_emaillist query failed. " . mysqli_error($connection));
    }

    // close db connection
    mysqli_close($connection);
  }

// FUNCTION TO DELETE ONE SUBSCRIBER FROM TABLE ///////////////////////////////
  function deleteSubscriber( $id )
  {
    global $dbhost, $dbuser, $dbpass, $dbname;

    // Create a database connection
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    $query = "DELETE from ilr_subscriber WHERE id = $id";
    $result = mysqli_query($connection, $query );

    if( $result )
      echo "USER DELETED <br>";

    else
      echo "DID NOT DELETE USER <br> ";
    
    // close db connection
    mysqli_close($connection);
  }

// FUNCTION TO FIND ONE SUBSCRIBER IN TABLE ///////////////////////////////////
  function findSubscriber( $id )
  {
    // Create a database connection
    global $dbhost, $dbuser, $dbpass, $dbname;
    
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    $query = "SELECT * from ilr_subscriber WHERE id = $id ";
    $result = mysqli_query($connection, $query );

    if( $result->num_rows > 0 ){
      echo "USER FOUND<br>" .
        "===========<br><br>";
      if ($result->num_rows > 0) {
        // output data of each row
        if($row = $result->fetch_assoc()) {
          echo "<br> ID: ". $row["id"].
               " Name: ". $row["firstname"]. " ". $row["lastname"]. " ".
               " Email: ". $row["email"]. " ".
               " Zip: ". $row["zip"]. "<br>";
        }
      }
    }
    else {echo "DID NOT FIND USER";}
    
    // close db connection
    mysqli_close($connection);

    // return true if record added; otherwise false;
    return $row;
  }
// FUNCTION TO SHOW ALL RECORD IN DB TABLE ////////////////////////////////////
  function showAllSubscribers()
  {
    global $dbhost, $dbuser, $dbpass, $dbname;

    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    $query  = "SELECT * ";
    $query .= "FROM ilr_subscriber ";
    $result = mysqli_query($connection, $query);
    $sql = "SELECT id, firstname, lastname, email, zip FROM ilr_subscriber";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
         // output data of each row
         while($row = $result->fetch_assoc()) {
             echo "<br> ID: ". $row["id"].
                  " Name: ". $row["firstname"]. " ". $row["lastname"]." ".
                  " Email: ". $row["email"]. " ".
                  " Zip: ". $row["zip"]. "<br>";
         }
    } 

    else {
         echo "0 results";
    }
    // close db connection
    mysqli_close($connection);
  }

// FUNCTION TO ADD ONE EVENT //////////////////////////////////////////////////
  //   id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, 
  //   title VARCHAR(30) NOT NULL,
  //   start_date_time VARCHAR(29) NOT NULL,
  //   end_date_time VARCHAR(29) NOT NULL,
  //   location VARCHAR(100) NOT NULL,
  //   description VARCHAR(500) NOT NULL,
  //   phone VARCHAR(30) NOT NULL,
  //   email VARCHAR(50) NOT NULL,
  //   reg_date TIMESTAMP
  //
  //   FORMATTING:
  //   start date and time --> 02-05-2017 01:30PM
  //   end date and time --> 02-05-2017 01:30PM

  function  addTags( $eventsID, $nonprofit, $fundraiser, $familyfriendly, $festival, $cause, 
      $foodanddrink, $entertainment, $tedtalks, $beauty, $health, $neighborhood, $holiday,
      $grandopening, $laketahoe, $outdoor, $sports, $tradeshow, $happyhour, $foodtrucks, $education, $crawl )

       {

    global $dbhost, $dbuser, $dbpass, $dbname;

    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

     $query  = "INSERT INTO ilr_tags (";
     $query .= " id, nonprofit, fundraiser, familyfriendly, festival, cause,
       foodanddrink, entertainment, tedtalks, beauty, health, neighborhood, holiday, grandopening, 
       laketahoe, outdoor, sports, tradeshow, happyhour, foodtrucks, education, crawl ";
     $query .= ") VALUES (";
     $query .= " '{$eventsID}', '{$nonprofit}' , '{$fundraiser}', '{$familyfriendly}' , '{$festival}', '{$cause}',
       '{$foodanddrink}', '{$entertainment}' , '{$tedtalks}', '{$beauty}', '{$health}', '{$neighborhood}', '{$holiday}', '{$grandopening}', 
       '{$laketahoe}', '{$outdoor}', '{$sports}', '{$tradeshow}', '{$happyhour}', '{$foodtrucks}', '{$education}', '{$crawl}' )";

    $result = mysqli_query($connection, $query );

    if ($result) {
      // Success
      echo "Success! Tags added to ilr_tags DB.";
    } else {
      // Failure
      die("Database query failed. " . mysqli_error($connection));
    }

    // close db connection
    mysqli_close($connection);

  }


  function addEvent( $title, $start_date_time, $end_date_time, 
                      $location, $description, $phone, $email, $mytext, $url, $approved )
  {
    global $dbhost, $dbuser, $dbpass, $dbname;

    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    $query  = "INSERT INTO ilr_events (";
    $query .= " title, start_date_time, end_date_time, location, ";
    $query .= "description, phone, email, externallinks, imageurl, approved";
    $query .= ") VALUES (";
    $query .= " '{$title}', '{$start_date_time}', '{$end_date_time}', ";
    $query .= " '{$location}', '{$description}', '{$phone}', '{$email}', '{$mytext}', '{$url}', '{$approved}' ";
    $query .= ")";
    $result = mysqli_query($connection, $query );

    if ($result) {
      // Success
      echo "Success! Event added to ilr_events DB.";
    } else {
      // Failure
      die("Database query failed. " . mysqli_error($connection));
    }

   $id = mysqli_insert_id( $connection );


    // close db connection
    mysqli_close($connection);


    return $id;
}

// FUNCTION TO DELETE ONE EVENT FROM TABLE ////////////////////////////////////
  function deleteEvent( $id )
  {
    global $dbhost, $dbuser, $dbpass, $dbname;

    // Create a database connection
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    $query = "DELETE from ilr_events WHERE id = $id";
    $result = mysqli_query($connection, $query );

    if( $result )
        echo "EVENT DELETED <br>";
    else
      echo "DID NOT DELETE EVENT <br> ";
    
    // close db connection
    mysqli_close($connection);
  }

// FUNCTION TO FIND ONE EVENT IN TABLE ////////////////////////////////////////
  function findEvent( $id )
  {
    // Create a database connection
    global $dbhost, $dbuser, $dbpass, $dbname;
    
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    $query = "SELECT * from ilr_events WHERE id = $id ";
    $result = mysqli_query( $connection, $query );

    if( $result ){
      // echo "EVENT FOUND<br>" .
      //   "===========<br><br>";
      if ($result->num_rows > 0) {
        // output data of each row
        if($row = $result->fetch_assoc()) {
          // echo "<br> ID: ". $row["id"].
          //      " Title: ". $row["title"] . " " . 
          //      " Start Time: ". $row["start_date_time"]. " ".
          //      " End Time: ". $row["end_date_time"]. " ".
          //      " Location: ". $row["location"]. " ".
          //      " Description: ". $row["description"]. " ".
          //      " Phone: ". $row["phone"]. " ".
          //      " Email: ". $row["email"]. " ". "<br>";
               return $row;
        }
      }
    }
    else {echo "DID NOT FIND EVENT";}
    
    // close db connection
    mysqli_close($connection);

    return 0;
  }

// FUNCTION TO ADD ONE BUSINESS ////////////////////////////////////////////////
  //   approved DEFAULTED TO 0 -> unapproved
  //   premium DEFAULTED TO 0 -> not premium
  //   id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, 
  //   fullname VARCHAR(60) NULL,
  //   email VARCHAR(60) NULL,
  //   businessname VARCHAR(60) NULL,
  //   phone VARCHAR(30) NULL,
  //   address VARCHAR(30) NULL,
  //   city VARCHAR(30) NULL,
  //   state VARCHAR(30) NULL,
  //   zip VARCHAR(15) NULL,
  //   website VARCHAR(60) NULL,
  //   type VARCHAR(60) NULL,
  //   description VARCHAR(60) NULL,
  //   wifi INT 10 NULL,
  //   wchair INT 10 NULL,
  //   imageurl VARCHAR(255) NULL
  //
  function addBusiness( $name,
                        $email,
                        $business,
                        $phone,
                        $address,
                        $city,
                        $state,
                        $zip,
                        $website,
                        $type,
                        $description,
                        $wifi, 
                        $chair, 
                        $urls,
                        $approved )
  {
    // db connection parameters
    global $dbhost, $dbuser, $dbpass, $dbname;

    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    //inserting into subscriber table with results
    $sql  = "INSERT INTO ilr_business ";
    $sql .= "( fullname, email, businessname, phone, address, city, ";
    $sql .= "state, zip, website, type, description, wifi, wchair, imageurl, approved)";
    $sql .= " VALUES ( '{$name}', '{$email}', '{$business}', '{$phone}',";
    $sql .= " '{$address}', '{$city}', '{$state}', '{$zip}','{$website}',";
    $sql .= " '{$type}', '{$description}' , '{$wifi}', '{$chair}',  '{$urls}', '{$approved}')";

    // make query and store results
    $result = mysqli_query( $connection, $sql );

    //test and report successful insertion into DB
    if( $result )
    {
      // Success
      echo "Success! Subsciber added to ilr_business DB.";

      // return event record id
      $last_id = mysqli_insert_id($connection);
      return $last_id;
    } 
    else
    {
      // Failure
      die("Database query failed. " . mysqli_error($connection));
    }

    // close db connection
    mysqli_close($connection);
}
// FUNCTION TO INSERT ALL BUSINESS TYPES INTO TABLE BASED ON BUSINESS ID ///////
function addBusinessType( $id,
                          $banking,
                          $food,
                          $coffee,
                          $recreation,
                          $family,
                          $nonprofit,
                          $other )
{
  // Create a database connection
  global $dbhost, $dbuser, $dbpass, $dbname;

  // make db connection, query for business record, and return result
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  $query  = "INSERT INTO ilr_business_type ( id, banking, food, coffee,";
  $query .= " recreation, family, nonprofit, other ";
  $query .= ") VALUES ( '{$id}', '{$banking}', '{$food}', '{$coffee}',";
  $query .= " '{$recreation}', '{$family}', '{$nonprofit}', '{$other}' )";

  $result = mysqli_query( $connection, $query );

  if( $result )
  {
    return 1;
  }

  // close db connection
  mysqli_close($connection);
  return 0;
}
// FUNCTION TO ALL BUSINESSES //////////////////////////////////////////////////
  function getAllBusiness()
  {
    global $dbhost, $dbuser, $dbpass, $dbname;

    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    $query  = "SELECT * ";
    $query .= "FROM ilr_business ";
    $result = mysqli_query($connection, $query);

    if( $result )
    {
      return $result;
    }

    // close db connection
    mysqli_close($connection);
    return 0;
  }
// FUNCTION TO FIND ONE BUSINESS IN TABLE //////////////////////////////////////
  function findBusiness( $id )
  {
    // Create a database connection
    global $dbhost, $dbuser, $dbpass, $dbname;
    
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    $query = "SELECT * from ilr_business WHERE id = $id AND approved=1";
    $result = mysqli_query( $connection, $query );

    if( $result )
    {
      if ($result->num_rows > 0)
      {
        return $result->fetch_assoc();
      }
    }
    else {echo "DID NOT FIND Business";}
    
    // close db connection
    mysqli_close($connection);

    return 0;
  }

// FUNCTION TO SHOW ALL BUSINESSES IN ilr_business TABLE ///////////////////////
  function showAllBusiness(){
    global $dbhost, $dbuser, $dbpass, $dbname;

    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    //MySQL query to select all events in table
    $query  = "SELECT * ";
    $query .= "FROM ilr_business ";
    $result = mysqli_query($connection, $query);

    // select all data in event record, query table, store results
    $sql  = "SELECT id, fullname, email, businessname, phone, address, city, state, zip, website, type, ";
    $sql .= "description, wifi, wchair FROM ilr_business";
    $result = $connection->query($sql);

    // loop through all events found and output to page
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo  "<br> ID: ". $row["id"]. " |".
              " Rep's Name: ". $row["fullname"]. " ". " |".
               " Email: ". $row["email"]. " ". " |".
               " Business Name: ". $row["businessname"]. " ". " |".
               " Phone: ". $row["phone"]. " ". " |".
               " Address: ". $row["address"]. " ". " |". 
               " City: ". $row["city"]. " ". " |<br>".
               " State: ". $row["state"]. " ". " |".
               " Zip: ". $row["zip"]. " ". " |".
               " Website: ". $row["website"]. " ". " |".
               " Type of Business: ". $row["type"]. " ". " |".
               " Description: ". $row["description"]. " ". " |". 
               " WIFI: ". $row["wifi"]. " ". " |".
               " Wheelchair Accessible: ". $row["wchair"]. " ". " |".
               "<br>";
       }
    }
    else 
    {
      echo "0 events";
    }
    // close db connection
    mysqli_close($connection);
  }

// FUNCTION TO SHOW ALL RECORD IN ilr_events TABLE ////////////////////////////
  function showAllEvents()
  {
    global $dbhost, $dbuser, $dbpass, $dbname;

    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    //MySQL query to select all events in table
    $query  = "SELECT * ";
    $query .= "FROM ilr_events ";
    $result = mysqli_query( $connection, $query );

    // select all data in event record, query table, store results
    $sql  = "SELECT id, title, start_date_time, end_date_time, location,";
    $sql .= " description, phone, email, externallinks, imageurl, feature, tags FROM ilr_events";

    // // option to display all events by date in ascending order
    //$result = $connection->query($sql);
    //$sql= "SELECT * FROM ilr_events ORDER BY start_date_time ASC";

    $result = mysqli_query( $connection, $sql );

    if( $result->num_rows > 0 )
    {
      // output data of each row
      while( $row = $result->fetch_assoc() )
      {
        echo  "<br> ID: ". $row["id"].
              " Title: ". $row["title"]. " ". 
               " Start Time: ". $row["start_date_time"]. " ".
               " End Time: ". $row["end_date_time"]. " ".
               " Location: ". $row["location"]. " ".
               " Description: ". $row["description"]. " ".
               " Phone: ". $row["phone"]. " ".
               " Email: ". $row["email"]. " ".
               " External Links: ". $row["externallinks"]. " ".
               " URL: ". $row["imageurl"].  " ".
               " Feature: " . $row["feature"]. " " .
               " Tags : " . $row["tags"]. "<br>";
       }
    }
    else 
    {
      echo "0 events";
    }

    // close db connection
    mysqli_close($connection);
  }

// FUNCTION TO SELECT EVENTS WITH THE RESPECTIVE TAG //////////////////////////
  function getEventsByTag( $tag )
  {
    global $dbhost, $dbuser, $dbpass, $dbname;
    $array = array();
    $connection = mysqli_connect( $dbhost, $dbuser, $dbpass, $dbname );

    $index = 0;

    $sql = "SELECT * from ilr_tags";

    $result = mysqli_query($connection, $sql);

    if( ($result->num_rows ) > 0 )
    {
      while( $row = $result->fetch_assoc() )
      {
        if( $row[$tag] == 1 )
        {
          $array[ $index ] = $row["id"];
          $index++;
        }
      }
    }

    if( $index > 0 )
    {
      $sql = 'SELECT * FROM ilr_events WHERE approved=1 AND id IN (' . implode(',', array_map('intval', $array)) . ')';

      $result = mysqli_query($connection, $sql);

      if( $result->num_rows > 0 )
      {
        return $result;
      }
    }

    return 0;
    // close db connection
  }
// FUNCTION TO SELECT EVENTS WITHIN DATE RANGE ////////////////////////////////
  function getEventDateRange( $begin, $end )
  {
    global $dbhost, $dbuser, $dbpass, $dbname;

    $connection = mysqli_connect( $dbhost, $dbuser, $dbpass, $dbname );

    $sql  = "SELECT * FROM ilr_events WHERE start_date_time BETWEEN '" . $begin;
    $sql .= "' and '" . $end . "' AND approved=1 ORDER BY start_date_time ASC";
    $result = mysqli_query($connection, $sql);

    if( ( $result->num_rows ) > 0 )
        return $result;

    // close db connection
    mysqli_close( $connection );
    return 0;
  }
// FUNCTION TO SELECT EVENTS WITHIN DATE RANGE ////////////////////////////////
  function getPosterBoardEvents( $begin, $end )
  {
    global $dbhost, $dbuser, $dbpass, $dbname;

    $connection = mysqli_connect( $dbhost, $dbuser, $dbpass, $dbname );

    $sql  = "SELECT * FROM ilr_events WHERE start_date_time BETWEEN '" . $begin;
    $sql .= "' and '" . $end . "' AND approved=1 ORDER BY start_date_time ASC limit 10";
    $result = mysqli_query($connection, $sql);

    if( ( $result->num_rows ) > 0 )
        return $result;

    // close db connection
    mysqli_close( $connection );
    return 0;
  }
// FUNCTION TO SELECT ALL BUSINESSES ///////////////////////////////////////////
  function getAllBusinesses()
  {
    global $dbhost, $dbuser, $dbpass, $dbname;

    $connection = mysqli_connect( $dbhost, $dbuser, $dbpass, $dbname );

    $sql  = "SELECT * FROM ilr_business WHERE approved=1";
    $result = mysqli_query($connection, $sql);

    // close db connection
    mysqli_close( $connection );
    return $result;
  }
// FUNCTION TO SELECT ALL BUSINESSES WITH RESPECIVE TAG ////////////////////////
  function getBusinessesByType( $type )
  {
    global $dbhost, $dbuser, $dbpass, $dbname;
    $array = array();
    $connection = mysqli_connect( $dbhost, $dbuser, $dbpass, $dbname );

    $index = 0;

    $sql = "SELECT * from ilr_business_type ";

    $result = mysqli_query($connection, $sql);

    if( ($result->num_rows ) > 0 )
    {
      while( $row = $result->fetch_assoc() )
      {
        if( $row[$type] == 1 )
        {
          $array[ $index ] = $row["id"];
          $index++;
        }
      }
    }

    if( $index > 0 )
    {
      $sql = 'SELECT * FROM ilr_business WHERE id IN (' . implode(',', array_map('intval', $array)) . ')';

      $result = mysqli_query($connection, $sql);

      if( $result->num_rows > 0 )
      {
        return $result;
      }
    }

    return 0;
    // close db connection
    mysqli_close($connection);
  }
// CREATE SUBSCRIBER TABLE ////////////////////////////////////////////////////
/*
  // Routine to create events table in db
  $sql = "CREATE TABLE ilr_subscriber (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    zip VARCHAR(15) NOT NULL,
    reg_date TIMESTAMP )";

  // Test if table was successfully created and report
  if ($connection->query($sql) === TRUE) {
    echo "Table ilr_subscriber created successfully";
  }
  else {
    echo "Error creating table: " . $connection->error;
  }
*/
// DELETE TABLE ///////////////////////////////////////////////////////////////
/*
  // Routine to delete table from db
  $sql = "DROP TABLE ilr_subscriber ";
  $retval = mysqli_query( $sql, $connection );
  if(! $retval ) {
    die('Could not delete table: ' . mysqli_error());
  }
  echo "Table deleted successfully\n";
*/
?>
<?php
// CREATE EVENTS TABLE IN DATABASE ////////////////////////////////////////////
/*
  // FORMATTING:
  //   start date and time --> 02-05-2017 01:30PM
  //   end date and time --> 02-05-2017 01:30PM
  //
  $sql = "CREATE TABLE ilr_events (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, 
  title VARCHAR(30) NOT NULL,
  start_date_time VARCHAR(29) NOT NULL,
  end_date_time VARCHAR(29) NOT NULL,
  location VARCHAR(100) NOT NULL,
  description VARCHAR(500) NOT NULL,
  phone VARCHAR(30) NOT NULL,
  email VARCHAR(50) NOT NULL,
  reg_date TIMESTAMP
  )";

  if ($connection->query($sql) === TRUE) {
    echo "Table ilr_events created successfully";
  } else {
    echo "Error creating table: " . $connection->error;
  }
*/
// DELETE EVENTS TABLE FROM DATABASE //////////////////////////////////////////
/*
// MySQL to delete table
  $sql = "DROP TABLE ilr_events";
  $retval = mysqli_query( $sql, $connection );
  if(! $retval )
  {
  die('Could not delete ilr_events table: ' . mysqli_error());
  }
  echo "ilr_events table deleted successfully\n";
*/
// CREATE EVENTS TAG TABLE ////////////////////////////////////////////////////
/*    $sql = "CREATE TABLE ilr_tags (
             id INT UNSIGNED NOT NULL PRIMARY KEY, 
             nonprofit TINYINT(1) DEFAULT '0',
             fundraiser TINYINT(1) DEFAULT '0',
             tedtalks TINYINT(1) DEFAULT '0',
             sports TINYINT(1) DEFAULT '0',
             beauty TINYINT(1) DEFAULT '0',
             tradeshow TINYINT(1) DEFAULT '0',
             familyfriendly TINYINT(1) DEFAULT '0',
             health TINYINT(1) DEFAULT '0',
             happyhour TINYINT(1) DEFAULT '0',
             festival TINYINT(1) DEFAULT '0',
             neighborhood TINYINT(1) DEFAULT '0',
             foodtrucks TINYINT(1) DEFAULT '0',
             cause TINYINT(1) DEFAULT '0',
             holiday TINYINT(1) DEFAULT '0',
             education TINYINT(1) DEFAULT '0',
             foodanddrink TINYINT(1) DEFAULT '0',
             grandopening TINYINT(1) DEFAULT '0',
             crawl TINYINT(1) DEFAULT '0',
             entertainment TINYINT(1) DEFAULT '0',
             laketahoe TINYINT(1) DEFAULT '0',
             outdoor TINYINT(1) DEFAULT '0',
             other TINYINT(1) DEFAULT '1' )";
*/
// CREATE BUSINESS TYPE TABLE /////////////////////////////////////////////////
/*
    $sql = "CREATE TABLE ilr_business_type (
            id INT UNSIGNED NOT NULL PRIMARY KEY, 
            banking TINYINT(1) DEFAULT '0',
            food TINYINT(1) DEFAULT '0',
            coffee TINYINT(1) DEFAULT '0',
            recreation TINYINT(1) DEFAULT '0',
            family TINYINT(1) DEFAULT '0',
            nonprofit TINYINT(1) DEFAULT '0',
            other TINYINT(1) DEFAULT '1' )";
*/
// TESTING CODE FROM INITIAL IMPLEMENTATION ///////////////////////////////////
/*
  // Subscriber insert test 1
  $fname = "Ray";
  $lname = "Pistoresi";

  $query  = "INSERT INTO ilr_subscriber (";
  $query .= " firstname, lastname";
  $query .= ") VALUES (";
  $query .= " '{$fname}', '{$lname}' ";
  $query .= ")";

  $result = mysqli_query($connection, $query);

  if ($result) {
    // Success
    // redirect_to("somepage.php");
    echo "Success!";
  } else {
    // Failure
    // $message = "Subject creation failed";
    die("Database query failed. " . mysqli_error($connection));
  }

  // Subscriber insert test 2
  $fname = "Rene";
  $lname = "Flores";
  
  // 2. Perform database query
  $query  = "INSERT INTO ilr_subscriber (";
  $query .= " firstname, lastname";
  $query .= ") VALUES (";
  $query .= " '{$fname}', '{$lname}' ";
  $query .= ")";

  $result = mysqli_query($connection, $query);

  if ($result) {
    // Success
    // redirect_to("somepage.php");
    echo "Success!";
  } else {
    // Failure
    // $message = "Subject creation failed";
    die("Database query failed. " . mysqli_error($connection));
  }
*/

// END PHP SECTION ////////////////////////////////////////////////////////////
?>
<?php
  // 5. Close database connection
  mysqli_close($connection);
?>