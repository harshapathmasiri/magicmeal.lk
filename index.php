<?php session_start() ?>

<?php
$loggedStatus = 0;

if (isset($_SESSION["clientLogin"])) {
    if ($_SESSION["clientLogin"]) {
        $loggedStatus = 1;
    }
} else {
    $loggedStatus = 0;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="css/style_nav_footer.css" />
        <link rel="stylesheet" type="text/css" href="css/style_index.css" />
        <link rel="stylesheet" type="text/css" href="css/" />

        <script src="js/script.js"></script>

        <title>Home | Magic Meal</title>
        
        <!-- Favicon  -->
        <link rel="shortcut icon" href="images/Magic-Meal-Logo.png"/>
    </head>

    <body>
        <?php
        include_once("includes/navbar.php");
        ?>


        <div class="cover" id="coverImg">
            <div class="coverOverlay">
                <h1>Magic Meal Catering <br />Pick Your Dishes <br />for your occasion</h1>
                <div class="downArrow" id="idDownArrow">
                    <img id="idImgDownArrow" name="imgDownArrow" src="images/icons/downarrow2.png" width="100" onclick="scrollToAbout()" onmouseover="downArrowMouseOver()" onmouseout="downArrowMouseOut()"/>
                </div>
            </div>
        </div>

        <div class="content" id="idContent">
            <div class="aboutContainer">
                <h1 class="aboutTitle">WHO ARE WE?</h1>

                <table align="center" border="0" class="tblAbout">
                    <tr>
                        <td>
                            <div class="aboutDescription aboutContentCommon">
                                <p>
                                    
                                    We are a Food Catering Service "Magic Meal". 
                                    We provide the best services for our customers. 
                                    We are doing a super exciting thing when the food arranging.

                                </p>
                            </div>
                        </td>

                        <td>
                            <div class="map aboutContentCommon" id="idMap"></div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="content1">
            <h1 class="servTitle">Exclusive Magic Deals</h1>
            <table align="center" border="0" class="tblServCards">
                <tr>

                    <td>
                        <div class="weddings sCard">
                            <div class="servCardOverlay">
                                <a href="servWeddings.php" class="servCardOverlayBtnView">View More</a>
                            </div>
                            <div class="wedImg img">
                                <img src="images/service_cards/rice1.PNG" />
                                <p class="servCardTitle">Shrimp and Bacon Stir Fry Rice</p>
                            </div>



                            <div class="servCardDesc">
                                <p>Yes, shrimp and bacon totally go together, especially in a big bowl of fried rice goodness.</p>
                            </div>
                        </div>
                    </td>			

                    <td>
                        <div class="catering sCard">
                            <div class="servCardOverlay">
                                <a href="servCatering.php" class="servCardOverlayBtnView">View More</a>
                            </div>
                            <div class="caterImg img">
                                <img src="images/service_cards/rice2.PNG" />
                                <p class="servCardTitle">Easy Pineapple Fried Rice</p>
                            </div>

                            <div class="servCardDesc">
                                <p>Pineapple added to anything automatically makes it good. Fried rice is no exception; plus, you have the added bonus of this recipe being super easy..</p>
                            </div>
                        </div>
                    </td>

                    <td>
                        <div class="Functions sCard">
                            <div class="servCardOverlay">
                                <a href="servFuncNeeds.php" class="servCardOverlayBtnView">View More</a>
                            </div>
                            <div class="functionsImg img">
                                <img src="images/service_cards/image3.PNG" />
                                <p class="servCardTitle">Cauliflower Fried Rice</p>
                            </div>

                            <div class="servCardDesc">
                                <p>Eating your cauliflower never tasted so good. Mom would be proud.</p>
                            </div>
                        </div>
                    </td>

                </tr>

                <tr>

                    <td>
                        <div class="lights sCard">
                            <div class="servCardOverlay">
                                <a href="servLightSE.php" class="servCardOverlayBtnView">View More</a>
                            </div>
                            <div class="lightsImg img">
                                <img src="images/service_cards/rice4.PNG" />
                                <p class="servCardTitle">Ham Fried Rice</p>
                            </div>

                            <div class="servCardDesc">
                                <p>Want ham for dinner but think it seems a little, well, boring? Spruce it up with a nice dose of rice!0</p>
                            </div>
                        </div>
                    </td>

                    <td>
                        <div class="stages sCard">
                            <div class="servCardOverlay">
                                <a href="servStageHT.php" class="servCardOverlayBtnView">View More</a>
                            </div>
                            <div class="stagesImg img">
                                <img src="images/service_cards/rice5.PNG" />
                                <p class="servCardTitle">Vegetable Fried Rice</p>
                            </div>

                            <div class="servCardDesc">
                                <p>This vegetarian fried rice is great for so many reasons: tons of veggies, tons of flavor, tons of fill-you-up deliciousness.</p>
                            </div>
                        </div>
                    </td>

                    <td>
                        <div class="music sCard">
                            <div class="servCardOverlay">
                                <a href="servMusicIB.php" class="servCardOverlayBtnView">View More</a>
                            </div>
                            <div class="musicImg img">
                                <img src="images/service_cards/image6.PNG" />
                                <p class="servCardTitle">Baked Fried Brown Rice</p>
                            </div>

                            <div class="servCardDesc">
                                <p>Guess what? You don't even have to fry your fried rice — you can bake it! Yeah, crazytown, but it's true. You will love, love, love this rice.</p>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

        <?php
        include_once("includes/footer.php");
        ?>
        <script type="text/javascript">

        </script>

        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDz_qDNvKnEONeyMDwl0jRB8R39YkYDyiQ &callback=initMap" type="text/javascript"></script>


    </body>

</html>
