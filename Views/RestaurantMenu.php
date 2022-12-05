<?php
  session_start();
  include '../.includes/AllClasses.inc.php'
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>DeliverEats | Food Delivery Service</title>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body style="background-color: whitesmoke">
    <div class="header">
        <div class="navBar">
            <div class="logo">
                <li><a href="placeholder" class="logo_link">LocalEats</a></li>
            </div>
            <ul id="ul_navBar">
                <input type="text" placeholder="What are you craving?" />
                <?php
                    if(isset($_SESSION["ID"])){

                ?>
                <li><a href="placeholder">Cart</a></li>
                <li><a href="placeholder"><?php echo Hello, $_SESSION["FName"];?></a></li>
                <?php
                    }
                    else{
                ?>
                <li><a href="placeholder">Cart</a></li>
                <li><a href="placeholder">Login/Signup</a></li>
                <?php
                    }
                ?>
            </ul>
        </div>
    </div>
    <div class="contentSection">
        <div class="restaurantBackground">
            <div class="restaurantName">
                <h2>
                    <?php
                	    $restaurantName = new RestaurantContr();
                        $restaurantName->displayRestaurantName(1);
                    ?>
                </h2>
            </div>
            <div class="restuarantAddress">
                <p>
                    <?php
                        $restuarantaddress = new RestaurantContr();
                        $restuarantaddress->displayRestaurantAddress(1);
                    ?>
                </p>
            </div>
        </div>
        <div class="restaurantDetails">
            <div class="menuBar">
                <ul id="ul_menuBar">
                    <li><a href="placeholder">Starters</a></li>
                    <li><a href="placeholder">Mains</a></li>
                    <li><a href="placeholder">Deserts</a></li>
                    <li><a href="placeholder">More Info</a></li>
                </ul>
            </div>
            <hr />
            <!-- Starters Section-->
            <div>
                <h2>Starters</h2>
            </div>
            <div class="grid-div">
                <?php
                    $foodData = new MenuContr();  
                    $menuID = 1;
                    $max = 9;
                        for($lineNo = 1; $lineNo <= $max; $lineNo++){     
                ?>
                <div class="grid-cell">
                    <div class="cellLeft">
                        <div class="foodName">
                            <h3 style="padding: 0px;">
                                <?php
                                    
                                    $foodData->displayFoodName($menuID, $lineNo);
                                    
                                
                                ?>
                            </h3>
                        </div>
                        <div class="foodDesc">
                            <p style="padding: 0px;">
                                <?php
                                    
                                
                                ?>
                            </p>
                        </div>
                    </div>
                    <div class="cellRight">
                        <br><br><br><br><br><br>
                        <button class="addToCart">Add to Cart</button>
                    </div>
                </div>
                <?php
                    }
                
                ?>

            </div>
            <hr />
            <!-- Mains Section-->
            <div>
                <h2>Mains</h2>
            </div>
            <div class="grid-div">
                <div class="grid-cell">
                    <div class="cellLeft">
                        <div class="foodName">
                            <h3 style="padding: 0px;">
                                <?php
                                
                                ?>
                            </h3>
                        </div>
                        <div class="foodDesc">
                            <p style="padding: 0px;">
                                <?php
                                    
                                
                                ?>
                            </p>
                        </div>
                    </div>
                    <div class="cellRight">
                        <br><br><br><br><br><br>
                        <button class="addToCart">Add to Cart</button>
                    </div>
                </div>
            </div>
            <hr />
            <!-- Desserts Section-->
            <div>
                <h2>Desserts</h2>
            </div>
            <div class="grid-div">
                <div class="grid-cell">
                    <div class="cellLeft">
                        <div class="foodName"></div>
                        <div class="foodDesc">

                        </div>
                    </div>
                    <div class="cellRight">
                        <br><br><br><br><br>
                        <button class="addToCart">Add to Cart</button>
                    </div>
                </div>
                <div class="grid-cell">
                    <div class="cellLeft">
                        <div class="foodName"></div>
                        <div class="foodDesc">

                        </div>
                    </div>
                    <div class="cellRight">
                        <br><br><br><br><br>
                        <button class="addToCart">Add to Cart</button>
                    </div>
                </div>
                <div class="grid-cell">
                    <div class="cellLeft">
                        <div class="foodName"></div>
                        <div class="foodDesc">

                        </div>
                    </div>
                    <div class="cellRight">
                        <br><br><br><br><br>
                        <button class="addToCart">Add to Cart</button>
                    </div>
                </div>
                <div class="grid-cell">
                    <div class="cellLeft">
                        <div class="foodName"></div>
                        <div class="foodDesc">

                        </div>
                    </div>
                    <div class="cellRight">
                        <br><br><br><br><br>
                        <button class="addToCart">Add to Cart</button>
                    </div>
                </div>
                <div class="grid-cell">
                    <div class="cellLeft">
                        <div class="foodName"></div>
                        <div class="foodDesc">

                        </div>
                    </div>
                    <div class="cellRight">
                        <br><br><br><br><br>
                        <button class="addToCart">Add to Cart</button>
                    </div>
                </div>
                <div class="grid-cell">
                    <div class="cellLeft">
                        <div class="foodName"></div>
                        <div class="foodDesc">

                        </div>
                    </div>
                    <div class="cellRight">
                        <br><br><br><br><br>
                        <button class="addToCart">Add to Cart</button>
                    </div>
                </div>
            </div>
            <hr />
        </div>
    </div>
    <div class="footer"></div>
</body>

</html>