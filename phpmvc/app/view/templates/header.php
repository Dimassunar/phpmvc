
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul'] ?> </title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <center><a class="nav-item" style="font-weight:bold; font-family:arial;">SMK NEGERI 2 TRENGGALEK</a></center>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
        <a class="navbar-brand" href="<?= BASE_URL; ?>/home" style="font-weight:bold;font-family:arial; margin-right:340px">REKAYASA PERANGKAT LUNAK</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data_target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link " href="<?= BASE_URL; ?>/home">Home<span class="sr-only"></span></a>
                    <a class="nav-item nav-link " href="<?= BASE_URL; ?>/komli">Kompetensi Keahlian</a>
                    <a class="nav-item nav-link " href="<?= BASE_URL; ?>/guru">Data Guru</a>
                    <a class="nav-item nav-link " href="<?= BASE_URL; ?>/siswa">Data Siswa</a>
                    <a class="nav-item nav-link " href="<?= BASE_URL; ?>/user/profile">About</a>
                </div>
            </div>
        </div>
    </nav>