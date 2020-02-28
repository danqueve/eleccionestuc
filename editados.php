
<?php 

require_once "clases/conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();

$sql="SELECT CIRCUITO, ESCUELAS, MESAS, L901, L812, L813, L256, L808, L78, L338, L929, L269, L79, L811, L248, L359, L452
from votos";
$result=mysqli_query($conexion,$sql);
?>


<div>
	<table class="table table-hover table-condensed table-bordered" id="iddatatable">
		<thead style="background-color: #dc3545;color: white; font-weight: bold;">
			<tr>
				<td>CIRCUITO</td>
				<td>ESCUELAS</td>
				<td>MESAS</td>
				<td>LISTA 901</td>
				<td>LISTA 812</td>
				<td>LISTA 813</td>
				<td>LISTA 256</td>
				<td>LISTA 808</td>
				<td>LISTA 78</td>
				<td>LISTA 338</td>
				<td>LISTA 929</td>
				<td>LISTA 269</td>
				<td>LISTA 79</td>
				<td>LISTA 811</td>
				<td>LISTA 248</td>
				<td>LISTA 359</td>
				<td>LISTA 452</td>
			</tr>
		</thead>
		<tfoot style="background-color: #ccc;color: white; font-weight: bold;">
			<tr>
				<td>CIRCUITO</td>
				<td>ESCUELAS</td>
				<td>MESAS</td>
				<td>LISTA 901</td>
				<td>LISTA 812</td>
				<td>LISTA 813</td>
				<td>LISTA 256</td>
				<td>LISTA 808</td>
				<td>LISTA 78</td>
				<td>LISTA 338</td>
				<td>LISTA 929</td>
				<td>LISTA 269</td>
				<td>LISTA 79</td>
				<td>LISTA 811</td>
				<td>LISTA 248</td>
				<td>LISTA 359</td>
				<td>LISTA 452</td>
			</tr>
		</tfoot>
		<tbody >
			<?php 
			while ($mostrar=mysqli_fetch_row($result)) {
				?>
				<tr >
					<td><?php echo $mostrar[0] ?></td>
					<td><?php echo $mostrar[1] ?></td>
					<td><?php echo $mostrar[2] ?></td>
					<td><?php echo $mostrar[3] ?></td>
					<td><?php echo $mostrar[7] ?></td>
					<td><?php echo $mostrar[5] ?></td>
					<td><?php echo $mostrar[6] ?></td>
					<td><?php echo $mostrar[7] ?></td>
					<td><?php echo $mostrar[8] ?></td>
					<td><?php echo $mostrar[9] ?></td>
					<td><?php echo $mostrar[10] ?></td>
					<td><?php echo $mostrar[11] ?></td>
					<td><?php echo $mostrar[12] ?></td>
					<td><?php echo $mostrar[13] ?></td>
					<td><?php echo $mostrar[14] ?></td>
					<td><?php echo $mostrar[15] ?></td>
					<td><?php echo $mostrar[16] ?></td>
					<td style="text-align: center;">
						
					</td>
				</tr>
				<?php 
			}
			?>
		</tbody>
	</table>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('#iddatatable').DataTable();
	} );
</script>