<div>
    @php
    use Carbon\Carbon;
    Carbon::setLocale('fr_FR');
    @endphp

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>

    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Centre</th>
                <th>Corp</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($programmations as $programmation)
                <tr>
                    <td>{{ Carbon::parse($programmation->date)->translatedFormat('d F Y') }}</td>
                    <td>{{ $programmation->centre->nom }}</td>
                    <td>{{ $programmation->corp->nom }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>



</div>
