<?php
//koşullu ifadeler if-else-else if blokları, switch case
$products = [
    ['product_id' => 1, 'name' => 'Bilgisayar', 'color_code' => 'SH', 'color_name' => 'Siyah'],
    ['product_id' => 2, 'name' => 'Klavye', 'color_code' => 'BZ', 'color_name' => 'Beyaz'],
    ['product_id' => 3, 'name' => 'Monitör', 'color_code' => 'SH', 'color_name' => 'Siyah'],
];

//is_array değişken dizi mi
print "******** is_array kontrolü ********\n";
if(is_array($products)){
    print_r($products);
}else{
    print "Dizi değil";
}

//$products değişkeni false değilse
print "******** if kontrolü ********\n";
if ($products) {
    print_r($products);
} else {
    print "Dizi değil\n";
}

//$products = null;
//isset değişken tanımlı ve null değilse
print "******** isset kontrolü ********\n";
if (isset($products)) {
    print_r($products);
} else {
    print "Değişken tanımlı değil\n";
}

$products = "";

//isset değişken tanımlı ve null değilse
print "******** isset ile değişken tanımlı ancak boş kontrolü ********\n";
if (isset($products)) {
    print_r($products);
} else {
    print "Değişken tanımlı değil\n";
}

//empty değiken boşsa
$products = [
    ['product_id' => 1, 'name' => 'Bilgisayar', 'color_code' => 'SH', 'color_name' => 'Siyah'],
    ['product_id' => 2, 'name' => 'Klavye', 'color_code' => 'BZ', 'color_name' => 'Beyaz'],
    ['product_id' => 3, 'name' => 'Monitör', 'color_code' => 'SH', 'color_name' => 'Siyah'],
];
print "******** empty ve isset kontrolü ********\n";
if (isset($products[3])) {
    print_r($products);
} else if (empty($products)) {
    print "Değişken tanımsızdır. null\n";
} else {
    print "isset ve empty koşulları sağlanamadı.\n";
}

print "******** içiçe dizi değerine erişim ********\n";
if ($products[0]['product_id'] > 0) {
    print "Dizinin 0. elemanının name değeri: ".$products[0]['name'];
}

print "\n******** Switch Case ile değişkene göre değer döndürme ********\n";
$product_name = 'Bilgisayar';

switch ($products[2]['product_id']) {
    case 1:
        print $products[0]['name'].' koşulu';
        break;
    case 2:
        print $products[1]['name'].' koşulu';
        break;
    case 3:
        print $products[2]['name'].' koşulu';
        break;
    default:
        print 'Tanımsız';
        break;
}