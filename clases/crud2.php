<?php 

	class crud{
		public function agregar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="INSERT into t_juegos (nombre,anio,empresa)
									values ('$datos[0]',
											'$datos[1]',
											'$datos[2]')";
			return mysqli_query($conexion,$sql);
		}

		public function obtenDatos($idjuego){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="SELECT IRCUITO, ESCUELAS, MESAS, L901, L812, L813, L256, L808, L78, L338, L929, L269, L79, L811, L248, L359, L452
					from votos 
					where votos='$votos'";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'CIRCUITO' => $ver[0],
				'ESCUELAS' => $ver[1],
				'MESAS' => $ver[2],
				'L901' => $ver[3],
				'L812' => $ver[4],
				'L813' => $ver[5],
				'L256' => $ver[6],
				'L808' => $ver[7],
				'L78' => $ver[8],
				'L338' => $ver[9],
				'L929' => $ver[10],
				'L269' => $ver[11],
				'L79' => $ver[12],
				'L811' => $ver[13],
				'L248' => $ver[14],
				'L359' => $ver[15],
				'L452' => $ver[16]
				);
			return $datos;
		}

		public function actualizar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="UPDATE t_juegos set nombre='$datos[0]',
										anio='$datos[1]',
										empresa='$datos[2]'
						where id_juego='$datos[3]'";
			return mysqli_query($conexion,$sql);
		}
		public function eliminar($idjuego){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="DELETE from t_juegos where id_juego='$idjuego'";
			return mysqli_query($conexion,$sql);
		}
	}

 ?>