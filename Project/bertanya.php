<?php
    include_once 'header.php';
?>

<div class="container-fluid">
  <div class="row">
    <main class="col-md-12 ms-sm-auto px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 mx-5">Ajukan Pertanyaan</h1>
      </div>
    </main>
  </div>
</div>
<body>
<section>
  <form class="mx-5" action="bertanya_proses.php" method="post">
    <div class="form-group mb-2">
      <label class="mb-2">Pertanyaan</label>
      <textarea name="questiontext" id="field" class="form-control" maxlength="1000" id="exampleFormControlTextarea1" rows="3" placeholder="Masukkan Pertanyaan"></textarea>
    </div>
    <div class="form-group mb-2 mt-4">
      <label>Mata Pelajaran : </label>
      <select name="matapelajaran" id="mapel">
        <option value="4">Matematika</option>
        <option value="3">Bahasa Inggris</option>
        <option value="1">Bahasa Indonesia</option>
        <option value="5">Fisika</option>
        <option value="2">Biologi</option>
      </select>
    </div>
    <div class="form-group mb-2">
      <button type="submit" class="btn btn-primary mt-3" name="kirimpertanyaan">Kirim Pertanyaan</button>
    </div>
  </form>
</section>

<div class="container-fluid mt-5">
  <div class="row">
    <main class="col-md-12 ms-sm-auto px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 mx-5">Daftar Pertanyaan Anda</h1>
      </div>
      <div>
        <table class="table">
          <tbody >
            <?php
              $select = mysqli_query($conn, "SELECT questionid, u.userid, u.username, s.subjectid, s.subjectname, questiontext, questionup, questiondown FROM question q INNER JOIN users u ON q.userid = u.userid INNER JOIN subject s ON s.subjectid = q.subjectid WHERE q.userid = '".$_SESSION['user_id']."'");
              while($hasil = mysqli_fetch_array($select)) {
              ?>
              <div class="card mb-3 mx-5">
                <div class="card-header"><?php echo $hasil['username'] ?> (<?php echo $hasil['userid'] ?>)</div>
                <div class="card-body">
                  <h5 class="card-title"><?php echo $hasil['subjectname'] ?> - <?php echo $hasil['questionid'] ?></h5>
                  <p class="card-text"><?php echo $hasil['questiontext'] ?></p>
                  <a href="answer.php?qID=<?php echo $hasil['questionid']?>" class="btn btn-primary">Jawaban</a>
                  <a href="q_up.php?qID=<?php echo $hasil['questionid'] ?>" class="btn btn-success"><?php echo $hasil['questionup'] ?></a>
                  <a href="q_down.php?qID=<?php echo $hasil['questionid'] ?>" class="btn btn-danger"><?php echo $hasil['questiondown'] ?></a>
                  <a href="q_delete.php?qID=<?php echo $hasil['questionid'] ?>" class="btn btn-secondary">Hapus Pertanyaan</a>
                </div>
              </div>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
</body>
</html>

<?php
    include_once 'footer.php'
?>