<?php
	function business_basic_info(){
		include("config.php");
		
		$query="SELECT address,phNo,website FROM bussiness_users WHERE email='".$_SESSION['email']."'";
        $result=mysqli_query($con,$query);
		$row=mysqli_fetch_array($result);
        return $row;
	}
	
	function services_info(){
		include("config.php");
		
		$query="SELECT serviceName FROM hotel_transport_service WHERE email='".$_SESSION['email']."'";
        $result=mysqli_query($con,$query);
		$output="<ul class='service-list'>";
		if(mysqli_num_rows($result)>=1){
			while($row=mysqli_fetch_array($result)){
				$output.="<li><i class='material-icons'>check</i>".$row['serviceName']."</li>";
			}
		}
		else
			$output.="<li>No services yet.</li>";
		$output.="</ul>";
        return $output;
	}
	
	function route_info(){
		include("config.php");
		
		$query="SELECT journey_name FROM journey WHERE email='".$_SESSION['email']."'";
        $result=mysqli_query($con,$query);
		$output="<ul class='route-list'>";
		if(mysqli_num_rows($result)>=1){
			while($row=mysqli_fetch_array($result)){
				$journey_name=explode("to",$row['journey_name']);
				$output.="<li>".$journey_name[0]."<img src='images/double-arrow.png' class='m-1'>".$journey_name[1]."</li>";
			}
		}
		else
			$output.="<li>No route yet.</li>";
		$output.="</ul>";
        return $output;
	}
	
	function restaurant_info(){
		include("config.php");
		
		$query="SELECT starttime, endtime, cuisine, meal_type FROM restaurant_details WHERE email='".$_SESSION['email']."'";
        $result=mysqli_query($con,$query);
		if(mysqli_num_rows($result)>=1)
			$row=mysqli_fetch_array($result);
		else{
			$row['starttime']="00:00";
			$row['endtime']="00:00";
			$row['cuisine']="...";
			$row['meal_type']="...";
		}
        return $row;
	}
	
	function services_edit_view(){
		include("config.php");
		
		$query="SELECT hotel_transport_service_id,serviceName FROM hotel_transport_service WHERE email='".$_SESSION['email']."'";
        $result=mysqli_query($con,$query);
		$output="";
		if(mysqli_num_rows($result)>=1){
			while($row=mysqli_fetch_array($result)){
				$output.='<label>
							<input type="checkbox" name="service_id[]" value="'.$row['hotel_transport_service_id'].'">
							<span>'.$row['serviceName'].'</span>
						  </label><br>';
			}
		}
		else
			$output.="<p>No services to delete.</p>";
        return $output;
	}
	
	function route_edit_view(){
		include("config.php");
		
		$query="SELECT journey_id,journey_name FROM journey WHERE email='".$_SESSION['email']."'";
        $result=mysqli_query($con,$query);
		$output="";
		if(mysqli_num_rows($result)>=1){
			while($row=mysqli_fetch_array($result)){
				$journey_name=explode("to",$row['journey_name']);
				$output.='<label>
							<input type="checkbox" name="journey_id[]" value="'.$row['journey_id'].'">
							<span>'.$journey_name[0].'<img src="images/double-arrow.png" width=15px height=15px>'.$journey_name[1].'</span>
						  </label><br>';
			}
		}
		else
			$output.="<p>No services to delete.</p>";
        return $output;
	}
	
	function photo_slide_show(){
		include("config.php");
		
		$query="SELECT photofile,photo_name FROM photos_storage WHERE email='".$_SESSION['email']."'";
        $result=mysqli_query($con,$query);
		$output="";
		$count=1;
		if(mysqli_num_rows($result)>=1){
			while($row=mysqli_fetch_array($result)){
				$output.= '<a class="carousel-item" href="#'.$count.'"><img class="materialboxed" width="300" src="dbimages/'.$row['photofile'].'" alt="'.$row['photo_name'].'"></a>';
				$count++;;
			}
		}
        return $output;
	}
	
	function photo_delete_view(){
		include("config.php");
		
		$query="SELECT photo_id,email,photo_name FROM photos_storage WHERE email='".$_SESSION['email']."'";
        $result=mysqli_query($con,$query);
		$output="";
		if(mysqli_num_rows($result)>=1){
			while($row=mysqli_fetch_array($result)){
				$output.='<label>
							<input type="checkbox" name="photo_id[]" value="'.$row['photo_id'].'">
							<span>'.$row['photo_name'].'</span>
						  </label><br>';
			}
		}
		else
			$output.="<p>No photos to delete.</p>";
        return $output;
	}
	
	function rating_review_view(){
		include("config.php");
		
		$query="SELECT normal_users.name as norm_name,review_title,rating,review FROM normal_users,rating_review WHERE business_email='".$_SESSION['email']."' AND normal_users.email=rating_review.normal_email";
        $result=mysqli_query($con,$query);
        return $result;
	}
?>