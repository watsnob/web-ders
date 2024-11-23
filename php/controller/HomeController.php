<?php
//class tanımlama
class HomeController
{
    private $number = 100; //sadece bu classta kullanılır
    protected $string = ''; //sadece ben ve kalıtım yoluyla ilişkili olduklarım kullanır
    public $varible = []; // her yerde kullanılır

    //method tanımlama
    public function index()
    {
        $title = "Anaysafa";
        print "Ben HomeController içindeki index methodu...";
        require_once APP_ROOT.'/view/home.php';
    }
}
