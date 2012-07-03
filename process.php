<?php
if($_GET && isset($_GET['speech'])){
	$speech = $_GET['speech'];

	$data['message'] = "$ $speech";
	$data['execute'] = 0;
	$data['code'] = "";

	if($speech == "abre facebook"){
		$data['execute'] = 1;
		//$data['js_code'] = "window.open('http://facebook.com', '_newtab');";
		$data['js_code'] = "window.location.href='http://facebook.com';";
	}

	echo json_encode($data);
}
?>