<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            padding: 20px
        }
        table{
            border: 1px;
            
        }
        tr td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>List Voitures</h1>
    <table>
        <tr>
            <td>id</td>
            <td>nom de la marque</td>
            <td>modele</td>
            <td>annee</td>
            <td>prix de location</td>
        </tr>
        @foreach ($voitures as $voiture)
            <tr>
                <td>{{ $voiture->id }}</td>
                <td>{{ $voiture->marque->nom }}</td>
                <td>{{ $voiture->modele }}</td>
                <td>{{ $voiture->annee }}</td>
                <td>{{ $voiture->prix_location_jour }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>