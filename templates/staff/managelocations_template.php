<!-- table if locations shown to the admin  -->
<section class="right">
			<h2>Locations</h2>
			<h4><a class="add" href="addlocation">Add a new location</a></h4>

	<table>
		<thead>
		<tr>
			<th>SN</th>
			<th>Location</th>
		</tr>
		<?php $c=1; ?>
		<?php foreach ($location as $key) {?>
			<tr> <td style="width: 5%;"><?php echo $c; $c++;?></td>
				<td><?php echo $key['name']; ?></td>
				<!-- edit delete -->
				<td style="width: 5%;"><a href="addlocation&lcid=<?php echo $key['id'];?>">Edit</a></td>
				<td  style="width: 5%;">
					<form method="POST">
						<input type="hidden" name="id" value="<?php echo $key['id'];?>">
						<input type="submit" name="delete" value="Delete" onclick="return confirm('Are you sure to delete?');">
					</form>
				</td>
			</tr>

		<?php } ?>
		</thead>
	</table>

