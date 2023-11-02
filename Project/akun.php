<?php
  include_once 'header.php';
?>

<div class="container-fluid">
  <div class="row">
    <main class="col-md-12 ms-sm-auto px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 mx-5">Akun</h1>
      </div>
    </main>
  </div>
</div>
<section>
  <form class="mx-5" action="akun_update.php" method="post">
    <div class="form-group mb-2">
      <label for="exampleInputEmail1">UserID</label>
      <input disabled type="text" class="form-control" id="exampleInputEmail1" name="uid" value='<?php echo $_SESSION['user_id']?>'>
    </div>
    <div class="form-group mb-2">
      <label for="exampleInputEmail1">Username</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="uname" value='<?php echo $_SESSION['username']?>'>
    </div>
    <div class="form-group mb-2">
      <label for="exampleInputEmail1">Email</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="uemail" value='<?php echo $_SESSION['useremail']?>'>
    </div>
    <button type="submit" class="btn btn-primary mt-3" name="updateakun">Ubah Informasi Akun</button>
  </form>
</section>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard/dashboard.js"></script>
  </body>
</html>

<?php
  include 'footer.php';
?>

