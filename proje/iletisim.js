var hataDiv = document.getElementById("hataDiv");


function formDogrula() {
    let denetim = 0;
    hataDiv.style.display = "none"; hataDiv.innerHTML = ""; 
    let isim = document.forms["form"]["isim"].value;
    if(isim == ""){hataDiv.style.display = "block"; hataDiv.innerHTML+="<p>Lütfen isminizi giriniz.</p>"; denetim++;}
    let email = document.forms["form"]["email"].value;
    if(email == ""){hataDiv.style.display = "block"; hataDiv.innerHTML+="<p>Lütfen emailinizi giriniz.</p>"; denetim++;}
    let cinsiyet = document.forms["form"]["cinsiyet"].value;
    if(cinsiyet == "none"){hataDiv.style.display = "block"; hataDiv.innerHTML+="<p>Lütfen cinsiyetinizi seçiniz.</p>"; denetim++;}
    let dtarih = document.forms["form"]["dtarih"].value;
    if(dtarih == ""){hataDiv.style.display = "block"; hataDiv.innerHTML+="<p>Lütfen bir doğum tarihi giriniz.</p>"; denetim++;}
    let mesaj = document.getElementById("mesaj").value;
    if(mesaj == " "){hataDiv.style.display = "block"; hataDiv.innerHTML+="<p>Lütfen bir mesaj giriniz.</p>"; denetim++;}
    if(denetim != 0){return false;}
}