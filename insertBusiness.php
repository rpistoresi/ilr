<?php include 'db_v2.php';
// INSERTING BUSINESS PAGE

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

  // escape input for business table query
  $name = addslashes( "$_POST[repname]" );  // variable name from subscriber.php
  $email = addslashes( "$_POST[businessemail]" );  
  $business = addslashes( "$_POST[businessname]" );  
  $phone = addslashes( "$_POST[businessphone]" );  //
  $address = addslashes( "$_POST[businessaddress]" );  // 
  $city = addslashes( "$_POST[businesscity]" );  // variable name from subscriber.php
  $state = addslashes( "$_POST[businessstate]" );  
  $zipcode = addslashes( "$_POST[businesszipcode]" );  
  $website = addslashes( "$_POST[businesswebsite]" );  
  $type = addslashes( "$_POST[businesstype]" );  
  $description = addslashes( "$_POST[businessdescription]" );  
  $wifi = addslashes("$_POST[businesswifi]");
  $wchair = addslashes("$_POST[businesswheelchair]");

  // discover selected options
  if($wifi == 'yes')
  {
  	$wifi = 1;

  }
  else if ($wifi == "no")
  {
  	$wifi = 0;
  }

  if($wchair == 'yes')
  {
  	$wchair = 1;
  }
  else if($wchair =='no')
  {
  	$wchair = 0;
  }

  // get all the image file names - if no file upload, store default images
  $numFiles = count( $_FILES['theFile']['name'] );

  for( $i = 0; $i < $numFiles; $i++ )
  {
    if( $_FILES['theFile']['error'][$i] !== UPLOAD_ERR_OK )
    {
      $urls[$i] = addslashes("ilr-business.s3.amazonaws.com/landscape-meadow-mountains.jpg");
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
        $s3->putBucket("ilr-business", S3::ACL_PUBLIC_READ);
        
        //move the file to the S3 bucket
        if( $s3->putObjectFile($fileTempName, "ilr-business", $fileName, S3::ACL_PUBLIC_READ) )
        {
          echo "<strong>We successfully uploaded your file.</strong>";
        }
        else
        {
          echo "<strong>Something went wrong while uploading your file... sorry.</strong>";
        }

        // store array of picture urls
        $urls[$i] = $fileName;
        $urls[$i] = "ilr-business.s3.amazonaws.com/" . $fileName;
        $urls[$i] = addslashes( $urls[$i] );
      }
    }
  }
  $urls = base64_encode( serialize($urls) ); /* encode image urls to store in DB */

  // insert business into ilr-business table
  $id = addBusiness( $name, $email, $business, $phone, $address, $city, $state, 
                     $zip, $website, $type, $description, $wifi, $wchair,  $urls );

  $banking = (isset($_POST['banking'])) ? 1 : 0;
  $food = (isset($_POST['food'])) ? 1 : 0;
  $coffee = (isset($_POST['coffee'])) ? 1 : 0;
  $recreation = (isset($_POST['recreation'])) ? 1 : 0;
  $family = (isset($_POST['family'])) ? 1 : 0;
  $nonprofit = (isset($_POST['nonprofit'])) ? 1 : 0;
  $other = (isset($_POST['other'])) ? 1 : 0;


  // insert business' type 
  addBusinessType( $id, $banking, $food, $coffee, $recreation, $family, $nonprofit, $other );
?>

<!-- RENE'S XTRA TESTING CODE IN A "SAFE" PLACE -->
<?php
 //  // checking for duplicate email
  // $sql = "SELECT * FROM ilr_business WHERE email = '$email' ";
  // $result = mysqli_query( $connection, $sql );

  // // display error message
 //  if( $result->num_rows > 0 )
 //  {
 //   session_start();
 //   $_SESSION["ERROR"] = 1;

 //   echo "business(S) ASSOCIATED WITH THIS EMAIL EXIST<br>" .
 //         "=============================<br><br>";
 //    while( $row = $result->fetch_assoc() ) {
 //          echo "<br> ID: ". $row["id"].
 //               " Name: ". $row["firstname"]. " ". $row["lastname"]. " ".
 //               " Email: ". $row["email"]. " ".
 //               " Zip: ". $row["zip"]. "<br>";
 //        }
 //    die( "Killing connection." . mysqli_error( $connection ) );
 //  }
//  //  else
//  //  {
?>