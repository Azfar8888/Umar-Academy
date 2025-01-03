    <?php $__env->startSection('title'); ?> 
        <?php echo app('translator')->get('fees::feesModule.fees_invoice'); ?>
    <?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>
    <?php echo $__env->make('fees::_allFeesList',['role'=>'admin'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backEnd.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/r5g3w8ncebh7/public_html/portal.umaracademy.org/Modules/Fees/Resources/views/feesInvoice/feesInvoiceList.blade.php ENDPATH**/ ?>