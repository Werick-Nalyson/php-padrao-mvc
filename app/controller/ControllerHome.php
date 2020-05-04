<?php
namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;

class ControllerHome extends ClassRender implements InterfaceView{
    public function __construct()
    {
       $this->setTitle("Página inicial.");
       $this->setDescription("descrição página incial");
       $this->setKeywords("Treinando o padrão mvc na prática");
       $this->setDir("home/");
       $this->renderLayout();
    }
}

?>