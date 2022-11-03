<?php

namespace app\models;

use Yii;
// use yii\base\Model;


class Post extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'post';
    }

    public function rules()
    {
        return [
            [['color'], 'string'],
            [['id'], 'integer'],
            [['latitude', 'longitude'], 'float']
        ];
    }
 
    public function attributeLabels()
    {
        return [];
    }
}
