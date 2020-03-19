<?php
header('Content-type: text');

$date = '';
if($_POST) {
	$date = trim($_POST['search']);

}
		
$url = 'http://tsa.com.ng/newedopermit/api';
//$licenceno = "CEN200200001";

$auth_array = array(
	"auth_details" => array(
		"email" => "admin@edopermit.com", 
		"passWord" => "Password@123",
		"request_id" => "5e57f30b0786d"
	),
	"method" => "licence",
	"data" => array(
		"licenceno" => "",
		"issue_date" => $date
		)
);
$postdata = json_encode($auth_array);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'rptoken: f3c6aaef114b53d4951f75f1aa2447c1e804a7dd1120089add2204a5583836c3')
);
$result = curl_exec($ch);
curl_close($ch);

$data = json_decode($result, TRUE);
//print_r ($result);
print_r('');

$riderno = '';
if($data['data'] == []){
	echo "ok";
	// $_SESSION['errormessage'] = "No data was fetched";
	
	//return 'Empty Result';
	
}else{

	// return $data;
	echo json_encode($data);

}

// echo "<center><img alt='testing' src='barcode.php?codetype=code39&size=50&text=".$riderno."&print=true'/></center>";

?>