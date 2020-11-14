<div class="row">
		<div class="col s12 l6">
			<h3>Services</h3>
				<?php echo services_info(); ?>
				<!-- Modal Trigger -->
                <a class="waves-effect waves-light btn modal-trigger" href="#modal5">Add Service</a>
                <!-- Modal Content-->
                <div id="modal5" class="modal">
  					<div class="modal-content">  
   					<h4>Add Service</h4>
      					<div class="row">
        					<form method="POST" action="function/service_add.php" id="service_add" class="col s12">
          						<div class="row">
            						<div class="input-field col s12">
              							<input id="service" type="text" class="validate" name="service_name">
              							<label class="active" for="service" >Service</label>
            						</div>
          						</div>
        					</form>
      					</div>
      					<div class="modal-footer">
        					<a class="modal-close waves-effect waves-green btn-flat">Close</a>
        					<button class="modal-close waves-effect waves-green btn-flat" type="submit" form="service_add">Save</button>
      					</div>
  					</div>
				</div>
				<!-- Modal Trigger -->
            	<a class="waves-effect waves-light btn modal-trigger" href="#modal6">Delete Service</a>
            	<!-- Modal Content-->
            	<div id="modal6" class="modal">
  					<div class="modal-content">  
   						<div class="row">
        					<h4>Delete Service</h4>
							<form method="POST" action="function/service_delete.php" id="service_delete" class="col s12">
        					<?php echo services_edit_view(); ?>
							</form>
      						<div class="modal-footer">
        						<a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
        						<button class="modal-close waves-effect waves-green btn-flat" type="submit" form="service_delete">Delete</button>
      						</div>
  						</div>
					</div>
				</div>
		</div>
		<div class="col s12 l6">
			<h3>Routes</h3>
				<?php echo route_info(); ?>
				<!-- Modal Trigger -->
                <a class="waves-effect waves-light btn modal-trigger" href="#modal7">Add Routes</a>
                <!-- Modal Content-->
                <div id="modal7" class="modal">
  					<div class="modal-content">  
   					<h4>Add Routes</h4>
      					<div class="row">
        					<form method="POST" action="function/route_add.php" id="route_add" class="col s12">
          						<div class="row">
            						<div class="input-field col s3">
										<label>Route Name</label>
            						</div>
									<div class="input-field col s4">
										<input id="first_route" type="text" class="validate" name="first_route">
              							<label class="active" for="first_route" >Destination 1</label>
									</div>
									<div class="input-field col s1">
										<img src='images/double-arrow.png'>
									</div>
									<div class="input-field col s4">
										<input id="second_route" type="text" class="validate" name="second_route">
              							<label class="active" for="second_route" >Destination 2</label>
									</div>
          						</div>
        					</form>
      					</div>
      					<div class="modal-footer">
        					<a class="modal-close waves-effect waves-green btn-flat">Close</a>
        					<button class="modal-close waves-effect waves-green btn-flat" type="submit" form="route_add">Save</button>
      					</div>
  					</div>
				</div>
				<!-- Modal Trigger -->
            	<a class="waves-effect waves-light btn modal-trigger" href="#modal8">Delete Routes</a>
            	<!-- Modal Content-->
            	<div id="modal8" class="modal">
  					<div class="modal-content">  
   						<div class="row">
						<form method="POST" action="function/route_delete.php" id="route_delete" class="col s12">
        					<h4>Delete Routes</h4>
        					<?php echo route_edit_view(); ?>
						</form>
  						</div>
						<div class="modal-footer">
        					<a class="modal-close waves-effect waves-green btn-flat">Close</a>
        					<button class="modal-close waves-effect waves-green btn-flat" type="submit" form="route_delete">Delete</button>
      					</div>
					</div>
				</div>
		</div>
	</div>