<!-- @extends('layouts.app') -->

@section('content')
    <div class="container">
        <h1>Add New Category</h1>
        <form action="{{ route('admin.categories.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="description">Category Description</label>
                <textarea name="description" id="description" class="form-control" rows="4"></textarea>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Add Category</button>
        </form>
    </div>
@endsection
