@extends("layout")

@section("content")
    <div class="row">
        <div class="col-4">
            <form action="{{ route('services.create') }}" method="POST">
                @csrf()
                <div class="form-group mb-3">
                    <label for=""> Név</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for=""> Kapacitás</label>
                    <input type="text" name="capacity" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">
                    Mentés
                </button>
            </form>
        </div>
        
    </div>
@stop