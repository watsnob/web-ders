//number tip
let sayi1 = 10;
const sayi2 = 20;
var sayi3 = 30;

//farklar
//let, const, var değişken tanımlama tipleri, const değerini sonradan değiştirilemez

//string tip

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
dersler.unshift("C","C++"); //item, item, item
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
//(ders) => arrow function
let javaIndex = dersler.findIndex((ders) => {
    if(ders=="Java") return true;
});
console.log("Java Index", javaIndex);