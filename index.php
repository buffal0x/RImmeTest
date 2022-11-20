<?php
function OpenCon()
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "password";
    $db = "users";
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);

    return $conn;
}

function CloseCon($conn)
{
    $conn->close();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>WICKR BACKROOMS</title>
    <link rel="stylesheet" href="main.css" />
    <link href="img/fonticons/css/all.css" rel="stylesheet" />
    <link href="img/fonticons/css/fontawesome.css" rel="stylesheet" />
    <link href="img/fonticons/css/v4-shims.css" rel="stylesheet" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <div id="container">
        <div class="xr">
            <div class="navbar">
                <a href="#home">Home</a>
                <a href="#news">News</a>
                <div class="dropdown">
                    <button class="dropbtn">Dropdown
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="xt">
            <img class="logo" src="/images/logo.png"><br>
            <input type="text" class="searchbar" name="search" placeholder="Search username"><br>
            <button class="submit"></i>Search user</button>
        </div>
    </div>
</body>

</html>