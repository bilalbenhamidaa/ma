

<?php $__env->startSection('title', 'Connexion'); ?>

<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
            color: #b41ecf; /* Dark violet heading */
            text-align: center;
        }
        .market-details-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .market-details-table th, .market-details-table td {
            padding: 12px;
            border: 1px solid #ddd; /* Light gray borders */
            text-align: left;
        }
        .market-details-table th {
            background-color: #b41ecf; /* Dark violet header background */
            color: #fff; /* White text for headers */
        }
        .market-details-table tr:nth-child(even) {
            background-color: #E6E6FA; /* Light violet background for even rows */
        }
        .market-details-table tr:nth-child(odd) {
            background-color: #F8F8FF; /* Light gray background for odd rows */
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            font-size: 14px;
            font-weight: bold;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            border: 1px solid transparent;
            border-radius: 4px;
            user-select: none;
            text-decoration: none;
            transition: background-color 0.3s ease, border-color 0.3s ease;
            background-color: #007bff; /* Blue button color */
            color: #fff; /* White text color */
        }
        .btn:hover, .btn:focus {
            background-color: #0056b3; /* Darker shade on hover */
            border-color: #004085; /* Darker shade border on hover */
        }
    </style>
    <title>Détails du Marché</title>
</head>
<body>
    <div class="container">
        <h1>Détails du marché</h1>
        <table class="market-details-table">
            <tr>
                <th>Numéro de marché :</th>
                <td><?php echo e($gestionMarche->numero_marche); ?></td>
            </tr>
            <tr>
                <th>Intitulé du marché :</th>
                <td><?php echo e($gestionMarche->intitule_marche); ?></td>
            </tr>
            <tr>
                <th>Numéro de compte principal :</th>
                <td><?php echo e($gestionMarche->numero_compte_principal); ?></td>
            </tr>
            <tr>
                <th>Banque du compte principal :</th>
                <td><?php echo e($gestionMarche->banque_compte_principal); ?></td>
            </tr>
            <tr>
                <th>Numéro de compte avenant :</th>
                <td><?php echo e($gestionMarche->numero_compte_avenant); ?></td>
            </tr>
            <tr>
                <th>Banque du compte avenant :</th>
                <td><?php echo e($gestionMarche->banque_compte_avenant); ?></td>
            </tr>
            <tr>
                <th>Montant du marché :</th>
                <td><?php echo e($gestionMarche->montant_marche); ?></td>
            </tr>
            <tr>
                <th>Montant de l'avenant :</th>
                <td><?php echo e($gestionMarche->montant_avenant); ?></td>
            </tr>
            <tr>
                <th>Montant de nantissement :</th>
                <td><?php echo e($gestionMarche->montant_nantissement); ?></td>
            </tr>
            <tr>
                <th>Montant d'ordonnancement :</th>
                <td><?php echo e($gestionMarche->montant_ordonnancement); ?></td>
            </tr>
            <tr>
                <th>Reste à ordonnancer (nantissement) :</th>
                <td><?php echo e($gestionMarche->reste_ordonnancer_nantissement); ?></td>
            </tr>
            <tr>
                <th>RIB de l'avenant :</th>
                <td><?php echo e($gestionMarche->avenant_rib); ?></td>
            </tr>
            <tr>
                <th>Banque :</th>
                <td><?php echo e($gestionMarche->banque); ?></td>
            </tr>
            <tr>
                <th>Observations :</th>
                <td><?php echo e($gestionMarche->observations); ?></td>
            </tr>
        </table>
        <a href="<?php echo e(route('gestion_marches.index')); ?>" class="btn">Revenir à la liste des marchés</a>
    </div>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\marche\resources\views/gestion_marches_show.blade.php ENDPATH**/ ?>