<?php
	function business_basic_info(){
		include("config.php");
		
		$query="SELECT bio,address,phNo,website FROM bussiness_users WHERE email='".$_GET['email']."'";
        $result=mysqli_query($con,$query);
		$row=mysqli_fetch_array($result);
        return $row;
	}
	
	function services_info(){
		include("config.php");
		
		$query="SELECT serviceName FROM hotel_transport_service WHERE email='".$_GET['email']."'";
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
		
		$query="SELECT journey_name FROM journey WHERE email='".$_GET['email']."'";
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
		
		$query="SELECT starttime, endtime, cuisine, meal_type FROM restaurant_details WHERE email='".$_GET['email']."'";
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
	
	
	function photo_slide_show(){
		include("config.php");
		
		$query="SELECT photofile,photo_name FROM photos_storage WHERE email='".$_GET['email']."'";
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
	
	function rating_review_view(){
		include("config.php");
		
		$query="SELECT normal_users.name as norm_name,review_title,rating,review FROM normal_users,rating_review WHERE business_email='".$_GET['email']."' AND normal_users.email=rating_review.normal_email";
        $result=mysqli_query($con,$query);
        return $result;
	}
?>