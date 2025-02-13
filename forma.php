<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Celebrity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="forma.php">Forma</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container mt-5">
      <h1>Dodaj poznatu osobu</h1>
      <form action="upload.php" method="post">
        <div class="mb-3">
          <label for="ime" class="form-label">Ime</label>
          <input type="text" class="form-control" id="ime" name="ime" required>
        </div>
        <div class="mb-3">
          <label for="prezime" class="form-label">Prezime</label>
          <input type="text" class="form-control" id="prezime" name="prezime" required>
        </div>
        <div class="mb-3">
          <label for="posao" class="form-label">Posao</label>
          <input type="text" class="form-control" id="posao" name="posao" required>
        </div>
        <div class="mb-3">
          <label for="godine" class="form-label">Godine</label>
          <input type="number" class="form-control" id="godine" name="godine" required>
        </div>
        <button type="submit" class="btn btn-primary">Dodaj</button>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoT0z1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
