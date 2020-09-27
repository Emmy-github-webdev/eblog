<?php $__env->startSection('title', 'Create Article'); ?>
<?php $__env->startSection('data-page-id', 'adminArticle'); ?>

<?php $__env->startSection('content'); ?>

<div class="add-articles">
    <div class="grid-x grid-padding-x">
        <div class="column medium-11">
            <h2>Add New Article</h2> <hr />
        </div>
    </div>
    
    <?php echo $__env->make('includes.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

           
<form method="post" action="/admin/news/create" enctype="multipart/form-data">
        <div class="small-12 medium-11">
            <div class="grid-x grid-padding-x">
                <div class="small-12 medium-6 cell">
                    <label>Title:
                        <input type="text" name="title" placeholder="Enter news title"
                            value="<?php echo e(\App\Classes\Request::old('post', 'title')); ?>">
                    </label>
                </div>
    
                <div class="small-12 medium-6 cell">
                    <label>News Category:
                        <select name="category" id="news-category">
                            <option value="<?php echo e(\App\Classes\Request::old('post', 'category')?:""); ?>">
                                <?php echo e(\App\Classes\Request::old('post', 'category')?:"Select Category"); ?>

                            </option>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($category->id); ?>"> <?php echo e($category->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </label>
                </div>
    
                <div class="small-12 medium-6 cell">
                    <label>Featured:
                        <select name="featured">
                            <option value="<?php echo e(\App\Classes\Request::old('post', 'featured')?:""); ?>">
                                <?php echo e(\App\Classes\Request::old('post', 'featured')?:"Select featured ID"); ?>

                            </option>
                            <?php for($i = 0; $i <= 18; $i++): ?>
                                <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
                            <?php endfor; ?>
                        </select>
                    </label>
                </div>
    
                <div class="small-12 medium-6 cell">
                    <br />
                   <div class="input-group">
                       <span class="input-group-label">Image:</span>
                       <input type="file" name="newsImage" class="input-group-field">
                   </div>
                </div>

                <div class="small-12 medium-6 cell">
                    <label>Written By:
                        <input type="text" name="written" placeholder="Written by "
                            value="<?php echo e(\App\Classes\Request::old('post', 'written')); ?>">
                    </label>
                </div>

                <div class="small-12 medium-6 cell">
                    <label>Image Name:
                        <input type="text" name="image_name" placeholder="Enter image capture"
                            value="<?php echo e(\App\Classes\Request::old('post', 'image_name')); ?>">
                    </label>
                </div>
                
                <div class="small-12 cell">
                    <label>Content:
                   <textarea name="content" placeholder="Enter News Content Here" rows="20" cols="50"><?php echo e(\App\Classes\Request::old('post', 'content')); ?></textarea> 
                   <!--  <textarea name="content" placeholder="Enter News Content Here"><?php echo e(\App\Classes\Request::old('post', 'content')); ?></textarea>
                    <script>
                            CKEDITOR.replace( 'content' );
                            
                    </script> -->
                    
                    </label>
                    <input type="hidden" name="token" value="<?php echo e(\App\Classes\CSRFToken::_token()); ?>">
                    <button class="button alert" type="reset">Reset</button>
                    <input class="button success float-right" type="submit" value="Save">
                </div>
            </div>
        </div>
    </form>
    
   
</div>
     
    <?php echo $__env->make('includes.delete-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/admin/news/create.blade.php ENDPATH**/ ?>