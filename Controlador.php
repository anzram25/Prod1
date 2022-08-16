<?php

	class Controlador {
		public function exhibir($vista){
			$vista->dibujarCuadricula();	
			$vista->dibujarTitulo(new Punto(50, 30), "inicio");
			$vista->dibujarOvalo(new Punto(70, 37));
			$vista->dibujarFlechaSalida(new Punto(250, 10), 15);
			$vista->dibujarRombo(new Punto(113, 25), 150);
			$vista->dibujarTitulo(new Punto(130, 30), '"De un numero entero:"');
			$vista->dibujarFlechaDerecha(new Punto(100,35), 20);
			$vista->dibujarFlechaEntrada(new Punto(330, 10), 20);
			$vista->dibujarRombo(new Punto(290, 25), 55);
			$vista->dibujarFlechaDerecha(new Punto(275, 35), 23);
			$vista->dibujarTitulo(new Punto(320, 30), 'n');
			$vista->dibujarRombo2(new Punto(330, 80), 30);
			$vista->dibujarFlechaAbajo(new Punto(330, 50	), 28);
			$vista->dibujarTitulo(new Punto(315, 95), 'n > 0');
			$vista->dibujarLetra(new Punto(332, 120), 'F');
			$vista->dibujarFlechaAbajo(new Punto(330, 120), 18);
			$vista->dibujarOvaloFin(new Punto(330, 156));
			$vista->dibujarTitulo(new Punto(323, 150), 'FIN');
			$vista->dibujarLetra(new Punto(405, 85), 'V');
			$vista->dibujarFlechaDerecha(new Punto(380, 100), 40);
			$vista->dibujarRectangulo(421, 85, 460, 110);
			$vista->dibujarTitulo(new Punto(430, 90), 'i=2');
			$vista->dibujarFlechaDerecha(new Punto(460, 100), 30);
			$vista->dibujarRombo2(new Punto(540, 80), 30);
			$vista->dibujarTitulo(new Punto(530, 95), 'i<=n');
			$vista->dibujarLetra(new Punto(542, 120), 'F');
			$vista->dibujarLineaAbajo(new Punto(540, 120), 35); 
			$vista->dibujarFlechaIzquierda(new Punto(540, 155), 190);
			$vista->dibujarLetra(new Punto(605, 92), 'V');
			$vista->dibujarFlechaDerecha(new Punto(590, 105), 30);
			$vista->dibujarFlechaSalida(new Punto(655, 80), 15);
			$vista->dibujarRombo(new Punto(620, 90), 40);
			$vista->dibujarTitulo(new Punto(650, 100), 'i');
			$vista->dibujarLineaAbajo(new Punto(730, 50), 40);
			$vista->dibujarFlechaDerecha(new Punto(670, 105), 30);
			$vista->dibujarLineaDerecha(new Punto(730, 50), 190);
			$vista->dibujarFlechaAbajo(new Punto(540, 50), 30);
			$vista->dibujarRectangulo(710, 95, 760, 115);
			$vista->dibujarTitulo(new Punto(720, 100), 'i=i+2');

			$vista->verLiberar();
		}
	}
?>