<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php include 'header.php';?>
   
</head>
<body style="background-color: whitesmoke;">
<ul class="menu side-bar navbar-nav d-flex flex-column row-gap-1">
    <div class="text-white text-center fw-bold text-nowrap d-flex align-items-center border-secondary-subtle border-bottom" style="height: 65px; ">
        <div class="px-3 d-flex align-items-center">
            <img src="../upload/side-bar.png" width="45" height="45" class="object-fit-contain ">
            <span class="text-span ms-3 p-0" style="font-size: 22px;">SMARTPARK</span>
        </div>
    </div>
    <div class="px-2 d-flex flex-column row-gap-1">
        <li class="nav-item mt-2">
            <a href="dashboard" rel="page" class="homes nav-link px-3 d-flex">
             <span class="icon-span"><i class="fa-solid fa-gauge-high m-auto"></i></span>
             <span class="text-span">Dashboard</span>
             <span class="tooltips text-dark text-nowrap p-1">Dashboard</span>
            </a>
        </li>
        
        <li class="nav-item ">
            <a href="transaction" rel="page" class="nav-link px-3">
             <span class="icon-span"><i class="fa-solid fa-receipt m-auto"></i></span>
             <span class="text-span">Transaction</span>
             <span class="tooltips text-dark text-nowrap p-1">Transaction</span>
            </a>
        </li>
        
        <li class="nav-item ">
            <a href="records" rel="page" class="nav-link px-3">
                <span class="icon-span"><i class="fa-solid fa-clipboard m-auto"></i></span>
                <span class="text-span">Client Records</span>
                <span class="tooltips text-dark text-nowrap p-1">Client Records</span>
            </a>
        </li>
        
        <li class="nav-item">
            <a href="parking-availability" rel="page" class="nav-link px-3">
                <span class="icon-span"><i class="fa-solid fa-check-to-slot m-auto"></i>
                </i></span>
                <span class="text-span">Parking Availability</span>
                <span class="tooltips text-dark text-nowrap p-1">Parking Availability</span>
            </a>
        </li>

        <li class="nav-item">
            <a href="history" rel="page" class="nav-link px-3">
                <span class="icon-span"><i class="fa-solid fa-clock-rotate-left m-auto"></i></i>
                </i></span>
                <span class="text-span">History</span>
                <span class="tooltips text-dark text-nowrap p-1">History</span>
            </a>
        </li>

    
    </div>

</ul>

<!-- <script>

var currentPageUrl = window.location.href;
var urlParts = currentPageUrl.split('/');
var lastPart = urlParts[urlParts.length - 1];

var navlinks = document.querySelectorAll('.nav-link');

navlinks.forEach(function(navlink) {
    var indexAttr = navlink.getAttribute('href');
    if (indexAttr === lastPart) {
        var navItem = navlink.parentElement;
        navItem.classList.add('active');
    }

    navlink.addEventListener("click", function(event) {
        event.preventDefault(); // Prevent the default link behavior

        // Remove 'active' class from all nav items
        document.querySelectorAll('.nav-item').forEach(function(item) {
            item.classList.remove('active');
        });

        // Add 'active' class to the clicked nav item's parent (.nav-item)
        navlink.closest('.nav-item').classList.add('active');
    });
});

</script> -->


