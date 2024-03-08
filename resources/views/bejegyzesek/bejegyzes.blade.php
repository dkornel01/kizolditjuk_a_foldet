<x-app-layout>
    <head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> 
    </head>
    <div class="tablazat">
        <thead>
            <tr>
                <th>
                'Osztaly'
                </th>
                <th>
                'Tevékenység'
                </th>
                <th>
                'Pont'
                </th>
                <th>
                'Státusz'
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($bejegyzes as $row)
                <tr>
                    <td>{{$row->osztaly_id}}</td>
                    <td>{{$row->tevekenyseg_nev}}</td>
                    <td>{{$row->pontszam}}</td>
                    <td>{{$row->allapot}}</td>
                </tr>
        </tbody>
    </div class="tablazat">
</x-app-layout>