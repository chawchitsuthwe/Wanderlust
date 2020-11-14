<div class="row">
		<div class="col s6">
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
	</div>