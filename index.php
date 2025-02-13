<?php

$xml = simplexml_load_file('celebrities.xml');

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
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
    <h1>Celebrities</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoT0z1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <table class="table table-dark table-striped-columns">
    <thead>
  <tr>
      <th scope="row">Ime</th>
      <th scope="row">Prezime</th>
      <th scope="row">Posao</th>
      <th scope="row">Godine</th>
    </tr>
  </thead>
    <tbody>
    <?php foreach ($xml->celebrity as $celebrity): ?>
                    <tr>
                        <td><?php echo $celebrity->ime; ?></td>
                        <td><?php echo $celebrity->prezime; ?></td>
                        <td><?php echo $celebrity->posao; ?></td>
                        <td><?php echo $celebrity->godine; ?></td>
                    </tr>
                <?php endforeach; ?>
  </tbody>
</table>
</body>
</html>
