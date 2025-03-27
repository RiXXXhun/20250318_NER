@extends("layout")

@section("content")
    <div class="row">
        <div class="col-12">
            <h1>Szervizek lista</h1>
            <a href="{{ route('services.createForm') }}" class="btn btn-primary">
                Új szervíz
            </a>
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Kapacitás</th>
                    <th>Műveletek</th>
                </tr>
                @if(sizeof($services) > 0)
                    @foreach ($services as $service)
                        <tr>
                            <td>
                                {{ $service->id }}
                            </td>
                            <td>
                                {{ $service->name }}
                            </td>
                            <td>
                                {{ $service->capacity }}
                            </td>
                            <td class="d-flex flex-col">
                                <a class="btn btn-warning" href="{{ route('services.updateForm', ['service' => $service->id]) }}">
                                    Módosítás
                                </a>
                                <form method="POST" action="{{ route('services.delete', ['service' => $service->id]) }}">
                                    @csrf()
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"> 
                                        Törlés
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4">
                            <h1>Nincs Adat</h1>
                        </td>
                    </tr>
                @endif
            </table>
        </div>
    </div>
@stop