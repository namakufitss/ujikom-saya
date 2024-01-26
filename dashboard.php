<?php
require ('layouts/dashboard/header.php');

if($_GET['page'] == 'admin'){
    include('auth/user.php');
} elseif($_GET['page'] == 'petugas'){
    include('auth/user.php');
}elseif($_GET['page'] == 'user') {
    include('auth/user.php');
}
require('layouts/dashboard/footer.php');