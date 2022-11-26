<html>
    <body>
    Hari : <?php echo $_POST["Hari"]; ?><br>
    Tanggal : <?php echo $_POST["Tanggal"]; ?><br>
    Kegiatan(0: Ada , 1: Tidak) ? <?php echo $_POST["Kegiatan"]; ?><br>
    Curah Hujan Hari Ini Adalah <?php echo $_POST["curah_hujan"]; ?><br>
    Penjualan  <?php echo $_POST["Penjualan"]; 

    $servername  = "localhost";
    $username  = "root";
    $password = "";
    $dbname = "data1";
    $Hari = $_POST["Hari"];
    $Tanggal = $_POST["Tanggal"];
    $Kegiatan = $_POST["Kegiatan"];
    $curah_hujan = $_POST["curah_hujan"];
    $Penjualan = $_POST["Penjualan"];

    // Create Connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check Connection
    if ($conn->connect_error) {
        die("Connection Failed: ". $conn -> connect_error);
    }
    $sql = "INSERT INTO data_penjualan (Hari,Tanggal,Kegiatan,curah_hujan,Penjualan)
    VALUE ('$Hari','$Tanggal','$Kegiatan','$curah_hujan', '$Penjualan')";

    if ($conn -> query($sql) === TRUE) {
        echo "New Records Created Successfully";
    } else {
        echo 'Error' . $sql . "<br>". $conn->error;
    }

    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT Hari,Tanggal, Kegiatan, curah_hujan, Penjualan FROM data_penjualan"
    ?>
    </body>
</html>