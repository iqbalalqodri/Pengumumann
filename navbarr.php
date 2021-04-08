<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
<a class="navbar-brand mr-auto mr-lg-0" href="">SMK N 1 LAHAT | | </a>
<div class="navbar-collape offcanvas-collpase">
    <ul class="navbar-nav mr-auto">
        <?php if ($_SESSION["akses"]=="admin") {?>
            <li class="nav-item">
            <a class="nav-link " href=""></a>
        </li>
        <li class="nav-item">
            <a class="nav-link  " href="home.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="users_d.php">Users</a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link " href="logout.php">Logout</a>
        </li>
        <?php }elseif ($_SESSION["akses"]=="siswa") {?>
            <li class="nav-item">
            <a class="nav-link " href=""></a>
        </li>
        <li class="nav-item">
            <a class="nav-link active " href="home.php">Home</a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link " href="logout.php">Logout</a>
        </li>
        <?php  } ?>
        

    </ul>
</div>
</nav>