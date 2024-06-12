<div>
    @if ($resultats->isNotEmpty())
    <table class="table align-middle table-hover m-0 truncate">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nina</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Epreuve Technique</th>
                <th scope="col">Culture Générale</th>
                <th scope="col">Moyenne Générale</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($resultats as $index => $candidat)
                <tr>
                    <td>{{ $candidat->id }}</td>
                    <td>{{ $candidat->nina }}</td>
                    <td>{{ $candidat->nom }}</td>
                    <td>{{ $candidat->prenom }}</td>
                    <td>{{ $candidat->note->epreuveTechnique }}</td>
                    <td>{{ $candidat->note->cultureGeneral }}</td>
                    <th>{{ (($candidat->note->cultureGeneral +$candidat->note->epreuveTechnique)/2) }}</th>
                </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <h1>Resultat non disponible</h1>
    @endif
</div>
