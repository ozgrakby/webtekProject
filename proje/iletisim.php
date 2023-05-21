<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">   
    <link rel="stylesheet" href="iletisim.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>İletisim</title>
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
    
    <main id="formDiv">
        <form action="ileti.php" onsubmit="return formDogrula()" method="post" id="form">
            <label for="isim">İsiminiz: </label> <input type="text" name="isim" id="isim"><br>
            <label for="email">Emailiniz: </label> <input type="email" name="email" id="email"><br>
            <label for="cinsiyet">Cinsiyetiniz: </label> <select name="cinsiyet" id="cinsiyet"> <option value="none">Seçiniz</option> <option value="Erkek">Erkek</option> <option value="Kadın">Kadın</option> <option value="Diğer">Diğer</option> </select> <br>
            <label for="dtarih">Doğum tarihiniz: </label> <input type="date" id="dtarih" name="dtarih"> <br>
            <label for="frenk">En sevdiğiniz renk: </label> <input type="color" id="frenk" name="frenk"> <br>
            <label for="mesaj">Mesajınız: </label> <br> <textarea row="5" cols="60" id="mesaj" name="mesaj"> </textarea> <br>
            <input type="reset" class="button" value="Temizle">
            <input type="submit" class="button" value="Gönder"> 
        </form>
    </main>
    <section id="hataDiv"> </section>
    <script src="iletisim.js"></script>
</body>
</html>
