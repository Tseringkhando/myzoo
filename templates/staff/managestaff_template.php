<!-- list of staff that can log in and add new staff or edit and delete them -->
<section class="right">
<h2>Staff</h2>
<h4><a class="add" href="addstaff">Add a new staff</a></h4>

<table>
<thead>
<tr>
	<th>SN</th>
	<th>Username</th>
	<th>Type</th>
</tr>
		<?php $c=1; ?>
<?php foreach ($staff as $key) {?>
	<tr> <td><?php echo $c; $c++;?></td>
		<td><?php echo $key['username']; ?></td>
		<td><?php echo $key['type']; ?></td>
		<?php if($_SESSION['sessusertype']=='super') {?>
			<td style="width: 5%;"><a href="addstaff&stid=<?php echo $key['id'];?>">Edit</a></td>
		<td  style="width: 5%;">
			<form method="POST">
				<input type="hidden" name="id" value="<?php echo $key['id'];?>">
				<input type="submit" name="delete" value="Delete" onclick="return confirm('Are you sure to delete?');">
			</form>
		</td>
	</tr>

<?php }} ?>
</thead>
</table>
</section>