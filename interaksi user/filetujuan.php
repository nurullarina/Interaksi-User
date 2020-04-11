<?php
//Tipe data dan operator: semua variabel di php diawal dengan $
//Global variable
//$_REQUEST = POST/GET
echo $action = $_REQUEST["action"];

//DATA YANG DIKIRIM ASYNC => $_REQUEST= {dataku : "firstname=ali&lastname=bos&paymentMethod=creditcard"}
/* ASYNC */
parse_str($_REQUEST['formulir'], $hasil); 

//ini yang saya tambahkan, yg sql saya komentar dulu

echo "First Name: ".$hasil['First']."<br/>";
echo "Last Name: ".$hasil['Last']."<br/>";
echo "Email: ".$hasil['email']."<br/>";
echo "Alamat: ".$hasil['address']."<br/>";
echo "Tanggal lahir: ".$hasil['birthday']."<br/>";
echo "Pendidikan Terakhir: ".$hasil['Pendidikan']."<br/>";
echo "Institusi: ".$hasil['institusi']."<br/>";
echo "Jenis Kelamin: ".$hasil['paymentMethod']."<br/>";
echo "Motto Hidup: ".$hasil['Motto']."<br/>";
echo "Hobby: ".$hasil['Hobby']."<br/>";



//ASYNC, data yang diterima format array of record memerlukan looping untuk parsing data - tidak digunakan di sini
//$arrrecordhasil = $_REQUEST['dataku'];

//DATA YANG DIKIRIM SYNC => $_REQUEST = ["firstname" => "ali", "lastname" => "bos"]
/* SYNC */
//$hasil = $_REQUEST;

/* SQL: select, update, delete */
/*
if($action == 'create')
	$sql = "insert into formulir_user values ('$hasil[First]','$hasil[Last]', '$hasil[email]', '$hasil[address]', '$hasil[birthday]', '$hasil[Pendidikan]', '$hasil[institusi]', '$hasil[paymentMethod]', '$hasil[Motto]', '$hasil[Hobby]') ";
	
//eksekusi syntaxsql 
$conn = new mysqli("localhost","root","","form"); //dbhost, dbuser, dbpass, dbname
if ($conn->connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}else{
  echo "Database connected. ";
}
//create, update, delete query($syntaxsql) -> true false

if ($conn->query($sql) === TRUE) {
	echo "Query $action with syntax $sql suceeded !";
}
else {
	echo "Error: $sql" .$conn->error;
}

$conn->close();

//Global variable advanced
//$_SESSION //$_COOKIE
//$_SERVER
//$_FILES

//Struktur kendali:
//Percabangan:
//Pengulangan:
//Struktur data
//array: array - $hasil = ["ali","bos","creditcard"];
//record: associated array - $hasil = [firstname => ali, lastname => bos, paymentMethod => creditcard]
//Fungsi
/**/
?>