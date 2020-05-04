<?php
namespace Src\Classes;

class ClassRender {
	#Propriedades
	private $Dir;
	private $Title;
	private $Description;
	private $Keywords;

	public function getDir() {return $this->Dir;}
	public function setDir($Dir) {return $this->Dir = $Dir;}
	public function getTitle() {return $this->Title;}
	public function setTitle($Title) {return $this->Title = $Title;}
	public function getDescription() {return $this->Description;}
	public function setDescription($Description) {return $this->Description = $Description;}
	public function getKeywords() {return $this->Keywords;}
	public function setKeywords($Keywords) {return $this->Keywords = $Keywords;}

	#Renderiza todo o layout do site
	public function renderLayout () {
		include_once (DIRREQ."app/view/layout.php");
	}

	public function addHeader () {
		if (file_exists(DIRREQ."app/view/{$this->getDir()}/header.php")) {
			include(DIRREQ."app/view/{$this->getDir()}/header.php");
		}
	}
	
	#Adiciona caracteristicas especificas ao head
	public function addHead () {
		if (file_exists(DIRREQ."app/view/{$this->getDir()}/head.php")) {
			include(DIRREQ."app/view/{$this->getDir()}/head.php");
		}
	}

	#Adicionar caracteristicas especificas ao main
	public function addMain () {
		if (file_exists(DIRREQ."app/view/{$this->getDir()}/main.php")) {
			include(DIRREQ."app/view/{$this->getDir()}/main.php");
		}
	}

	#Adicionar caracteristicas especificas ao footer
	public function addFooter() {
		if (file_exists(DIRREQ."app/view/{$this->getDir()}/footer.php")) {
			include(DIRREQ."app/view/{$this->getDir()}/footer.php");
		}
	}
}
?>