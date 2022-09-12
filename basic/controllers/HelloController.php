<?php
    namespace basic\controllers;
    use yii\web\Controllers;

    class HelloController extends Controller {
        public function actionIndex(){
            return $this ->render("welcome");
        }

    }
?>