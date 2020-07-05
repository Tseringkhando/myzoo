<main class="admin">
<!-- list of categories -->
	<section class="left">
		<ul>
			<?php foreach ($categoryList as $key ){ ?>
					<li <?php if($key['id']==$_GET['catID']) echo'class="current"';
					?> ><a href="category&catID=<?php echo $key['id'];?>"><?php echo $key['name'];?></a></li>
				<?php } ?>
		</ul>
	</section>

	<section class="right">

		<h1>Our Holidays</h1>

	<ul class="holiday">

<!-- displays all the holidays of this category only -->
<?php 
	foreach ($holidaysByCategory as $holiday) {
		if($holiday['booked']==0)
		{
		echo '<li>'; ?>

		<a href="../images/holiday/<?php echo $holiday['image'];?>"><img src="../images/holiday/<?php echo $holiday['image'];?>"/></a>
<?php
		echo '<div class="details">';
		echo '<h2>' . $holiday['name'] . '</h2>';
		echo '<h3>£' . $holiday['price'] . '</h3>';
		echo '<p>' . $holiday['description'] . '</p>';

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


		<?php
		echo '</li>';
	}}
 ?>

 </ul>

</section>

</main>
