<!DOCTYPE html>
<html>
<body>

<h3>Konversi Tanggal Indonesia</h3>

<form method="post">k
Pilih tanggal:
<input type="date" name="tanggal">
<input type="submit" name="btnTanggal" value="Konversi">
</form>

<?php
if(isset($_POST['btnTanggal'])){

    $tanggal = $_POST['tanggal'];

    $hari_en = date("l", strtotime($tanggal));
    $tgl = date("d", strtotime($tanggal));
    $bulan_en = date("F", strtotime($tanggal));
    $tahun = date("Y", strtotime($tanggal));

    $hari = [
        "Sunday"=>"Minggu",
        "Monday"=>"Senin",
        "Tuesday"=>"Selasa",
        "Wednesday"=>"Rabu",
        "Thursday"=>"Kamis",
        "Friday"=>"Jumat",
        "Saturday"=>"Sabtu"
    ];

    $bulan = [
        "January"=>"Januari",
        "February"=>"Februari",
        "March"=>"Maret",
        "April"=>"April",
        "May"=>"Mei",
        "June"=>"Juni",
        "July"=>"Juli",
        "August"=>"Agustus",
        "September"=>"September",
        "October"=>"Oktober",
        "November"=>"November",
        "December"=>"Desember"
    ];

    echo $hari[$hari_en] . ", " . $tgl . " " . $bulan[$bulan_en] . " " . $tahun;
}
?>

</body>
</html>