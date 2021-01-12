
<?php $__env->startSection('content'); ?>

<body class="bcolor" id="bodycor" id="bodylogin">

<div class="container" >

    <div class="row">
        <div class="col-md-12 col-md-offset-5">
        <img id="imglogin" class="img" src="<?php echo e(URL::to('/assets/logo.png')); ?>" />
        </div>
      
            <div class="col-md-8 col-md-offset-2" id="painel-app">
               <!-- <div class="panel-heading" id="topo"><h3 class="titulo" id="tituloform">Entre com sua conta</h3></div>-->
               <div class="panel-heading" id="formletra">
               <div class="panel-body">
                    <form class="form-horizontal" id="" id="row" role="form" method="POST" action="<?php echo e(url('/login')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="email" class="col-md-4 control-label">Endereço de Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" placeholder="Digite seu email" maxlength="120"  value="<?php echo e(old('email')); ?>" required autofocus>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label for="password" class="col-md-4 control-label">Senha</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required  placeholder="Digite sua senha" maxlength="120">

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

           
                        <div class="form-group">
                             <!--<div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Manter-se conectado
                                    </label>
                                </div>
                            </div>-->
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" id="botao">
                                    Login
                                </button>
                                
                                <INPUT type="reset"  name="b2" value="Limpar" id="limpar" type="button" class="col-md-offset-1 btn btn-xs btn-danger">
                                <a class="btn btn-link" href="<?php echo e(url('/passwords/reset')); ?>  style="background-color:white">
                                Esqueceu a senha?

                                </a>
                            </div>
                        </div>
                       
                    </form>

                 </div>
            </div>
        </div>
    </div>
</div>
</body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\joao-\Documents\GitHub\IFSP_Projeto\resources\views/auth/login.blade.php ENDPATH**/ ?>