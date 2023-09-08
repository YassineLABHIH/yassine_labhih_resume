<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demande de devis</title>
</head>
<body>
    <h3>Client</h3>
    <ul>
        <li><span style="font-weight: bold">Nom : </span>{{ $name }}</li>
        <li><span style="font-weight: bold">Prénom : </span>{{ $first_name }}</li>
        <li><span style="font-weight: bold">Mail :</span>{{ $email }}</li>
        <li><span style="font-weight: bold">Téléphone : </span>{{ $tel }}</li>
        <li><span style="font-weight: bold">Société : </span>{{ $company }}</li>
        <li><span style="font-weight: bold">Activité : </span>{{ $activity }}</li>
    </ul>

    <hr>


    <h3>Besoin</h3>
    <ul>

        @if($showcase_site == true)
        <li>Site vitrine</li>
        @endif

        @if($e_commerce == true)
        <li>Site e-commerce</li>
        @endif

        @if($web_app == true)
        <li>Application web</li>
        @endif

        @if($mobile_app == true)
        <li>Application mobile</li>
        @endif

        @if($seo == true)
        <li>Référencement</li>
        @endif

        @if($other == true)
        <li>Autre</li>
        @endif

    </ul>

    <hr>

    <h3>Description</h3>
    @if($promo_code != '')
    <p style="font-weight: bold">Code promo : {{ $promo_code }}</p>
    @endif

    <p>{{ $description }}</p>

</body>
</html>
