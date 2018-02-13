<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
   <div class="jumbotron">
        <h1>Docosoldier!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <?php 
        if (Yii::$app->user->isGuest) { 
        ?>
        <p><a class="btn btn-lg btn-default" href="index.php?r=site/about">
            <img src="../images/docotrop.svg" style="margin-bottom: 0px" height="120px"> 
            <i class="glyphicon glyphicon-user"></i> About Us
        </a></p>
        <?php
        } else {
        ?>
        <p><a class="btn btn-lg btn-default" href="http://www.yiiframework.com">
            <img src="../images/docotrop.svg" style="margin-bottom: 0px" height="120px"> 
            <i class="glyphicon glyphicon-plus-sign"></i> Create Group
        </a></p>
        <?php 
        }
         ?>
        
    </div>

    <div class="body-content">
        <div class="row">
            <div class="col-md-4">
                <div class="thumbnail">
                  <a href="/w3images/lights.jpg">
                    <img src="https://static.pexels.com/photos/157661/young-woman-shooting-model-157661.jpeg" alt="Lights" style="width:100%">
                    <div class="caption">
                      <p>Lorem ipsum...</p>
                    </div>
                  </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                  <a href="/w3images/lights.jpg">
                    <img src="https://static.pexels.com/photos/157661/young-woman-shooting-model-157661.jpeg" alt="Lights" style="width:100%">
                    <div class="caption">
                      <p>Lorem ipsum...</p>
                    </div>
                  </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                  <a href="/w3images/lights.jpg">
                    <img src="https://static.pexels.com/photos/157661/young-woman-shooting-model-157661.jpeg" alt="Lights" style="width:100%">
                    <div class="caption">
                      <p>Lorem ipsum...</p>
                    </div>
                  </a>
                </div>
            </div>
        </div>

    </div>
    
</div>
