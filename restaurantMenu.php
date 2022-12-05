<?php
  include 'includes/autoloader.inc.php'
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>DeliverEats | Food Delivery Service</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body style="background-color: whitesmoke">
    <div class="header">
      <div class="navBar">
        <div class="logo">
          <li><a href="placeholder">DeliverEats</a></li>
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
          <p>
            <?php
            $restaurantName = new DisplayRestaurant();
            $restaurantName->displayRestaurantName(1);
            ?>
          </p>
        </div>
        <div class="restuarantAddress">
          <p>
          <?php
            $restuarants = new DisplayRestaurant();
            $restuarants->displayRestaurantAddress(1);
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
        <div><h2>Starters</h2></div>
        <div class="grid-div">
          <div class="grid-cell">
            <div class="cellLeft">
              <div class="foodName"></div>
              <div class="buttonContainer">
                <button class="addToCart">Add to Cart</button>
              </div>
            </div>
            <div class="cellRight">
              <div></div>
            </div>
          </div>
          <div class="grid-cell">
            <div class="cellLeft">
              <div class="foodName"></div>
              <div class="buttonContainer">
                <button class="addToCart">Add to Cart</button>
              </div>
            </div>
            <div class="cellRight">
              <div></div>
            </div>
          </div>
          <div class="grid-cell">
            <div class="cellLeft">
              <div class="foodName"></div>
              <div class="buttonContainer">
                <button class="addToCart">Add to Cart</button>
              </div>
            </div>
            <div class="cellRight">
              <div></div>
            </div>
          </div>
          <div class="grid-cell">
            <div class="cellLeft">
              <div class="foodName"></div>
              <div class="buttonContainer">
                <button class="addToCart">Add to Cart</button>
              </div>
            </div>
            <div class="cellRight">
              <div></div>
            </div>
          </div>
          <div class="grid-cell">
            <div class="cellLeft">
              <div class="foodName"></div>
              <div class="buttonContainer">
                <button class="addToCart">Add to Cart</button>
              </div>
            </div>
            <div class="cellRight">
              <div></div>
            </div>
          </div>
          <div class="grid-cell">
            <div class="cellLeft">
              <div class="foodName"></div>
              <div class="buttonContainer">
                <button class="addToCart">Add to Cart</button>
              </div>
            </div>
            <div class="cellRight">
              <div></div>
            </div>
          </div>
        </div>
        <hr />
        <div><h2>Mains</h2></div>
        <div class="grid-div">
          <div class="grid-cell">
            <div class="cellLeft">
              <div class="foodName"></div>
              <div class="buttonContainer">
                <button class="addToCart">Add to Cart</button>
              </div>
            </div>
            <div class="cellRight">
              <div></div>
            </div>
          </div>
          <div class="grid-cell">
            <div class="cellLeft">
              <div class="foodName"></div>
              <div class="buttonContainer">
                <button class="addToCart">Add to Cart</button>
              </div>
            </div>
            <div class="cellRight">
              <div></div>
            </div>
          </div>
          <div class="grid-cell">
            <div class="cellLeft">
              <div class="foodName"></div>
              <div class="buttonContainer">
                <button class="addToCart">Add to Cart</button>
              </div>
            </div>
            <div class="cellRight">
              <div></div>
            </div>
          </div>
          <div class="grid-cell">
            <div class="cellLeft">
              <div class="foodName"></div>
              <div class="buttonContainer">
                <button class="addToCart">Add to Cart</button>
              </div>
            </div>
            <div class="cellRight">
              <div></div>
            </div>
          </div>
          <div class="grid-cell">
            <div class="cellLeft">
              <div class="foodName"></div>
              <div class="buttonContainer">
                <button class="addToCart">Add to Cart</button>
              </div>
            </div>
            <div class="cellRight">
              <div></div>
            </div>
          </div>
          <div class="grid-cell">
            <div class="cellLeft">
              <div class="foodName"></div>
              <div class="buttonContainer">
                <button class="addToCart">Add to Cart</button>
              </div>
            </div>
            <div class="cellRight">
              <div></div>
            </div>
          </div>
        </div>
        <hr />
        <div><h2>Desserts</h2></div>
        <div class="grid-div">
          <div class="grid-cell">
            <div class="cellLeft">
              <div class="foodName"></div>
              <div class="buttonContainer">
                <button class="addToCart">Add to Cart</button>
              </div>
            </div>
            <div class="cellRight">
              <div></div>
            </div>
          </div>
          <div class="grid-cell">
            <div class="cellLeft">
              <div class="foodName"></div>
              <div class="buttonContainer">
                <button class="addToCart">Add to Cart</button>
              </div>
            </div>
            <div class="cellRight">
              <div></div>
            </div>
          </div>
          <div class="grid-cell">
            <div class="cellLeft">
              <div class="foodName"></div>
              <div class="buttonContainer">
                <button class="addToCart">Add to Cart</button>
              </div>
            </div>
            <div class="cellRight">
              <div></div>
            </div>
          </div>
          <div class="grid-cell">
            <div class="cellLeft">
              <div class="foodName"></div>
              <div class="buttonContainer">
                <button class="addToCart">Add to Cart</button>
              </div>
            </div>
            <div class="cellRight">
              <div></div>
            </div>
          </div>
          <div class="grid-cell">
            <div class="cellLeft">
              <div class="foodName"></div>
              <div class="buttonContainer">
                <button class="addToCart">Add to Cart</button>
              </div>
            </div>
            <div class="cellRight">
              <div></div>
            </div>
          </div>
          <div class="grid-cell">
            <div class="cellLeft">
              <div class="foodName"></div>
              <div class="buttonContainer">
                <button class="addToCart">Add to Cart</button>
              </div>
            </div>
            <div class="cellRight">
              <div></div>
            </div>
          </div>
        </div>
        <hr />
      </div>
    </div>
    <div class="footer"></div>
  </body>
</html>
