<?php 
include 'database.php';
$db = new database (); //isi dengan deklarasi method
?>

<h1>CRUD OOP PHP</h1>
<h3>Edit Data User</h3>

<form action="proses.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['id']) as $d){ 
$array1 = explode(",", $d['film']);
$array2 = explode(",", $d['wisata']);

//panggil method edit dari class database
?>
<table>
	<tr>
		<td>Nama</td>
		<td>
			<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
			<input type="text" name="nama" value="<?php echo $d['nama'] ?>">
		</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat" value="<?php echo $d['alamat'] ?>"></td>
	</tr>
	<tr>
		<td>Usia</td>
		<td><input type="text" name="usia" value="<?php echo $d['usia'] ?>"></td>
	</tr>

	<tr>
		<td>Genre Film</td>
		<td>
			<input type="checkbox" name="film[]" value="horror" <?php if(in_array('horrorr',$array1)){echo "checked=checked";} ?> >Horror <br>
			<input type="checkbox" name="film[]" value="action" <?php if(in_array('actionn',$array1)){echo "checked=checked";} ?> >Action <br>
			<input type="checkbox" name="film[]" value="anime" <?php if(in_array('animee',$array1)){echo "checked=checked";} ?> >Anime  <br>
			<input type="checkbox" name="film[]" value="thriller" <?php if(in_array('thrillerr',$array1)){echo "checked=checked";} ?> >Thriller <br>
			<input type="checkbox" name="film[]" value="animasi" <?php if(in_array('animasii',$array1)){echo "checked=checked";} ?> >Animasi <br>
		</td>
	</tr>


	<tr>
		<td>Wisata</td>
		<td>
		<input type="checkbox" name="wisata[]" value="bali" <?php if(in_array('Bali',$array2)){echo "checked=checked";} ?> >Bali <br>
		<input type="checkbox" name="wisata[]" value="raja_ampat" <?php if(in_array('Raja_Ampat',$array2)){echo "checked=checked";} ?> >Raja Ampat <br>
		<input type="checkbox" name="wisata[]" value="pulau_derawan" <?php if(in_array('Pulau_Derawan',$array2)){echo "checked=checked";} ?> >Pulau Derawan <br>
		<input type="checkbox" name="wisata[]" value="bangkabelitung" <?php if(in_array('Bangkabelitung',$array2)){echo "checked=checked";} ?> >Bangka Belitung <br>
		<input type="checkbox" name="wisata[]" value="labuan_bajo" <?php if(in_array('Labuan_Bajo',$array2)){echo "checked=checked";} ?> >Labuan Bajo <br>
		</td>
	</tr>

	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>

</table>
<?php } ?>
</form>
