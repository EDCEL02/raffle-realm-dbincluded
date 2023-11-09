<!DOCTYPE html>

<html lang="en">
    
    <body>
        <?php
            include 'php/header.php';
            include 'php/db_connect.php';
            $_SESSION['UserID'] = $_SESSION['user_id'];
            $userID = $_SESSION['user_id'];

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetch user details from the database based on the session username
            $username = $_SESSION['username'];
            $query = "SELECT * FROM user_accounts WHERE username = '$username'";
            $result = $conn->query($query);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();

                // Get user details
                $firstName = $row['first_name'];
                $lastName = $row['last_name'];
                $mobile = $row['mobile'];
                $email = $row['email'];
            } else {
                // Handle the case where user details are not found
                echo "User details not found.";
                exit();
            }

            $conn->close();
        ?>
        
        <!-- Breadcrumb Start-->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                    <li class="breadcrumb-item active">My Account</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        <?php
            // Include the database connection file
            include 'php/db_connect.php';

            // Fetch data from the raffle_products table
            $sql = "SELECT * FROM raffle_products WHERE UserID = $userID AND IsRaffled = 1"  ;//seller active-raffles
            
            $sql1 = "SELECT rp.*, rw.Status, rw.IsDelivered FROM raffle_products rp
            INNER JOIN raffle_winners rw ON rp.ProductID = rw.ProductID
            WHERE rp.UserID = $userID
            ORDER BY rw.Status DESC"; //seller sold-raffles


            $sql2 = "SELECT rc.*, rp.ProductName, rp.PricePerTicket FROM raffle_cart rc 
                INNER JOIN raffle_products rp ON rc.ProductID = rp.ProductID
                WHERE rc.UserID = $userID AND rc.IsPurchased = 1 AND rc.IsOnDraw = 1 
                ORDER BY rc.CartID DESC"; //buyer -active-raffles

            $sql3 = "SELECT rw.*, rp.ProductName, rp.PricePerTicket FROM raffle_winners rw
                    INNER JOIN raffle_products rp ON rw.ProductID = rp.ProductID
                    WHERE rw.UserID = $userID
                    ORDER BY rw.WinnerID DESC";//buyer-winned-raffles

            $sql4 = "SELECT rc.*, rp.ProductName, rp.PricePerTicket FROM raffle_cart rc 
                    INNER JOIN raffle_products rp ON rc.ProductID = rp.ProductID
                    WHERE rc.UserID = $userID AND rc.IsWon != 1 AND rc.IsOnDraw = 0";//buyer-joined

    
                        
            $result = $conn->query($sql);
           
            $result1 = $conn->query($sql1);

            $result2 = $conn->query($sql2);

            $result3 = $conn->query($sql3);

            $result4  = $conn->query($sql4);

        ?>
        
        <!-- My Account Start -->
        <div class="my-account">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        
                        <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical" >
                            <h5 style="background-color: #fa5330;color: #fff; padding:5px;">Personal Details</h5>
                            <a class="nav-link active" id="account-nav" data-toggle="pill" href="#account-tab" role="tab"><i class="fa fa-user"></i>Account Details</a>
                            <a class="nav-link" id="payment-nav" data-toggle="pill" href="#payment-tab" role="tab"><i class="fa fa-credit-card"></i>Wallet</a>
                            <a class="nav-link" id="address-nav" data-toggle="pill" href="#address-tab" role="tab"><i class="fa fa-map-marker-alt"></i>Address</a>
                    
                            <h5 style="background-color: #fa5330;color: #fff; padding:5px;">Buyer</h5>
                            <a class="nav-link" id="orders-nav" data-toggle="pill" href="#buyer-active-raffles" role="tab"><i class="fa fa-shopping-bag"></i>Active Raffles</a>
                            <a class="nav-link" id="orders-nav" data-toggle="pill" href="#buyer-winned-raffles" role="tab"><i class="fa fa-shopping-bag"></i>Winned Raffles</a>
                            

                            <h5 style="background-color: #fa5330;color: #fff; padding:5px;">Seller</h5>
                            <a class="nav-link" id="orders-nav" data-toggle="pill" href="#seller-active-raffles" role="tab"><i class="fa fa-shopping-bag"></i>Active Raffles</a>
                            <a class="nav-link" id="orders-nav" data-toggle="pill" href="#seller-sold-raffles" role="tab"><i class="fa fa-shopping-bag"></i>Sold Raffle History</a>
                        </div>
                         

                        <h5 style="color: #f3f6ff;">Buyer</h5>
                        <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                            <a class="nav-link" href="index.html"><i class="fa fa-sign-out-alt"></i>Logout</a>
                        </div>

                    </div>


                    
                        
                    <div class="col-md-9">
                        <div class="tab-content">
                            
                            
                            <div class="tab-pane fade" id="dashboard-tab" role="tabpanel" aria-labelledby="dashboard-nav">
                                <h4>Dashboard</h4>
                                
                                   
                            </div>

                            
                            <div class="tab-pane fade" id="buyer-active-raffles" role="tabpanel" aria-labelledby="orders-nav">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>No</th>
                                                <th>Product</th>
                                                <th>Ticket Price</th>
                                                <th>Ticket Carted</th>
                                                <th>Total Spent</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // Check if there are rows in the result
                                            if ($result2->num_rows > 0) {
                                                $counter = 1; // Initialize counter variable
                                                // Loop through each row
                                                while ($row = $result2->fetch_assoc()) {
                                                    $spent = $row['PricePerTicket'] * $row['TicketCarted'];
                                                    echo "<tr>";
                                                    echo "<td>" . $counter . "</td>"; // Display row number
                                                    echo "<td>" . $row["ProductName"] . "</td>";
                                                    echo "<td>₱" . $row["PricePerTicket"] . "</td>";
                                                    echo "<td>" . $row["TicketCarted"] . " </td>";
                                                    echo "<td>₱" . $spent . "</td>";
                                                    echo "<td> Gaining Tickets </td>";
                                                    echo "</tr>";
                                                    $counter++; // Increment counter for the next row
                                                }
                                            } else {
                                                // If no rows are found
                                                echo "<tr><td colspan='6'>No active raffles found</td></tr>";
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="buyer-winned-raffles" role="tabpanel" aria-labelledby="orders-nav">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>No</th>
                                                <th>Product</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // Check if there are rows in the result
                                            if ($result2->num_rows > 0) {
                                                $counter = 1; // Initialize counter variable
                                                // Loop through each row
                                                while ($row = $result3->fetch_assoc()) {
                                                 
                                                    echo "<tr>";
                                                    echo "<td>" . $counter . "</td>"; // Display row number
                                                    echo "<td>" . $row["ProductName"] . "</td>";

                                                    echo "<td>  " . $row['Status']. "</td>";
                                                    echo "</tr>";
                                                    $counter++; // Increment counter for the next row
                                                }
                                            } else {
                                                // If no rows are found
                                                echo "<tr><td colspan='6'>No active raffles found</td></tr>";
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="buyer-joined-raffles" role="tabpanel" aria-labelledby="orders-nav">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>No</th>
                                                <th>Product</th>
                                                <th>Ticket Price</th>
                                                <th>Ticket Carted</th>
                                                <th>Total Spent</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // Check if there are rows in the result
                                            if ($result4->num_rows > 0) {
                                                $counter = 1; // Initialize counter variable
                                                // Loop through each row
                                                while ($row = $result2->fetch_assoc()) {
                                                    $spent = $row['PricePerTicket'] * $row['TicketCarted'];
                                                    echo "<tr>";
                                                    echo "<td>" . $counter . "</td>"; // Display row number
                                                    echo "<td>" . $row["ProductName"] . "</td>";
                                                    echo "<td>₱" . $row["PricePerTicket"] . "</td>";
                                                    echo "<td>" . $row["TicketCarted"] . " </td>";
                                                    echo "<td>₱" . $spent . "</td>";
                                                    
                                                    echo "</tr>";
                                                    $counter++; // Increment counter for the next row
                                                }
                                            } else {
                                                // If no rows are found
                                                echo "<tr><td colspan='6'>No active raffles found</td></tr>";
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            

                            <div class="tab-pane fade" id="seller-active-raffles" role="tabpanel" aria-labelledby="orders-nav">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>No</th>
                                                <th>Product</th>
                                                <th>Ticket Price</th>
                                                <th>Stocks</th>
                                                <th>Total Winners</th>
                                                <th>Total Revenue</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // Check if there are rows in the result
                                            if ($result->num_rows > 0) {
                                                $counter = 1; // Initialize counter variable
                                                // Loop through each row
                                                while ($row = $result->fetch_assoc()) {
                                                    $revenue = $row['TotalWinners'] * $row['PricePerTicket'] * $row ['TicketThreshold'];
                                                    echo "<tr>";
                                                    echo "<td>" . $counter . "</td>"; // Display row number
                                                    echo "<td>" . $row["ProductName"] . "</td>";
                                                    echo "<td>₱" . $row["PricePerTicket"] . "</td>";
                                                    echo "<td>" . $row["Stock"] ." </td>";
                                                    echo "<td>" . $row["TotalWinners"] . "</td>";
                                                    echo "<td>₱" . $revenue . "</td>";
                                                    echo "</tr>";
                                                    $counter++; // Increment counter for the next row
                                                }
                                            } else {
                                                // If no rows are found
                                                echo "<tr><td colspan='6'>No active raffles found</td></tr>";
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            

                            <div class="tab-pane fade" id="seller-sold-raffles" role="tabpanel" aria-labelledby="orders-nav">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>No</th>
                                                <th>Product</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // Check if there are rows in the result
                                            if ($result1->num_rows > 0) {
                                                $counter = 1; // Initialize counter variable
                                                // Loop through each row
                                                while ($row1 = $result1->fetch_assoc()) {
                                                    // Assuming similar column names in both tables, adjust accordingly
                                                    echo "<tr>";
                                                    echo "<td>" . $counter . "</td>"; // Display row number
                                                    echo "<td>" . $row1["ProductName"] . "</td>";
                                                    
                                                    echo "<td> Delivered </td>";
                                                    echo "</tr>";
                                                    $counter++; // Increment counter for the next row
                                                }
                                            } else {
                                                // If no rows are found
                                                echo "<tr><td colspan='4'>No sold raffles found</td></tr>";
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <?php
                            // Close the database connection
                            $conn->close();
                            ?>

                            <div class="tab-pane fade" id="payment-tab" role="tabpanel" aria-labelledby="payment-nav">
                                <h1>WALLET</h>
                                <h4 style = "color: white;">Payment Method</h4>                            
                                <div class="row">
                                    <div class="col-md-6">
                                        <h2>Payment Account</h2>
                                        <p>GCASH</p>
                                        <p>Status: Active</p>
                                        <button class="btn">Change</button>
                                    </div>
                                    <div class="col-md-6">
                                        <h2>Income Account</h2>
                                        <p>BDO Unibank</p>
                                        <p>Status: Active</p>
                                        <button class="btn">Change</button>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="address-tab" role="tabpanel" aria-labelledby="address-nav">
                                <h4>Address</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5>Payment Address</h5>
                                        <p>123 Payment Street, Los Angeles, CA</p>
                                        <p>Mobile: 012-345-6789</p>
                                        <button class="btn">Edit Address</button>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Shipping Address</h5>
                                        <p>123 Shipping Street, Los Angeles, CA</p>
                                        <p>Mobile: 012-345-6789</p>
                                        <button class="btn">Edit Address</button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show active" id="account-tab" role="tabpanel" aria-labelledby="account-nav">
                                <h4>Account Details</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="First Name" value="<?php echo $firstName; ?>">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Last Name" value="<?php echo $lastName; ?>">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Mobile" value="<?php echo $mobile; ?>">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Email" value="<?php echo $email; ?>">
                                    </div>

                                    <div class="col-md-12">
                                        <button class="btn">Update Account</button>
                                        <br><br>
                                    </div>
                                </div>
                                <h4>Password change</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input class="form-control" type="password" placeholder="Current Password">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="New Password">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Confirm Password">
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn">Save Changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- My Account End -->
        
        <!-- Footer Start -->
        <?php include 'php/footer.php'; ?>   
        <!-- Footer End -->

    </body>
</html>
