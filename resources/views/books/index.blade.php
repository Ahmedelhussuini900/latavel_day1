@extends('layouts.dashboard')

@section('content')
  <div class="d-flex justify-content-between align-items-center mb-3">
      <h1>Books</h1>
      <a href="{{ route('books.create') }}" class="btn btn-success">
          <i class="bi bi-plus"></i> Add New Book
      </a>
  </div>

  @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  <table class="table table-hover">
      <thead>
          <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col" >Description</th>
              <th scope="col" >Price</th>
              <th scope="col">created_at</th>
              <th scope="col">updated_at</th>
              <th scope="col">Actions</th>



          </tr>
      </thead>
      <tbody>
          @foreach($books as $book)
          <tr>
              <td>{{ $book->id }}</td>
              <td>{{ $book->name }}</td>
              <td>{{ $book->description }}</td>
              <td>${{ number_format($book->price, 2) }}</td>
              <td>{{ $book->created_at }}</td>
              <td>{{ $book->updated_at }}</td>
              <td>
                  <a href="{{ route('books.edit', $book) }}" class="btn btn-primary btn-sm">
                      <i class="bi bi-pencil"></i> Edit
                  </a>
                  <form action="{{ route('books.destroy', $book) }}" method="POST" style="display:inline-block;">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                          <i class="bi bi-trash"></i> Delete
                      </button>
                  </form>
              </td>
          </tr>
          @endforeach
      </tbody>
  </table>

  <!-- Pagination (if needed) -->
  <div>
      {{ $books->links() }}
  </div>
@endsection
