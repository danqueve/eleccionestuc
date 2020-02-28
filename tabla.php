
<?php 

require_once "clases/conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();

$sql="SELECT CIRCUITO, ESCUELAS, MESAS, L901, L812, L813, L256, L808, L78, L338, L929, L269, L79, L811, L248, L359, L452
from votos";
$result=mysqli_query($conexion,$sql);
?>


<div>
	<table class="table-responsive table-striped table-bordered table-sm " id="iddatatable">
		<thead style="background-color: white; font-weight: light;">
    <tr>
        <th>Circ</th>
        <th>Escuelas</th>
        <th>Mesas</th>
        <th>L901</th>
        <th>L812</th>
        <th>L813</th>
        <th>L256</th>
        <th>L808</th>
        <th>L78</th>
        <th>L338</th>
        <th>L929</th>
        <th>L269</th>
        <th>L79</th>
        <th>L811</th>
        <th>L248</th>
        <th>L359</th>
        <th>L452</th>
        
        
      </tr>
		</thead>
		
		<tbody >
			<?php 
			while ($mostrar=mysqli_fetch_row($result)) {
				?>
				<tr >
					<td><?php echo $mostrar[0] ?></td>
					<td><?php echo $mostrar[1] ?></td>
					<td><?php echo $mostrar[2] ?></td>
					<td><?php echo $mostrar[3] ?></td>
					<td><?php echo $mostrar[4] ?></td>
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