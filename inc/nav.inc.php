<? $user=new User()?>
<script src='js/js.js'></script>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Головна</a></li>
                <li><a href="#"></a></li>
            </ul>
            <form class="navbar-form navbar-right" role="search">
                <div class="form-group input-group">
                    <input type="text" class="form-control" placeholder="Search..">
                    <span class="input-group-btn">
            <button class="btn btn-default" type="button">
              <span class="glyphicon glyphicon-search"></span>
            </button>
          </span>
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <?if($user->autenf()=="Пароль ок")
                    echo" <li class='dropdown'><a href='#' class='dropdown-toggle' data-toggle='dropdown'><span class='glyphicon glyphicon-user'></span> $_SESSION[login] </a>
                                   <ul class='dropdown-menu'>
                                   <li><a href='#'>Профіль</a></li>
                                   <li><a href='#'>+Додати змагання</a></li>
                                   <li class='divider'></li>
                                   <li><a href='inc/user.inc.php?exit=exit'>Вийти</a></li>
                                   </ul>
                             </li>";
                else echo"<li><a href='user.html'><span class='glyphicon glyphicon-user'></span>Уівйти</a></li>"
                ?>
            </ul>
        </div>
    </div>
</nav>