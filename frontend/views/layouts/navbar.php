<?php 
    use yii\helpers\Html;
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="<?= Yii::$app->homeUrl?>">
    <img src="../images/docosoldier-white.png" class="img-fluid" style="height: 50px">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?= Yii::$app->homeUrl?>">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?r=news/index">News</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?r=site/about">About</a>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Account <span class="caret"></span></a>
          <div class="dropdown-menu" >
            <?php if (Yii::$app->user->isGuest) :?>
                <a class="dropdown-item" href="index.php?r=site/login">Login</a>
                <a class="dropdown-item" href="index.php?r=site/signup">Sign Up</a>
            <?php else : ?>
                <a class="dropdown-item" href="index.php?r=profile/index">
                    Profile (<?=Yii::$app->user->identity->username?>)
                </a>
                <?= Html::a('Logout', ['site/logout'], ['data' => ['method' => 'post'], 'class' => 'dropdown-item'] ) ?>
            <?php endif ?>
            <div class="dropdown-divider"></div>
          </div>
        </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>