<!DOCTYPE html>
<html lang="en">

    <body>   
        <!-- Nav Bar Start-->    
        <?php include 'php/header.php';  
        include 'php/db_connect.php';  
        $productID = $_GET['productID'];
        $_SESSION['currentProductID'] = $productID;
        $_SESSION['UserID'] = $_SESSION['user_id'];
        $userID = $_SESSION['user_id'];

        
        ?>
        <!-- Nav Bar End -->      
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Categories</a></li>
                    <li class="breadcrumb-item"><a href="#">Mobile</a></li>
                    <li class="breadcrumb-item active">Product Detail</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Product Detail Start -->
        <div class="product-detail">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="product-detail-top">
                             <?php 

                             $sql = "SELECT * FROM raffle_products WHERE ProductID = $productID";
                             $sql2 = "SELECT * FROM raffle_cart WHERE ProductID = $productID AND UserID = $userID AND IsWon = 1";
                             $result = $conn->query($sql);
                             
                             if ($result->num_rows > 0) {
                                 $product = $result->fetch_assoc();
                             }
                             ?>

  

                            <div class="row align-items-center">
                                <div class="col-md-5">
                                    <div class="product-slider-single normal-slider">
                                        <?php echo'<img src="' . str_replace('../', '', $product['PDThumbnail']) . '" alt="Product Image" class="hoverable-image" id="product-image">';?>
                                        <?php echo'<img src="' . str_replace('../', '', $product['PDImg1']) . '" alt="Product Image" class="hoverable-image" id="product-image">';?>
                                        <?php echo'<img src="' . str_replace('../', '', $product['PDImg2']) . '" alt="Product Image" class="hoverable-image" id="product-image">';?>
                                        <?php echo'<img src="' . str_replace('../', '', $product['PDImg3']) . '" alt="Product Image" class="hoverable-image" id="product-image">';?>
                                        <?php echo'<img src="' . str_replace('../', '', $product['PDImg4']) . '" alt="Product Image" class="hoverable-image" id="product-image">';?>
                                        <?php echo'<img src="' . str_replace('../', '', $product['PDImg5']) . '" alt="Product Image" class="hoverable-image" id="product-image">';?>
                                        <?php echo'<img src="' . str_replace('../', '', $product['PDImg6']) . '" alt="Product Image" class="hoverable-image" id="product-image">';?>
                                    </div>
                                    <div class="product-slider-single-nav normal-slider">
                                        <div class="slider-nav-img"><img src="<?php echo str_replace('../', '', $product['PDThumbnail']); ?>" alt="Product Image" class="hoverable-image" id="product-image"></div>
                                        <div class="slider-nav-img"><img src="<?php echo str_replace('../', '', $product['PDImg1']); ?>" alt="Product Image" class="hoverable-image" id="product-image"></div>
                                        <div class="slider-nav-img"><img src="<?php echo str_replace('../', '', $product['PDImg2']); ?>" alt="Product Image" class="hoverable-image" id="product-image"></div>
                                        <div class="slider-nav-img"><img src="<?php echo str_replace('../', '', $product['PDImg3']); ?>" alt="Product Image" class="hoverable-image" id="product-image"></div>
                                        <div class="slider-nav-img"><img src="<?php echo str_replace('../', '', $product['PDImg4']); ?>" alt="Product Image" class="hoverable-image" id="product-image"></div>
                                        <div class="slider-nav-img"><img src="<?php echo str_replace('../', '', $product['PDImg5']); ?>" alt="Product Image" class="hoverable-image" id="product-image"></div>
                                        <div class="slider-nav-img"><img src="<?php echo str_replace('../', '', $product['PDImg6']); ?>" alt="Product Image" class="hoverable-image" id="product-image"></div>
                                        

                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="product-content">
                                        <div class="pd-raffle-bar">
                                                <div class="pd-progress-bar">
                                                    <div class="pd-progress"></div>
                                                </div>
                                                
                                        </div>
            
                                        <div class="title"><h1><?php echo $product['ProductName']; ?></h1></div>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>


                                        <div class="price">
                                            <h4>Total Winners:</h4>
                                            <p><?php echo $product['TotalWinners']; ?></p>
                                        </div>

                                        <div class="price">
                                            <h4>Ticket Price:</h4>
                                            <p>₱<?php echo $product['PricePerTicket']; ?></p>
                                        </div>
                                        <form action="php/cart_tickets_from_product-detail.php" method="post" id="quantityForm">
                                            <div class="quantity">
                                                <div class="qty" data-product-id="<?php echo $product['ProductID']; ?>">
                                                    <button type="button" class="btn-minus"><i class="fa fa-minus"></i></button>
                                                    <input type="text" value="0" readonly class="quantity-input" name="ticketQuantity">
                                                    <button type="button" class="btn-plus"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </div>

                                            <!-- Hidden input field to store the dynamic quantity value -->
                                            <input type="hidden" id="dynamicQuantity" name="dynamicQuantity">

                                            <div class="action">
                                                <button type="submit" class="btn add-to-cart-btn" name="addToCart"><i class="fa fa-shopping-cart"></i>Add to Cart</button>
                                            </div>
                                        </form>

                                        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                                        <script>
                                            $(document).ready(function () {
                                                $('.btn-minus, .btn-plus').on('click', function () {
                                                    var quantityValue = parseInt($('.quantity-input').val());

                                                    if ($(this).hasClass('btn-minus') && quantityValue > 1) {
                                                        
                                                    } else if ($(this).hasClass('btn-plus')) {
                                                    
                                                    }

                                                    $('.quantity-input').val(quantityValue);
                                                    $('#dynamicQuantity').val(quantityValue); // Update the hidden input value
                                                });
                                            });
                                        </script>


                                        

                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                     
                        <div class="row product-detail-bottom">
                            <div class="col-lg-12">
                                <ul class="nav nav-pills nav-justified">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="pill" href="#description">Description</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#specification">Specification</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#reviews">Winners' Reviews (1)</a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                <div id="description" class="container tab-pane active">
                                    <h4>Product description</h4>
                                    <span>
                                        <?php echo nl2br($product['ProductDescription']); ?>
                                    </span>
                                </div>

                                <div id="specification" class="container tab-pane fade">
                                    <h4>Product specification</h4>
                                    <span>
                                        <?php echo nl2br($product['ProductSpecification']); ?>
                                    </span>                              
                                </div>
                                    <div id="reviews" class="container tab-pane fade">
                                        <div class="reviews-submitted">
                                            <div class="reviewer">Maelyn Algar - <span>19 June 2023</span></div>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <p>
                                                Sinabihan ako ng aking boyfriend na sumali rito. Hinding hindi ako nagsisi
                                            </p>
                                        </div>

                                        <div class="reviews-submitted">
                                            <div class="reviewer">Ralph Edcel Fabian - <span>19 June 2023</span></div>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <p>
                                               OUUUUUUUUPOO~
                                            </p>
                                        </div>

                                        <?php
                                            // Assuming you have the $productID and $userID variables available
                                            $sql2 = "SELECT * FROM raffle_cart WHERE ProductID = $productID AND UserID = $userID AND IsWon = 1";
                                            // Perform the query and get the result
                                            // For example: $result = mysqli_query($conn, $sql2);
                                            $isWinner = mysqli_num_rows($result) > 0;
                                        ?>

                                            <div class="reviews-submit <?php echo $isWinner ? 'winner' : ''; ?>">
                                                <h4><strong>CONGRATULATIONS WINNER!</strong></h4>
                                                <h4>Give your Review:</h4>
                                                <div class="ratting">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <div class="row form">
                                                <div class="col-sm-6">
                                                    <input type="text" placeholder="Name">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="email" placeholder="Email">
                                                </div>
                                                <div class="col-sm-12">
                                                    <textarea placeholder="Review"></textarea>
                                                </div>
                                                <div class="col-sm-12">
                                                    <button>Submit</button>
                                                </div>
                                            </div>
                                        </div>

                                        <style>
                                            .reviews-submit.winner {
                                                /* Define styles for displaying the element when the user is a winner */
                                            }

                                            .reviews-submit {
                                                display: none; /* Default styles for hiding the element */
                                            }
                                        </style>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="product">

                            <div id="purchase-form" class="purchase-form">
                                <div class="purchase-form-content">
                                    <!-- Your form content goes here -->
                                    <h2>Number of Tickets</h2>
                                    <div class="ticket-selector">
                                        
                                        <div class="quantity">
                                            <button class="minus" onclick="decrementTicketCount()">&#8722;</button>
                                            <span id="ticket-count">1</span>
                                            <button class="plus" onclick="incrementTicketCount()">+</button>
                                        </div>
                                    </div>
                                   
                                    <button class="confirm-button" onclick="closePurchaseForm()">Confirm</button>
                                    <span class="close-form" onclick="closePurchaseForm()">&times;</span>
                                </div>
                            </div>

                            <!-- PDRP1 -->

                            <div class="row align-items-center product-slider product-slider-3">
                               
                                
                            </div>
                        </div>
                    </div>
                    
                    <!-- Side Bar Start -->
                    <div class="col-lg-4 sidebar">

                        
                        <div class="sidebar-widget widget-slider">

                            <div class="sidebar-slider normal-slider">

                                <!-- Side Bar PDRP1 -->
                                <div class="product-item">
                                    <div class="product-image">
                                        <a href="product-detail.html">
                                            <img src="img/seller-slider (1).jfif" alt="Product Image">
                                        </a>
                                    </div>
                                </div>
                                <!-- Side Bar PDRP1 -->
                                <div class="product-item">
                                    <div class="product-image">
                                        <a href="product-detail.html">
                                            <img src="img/seller-slider (2).jfif" alt="Product Image">
                                        </a>
                                    </div>
                                </div>
                                <!-- Side Bar PDRP1 -->
                                <div class="product-item">
                                    <div class="product-image">
                                        <a href="product-detail.html">
                                            <img src="img/seller-slider (3).jfif" alt="Product Image">
                                        </a>
                                    </div>
                                </div>
                                <!-- Side Bar PDRP1 -->
                                <div class="product-item">
                                    <div class="product-image">
                                        <a href="product-detail.html">
                                            <img src="img/seller-slider (4).jfif" alt="Product Image">
                                        </a>
                                    </div>
                                </div>
                                <!-- Side Bar PDRP1 -->
                                <div class="product-item">
                                    <div class="product-image">
                                        <a href="product-detail.html">
                                            <img src="img/seller-slider (5).jfif" alt="Product Image">
                                        </a>
                                    </div>
                                </div>
                                <!-- Side Bar PDRP1 -->
                                <div class="product-item">
                                    <div class="product-image">
                                        <a href="product-detail.html">
                                            <img src="img/seller-slider (6).jfif" alt="Product Image">
                                        </a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                        <div class="sidebar-widget brands">
                            <h2 class="title">Our Brands</h2>
                            <ul>
                                <li><a href="#">Xiaomi </a><span>(45)</span></li>
                                <li><a href="#">Apple</a><span>(34)</span></li>
                                <li><a href="#">Huawei </a><span>(67)</span></li>
                                <li><a href="#">Samsung</a><span>(74)</span></li>
                                <li><a href="#">POCO </a><span>(89)</span></li>
                                <li><a href="#">Realme</a><span>(28)</span></li>
                            </ul>
                        </div>
                        
                        <div class="sidebar-widget tag">
                            <h2 class="title">Tags Cloud</h2>
                            <a href="#">Smartphones</a>
                            <a href="#">Android</a>
                            <a href="#">iOS</a>
                            <a href="#">Mobile Apps</a>
                            <a href="#">Mobile Accessories</a>
                            <a href="#">Cellphone Reviews</a>
                            <a href="#">Tech Gadgets</a>
                            <a href="#">Phone Tips</a>
                            <a href="#">Wireless Charging</a>
                        </div>
                    </div>
                        
                    </div>
                    <!-- Side Bar End -->
                </div>
            </div>
        </div>
        <!-- Product Detail End -->
        
        <!-- Brand Start -->
        <div class="brand">
            <div class="container-fluid">
                <div class="brand-slider">
                    <div class="brand-item"><img src="img/brand-1.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-2.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-3.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-4.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-5.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-6.png" alt=""></div>
                </div>
            </div>
        </div>
        <!-- Brand End -->
        
        <!-- Footer Start -->
        <?php include 'php/footer.php'; ?>
        <!-- Footer End -->
        
 
    </body>
</html>
