<!-- page to display all the categories to staff and to edit or delete them and add new  -->
<section class="right">
<h2>Categories</h2>
<a class="new" href="addcategory">Add new category</a>

<?php
echo '<table>';
echo '<thead>';
echo '<tr>';
echo '<th>Name</th>';
echo '<th style="width: 5%">&nbsp;</th>';
echo '<th style="width: 5%">&nbsp;</th>';
echo '</tr>';

foreach ($categories as $category) {
	echo '<tr>';
	echo '<td>' . $category['name'] . '</td>';
	echo '<td><a style="float: right" href="addcategory&catid=' . $category['id'] . '">Edit</a></td>';
	echo '<td><form method="POST">'; ?>
	<input type="hidden" name="id" value="<?php echo $category['id'];?>" />
	<input type="submit"  name="delete" value="Delete"  onclick="return confirm('Are you sure to delete?');" />
	</form></td>
	</tr>
<?php } 
echo '</thead>';
echo '</table>'; ?>
