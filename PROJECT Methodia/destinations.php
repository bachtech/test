

<?php 
//$link = mysqli_connect('localhost','master','master'); 
////mysqli_set_charset($link,"utf8");
//	if (!$link) {
//		die('Could not connect: ' . mysqli_error($link));
//	}
//	echo 'Connected successfully<br/>';
//	
//	$selectedDb = mysqli_select_db($link,'methodia');
//	if(!$selectedDb) {
//		die('Cannot select database!'. mysqli_error($link));
//	}
//	else {
//        echo 'db loaded<br/>';
//	}
//	
//$sql = "SELECT `ID`, `city`, `kilometers`, `recharges`, `price`, `файл` FROM `destinations` WHERE id>='0'";
//$db = new PDO ( "mysql:methodia", "master", "master") ;
//$stmt = $selectedDb->prepare($sql);
//$stmt->execute();
//$result = $stmt->fetchAll();
//
//file_put_contents("output.json", json_encode($result));
//
//echo $db;




//PDO is a extension which  defines a lightweight, consistent interface for accessing databases in PHP.  
$db=new PDO('mysql:dbname=methodia;charset=UTF8;host=localhost;','master','master');  
//here prepare the query for analyzing, prepared statements use less resources and thus run faster  
$row=$db->prepare('select * from destinations');  
  
$row->execute();//execute the query  
$json_data=array();//create the array  
foreach($row as $rec)//foreach loop  
{  
//$json_array['id']=$rec['id'];  
    $json_array['city']=$rec['city'];  
    $json_array['kilometers']=$rec['kilometers'];  
    $json_array['recharges']=$rec['recharges'];  
    $json_array['price']=$rec['price'];  
    $json_array['file']=$rec['file'];
//here pushing the values in to an array  
    array_push($json_data,$json_array);  
}
 
  
//
//built in PHP function to encode the data in to JSON format  
//echo json_encode($json_data,JSON_UNESCAPED_UNICODE);   
file_put_contents("base.json", json_encode($json_data, JSON_UNESCAPED_UNICODE));
?> 

