
<div class="container-fluid">
    <div class="row">

      <nav class="col-md-3 col-lg-2 d-md-block sidebar">
        <div class="position-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="bi bi-house"></i> Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('books.index') }}">
                <i class="bi bi-book"></i> Books
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('books.create') }}">
                  <i class="bi bi-book"></i> Add Book
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{ route('books.create') }}">
                  <i class="bi bi-gear"></i> Setting
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" href="{{ route('books.create') }}">
                  <i class="bi bi-bell"></i>notification
                </a>
              </li>


          </ul>
        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
        @yield('content')
      </main>
    </div>
  </div>
