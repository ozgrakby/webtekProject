<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link rel="stylesheet" href="giris.css">
    <title>Login Sayfası</title>
</head>
<body>
    <main>
        <div id="divForm">
            <br><br><br>
            <h1>LOGIN</h1>
            <br><br><br>
            <form method="POST" action="./hakkinda.php" id="form">
                <label><b>Email: </b></label>
                <input type="email" id="email" placeholder="username@domain"><br><br>
                <label><b>Şifre: </b></label>
                <input type="password" id="passw" placeholder="********"><br><br>
                <input type="submit" value="Giriş Yap">
            </form>
            <br><br><br>
        </div>
    </main>
</body>
<script>
    var form = document.getElementById("form");

    form.addEventListener('submit', function(event){
        var email = document.getElementById("email").value;
        var passw = document.getElementById("passw").value;
        let uname = email.split("@")[0];
        if(email.split("@")[1] == "sakarya.edu.tr") {
            if(uname != "") {
                if(uname.length == 10 && noKontrol(uname)){
                    if(uname == passw) {
                        alert("Giriş Başarılı!");
                        submit();
                    }
                    else { event.preventDefault(); alert("Giriş Başarısız!"); }
                }
            }
            else { event.preventDefault(); alert("Giriş Başarısız!"); }
        } else { event.preventDefault(); alert("Giriş Başarısız!"); }
    })

    function noKontrol(uname){
        var char = uname.slice(0, 1);
        if(char == "b" || char == "g"){ return true;}
        else {return false;}
    }
</script>
</html>
