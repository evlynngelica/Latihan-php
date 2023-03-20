<?php
session_start();
include('server/connection.php');

if (!isset($_SESSION['logged_in'])) {
    header('location: login.php');
    exit;
}

if (isset($_GET['logout'])) {
    if (isset($_SESSION['logged_in'])) {
        unset($_SESSION['logged_in']);
        unset($_SESSION['user_email']);
        header('location: login.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <center><h2>Selamat Datang</h2></center>
    <center><table border="0"></center>
<tr>
    <td rowspan="4">
        <img src="Logo-ITENAS.png" alt="itenas" height="150px" width="150px">
    </td>
</tr>
<tr>
    <td colspan="3"> Nama </td> <td> : </td><td> Evlyn Angelica </td>
</tr>
<tr>
    <td colspan="3"> NRP </td> <td> : </td><td> 162021047 </td>
</tr>
<tr>
    <td colspan="3"> Kelas </td> <td> : </td><td> 202BB </td>
</tr>
</table>
    <a href="welcome.php?logout=1" id="logout-btn" class="btn btn-danger">LOG OUT</a>
</body>
</html>