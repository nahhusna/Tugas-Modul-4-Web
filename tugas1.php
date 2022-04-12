<form action="tampil.php" method="GET">
	Nama: 
	<input type="text" name="nama">
	<br>
	<br>
	Tempat Lahir: 
	<input type="text" name="tempat">
	<br>
	<br>
	Tanggal Lahir: 
	<input type="date" name="tanggal">
	<br>
	<br>
	Jenis Kelamin: 
	<label><input type="radio" name="jenis_kelamin" value="Laki-Laki" /> Laki-Laki</label>
    <label><input type="radio" name="jenis_kelamin" value="Perempuan" /> Perempuan</label>
	<br>
	<br>
	Agama: 
	<select name="agama">
		<option value="Islam">Islam</option>
        <option value="Protestan">Protestan</option>
        <option value="Katolik">Katolik</option>
        <option value="Hindu">Hindu</option>
        <option value="Buddha">Buddha</option>
        <option value="Konghucu">Konghucu</option>
        <option value="Atheis">Atheis</option>
    </select>
	<br>
	<br>
	<input type="submit" name="submit" value="Submit">
</form>