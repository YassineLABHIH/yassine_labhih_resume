<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nouveau Message</title>
</head>
<body>
    <ul>
        <li><span style="font-weight: bold">Nom : </span>{{ $name }}</li>
        <li><span style="font-weight: bold">Prénom : </span>{{ $first_name }}</li>
        <li><span style="font-weight: bold">Mail :</span>{{ $email }}</li>
        <li><span style="font-weight: bold">Téléphone : </span>{{ $tel }}</li>
        <li><span style="font-weight: bold">Sujet : </span>{{ $subject }}</li>
    </ul>

    <p>{{ $text }}</p>

</body>
</html>


