@extends("layout")

@section("content")
    <div class="row">
        <div class="col-12">
            <h1>Szerelők lista</h1>
            <a href="{{ route('mechanics.createForm') }}" class="btn btn-primary">
                Új szerelő
            </a>
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Szerviz ID</th>
                    <th>Műveletek</th>
                </tr>
                @if(sizeof($mechanics) > 0)
                    @foreach ($mechanics as $mechanic)
                        <tr>
                            <td>
                                {{ $mechanic->id }}
                            </td>
                            <td>
                                {{ $mechanic->name }}
                            </td>
                            <td>
                                {{ isset($mechanic->service_id) ? $mechanic->service->name : ""}}
                            </td>
                            <td class="d-flex flex-col">
                                <a class="btn btn-warning" href="{{ route('mechanics.updateForm', ['mechanic' => $mechanic->id]) }}">
                                    Módosítás
                                </a>
                                <form method="POST" action="{{ route('mechanics.delete', ['mechanic' => $mechanic->id]) }}">
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