(function ($) {
    "use strict";
    
    // Dropdown on mouse hover
    $(document).ready(function () {
        function toggleNavbarMethod() {
            if ($(window).width() > 768) {
                $('.navbar .dropdown').on('mouseover', function () {
                    $('.dropdown-toggle', this).trigger('click');
                }).on('mouseout', function () {
                    $('.dropdown-toggle', this).trigger('click').blur();
                });
            } else {
                $('.navbar .dropdown').off('mouseover').off('mouseout');
            }
        }
        toggleNavbarMethod();
        $(window).resize(toggleNavbarMethod);
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });
    
    
    // Header slider
    $('.header-slider').slick({
        autoplay: true,
        dots: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
    });
    
    
    // Product Slider 4 Column
    $('.product-slider-4').slick({
        autoplay: true,
        infinite: true,
        dots: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                }
            },
        ]
    });
    
    
    // Product Slider 3 Column
    $('.product-slider-3').slick({
        autoplay: true,
        infinite: true,
        dots: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                }
            },
        ]
    });
    
    
    // Product Detail Slider
    $('.product-slider-single').slick({
        infinite: true,
        autoplay: true,
        dots: false,
        fade: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: '.product-slider-single-nav'
    });
    $('.product-slider-single-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: false,
        centerMode: true,
        focusOnSelect: true,
        asNavFor: '.product-slider-single'
    });
    
    
    // Brand Slider
    $('.brand-slider').slick({
        speed: 5000,
        autoplay: true,
        autoplaySpeed: 0,
        cssEase: 'linear',
        slidesToShow: 5,
        slidesToScroll: 1,
        infinite: true,
        swipeToSlide: true,
        centerMode: true,
        focusOnSelect: false,
        arrows: false,
        dots: false,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 300,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });
    
    
    // Review slider
    $('.review-slider').slick({
        autoplay: true,
        dots: false,
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });
    
    
    // Widget slider
    $('.sidebar-slider').slick({
        autoplay: true,
        dots: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
    });
    
    //CATEGORIES ADD QUANTITY START
    // Quantity 
    $('.qty button').on('click', function () {
        var $button = $(this);
        var oldValue = $button.parent().find('input').val();
        if ($button.hasClass('btn-plus')) {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        $button.parent().find('input').val(newVal);
    });

    document.addEventListener('DOMContentLoaded', function () {
        var addTicketsButtons = document.querySelectorAll('.add-tickets-btn');
        var ticketForm = document.getElementById('ticketForm');
        var productIdInput = document.getElementById('productId');
        var maxTicketInput = document.getElementById('ticketQuantity');
        var purchaseForm = document.getElementById('purchase-form');

        addTicketsButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                var productId = this.getAttribute('data-product-id');
                var maxTicket = this.getAttribute('data-maxticket-quantity');
                productIdInput.value = productId;
                maxTicketInput.max = maxTicket;
                maxTicketInput.value = 0;
                

                toggleOverlay(true); // Show the dark overlay
                ticketForm.style.display = 'block';
            });
        });

        function closeForm() {
            toggleOverlay(false); // Hide the dark overlay
            ticketForm.style.display = 'none';
        }

        window.closeForm = closeForm;

        function toggleOverlay(show) {
            var overlayClassList = purchaseForm.classList;
            if (show) {
                overlayClassList.add('purchase-form');
            } else {
                overlayClassList.remove('purchase-form');
            }
        }
    });





    function checkFormSubmission() {
        // You can add additional conditions here if needed
        // For now, it simply returns true to allow form submission
        return true;
    }
    
    //CATEGORIES ADD QUANTITY END
                          

    
    
    // Shipping address show hide
    $('.checkout #shipto').change(function () {
        if($(this).is(':checked')) {
            $('.checkout .shipping-address').slideDown();
        } else {
            $('.checkout .shipping-address').slideUp();
        }
    });
    
    
    // Payment methods show hide
    $('.checkout .payment-method .custom-control-input').change(function () {
        if ($(this).prop('checked')) {
            var checkbox_id = $(this).attr('id');
            $('.checkout .payment-method .payment-content').slideUp();
            $('#' + checkbox_id + '-show').slideDown();
        }
    });
})(jQuery);




    // Function to open the purchase form
    function openPurchaseForm() {
        var purchaseForm = document.getElementById("purchase-form");
        purchaseForm.style.display = "block";
    }

    // Function to close the purchase form
    function closePurchaseForm() {
        var purchaseForm = document.getElementById("purchase-form");
        purchaseForm.style.display = "none";
    }

    // Attach click event handlers to "Buy Now" buttons
    var buyNowButtons = document.querySelectorAll('.product-item .btn');
    for (var i = 0; i < buyNowButtons.length; i++) {
        buyNowButtons[i].addEventListener('click', openPurchaseForm);
    }

    var ticketCount = 1; // Initial ticket count

    // Function to increment the ticket count
    function incrementTicketCount() {
        ticketCount++;
        updateTicketCount();
    }

    // Function to decrement the ticket count
    function decrementTicketCount() {
        if (ticketCount > 1) {
            ticketCount--;
            updateTicketCount();
        }
    }

    // Function to update the displayed ticket count
    function updateTicketCount() {
        var ticketCountElement = document.getElementById("ticket-count");
        ticketCountElement.textContent = ticketCount;
    }

    // Function to open the purchase form
    function openPurchaseForm() {
        var purchaseForm = document.getElementById("purchase-form");
        purchaseForm.style.display = "block";
    }

    // Function to close the purchase form
    function closePurchaseForm() {
        var purchaseForm = document.getElementById("purchase-form");
        purchaseForm.style.display = "none";
    }

    // Attach click event handlers to "Buy Now" buttons
    var buyNowButtons = document.querySelectorAll('.product-item .btn');
    for (var i = 0; i < buyNowButtons.length; i++) {
        buyNowButtons[i].addEventListener('click', openPurchaseForm);
    }

//SELLER DASHBOARD  
const showFormBtn = document.getElementById("showFormBtn");
const formContainer = document.getElementById("formContainer1");
const closeFormBtn = document.getElementById("closeFormBtn");

showFormBtn.addEventListener("click", function() {
    // Display the form container
    formContainer.classList.remove("hidden");
});

closeFormBtn.addEventListener("click", function() {
    // Hide the form container when the close button is clicked
    formContainer.classList.add("hidden");
});

