<?php

namespace app\models;

use yii\base\Model;

class CountryForm extends Model
{
    public $code;
    public $name;
    public $population;


    public function rules()
    {
        return [
            [['code', 'name', 'population'], 'required'],
            [['code'], 'string', 'max' => 2],
            [['name'], 'string', 'max' => 52],
            [['population'], 'number'],
            [['population'], 'string', 'length' => [1, 10]],
        ];
    }

    public function save()
    {
        $model = new Country();
        $model->code = $this->code;
        $model->name = $this->name;
        $model->population = $this->population;
        $model->save();
//        die();
    }
}