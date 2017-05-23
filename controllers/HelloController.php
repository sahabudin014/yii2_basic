<?php
namespace app\controllers;

class HelloController extends \yii\web\controller {

public function actionIndex(){
  $hight=170;
  $wegit=60;

  return $this->render('index',[
  'firstname'=>'ซาฮาบูดิน',
    'lastname'=>'บาหะ',
    'hight'=>$hight,
    'wegit'=>$wegit
  ]
);
}


}

 ?>
