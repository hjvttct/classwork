<?php

namespace app\controllers;

use app\models\CountryForm;
use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Country;

class CountryController extends Controller
{
    public function actionIndex()
    {

        $models = Country::find()
            ->where(['like', 'name', 'Aus'])
            ->createCommand()->rawSql;
        var_dump($models);
        die();
        foreach ($models as $model) {
            echo $model->code . '/' . $model->name . '/' . $model->population . '<br>';
        }
        var_dump($models);
        die();

        $query = Country::find();

        $pagination = new Pagination([
            'defaultPageSize' => 6,
            'totalCount' => $query->count(),
        ]);

        $countries = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'countries' => $countries,
            'pagination' => $pagination,
        ]);
    }

    public function actionList(){
        $modals = Country::find()->all();
        return $this->render('list', [
            'modals' => $modals,

        ]);
    }

    public function actionNew(){
        $model = new CountryForm();
        if ($model->load(Yii::$app->request->post())) {
            $model->save();
//            die();
            return $this->refresh();
        }
        return $this->render('new', [
            'model' => $model,
        ]);
    }
}