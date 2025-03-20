@extends("layout")

@section("content")
    <div class="row">
        <div class="col-12">
            <a href="{{ route('cars.create') }}" class="btn btn-primary">Létrehozás</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Márka</th>
                        <th>Model</th>
                        <th>Gyártási év</th>
                        <th>Szervíz neve</th>
                        <th>Múveletek</th>
                    </tr>
                </thead>
                <tbody>
                    @if(sizeof($cars) > 0)
                        @foreach($cars as $car)
                            <tr>
                                <td>
                                    {{ $car->id }}
                                </td>
                                <td>
                                    {{ $car->brand }}
                                </td>
                                <td>
                                    {{ $car->model }}
                                </td>
                                <td>
                                    {{ $car->year }}
                                </td>
                                <td>
                                    {{ $car->service ? $car->service->name : ""}}
                                </td>
                                <td>
                                    <a href="{{ route('cars.updateForm', ['car' => $car->id]) }}" class="btn btn-warning">
                                        Módositás
                                    </a>
                                    
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5">
                                <h1>Nincs Adat!</h1>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop