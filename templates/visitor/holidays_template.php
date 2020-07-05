<!-- page that displays list of holidays and categories to sort holidays according to categories -->
<main class="admin">
<!-- list of categories -->
	<section class="left">
		<ul>
			<?php foreach ($categoryList as $key ){ ?>
					<li><a href="category&catID=<?php echo $key['id'];?>"><?php echo $key['name'];?></a></li>
				<?php } ?>
		</ul>
	</section>

	<section class="right">

		<h1>Our Holidays</h1>

	<ul class="holiday">

<!-- all the holidays -->
	<?php
	foreach ($holidayQuery as $holiday) {
		//the holiday is not booked then only it appears
		if($holiday['booked']==0)
		{
		$holidayCat=$categories_table->search('id',$holiday['categoryId']);
		$category = $holidayCat->fetch();
		$locl= $locations_table->search('id',$holiday['location']);
		$locname=$locl->fetch();
		echo '<li>'; ?>

		
			<a href="../images/holiday/<?php echo $holiday['image'];?>"><img src="../images/holiday/<?php echo $holiday['image'];?>"/></a>
	<?php	

		echo '<div class="details">';
		echo '<h2>' . $holiday['name'] . '</h2>';
		echo '<h3>' . $locname['name'] . '</h3>';
		echo '<h3>' . $category['name'] . '</h3>';
		echo '<p>' . $holiday['description'] . '</p>';
		
		echo '<h3>£' . $holiday['price'] . '</h3>';

		echo '</div>';?>
		<!-- //query box -->
		<button onclick="showOrHide(<?php echo $holiday['id'];?>)">Ask a Question</button>
		<form method="POST" id="<?php echo $holiday['id'];?>" style="display: none;">
			<fieldset>
			<legend> Your Query: </legend>
			<input type="hidden" name="holidayId" value="<?php echo $holiday['id'];?>">
			<label>Email:</label>
			<input type="email" name="email" required="YES">
			<label>Contact no.:</label>
			<input type="text" name="contact">
			<label>Query:</label>
			<textarea name="question" placeholder="Any question?"></textarea>
			<input type="submit" name="ask" value="Ask a question">
			</fieldset>
		</form>
		</li>
	<?php }
}
	?>

</ul>

</section>
	</main>
