<?php
include'./vanfunction.php';

//Put Database as TXT
$path = "database.datastore";
$data = "Data 1
Data 2
Data 3
Data 4";
isi_database($path,$data)
//Output : Function will create database.datastore and store data : data 1|Data 2|Data 3|Data 4|||||||
  
  
  
  
//To Get Database you must have Search Key
 //Example in database has 
  
/*
admin|admingeming26|26|woman|||||||||
user|telkomdso|26|woman|||||||||
guest|123|unknown|custom|||||||||
*/
  

//To get Admin data You must have searchkey
  //example
  $path = "//pathtotdatabase";
  $searchkey = "admin";
  ambil_database($path,$searchkey);

//Output will be: Array('admin','admngeming26,'26','woman');
  

  

?>
