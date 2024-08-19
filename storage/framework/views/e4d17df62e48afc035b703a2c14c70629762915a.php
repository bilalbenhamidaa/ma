<!DOCTYPE html>
<html>
<head>
    <title>Gestion des Marchés</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0; /* Light gray background */
            color: #333; /* Dark gray text */
        }
        .container {
            max-width: 1200px; /* Adjusted max-width for larger screens */
            margin: 20px auto;
            background-color: #fff; /* White background for content */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1); /* Subtle shadow effect */
        }
        h1 {
            color: #555; /* Dark gray heading */
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .table th, .table td {
            border: 1px solid #ddd; /* Light gray borders */
            padding: 10px; /* Increased padding for better readability */
            text-align: left;
        }
        .table th {
            background-color: #f2f2f2; /* Light gray header background */
        }
        .table tr:nth-child(even) {
            background-color: #f9f9f9; /* Alternate row background */
        }
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
            color: #31708f; /* Blueish alert text */
            background-color: #d9edf7; /* Light blue alert background */
            border-color: #bce8f1; /* Border color for alert */
        }
        .alert-success {
            color: #3c763d; /* Green success alert text */
            background-color: #dff0d8; /* Light green success alert background */
            border-color: #d6e9c6; /* Border color for success alert */
        }
        .btn {
            display: inline-block;
            padding: 8px 12px;
            margin-right: 5px;
            font-size: 14px;
            font-weight: bold;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            border: 1px solid transparent;
            border-radius: 4px;
            user-select: none;
            text-decoration: none;
        }
        .btn-primary {
            color: #fff;
            background-color: #337ab7; /* Primary button color */
            border-color: #2e6da4; /* Border color for primary button */
        }
        .btn-primary:hover, .btn-primary:focus {
            background-color: #286090; /* Darker shade on hover */
            border-color: #204d74; /* Darker shade border on hover */
        }
        .btn-success {
            color: #fff;
            background-color: #5cb85c; /* Success button color */
            border-color: #4cae4c; /* Border color for success button */
        }
        .btn-success:hover, .btn-success:focus {
            background-color: #4cae4c; /* Darker shade on hover */
            border-color: #398439; /* Darker shade border on hover */
        }
        .btn-danger {
            color: #fff;
            background-color: #d9534f; /* Danger button color */
            border-color: #d43f3a; /* Border color for danger button */
        }
        .btn-danger:hover, .btn-danger:focus {
            background-color: #c9302c; /* Darker shade on hover */
            border-color: #ac2925; /* Darker shade border on hover */
        }

        /* Responsive styles for larger screens */
        @media (min-width: 992px) {
            .container {
                padding: 30px;
            }
            .table td, .table th {
                padding: 12px; /* Increased padding for better readability on larger screens */
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Liste des Marchés</h1>

        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <table class="table">
            <thead>
                <tr>
                    <th>Numéro de Marché</th>
                    <th>Intitulé de Marché</th>
                    <th>Numéro Compte Principal</th>
                    <th>Banque Compte Principal</th>
                    <th>Numéro Compte Avenant</th>
                    <th>Banque Compte Avenant</th>
                    <th>Montant d'Avenant</th>
                    <th>Montant de Nantissement</th>
                    <th>Montant d'Ordonnancement</th>
                    <th>Reste à Ordonnancer Nantissement</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $gestionMarches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gestionMarche): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($gestionMarche->numero_marche); ?></td>
                        <td><?php echo e($gestionMarche->intitule_marche); ?></td>
                        <td><?php echo e($gestionMarche->numero_compte_principal); ?></td>
                        <td><?php echo e($gestionMarche->banque_compte_principal); ?></td>
                        <td><?php echo e($gestionMarche->numero_compte_avenant); ?></td>
                        <td><?php echo e($gestionMarche->banque_compte_avenant); ?></td>
                        <td><?php echo e($gestionMarche->montant_avenant); ?></td>
                        <td><?php echo e($gestionMarche->montant_nantissement); ?></td>
                        <td><?php echo e($gestionMarche->montant_ordonnancement); ?></td>
                        <td><?php echo e($gestionMarche->reste_ordonnancer_nantissement); ?></td>
                        <td>
                            <a href="<?php echo e(route('gestion_marches.show', $gestionMarche->id)); ?>" class="btn btn-primary">Voir</a>
                            <a href="<?php echo e(route('gestion_marches.edit', $gestionMarche->id)); ?>" class="btn btn-success">Modifier</a>
                            <form action="<?php echo e(route('gestion_marches.destroy', $gestionMarche->id)); ?>" method="POST" style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <a href="<?php echo e(route('gestion_marches.create')); ?>" class="btn btn-primary">Créer un nouveau marché</a>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\marche\resources\views/gestion_marches.blade.php ENDPATH**/ ?>