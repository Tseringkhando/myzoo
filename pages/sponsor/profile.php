<?php

$sponsor = $tbl_sponsors->search('user_id',$_SESSION['sessuserId']);
$sponsors=$sponsor->fetch();
$conditions=['sponsors'=>$sponsors];

if(isset($_POST['changePhoto'])){
		$folder = "../../images/sponsors/";
		$tmpimage = $_FILES['sponsor_photo']['tmp_name'];
		$urlimage = $folder . basename($_FILES['sponsor_photo']['name']);
	$vals=[
		'id'=> $sponsors['id'],
		'sponsor_photo'=>$_FILES['sponsor_photo']['name']
	];
	move_uploaded_file($tmpimage, $urlimage);
	$stmt= $tbl_sponsors->update_only($vals,'id');
	if($stmt) echo ' <script> alert("Profile Updated");
						document.location="profile";
					</script>';
		else echo ' <script> alert("Error"); </script>';

}
$title = "My Profile";
$content = loadTemplate("../../templates/sponsor/profile_template.php",$conditions);
?>

        