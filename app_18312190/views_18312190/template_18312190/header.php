<html>
    <head>
    <title>Halaman <?= $data['judul'];?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?= BASEURL; ?>">Welcome</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>/mahasiswa">Mahasiswa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>/about">About</a>
            </li>
          </ul>
          <form class="d-flex" action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
            <input class="form-control me-2" type="search" placeholder="Search" name="keyword" id="keyword" autocomplete="off">
            <button class="btn btn-outline-success" type="submit" id="tombolSearch">Search</button>
          </form>
        </div>
      </div>
    </nav>
