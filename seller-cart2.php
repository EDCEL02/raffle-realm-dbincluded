<!DOCTYPE html>
<html lang="en">

    <link href="img/RR.png" rel="icon">

    <?php

        include 'php/header.php'; 
        include 'php/db_connect.php';
        $userID = $_SESSION['user_id'];

        $isRaffledStatus = isset($_GET['isRaffled']) ? $_GET['isRaffled'] : 1; // Assuming 1 is the default status

        if (isset($_GET['toggle'])) {
            // Toggle the isRaffled status
            $isRaffledStatus = $isRaffledStatus == 1 ? 0 : 1;
        }
    


    ?>
   <body style="background-color: grey; font-family: Arial, Helvetica, sans-serif, sans-serif;">  
    <!-- Header Start -->    

    <!-- Header End-->    
        
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" style = "color:white">/ Seller's Dashboard</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- TABLE Start -->
        <div class="wishlist-page" style = "background-color:grey">
            <div class="container-fluid">
                <div class="wishlist-page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                <thead class="thead-dark">
                                    <tr class="text-center">
                                        <th style = background-color:blanchedalmond;>Product</th>
                                        <th style = background-color:blanchedalmond;>Category</th>
                                        <th style = background-color:blanchedalmond;>Raffle Progress</th>
                                        <th style = background-color:blanchedalmond;>Price</th>
                                        <th style = background-color:blanchedalmond;>Stocks</th>
                                        <th style = background-color:blanchedalmond;>Winners</th>
                                        <th style = background-color:blanchedalmond;>Revenue</th>
                                        <th style = background-color:blanchedalmond;>Edit</th>
                                        <th style = background-color:blanchedalmond;>Enable</th>
                                    </tr>
                                </thead>
                                <tbody class="align-middle text-center">
                                <div style="display: flex; justify-content: space-between; width: 100%;">
                                    <h1>RAFFLED PRODUCTS</h1>
                                    <button class="btn-cart" style="border-radius: 10px; margin-bottom: 20px; padding: 0 20px; background-color:red;" onclick="redirect()">
                                        <?php echo $isRaffledStatus == 1 ? 'Inactive Raffles' : 'Inactive'; ?>
                                    </button>

                                </div>

                                <script>
                                function redirect() {
                                    // Replace 'target-page.html' with the URL of the page you want to redirect to
                                    window.location.href = 'seller-cart.php';
                                }
                                </script>

                                <script>
                                    function banProduct(productId) {
                                        // Display a confirmation dialog
                                        var confirmation = window.confirm("Are you sure you want to ban this product?");

                                        // Check if the user confirmed
                                        if (confirmation) {
                                            // Submit the form with the corresponding productId
                                            document.getElementById('banForm-' + productId).submit();
                                        } else {
                                            // Optionally, you can provide feedback to the user that the action was canceled
                                            console.log("Ban action canceled.");
                                        }
                                    }
                                </script>




                                <?php
                                    
                                // Initially set $isRaffled to 1 or 0 based on $isRaffledStatus
                               

                                // Update the SQL query based on the value of $isRaffled
                                $sql = "SELECT * FROM raffle_products WHERE UserID = $userID AND IsRaffled = 0";

                                $result = $conn->query($sql);
                                    
                                    
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            // Process each row of data
                                            $productName = $row['ProductName'];
                                            $productCategory = $row['Category'];
                                            $ticketPrice = $row['PricePerTicket'];
                                            $stock = $row['Stock'];
                                            $totalWinners = $row['TotalWinners'];
                                            $productId = $row['ProductID'];
                                            $progressPercentage = ($row['TicketPurchased'] / $row['TicketThreshold']) * 100;
                                            $pdThumbnailPath = str_replace('../', '', $row['PDThumbnail']);


                                    
                                            echo '<tr>';
                                            echo '<td style="margin: 0 auto;">
                                                        <div class="img" style="margin: 0 auto; text-align: center;">
                                                            <a href="#"><img src="' . $pdThumbnailPath . '" alt="Image"></a>
                                                            <p>' . $productName . '</p>
                                                    
                                                            
                                                        </div>
                                                    </td>';
                                            echo '<td>' . $productCategory. '</td>';
                                           

                                                    
                                    
                                            echo '<td>
                                                        <div class="cart-raffle-bar">
                                                            <div class="cart-progress-bar">
                                                                <div class="cart-progress" style="width: ' . $progressPercentage . '%;"></div>
                                                            </div>
                                                        </div>
                                                        <div class="sd-raffle-text">' . $row['TicketPurchased'] . '/' . $row['TicketThreshold'] . '</div>
                                                    </td>';
                                    
                                            echo '<td>₱' . $ticketPrice . '</td>';
                                            echo '<td>' . $stock . '</td>';
                                            echo '<td>' . $totalWinners . '</td>';
                                            echo '<td>₱' . ($ticketPrice * $row['TicketThreshold']) . '</td>';
                                            echo '<td><button class="btn-cart" value="' . $productId . '" onclick="showEditForm(this.value)"><i class="fa fa-edit"></i></button></td>';

                                            echo '<form id="banForm-' . $productId . '" action="php/enable_sold_product.php" method="post">';
                                            echo '<td><button type="button" class="ban-btn" onclick="confirmBan(' . $productId . ')"><i class="fa fa-check"></i></button></td>';
                                            echo '<input type="hidden" name="productId" value="' . $productId . '">';
                                            echo '</form>';
                                            
                                            echo '</tr>';
                                            
                                        }
                                    } else {
                                        // No raffled products found for the user with the given IsRaffled status
                                    }
                                    ?>
                                    <script>
                                        function confirmBan(productId) {
                                            // Display a confirmation dialog
                                            var confirmation = window.confirm("Are you sure you want to enable this product?");

                                            // Check if the user confirmed
                                            if (confirmation) {
                                                // Submit the form with the corresponding productId
                                                document.getElementById('banForm-' + productId).submit();
                                            } else {
                                                // Optionally, you can provide feedback to the user that the action was canceled
                                                console.log("Ban action canceled.");
                                            }
                                        }
                                    </script>




                    

                                    

                                


                                </tbody>



                                </table>
                            </div>
                        </div>
                    </div>



                    <!--ADD PRODUCT-->
                    <div class="sd-addproduct-btn">
                        <button id="showFormBtn">Add Product</button>
                        <div id="formContainer1" class="hidden">
                            <div class="form-modal">
                            <span class="close" id="closeFormBtn">&times;</span>
                                <h2 style = "color:white">ADD PRODUCT</h2>
                                
                                <div class="form-container">
                                <form class="addproduct" action="php/upload_product.php" method="post" enctype="multipart/form-data">

                                        <!--Write to ProductName-->
                                        <div class="form-group">
                                            <label for="productName">Product Name:</label>
                                            <input type="text" id="productName" name="productName" required>
                                        </div>

                                       <!-- Write to DrawType from selected -->
                                        <div class="form-group">
                                            <label for="category">Draw Type:</label>
                                            <select id="drawType" name="drawType" required>
                                                <option value="normal_draw">Normal Draw</option>
                                                <option value="daily_draw">Daily Draw</option>
                                            </select>
                                        </div>

                                        <!-- Write to Category from selected -->
                                        <div class="form-group">
                                            <label for="category">Category:</label>
                                            <select id="category" name="category" required>
                                            <option value="Accessories">Accessories</option>
                                            <option value="Appliances">Appliances</option>
                                            <option value="Babies">Babies</option>
                                            <option value="Computers">Computers</option>
                                            <option value="Entertainment">Entertainment</option>
                                            <option value="Footwear">Footwear</option>
                                            <option value="Jewelry">Jewelry</option>
                                            <option value="Mobile">Mobile Devices</option>
                                            <option value="Motorcycles">Motorcycles</option>
                                            <option value="Women">Women's Apparel</option>
                                            <option value="Gaming">Gaming</option>
                                            <option value="Shirts">Shirts</option>  
                                            </select>
                                        </div>

                                        <!--Write to ProductStock-->
                                        <div class="form-group">
                                            <label for="productStock">Stock:</label>
                                            <input type="number" id="productStock" name="productStock" required required min="1">
                                        </div>
                        
                                        <!-- Write the filepath to PDTThumbnail -->
                                        <div class="form-group">
                                            <label for="productImages">Product Thumbnail:</label>
                                            <input type="file" id="productImages" name="productImages[]" accept="image/*" multiple required>
                                        </div>

                                        <style>
                                            .productImage input[type="file"] {
                                                display: flex;
                                                margin-right: 10px;  
                                            }
                                        </style>

                                        <!-- Write the filepath to PDImg1 to PDImg6 -->
                                        <div class="form-group">
                                            <div class = productImage>
                                                <label for="productImages">Product Carousel:</label>
                                                <input type="file" id="productImages" name="productImages[]" accept="image/*" multiple required>
                                                <input type="file" id="productImages" name="productImages[]" accept="image/*" multiple required>
                                                <input type="file" id="productImages" name="productImages[]" accept="image/*" multiple required>
                                                <input type="file" id="productImages" name="productImages[]" accept="image/*" multiple required>
                                                <input type="file" id="productImages" name="productImages[]" accept="image/*" multiple required>
                                                <input type="file" id="productImages" name="productImages[]" accept="image/*" multiple required>
                                        
                                            </div>
                                        </div>
                        
                        
                                        <!-- Write to PricePerTicket -->
                                        <div class="form-group">
                                            <label for="ticketPrice">Ticket Price (₱):</label>
                                            <input type="number" id="ticketPrice" name="ticketPrice" required step=".01" min="0.00" placeholder="0.00">
                                        </div>
                        
                                        <!-- Write to TicketTreshold -->
                                        <div class="form-group">
                                            <label for="numTickets">Ticket threshold:</label>
                                            <input type="number" id="numTickets" name="numTickets" required min="1">
                                        </div>
                        
                                        <!-- Write to productDescription -->
                                        <div class="form-group">
                                            <label for="productDescription">Product Description:</label>
                                            <textarea id="productDescription" name="productDescription" rows="4" required></textarea>
                                        </div>
                        
                                        <!-- Write to ProductSpecification-->
                                        <div class="form-group">
                                            <label for="productSpecification">Product Specification:</label>
                                            <textarea id="productSpecification" name="productSpecification" rows="4" required></textarea>
                                        </div>
                        
                                        <button type="submit">Add Product</button>
                                    </form>




                               
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- EDIT PRODUCT-->

                        <div id="editFormContainer" class="hidden">
                            <div class="form-modal">
                            <span class="close" id="closeEditFormBtn">&times;</span>
                                <h2 style = "color:white;">EDIT PRODUCT</h2>
                                <div class="form-container">
                                
                                            
                                            <!-- Echo the product ID to check if it's correct -->
                                            
                                    <form class="editproduct" action="php/edit_product.php" method="post" enctype="multipart/form-data">
                                        <input  type="hidden"id="editProductId" name="editProductId" value="<?php echo $productId; ?>">

                                        <!--Write to ProductName-->
                                        <div class="form-group">
                                            <label for="productName">Product Name:</label>
                                            <input type="text" id="productName" name="productName">
                                        </div>

                                        <!-- Write to DrawType from selected -->
                                        <div class="form-group">
                                            <label for="category">Draw Type:</label>
                                            <select id="drawType" name="drawType">
                                                <option value="normal_draw">Normal Draw</option>
                                                <option value="daily_draw">Daily Draw</option>
                                            </select>
                                        </div>

                                        <!-- Write to Category from selected -->
                                        <div class="form-group">
                                            <label for="category">Category:</label>
                                            <select id="category" name="category">
                                                <option value="Accessories">Accessories</option>
                                                <option value="Appliances">Appliances</option>
                                                <option value="Babies">Babies</option>
                                                <option value="Computers">Computers</option>
                                                <option value="Entertainment">Entertainment</option>
                                                <option value="Footwear">Footwear</option>
                                                <option value="Jewelry">Jewelry</option>
                                                <option value="Mobile">Mobile Devices</option>
                                                <option value="Motorcycles">Motorcycles</option>
                                                <option value="Women">Women's Apparel</option>
                                                <option value="Gaming">Gaming</option>
                                                <option value="Shirts">Shirts</option>
                                            </select>
                                        </div>

                                        <!--Write to ProductStock-->
                                        <div class="form-group">
                                            <label for="productStock">Stock:</label>
                                            <input type="number" id="productStock" name="productStock" min="1">
                                        </div>

                                        <!-- Write the filepath to PDTThumbnail -->
                                        <div class="form-group">
                                            <label for="productImages">Product Thumbnail:</label>
                                            <input type="file" id="productImages" name="productImages[]" accept="image/*" multiple>
                                        </div>

                                        <style>
                                            .productImage input[type="file"] {
                                                display: flex;
                                                margin-right: 10px;
                                            }
                                        </style>

                                        <!-- Write the filepath to PDImg1 to PDImg6 -->
                                        <div class="form-group">
                                            <div class="productImage">
                                                <label for="productImages">Product Carousel:</label>
                                                <input type="file" id="productImages" name="productImages[]" accept="image/*" multiple>
                                                <input type="file" id="productImages" name="productImages[]" accept="image/*" multiple>
                                                <input type="file" id="productImages" name="productImages[]" accept="image/*" multiple>
                                                <input type="file" id="productImages" name="productImages[]" accept="image/*" multiple>
                                                <input type="file" id="productImages" name="productImages[]" accept="image/*" multiple>
                                                <input type="file" id="productImages" name="productImages[]" accept="image/*" multiple>
                                            </div>
                                        </div>

                                        <!-- Write to PricePerTicket -->
                                        <div class="form-group">
                                            <label for="ticketPrice">Ticket Price (₱):</label>
                                            <input type="number" id="ticketPrice" name="ticketPrice" step=".01" min="0.00" placeholder="0.00">
                                        </div>

                                        <!-- Write to TicketTreshold -->
                                        <div class="form-group">
                                            <label for="numTickets">Ticket threshold:</label>
                                            <input type="number" id="numTickets" name="numTickets" min="1">
                                        </div>

                                        <!-- Write to productDescription -->
                                        <div class="form-group">
                                            <label for="productDescription">Product Description:</label>
                                            <textarea id="productDescription" name="productDescription" rows="4"></textarea>
                                        </div>

                                        <!-- Write to ProductSpecification-->
                                        <div class="form-group">
                                            <label for="productSpecification">Product Specification:</label>
                                            <textarea id="productSpecification" name="productSpecification" rows="4"></textarea>
                                        </div>

                                        <button type="submit">Edit Product</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <script>

                        </script>
                        <script>
                            // Get the close button element
                            var closeBtn = document.getElementById("closeEditFormBtn");

                            // Get the edit form container element
                            var editFormContainer = document.getElementById("editFormContainer");

                            // Add a click event listener to the close button
                            closeBtn.addEventListener("click", function() {
                                // Hide the edit form container
                                editFormContainer.style.display = "none";

                                // Set the product ID to 0
                                document.getElementById('editProductId').value = 0;
                            });
                            var editFormContainer = document.getElementById("editFormContainer");

                            function showEditForm(productId) {
                                // Set the product ID in the hidden input field
                                document.getElementById('editProductId').value = productId;
                                console.log(productId);

                                // Show the edit form container
                                editFormContainer.style.display = "block";
                            }
                        </script>





                </div>          
            </div>
        </div>



        
        <!-- Footer Start -->  
            <?php include 'php/footer.php'; ?>   
        <!-- Footer End -->

        

    </body>
</html>
