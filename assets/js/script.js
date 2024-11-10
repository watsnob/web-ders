//number tip
console.log("-------------");
console.log("* Değişken Tanımlama *");
console.log("-------------");
let sayi1 = 10;
const sayi2 = 20;
var sayi3 = 30;

//farklar
//let, const, var değişken tanımlama tipleri, const değerini sonradan değiştirilemez

//string tip
console.log("-------------");
console.log("* Veri Tipleri *");
console.log("-------------");
let str;
let array = [];
let num = 1;

str = "Merhaba";
console.log("Str", str);
console.log("Array", array);
console.log("Number", num);

let dersler = [];
console.log("Dersler", dersler, "Dersler uzunluğu:", dersler.length);
dersler.push("PHP"); //item,item,item
dersler.push("HTML");
dersler.push("CSS");
dersler.unshift("C", "C++"); //item, item, item
console.log("Dersler", dersler, "Dersler uzunluğu:", dersler.length);

//push sonuna ekle
//unshift ilk sıraya ekle

dersler.pop();
//pop son elemanı sil
console.log("Dersler", dersler, "Dersler uzunluğu:", dersler.length);

dersler.shift();
//pop ilk elemanı sil
console.log("Dersler", dersler, "Dersler uzunluğu:", dersler.length);

dersler.push("Java", "Phyton", "C#");
console.log("Dersler", dersler, "Dersler uzunluğu:", dersler.length);

//array içinde veri bulma
console.log("-------------");
console.log("* Dizi İşlemi *");
console.log("-------------");
//(ders) => arrow function findIndex(function(ders) => {
let javaIndex = dersler.findIndex((ders) => {
    console.log("Taranan Ders:", ders);
    //if(ders=="Java") return true;
    if (ders == "Test") return true;
});
console.log("Java Index", javaIndex);

if (javaIndex != -1) {
    console.log("Java Dersi bulundu:", javaIndex);
} else {
    console.log("Java dersi bulunamadı");
}

//************************* */
//if - elseif
console.log("-------------");
console.log("* İf Şartı *");
console.log("-------------");
const yas = 55

if (yas < 18) {
    console.log("Çocuk");
} else if (yas >= 18 && yas <= 45) {
    console.log("Hala gençsin")
} else {
    console.log("İhtiyar");
}

//döngü
console.log("-------------");
console.log("* Döngüler *");
console.log("-------------");
console.log("* For Döngüsü *");
console.log("-------------");
for (let i = 0; i < dersler.length; i++) {
    dersler[i] += " Dersi";
    console.log("Ders:", dersler[i]);
}

console.log("-------------");
console.log("* Foreach Döngüsü *");
console.log("-------------");
dersler.forEach(function (ders, index, array) {
    console.log("Ders:", ders, " Ders Index:", index, array);
});

console.log("-------------");
console.log("* While Döngüsü *");
console.log("-------------");
//while önce yazdırır sonra arttırır
let i = 0;
while (i <= dersler.length) {
    console.log("Ders", dersler[i]);
    i++;
}

//undefined veri
let metin, sayi = 1;
if (metin != null) {
    console.log("Metin", metin);
} else {
    console.log("Metin tanımısz");
}
console.log("Sayı", sayi);

//Fonksiyon
console.log("-------------");
console.log("* Fonksiyon *");
console.log("-------------");

//Click olayları
//Sayfa yüklendikten sonra çalışmaya başlamak için DOMContentLoaded
document.addEventListener("DOMContentLoaded", function () {
    console.log("Sayfa Yüklendi");
    let old = 20;

    // onclick function
    function buttonMethod() {
        console.log("Butona Tıklandı");

        // ID ile input değerini al
        let inputName = document.getElementById("name");
        if (inputName) {
            let inputValue = inputName.value;
            console.log("Merhaba " + inputValue + " Yaş " + old);
        }

        // Class ile input değerini al
        let clasName = document.getElementsByClassName("name");
        if (clasName.length > 0) {
            let nameVal = clasName.item(0).value;
            console.log(nameVal);
            console.log(nameVal + " Yaş: " + old);
        }
    }

    // Id ile click işlemi
    let btnClick = document.querySelector("#btnClick");
    if (btnClick) {
        btnClick.addEventListener("click", buttonMethod);
    }
});

