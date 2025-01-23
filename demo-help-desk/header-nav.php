<nav class="navbar-nav-wrap">
        <!-- Default Logo -->
        <a class="navbar-brand" href="index.html" aria-label="Front">
          <img class="navbar-brand-logo" src="../assets/svg/logos/logox.svg" alt="Logo">
        </a>
        <!-- End Default Logo -->

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-default">
            <i class="bi-list"></i>
          </span>
          <span class="navbar-toggler-toggled">
            <i class="bi-x"></i>
          </span>
        </button>
        <!-- End Toggler -->

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="dashboard.php">Home Page</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about-breast-cancer.php">About Breast Cancer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="signs-symp-prev.php">Signs & Symptoms</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="diagnosis-treatment.php">Diagnosis</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="breast-self-exam.php">BSE</a>
            </li>
            <!-- Dropdown  -->
            <li class="nav-item">
              <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Notification</button>
            </li>
            <!-- End Dropdown -->
            <li class="nav-item">
              <a class="nav-link" href="questionnaire.php">Questionnaire</a>
            </li>
            
            <li class="nav-item">
              <button class="btn btn-primary btn-transition" type="button" data-bs-toggle="modal" data-bs-target="#loginModal">Ask!</button>
            </li>

            <li class="nav-item">
              <a href="login.php" class="btn btn-secondary">Logout</a>
            </li>
          </ul>
        </div>
        <!-- End Collapse -->
      </nav>