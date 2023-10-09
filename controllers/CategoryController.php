<?php

namespace app\controllers;

use app\models\Category;
use yii\web\Controller;

class CategoryController extends Controller
{
public function actionCategory()
{
    return $this->render('list');
}
    public function actionIndex()
    {
        $category = new \yii\data\ActiveDataProvider([
            'query' => Category::find(),
        ]);


        return $this->render('index', [
            'category' => $category,
        ]);
    }

}