<!DOCTYPE html>
<html lang="en">
   
    <body>
        <!-- Top bar End -->
        <?php include 'php/header.php'?>
        
        
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
                            <div class="row align-items-center">
                                <div class="col-md-5">
                                    <div class="product-slider-single normal-slider">
                                        <img src="img/pd-1.jfif" alt="Product Image">
                                        <img src="img/pd-2.jfif" alt="Product Image">
                                        <img src="img/pd-3.jfif" alt="Product Image">
                                        <img src="img/pd-4.jfif" alt="Product Image">
                                        <img src="img/pd-5.jfif" alt="Product Image">
                                        <img src="img/pd-6.jfif" alt="Product Image">
                                    </div>
                                    <div class="product-slider-single-nav normal-slider">
                                        <div class="slider-nav-img"><img src="img/pd-1.jfif" alt="Product Image"></div>
                                        <div class="slider-nav-img"><img src="img/pd-2.jfif" alt="Product Image"></div>
                                        <div class="slider-nav-img"><img src="img/pd-3.jfif" alt="Product Image"></div>
                                        <div class="slider-nav-img"><img src="img/pd-4.jfif" alt="Product Image"></div>
                                        <div class="slider-nav-img"><img src="img/pd-5.jfif" alt="Product Image"></div>
                                        <div class="slider-nav-img"><img src="img/pd-6.jfif" alt="Product Image"></div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="product-content">
                                        <div class="pd-raffle-bar">
                                                <div class="pd-progress-bar">
                                                    <div class="pd-progress"></div>
                                                </div>
                                                
                                        </div>
            
                                        <div class="title"><h1>Iphone 14 Pro Max</h1></div>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="price">
                                            <h4>Total Winners:</h4>
                                            <p>20</p>
                                        </div>

                                        <div class="price">
                                            <h4>Ticket Price:</h4>
                                            <p>$99</p>
                                        </div>

                                        <div class="quantity">
                                            <h4>Ticket Quantity:</h4>
                                            <div class="qty">
                                                <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                                <input type="text" value="1">
                                                <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                            </div>
                                        </div>
                                     
                                     

                                        <div class="action">
                                            <a class="btn" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                                            <a class="btn" href="#"><i class="fa fa-shopping-bag"></i>Buy Now</a>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="sd-addproduct-btn">
                            <button id="showFormBtn">Edit Product</button>
                            <div id="formContainer" class="hidden">
                                <div class="form-modal">
                                    <span class="close" id="closeFormBtn">&times;</span>
                                    <h2>Edit Product</h2>
                                    
                                    <div class="form-container">
                                        <form class="addproduct">
                                            <div class="form-group">
                                                <label for="productName">Product Name:</label>
                                                <input type="text" id="productName" name="productName" required>
                                            </div>
                            
                                            <div class="form-group">
                                                <label for="category">Category:</label>
                                                <select id="category" name="category" required>
                                                    <option value="category1">Category 1</option>
                                                    <option value="category2">Category 2</option>
                                                    <!-- Add more options as needed -->
                                                </select>
                                            </div>
                            
                                            <div class="form-group">
                                                <label for="productImages">Product Images:</label>
                                                <input type="file" id="productImages" name="productImages" accept="image/*" multiple required>
                                            </div>
                            
                                            <div class="form-group">
                                                <label for="ticketPrice">Ticket Price:</label>
                                                <input type="number" id="ticketPrice" name="ticketPrice" required>
                                            </div>
                            
                                            <div class="form-group">
                                                <label for="numTickets">Number of Tickets:</label>
                                                <input type="number" id="numTickets" name="numTickets" required>
                                            </div>
                            
                                            <div class="form-group">
                                                <label for="productDescription">Product Description:</label>
                                                <textarea id="productDescription" name="productDescription" rows="4" required></textarea>
                                            </div>
                            
                                            <div class="form-group">
                                                <label for="productSpecification">Product Specification:</label>
                                                <textarea id="productSpecification" name="productSpecification" rows="4" required></textarea>
                                            </div>
                            
                                            <button type="submit">Modify Changes</button>
                                        </form>
                                   
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
                                        <p>
                                            Elevate your mobile experience with the iPhone 14 Pro Max. This flagship device redefines the boundaries of smartphone technology, offering a perfect blend of style and performance.
                                        </p>
                                        
                                        <p><strong>Key Features:</strong></p>
                                        <p>
                                            <strong>ProRAW Photography:</strong> Capture stunning photos and videos with professional-grade quality.<br>
                                            <strong>A15 Bionic Chip:</strong> Experience blazing-fast performance and seamless multitasking.<br>
                                            <strong>Immersive Display:</strong> Enjoy a vibrant 6.7-inch Super Retina XDR display with ProMotion technology.<br>
                                            <strong>5G Connectivity:</strong> Stay connected with lightning-fast 5G speeds.<br>
                                            <strong>iOS 16:</strong> Benefit from Apple's latest operating system with enhanced privacy features.<br>
                                            <strong>All-Day Battery Life:</strong> Keep going all day with intelligent battery management.<br>
                                            <strong>Face ID:</strong> Secure your device and data with advanced facial recognition.<br>
                                            <strong>Durable Design:</strong> Built to last with Ceramic Shield and water/dust resistance.<br>
                                            <strong>Storage Options:</strong> Choose from a range of storage capacities to fit your needs.<br>
                                            <strong>MagSafe Compatibility:</strong> Easily enhance your device with MagSafe accessories.
                                        </p>
                                        
                                        <p>
                                            Elevate your mobile experience with the iPhone 14 Pro Max – where innovation meets elegance. Whether you're a photography enthusiast, a power user, or someone who appreciates the finer things in life, this device has something extraordinary to offer. Discover the future of mobile technology today.
                                        </p>
                                        
                                    </div>
                                    <div id="specification" class="container tab-pane fade">
                                        <h4>Product specification</h4>
                                       

                                        <p><strong>Display:</strong> 6.7-inch Super Retina XDR display with ProMotion technology</p>
                                        <p><strong>Processor:</strong> A15 Bionic chip with Neural Engine</p>
                                        <p><strong>Operating System:</strong> iOS 16</p>
                                        <p><strong>Storage Options:</strong> Available in 128GB, 256GB, 512GB, and 1TB</p>
                                        <p><strong>Camera System:</strong></p>
                                        <ul>
                                            <li>Main Camera: Triple 12MP system (Ultra Wide, Wide, Telephoto)</li>
                                            <li>ProRAW Photography support</li>
                                            <li>Night mode, Deep Fusion, Smart HDR 4</li>
                                        </ul>
                                        <p><strong>Front Camera:</strong> 12MP TrueDepth camera with Night mode, Deep Fusion, and 4K Dolby Vision HDR recording</p>
                                        <p><strong>5G Connectivity:</strong> Yes</p>
                                        <p><strong>Biometric Authentication:</strong> Face ID facial recognition</p>
                                        <p><strong>Battery Life:</strong> All-day battery life with fast charging and wireless charging support</p>
                                        <p><strong>Water and Dust Resistance:</strong> Rated IP68 (maximum depth of 6 meters up to 30 minutes)</p>
                                        <p><strong>Materials:</strong> Ceramic Shield front cover, Surgical-grade stainless steel frame</p>
                                        <p><strong>MagSafe Compatibility:</strong> Yes</p>
                                        <p><strong>Dimensions:</strong></p>
                                        <ul>
                                            <li>Height: X inches (XX mm)</li>
                                            <li>Width: X inches (XX mm)</li>
                                            <li>Depth: X inches (XX mm)</li>
                                        </ul>
                                        <p><strong>Weight:</strong> X ounces (XX grams)</p>
                                        
                                        
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

                                        <div class="reviews-submit">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="product">
                            <div class="section-header">
                                <h1>MY RAFFLED ITEMS</h1>
                            </div>
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
                                <div class="col-lg-3">
                                    <div class="product-item">
                                        <div class="product-title">
                                            <a href="#">Redmi Note 12</a>
                                            <div class="raffle-bar">
                                                <div class="progress-bar">
                                                    <div class="progress"></div>
                                                </div>
                                                <div class="raffle-text">Till draw</div>
                                            </div>
            
                                        </div>
                                        <div class="product-image">
                                            <a href="product-detail.html">
                                                <img src="img/pdrp-1.jfif" alt="Product Image" class="hoverable-image" id="product-image">
                                            </a>
                                           
                                        </div>
                                        <div class="product-price">
                                            <h3><span>$</span>99</h3>
                                            <a class="btn"><i class="fa fa-shopping-cart"></i>Add Tickets</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- PDRP2 -->
                            
                                <div class="col-lg-3">
                                    <div class="product-item">
                                        <div class="product-title">
                                            <a href="#">Mi Pad 6</a>
                                            <div class="raffle-bar">
                                                <div class="progress-bar">
                                                    <div class="progress"></div>
                                                </div>
                                                <div class="raffle-text">Till draw</div>
                                            </div>
            
                                        </div>
                                        <div class="product-image">
                                            <a href="product-detail.html">
                                                <img src="img/pdrp-2.jfif" alt="Product Image" class="hoverable-image" id="product-image">
                                            </a>
                                           
                                        </div>
                                        <div class="product-price">
                                            <h3><span>$</span>99</h3>
                                            <a class="btn"><i class="fa fa-shopping-cart"></i>Add Tickets</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- PDRP3 -->

                                <div class="col-lg-3">
                                    <div class="product-item">
                                        <div class="product-title">
                                            <a href="#">IPhone 12</a>
                                            <div class="raffle-bar">
                                                <div class="progress-bar">
                                                    <div class="progress"></div>
                                                </div>
                                                <div class="raffle-text">Till draw</div>
                                            </div>
            
                                        </div>
                                        <div class="product-image">
                                            <a href="product-detail.html">
                                                <img src="img/pdrp-3.jfif" alt="Product Image" class="hoverable-image" id="product-image">
                                            </a>
                                           
                                        </div>
                                        <div class="product-price">
                                            <h3><span>$</span>99</h3>
                                            <a class="btn"><i class="fa fa-shopping-cart"></i>Add Tickets</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- PDRP4 -->

                                <div class="col-lg-3">
                                    <div class="product-item">
                                        <div class="product-title">
                                            <a href="#">IPad 9th Gen</a>
                                            <div class="raffle-bar">
                                                <div class="progress-bar">
                                                    <div class="progress"></div>
                                                </div>
                                                <div class="raffle-text">Till draw</div>
                                            </div>
            
                                        </div>
                                        <div class="product-image">
                                            <a href="product-detail.html">
                                                <img src="img/pdrp-4.jfif" alt="Product Image" class="hoverable-image" id="product-image">
                                            </a>
                                           
                                        </div>
                                        <div class="product-price">
                                            <h3><span>$</span>99</h3>
                                            <a class="btn"><i class="fa fa-shopping-cart"></i>Add Tickets</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- PDRP5 -->

                                <div class="col-lg-3">
                                    <div class="product-item">
                                        <div class="product-title">
                                            <a href="#">IPhone 13</a>
                                            <div class="raffle-bar">
                                                <div class="progress-bar">
                                                    <div class="progress"></div>
                                                </div>
                                                <div class="raffle-text">Till draw</div>
                                            </div>
            
                                        </div>
                                        <div class="product-image">
                                            <a href="product-detail.html">
                                                <img src="img/pdrp-5.jfif" alt="Product Image" class="hoverable-image" id="product-image">
                                            </a>
                                           
                                        </div>
                                        <div class="product-price">
                                            <h3><span>$</span>99</h3>
                                            <a class="btn"><i class="fa fa-shopping-cart"></i>Add Tickets</a>
                                        </div>
                                    </div>
                                </div>      
                                
                            </div>
                        </div>
                    </div>
                    
                    <!-- Side Bar Start -->
                    
                    <div class="col-lg-4 sidebar">
                        
                        <div class="sidebar-widget category">
                            
                            <h2 class="title">Category</h2>
                            <nav class="navbar bg-light">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fa fa-female"></i>Fashion & Beauty</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fa fa-child"></i>Kids & Babies Clothes</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fa fa-tshirt"></i>Men & Women Clothes</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fa fa-mobile-alt"></i>Gadgets & Accessories</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fa fa-microchip"></i>Electronics & Accessories</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        
                         <!-- Side Bar Products -->
                        <div class="sidebar-widget widget-slider">
                            <h2 class="title">Swift Draw</h2>
                            <div class="sidebar-slider normal-slider">

                                <!-- Side Bar PDRP1 -->
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Product Name</a>
                                       <div class="raffle-bar">
                                                <div class="progress-bar">
                                                    <div class="progress"></div>
                                                </div>
                                                <div class="raffle-text">Till draw</div>
                                            </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.html">
                                            <img src="img/pdrp-1.jfif" alt="Product Image">
                                        </a>
                                     
                                    </div>
                                    <div class="product-price">
                                        <h3><span>$</span>99</h3>
                                        <a class="btn"><i class="fa fa-shopping-cart"></i>Add Tickets</a>
                                    </div>
                                </div>
                                
                                <!-- Side Bar PDRP2 -->
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Product Name</a>
                                       <div class="raffle-bar">
                                                <div class="progress-bar">
                                                    <div class="progress"></div>
                                                </div>
                                                <div class="raffle-text">Till draw</div>
                                            </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.html">
                                            <img src="img/pdrp-2.jfif" alt="Product Image">
                                        </a>
                                     
                                    </div>
                                    <div class="product-price">
                                        <h3><span>$</span>99</h3>
                                        <a class="btn"><i class="fa fa-shopping-cart"></i>Add Tickets</a>
                                    </div>
                                </div>

                                <!-- Side Bar PDRP3 -->
                                  <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Product Name</a>
                                       <div class="raffle-bar">
                                                <div class="progress-bar">
                                                    <div class="progress"></div>
                                                </div>
                                                <div class="raffle-text">Till draw</div>
                                            </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.html">
                                            <img src="img/pdrp-3.jfif" alt="Product Image">
                                        </a>
                                      
                                    </div>
                                    <div class="product-price">
                                        <h3><span>$</span>99</h3>
                                        <a class="btn"><i class="fa fa-shopping-cart"></i>Add Tickets</a>
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
        <?php include 'php/footer.php'?>

    </body>
</html>
