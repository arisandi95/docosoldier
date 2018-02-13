<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login Admin Docosoldier';
?>
<link rel="stylesheet" type="text/css" href="css/login.css">
    <script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>
        <body>
            <div class="container">
                <div class="row vertical-offset-100">
                    <div class="col"></div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">                                
                                <div class="row-fluid user-row">
                                    <img src="http://blast.docotel.com/public/img/css/parallax/intro/medium/doco-ufo.png" class="img-fluid mx-auto d-block" width="250px" />
                                    <p class="text-center">Docosoldier Admin</p>
                                </div>
                            </div>
                            <div class="panel-body">
                                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                                <?= $form->field($model, 'username')->textInput(['autofocus' => true]);  ?>
                                <?= $form->field($model, 'password')->passwordInput(); ?>
                                <?= $form->field($model, 'rememberMe')->checkbox(); ?>
                                
                                <div class="form-group">
                                     <?= Html::submitButton('Login', ['class' => 'btn btn-lg btn-success btn-block', 'name' => 'login-button']) ?>
                                </div>

                                <?php ActiveForm::end(); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </body>
    </div>
<script src="js/login.js"></script>