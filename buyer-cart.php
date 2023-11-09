<!DOCTYPE html>
<link href="img/RR.png" rel="icon">
<html lang="en">
    <body>       

        <!-- Header Start -->    
        <?php include 'php/header.php'; 

        ?>
        <!-- Header End-->

        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Customer's Cart</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Cart Start -->
        <div class="cart-page">
            <div class="container-fluid">
                <div class="row">
                <?php
               
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "raffle_realm";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the user ID from the session
$userID = $_SESSION['user_id'];

// Fetch cart information for the user with IsRemoved != 1 and IsPurchased != 1
$query = "SELECT raffle_products.ProductName, raffle_products.ProductID, raffle_cart.CartID, raffle_products.PricePerTicket, raffle_products.PDThumbnail, raffle_cart.TicketCarted, raffle_products.TicketPurchased, raffle_products.TicketThreshold
          FROM raffle_cart
          INNER JOIN raffle_products ON raffle_cart.ProductID = raffle_products.ProductID
          WHERE raffle_cart.UserID = $userID AND raffle_cart.IsRemoved != 1 AND raffle_cart.IsPurchased != 1";

$result = $conn->query($query);

// Check if there are any carted products
if ($result->num_rows > 0) {
    ?>
   
    <div class="col-lg-8">
        <div class="cart-page-inner">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Ticket Quantity</th>
                            <th>Total Price</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle" id="cart-table-body">
                        <h1>RAFFLE CART</h1>
                        <p>Enhance your winning odds with more entries!</p>

                        <?php

                       
                        // Loop through the carted products and display them
                        while ($row = $result->fetch_assoc()) {
                            // Remove '../' from the PDThumbnail path
                            $pdThumbnailPath = str_replace('../', '', $row['PDThumbnail']);
                            $pdCartID = $row['CartID'];
                            
                            // Calculate the total for each product
                            $total = $row['TicketCarted'] * $row['PricePerTicket'];
                            $ticketCarted = $row['TicketCarted'];


                            $ticketPurchased = $row['TicketPurchased'];
                            $ticketThreshold = $row['TicketThreshold'];
                            $maxPuchase = $ticketThreshold -  $ticketPurchased;
                            $progressPercentage = ($ticketPurchased / $ticketThreshold) * 100;


                            ?>
                            <form method="post" action="php/remove_tickets.php">
                                
                                <tr>
                                    <td>
                                        <input type="hidden" name="cartID" value="<?php echo $pdCartID; ?>">
                                        <div class="sd-product">
                                            <div class="img">
                                                <?php echo'<a href="product-detail.php?productID=' . $row['ProductID'] . '">';?>
                                                    <img src="<?php echo $pdThumbnailPath; ?>" alt="Product Image"></a>
                                                <p><?php echo $row['ProductName']; ?></p>
                                            </div>
                                            <div class="cart-raffle-bar">
                                            <div class="cart-progress-bar">
                                                <div class="cart-progress" style="width: <?php echo $progressPercentage; ?>%;"></div>
                                                
                                            </div>

                                                <div class="cart-raffle-text">
                                                    Till Draw: <?php echo ' ' ?><?php echo $row['TicketPurchased']; ?>/<?php echo $row['TicketThreshold'] ?>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>₱<?php echo $row['PricePerTicket']; ?></td>
                                    <td>
                                        <div class="qty">
                                            <button class="btn-minus" onclick="updateQuantity(this, <?php echo $row['PricePerTicket']; ?>)" style="width: 25%"><i class="fa fa-minus"></i></button>
                                            <input type="text" 
                                                readonly
                                                value="<?php echo $row['TicketCarted']; ?>" 
                                                data-price="<?php echo $row['PricePerTicket']; ?>" 
                                                onblur="updateTotal(this)" 
                                                oninput="updateTotal(this)" 
                                                onchange="updateTotal(this); checkMaxValue(this)" 
                                                onkeydown="validateNumeric(event); updateTotal(this); checkMaxValue(this)" 
                                                style="width: 50%" 
                                                max="<?php echo $maxPuchase ?>" 
                                                step="1" 
                                                pattern="\d+"
                                                oninput="checkMaxValue(this)">

                                            <button class="btn-plus" onclick="updateQuantity(this, <?php echo $row['PricePerTicket']; ?>)" style="width: 25%" ><i class="fa fa-plus"></i></button>
                                            
                                        </div>
                                    </td>
                                    <td class="total">₱<?php echo $total; ?></td>
                                    <td>
                                        <button class="remove-button" data-cartid="<?php echo $pdCartID ?>"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            </form>
                            <?php
                        }

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
// Declare a global variable to track the increment/decrement
        var quantityChange = 0;

        function updateQuantity(button, price) {
            console.log('updateTotal called');
            // Prevent the form submission
            event.preventDefault();

            var input = button.parentElement.querySelector('input');
            var currentValue = parseInt(input.value);

            if (button.classList.contains('btn-minus')) {
                // Decrement quantity
                if (currentValue > 1) {
                    input.value = currentValue - 0;
                    quantityChange = -1;
                }
            } else {
                // Increment quantity
                input.value = currentValue + 0;
                quantityChange = 1;
            }

            // Update total
            checkMaxValue(input);
            updateTotal(input, quantityChange);
            updateGrandTotal();
        }

        function updateTotal(input, quantityChange) {
    // Get the current quantity
    var currentQuantity = parseInt(input.value);
    console.log('updateTotal called');
    console.log('Input value:', input.value);
    console.log('Quantity change:', quantityChange);

    // Ensure the updated quantity is not negative
    if (currentQuantity + quantityChange >= 0) {
        // Retrieve price and calculate the total
        var price = parseFloat(input.dataset.price);
        var quantity = currentQuantity + quantityChange;
        var total = price * quantity;

        // Update the total column
        var row = input.closest('tr');
        var totalColumn = row.querySelector('.total');
        totalColumn.textContent = '₱' + total.toFixed(2);

        // Calculate the sum of total prices
      var totalSum = 0;
      var tbody = document.getElementById('cart-table-body');
      var totalElements = tbody.querySelectorAll('.total');

      totalElements.forEach(function (totalColumn) {
         totalSum += parseFloat(totalColumn.textContent.replace('₱', ''));
      });

      // Update the total value in the summary
      var totalValueSpan = document.querySelector('.cart-summary p span');
      totalValueSpan.textContent = '₱' + totalSum.toFixed(2);
      
    }
    updateGrandTotal();
}

function validateNumeric(event) {
    const inputField = event.target;
    const keyCode = event.which || event.keyCode;


    // Allow backspace, delete, and arrow keys
    if (
        (keyCode >= 48 && keyCode <= 57) ||  // 0-9
        (keyCode >= 96 && keyCode <= 105) || // Numpad 0-9
        keyCode === 8 ||                      // Backspace
        keyCode === 46 ||                     // Delete
        (keyCode >= 37 && keyCode <= 40)      // Arrow keys
        
    ) {

        
        return true;
    } else {
        // Check if the entered value exceeds the maximum
        const enteredValue = parseInt(inputField.value, 10) || 0;
        const maxPurchase = parseInt(inputField.getAttribute('max'), 10) || 0;

        if (enteredValue > maxPurchase) {
            inputField.value = maxPurchase;
        }

        event.preventDefault();
        return false;
    }

    
}

function checkMaxValue(inputField) {
    var currentValue = parseInt(inputField.value);
    var maxPurchase = parseInt(inputField.getAttribute('max'));
    

    if (currentValue > maxPurchase) {
      
        // Set the value to the maximum allowed value
        inputField.value = maxPurchase;
    }
    
    // If the current value is still greater than the maximum, prevent further input
    if (currentValue == maxPurchase) {
        inputField.setAttribute('readonly', true);
    } else {
        inputField.removeAttribute('readonly');
    }
    
}




        document.addEventListener('input', function (event) {
            var input = event.target;

            if (input.tagName === 'INPUT' && input.hasAttribute('data-price')) {
                // Update total when the input value changes
                updateTotal(input);
                updateGrandTotal();
            }
        });
    </script>

<script>
   // ... existing script ...

   // Call updateTotal for each input initially
   document.addEventListener('DOMContentLoaded', function () {
      var inputs = document.querySelectorAll('.qty input[data-price]');
      inputs.forEach(function (input) {
         updateTotal(input, 0);
         updateGrandTotal();
      });
   });
</script>

<!-- ... existing script ... -->

<!-- ... existing script ... -->

<!-- ... existing script ... -->

<!-- ... existing script ... -->

<script>
document.addEventListener('DOMContentLoaded', function () {
   // ... existing code ...

   // Add event listener for Apply Code button
   var applyCodeButton = document.querySelector('.coupon button');
   applyCodeButton.addEventListener('click', function () {
      toggleCouponCode();
      updateGrandTotal();
      toggleButtonText(applyCodeButton);
   });

   // Call updateGrandTotal() when the document is loaded
   updateGrandTotal();
});

function toggleCouponCode() {
   var couponInput = document.querySelector('.coupon input');
   var couponSpan = document.getElementById('coupon-span');

   // Check the entered coupon code and apply the corresponding value
   switch (couponInput.value.trim().toUpperCase()) {
      case 'ILOVERAFFLEREALM':
         couponSpan.textContent = '-₱100.00';
         break;
      case 'LUCKY':
         couponSpan.textContent = '-₱200.00';
         break;
      case 'EDCELPOGI':
         couponSpan.textContent = '-₱500.00';
         break;
      default:
         couponInput.value = '';
         couponSpan.textContent = '';
         break;
   }
}

function toggleButtonText(button) {
   // Toggle between "Apply Code" and "Remove Code" text
   button.textContent = (button.textContent === 'Apply Code') ? 'Remove Code' : 'Apply Code';
}

function updateGrandTotal() {
   var totalSpan = document.getElementById('total');
   var couponSpan = document.getElementById('coupon-span');
   var grandTotalSpan = document.getElementById('grand-total-span');

   // Extract the numeric values and convert to float for calculations
   var totalValue = parseFloat(totalSpan.textContent.replace('₱', '')) || 0;
   var couponValue = parseFloat(couponSpan.textContent.replace('₱', '')) || 0;

   // Calculate the grand total by adding the coupon value to the total
   var grandTotal = totalValue + couponValue;

   // Ensure that the grand total is not negative
   grandTotal = Math.max(grandTotal, 0);

   // Update the Grand Total span with the result
   grandTotalSpan.textContent = '₱' + grandTotal.toFixed(2);
}

</script>

<!-- ... existing script ... -->





    <?php
} else {
    // Display a message if the cart is empty
    echo '<div class="col-lg-8">';
    echo '<div class="cart-page-inner">';
        echo '<div class="table-responsive">';
            echo '<table class="table table-bordered">';
                echo '<thead class="thead-dark">';
                    echo '<tr>';
                        echo '<th>Product</th>';
                        echo '<th>Ticket Price</th>';
                        echo '<th>Quantity</th>';
                        echo '<th>Total</th>';
                        echo '<th>Remove</th>';
                    echo '</tr>';
                echo '</thead>';
                echo '<tbody class="align-middle">';
                    echo '<h1>RAFFLE CART</h1>';
                   
                echo '</tbody>';
            echo '</table>';
        echo '</div>';
    echo '</div>';
echo '</div>';
}

