<!DOCTYPE html>
<html lang="en">
<link href="img/RR.png" rel="icon">
    <link href="css/style.css" rel="stylesheet">
   
    <body>
        <!-- Header Start -->    
        <?php
            include 'php/header.php'; 
            include 'php/db_connect.php';
            $userID = $_SESSION['user_id'];
        ?>
        <!-- Header End-->    
 
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Categories</a></li>
                    <li class="breadcrumb-item active">Mobile</li>                   
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        


        <!--Categories-->
        <div class="categories">
            <div class="col-md-12">
                <h1>CATEGORIES</h1>
                <div class="categories-container">
                    
                    <table class="category-table">
                        <tr>
                            <td>
                                <a href="categories-shirts.php">
                                    <image src = "img/c1.png"></image>
                                <p>Shirts</p>
                            </td>

                            <td>
                                <a href="categories-mobile.php">
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
                            <a href="categories-women.php">
                                <image src = "img/c20.png"></image>
                            </a>
                                <p>Women's</p>
                            
                            
                            </td>
                         </tr>
                    </table>
                    </div>
                </div>
            </div>
        </div>

                <!-- Brand Start -->
                <div class="brand">
                    <div class="container-fluid">
                        <div class="brand-slider">
                            <div class="brand-item"><img src="img/slider-6.png" alt=""></div>
                            <div class="brand-item"><img src="img/slider-7.png" alt=""></div>
                            <div class="brand-item"><img src="img/slider-8.jfif" alt=""></div>
                            <div class="brand-item"><img src="img/slider-9.jfif" alt=""></div>
                            <div class="brand-item"><img src="img/slider-10.png" alt=""></div>
                            <div class="brand-item"><img src="img/slider-11.jfif" alt=""></div>
                        </div>
                    </div>
                </div>
                <!-- Brand End -->      
        


        <!-- Product List Start -->
        <div class="product-view">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="product-view-top">
                                    <h1>Mobile Devices</h1>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="product-search">
                                                <input type="email" value="Search">
                                                <button><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="product-short">
                                                <div class="dropdown">
                                                    <div class="dropdown-toggle" data-toggle="dropdown">Product short by</div>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item">Newest</a>
                                                        <a href="#" class="dropdown-item">Popular</a>
                                                        <a href="#" class="dropdown-item">Most sale</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="product-price-range">
                                                <div class="dropdown">
                                                    <div class="dropdown-toggle" data-toggle="dropdown">Ticket price range</div>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item">$0 to $50</a>
                                                        <a href="#" class="dropdown-item">$51 to $100</a>
                                                        <a href="#" class="dropdown-item">$101 to $150</a>
                                                        <a href="#" class="dropdown-item">$151 to $200</a>
                                                        <a href="#" class="dropdown-item">$201 to $250</a>
                                                        <a href="#" class="dropdown-item">$251 to $300</a>
                                                        <a href="#" class="dropdown-item">$301 to $350</a>
                                                        <a href="#" class="dropdown-item">$351 to $400</a>
                                                        <a href="#" class="dropdown-item">$401 to $450</a>
                                                        <a href="#" class="dropdown-item">$451 to $500</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php
                                include 'php/db_connect.php';
                                // Your SQL query to retrieve mobile phones excluding the current user's products
                                $sql = "SELECT * FROM raffle_products WHERE Category = 'Mobile' AND UserID != '$userID' AND Stock != 0 AND IsRaffled != 0";

                                $result = $conn->query($sql);

                                // Fetch the data into an associative array
                                $products = [];
                                while ($row = $result->fetch_assoc()) {
                                    $products[] = $row;
                                }

                                $itemsPerPage = 9;
                                // Close the database connection

                                $totalPages = ceil(count($products) / $itemsPerPage);

                                // Get the current page number
                                $page = isset($_GET['page']) ? $_GET['page'] : 1;

                                // Calculate the starting index for the current page
                                $startIndex = ($page - 1) * $itemsPerPage;
                                
                                // Array to store products
                                $sortedProducts = [];

                                
                                for ($i = $startIndex; $i < min($startIndex + $itemsPerPage, count($products)); $i++) {
                                    $product = $products[$i];
                                    $ticketPurchased = $product['TicketPurchased'];
                                    $ticketThreshold = $product['TicketThreshold'];
                                    
                                    //Max ticket quantity
                                    $maxTicketQuantity = max(0, $ticketThreshold - $ticketPurchased);
                                
                                    //Progress percentage
                                    $progressPercentage = ($ticketPurchased / $ticketThreshold) * 100;
                                
                                    // Store product details along with progress percentage
                                    $sortedProducts[] = [
                                        'product' => $product,
                                        'progressPercentage' => $progressPercentage,
                                        'maxTicketQuantity' => $maxTicketQuantity,
                                    ];
                                }

                                usort($sortedProducts, function ($a, $b) {
                                    return $b['progressPercentage'] - $a['progressPercentage'];
                                });
                                
                                    // Calculate progress percentage
                                foreach ($sortedProducts as $sortedProduct) {
                                    $product = $sortedProduct['product'];
                                    $progressPercentage = $sortedProduct['progressPercentage'];
                                    $maxTicketQuantity = $sortedProduct['maxTicketQuantity'];
                                
                                    echo '<div class="col-md-4">';
                                    echo '    <div class="product-item">';
                                    echo '        <div class="product-title">';
                                    echo '            <a href="#">' . $product['ProductName'] . '</a>';
                                    echo '            <div class="raffle-bar">';
                                    echo '                <div class="progress-bar">';
                                    echo '                    <div class="progress" style="width: ' . $progressPercentage . '%;"></div>';
                                    echo '                </div>';
                                    echo '                <div class="raffle-text">Till draw</div>';
                                    echo '            </div>';
                                    echo '        </div>';
                                    echo '        <div class="product-image">';
                                    echo '            <a href="product-detail.php?productID=' . $product['ProductID'] . '">';
                                    echo '                <img src="' . str_replace('../', '', $product['PDThumbnail']) . '" alt="Product Image" class="hoverable-image" id="product-image">';
                                    echo '            </a>';
                                    echo '        </div>';
                                    
                                    echo '        <div class="product-price">';
                                    echo '            <h3><span>₱</span>' . $product['PricePerTicket'] . '</h3>';
                                    echo '            <a class="btn add-tickets-btn" data-product-id="' . $product['ProductID'] . '" data-maxticket-quantity="' . $maxTicketQuantity . '"><i class="fa fa-shopping-cart"></i>Add Tickets</a>';
                                    echo '        </div>';
                                    echo '    </div>';
                                    echo '</div>';

                                    
                                }
                                
                                
                                // Display pagination links
                                echo '<div class="col-md-12">';
                                echo '<nav aria-label="Page navigation example">';
                                echo '<ul class="pagination justify-content-center">';
                                // Display previous arrow
                                echo '<li class="page-item ' . ($page == 1 ? 'disabled' : '') . '">';
                                echo '<a class="page-link" href="?page=' . max(1, $page - 1) . '" tabindex="-1">Previous</a>';
                                echo '</li>';

                                // Display page numbers
                                for ($i = 1; $i <= $totalPages; $i++) {
                                    echo '<li class="page-item ' . ($i == $page ? 'active' : '') . '">';
                                    echo '<a class="page-link" href="?page=' . $i . '">' . $i . '</a>';
                                    echo '</li>';
                                }

                                // Display next arrow
                                echo '<li class="page-item ' . ($page == $totalPages ? 'disabled' : '') . '">';
                                echo '<a class="page-link" href="?page=' . min($totalPages, $page + 1) . '">Next</a>';
                                echo '</li>';

                                echo '</ul>';
                                echo '</nav>';
                                echo '</div>';
                            ?>

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
                    <!-- Side Bar End -->
                </div>
            </div>
        </div>
        <!-- Product List End -->  
        
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
