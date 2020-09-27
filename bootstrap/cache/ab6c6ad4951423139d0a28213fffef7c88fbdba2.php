<?php $categories = \App\Models\Category::get();?>

<header class="navigation">

  <!-- Sub Navigation -->
  <div class="top-bar">
    <div class="top-bar-left">
      <ul class="menu">
        <li><a href="#">Home</a></li>
        |
        <li><a href="#">About Us</a></li>
        |
        <li><a href="#">Advertise with Us</a></li>
        |
        <li><a href="#">Contact Us</a></li>
      </ul>
    </div>
  </div>
  <!-- /Sub Navigation -->

  <!-- logo and ad break -->
  <div class="row">
    <div class="medium-4 columns">
      <img src="/images/newslogo.jfif" alt="company logo">
    </div>
    <div class="medium-8 columns">
     <a href="https://www.mtnonline.com/mtn4me/?utm_source=GDN&utm_medium=banner&utm_campaign=q2supplementary&gclid=EAIaIQobChMIwfC8z8i_6wIV2-jmCh37WgoXEAEYASAAEgI7c_D_BwE" target="_blank"> <img src="/images/advert/fcmb.jpg" alt="advertisement for deep fried Twinkies"></a>
    </div>
  </div>
  <!-- / logo and ad break -->

  <br>

  <div class="title-bar" data-responsive-toggle="main-menu" data-hide-for="medium">
    <button class="menu-icon" type="button" data-toggle></button>
    <div class="title-bar-title">Menu</div>
  </div>

  <div class="top-bar" id="main-menu">
    <ul class="menu bottom-top-bar vertical medium-horizontal expanded" data-responsive-menu="drilldown medium-dropdown">
      <li>Home</li>
      <?php if(count($categories)): ?>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="menu"><a href="/articles/category/<?php echo e($category->title); ?>"><?php echo e($category->name); ?></a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endif; ?>
      
        
      </li>      
    </ul>
  </div>

</header>

<br><?php /**PATH C:\xampp\htdocs\blog\resources\views/includes/nav.blade.php ENDPATH**/ ?>