<?php
$event_cats = "";
$event_categories = array("Stoner Rock", "Rock", "Punk");
$event_title = "Wicked Event Title!";
$event_start = "2015-05-16 22:00:00";
$event_start = date("l, jS M Y",strtotime($event_start))." at ".date("H:i",strtotime($event_start));
$event_end = "2015-05-15 23:00:00";
$event_location = "Coca Cola Dome";
$event_area = "Johannesburg";
$event_price = "R100";
$event_price_desc = "2 for 1";
$event_ticket = "http://google.com";
$event_link = "http://facebook.com";
$event_description = "Lorum Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
$event_img = "http://kickitmob.com/android/events/images/default.jpg";
$share_img = "http://kickitmob.com/android/events/images/default.jpg";


?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Kickitmob</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="../assets/stylesheets/css/primary-theme.css">

        <link href='http://fonts.googleapis.com/css?family=Oxygen:400,700,300|Slabo+27px' rel='stylesheet' type='text/css'>

        <script>
            /* grunticon Stylesheet Loader | https://github.com/filamentgroup/grunticon | (c) 2012 Scott Jehl, Filament Group, Inc. | MIT license. */
            window.grunticon=function(e){if(e&&3===e.length){var t=window,n=!!t.document.createElementNS&&!!t.document.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect&&!!document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image","1.1"),A=function(A){var o=t.document.createElement("link"),r=t.document.getElementsByTagName("script")[0];o.rel="stylesheet",o.href=e[A&&n?0:A?1:2],r.parentNode.insertBefore(o,r)},o=new t.Image;o.onerror=function(){A(!1)},o.onload=function(){A(1===o.width&&1===o.height)},o.src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw=="}};
            grunticon( [ "../assets/stylesheets/css/utils/iconify/icons.svg.css", "../assets/css/utils/stylesheets/css/iconify/icons.png.css", "../assets/stylesheets/css/utils/css/iconify/icons.fallback.css" ] );
        </script>
        <noscript><link href="{{ STATIC_URL }}css/iconify/icons.png.css" rel="stylesheet"></noscript>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/conditionizr.js/4.1.0/conditionizr.min.js"></script>
        
    </head>
    <body>


        <header role="header">
            <a href="http://kickitmob.com" class="logo"></a>
            <nav role="nav">
                <a href="https://play.google.com/store/apps/details?id=za.co.purpleshoe.kickitmob"
                    class="download-app icon-store-google-play"></a>
            </nav>
        </header>

        <main role="main" class="event">

            <section class="hero">
                <div class="banner" style="background-image: url('../assets/images/banner/hero_default.jpg')"></div>
                <a href="#the-event-page" class="poster">
                    <div class='square-box-bordered '>
                        <div class='square-content' style="background-image: url(<?php echo "'" . $event_img . "'"; ?>);"></div>
                    </div>
                </a>
            </section>

            <section class="content">
                <h1><?php echo $event_title; ?></h1>
                <aside class="details">
                    <div class="detail icon-dollar-grey-dark">
                        <h4 class="title">Price</h4>
                        <ul class="no-list">
                            <li><b><?php echo $event_price; ?></b></li>
                            <li><?php echo $event_price_desc; ?></li>
                        </ul>
                    </div>
                    <div class="detail icon-calendar-grey-dark">
                        <h4 class="title">When</h4>
                        <p><?php echo $event_start; ?></p>
                        <?php 
                            if (!isset($event_end) && $event_end != "0000:00:00 00-00-00") {
                                echo "<p>" . $event_end . "</p>";
                            }
                        ?>
                    </div>
                    <div class="detail icon-location-grey-dark">
                        <h4 class="title">Where</h4>
                        <p><?php echo $event_location; ?></p>
                        <p><?php echo $event_area; ?></p>
                    </div>
                </aside>
                <div class="description">
                    <p><?php echo $event_description; ?></p>

                    <ul class="tags">
                    
                        <?php
                            
                            foreach ($event_categories as $category) {
                                echo "<li>
                                        <a href=\"#\" class=\"tag\">" . $category . "</a>
                                    </li>";
                            }
                            
                        ?>
                    </ul>

                </div>

                <?php
                
                if (strlen($event_ticket) != 0 || strlen($event_link) != 0) {
                    
                    echo "<nav class=\"button-group event-links\" role=\"nav\"><div class=\"button-group-row\">";
                    
                    if (strlen($event_ticket) != 0) {
                        echo "<a href=\"" . $event_ticket . "\" class=\"button-blue icon-ticket-white\" id=\"buy-ticket\">
                                Buy Tickets
                            </a>";
                    } else {
                        echo "<a href=\"#\" class=\"button-blue\" id=\"buy-ticket\">
                                
                            </a>";
                    }
                    
                    if (strlen($event_link) != 0) {
                        echo "<a href=\"" . $event_link . "\" class=\"button-grey-dark icon-link-white\" id=\"event-link\">
                                Event Link
                            </a>";
                    } else {
                        echo "<a href=\"#\" class=\"button-grey-dark\" id=\"event-link\">
                            </a>";    
                    }
                    
                    echo "</div></nav>";
                }
                ?>

            </section>
            
        </main>

        <footer role="contentinfo">
            
            <ul class="social">
                <li class="facebook">
                    <a href="#"></a>
                </li>
                <li class="twitter">
                    <a href="#"></a>
                </li>
                <li class="google-plus">
                    <a href="#"></a>
                </li>
                <li class="instagram">
                    <a href="#"></a>
                </li>
            </ul>

            <small class="copyright">
                &copy; Kickitmob 2015
            </small>
        </footer>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="../assets/scripts/vendor/sticky-kit.min.js"></script>

        <script src="../assets/scripts/scripts.js"></script>
        

    </body>
</html>
