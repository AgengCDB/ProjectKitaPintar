<?php
  include 'header.php';
?>

<div class="container-fluid">
  <div class="row">
    <main class="col-md-12 ms-sm-auto px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 mx-5">Pertanyaan</h1>
      </div>
      <div>
        <table class="table">
          <tbody >
            <?php
              $select = mysqli_query($conn, "SELECT questionid, u.userid, u.username, s.subjectid, s.subjectname, questiontext, questionup, questiondown FROM question q INNER JOIN users u ON q.userid = u.userid INNER JOIN subject s ON s.subjectid = q.subjectid WHERE questionid = '".$_GET['qID']."'");
              while($hasil = mysqli_fetch_array($select)) {
              ?>
              <div class="card mb-3 mx-5">
                <div class="card-header"><?php echo $hasil['username'] ?> - <?php echo $hasil['userid'] ?></div>
                <div class="card-body">
                  <h5 class="card-title"><?php echo $hasil['subjectname'] ?> - <?php echo $hasil['questionid'] ?></h5>
                  <p class="card-text"><?php echo $hasil['questiontext'] ?></p>
                  <a href="q_up.php?qID=<?php echo $hasil['questionid'] ?>" class="btn btn-success"><?php echo $hasil['questionup'] ?></a>
                  <a href="q_down.php?qID=<?php echo $hasil['questionid'] ?>" class="btn btn-danger"><?php echo $hasil['questiondown'] ?></a>
                </div>
              </div>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>

<!-- Submit Jawaban -->
<section>
  <?php 
    if (isset($_SESSION['user_id'])) {
      echo '
      <form class="mx-5 row" action="answer_proses.php?idpertanyaan='.$_GET['qID'].'" method="post">
        <div class="form-group mb-2">
          <textarea name="answertext" id="field" class="form-control" maxlength="1000" id="exampleFormControlTextarea1" rows="3" placeholder="Masukkan Jawaban"></textarea>
        </div>
        <div class="form-group mb-2">
          <button type="submit" class="btn btn-primary mt-3" name="kirimjawaban">Kirim Jawaban</button>
        </div>
      </form>
      ';
    } else {
      echo '
      <form class="mx-5 row" method="post">
        <div class="form-group mb-2">
          <textarea disabled name="answertext" id="field" class="form-control" maxlength="1000" id="exampleFormControlTextarea1" rows="3" placeholder="Login diperlukan untuk menambah jawaban"></textarea>
        </div>
      </form>
      ';
    }
  ?>
  
</section>

<!-- Daftar Jawaban -->
<div class="container-fluid">
  <div class="row">
    <main class="col-md-12 ms-sm-auto px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 mx-5">Daftar Jawaban</h1>
      </div>
      <div>
        <table class="table">
          <tbody >
            <?php
              $select = mysqli_query($conn, "SELECT answerid, questionid, a.userid, answertext, answerup, answerdown, u.username FROM answer a INNER JOIN users u ON a.userid = u.userid WHERE questionid = '".$_GET['qID']."'");
              while($hasil = mysqli_fetch_array($select)) {
              ?>
              <div class="card mb-3 mx-5">
                <div class="card-header"><?php echo $hasil['username'] ?>#<?php echo $hasil['userid'] ?></div>
                <div class="card-body">
                  <p class="card-text"><?php echo $hasil['answertext'] ?></p>
                  <a href="a_up.php?aID=<?php echo $hasil['answerid'] ?>" class="btn btn-success"><?php echo $hasil['answerup'] ?></a>
                  <a href="a_down.php?aID=<?php echo $hasil['answerid'] ?>" class="btn btn-danger"><?php echo $hasil['answerdown'] ?></a>
                  <?php 
                  if (isset($_SESSION['user_id'])) {
                    if ($_SESSION['user_id'] == $hasil['userid']) {
                      echo '<a href="a_delete.php?aID=',$hasil['answerid'],'" class="btn btn-secondary">Hapus Jawaban</a>';
                    }
                  }
                  ?>
                </div>
              </div>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard/dashboard.js"></script>
  </body>
</html>

<?php
  include 'footer.php';
?>

