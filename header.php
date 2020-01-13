
  <nav class="navbar navbar-expand-lg navbar-danger bg-dark">
  <a class="navbar-brand  text-danger" href="#">Purchase.</a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link text-danger" href="awal.php">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-danger" href="notif.php"  role="button">
          Nontifikasi
          
        </a>
      </li>
    </ul>
     
    </form>
    <div class="text text-light"><?= $_SESSION['email']; ?>&nbsp;&nbsp;&nbsp;</div>
    <a href="logout.php"><input type="submit" value="logout"class="btn btn-outline-danger my-2 my-sm-0"></a>
  </div>
</nav>