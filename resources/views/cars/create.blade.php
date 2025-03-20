@extends("layout")

@section("content")
    <div class="row">
        <div class="mx-auto col-4">
            <form action="{{ route('cars.create') }}" method="POST">
                @csrf()
                <div class="form-group">
                    <label>Márka</label>
                    <input type="text" name="brand" class="form-control">
                </div>
                <div class="form-group">
                    <label>Model</label>
                    <input type="text" name="model" class="form-control">
                </div>
                <div class="form-group">
                    <label>Gyártási év</label>
                    <input type="text" name="year" class="form-control">
                </div>
                <button type="submit" class="btn btn-success mt-3">
                    Létrehozás
                </button>
            </form>
        </div>
    </div>

@stop