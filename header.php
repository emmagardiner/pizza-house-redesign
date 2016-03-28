<header>
  <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-center">
            <li><a href="index.php"
                  <?php 
                  if ($pageName == "index.php") {
                      echo 'class = "current"';
                  }
                  ?>
                  ><span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                  Home</a>
            </li>
            <li><a href="menu.php"
                  <?php 
                  if ($pageName == "menu.php") {
                      echo 'class = "current"';
                  }
                  ?>
                  >Menu</a>
            </li>
            <li><a href="specials.php"
                  <?php 
                      if ($pageName == "specials.php") {
                        echo 'class = "current"';
                      }
                  ?>
                  >Specials</a></li>
            <li><a href="reservations.php"
                  <?php 
                      if ($pageName == "reservations.php") {
                        echo 'class = "current"';
                      }
                  ?>
                  >Reservations</a></li>
            <li><a href="form.php"
                  <?php 
                  if ($pageName == "form.php") {
                    echo 'class = "current"';
                  }
                  ?>
                  >Gift Cards</a></li>
            <li><a href="contact.php"
                  <?php 
                  if ($pageName == "contact.php") {
                    echo 'class = "current"';
                  }
                  ?>
                  >Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    </header>