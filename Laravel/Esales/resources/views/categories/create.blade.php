@extends('layouts.app')

@section('content')
<div class="card card-default">
    <div class="card-header">
        {{ isset($category) ? 'Edit Category':'Create Category' }}
    </div>
     @include('partials.errors')
    <div class="card-body">
    
        <form action="{{ isset($category) ? route('categories.update', $category->id) : route('categories.store') }}" method="POST">
            @csrf

            @if (isset($category))
            @method('PUT')
            @endif

            <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" id="name" class="form-control" name="category_name" value="{{ isset($category) ? $category->category_name :'' }}">
            </div>
            <div class="form-group">
                <button  class="btn btn-success">
                    {{ isset($category) ? 'Update category' : 'Add category' }}
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
