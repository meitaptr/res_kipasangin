<?php
	class database
	{
	private $dbHost = "localhost";
	private $dbUser = "root";
	private $dbPass = "";	//password MySQL anda
	private $dbName = "res"; //database anda
	
	function connectMySQL() {
        mysql_connect($this->dbHost, $this->dbUser, $this->dbPass);
        mysql_select_db($this->dbName) or die("Database tidak ada!");
    }
	
	
	// method tambah data (insert)	
    /* function tambahKomentar($nama, $email, $komentar) {
        $query = "INSERT INTO comment (nama, email, komentar) VALUES ('$nama', '$email','$komentar')";
        $hasil = mysql_query($query);

        if ($hasil)
            echo"<meta http-equiv='refresh' content='0; url=gallery.php'>";
    }   */  
	 // method tampil data 	
    function tampilData() {
        $data=array();
		$query = mysql_query("SELECT * FROM tabel_fan");
        while ($row = mysql_fetch_array($query))
            $data[] = $row;
        return $data;
    }
	
	
	// method hapus data
    /* function hapusKomentar($nama) {
        $query = mysql_query("DELETE FROM comment WHERE nama='$nama'");
        echo "<b><font size ='2' color ='#000000'><p>Komentar dengan nama :  " . $nama . " berhasil dihapus </p></font></b>";
    } */
	
	
}