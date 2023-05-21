<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">   
    <link rel="stylesheet" href="ileti.css">
    <title>İleti</title>
</head>
<body>
    <a href="./hakkinda.php"><button>Anasayfaya Geri Dön</button></a>
    <a href="./iletisim.php"><button>İletişime Geri Dön</button></a>
    <main>
        <p>İsim:  <?php echo $_POST["isim"]; ?> </p>
        <p>Email: <?php echo $_POST["email"]; ?> </p>
        <p>Cinsiyet:  <?php echo $_POST["cinsiyet"]; ?> </p>
        <p>Doğum Tarihi: <?php echo $_POST["dtarih"]; ?> </p>
        <p>En sevdiği renk: <?php echo $_POST["frenk"]; ?> </p>
        <p>Mesaj:  <?php echo $_POST["mesaj"]; ?> </p>
    </main>
</body>
</html>