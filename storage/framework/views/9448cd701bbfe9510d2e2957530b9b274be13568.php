

<?php $__env->startSection('content'); ?>
    <div class="container">

        <?php echo $__env->make('frontend._search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="row">

            <div class="col-md-12">
                <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="<?php echo e(url("/posts/{$post->id}")); ?>" <?php if($loop->first): ?> class="text-xl" <?php endif; ?>><?php echo e($post->title); ?></a> - <small>by <?php echo e($post->user->name); ?></small>

                            <span class="pull-right">
                                <?php echo e($post->created_at->toDayDateTimeString()); ?>

                            </span>
                        </div>

                        <div class="panel-body">
                            
                                <div class="col-md-10">
                                    <?php echo e(str_limit($post->description, 200)); ?>

                                    <p>
                                        Tags:
                                        <?php $__empty_2 = true; $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                                            <span class="label label-default"><?php echo e($tag->name); ?></span>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
                                            <span class="label label-danger">No tag found.</span>
                                        <?php endif; ?>
                                    </p>
                                </div>
                                <div class="col-md-2 pull-right">
                                    <a href="<?php echo e(url("/posts/{$post->id}/edit")); ?>" class="btn btn-md btn-info"><span class="glyphicon glyphicon-pencil"></span></a>
                                    <a href="<?php echo e(url("/posts/{$post->id}")); ?>" data-method="DELETE" data-token="<?php echo e(csrf_token()); ?>" data-confirm="Are you sure?" class="btn btn-md btn-danger"><span class="glyphicon glyphicon-pencil"></span></a>
                                </div>
                            
                            
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">Not Found!!</div>

                        <div class="panel-body">
                            <p>Sorry! No post found.</p>
                        </div>
                    </div>
                <?php endif; ?>

                <div align="center">
                    <?php echo $posts->appends(['search' => request()->get('search')])->links(); ?>

                </div>

            </div>

        </dev>
    </dev>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\blog-app-laravel\resources\views/frontend/index.blade.php ENDPATH**/ ?>