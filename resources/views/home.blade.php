<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Laravel Migration Seeder</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="container py-5">

        <div class="train-board p-4">
            <h1 class="text-center mb-4">
                BOOLEAN CENTRAL STATION
            </h1>
            <div class="">
                <table class="table table-dark table-hover align-middle">
                    <thead>
                        <tr>
                            <th>Train</th>
                            <th>Operator</th>
                            <th>Departure</th>
                            <th>Arrival</th>
                            <th>Dep. Time</th>
                            <th>Arr. Time</th>
                            <th>Dep. Platform</th>
                            <th>Arr. Platform</th>
                            <th>Delay</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($trains as $train)
                            <tr class="board-row">
                                <td>{{ $train->train_number }}</td>
                                <td>{{ $train->operator }}</td>
                                <td>{{ $train->departure_station }}</td>
                                <td>{{ $train->arrival_station }}</td>
                                <td>{{ date('H:i', strtotime($train->departure_time)) }}</td>
                                <td>{{ date('H:i', strtotime($train->arrival_time)) }}</td>
                                <td>{{ $train->departure_platform }}</td>
                                <td>{{ $train->arrival_platform }}</td>
                                <td>
                                    @if ($train->delay_minutes > 0)
                                        +{{ $train->delay_minutes }} min
                                    @else
                                        —
                                    @endif
                                </td>
                                <td>
                                    <span class="status status-{{ $train->status }}">
                                        {{ str_replace('_', ' ', $train->status) }}
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>

    </div>
</body>

</html>