<?php $__env->startSection('title', 'Manage Articles'); ?>
<?php $__env->startSection('data-page-id', 'adminArticle'); ?>

<?php $__env->startSection('content'); ?>
<div class="articles">
    <div class="grid-x grid-padding-x">
        <div class="cell medium-11">
            <h2>Manage Articles</h2> <hr />
        </div>
    </div>
    
    <?php echo $__env->make('includes.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <div class="grid-x grid-padding-x">
        <div class="small-12 medium-11 cell">
             <a href="/admin/news/create" class="button float-right">
                 <i class="fa fa-plus"></i>Add New Article
             </a>
         </div>
               
    </div>
        
    <div class="grid-x grid-padding-x">
        <div class="small-12 medium-11 cell">
            <?php if(count($articles)): ?>
                <table class="hover unstriped" data-form="deleteForm">
                    <thead>
                    <tr><th>Image</th><th>Title</th><th>Written By</th><th>Content</th>
                        <th>Featured</th><th>Category</th><th>Date Created</th><th width="70">Action</th></tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <img src="/<?php echo e($article['image_path']); ?>" alt="image"
                                    height="40" width="40">
                                </td>
                                <td><?php echo e($article['title']); ?></td>
                                <td><?php echo e($article['written']); ?></td>
                                <td  style="white-space: pre-line"><?php echo e(str_limit($article['content'], $limit = 50, $end = '...')); ?></td>
                                <td><?php echo e($article['featured']); ?></td>
                                <td><?php echo e($article['category_name']); ?></td>
                                <td><?php echo e($article['added']); ?></td>
                                <td width="70" class="text-right">
                                    <span data-tooltip aria-haspopup="true" class="has-tip top"
                                          data-disable-hover="false" tabindex="1"
                                          title="Edit Article">
                                        <a href="/admin/news/<?php echo e($article['id']); ?>/edit">
                                            Edit <i class="fa fa-edit"></i></a>
                                    </span>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <?php echo $links; ?>

            <?php else: ?>
                <h2>You have not created any article</h2>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/admin/news/post.blade.php ENDPATH**/ ?>