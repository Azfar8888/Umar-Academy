<?php if (! $__env->hasRenderedOnce('20cc41d3-1e01-4e4e-97ca-01f6a73a98a1')): $__env->markAsRenderedOnce('20cc41d3-1e01-4e4e-97ca-01f6a73a98a1');
$__env->startPush(config('pagebuilder.site_style_var')); ?>
    <style>
        iframe {
            width: 100% !important;
            height: 100% !important;
        }
        .google_map{
            height: 200px;
        }
    </style>
<?php $__env->stopPush(); endif; ?>
<div class="contacts_info mt-5">
    <p><?php echo pagesetting('google_map_editor'); ?></p>
    <div class="google_map w-100">
        <?php echo pagesetting('google_map_key'); ?>

    </div>
</div>
<?php /**PATH /home/r5g3w8ncebh7/public_html/portal.umaracademy.org/resources/views/themes/edulia/pagebuilder/google-map/view.blade.php ENDPATH**/ ?>