<?php
  include_once 'header.php';
?>

<div class="container-fluid">
  <div class="row">
    <main class="col-md-12 ms-sm-auto px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 mx-5">Login</h1>
      </div>
    </main>
  </div>
</div>
<section>
  <form class="mx-5" action="login_proses.php" method="post">
    <div class="form-group mb-2">
      <label for="exampleInputEmail1">Username/email</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="uname" aria-describedby="emailHelp" placeholder="Masukkan username/email">
    </div>
    <div class="form-group mb-2">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="upass" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary mt-3">Login</button>
  </form>
</section>

<?php
    include_once 'footer.php'
?>