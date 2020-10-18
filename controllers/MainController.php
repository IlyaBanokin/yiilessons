<?php

namespace app\controllers;

use app\models\Products;

class MainController extends BaseController
{
    public function actionIndex()
    {
        $offers = Products::find()
            ->select(['id', 'title', 'img', 'price', 'content'])
            ->where(['is_offer' => 1])
            ->limit(4)
            ->all();

        return $this->render('index',[
            'offers' => $offers,
        ]);
    }
}