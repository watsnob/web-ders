<?php
class ProductModel extends BaseModel
{
    public function getProducts(): array|false
    {
        //$products = [
        //    ['product_id' => 1, 'name' => 'Bilgisayar', 'color_code' => 'SH', 'color_name' => 'Siyah'],
        //    ['product_id' => 2, 'name' => 'Klavye', 'color_code' => 'BZ', 'color_name' => 'Beyaz'],
        //    ['product_id' => 3, 'name' => 'Monitör', 'color_code' => 'SH', 'color_name' => 'Siyah'],
        //];
        $statement = $this->pdo->query('SELECT * FROM products');
        $products = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $products ?:false;
    }

    public function getProductId(int $productId): array|false
    {
        $statement = $this->pdo->prepare('SELECT * FROM products WHERE id = :productId');
        $statement->execute(['productId' => $productId]);
        $products = $statement->fetch(PDO::FETCH_ASSOC);
        return $products ?:false;
    }
}
