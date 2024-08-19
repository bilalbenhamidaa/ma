

<?php $__env->startSection('content'); ?>
<div class="login-container">
    <h2>Inscription</h2>
    <form method="POST" action="<?php echo e(route('register')); ?>">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="password_confirmation">Confirmez le mot de passe</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
        </div>
        <button type="submit" class="btn">S'inscrire</button>
    </form>
    <p>Déjà inscrit ? <a href="/" class="login-link">Connectez-vous ici</a></p>
</div>

<style>
    body {
        background: linear-gradient(135deg, #22b4a7, #08c, #b41ecf, #fc00ff);
        background-size: 400% 400%;
        animation: gradientAnimation 15s ease infinite;
        font-family: Arial, sans-serif;
    }

    @keyframes gradientAnimation {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    .login-container {
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
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

    input[type="text"],
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
        display: inline-block;
        text-decoration: none; /* ajouter pour liens */
        text-align: center; /* ajouter pour liens */
    }

    .btn:hover {
        background-color: #fc00ff; /* rose vif */
    }

    .login-link {
        color: #08c; /* couleur personnalisée pour le lien */
        text-decoration: underline; /* souligner le lien */
    }

    .login-link:hover {
        color: #b41ecf; /* couleur au survol du lien */
    }

    .error-message {
        color: #ff0000; /* rouge */
        margin-top: 10px;
    }

    .alert {
        background-color: #4CAF50; /* vert */
        color: white;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 10px;
    }
</style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\marche\resources\views/register.blade.php ENDPATH**/ ?>