<?php include '../../../wp-load.php'; 
// INSERTING SUBSCRIBER PAGE

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

  // execption handling escape characters
  $fname = addslashes( "$_POST[fname]" );  // variable name from subscriber.php
  $lname = addslashes( "$_POST[lname]" );  // variable name from subscriber.php
  $email = addslashes( "$_POST[EMAIL]" );  // variable name from subscriber.php
  $zip = addslashes( "$_POST[ZIPCODE]" );  // variable name from subscriber.php

  // checking for duplicate email
	$sql = "SELECT * FROM wp_es_emaillist WHERE es_email_mail = '$email' ";
	$result = mysqli_query( $connection, $sql );

	// display error message
  if( $result->num_rows > 0 )
  {
    die( "Killing connection." . mysqli_error( $connection ) );
    exit;
  }
  else
  {
    $guid = GUID();
    $guid = addslashes($guid);
    $name = $fname . " " . $lname;
    $status = "Confirmed";
    date_default_timezone_set("America/Los_Angeles");
    $datetime = date_create()->format('Y-m-d H:i:s');
    $sql = "INSERT INTO wp_es_emaillist (es_email_name, es_email_mail, es_email_status, es_email_created, es_email_guid ) VALUES ( '{$name}', '{$email}', '{$status}', '{$datetime}', '{$guid}' )";
    $result = mysqli_query( $connection, $sql );

    // send welcome email
    if( $result )
    {
      $address = $email;
      $subject = "Welcome to I Love Reno!";
      $message = '<!DOCTYPE html>
                  <html>
                  <head>

                  </head>
                  <body>
  
                  <h1>You are now subscribed to the local community.</h1>
                  <h2>Enjoy our monthly newsletter.</h2>

                  </body>
                  </html>';

      add_filter('wp_mail_content_type',create_function('', 'return "text/html"; '));
      wp_mail( $address, $subject, $message, '', '' );

      // inserting into subscriber table with results
      $sql = "INSERT INTO ilr_subscriber (firstname, lastname, email, zip) VALUES ( '{$fname}', '{$lname}', '{$email}', '{$zip}' )";
      $result = mysqli_query( $connection, $sql );
	    //echo "Success! Subsciber added to ilr_subscriber DB."; 
    }
  }

  function GUID()
  {
    if (function_exists('com_create_guid') === true)
    {
        return trim(com_create_guid(), '{}');
    }

    return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
  }

  // close db connection
  mysqli_close($connection);
?>