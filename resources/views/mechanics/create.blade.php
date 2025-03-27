@extends("layout")

@section("content")
    <div class="row">
        <div class="col-4">
            <form action="{{ route('mechanics.create') }}" method="POST">
                @csrf()
                <div class="form-group mb-3">
                    <label for=""> Név</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Szervíz</label>
                    <select name="service_id" class="form-select">
                        @foreach ($services as $service)
                            <option value="{{ $service->id }}">
                                {{ $service->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-success">
                    Mentés
                </button>
            </form>
        </div>
        
    </div> 
@stop