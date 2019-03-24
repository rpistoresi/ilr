<?php 
    include "db_v2.php";
?>
<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="schema.DC" href="http://purl.org/dc/elements/1.1/">
    <link rel="shortcut icon" href="/wp-content/themes/ilrtheme/images/thumbnail/favicon.ico" />
    <title>Detailed Business</title>
    <meta name="DC.title" content="Detailed Events">
    <meta property="og:title" content="Detailed Events">
    <meta name="twitter:title" content="Detailed Events">
    <meta property="og:image" content="images/froont.png">
    <meta name="twitter:image" content="images/froont.png">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Detailed Events">
    <meta name="DC.language" scheme="ISO639-1" content="en"> 
    <script type="text/javascript" src="vendor/jquery.min.js"></script> 
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
    <script type="text/javascript" src="vendor/noframework.waypoints.min.js"></script>
    <script type="text/javascript" src="vendor/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/responsive-nav.js"></script>
    <script type="text/javascript" src="vendor/swiper.jquery.js"></script>
    <script type="text/javascript" src="js/form-submit.js"></script>
    <script type="text/javascript" src="js/popup.js"></script>
    <script type="text/javascript" src="js/reveal-animation.js"></script>
    <script type="text/javascript" src="js/bg-videos.js"></script>
    <script type="text/javascript" src="js/background-parallax.js"></script>
    <script type="text/javascript" src="js/page-script.js"></script>
    <script type="text/javascript">
        var fonts = {
            "Montserrat": {
                "family": "Montserrat",
                "source": "google",
                "subsets": [
                    "latin"
                ],
                "variants": [
                    "700",
                    "regular"
                ]
            },
            "Roboto": {
                "family": "Roboto",
                "source": "google",
                "subsets": [
                    "cyrillic",
                    "cyrillic-ext",
                    "greek",
                    "greek-ext",
                    "latin",
                    "latin-ext",
                    "vietnamese"
                ],
                "variants": [
                    "100",
                    "100italic",
                    "300",
                    "300italic",
                    "500",
                    "500italic",
                    "700",
                    "700italic",
                    "900",
                    "900italic",
                    "italic",
                    "regular"
                ]
            }
        };
    </script>
    <script type="text/javascript" src="vendor/webfontloader.js"></script>
    <script type="text/javascript" src="js/fontloader.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- STYLING FOR THE IMAGE CAROUSEL -->
    <style type="text/css">

        .carousel-inner {
            margin: 0 auto;
            width: 720px;
            height: 450px;
        }

        .carousel-inner > .item > img {
          display: block;
          margin: 0 auto;

          max-width:600px;
          max-height:400px;

          padding: 10px;
          width: auto;
          height: auto;
        }

        .carousel-indicators .active{
            border-color: black;
            background-color: white;
        }

        .carousel-indicators li {
            background-color: #fff;
            border-color: #232222;
        }

        @media screen and (max-width:768px) {
            .carousel-inner > .item > img {
              display: block;
              margin: 85px 0px 0px 160px;

              max-width:400px;
              max-height:300px;

              width: auto;  
              height: auto;
            }

        }

        @media screen and (max-width:480px) {
            .carousel-inner > .item > img {
              display: block;
              margin: 100px 0px 0px 50px;

              max-width:250px;
              max-height:200px;

              width: auto;
              height: auto;
            }
        }

    </style>
