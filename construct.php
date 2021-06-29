<!-- CONSTRUCTOR IN LARAVEL -->

<?php
class Cons{

    public $butter;
    public function __construct($butter){
    

        $this->butter=$butter;
        echo $this->butter;


    }
}

$shay= new Cons("hello");

?>