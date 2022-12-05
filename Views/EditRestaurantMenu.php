<?php
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
                <li><a href="placeholder">Cart</a></li>
                <li><a href="placeholder">Login/Signup</a></li>
            </ul>
        </div>
    </div>
    <div class="contentSection">
        <div class="restaurantBackground">
            <div class="restaurantName">
                <h2>

                </h2>
            </div>
            <div class="restuarantAddress">
                <p>

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
                    $lineNo = 1;
                    
                        
                ?>

                <form id="submit-form" action="../.includes/UpdateMenu.inc.php" method="post">
                    <input type="text" value="<?php $foodData->displayFoodName($menuID, $lineNo);?>" id="foodName"
                        name="foodName">
                    <div></div>
                    <input type="number" value="<?php $foodData->displayFoodPrice($menuID, $lineNo);?>" id="price"
                        name="price">
                    <div></div>
                    <input type="text" value="<?php $foodData->displayFoodDesc($menuID, $lineNo);?>" id="foodDesc"
                        name="foodDesc">
                    <div></div>
                    <button type="submit" name="submit" id="submit">Save</button>
                </form>



            </div>
        </div>
        <div class="footer"></div>
</body>

</html>