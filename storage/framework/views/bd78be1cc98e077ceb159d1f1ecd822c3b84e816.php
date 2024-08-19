

<?php $__env->startSection('title', 'Connexion'); ?>

<?php $__env->startSection('content'); ?>*



<!DOCTYPE html>
<html>
<head>
    <title>Gestion des Marchés</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f0f0; /* Light gray background */
            color: #333; /* Dark gray text */
        }
        .container {
            max-width: 1200px; /* Adjusted max-width for larger screens */
            margin: 20px auto;
            background-color: #fff; /* White background for content */
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1); /* Subtle shadow effect */
        }
        h1 {
            color: #4B0082; /* Dark violet heading */
            text-align: center;
            margin-bottom: 20px; /* Add margin-bottom for spacing */
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .table th, .table td {
            border: 1px solid #ddd; /* Light gray borders */
            padding: 12px; /* Increased padding for better readability */
            text-align: left;
        }
        .table th {
            background-color: #4B0082; /* Dark violet header background */
            color: #fff; /* White text for headers */
        }
        .table tr:nth-child(even) {
            background-color: #E6E6FA; /* Light violet background for even rows */
        }
        .table tr:nth-child(odd) {
            background-color: #F8F8FF; /* Light gray background for odd rows */
        }

        /* Responsive styles for larger screens */
        @media (min-width: 992px) {
            .container {
                padding: 30px;
            }
            .table td, .table th {
                padding: 15px; /* Increased padding for better readability on larger screens */
            }
        }
    </style>

</head>
<body>
    <div class="container">
        <h1>Liste des Marchés</h1>

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
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $Marches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Marche): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($Marche->numero_marche); ?></td>
                        <td><?php echo e($Marche->intitule_marche); ?></td>
                        <td><?php echo e($Marche->numero_compte_principal); ?></td>
                        <td><?php echo e($Marche->banque_compte_principal); ?></td>
                        <td><?php echo e($Marche->numero_compte_avenant); ?></td>
                        <td><?php echo e($Marche->banque_compte_avenant); ?></td>
                        <td><?php echo e($Marche->montant_avenant); ?></td>
                        <td><?php echo e($Marche->montant_nantissement); ?></td>
                        <td><?php echo e($Marche->montant_ordonnancement); ?></td>
                        <td><?php echo e($Marche->reste_ordonnancer_nantissement); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\marche\resources\views/marches.blade.php ENDPATH**/ ?>