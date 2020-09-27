<?php $__env->startSection('title', 'Edit Article'); ?>
<?php $__env->startSection('data-page-id', 'adminArticle'); ?>

<?php $__env->startSection('content'); ?>
<div class="edit-article">
    <div class="row expanded">
        <div class="column medium-11">
            <h2>Edit <?php echo e($article->name); ?></h2> <hr />
        </div>
    </div>
    
    <?php echo $__env->make('includes.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <form method="post" action="/admin/news/edit" enctype="multipart/form-data">
        <div class="small-12 medium-11">
            <div class="row expanded">
                <div class="small-12 medium-6 column">
                <label>Article Title:
                    <input type="text" name="title" value="<?php echo e($article->title); ?>">
                </label>
                </div>
    
                <div class="small-12 medium-6 column">
                    <label>Article Category:
                        <select name="category" id="article-category">
                            <option value="<?php echo e($article->category->id); ?>">
                                <?php echo e($article->category->name); ?>

                            </option>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($category->id); ?>"> <?php echo e($category->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </label>
                </div>
              
                <div class="small-12 medium-6 column">
                    <label>Featured:
                        <select name="featured">
                            <option value="<?php echo e($article->featured); ?>">
                                <?php echo e($article->featured); ?>

                            </option>
                            <?php for($i = 0; $i <= 18; $i++): ?>
                                <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
                            <?php endfor; ?>
                        </select>
                    </label>
                </div>
    
                <div class="small-12 medium-6 column">
                    <br />
                   <div class="input-group">
                       <span class="input-group-label">Article Image:</span>
                       <input type="file" name="NewsImage" class="input-group-field">
                   </div>
                </div>

                <div class="small-12 medium-6 column">
                    <label>Written By:
                        <input type="text" name="written" value="<?php echo e($article->written); ?>">
                    </label>
                </div>

                <div class="small-12 medium-6 column">
                    <label>Image Name:
                        <input type="text" name="image_name" value="<?php echo e($article->image_name); ?>">
                    </label>
                </div>
                
                <div class="small-12 column">
                    <label>Content:
                   <textarea name="content" rows="20" cols="50"><?php echo e($article->content); ?></textarea>
                   <!--  <textarea name="content"><?php echo e($article->content); ?></textarea>
                    <script>
                            CKEDITOR.replace( 'content' );
                            
                    </script> -->
                    </label>
                    <input type="hidden" name="token" value="<?php echo e(\App\Classes\CSRFToken::_token()); ?>">
                    <input type="hidden" name="article_id" value="<?php echo e($article->id); ?>">
                    <input class="button warning float-right" type="submit" value="Update Article">
                </div> 
            </div>
        </div>
    </form>

    <!--Delet Button-->
    <div class="row expanded">
        <div class="small-12 medium-11">
            <table data-form="deleteForm">
                <tr style="border: 1px solid #ffffff; !important">
                    <td style="border: 1px solid #ffffff; !important">
                        <form method="POST" action="/admin/article/<?php echo e($article->id); ?>/delete" class="delete-item">
                            <input type="hidden" name="token" value="<?php echo e(\App\Classes\CSRFToken::_token()); ?>">
                            <button type="submit" class="button alert">Delete Article</button>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    </div>

</div>
<?php echo $__env->make('includes.delete-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views//admin/news/edit.blade.php ENDPATH**/ ?>