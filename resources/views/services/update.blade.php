@extends("layout")

@section("content")
<div class="row">
    <div class="mx-auto col-4">
        <form action="{{ route('services.update', ['service' => $service->id])  }}" method="POST">
            @csrf()
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="{{ $service->name }}">
            </div>
            <div class="form-group">
                <label>Model</label>
                <input type="text" name="capacity" class="form-control"  value="{{ $service->capacity }}">
            </div>
            <button type="submit" class="btn btn-success mt-3">
                Módositás mentése
            </button>
        </form>
    </div>
</div>
@stop