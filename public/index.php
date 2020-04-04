<?php

    header("Content-Type: text/html; charset-utf-8");
    require_once("../config/config.php");
    require_once("../src/vendor/autoload.php");

    use Src\Classes\ClassRoutes;

    class Teste extends ClassRoutes {
        public function __construct() {
            $v=$this->getRota();
            var_dump($v);
        }
    }

    $new=new Teste();



    // aparece na url
    // echo DIRPAGE . "<br>";
    // caminho físico, usado para requerer algo do servidor
    // echo DIRREQ;

    // echo DIRIMG;

    //$img1 = DIRIMG."portfolio.png";
?>
<!-- <div style="width: 100%; margin-top: 50px; display: flex; justify-content: center; align-items: center;">
    <img src="<?php echo ($img1) ?>" width="100px" style="margin-right: 5px;" />
    <?php echo $img1;?>
</div> -->