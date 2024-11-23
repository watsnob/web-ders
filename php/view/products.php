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
    <p><?php print_r($products) ?></p>
    <table>
        <tr>
            <th>Ürün Id</th>
            <th>Ürün Adı</th>
            <th>Renk Kodu</th>
            <th>Renk</th>
        </tr>
        <?php foreach ($products as $value) { ?>
            <tr>
                <td><?php print $value['product_id'] ?></td>
                <td><?php print $value['name'] ?></td>
                <td><?php print $value['color_code'] ?></td>
                <td><?php print $value['color_name'] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>