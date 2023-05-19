<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">   
    <link rel="stylesheet" href="sehrimiz.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Şehrim</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mx-5 mt-3 rounded-pill">
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
        
    <div id="sliderContainer">
        <div class="slide">
            <a href="#"><img src="slide1.jpg" class="slideIMG"></a>
        </div>
        <div class="slide">
            <a href="#"><img src="slide2.jpg" class="slideIMG"></a>
        </div>
        <div class="slide">
            <a href="#"><img src="slide3.jpg" class="slideIMG"></a>
        </div>
        <div class="slide">
            <a href="#"><img src="slide4.jpg" class="slideIMG"></a>
        </div>

        <a id="arrowPrev" onclick="plusSlides(-1)">&lArr;</a>
        <a id="arrowNext" onclick="plusSlides(1)">&rArr;</a>
    </div>
        
</body>
    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
        showSlides(slideIndex += n);
        }

        function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("slide");
        if (n > slides.length) {slideIndex = 1}    
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        slides[slideIndex-1].style.display = "block";  
        }
    </script>
</html>
