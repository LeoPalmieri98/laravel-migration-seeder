<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Tabellone Treni</title>
</head>

<body class="bg-light">

    <h1>Orario dei treni</h1>
    
    <div class="container mt-5">
        <h1>Lista Treni</h1>


        <div class="row">
            
            @foreach ($trains as $train)

                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            
                            <h3>{{ $train->azienda }} ({{ $train->codice_treno }})</h3>
                            
                            <hr>

                            <p><strong>Da:</strong> {{ $train->stazione_partenza }}</p>
                            <p><strong>A:</strong> {{ $train->stazione_arrivo }}</p>
                            <p><strong>Orario:</strong> {{ $train->orario_partenza }}</p>
        
                        </div>
                    </div>

                </div>
            @endforeach

        </div>
    </div>

</body>
</html>