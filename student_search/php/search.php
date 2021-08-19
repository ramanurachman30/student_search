<?php
    //ada nilai input
    if(isset($_GET['cari'])){
        @$radiovalue = $_GET['radiocheck'];
        $cari = $_GET['cari'];
        echo "<b>Hasil pencarian : ".$cari."</b>";
        //radio ceklis = nis
        if($radiovalue == "nis"){
        $query = mysqli_query($conn, "SELECT * FROM siswa WHERE nis LIKE '%".$cari."%' "); 
        }
        //radio ceklis = nama
        if($radiovalue == "nama"){
        $query = mysqli_query($conn, "SELECT * FROM siswa WHERE nama LIKE '%".$cari."%' "); 
        }
        //radio ceklis = tempat_lahir
        if($radiovalue == "tempatlahir"){
        $query = mysqli_query($conn, "SELECT * FROM siswa WHERE tempatlahir LIKE '%".$cari."%' "); 
        }
        //radio ceklis = semua
        if($radiovalue == "semua"){
        $query = mysqli_query($conn, "SELECT * FROM siswa WHERE nis LIKE '%" . $cari . "%' OR nama LIKE '%" . $cari . "%' OR tempatlahir LIKE '%" . $cari . "%' "); 
        }
        //radio ceklis = tidak ada
        if($radiovalue == ""){
        $query = mysqli_query($conn, "SELECT * FROM siswa WHERE nis LIKE '%" . $cari . "%' OR nama LIKE '%" . $cari . "%' OR tempatlahir LIKE '%" . $cari . "%' "); 
        }
    }
    //selain itu | tidak ada nilai input
    else{
        $query = mysqli_query($conn, "SELECT * FROM siswa"); 
    }
    $no = 1;
?>