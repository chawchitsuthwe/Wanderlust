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
	<div class="row">
		<div class="col s12">
				<!-- Modal Trigger -->
                <a class="waves-effect waves-light btn modal-trigger" href="#modal5">Edit Details</a>
                <!-- Modal Content-->
                <div id="modal5" class="modal">
  					<div class="modal-content">  
   					<h4>Add Service</h4>
      					<div class="row">
        					<form method="POST" action="function/restaurant_detail_edit.php" id="edit_details" class="col s12">
          						<div class="row">
            						<div class="input-field col s6">
              							<span>Start Time</span>
										<input class="timepicker" placeholder="00:00" value="<?php echo $row['starttime']; ?>" name="starttime">
            						</div>
									<div class="input-field col s6">
              							<span>End Time</span>
										<input class="timepicker" placeholder="00:00" value="<?php echo $row['endtime']; ?>" name="endtime">
            						</div>
          						</div>
								<div class="row">
									<div class="input-field col s12">
										<input id="cuisine" type="text" class="validate" name="cuisine" value="<?php echo $row['cuisine']; ?>">
										<label for="cuisine">Cuisine</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<input id="cuisine" type="text" class="validate" name="meal" value="<?php echo $row['meal_type']; ?>">
										<label for="cuisine">Meal</label>
									</div>
								</div>
        					</form>
      					</div>
      					<div class="modal-footer">
        					<a class="modal-close waves-effect waves-green btn-flat">Close</a>
        					<button class="modal-close waves-effect waves-green btn-flat" type="submit" form="edit_details">Save</button>
      					</div>
  					</div>
				</div>
		</div>
	</div>
	<script>
	jQuery(document).ready(function(){
    jQuery('.timepicker').timepicker({
      twelveHour: false
    });
  });
	</script>