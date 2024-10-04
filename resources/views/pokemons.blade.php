<!-- resources/views/pokemon_view.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Pokemon Details</h1>
        @if($pokemonData)
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Height</th>
                        <th>Weight</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pokemonData as $pokemon)
                        <tr>
                            {{-- <td>{{ $pokemon['Pokemon ID'] }}</td> --}}
                            <td>{{ $pokemon['Name'] }}</td>
                            <td>{{$pokemon['Name etymology']}}</td>
                            <td>{{ $pokemon['Height'] }}</td>
                            <td>{{ $pokemon['Weight'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No data available.</p>
        @endif
    </div>
</body>
</html>
