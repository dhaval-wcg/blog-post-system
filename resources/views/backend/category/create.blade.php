@extends('backend.layout.master')
@section('title', 'create category')
@section('path', 'create category')

@section('Pagename', 'Category')



@section('maindata')

<div class=" container">
  <div class="row">
    <h3 class="mt-5">Create Category</h3>
    <div class="col-md-12">
      <div class="card card-primary shadow-lg mb-5 bg-white rounded">
        <div class="card-header">
          <h3 class="card-title">Category</h3>
        </div>
        <form action="{{route('category.store')}}" method="post" id="category-create">
          @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="title">category title</label>
              <input required type="name" class="form-control" placeholder="Enter Category name" name="name" id="name">
              @if($errors->has('name'))
              <div class="error text-danger">{{ $errors->first('name') }}</div>
              @endif
            </div>
            <div class="form-group">
              <label for="title">category slug</label>
              <input required type="name" class="form-control " placeholder="Enter category slug" name="slug" id="slug" data-action="{{route('category.slug')}}" content="{{ csrf_token() }}">
              <p class="error-slug text-danger"></p>
              <p class="success-slug text-success"></p>
              @if($errors->has('slug'))
              <div class="error text-danger">{{ $errors->first('slug') }}</div>
              @endif
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

</div>

@endsection


@section('links')
    <script src="{{ asset('assets/custom_js/validate/categoryCreate.js') }}"></script>
@endsection
