<?php
	class Vista {
		public $img;
		public $ancho, $alto, $um;
		public $blanco, $negro, $verdeclaro;
		public function __construct($an, $al, $um){
			$this->ancho = $an;
			$this->alto = $al;
			$this->um = $um;
			$this->img = imagecreate($this->ancho, $this->alto);
			$this->blanco = imagecolorallocate($this->img, 255, 255, 255);
			$this->negro = imagecolorallocate($this->img, 0, 0, 0);
			$this->verdeclaro = imagecolorallocate($this->img, 196, 237, 220);
			$this->verde = imagecolorallocate($this->img, 0, 128, 0);
			$this->rojo = imagecolorallocate($this->img, 200, 0, 0);
			$this->amarillo = imagecolorallocate($this->img, 255, 210, 0);
			$this->azul = imagecolorallocate($this->img, 0, 0, 255);
			imagefilledrectangle($this->img, 0, 0, $this->ancho, $this->alto, $this->blanco);
		}
		public function verLiberar(){
			imagepng($this->img);
			imagedestroy($this->img);
		}
		public function dibujarTitulo($p, $text){
			imagestring($this->img, 2.5, $p->x, $p->y, $text, $this->negro);	
		}
		public function dibujarLetra($p, $text){
			imagestring($this->img, 2.5, $p->x, $p->y, $text, $this->rojo);	
		}
		public function dibujarCuadricula(){
			$num_lin_hor = $this->alto / $this->um;
			$num_lin_ver = $this->ancho / $this->um;
			for($i=1; $i<=$num_lin_hor; $i++)
				imageline($this->img, 0, $this->um*$i, $this->ancho, $this->um*$i, $this->verdeclaro);
			for($i=1; $i<=$num_lin_ver; $i++)
				imageline($this->img, $this->um*$i, 0, $this->um*$i, $this->alto, $this->verdeclaro);		
		}
		public function dibujarFlechaAbajo($p, $d){
			imageline($this->img, $p->x, $p->y, $p->x, $p->y+$d, $this->rojo);
			$valores = array(
				$p->x,  $p->y+$d,
				$p->x-5, $p->y+$d-5,
				$p->x+5, $p->y+$d-5,
				);
			imagefilledpolygon($this->img, $valores, 3, $this->rojo);
		}
		public function dibujarFlechaDerecha($p, $d){
			imageline($this->img, $p->x, $p->y, $p->x+$d, $p->y, $this->rojo);
			imageline($this->img, $p->x+$d, $p->y, $p->x-5+$d, $p->y-5, $this->rojo);
			imageline($this->img, $p->x+$d, $p->y, $p->x-5+$d, $p->y+5, $this->rojo);
			$valores = array(
				$p->x+$d,  $p->y,
				$p->x-5+$d, $p->y-5,
				$p->x-5+$d, $p->y+5,
				);
			imagefilledpolygon($this->img, $valores, 3, $this->rojo);
		}
		public function dibujarFlechaIzquierda($p, $d){
			imageline($this->img, $p->x, $p->y, $p->x-$d, $p->y, $this->rojo);
			$valores = array(
				$p->x-$d,  $p->y,
				$p->x+5-$d, $p->y+5,
				$p->x+5-$d, $p->y-5,
			);
			imagefilledpolygon($this->img, $valores, 3, $this->rojo);
		}
		public function dibujarFlechaSalida($p, $d){
			imageline($this->img, $p->x, $p->y+$d, $p->x+$d, $p->y, $this->verde);
			$valores = array(
				$p->x+$d, $p->y,
				$p->x+$d-7, $p->y,
				$p->x+$d, $p->y+7,
			);
			imagefilledpolygon($this->img, $valores, 3, $this->verde);
		}
		public function dibujarFlechaEntrada($p, $d){
			imageline($this->img, $p->x, $p->y+$d, $p->x+$d, $p->y, $this->verde);
			$valores = array(
				$p->x, $p->y+$d,
				$p->x, $p->y+$d-7,
				$p->x+7, $p->y+$d,
			);
			imagefilledpolygon($this->img, $valores, 3, $this->verde);
		}
		public function dibujarLineaDerecha($p, $d){
			imageline($this->img, $p->x, $p->y, $p->x-$d, $p->y, $this->rojo);
		}
		public function dibujarLineaAbajo($p, $d){
			imageline($this->img, $p->x, $p->y, $p->x, $p->y+$d, $this->rojo);
		}
		public function dibujarOvalo($p){
			imageellipse($this->img, $p->x, $p->y, 60, 30, $this->negro);
		}
		public function dibujarOvaloFin($p){
			imageellipse($this->img, $p->x, $p->y, 40, 30, $this->negro);
		}
		public function dibujarRectangulo($x1, $y1, $x2, $y2){
			imagerectangle($this->img, $x1, $y1, $x2, $y2, $this->amarillo);
		}
		public function dibujarRombo($p, $d){
			$cons = 20;
			imageline($this->img, $p->x+$cons, $p->y, $p->x+$d+$cons, $p->y, $this->verde);
			imageline($this->img, $p->x , $p->y+25, $p->x+$d, $p->y+25, $this->verde);
			imageline($this->img, $p->x, $p->y+25, $p->x+$cons, $p->y, $this->verde);
			imageline($this->img, $p->x+$d+$cons, $p->y, $p->x+$d, $p->y+25, $this->verde);
		}
		public function dibujarRombo2($p, $d){
			$cons = 20;
			imageline($this->img, $p->x, $p->y, $p->x+$cons+$d, $p->y+$cons, $this->azul);
			imageline($this->img, $p->x+$cons+$d, $p->y+$cons, $p->x, $p->y+$cons+$cons, $this->azul);
			imageline($this->img, $p->x, $p->y, $p->x-$cons-$d, $p->y+$cons, $this->azul);
			imageline($this->img, $p->x-$cons-$d, $p->y+$cons, $p->x, $p->y+$cons+$cons, $this->azul);
		}
	}
?>