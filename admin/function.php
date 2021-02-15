<?php
$knk = mysqli_connect("localhost", "root", "", "oshinkos");

function upload()
{
    $filename = $_FILES['img']['name'];
    //    var_dump($filename);    die;
    $ukuran = $_FILES['img']['size'];
    $error = $_FILES['img']['error'];
    $tmpname = $_FILES['img']['tmp_name'];
    //cek adanya gambar
    if ($error === 4) {
        echo "<script>
                alert('Silahkan Upload Foto Terlebih Dulu');
                document.location.href = 'index.php';
                </script>";
        return false;
    }
    //cek tipe gambar
    $extnvld = ['jpg', 'png', 'jpeg', 'gif', 'bmp', 'ico'];
    $ekstfoto = explode('.', $filename);
    $ekstfoto = strtolower(end($ekstfoto));
    if (!in_array($ekstfoto, $extnvld)) {
        echo "<script>
                alert('Yang diupload bukan gambar');
                </script>";
        return false;
    }
    if ($ukuran > 5000000) {
        echo "<script>
                alert('Ukuran gambar terlalu besar');
                </script>";
        return false;
    }
    //generate nama baru
    $newfilename = uniqid();
    $newfilename .= '.';
    $newfilename .= $ekstfoto;
    $pindah = move_uploaded_file($tmpname, 'foto/' . $newfilename);
    if (!$pindah) {
        echo "<script>
                alert('Gambar gagal dipindahkan ke folder sistem');
                document.location.href = 'index.php';
                </script>";
        return false;
    }
    return $newfilename;
}

function addBranch($query)
{
    global $knk; //artinya variabel knk adalah variabel global/sama dengan variabel koneksi
    $result = mysqli_query($knk, $query);
    $rows   = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
//Kamar
function SearchCbg($aa)
{
    $cari = "SELECT * FROM pesanan WHERE
            id LIKE '%$aa%' OR
            nama LIKE '%$aa%' OR
            jk LIKE '%$aa%' OR
            tempatlahir LIKE '%$aa%' OR
            tgllhr LIKE '%$aa%' OR
            tgl_pesan LIKE '%$aa%' OR
            jumlah_org LIKE '%$aa%' OR
            nowa LIKE '%$aa%'
            ";
    return addBranch($cari);
}
function pesan($a)
{
    global $knk;

    $nama  = htmlspecialchars($a["nama"]);
    $jk  = htmlspecialchars($a["jk"]);
    $temptlhr = htmlspecialchars($a["tempat"]);
    $tgllhr  = htmlspecialchars($a["tgllahir"]);
    $nowa  = htmlspecialchars($a["nohp"]);
    $jumlah = htmlspecialchars($a["jumlah"]);
    $tglpesan = date("d/m/Y");
    $insert = "INSERT INTO pesanan(id,nama,jk,tempatlahir,tgllhr,tgl_pesan,jumlah_org,nowa)
     VALUES ('','$nama','$jk','$temptlhr','$tgllhr','$tglpesan','$jumlah','$nowa')";
    //var_dump($insert);die;
    mysqli_query($knk, $insert);
    return mysqli_affected_rows($knk);
}
function delBranch($id)
{
    global $knk;
    $del = "DELETE FROM pesanan WHERE id = '$id'";
    mysqli_query($knk, $del);
    return mysqli_affected_rows($knk);
}


function tambahpenghunikos($a)
{
    global $knk;

    $nama  = htmlspecialchars($a["name"]);
    $jk  = htmlspecialchars($a["jk"]);
    $temptlhr = htmlspecialchars($a["tempat"]);
    $tgllhr  = htmlspecialchars($a["tgllahir"]);
    $nowa  = htmlspecialchars($a["nohp"]);
    $kamar = htmlspecialchars($a["KC"]);
    $insert = "INSERT INTO penghuni(id,nama,jk,tmpt_lhr,tgl_lhr,nowa,kamar)
     VALUES ('','$nama','$jk','$temptlhr','$tgllhr','$nowa','$kamar')";

    mysqli_query($knk, $insert);
    return mysqli_affected_rows($knk);
}
function hapusPenghuni($id)
{
    global $knk;
    $del = "DELETE FROM penghuni WHERE id = '$id'";
    mysqli_query($knk, $del);
    return mysqli_affected_rows($knk);
}
function cariorang($aa)
{
    $cari = "SELECT * FROM penghuni WHERE
            id LIKE '%$aa%' OR
            nama LIKE '%$aa%' OR
            jk LIKE '%$aa%' OR
            tmpt_lhr LIKE '%$aa%' OR
            tgl_lhr LIKE '%$aa%' OR
            kamar LIKE '%$aa%' OR
            nowa LIKE '%$aa%'
            ";
    return addBranch($cari);
}






function daftar($d)
{
    global $knk;
    $lvlUS = htmlspecialchars($d['level']);
    $nama = htmlspecialchars($d['username']);
    $user = strtolower(stripslashes($d["username"]));
    $pass = mysqli_real_escape_string($knk, $d["password1"]);
    $pass2 = mysqli_real_escape_string($knk, $d["password2"]);
    $ambil = mysqli_query($knk, "SELECT username FROM users WHERE username = '$user'");
    if (mysqli_fetch_assoc($ambil)) {
        echo "<script>
                    alert('Ganti Nama. Username Telah Digunakan');
                    </script>";
        return false;
    }

    if ($pass !== $pass2) {
        echo "<script>
                    alert('Password tidak sesuai');
                    </script>";
        return false;
    }
    $pass = password_hash($pass, PASSWORD_DEFAULT);
    $query = "INSERT INTO users VALUES('','$lvlUS','$user','$pass','$nama')";
    mysqli_query($knk, $query);
    return mysqli_affected_rows($knk);
}
function changeProfile($d)
{
    global $knk;
    $user = strtolower(stripslashes($d["username"]));
    $pass = mysqli_real_escape_string($knk, $d["password1"]);
    $pass2 = mysqli_real_escape_string($knk, $d["password2"]);
    $ambil = mysqli_query($knk, "SELECT username FROM users WHERE username = '$user'");
    if (mysqli_fetch_assoc($ambil) <= 0) {
        echo "<script>
                    alert('Username Tidak Terdaftar');
                    </script>";
        return false;
    }

    if ($pass !== $pass2) {
        echo "<script>
                    alert('Password tidak sesuai');
                    </script>";
        return false;
    }
    $pass = password_hash($pass, PASSWORD_DEFAULT);
    $sql = "UPDATE users SET password = '$pass' WHERE username = '$user'";
    mysqli_query($knk, $sql);
    return mysqli_affected_rows($knk);
}
function ubahPasswordOperator($d)
{
    global $knk;
    $user = strtolower(stripslashes($d["username"]));
    $pass = mysqli_real_escape_string($knk, $d["newpassword1"]);
    $pass2 = mysqli_real_escape_string($knk, $d["newpassword2"]);
    $ambil = mysqli_query($knk, "SELECT username FROM users WHERE username = '$user'");
    if (mysqli_fetch_assoc($ambil) <= 0) {
        echo "<script>
                    alert('Username Tidak Terdaftar');
                    </script>";
        return false;
    }

    if ($pass !== $pass2) {
        echo "<script>
                    alert('Password tidak sesuai');
                    </script>";
        return false;
    }
    $pass = password_hash($pass, PASSWORD_DEFAULT);
    $sql = "UPDATE users SET password = '$pass' WHERE username = '$user'";
    mysqli_query($knk, $sql);
    return mysqli_affected_rows($knk);
}
