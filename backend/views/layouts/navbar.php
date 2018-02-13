<?php 
  use yii\helpers\Html;
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Docosoldier Admin</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
       <li >
        <a class="nav-link" href="#"> | </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?=Yii::$app->homeUrl?>">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=Yii::$app->homeUrl?>?r=user/index">Data User</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=Yii::$app->homeUrl?>?r=news/index">News</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Data Admin</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="download">Akun<span class="caret"></span></a>
        <div class="dropdown-menu" aria-labelledby="download">
                <a class="dropdown-item" href="https://jsfiddle.net/bootswatch/8zet8yhz/">Profile</a>
                <div class="dropdown-divider"></div>
                <!-- <a class="dropdown-item" href="../4/lux/bootstrap.min.css">Logout</a> -->
                <?= Html::a('Logout', ['site/logout'], ['data' => ['method' => 'post'], 'class' => 'dropdown-item'] ) ?>
        </div>
      </li>
    </ul>

  </div>
</nav>