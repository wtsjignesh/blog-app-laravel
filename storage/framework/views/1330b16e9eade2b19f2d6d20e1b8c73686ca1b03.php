<div class="row form-search">
    <?php echo Form::open(['method' => 'GET', 'role' => 'form']); ?>

            <div class="col-md-8">
                <?php echo Form::text('search', request()->get('search'), ['class' => 'form-control', 'placeholder' => 'Search...']); ?>

            </div>
            <div class="col-md-2">
                <?php echo Form::submit('Sumbit', ['class' => 'btn btn-block btn-default']); ?>

            </div>
            <div class="col-md-2">
                <a href="<?php echo e(url('posts/create')); ?>" class="btn btn-primary pull-right">Add New Entry</a>
            </div>
    <?php echo Form::close(); ?>

</div>
<?php /**PATH D:\xampp\htdocs\blog-app-laravel\resources\views/frontend/_search.blade.php ENDPATH**/ ?>