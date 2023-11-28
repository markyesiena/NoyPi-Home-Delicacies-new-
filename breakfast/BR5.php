<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link href='https://fonts.googleapis.com/css?family=Quando' rel='stylesheet'>
        <link rel="stylesheet" href="/NoyPi-Home-Delicacies/CSS.css" >
        <link rel="icon" type="image/png" href="/NoyPi-Home-Delicacies/img/logo.png">
        <title>Embusilog</title>
        <style>
            th{
                padding-top: 10px;
                padding-bottom: 5px;
                padding-left: 25px;
                padding-right: 25px;
                border: solid 1px;
            }
            td{
                padding-top: 10px;
                padding-bottom: 10px;
                padding-left: 25px;
                padding-right: 25px;
                border: solid 1px;
            }
        </style>
    </head>

    <body>
        <div class="nav" id="nav">
            <div class="navLine1">
                <div>
                    <a style="text-align: left; text-decoration: none; color: black;" href="/NoyPi-Home-Delicacies/index.php"><b>NoyPi</b> Home Delicacies</a>
                </div>
                <div class="group">
                    <svg class="icon" aria-hidden="true" viewBox="0 0 24 24"><g><path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path></g></svg>
                    <input placeholder="Search" type="search" class="input">
                </div>
                <div style="flex-basis: 25vw;"></div>
                <div class="inactiveNav1">
                    <a href="/NoyPi-Home-Delicacies/login.php" class="links">Account</a>
                </div>
                <div style="max-width: 100px;" class="inactiveNav1">
                    <a href="/NoyPi-Home-Delicacies/Cart.php"><img src="/NoyPi-Home-Delicacies/img/ShopCart.png" style="max-width: 30px; height: auto; display: inline; padding-right: 0;"></a>
                </div>
            </div>
            <div class="break"></div>
            <div class="linksNav">
                <a href="/NoyPi-Home-Delicacies/index.php" class="links">Home</a>
            </div>
            <div class="linksNav">
                <a href="/NoyPi-Home-Delicacies/custFeedback.php" class="links">Customer Feedback</a>
            </div>
            <div class="inactiveNav1">
                <a href="/NoyPi-Home-Delicacies/About.php" class="links">About</a>
            </div>
        </div>
        <br><br>
        <div class="vertAlign">
            <div class="box">
                <center>
                    <div class="content" style="display: flex; justify-content: center; align-items: center;">
                            <img src="/NoyPi-Home-Delicacies/breakfast/BR5.webp" class="toHover" style="border: 3px solid #fff; border-radius: 10px; width: fit-content; margin-right: 20px; max-width: 320px; ">
                        <div>
                            <h2>EMBUSILOG</h2>
                            <p  class="textDesc">Our signature embutido, carefully crafted with top-quality ground pork and a burst of flavors. Served with aromatic garlic fried rice and a perfectly cooked sunny-side-up egg, it's a blend of savory, sweet, and rich tastes in every bit</p>
                            <table cellspacing="0" style="text-align: center; border: solid 2px;">
                                <tr>
                                    <th colspan="3"><b>EMBUSILOG</b></th>
                                </tr>
                                <tr>
                                    <th>Regular Price</th>
                                    <th>Cook Time</th>
                                    <th>Servings</th>
                                </tr>
                                <tr>
                                    <td>100</td>
                                    <td>10 minutes</td>
                                    <td>1 Serving</td>
                                </tr>
                            </table>
                            <br><br>
                            <div class="addToCart">
                                <button class="links" onclick="addToCart(value)" id="addButton">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </center>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
<footer>
            <div class="footerCont">
                <h2>Contact Us:</h2>
                <div class="contactUs">
                    <div style="display: inline;">
                        <img src="/NoyPi-Home-Delicacies/img/facebook.png" class="footicon">
                    </div>
                    <div style="display: inline;">
                        <a href="https://www.facebook.com/" class="links" style="font-size: 110%;">Facebook</a>
                    </div>
                </div>
                <br>
                <div class="contactUs">
                    <div style="display: inline;">
                        <img src="/NoyPi-Home-Delicacies/img/instagram.png" class="footicon">
                    </div>
                    <div style="display: inline;">
                        <a href="https://www.instagram.com/" class="links" style="font-size: 110%;">Instagram</a>
                    </div>
                </div>
                <br>
                <div class="contactUs">
                    <div style="display: inline;">
                        <img src="/NoyPi-Home-Delicacies/img/twitter.png" class="footicon">
                    </div>
                    <div style="display: inline;">
                        <a href="https://twitter.com/" class="links" style="font-size: 110%;">Twitter</a>
                    </div>
                </div>
            </div>
        </footer>
        <script src="/NoyPi-Home-Delicacies/addToCart.js"></script>
        <script src="/NoyPi-Home-Delicacies/stickyHeader.js"></script>
    </body>
</html>
