<?php

namespace app\controllers;

use app\models\product;

class ProductController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model= Product::find()->all();

        return $this->render('index',[
          'model'=>$model
        ]
      );

    }

}
