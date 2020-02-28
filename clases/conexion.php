

<?php 

	class conectar{
		public function conexion(){
			$conexion=mysqli_connect('localhost',
										'eleccion_bob',
										'Meri1985//',
										'eleccion_votaciones');
			return $conexion;
		}
	}


 ?>