<?php
//döngüler for, foreach, while
$products = [
    ['product_id' => 1, 'name' => 'Bilgisayar', 'color_code' => 'SH', 'color_name' => 'Siyah'],
    ['product_id' => 2, 'name' => 'Klavye', 'color_code' => 'BZ', 'color_name' => 'Beyaz'],
    ['product_id' => 3, 'name' => 'Monitör', 'color_code' => 'SH', 'color_name' => 'Siyah'],
];

print "******** for döngüsü kavramı ********<br>";
//i değerini 0'dan başlat, 5'ten küçük olduğu sürece, 1 arttır. koşul sağlandıkça i değerini print et.
for ($i = 0; $i < 5; $i++) {
    print $i . '<br>';
}
print "<br>******** for döngüsü dizi işleme ********<br>";
//i değerini 0'dan başlat, count ile değişken sayısı i değerinden küçük olduğu sürece, 1 arttır. koşul sağlandıkça değikeni print et.
for ($i = 0; $i < count($products); $i++) {
    print_r($products[$i]);
    print '<br>';
}
print "<br>******** for döngüsü dizi işleme ********<br>";
//i değerini 0'dan başlat, 5'ten küçük olduğu sürece, 1 arttır. koşul sağlandıkça i değerini print et.
for ($i = count($products) - 1; $i >= 0; $i--) {
    print_r($products[$i]);
    print '<br>';
}
print "<br>******** foreach döngüsü kavramı ********<br>";
//key dizinin anahtar değeri, value anahtar değerin verileri
foreach ($products as $key => $value) {
    print_r($key);
    print "<br>";
    print_r($value);
    print "<br>";
}

print "<br>******** foreach döngüsü kavramı 2 ********<br>";
foreach ($products as $key => $value) {
    print "Ürün id: " . $value['product_id'] . " ";
    print "Ürün adı: " . $value['name'] . " ";
    print "Ürün rengi: " . $value['color_name'];
    print "<br>";
}

print "<br>******** while döngüsü kavramı ********<br>";
//while döngüsünde döngüye giren değer önceden tanımlanır
$a = count($products)-1;
while ($a >= 0) {
    print $products[$a]['product_id']." ".$products[$a]['name']."<br>";
    $a--;
}