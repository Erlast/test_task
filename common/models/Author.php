<?php


namespace common\models;


use yii\db\ActiveRecord;
use Yii;

class Author extends ActiveRecord
{

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%author}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['surname', 'name'], 'required'],
            ['birthday', 'date', 'format' => 'php:d.m.Y'],
            ['second_name', 'safe']
        ];
    }

    public function beforeSave($insert)
    {
        $this->birthday = Yii::$app->formatter->asDate($this->birthday,'php:Y-m-d');
        return parent::beforeSave($insert);

    }
}