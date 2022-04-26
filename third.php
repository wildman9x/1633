<html>
    <?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'storeman';
    $port = 3306;
    function query($sql)
    {
        global $hostname, $username, $password, $dbname, $port;
        $conn = new mysqli($hostname, $username, $password, $dbname, $port);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $result = $conn->query($sql);
        $conn->close();
        if (!$result) {
            die("Query failed: " . $conn->error);
        }
        $rows = $result->fetch_all();
        return $rows;
    }
    ?>
</html>