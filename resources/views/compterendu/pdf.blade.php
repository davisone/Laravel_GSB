<!-- resources/views/compterendu/pdf.blade.php -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compte Rendu de Visite</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }

        h1 {
            color: #1f497d;
            border-bottom: 2px solid #1f497d;
        }

        p {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .info {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>Compte Rendu de Visite du {{ $compteRendu->RAP_DATE ? date('d/m/Y', strtotime($compteRendu->RAP_DATE)) : '' }}</h1>

    <div class="info">
    <p><strong>Numéro de Compte Rendu:</strong> {{ $compteRendu->id? $compteRendu->id : '' }}</p>
        <p><strong>Numéro du Praticien:</strong> {{ $compteRendu->PRA_NUM ? $compteRendu->PRA_NUM : '' }}</p>
        <p><strong>Nom et Prénom du praticien</strong> {{ $compteRendu->praticien->PRA_NOM }} {{ $compteRendu->praticien->PRA_PRENOM }}<p>
            
    </div>

    <div class="info">
        <p><strong>Motif de la Visite:</strong> {{ $compteRendu->RAP_MOTIF ? $compteRendu->RAP_MOTIF : '' }}</p>
        <p><strong>Bilan de la Visite:</strong> {{ $compteRendu->RAP_BILAN ? $compteRendu->RAP_BILAN : '' }}</p>
    </div>

    <!-- Ajoutez d'autres détails du compte rendu ici -->

</body>
</html>
