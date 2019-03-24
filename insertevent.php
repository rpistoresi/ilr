<?php include 'db_v2.php';

  //include the S3 class
  if (!class_exists('S3'))require_once('s3_ex/S3.php');

  //AWS access info
  if( !defined('awsAccessKey') ) define( 'awsAccessKey', 'accessKey' );
  if( !defined('awsSecretKey') ) define( 'awsSecretKey', 'secretKey' );

  //instantiate the class
  $s3 = new S3(awsAccessKey, awsSecretKey);

  // seed with microseconds for random number
  function make_seed()
  {
    list($usec, $sec) = explode(' ', microtime());
    return $sec + $usec * 1000000;
  }

  // execption handling escape characters
  $title = addslashes("$_POST[title]");
  $start_date_time = addslashes("$_POST[start_date_time]");
  $end_date_time = addslashes("$_POST[end_date_time]");
  $location = addslashes("$_POST[location]");
  $description = addslashes("$_POST[description]");
  $phone = addslashes("$_POST[phone]");
  $email = addslashes("$_POST[email]");
  $mytext = addslashes("$_POST[mytext]");
  $approved = 0;

  // get all the image file names - if no file upload, store default images
  $numFiles = count( $_FILES['theFile']['name'] );

  for( $i = 0; $i < $numFiles; $i++ )
  {
    if( $_FILES['theFile']['error'][$i] !== UPLOAD_ERR_OK )
    {
      $urls[$i] = addslashes("ilr-events.s3.amazonaws.com/ilr_default.png");
    }
    else
    {
      for( $i = 0; $i < $numFiles; $i++ )
      {
        // random number to append to image for uniqueness
        srand(make_seed());
        $randval = rand();

        //retreive post variables
        $fileName = $_FILES['theFile']['name'][$i];
        $fileTempName = $_FILES['theFile']['tmp_name'][$i];

        // remove spaces in file name
        $fileName = preg_replace('/\s+/', '_', $fileName);

        // get file info
        $fileInfo = pathinfo($fileName);
        
        // add random number and original file extension to file name
        $fileName = $fileInfo['filename'] . $randval . "." . $fileInfo['extension'];

        // select S3 bucket
        $s3->putBucket("ilr-events", S3::ACL_PUBLIC_READ);
        
        //move the file to the S3 bucket
        if( $s3->putObjectFile($fileTempName, "ilr-events", $fileName, S3::ACL_PUBLIC_READ) )
        {
          echo "<strong>We successfully uploaded your file.</strong>";
        }
        else
        {
          echo "<strong>Something went wrong while uploading your file... sorry.</strong>";
        }

        // store array of picture urls
        $urls[$i] = $fileName;
        $urls[$i] = "ilr-events.s3.amazonaws.com/" . $fileName;
        $urls[$i] = addslashes( $urls[$i] );
      }
    }
  }
  $urls = base64_encode( serialize($urls) );

  // storing tags to be serialized in addEvent()
  $tag = array();
  foreach ( $_POST['tag'] as $key => $value )
  {
    $tag[$key] = $value;


  }
      
      $nonprofit=0;
      $fundraiser=0;
      $familyfriendly=0;
      $festival=0;
      $cause=0;
      $foodanddrink=0;
      $entertainment=0;
      $tedtalks=0;
      $beauty=0;
      $health=0;
      $neighborhood=0;
      $holiday=0;
      $grandopening=0;
      $laketahoe=0;
      $outdoor=0;
      $sports=0;
      $tradeshow=0;
      $happyhour=0;
      $foodtrucks=0;
      $education=0;
      $crawl=0;


      if( in_array( "nonprofit" , $tag ) )
        $nonprofit=1;
            if( in_array( "fundraiser" , $tag ) )
      $fundraiser=1;
          if( in_array( "familyfriendly" , $tag ) )
      $familyfriendly=1;
          if( in_array( "festival" , $tag ) )
      $festival=1;
          if( in_array( "cause", $tag ) )
      $cause=1;
          if( in_array( "foodanddrink" , $tag ) )
      $foodanddrink=1;
          if( in_array( "entertainment" , $tag ) )
      $entertainment=1;
          if( in_array( "tedtalks" , $tag ) )
      $tedtalks=1;
          if( in_array( "beauty" , $tag ) )
      $beauty=1;
          if( in_array( "health" , $tag ) )
      $health=1;
          if( in_array( "neighborhood" , $tag ) )
      $neighborhood=1;
          if( in_array( "holiday" , $tag ) )
      $holiday=1;
          if( in_array( "grandopening" , $tag ) )
      $grandopening=1;
          if( in_array( "laketahoe" , $tag ) )
      $laketahoe=1;
          if( in_array( "outdoor" , $tag ) )
      $outdoor=1;
          if( in_array( "sports" , $tag ) )
      $sports=1;
          if( in_array( "tradeshow" , $tag ) )
      $tradeshow=1;
          if( in_array( "happyhour" , $tag ) )
      $happyhour=1;
          if( in_array( "foodtrucks" , $tag ) )
      $foodtrucks=1;
          if( in_array( "education" , $tag ) )
      $education=1;
          if( in_array( "crawl" , $tag ) )
      $crawl=1;


  // finally add the event into ilr_event DB
  $eventsID = addEvent( $title, $start_date_time, $end_date_time, $location, $description, $phone, $email, $mytext, $urls, $approved );

  // finally add the tags to a related tag table record
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
?>
