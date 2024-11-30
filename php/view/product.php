<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php print $title ?></title>
</head>

<body>
    <style>
        td {
            border: 1px solid #000000;
        }
    </style>

    <h1>Ürünler</h1>
    <p><?php print_r($product) ?></p>
    <table>
        <tr>
            <th>Ürün Id</th>
            <th>Ürün Adı</th>
            <th>Renk Kodu</th>
            <th>Renk</th>
        </tr>
        <?php
        if ($product) { ?>
            <tr>
                <td><?php print $product['id'] ?></td>
                <td><?php print $product['name'] ?></td>
                <td><?php print $product['color_code'] ?></td>
                <td><?php print $product['color_name'] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>