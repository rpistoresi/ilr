<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/wp-content/themes/ilrtheme/images/thumbnail/favicon.ico" />
    <title>Events Submission</title>
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/ilrtheme/css/base.css">
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/ilrtheme/css/subscribe.css">
    <script type="text/javascript" src="/wp-content/themes/ilrtheme/vendor/jquery.min.js"></script>
    <script type="text/javascript" src="/wp-content/themes/ilrtheme/vendor/noframework.waypoints.min.js"></script>
    <script type="text/javascript" src="/wp-content/themes/ilrtheme/vendor/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="/wp-content/themes/ilrtheme/js/responsive-nav.js"></script>
    <script type="text/javascript" src="/wp-content/themes/ilrtheme/vendor/swiper.jquery.js"></script>
    <script type="text/javascript" src="/wp-content/themes/ilrtheme/js/form-submit.js"></script>
    <script type="text/javascript" src="/wp-content/themes/ilrtheme/js/popup.js"></script>
    <script type="text/javascript" src="/wp-content/themes/ilrtheme/js/reveal-animation.js"></script>
    <script type="text/javascript" src="/wp-content/themes/ilrtheme/js/bg-videos.js"></script>
    <script type="text/javascript" src="/wp-content/themes/ilrtheme/js/background-parallax.js"></script>
    <script type="text/javascript" src="/wp-content/themes/ilrtheme/js/page-script.js"></script>
    <script type="text/javascript" src="css/datetimepicker_css.js"></script>
    <script type="text/javascript" src="vendor/jquery.min.js"></script>
    <script type="text/javascript" src="js/events.js"></script>
    <script type="text/javascript" src="js/imageUpload.js"></script>

    <!-- Include jQuery file here -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="/wp-content/themes/ilrtheme/js/processing.js"></script>

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
</head>
<body>

