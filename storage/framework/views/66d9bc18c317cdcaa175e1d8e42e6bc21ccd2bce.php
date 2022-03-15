<div class="form-group<?php echo e($errors->has('title') ? ' has-error' : ''); ?>">
    <?php echo Form::label('title', 'Title', ['class' => 'col-md-2 control-label']); ?>


    <div class="col-md-8">
        <?php echo Form::text('title', null, ['class' => 'form-control', 'required', 'autofocus']); ?>


        <span class="help-block">
            <strong><?php echo e($errors->first('title')); ?></strong>
        </span>
    </div>
</div>

<div class="form-group<?php echo e($errors->has('description') ? ' has-error' : ''); ?>">
    <?php echo Form::label('description', 'Description', ['class' => 'col-md-2 control-label']); ?>


    <div class="col-md-8">
        <?php echo Form::textarea('description', null, ['class' => 'form-control', 'required']); ?>


        <span class="help-block">
            <strong><?php echo e($errors->first('description')); ?></strong>
        </span>
    </div>
</div>

<div class="form-group<?php echo e($errors->has('body') ? ' has-error' : ''); ?>">
    <?php echo Form::label('body', 'Body', ['class' => 'col-md-2 control-label']); ?>


    <div class="col-md-8">
        <?php echo Form::textarea('body', null, ['class' => 'form-control', 'required']); ?>


        <span class="help-block">
            <strong><?php echo e($errors->first('body')); ?></strong>
        </span>
    </div>
</div>

<?php
    if(isset($post)) {
        $tag = $post->tags->pluck('name')->all();
    } else {
        $tag = null;
    }
?>

<div class="form-group<?php echo e($errors->has('tags') ? ' has-error' : ''); ?>">
    <?php echo Form::label('tags', 'Tag', ['class' => 'col-md-2 control-label']); ?>


    <div class="col-md-8">
        <?php echo Form::select('tags[]', $tags, $tag, ['class' => 'form-control select2-tags', 'required', 'multiple']); ?>


        <span class="help-block">
            <strong><?php echo e($errors->first('tags')); ?></strong>
        </span>
    </div>
</div>
<?php /**PATH D:\xampp\htdocs\blog-app-laravel\resources\views/admin/posts/_form.blade.php ENDPATH**/ ?>