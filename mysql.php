<?php

define('SERVER', 'localhost');
define('USER', 'root');
define('PASSWORD', 'toor');
define('DB', 'test');

$connect = mysqli_connect(SERVER, USER, PASSWORD, DB);

if (!$connect) {
    die('Connection failed: ' . mysqli_connect_error());
} else {
    echo 'Success!';
}

mysqli_set_charset($connect, 'utf8');

$sql = 'SELECT * FROM users';

$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"] . " - Name: " . $row["firstname"];
    }
} else {
    echo '0 results';
}

mysqli_close($connect);
