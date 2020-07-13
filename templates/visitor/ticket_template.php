<div class="wrapper row3">
  <main class="hoc container clear" style="padding: 20px 0;"> 
	<div class="content"> 
		<h1 style="margin:0;">Get Tickes Online</h1>
		<p class="">Save Time and Money </p>

		<table>
			<thead>
				<th>Ticket Type</th>
				<th>Quantity</th>
			</thead>
			<tbody>
				<?php foreach($tickets as $row){ ?>
					<tr>
						<td value="<?php echo $row['price'];?>" ><?php echo $row['ticket_type'].' (£ '. $row['price'].' each)';?></td>
						<td><input type="number"  min=0 name=""  onchange="calctotal(this);"></td>
					</tr>
				<?php }?>
				<tr>
					<td>TOTAL (£ )</td>
					<td><input type="text" id="ticketTotal" disabled="">
					
				</td>

				</tr>
			</tbody>
		</table>
		<button class="btn btn-success mx-auto" type="submit" value="submit" name="">Get Tickets</button>
		<button class="btn" onclick="reset()" name="">Reset</button>
	</div>
  </main>
</div>

<script>
	var sum=0;
	function calctotal($this){
		
		var qt= $this.value;
		var parent =$this.parentElement;
		var price = parent.previousElementSibling.getAttribute("value");
		sum=sum +(qt*price);
		document.getElementById('ticketTotal').value=sum;
			}

			function reset() {
				location.reload();}
</script>