// Close the database connection
$conn->close();
?>











                     <div class="col-lg-4">
                        <div class="cart-page-inner">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="coupon">
                                        <input type="text" placeholder="Coupon Code">
                                        <button>Apply Code</button>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="cart-summary">
                                        <div class="cart-content">
                                            <h1>Cart Summary</h1>
                                            <p>Total:<span id = "total">Value</span></p>
                                            <p>Coupon:<span id="coupon-span"></span></p>
                                            <h2>Grand Total<span id = "grand-total-span">Grand Total</span></h2>
                                        </div>
                                        <div class="cart-btn">
                                        <form method="post" action="php/upload_tickets.php"> <!-- Updated action attribute -->
                                            <!-- ... form content ... -->
                                            <button type="submit">Checkout</button>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class = "purchase-form-content" id="ticketForm" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; background: #fff; padding: 20px; border: 1px solid #ccc; z-index: 999;">
                                    <span style="position: absolute; top: 10px; right: 10px; cursor: pointer;" onclick="CloseForm()">×</span>
                                    <form id="ticketPurchaseForm">
                                        <div class="quantity">
                                            <div class="qty">
                                                <div>
                                                <label for="ticketQuantity">Confirm Purchase:</label>
                                                </div>       
                                
                                            </div>
                                        </div>
                                        <input type="hidden" name="productId" id="productId">
                                        <button class="confirm-button" type="submit">Confirm</button>
                                 
                                    </form>
                    </div>

                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

        <script>
    $(document).ready(function () {
        // Function to handle the checkout button click
        $('form[action="php/upload_tickets.php"]').submit(function (e) {
            e.preventDefault(); // Prevent the default form submission

            // Array to store cartID and ticket quantity for each row
            var cartInputs = [];

            // Loop through each table row
            $('table tbody tr').each(function () {
                // Get cartID and ticket quantity
                var cartID = $(this).find('input[name="cartID"]').val();
                var ticketCarted = $(this).find('input[data-price]').val();

                // Add to the cartInputs array
                cartInputs.push({
                    'cartID': cartID,
                    'ticketCarted': ticketCarted
                });
            });

            // Now you have cartInputs array with cartID and ticket quantity for each row
            console.log(cartInputs);

            // Send cartInputs data to the server using AJAX
            $.ajax({
                type: 'POST',
                url: 'php/update_cart_inputs.php',
                data: { cartInputs: cartInputs },
                dataType: 'json',
                success: function (response) {
                    console.log(response);
                    // Display the purchase form
                    ShowPurchaseForm(cartInputs);
                },
                error: function (error) {
                    console.error(error);
                }
            });
        });
    });
</script>


<script>
    // Function to show the purchase form and update page background
    function ShowPurchaseForm(cartInputs) {
    // Set the productId input in the purchase form
    $('#productId').val(JSON.stringify(cartInputs));

    // Create a hidden input field for cartInputs and append it to the form
    var hiddenInput = $('<input type="hidden" name="cartInputs">').val(JSON.stringify(cartInputs));
    $('#ticketPurchaseForm').append(hiddenInput);

    // Update the action attribute of the form to point to "php/upload_tickets.php"
    $('#ticketPurchaseForm').attr('action', 'php/upload_tickets.php');

    // Show the purchase form
    $('#ticketForm').show();
}

    // Function to close the purchase form and reset page background
    function CloseForm() {
        // Hide the dark overlay
        $('.dark-overlay').hide();

        // Hide the purchase form
        $('#ticketForm').hide();
    }
</script>




        <!-- Cart End -->
        
        <!-- Footer Start -->
        <?php include 'php/footer.php'; ?>
        <!-- Footer End -->
        
    </body>
</html>
