<?php $__env->startSection('content'); ?>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard </div>

                <div class="card-body">
                    <div id="armario">
                        <h2> Meus Armarios</h2>
                        <br>
                        <button  class="btn btn-primary">Adicionar</button>
                    </div>
                  
                    <div id="roupa">
                        <h2> Minhas roupas</h2>
                        <br>
                        <button class="btn btn-primary">Adicionar</button>
                    </div>
                   

                   
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\RoupaBox\resources\views/home.blade.php ENDPATH**/ ?>