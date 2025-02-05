@extends('layouts.dashboard')

@section('content')
  <h1>Add New Book</h1>

  @if($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif

  <form action="{{ route('books.store') }}" method="POST">
      @csrf
      <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" name="name" id="name" required>
      </div>
      <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <textarea class="form-control" name="description" id="description" rows="3" required></textarea>
      </div>
      <div class="mb-3">
          <label for="price" class="form-label">Price</label>
          <input type="number" class="form-control" name="price" id="price" step="0.01" min="0" required>
      </div>
      <button type="submit" class="btn btn-primary">Create</button>
  </form>
@endsection
