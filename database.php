<?php 

class database{

	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "ta9firda"; 	
	var $conek;	//isi sesuai nama database anda
	

	function __construct(){
		$this->conek =  mysqli_connect($this->host,$this->uname, $this->pass, $this->db);
	
										//buatlah koneksi secara OOP
	}

	function tampil_data(){
		$data = mysqli_query($this->conek, " SELECT * FROM  user");


		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	function input($nama,$alamat,$usia,$film,$wisata){
		$film = implode(",",$film);
		$wisata = implode(",", $wisata);
		mysqli_query($this->conek,"INSERT INTO user(nama,alamat,usia,film,wisata) values ('$nama','$alamat','$usia','$film','$wisata')");

		

		//buatlah method input
		//query inset into user
	}

	function hapus($id){
		mysqli_query($this->conek, "  DELETE   FROM user WHERE id='id'");


		//buatlah method hapus
		//query delete from id where id ='$id'
	}

	function edit($id){
		$data=mysqli_query($this->conek, "SELECT * from user WHERE id='$id'");



		//lengkapilah method edit
		//query select from user where id ='$id'
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	function update($id,$nama,$alamat,$usia,$film,$wisata){
		$film = implode(",", $film);
		$wisata = implode(",", $wisata);
		mysqli_query($this->conek, "UPDATE user SET nama='$nama', alamat='$alamat', usia='$usia', film='$film', wisata='$wisata' where id= '$id' ");


		//buatlah method update
		//query update user set blablabla where id='$id'
	}

} 

?>