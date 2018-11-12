<?php
    //buat koneksi
    $conn=mysqli_connect("localhost","root","","webdatabase");

    //cek apakah button submit sudah di tekan atau belum
    if(isset($_POST['submit']))
    {
        //ambil data dari tiap element dalam form yang disimpan di variabel baru
        $nama=$_POST["Nama"];
        $nim=$_POST["Nim"];
        $email=$_POST["Email"];
        $jurusan=$_POST["Jurusan"];
        $gambar=$_POST["Gambar"];

        //query insert data
        $query= " INSERT INTO mahasiswa VALUES ('','$nama','$nim','$email','$jurusan','$gambar')";
        mysqli_query($conn,$query);

        //cek sukses data ditambah menggunakan mysqli_affected_rows
        //jika kita var_dump maka akan muncul int(1) jika gagal maka akan muncul int (-1)
        //var_dump(mysqli_affected_rows($conn)> 0){
        if(mysqli_affected_rows($conn) > 0){
            echo "data berhasil disimpan";
        }
        else {
            echo "gagal!";
            echo "<br>";
            echo mysqli_error($conn);
        }
    
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="Nama">Nama</label>
                <input type="text" name="Nama" id="Nama">
            </li>
            <li>
                <label for="Nim">Nim</label>
                <input type="text" name="Nim" id="Nim">
            </li>
            <li>
                <label for="Email">Email</label>
                <input type="text" name="Email" id="Email">
            </li>
            <li>
                <label for="Jurusan">Jurusan</label>
                <input type="text" name="Jurusan" id="Jurusan">
            </li>
            <li>
                <label for="Gambar">Gambar</label>
                <input type="text" name="Gambar" id="Gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah</button>
            </li>
        </ul>
    </form>
</body>
</html>