</script>
    <div class="b-content hide-footer">
        <form id="form_4" class="fr-widget fr-form fr-wf fr_form_4 fr-link" method="POST" action="insertevent.php" data-fr-collect-data="insertevent.php" enctype="multipart/form-data" target="_blank">
            <div id="text_79" class="fr-widget fr-text fr-wf fr_text_bright_center fr_text_79">
                <div class="fr-text">
                    <h2>Events Submission</h2>
                </div>
            </div><!--
         --><div id="input_6" class="fr-widget fr-input fr-wf fr_input_6"> <input type="text" required class="fr_input_6" placeholder="Title of event" name="title">
            </div>
            <div id="input_11" class="fr-widget fr-input fr-wf fr_input_11"> <textarea type="text" required class="fr_input_11" placeholder="Description of event" name="description"></textarea>
            </div><!--
         -->
            <div id="input_11" class="fr-widget fr-input fr-wf fr_input_11">
                <input required readonly="readonly" placeholder="Start Date & Time ie. 04-29-2017 03:00PM" type="text" id="startDateAndTime" class="fr_input_11" maxlength="25" size="25" name="start_date_time"/>
                    <img src="images/thumbnail//cal.gif" onclick="javascript:NewCssCal ('startDateAndTime','MMddyyyy','arrow',true,'12', false, 'future')" style="cursor:pointer"/>
            </div>
            <div id="input_11" class="fr-widget fr-input fr-wf fr_input_11">
                <input required readonly="readonly" placeholder="End Date & Time ie. 04-29-2017 07:00PM" type="text" id="endDateAndTime" class="fr_input_11" maxlength="25" size="25" name="end_date_time"/>
                    <img src="images/thumbnail//cal.gif" onclick="javascript:NewCssCal ('endDateAndTime','MMddyyyy','arrow',true,'12', false, 'future')" style="cursor:pointer"/>
            </div>
            <div id="input_11" class="fr-widget fr-input fr-wf fr_input_11"> <input required type="text" class="fr_input_11" placeholder="Location of event" name="location">
            </div>
            <div id="input_11" class="fr-widget fr-input fr-wf fr_input_11"> <input type="phone" class="fr_input_11" placeholder="Phone number (optional)" name="phone">
            </div>
            <div id="input_11" class="fr-widget fr-input fr-wf fr_input_11"> <input type="email" class="fr_input_11" placeholder="Your email address (optional)" name="email">

            </div><!--
         -->
            <div class="event-tags" style="float: none;
              width: 90%;
              font-family: Roboto;
              font-weight: 300;
              vertical-align: top;
              margin-right: auto;
              margin-left: auto;
              max-width: 400px;
              padding-top: 20px;
              color: white;">
                <legend>Tags (Please select at least one tag) </legend>
                <br/>   
                <input type="checkbox" name="tag[]" value="nonprofit" > Non-Profit
                <input type="checkbox" name="tag[]" value="fundraiser" > Fundraiser
                <input type="checkbox" name="tag[]" value="familyfriendly" > Family Friendly
                <input type="checkbox" name="tag[]" value="festival" > Festival <br/>
                <input type="checkbox" name="tag[]" value="cause" > Cause
                <input type="checkbox" name="tag[]" value="foodanddrink" > Food & Drink
                <input type="checkbox" name="tag[]" value="entertainment" > Entertainment
                <input type="checkbox" name="tag[]" value="tedtalks" > Ted Talks <br/>
                <input type="checkbox" name="tag[]" value="beauty" > Beauty
                <input type="checkbox" name="tag[]" value="health" > Health
                <input type="checkbox" name="tag[]" value="neighborhood" > Neighborhood
                <input type="checkbox" name="tag[]" value="holiday" > Holiday <br/>
                <input type="checkbox" name="tag[]" value="grandopening" > Grand Opening
                <input type="checkbox" name="tag[]" value="laketahoe" > Lake Tahoe
                <input type="checkbox" name="tag[]" value="outdoor" > Outdoor
                <input type="checkbox" name="tag[]" value="sports" > Sports <br/>
                <input type="checkbox" name="tag[]" value="tradeshow" > Tradeshow
                <input type="checkbox" name="tag[]" value="happyhour" > Happy Hour 
                <input type="checkbox" name="tag[]" value="foodtrucks" > Food Trucks <br/>
                <input type="checkbox" name="tag[]" value="education" > Education
                <input type="checkbox" name="tag[]" value="crawl" > Crawl
                <input type="checkbox" name="tag[]" value="other" > Other
            </div>

            <!-- EXTERNAL LINKS OPTION -->
            <div id="input_11" class="fr-widget fr-input fr-wf fr_input_11">
                <input class="fr_input_11" placeholder="External link (i.e. www.ilovereno.com)" type="text" name="mytext" / >
            </div>

            <!-- IMAGES UPLOAD -->
            <div id="input_11" class="fr-widget fr-input fr-wf fr_input_11 form-wrap">
                <p style="color: white">Upload Images (optional)</p>
                <input style="color:white" name="theFile[]" type="file" multiple="multiple">
                <p style="color:red">*Please wait while files upload. Message will display once completed.</p>
            </div>

            <a id="text_80" class="fr-widget fr-text fr-wf fr_button fr_text_80 fr-link fr-linktype-submit" tabindex="0">
                <div class="fr-text">Submit</div>
            </a>
            <button type="submit" id="checkBtn'" style="display:none"></button>
            <div class="fr-form-submit-popup js-fr-success-form-submit">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 73 58" height="58" width="73" version="1.1"><g transform="translate(-13.464 -19.579)" stroke="#35b848" stroke-width="10" fill="none"><polyline points="17 51.8 35.7 70.5 82.2 24" stroke="#35b848"/></g></svg>
                <h6>Thank you!</h6>
                Event submitted for approval!
            </div>
            <div class="fr-form-submit-popup js-fr-error-form-submit">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 51" height="51" width="52" version="1.1"><g fill="none" transform="translate(-21.294 -21.687)"><g stroke-width="10" stroke="#ed5550"><g transform="translate(28,29)"><path d="m0.4 0.4 36.7 36.3M1 0.4l36.7 36.3"/><path d="m1 0.4 36.7 36.3" transform="matrix(-1 0 0 1 38.616 0)"/></g></g></g></svg>
                <h6>Error!</h6>
                Error, form was not successfully submitted.
            </div>
        </form>
    </div>
    <div id="footer-assets">
    </div>
</body>
</html>