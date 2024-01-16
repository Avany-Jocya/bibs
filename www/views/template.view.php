<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="rien du tout">
    <meta name="keywords" content="livres, fanfiction">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/5/sketchy/bootstrap.min.css">
    
    <title>biblio | <?= $titre ?> </title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Menu = Me n U</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Accueil
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='livres'>Livre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='a-propos'>A propos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='contact'>Contact</a>
        </li>
        
        
    </div>
  </div>
</nav>
<div id="container" class="m-2">
<h1 class="rounded border border-dark p2 m-2 text-center text-white bg-info"><?= $titre ?></h1>
<?= $content ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>