<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Panel <?php echo $__env->yieldContent('title'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--Stylesheets - internal-->
    <link rel="stylesheet" href="/css/all.css">
</head>

<body>
<div class="off-canvas position-left reveal-for-large nav" id="offCanvas" data-off-canvas>
    <h3 class="heading">Welcome Admin</h3>
    <div class="image-holder text-center">
        <img src="#" alt="terdia" title="Admin">
        <p>Terry O.</p>
    
    </div>
    <ul class="vertical menu" data-drilldown>
        <!-- start of the drilldown multi level menu -->
        <li><a href="/admin"><i class="fa fa-tachometer fa-fw" aria-hidden="true"></i>&nbsp; Dashboard</a></li>
        <li><a href="#"><i class="fa fa-users fa-fw" aria-hidden="true"></i>&nbsp; Users</a></li>
        <li><a href="/admin/product/create"><i class="fa fa-plus fa-fw" aria-hidden="true"></i>&nbsp; Add Product</a></li>
        <li><a href="manage_inventory"><i class="fa fa-edit fa-fw" aria-hidden="true"></i>&nbsp; Manage Products</a></li>
        <li><a href="/admin/product/categories"><i class="fa fa-compress" aria-hidden="true"></i>&nbsp;Categories</a></li>
        <li><a href="/admin/users/orders"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;View Orders</a></li>
        <li><a href="/admin/users/payments"><i class="fa fa-money fa-fw" aria-hidden="true"></i>&nbsp; Payments</a></li>
        <li><a href="/"><i class="fa fa-sign-out fa-fw" aria-hidden="true"></i>&nbsp; Logout</a></li>
    </ul>
</div>

<div class="off-canvas-content" data-off-canvas-content>
    <!-- Your page content lives here -->
    <div class="title-bar">
        <div class="title-bar-left">
            <button class="menu-icon hide-for-large" type="button" data-open="offCanvas"></button>
            <span class="title-bar-title">Foundation</span>
        </div>
    </div>
</div>
 
<script async src="/js/all.js"></script>
</body>
</html>