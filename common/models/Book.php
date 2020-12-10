<?php


namespace common\models;


use yii\db\ActiveRecord;

class Book extends ActiveRecord
{

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%book}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['year', 'pages', 'authors'], 'safe'],
            ['authors', 'each', 'rule' => ['integer']]
        ];
    }

    public function getAuthors()
    {
        return $this->hasMany(Author::class, ['id' => 'author_id'])
            ->viaTable('{{%author_book}}', ['book_id' => 'id']);
    }

    public function setAuthors($value)
    {
        $this->setAttribute('authors', $value);
    }
}