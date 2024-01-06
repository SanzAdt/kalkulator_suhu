<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Konversi Suhu</title>
</head>
<body>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputSuhu = $_POST["inputSuhu"];
        $satuanAwal = $_POST["satuanAwal"];
        $satuanTujuan = $_POST["satuanTujuan"];

        if ($satuanAwal == "celcius") {
            if ($satuanTujuan == "fahrenheit") {
                $hasil = ($inputSuhu * 9/5) + 32;
            } elseif ($satuanTujuan == "kelvin") {
                $hasil = $inputSuhu + 273.15;
            } else {
                $hasil = $inputSuhu; // Jika satuanTujuan juga celcius
            }
        } elseif ($satuanAwal == "fahrenheit") {
            // Konversi dari Fahrenheit ke Celcius atau Kelvin
            // Tambahkan logika sesuai kebutuhan
        } elseif ($satuanAwal == "kelvin") {
            // Konversi dari Kelvin ke Celcius atau Fahrenheit
            // Tambahkan logika sesuai kebutuhan
        }
    }
?>

<h2>Kalkulator Konversi Suhu</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Masukkan Suhu: <input type="text" name="inputSuhu" required>
    <select name="satuanAwal" required>
        <option value="celcius">Celcius</option>
        <option value="fahrenheit">Fahrenheit</option>
        <option value="kelvin">Kelvin</option>
    </select>
    ke
    <select name="satuanTujuan" required>
        <option value="celcius">Celcius</option>
        <option value="fahrenheit">Fahrenheit</option>
        <option value="kelvin">Kelvin</option>
    </select>
    <input type="submit" value="Konversi">
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p>Hasil Konversi: $hasil $satuanTujuan</p>";
    }
?>

</body>
</html>