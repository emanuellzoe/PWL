<!doctype html>
<html lang="en">
<head>
  <title>search movie</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/2.3.4/css/dataTables.dataTables.css">
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 bg-info py-4"></div>
    </div>
  </div>

  <div class="container my-4">
    <!-- Jika $search bisa kosong, cek dulu -->
    @if(isset($search) && $search->count())
      <div class="row">
        @foreach ($search as $s)
          <div class="col-sm-6 col-md-4 mb-4">
            <div class="card h-100">
              @if ($s->poster)
                <img src="{{ asset('storage/poster/'.$s->poster) }}"
                     alt="{{ $s->poster }}" class="card-img-top" style="height:200px; object-fit:cover;">
              @else
                <img src="{{ asset('storage/poster/no-image.png') }}"
                     alt="No Image" class="card-img-top" style="height:200px; object-fit:cover;">
              @endif

              <div class="card-body">
                <h5 class="card-title mb-1">{{ $s->title }}</h5>
                <p class="mb-1 text-muted">{{ $s->genre }}</p>
                <small class="text-secondary">{{ $s->year }}</small>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    @else
      <div class="alert alert-info">No results found.</div>
    @endif
  </div>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/2.3.4/js/dataTables.js"></script>
  <script>
    // pakai selector yang ada table; kalau tidak ada, hapus baris ini
    // new DataTable('#example');
  </script>
</body>
</html>
