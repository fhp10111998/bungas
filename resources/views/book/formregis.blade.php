<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-3">
         <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand">Perpustakaan</a>
            <form class="d-flex" role="search">
            <a href="/indexbook" class="btn btn-outline-success">Kembali</a>
            </form>
        </div>
        </nav>
        <h2>Form Regis Buku</h2>
        <form method="post" action="/hasilbook">
            @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Kode Buku</label>
            <input type="text" class="form-control" id="" name="kodebuku">   
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Judul Buku</label>
            <input type="text" class="form-control" id="" name="judulbuku">   
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Pengarang Buku</label>
            <input type="text" class="form-control" id="" name="pengarang">   
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Ringkasan</label>
            <input type="text" class="form-control" id="" name="ringkasan">   
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Harga</label>
            <input type="text" class="form-control" id="" name="harga">   
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Stok</label>
            <input type="text" class="form-control" id="" name="stok">   
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>