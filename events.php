<?php  include "db_v2.php";?>
<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="schema.DC" href="http://purl.org/dc/elements/1.1/">
  <link rel="shortcut icon" href="/wp-content/themes/ilrtheme/images/thumbnail/favicon.ico" />
  <title>Events</title>
  <meta name="DC.title" content="Events">
  <meta property="og:title" content="Events">
  <meta name="twitter:title" content="Events">
  <meta property="og:image" content="images/froont.png">
  <meta name="twitter:image" content="images/froont.png">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Events">
  <meta name="DC.language" scheme="ISO639-1" content="en">
  <link rel="stylesheet" href="/wp-content/themes/ilrtheme/css/base.css">
  <link rel="stylesheet" type="text/css" href="/wp-content/themes/ilrtheme/style.css"/>
  <link rel="stylesheet" href="/wp-content/themes/ilrtheme/css/events.css">
  <link rel="stylesheet" type="text/css" href="/wp-content/themes/ilrtheme/css/font-awesome.min.css">
  <script type="text/javascript" src="vendor/jquery.min.js"></script>
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
  <script type="text/javascript" src="/wp-content/themes/ilrtheme/vendor/webfontloader.js"></script>
  <script type="text/javascript" src="/wp-content/themes/ilrtheme/js/fontloader.js"></script>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style type="text/css">
    /* Style the buttons inside the tab */
    div.tab .button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        font-size: 17px;
    }

    /* Change background color of buttons on hover */
    div.tab button:hover {
        background-color: #ddd;
    }

    /* Create an active/current tablink class */
    div.tab button.active {
        background-color: #ccc;
    }

    a:link {
      text-decoration: none;
    }

    .create-event a {
      width: 15%;

    @media screen and (max-width:768px) {
      .create-event a {
        width: 40%;
    }

  </style>
</head>
<body>
    <div id="nav_with_text_logo" class="fr-widget fr-container fr_nav_with_text_logo">
      <div id="navigation_dark_with_brand_name_2" class="fr-widget fr-navigation fr-navigation-active fr_navigation_dark_with_brand_name_2">
        <a id="brand_name_2" class="fr_brand_name_2" href="../../.." style="text-decoration: none;">
          <div style="color: white;"><i style="color: red; font-size: 24px;" class="fa fa-heart"></i>&nbsp;&nbsp;I Love Reno</div>
        </a>
        <div id="mobile_toggle_3" class="fr-widget fr-navigation-toggle fr_mobile_toggle_3">
            <div id="hamburger_icon_6" class="fr-widget fr-svg fr_hamburger_icon_6">
                <div class="fr-svg-inner">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" viewBox="0 0 73.2 61.6" xml:space="preserve"><path d="M4.2 8.6h64.7c2.3 0 4.2-1.9 4.2-4.3C73.2 1.9 71.3 0 68.9 0H4.2C1.9 0 0 1.9 0 4.3 0 6.7 1.9 8.6 4.2 8.6zM68.9 26.5H4.2C1.9 26.5 0 28.4 0 30.8c0 2.4 1.9 4.3 4.2 4.3h64.7c2.3 0 4.2-1.9 4.2-4.3C73.2 28.4 71.3 26.5 68.9 26.5zM68.9 53H4.2C1.9 53 0 54.9 0 57.3c0 2.4 1.9 4.3 4.2 4.3h64.7c2.3 0 4.2-1.9 4.2-4.3C73.2 54.9 71.3 53 68.9 53z"/></svg>
                </div>
            </div>
        </div>
        <div id="items_3" class="fr-widget fr-container fr_items_3">
            <a id="text01_3" class="fr-widget fr-text fr-wf fr_nav_item_bright_right_center fr_text01_3 fr-link" href="/wp-content/themes/ilrtheme/events.php">
                <div class="fr-text">Events</div>
            </a><!--
         --><a id="text02_3" class="fr-widget fr-text fr-wf fr_nav_item_bright_right_center fr_text02_3 fr-link" href="/wp-content/themes/ilrtheme/comingSoon.php" target="">
                <div class="fr-text">Explore</div>
            </a>
        </div>    
      </div>
    </div>

  <!-- EXPANDING SEARCH BAR AT THE TOP -->
<!--   <input style="margin-top: 20px; margin-right: auto; margin-left: auto;" class="fr-widget fr-wf fr_button_border_black" id="text_162" type="text" name="search" placeholder="Search.."> -->

  <!-- EVENT TAGS -->
  <div class="fr_cnt03_column_grid_5">
    <h3>Events</h3>

<?php
  if( isset($_GET["month"]) || $_GET["month"] == 'true' || (!isset($_GET["month"]) && !isset($_GET["tag"])) ){
    // set default time zone and get date information
    date_default_timezone_set("America/Los_Angeles");
    $currentMonth = date("m");
    $currentYear = date("Y");
    $startDate = $currentMonth . "-01-" . $currentYear;
    $endDate = "12-32-" . $currentYear;

    // calculate the current, last, and next month for query & display
    getUpdatedMonths( $month, $lastMonth, $nextMonth, $monthDisplay );

    // display current month in text with left and right arrows to select new month
    echo '
          <select onchange="location=this.value;" style="margin-bottom: 20px;">
            <option selected value="events.php?month=true">Explore by month</option>
            <option value="events.php?tag=true">Explore by category</option>
          </select>

          <div style="padding-top: 45px; text-align: center;">
            <a class="month-nav" style="padding-right: 20px; text-decoration: none;" href="events.php?month=' .  $lastMonth . '"><<</a>
            <span style="font-size: 25px; font-weight: bold; font-family: Montserrat;">' . $monthDisplay . '</span>
            <a class="month-nav" style="padding-left: 20px; text-decoration: none;" href="events.php?month=' .  $nextMonth . '">>></a>
          </div>';

    // format the date ranges selected
    $startDate = $month . "-01-" . $currentYear;
    $endDate = $month . "-32-" . $currentYear;

    // query database with date range and store result
    $result = getEventDateRange( $startDate, $endDate );
  }

  else if( isset($_GET["tag"]) )
  {
    echo 
    '
    <select onchange="location=this.value;" style="margin-bottom: 20px;">
      <option value="events.php?month=true">Explore by month</option>
      <option selected value="events.php?tag=true">Explore by category</option>
    </select>

    <div class="fr_cnt03_column_grid_5 tab fr_button_border_black" style="overflow: hidden; margin-bottom: 20px;">
      <a class="button" href="events.php?tag=nonprofit">Non-Profit</a>
      <a class="button" href="events.php?tag=fundraiser">Fundraiser</a>
      <a class="button" href="events.php?tag=familyfriendly">Family Friendly</a>
      <a class="button" href="events.php?tag=festival">Festival</a>
      <a class="button" href="events.php?tag=cause">Cause</a>
      <a class="button" href="events.php?tag=foodanddrink">Food & Drink</a>
      <a class="button" href="events.php?tag=entertainment">Entertainment</a>
      <a class="button" href="events.php?tag=tedtalks">Ted Talks</a>
      <a class="button" href="events.php?tag=beauty">Beauty</a>
      <a class="button" href="events.php?tag=health">Health</a>
      <a class="button" href="events.php?tag=neighborhood">Neighborhood</a>
      <a class="button" href="events.php?tag=holiday">Holiday</a>
      <a class="button" href="events.php?tag=grandopening">Grand Opening</a>
      <a class="button" href="events.php?tag=laketahoe">Lake Tahoe</a>
      <a class="button" href="events.php?tag=outdoor">Outdoor</a>
      <a class="button" href="events.php?tag=sports">Sports</a>
      <a class="button" href="events.php?tag=tradeshow">Tradeshow</a>
      <a class="button" href="events.php?tag=happyhour">Happy Hour</a>
      <a class="button" href="events.php?tag=foodtrucks">Food Trucks</a>
      <a class="button" href="events.php?tag=education">Education</a>
      <a class="button" href="events.php?tag=crawl">Crawl</a>
    </div>';

    if($_GET["tag"] != 'true'){
      $newTag = addslashes($_GET["tag"]);
      $result = getEventsByTag( $newTag );
      echo '<div style="padding-top: 45px; text-align: center;"></div>';
    }
  }
?>

  <!-- CREATE AN EVENT BUTTON -->
  <div class="create-event">
      <a class="fr_widget fr_button_border_black fr_text_163 fr-link" method="post" target="_blank" href="eventsForm.php">
        <div style="color: black;"><i class="fa fa-plus"></i>   Create an event</div>
      </a>
  </div>
  <hr />

<!-- DISPLAYING THE EVENTS -->
<?php

  // if events exist, display on page
  if( $result )
  {
    if( ( $result->num_rows ) > 0 )
    {
      for( $i = 0; $i < $result->num_rows; $i++ )
      {
        // get next individual event from db query result
        $row = $result->fetch_assoc();
        
        // retrieve images array
        $image = unserialize( base64_decode( $row["imageurl"] ) );

        if( $row != 0 )
        {
          if( ( $i % 2 ) == 0 ) /* even count events display picture on left */
          {
            echo '<div id="content_25" class="fr-widget fr-container fr_content_25">
                    <div id="cnt03_column_grid_3" class="fr-widget fr-grid fr_cnt03_column_grid_3">
                      <div id="cnt03_image_3" class="fr-widget fr-container fr_cnt03_image_3">' .

                        // output first iamge of event as default
                        '<img style="margin-left=200px; max-height: 400px" src="http://' . $image[0] . '" height=30% width=70%>

                      </div>
                        <div id="cnt03_paragraph_3" class="fr-widget fr-container fr_cnt03_paragraph_3">
                          <div id="text_163" class="fr-widget fr-text fr-wf fr_text_163">
                            <div class="fr-text">' .
                              // output title and description of event
                              '<h2>' . stripslashes($row["title"]) . '</h2>' .
                              '<p style="overflow:hidden; height: 100px;">' . stripslashes($row["description"]) . '</p>' .
                            '</div>
                          </div>
                            <a id="text_162" class="fr-widget fr-text fr-wf fr_button_border_black fr_text_162 fr-link" method="post" target="_blank" href="../ilrtheme/search.php?id=' . $row["id"] . '">
                              <div class="fr-text" style="color: black;">Learn more</div>
                            </a>
                        </div>
                    </div>
                  </div>
                  <hr style="color: black;"/>'; /* line dividing events */
          } 
          else /* odd count events display picture on right */
          {
            echo '<div id="content_25" class="fr-widget fr-container fr_content_25">
                    <div id="cnt03_column_grid_5" class="fr-widget fr-grid fr_cnt03_column_grid_5">
                      <div id="cnt03_image_3" class="fr-widget fr-container fr_cnt03_image_3">' .

                        // output first iamge of event as default
                        '<img style="margin-right=200px; max-height: 400px" src="http://' . $image[0] . '" height=30% width=70%>

                      </div>
                      <div id="cnt03_paragraph_3" class="fr-widget fr-container fr_cnt03_paragraph_3">
                        <div id="text_163" class="fr-widget fr-text fr-wf fr_text_163">
                          <div class="fr-text">' .
                            // output title and description of event
                            '<h2>' . stripslashes($row["title"]) . '</h2>' .
                            '<p style="overflow:hidden; height: 100px;">' . stripslashes($row["description"]) . '</p>' .
                          '</div>
                        </div>
                        <a id="text_162" class="fr-widget fr-text fr-wf fr_button_border_black fr_text_162 fr-link" method="post" target="_blank" href="../ilrtheme/search.php?id=' . $row["id"] . '">
                          <div class="fr-text" style="color: black;">Learn more</div>
                        </a>
                      </div>
                    </div>
                  </div>
                  <hr style="color: black;"/>'; /* line dividing events */
          }
        }
      }
    }
  }
  else /* no events found */
  {
    echo '
    <p style="text-align: center;">No event results were found, try selecting another month or category.</p>';
  }
?>
  <div id="footer_3" class="fr-widget fr-container fr_footer_3">
          <div id="f3_4_column_grid" class="fr-widget fr-grid fr_f3_4_column_grid">
              <a id="text_69" class="fr-widget fr-text fr-wf fr_text_69 fr-link" href="http://www.facebook.com/IHeartReno" target="_blank">
                  <div class="fr-text">Facebook</div>
              </a><!--
           --><a id="text_70" class="fr-widget fr-text fr-wf fr_text_70 fr-link" href="https://twitter.com/i_love_reno" target="_blank">
                  <div class="fr-text">Twitter</div>
              </a><!--
           --><a id="text_71" class="fr-widget fr-text fr-wf fr_text_71 fr-link" href="https://www.instagram.com/" target="_blank">
                  <div class="fr-text">Instagram</div>
              </a>
          </div><!--
       --><div id="text_73" class="fr-widget fr-text fr-wf fr_text_dark_center fr_text_73">
              <div class="fr-text">
                  <p>Copyright © 2017&nbsp;I Love Reno</p>
              </div>
          </div>
      </div>
  </div>

  <div id="footer-assets"></div>
</body>
</html>
<?php

// function to return the current, last, and next month for searching
function getUpdatedMonths( &$month, &$lastMonth, &$nextMonth, &$monthDisplay )
{
  $month = date('m');

  if( isset($_GET["month"]) && $_GET["month"] != 'true' )
  {
    $month = $_GET["month"];
  }
  if( $month == "01" )
  {
    $monthDisplay = "January";
    $lastMonth = "12";
    $nextMonth = "02";
  }
  elseif( $month == "02" )
  {
    $monthDisplay = "February";
    $lastMonth = "01";
    $nextMonth = "03";
  }
  elseif( $month == "03" )
  {
    $monthDisplay = "March";
    $lastMonth = "02";
    $nextMonth = "04";
  }
  elseif( $month == "04" )
  {
    $monthDisplay = "April";
    $lastMonth = "03";
    $nextMonth = "05";
  }
  if( $month == "05" )
  {
    $monthDisplay = "May";
    $lastMonth = "04";
    $nextMonth = "06";
  }
  if( $month == "06" )
  {
    $monthDisplay = "June";
    $lastMonth = "05";
    $nextMonth = "07";
  }
  elseif( $month == "07" )
  {
    $monthDisplay = "July";
    $lastMonth = "06";
    $nextMonth = "08";
  }
  elseif( $month == "08" )
  {
    $monthDisplay = "August";
    $lastMonth = "07";
    $nextMonth = "09";
  }
  elseif( $month == "09" )
  {
    $monthDisplay = "September";
    $lastMonth = "08";
    $nextMonth = "10";
  }
  if( $month == "10" )
  {
    $monthDisplay = "October";
    $lastMonth = "09";
    $nextMonth = "11";
  }
  if( $month == "11" )
  {
    $monthDisplay = "November";
    $lastMonth = "10";
    $nextMonth = "12";
  }
  elseif( $month == "12" )
  {
    $monthDisplay = "December";
    $lastMonth = "11";
    $nextMonth = "01";
  }
}

?>
