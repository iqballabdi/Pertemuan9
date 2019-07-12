<?php   
    include "controller/kalkulator.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Latihan Pertemuan ke-9</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<script type="text/javascript" src="asstes/js/jquery-2.1.1.js"></script>
	<script type="text/javascript" src="asstes/js/bootstrap.js"></script>

</head>
<body>
<!-- AWAL NAV -->
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="https://google.com/">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        </ul>
        <ul class="navbar-nav">
          
            <li class="nav-item">
              <a class="nav-link" href="#">Service</a>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>    
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another   </a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- AKHIR NAV -->

    <!-- AWAL FORM -->
    <div class="container" style="padding-top: 40px;">
         <!-- deklarasi variabel -->
         <?php 
             $nama="Budi";
             $no_telp="086357483893";
             $alamat="Bogor"

          ?>
         <!-- akhir variabel -->
      <h1> Nama&nbsp;&nbsp;: <?php echo $nama; ?></h1>
      <h1> Alamat&nbsp;&nbsp;: <?php echo $alamat ?></h1>
      <br><br>
      <hr/>
      
      
      <?php
            $bilA="10";
            $bilB="8";
            $hasil="0";
            if (Penjumlahan($bilA,$bilB)<=9){
                $hasil="Hasilnya dikit";
            }else{
                $hasil=Penjumlahan($bilA,$bilB);
            }
      ?>
        <h2> Nilai Bilangan Pertama&nbsp;=<?=$bilA; ?></h2>
        <h2> Nilai Bilangan Pertama&nbsp;=<?=$bilB; ?></h2>
        <h2> Hasil Penjumlahan=<?=$hasil; ?></h2>
        <h2> Hasil Pengurangan&nbsp;=<?=Pengurangan($bilA,$bilB); ?></h2>
        <h2> Hasil Pembagian&nbsp;=<?=Pembagian($bilA,$bilB); ?></h2>
        <h2> Hasil Perkalian&nbsp;=<?=Perkalian($bilA,$bilB); ?></h2>
        <br><br>
        <hr/>


      <form action=”proses.php” method=”POST” enctype=”multipart/form-data”> <!–Awal–>

		Nama Lengkap : <input type=”text” name=”nama” required value=" <?php echo $nama ?>">  <br><br> <!– attribut <br> berfungsi untuk pindah baris –>

		Alamat : <input type=”text” name=”alamat” required> <br><br>

		Jenis Kelamin : <input type=”radio” name=”jk” value=”Laki-Laki” required>Laki-Laki <input type=”radio” name=”jk” value=”Perempuan” required>Perempuan <br><br>

		Anak Ke : <input type=”number” max=”15″ min=”1″ name=”anakke” required> <br><br>

		Agama : <select name=”agama”><option>Islam</option><option>Kristen</option><option>Hindu</option><option>Budha</option></select> <br><br>

		Warna Kesukaan Anda : <input type=”color” name=”warna”> <br><br>

		Email : <input type=”email” placeholder=”emailanda@gmail.com” name=”email” required> <br><br>

		Password : <input type=”password” name=”password” required> <br><br>
	
		Foto : <input type=”file” name=”foto” required> <br><br>

		Tentang Anda : <textarea rows=”4″ cols=”20″ name=”tentang” required></textarea> <br><br>

		<input type=”submit” name=”simpan” value=”SIMPAN”><input type=”reset” value=”RESET”>
	
     </form> 
     <hr/>
     <!-- Akhir Form -->

     <!-- START TABEL -->
     <table	class="table table-bordered" width="100%">
     	<tr>
     		<th width="10%">No</th>
     		<th width="20%">Nama</th>
     		<th	width="20%">Jurusan</th>
     		<th	width="20%">Email</th>
     		<th	width="30%">Alamat</th>
       </tr>
       <tr>
     		<th>1</th>
     		<th>Nami</th>
     		<th>elin</th>
     		<th>Email@gg</th>
     		<th>bogor</th>
       </tr>
       <tr>
     		<th>2</th>
     		<th>aNang</th>
     		<th>fisika</th>
     		<th>Email@bsg.com</th>
     		<th>Jakarta</th>
       </tr>
       <tr>
     		<th>3</th>
     		<th>Deni</th>
     		<th>Mesin</th>
     		<th>Email@hai.co.id</th>
     		<th>Yogya</th>
       </tr>
       <!-- AKHIR TABLE -->

<style type="text/css" media="screen">
.media{
	overflow:hidden;
	color:#fff;
	background-color:#000;
	background-image:linier-gradient(black, grey);

}
.huruf-besar{
	color:red;
}
</style>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>