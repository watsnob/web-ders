<?php
class BaseModel
{
    protected $pdo = null;

    public function __construct()
    {
        try{
            $this->pdo = new pdo('mysql:host=localhost;dbname=test;charset=utf8mb4','root','');
            print 'başarılı';
        } catch (PDOException $e){
            die($e->getMessage());
        }
        
    }
    public function title(){

    }
}
