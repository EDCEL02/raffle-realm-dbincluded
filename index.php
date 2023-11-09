<!DOCTYPE html>
<link href="img/RR.png" rel="icon">
<html lang="en">
    <body>     
 
    <?php
ob_start(); // Start output buffering
include 'php/header.php';
ob_end_clean(); // Discard the buffer contents without sending them to the output
?>
        <!-- HEADER -->
        <?php

          
            $_SESSION['UserID'] = $_SESSION['user_id'];
            $userID = $_SESSION['UserID'];
          
        ?>
        <!-- HEADER END -->
    <head>
        <meta charset="utf-8">
        <title>Raffle Realm</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Favicon -->
        <link href="img/RR.png" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>     
        <!-- Nav Bar Start -->
        <div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="index.php" class="nav-item nav-link">Home</a>
                            <a href="login.php" class="nav-item nav-link">Categories</a>
                            <a href="login.php" class="nav-item nav-link">Dashboard</a>
                            <a href="login.php" class="nav-item nav-link">Sell</a>
                            <a href="login.php" class="nav-item nav-link">Cart</a>
                        </div>

                       <div class="navbar-nav ml-auto">
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">User Account</a>
                                <div class="dropdown-menu">
                                    <a href="login.php" class="dropdown-item">Log In</a>
                                    <a href="signup.php" class="dropdown-item">Sign Up</a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->      
        
        <!-- Bottom Bar Start -->
        <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="index.html">
                                <img src="img/R.gif" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="search">
                            <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="user">

                            <a href="login.php" class="btn wishlist">
                                <i class="fa fa-user"></i>
                                <span>(0)</span>
                            </a>

                            <a href="login.php" class="btn wishlist">
                                <i class="fa fa-home"></i>
                                <span>(0)</span>
                            </a>
                            
                            <a href="login.php" class="btn cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span>(0)</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Bar End -->       
        <!-- Main Slider Start -->
        <div class="header">
            
            <div class="container-fluid">
                
        <!-- Brand Start -->
        <div class="brand">
            <div class="container-fluid">
                <div class="brand-slider">
                <div class="brand-item"><img src="img/6.png" alt=""></div>
                    <div class="brand-item"><img src="img/1.png" alt=""></div>
                    <div class="brand-item"><img src="img/2.png" alt=""></div>
                    <div class="brand-item"><img src="img/3.png" alt=""></div>
                    <div class="brand-item"><img src="img/4.png" alt=""></div>
                   
                    

                </div>
            </div>
        </div>
        <!-- Brand End -->      
                <div class="row">

                    <div class="col-md-9">
                        <div class="header-slider normal-slider">
                            <div class="header-slider-item">
                                <img src="img/slider-1.png" alt="Slider Image" />
                                <a class="img-text" href="">
                                    <p>Raffle Now!</p>
                                </a>

                            </div>

                            <div class="header-slider-item">
                                <img src="img/slider-2.png" alt="Slider Image" />
                                <a class="img-text" href="">
                                    <p>Raffle Now!</p>
                                </a>


                            </div>
                            <div class="header-slider-item">
                                <img src="img/slider-3.png" alt="Slider Image" />
                                <a class="img-text" href="">
                                    <p>Raffle Now!</p>
                                </a>

                            </div>
                            <div class="header-slider-item">
                                <img src="img/slider-4.png" alt="Slider Image" />
                                <a class="img-text" href="">
                                    <p>Raffle Now!</p>
                                </a>

                            </div>

                            <div class="header-slider-item">
                                <img src="img/slider-5.png" alt="Slider Image" />
                                <a class="img-text" href="">
                                    <p>Raffle Now!</p>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="header-img">
                            <div class="img-item">
                                <img src="img/category-1.png" />
                                <a class="img-text" href="">
                                    <p>Raffle Now!</p>
                                </a>
                            </div>
                            <div class="img-item">
                                <img src="img/category-2.png" />
                                <a class="img-text" href="">
                                    <p>Raffle Now!</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Slider End -->      
        




        
            
   


        <!--Categories-->
        <div class="categories">
            <div class="col-md-12">
                <h1>CATEGORIES</h1>
                <div class="categories-container">
                    
                    <table class="category-table">
                        <tr>
                            <td>
                                <a href="login.php">
                                <image src = "img/c1.png" alt="Women">
                                </a>
                                <p>Shirts</p>
                            </td>

                            <td>
                                <a href="login.php">
                                    <img src="img/c2.png" alt="Mobile">
                                </a>
                                <p>Mobile</p>
                            </td>

                            <td>
                                <image src = "img/c3.png"></image>
                                <p>Accessories</p>
                            </td>

                            <td>
                                <image src = "img/c4.png"></image>
                                <p>Entertainment</p>
                            </td>

                            <td>
                                <image src = "img/c5.png"></image>
                                <p>Babies</p>
                            
                            </td>

                            <td>
                                <image src = "img/c6.png"></image>
                                <p>Tools</p>
                            
                            </td>

                            <td>
                                <image src = "img/c7.png"></image>
                                <p>Toys</p>
                            
                            </td>

                            <td>
                                <image src = "img/c8.png"></image>
                                <p>Bag</p>
                            
                            </td>

                            <td>
                                <image src = "img/c9.png"></image>
                                <p>Eyeware</p>
                            
                            </td>
                            <td>
                                <image src = "img/c10.png"></image>
                                <p>earphones</p>
                            
                            </td>
                         
                        </tr>
                        <tr>
                            <td>
                                <image src = "img/c11.png"></image>
                                <p>Gaming</p>
                            
                            </td>

                            <td>
                                <image src = "img/c12.png"></image>
                                <p>Appliances</p>
                            
                            </td>

                            <td>
                                <image src = "img/c13.png"></image>
                                <p>Computers</p>
                            
                            </td>

                            <td>
                                <image src = "img/c14.png"></image>
                                <p>Photography</p>
                            
                            </td>

                            <td>
                                <image src = "img/c15.png"></image>
                                <p>Jewelry</p>
                            
                            </td>

                            <td>
                                <image src = "img/c16.png"></image>
                                <p>Footwear</p>
                            
                            </td>

                            <td>

                                <image src = "img/c17.png"></image>
                                <p>Motorcycle</p>
                            
                            </td>

                            <td>
                                <image src = "img/c18.png"></image>
                                <p>Art Mats</p>
                            
                            </td>

                            <td>
                                <image src = "img/c19.png"></image>
                                <p>Cosmetics</p>
                            
                            </td>
                            <td>
                                <a href="login.php">
                                <image src = "img/c20.png">
                                <p>Women's</p>
                                </a>
                            
                            </td>
                         </tr>
                    </table>
                    </div>
                </div>
            </div>
        </div>


                <!-- Newsletter Start -->
                <div class="newsletter" style = "background-color: #fa5330;">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <h1>FREE RAFFLE TICKETS!</h1>
                            </div>
                            <div class="col-md-6">
                                <div class="form">
                                    <input type="email" value="Gift Code">
                                    <button>Claim</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
                <!-- Newsletter End -->    
                
                <div id="purchase-form" class="purchase-form">
                                <div class = "purchase-form-content" id="ticketForm" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; background: #fff; padding: 20px; border: 1px solid #ccc; z-index: 999;">
                                    <span style="position: absolute; top: 10px; right: 10px; cursor: pointer;" onclick="closeForm()">×</span>
                                    <form id="ticketPurchaseForm" action="php/cart_tickets.php" method="post" onsubmit="return checkFormSubmission()">
                                        <div class="quantity">
                                            <div class="qty">
                                                <label for="ticketQuantity">Number of Tickets:</label>
                                                <button class="btn-minus" type="button" ><i class="fa fa-minus"></i></button>
                                                <?php echo '<input type="number" name="ticketQuantity" id="ticketQuantity" value="0" min="0" required style="width:80px; margin-bottom:10px;">';?>
                                                <button class="btn-plus" type="button" ><i class="fa fa-plus"></i></button>
                                            </div>
                                        </div>
                                        <input type="hidden" name="productId" id="productId">
                                        <button class="confirm-button" type="submit">Confirm</button>
                                 
                             </form>
                        </div>
                </div>
        
        <!--TOP DRAW -->
        <div class="featured-product product">
            <div class="container-fluid">
                 <div class="section-header" style = "background-color: #035abb;">
                    <h1 style = "color:white">TOP RAFFLES</h1>
                </div>


                 <!-- PRODUCT -->
                <div class="row align-items-center product-slider product-slider-4">

                    
                    <?php
                        include 'php/db_connect.php';

                        // Your SQL query to retrieve mobile phones excluding the current user's products
                        $sql = "SELECT * FROM raffle_products WHERE UserID != '$userID' AND Stock != 0 AND IsRaffled != 0 AND DrawType != 'daily_draw' ORDER BY TotalWinners DESC LIMIT 8  ";

                        $result = $conn->query($sql);

                        if ($result) {
                            // Loop through the results and display the products
                            while ($row = mysqli_fetch_assoc($result)) {
                                // Calculate progress percentage based on your logic
                                $progressPercentage = ($row['TicketPurchased'] / $row['TicketThreshold']) * 100;
                                $maxTicketQuantity = ($row['TicketThreshold'] - $row['TicketPurchased']);

                                // Output your HTML here using the data from $row
                                echo '<div class="col-lg-3">';
                                echo '    <div class="product-item">';
                                echo '        <div class="product-title">';
                                echo '            <a href="#">' . $row['ProductName'] . '</a>';
                                echo '            <div class="raffle-bar">';
                                echo '                <div class="progress-bar">';
                                echo '                    <div class="progress" style="width: ' . $progressPercentage . '%;"></div>';
                                echo '                </div>';
                                echo '                <div class="raffle-text">Till draw</div>';
                                echo '            </div>';
                                echo '        </div>';
                                echo '        <div class="product-image">';
                                echo '            <a href="login.php">';
                                echo '                <img src="' . str_replace('../', '', $row['PDThumbnail']) . '" alt="Product Image" class="hoverable-image" id="product-image">';
                                echo '            </a>';
                                echo '        </div>';
                                echo '        <div class="product-price">';
                                echo '            <h3><span>₱</span>' . $row['PricePerTicket'] . '</h3>';
                                echo '            <a class="btn add-tickets-btn" data-product-id="' . $row['ProductID'] . '" data-maxticket-quantity="' . $maxTicketQuantity . '"><i class="fa fa-shopping-cart"></i>Add Tickets</a>';
                                echo '        </div>';
                                echo '    </div>';
                                echo '</div>';
                               
                            }
                        } else {
                            echo "Error: " . mysqli_error($conn);
                        }
                        ?>
                                
                                
                            
                            
                    
                </div>
            </div>
        </div>
        <!-- Featured Product End -->       






        <!-- Featured Product 2 Start -->
        <div class="featured-product product">
            <div class="container-fluid">
                <div class="section-header" style = "background-color: #035abb;">
                    <h1 style = "color:white">DRAWING NEAR</h1>
                </div>


                 <!-- PRODUCT -->
                <div class="row align-items-center product-slider product-slider-4">

                    
                    <?php
                        include 'php/db_connect.php';

                        // Your SQL query to retrieve mobile phones excluding the current user's products
                        $sql = "SELECT * FROM raffle_products 
                                WHERE UserID != '$userID' AND Stock != 0 AND IsRaffled != 0 
                                AND DrawType != 'daily_draw'
                                ORDER BY (TicketPurchased / TicketThreshold) DESC 
                                LIMIT 8 ";

                        $result = $conn->query($sql);

                        if ($result) {
                            // Loop through the results and display the products
                            while ($row = mysqli_fetch_assoc($result)) {
                                // Calculate progress percentage based on your logic
                                $progressPercentage = ($row['TicketPurchased'] / $row['TicketThreshold']) * 100;
                                $maxTicketQuantity = ($row['TicketThreshold'] - $row['TicketPurchased']);

                                // Output your HTML here using the data from $row
                                echo '<div class="col-lg-3">';
                                echo '    <div class="product-item">';
                                echo '        <div class="product-title">';
                                echo '            <a href="#">' . $row['ProductName'] . '</a>';
                                echo '            <div class="raffle-bar">';
                                echo '                <div class="progress-bar">';
                                echo '                    <div class="progress" style="width: ' . $progressPercentage . '%;"></div>';
                                echo '                </div>';
                                echo '                <div class="raffle-text">Till draw</div>';
                                echo '            </div>';
                                echo '        </div>';
                                echo '        <div class="product-image">';
                                echo '            <a href="login.php">';
                                echo '                <img src="' . str_replace('../', '', $row['PDThumbnail']) . '" alt="Product Image" class="hoverable-image" id="product-image">';
                                echo '            </a>';
                                echo '        </div>';
                                echo '        <div class="product-price">';
                                echo '            <h3><span>₱</span>' . $row['PricePerTicket'] . '</h3>';
                                echo '            <a class="btn add-tickets-btn" data-product-id="' . $row['ProductID'] . '" data-maxticket-quantity="' . $maxTicketQuantity . '"><i class="fa fa-shopping-cart"></i>Add Tickets</a>';
                                echo '        </div>';
                                echo '    </div>';
                                echo '</div>';
                                
                            }
                        } else {
                            echo "Error: " . mysqli_error($conn);
                        }
                        ?>                    
                </div>
            </div>
        </div>
        </div>
        <!-- Featured Product End -->       


        
                <!-- DAILY DRAW -->
                <div class="featured-product product">
            <div class="container-fluid">



                 <!-- PRODUCT -->
                <div class="row align-items-center product-slider product-slider-4">

                    
                    <?php
                        include 'php/db_connect.php';

                        // Your SQL query to retrieve mobile phones excluding the current user's products
                        $sql = "SELECT * FROM raffle_products 
                                WHERE UserID != '$userID' AND Stock != 0 AND IsRaffled != 0 
                                AND DrawType = 'daily_draw'
                                ORDER BY (TicketPurchased / TicketThreshold) DESC 
                                LIMIT 8 ";

                        $result = $conn->query($sql);

                        if ($result) {
                            // Loop through the results and display the products
                            while ($row = mysqli_fetch_assoc($result)) {
                                // Calculate progress percentage based on your logic
                                $progressPercentage = ($row['TicketPurchased'] / $row['TicketThreshold']) * 100;
                                $maxTicketQuantity = ($row['TicketThreshold'] - $row['TicketPurchased']);

                                // Output your HTML here using the data from $row
                                echo '<div class="col-lg-3">';
                                echo '    <div class="product-item">';
                                echo '        <div class="product-title">';
                                echo '            <a href="#">' . $row['ProductName'] . '</a>';
                                echo '            <div class="raffle-bar">';
                                echo '                <div class="progress-bar">';
                                echo '                    <div class="progress" style="width: ' . $progressPercentage . '%;"></div>';
                                echo '                </div>';
                                echo '                <div class="raffle-text">Till draw</div>';
                                echo '            </div>';
                                echo '        </div>';
                                echo '        <div class="product-image">';
                                echo '            <a href="login.php">';
                                echo '                <img src="' . str_replace('../', '', $row['PDThumbnail']) . '" alt="Product Image" class="hoverable-image" id="product-image">';
                                echo '            </a>';
                                echo '        </div>';
                                echo '        <div class="product-price">';
                                echo '            <h3><span>₱</span>' . $row['PricePerTicket'] . '</h3>';
                                echo '            <a class="btn add-tickets-btn" data-product-id="' . $row['ProductID'] . '" data-maxticket-quantity="' . $maxTicketQuantity . '"><i class="fa fa-shopping-cart"></i>Add Tickets</a>';
                                echo '        </div>';
                                echo '    </div>';
                                echo '</div>';
                                echo $row['ProductID'];
                            }
                        } else {
                            echo "Error: " . mysqli_error($conn);
                        }
                        ?>                    
                </div>
            </div>
        </div>
        <!-- Featured Product End -->       



       
        
                   <!-- Newsletter Start -->
                   <div class="newsletter" style = "background-color: #fa5330;">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6" >
                                <h1>FREE RAFFLE TICKETS!</h1>
                            </div>
                            <div class="col-md-6">
                                <div class="form">
                                    <input type="email" value="Gift Code">
                                    <button>Claim</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h1 style = "color:#f5f5f5 ;">hehehehe</h1>

                <!-- Newsletter End -->         

                <!-- Feature Start-->
        
                <div class="feature">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-md-6 feature-col">
                                <div class="feature-content">
                                    <i class="fab fa-cc-mastercard"></i>
                                    <h2>Secure Payment</h2>

                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 feature-col">
                                <div class="feature-content">
                                    <i class="fa fa-truck"></i>
                                    <h2>Fast Shipping</h2>

                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 feature-col">
                                <div class="feature-content">
                                    <i class="fa fa-sync-alt"></i>
                                    <h2>Money Back Guarantee</h2>

                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 feature-col">
                                <div class="feature-content">
                                    <i class="fa fa-comments"></i>
                                    <h2>24/7 Support</h2>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Feature End-->  

         <!-- Footer Start-->  
        <?php include 'php/footer.php';?>
         <!-- Footer End-->  
   
        </body>
</html>
