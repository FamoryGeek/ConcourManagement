@php
    use Carbon\Carbon;
@endphp
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats</title>
    <style>
        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        header::after {
            content: "";
            display: table;
            clear: both;
        }

        header div {
            width: 48%;
            float: left;
            margin: 1%;
        }

        header div.right {
            float: right;
            text-align: right;
        }
    </style>
</head>

<body>
    <header>
        <div>
            <h4>MINISTERE DU DIALOGUE SOCIAL,<br>DU TRAVAIL ET DE LA FONCTION <br>PUBLIQUE</h4>
            <p>******************</p>
            <h4>SECRETARIAT GENERAL</h4>
            <p>******************</p>
            <h3>CENTRE NATIONAL DES CONCOURS <br> DE LA FONCTION PUBLIQUE</h3>
            <p>******************</p>
        </div>
        <div class="right">
            <h4>REPUBLIQUE DU MALI</h4>
            <p>Un Peuple - Un But - Une Foi</p>
        </div>
    </header>
    <main>
        <div style="text-align: center;">
            <h4>COMMUNIQUE N°{{ $session }}--------/MDSTFP-SG-CNCFP</h4>
            <p>Le ministre du Dialogue Social, du Travail et de la Fonction publique, Communique :</p>
        </div>
        <p style="text-align: justify;">Les candidats dont les noms suivent sont déclarés admis par ordre de mérite aux concours
            directs de recrutement dans la Fonction publique d'Etat, au titre de l'exercice budgétaire
            2019, ouverts par communiqué n° 2019-000016/MDSTFP-SG-CNCFP du 20 septembre
            2019 rectifié, portant sur 884 emplois à pouvoir.
        </p>
        <h4>Cadre : {{ $cadre }}</h4>
        <h4>Corps: {{ $corp }}</h4>
        <h4>Specialite: {{ $specialite }}</h4>
        <p>Nombre de candidats admis: {{ $nombre }}</p>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nina</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Date de Naissance</th>
                    <th scope="col">Lieu de Naissance</th>
                    <th scope="col">Localité</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($resultats as $index => $candidat)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $candidat->nina }}</td>
                        <td>{{ $candidat->nom }}</td>
                        <td>{{ $candidat->prenom }}</td>
                        <td>{{ Carbon::parse($candidat->dateNaissance)->format('d-m-Y') }}</td>
                        <td>{{ strtoupper($candidat->lieuNaissance) }}</td>
                        <td>{{ $candidat->localite->nom }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
</body>

</html>