</head>
<body>
  <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="background-color: #232222;">
        <ol class="carousel-indicators">
            <?php
                // find event id from URL and output information
                $id = $_GET["id"];
                $row = findBusiness( $id );

                // unserialize image urls, loop through array based on size and create slides
                $images = unserialize( base64_decode( $row["imageurl"] ) );

                $count = count($images);
                for( $i = 0; $i < $count; $i++ )
                {
                  if($count > 1)
                  {
                    if( $i == 0 )
                    {
                        // create first active slide if theres more than one image
                        echo '<li data-target="#myCarousel" data-slide-to="0" class="active"></li>';
                    }
                    else
                    {
                        // if theres more than one image, create the next and increment date-slide-to
                        echo '<li data-target="#myCarousel" data-slide-to="' . $i . '"></li>';
                    }
                  }
                }
            ?>
        </ol>

        <div class="carousel-inner">
            <?php 
                // display first image as active
                echo '<div class="item active"><img src="http://' . $images[0] . '"/></div>';

                // loop through subsequent images of event
                for( $i = 1; $i < $count; $i++ )
                {
                    echo '<div class="item"><img src="http://' . $images[$i] . '"/></div>';
                }
            ?>
        </div>

      <a class="left carousel-control" data-target="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" data-target="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

    <div class="b-content hide-footer">
        <div id="content_14" class="fr-widget fr-container fr_content_14">
            <div id="c14_container" class="fr-widget fr-container fr_c14_container">
                <div id="text_62" class="fr-widget fr-text fr-wf fr_text_large_dark_center fr_text_62">
                    <div class="fr-text"></div>
                </div><!--
             --><div id="c14_2_column_grid" class="fr-widget fr-grid fr_c14_2_column_grid">
                    <div id="c14_text" class="fr-widget fr-container fr_c14_text">
                        <div id="c14_line" class="fr-widget fr-container fr_c14_line">
                        </div><!--
                     --><div id="text_63" class="fr-widget fr-text fr-wf fr_text_63">
                            <div class="fr-text">
                                <?php
                                    // find event id from URL and output information
                                    $id = $_GET["id"];
                                    $row = findBusiness( $id );
                                    echo '<h4 style="font-size: 24px;">' . stripslashes($row["businessname"]) . '</h4>';
                                    echo '<p style="font-size: 14px;">' . stripslashes($row["description"]) . '</p>';
                                ?>
                            </div>
                        </div>
                    </div><!--
                 --><div id="c14_container_two" class="fr-widget fr-container fr_c14_container_two">
                        <div id="c14_line_two" class="fr-widget fr-container fr_c14_line_two">
                        </div><!--
                     --><div id="text_64" class="fr-widget fr-text fr-wf fr_text_64">
                            <div class="fr-text">
                                <?php
                                    echo '<h4 style="font-size: 24px;">Information</h4>';

                                    // display wheel chair availability
                                    echo "<b>Wheel Chair Accessible: </b>";
                                    if( $row["Wchair"] == 1 )
                                    {
                                        echo 'Yes' . '<br>';   
                                    }
                                    else
                                    {
                                        echo 'No' . '<br>';
                                    }
                                    // display wifi availability
                                    echo "<b>Wifi: </b>";
                                    if( $row["wifi"] == 1 )
                                    {
                                        echo 'Yes' . '<br>';   
                                    }
                                    else
                                    {
                                        echo 'No' . '<br>';
                                    }

                                    $formattedPhone = formatPhoneNumber($row["phone"]);
                                    echo '<h4 style="font-size: 18px;">For More Information: </h4>';
                                    echo "<b>Phone: </b>" . $formattedPhone . '<br>';
                                    echo "<b>Email: </b>" . stripslashes($row["email"]) . '<br>';
                                    echo "<b>Website: </b>" . stripslashes($row["website"]) . '</p>';
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="footer-assets">
    </div>
</body>
</html>
<?php
    // function to format phone number display as (775) 777-5555
    function formatPhoneNumber($phoneNumber) {
        $phoneNumber = preg_replace('/[^0-9]/','',$phoneNumber);

        if(strlen($phoneNumber) > 10) {
            $countryCode = substr($phoneNumber, 0, strlen($phoneNumber)-10);
            $areaCode = substr($phoneNumber, -10, 3);
            $nextThree = substr($phoneNumber, -7, 3);
            $lastFour = substr($phoneNumber, -4, 4);

            $phoneNumber = '+'.$countryCode.' ('.$areaCode.') '.$nextThree.'-'.$lastFour;
        }
        else if(strlen($phoneNumber) == 10) {
            $areaCode = substr($phoneNumber, 0, 3);
            $nextThree = substr($phoneNumber, 3, 3);
            $lastFour = substr($phoneNumber, 6, 4);

            $phoneNumber = '('.$areaCode.') '.$nextThree.'-'.$lastFour;
        }
        else if(strlen($phoneNumber) == 7) {
            $nextThree = substr($phoneNumber, 0, 3);
            $lastFour = substr($phoneNumber, 3, 4);

            $phoneNumber = $nextThree.'-'.$lastFour;
        }
        return $phoneNumber;
    }
?>