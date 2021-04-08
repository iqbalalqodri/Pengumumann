<!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="assets/dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SMK N 1 LAHAT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php $id_users=$_SESSION['userid'];
          $sql_admin=mysqli_query($connect,"SELECT * FROM as_users WHERE id ='$id_users'");
                  $id_usersn= mysqli_fetch_assoc($sql_admin);
                  $nama = $id_usersn['nama'];
                  echo $nama ?></a>
        </div>
      </div>