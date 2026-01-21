<?php

$total = "";
$harga = 0;
$nama_pesawat = "";

if (isset($_POST['simpan'])) {
    $nama   = $_POST['nama'];
    $kode   = $_POST['kode'];
    $kelas  = $_POST['kelas'];
    $jumlah = $_POST['jumlah'];

    if ($kode == "GRD") {
        $nama_pesawat = "Garuda";
        if ($kelas == "Eksekutif") $harga = 1500000;
        elseif ($kelas == "Bisnis") $harga = 900000;
        else $harga = 500000;
    } elseif ($kode == "MPT") {
        $nama_pesawat = "Merpati";
        if ($kelas == "Eksekutif") $harga = 1200000;
        elseif ($kelas == "Bisnis") $harga = 800000;
        else $harga = 400000;
    } elseif ($kode == "BTV") {
        $nama_pesawat = "Batavia";
        if ($kelas == "Eksekutif") $harga = 1000000;
        elseif ($kelas == "Bisnis") $harga = 700000;
        else $harga = 300000;
    }

    $total = $harga * $jumlah;
}

echo "<h3 align='center'>TIKET ONLINE JAKARTA - MALAYSIA</h3>";

echo "<form method='post'>";
echo "<table align='center' border='1' cellpadding='6'>";

echo "<tr><td>Nama</td><td><input type='text' name='nama' required></td></tr>";

echo "<tr><td>Pilih Kode Pesawat</td><td>";
echo "<select name='kode'>";
echo "<option value='GRD'>GRD</option>";
echo "<option value='MPT'>MPT</option>";
echo "<option value='BTV'>BTV</option>";
echo "</select>";
echo "</td></tr>";

echo "<tr><td>Pilih Kelas</td><td>";
echo "<input type='radio' name='kelas' value='Eksekutif' checked> Eksekutif<br>";
echo "<input type='radio' name='kelas' value='Bisnis'> Bisnis<br>";
echo "<input type='radio' name='kelas' value='Ekonomi'> Ekonomi";
echo "</td></tr>";

echo "<tr><td>Jumlah Tiket</td><td>";
echo "<select name='jumlah'>";
for ($i=1; $i<=5; $i++) {
    echo "<option value='$i'>$i</option>";
}
echo "</select>";
echo "</td></tr>";

echo "<tr><td colspan='2' align='center'>";
echo "<input type='submit' name='simpan' value='SIMPAN'> ";
echo "<input type='reset' value='BATAL'>";
echo "</td></tr>";

echo "</table>";
echo "</form>";

if ($total !== "") {
    echo "<br>";
    echo "<table align='center' border='1' cellpadding='6'>";
    echo "<tr><td>Nama</td><td>$nama</td></tr>";
    echo "<tr><td>Nama Pesawat</td><td>$nama_pesawat</td></tr>";
    echo "<tr><td>Kelas</td><td>$kelas</td></tr>";
    echo "<tr><td>Harga Tiket</td><td>$harga</td></tr>";
    echo "<tr><td>Jumlah Tiket</td><td>$jumlah</td></tr>";
    echo "<tr><td><b>Total Bayar</b></td><td><b>$total</b></td></tr>";
    echo "</table>";
}
?>
