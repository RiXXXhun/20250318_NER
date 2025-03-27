@extends("layout")

@section("content")
<div class="row">
    <div class="mx-auto col-4">
        <form action="{{ route('mechanics.update', ['mechanic' => $mechanic->id])  }}" method="POST">
            @csrf()
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="{{ $mechanic->name }}">
            </div>
            <button type="submit" class="btn btn-success mt-3">
                Módositás mentése
            </button>
        </form>
    </div>
</div>
@stop