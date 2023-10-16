<?php

namespace app\controllers;

use app\models\Country;
use app\models\MailForm;
use Yii;
use yii\web\Controller;

class MyController extends Controller
{
    public function actionIndex($fio = 'Твоё ФИО:') {
        $country = Country::find()->all();
        echo '<pre>';
        print_r($country);
        die();
        return $fio;
    }

    public function actionAbout()
    {
        return $this->render('about', [
            'we' => 'люди',
        ]);
    }

    public function actionTest()
    {
        return $this->render('test', [
            'age' => 17,
            'name' => 'Андрей',
            'items' => ['личный самолет', 'дом', 'ПК'],
        ]);
    }

    public function actionMail()
    {
        $model = new MailForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('mail', [
            'model' => $model
        ]);
    }
}