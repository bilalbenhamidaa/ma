

<?php $__env->startSection('title', 'Connexion'); ?>

<?php $__env->startSection('content'); ?>
    <div class="login-container">
        <h2>Connexion</h2>
        
        <?php if(session('success')): ?>
            <div class="alert success-alert">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <?php if($errors->any()): ?>
            <div class="alert error-alert">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p><?php echo e($error); ?></p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
        
        <form method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="<?php echo e(old('email')); ?>" required>
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="error-message"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn">Connexion</button>
        </form>
        <p class="signup-text">Pas encore inscrit ? <a href="<?php echo e(route('register')); ?>" class="signup-link">Inscrivez-vous ici</a></p>
    </div>

    <style>
        body {
            background: linear-gradient(135deg, #22b4a7, #08c, #b41ecf, #fc00ff);
            background-size: 400% 400%;
            animation: gradientAnimation 15s ease infinite;
            font-family: Arial, sans-serif;
        }

        @keyframes gradientAnimation {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        .login-container {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 20px;
            max-width: 400px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            color: #000; /* noir */
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff; /* blanc */
            color: #000; /* noir */
        }

        .btn {
            background-color: #b41ecf; /* violet */
            color: #fff; /* blanc */
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            display: block;
            width: 100%;
        }

        .btn:hover {
            background-color: #fc00ff; /* rose vif */
        }

        .signup-text {
            color: #000; /* noir */
            text-align: center;
            margin-top: 20px;
        }

        .signup-link {
            color: #08c; /* couleur personnalisée pour le lien */
            text-decoration: underline; /* souligner le lien */
        }

        .signup-link:hover {
            color: #b41ecf; /* couleur au survol du lien */
        }

        .alert {
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
            text-align: center;
        }

        .success-alert {
            background-color: #4CAF50; /* vert */
            color: white;
        }

        .error-alert {
            background-color: #ff0000; /* rouge */
            color: white;
        }

        .error-message {
            color: #ff0000; /* rouge */
            margin-top: 10px;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\marche\resources\views/auth_login.blade.php ENDPATH**/ ?>