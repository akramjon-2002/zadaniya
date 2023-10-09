<?php

namespace app\controllers;

use yii\web\Controller;

class PostController extends Controller
{
public function actionList(){

    return $this->render('list');
}
}