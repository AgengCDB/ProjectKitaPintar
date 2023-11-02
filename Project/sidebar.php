<nav id="sidebarMenu" class="navbar navbar-expand-md navbar-dark fixed-right bg-warning">
    <div class="position-sticky fixed link-dark">
        <ul class="nav fw-bold">
            
            <li class="nav-item">
                <?php 
                if (isset($_SESSION['user_id'])) {
                echo '
                <a class="nav-link active link-dark" aria-current="page" href="bertanya.php">
                    Bertanya
                </a>
                ';
                }
                ?>
            </li>
            <li class="nav-item">
                <a class="nav-link active link-dark" aria-current="page" href="index.php">
                    Home
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active link-dark" aria-current="page" href="question.php?subjectID=4">
                    Matematika
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active link-dark" aria-current="page" href="question.php?subjectID=3">
                    B.Inggris
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active link-dark" aria-current="page" href="question.php?subjectID=1">
                    B.Indonesia
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active link-dark" aria-current="page" href="question.php?subjectID=5">
                    Fisika
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active link-dark" aria-current="page" href="question.php?subjectID=2">
                    Biologi
                </a>
            </li>
        </ul>
    </div>
</nav>