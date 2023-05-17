<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">   
    <link rel="stylesheet" href="ben_ilgi.css">
    <script src="ben_ilgi.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>İlgi Alanlarım</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mx-5 mt-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="./hakkinda.php">Hakkında</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Ben</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="./ben_cv.php">Özgeçmiş</a></li>
                    <li><a class="dropdown-item" href="./ben_ilgi.php">İlgi alanlarım</a></li>
                </ul>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Şehrim</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="./sehrimiz.php">Şehrimiz</a></li>
                    <li><a class="dropdown-item" href="./mirasimiz.php">Mirasımız</a></li>
                </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="./iletisim.php">İletişim</a></li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="./giris.php">Giriş</a></li>
            </ul>
        </div>
    </nav>
    <main class="container" id="pageIntro">
        <div class="row">
            <div class="col-3" id="divIMG"><img src="kedi.jpg" alt="benim kedi" id="kediIMG"></div>
            <article class="col-9" id="pageInfo">
                <article id="pageText">
                <h1>Kedim</h1>
                <p>&nbsp;&nbsp;&nbsp;&nbsp; Bu fotoğrafını görmüş olduğunuz kedinin adı Paşa. Kendisi 10 yaşında ve 10 senedir ailemizle beraber yaşamaktadır. Ben hayatımın büyük bir bölümünü kapladığı için kedilerin ilgi alanlarımdan biri olduğu düşünüyorum. O yüzden altta görmüş olduğunuz buttona basarak rastgele daha farklı kedilere ulaşabilirsiniz.</p>
                </article>
                <button id="btnKedi" onclick="getir()">Bu tuşa basınız.</button>
            </article>
        </div>
    </main>
    <div id="apiIMG"></div>
</body>
</html>
