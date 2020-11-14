		<?php
			$row=restaurant_info();
		?>
	<div class="row">
		<h3>Details</h3>
		<div class="col s12 l4">
			<h5>Open Time</h5>
			<p>
			<?php 
				
				if($row['starttime']==NULL)
					echo "00:00";
				else
					echo $row['starttime']; 
			?> - 
			<?php 
				if($row['endtime']==NULL)
					echo "00:00";
				else
					echo $row['endtime']; 
			?>
				</p>
		</div>
		<div class="col s12 l4">
			<h5>Cuisine</h5>
			<p>
			<?php 
				if($row['cuisine']==NULL)
					echo "...";
				else
					echo $row['cuisine']; 
			?>
			</p>
		</div>
		<div class="col s12 l4">
			<h5>Meals</h5>
			<p>
			<?php 
				if($row['meal_type']==NULL)
					echo "...";
				else
					echo $row['meal_type']; 
			?>
			</p>
		</div>
	</div>