<?php $__env->startSection('title'); ?> 
Categories
<?php if(isset($category) && $showBreadCrumbs): ?> - <?php echo e($category->name); ?> <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('data-page-id', 'categories'); ?>


<?php $__env->startSection('content'); ?>
<div class="home">
    <div class="row">

  <div class="row small-up-2 medium-up-4 large-up-5">

    <section class="article" data-token="<?php echo e($token); ?>" data-urlParams="<?php echo e($urlParams); ?>" id="article">
      <?php if(isset($category) && showBreadCrumbs): ?>
        <div class="grid-x cell">
          <nav aria-lable="You are here:" role="navigation">
            <ul class="showBreadCrumbs">
              <li><a :href="/article/category/<?php echo e($category->title); ?>"><?php echo e($category->name); ?></a></li>
            </ul>
          </nav>
        </div>
        <?php else: ?>
        <h2>Categories</h2>
        <h5>Coming soon ...</h5>
      <?php endif; ?>
     <!--  <div class="row medium-up-2 large-up-4">
        <div class="medium-12 column" v-cloak v-for="article in articles">
          <a :href="'/article/' + article.id">
            <div class="card" data-equalizer-watch>
            <div class="card-section">
            <img :src="'/' + article.image_path" width="100%" alt="image for article">
            </div>
            </div>
            <p><b>{{stringLimit(article.title, 58) }} </b>
          </a>
        </div>
      </div> -->
  </section>

  </div>

  <hr>




</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/categories.blade.php ENDPATH**/ ?>