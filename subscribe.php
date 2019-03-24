<?php
    include '../../../wp-load.php';
?>
<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/wp-content/themes/ilrtheme/images/thumbnail/favicon.ico" />
    <link rel="schema.DC" href="http://purl.org/dc/elements/1.1/">
    <title>Sign Up Page</title>
    <meta name="DC.title" content="Sign Up Page">
    <meta property="og:title" content="Sign Up Page">
    <meta name="twitter:title" content="Sign Up Page">
    <meta property="og:image" content="images/froont.png">
    <meta name="twitter:image" content="images/froont.png">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Sign Up Page">
    <meta name="DC.language" scheme="ISO639-1" content="en">
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
    <div class="b-content hide-footer">
        <form id="form_4" class="fr-widget fr-form fr-wf fr_form_4 fr-link" method="POST" action="insertsubscriber.php" data-fr-collect-data="insertsubscriber.php" enctype="multipart/form-data" target="_blank">
            <div id="text_79" class="fr-widget fr-text fr-wf fr_text_bright_center fr_text_79">
                <div class="fr-text">

                <h2>Subscribe</h2>
                </div>
            </div><!--
         --><div id="input_6" class="fr-widget fr-input fr-wf fr_input_6"> <input type="text" required class="fr_input_6" placeholder="First Name" name="fname">
            </div>
            <div id="input_11" class="fr-widget fr-input fr-wf fr_input_11"> <input type="text" required class="fr_input_11" placeholder="Last Name" name="lname">
            </div><!--
         --><div id="input_11" class="fr-widget fr-input fr-wf fr_input_11"> <input type="email" required class="fr_input_11" placeholder="Your email address" name="EMAIL">
            </div><!--
         --><div id="input_11" class="fr-widget fr-input fr-wf fr_input_11"> <input type="text" required class="fr_input_11" placeholder="Your zipcode e.g. 89523" name="ZIPCODE" pattern="[0-9]{5}">
            </div><!--
         --><!--
         --><a id="text_80" class="fr-widget fr-text fr-wf fr_button fr_text_80 fr-link fr-linktype-submit" tabindex="0">
                <div class="fr-text">Submit</div>
            </a><!--
         -->
            <button type="submit" style="display:none"></button>
            <div class="fr-form-submit-popup js-fr-success-form-submit">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 73 58" height="58" width="73" version="1.1"><g transform="translate(-13.464 -19.579)" stroke="#35b848" stroke-width="10" fill="none"><polyline points="17 51.8 35.7 70.5 82.2 24" stroke="#35b848"/></g></svg>
                <h6>Thank you for subscribing to I Love Reno!</h6>
            </div>
            <div class="fr-form-submit-popup js-fr-error-form-submit">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 51" height="51" width="52" version="1.1"><g fill="none" transform="translate(-21.294 -21.687)"><g stroke-width="10" stroke="#ed5550"><g transform="translate(28,29)"><path d="m0.4 0.4 36.7 36.3M1 0.4l36.7 36.3"/><path d="m1 0.4 36.7 36.3" transform="matrix(-1 0 0 1 38.616 0)"/></g></g></g></svg>
                <h6>Error!</h6>
                The data wasn't sent! Contact the site owner.
            </div>
        </form>
    </div>
    <div id="footer-assets">
    </div>
</body>

</html>