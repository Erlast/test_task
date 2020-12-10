<?php


namespace backend\controllers;

use common\models\Author;
use common\models\Book;
use yii\web\Controller;
use Yii;

class BookController extends Controller
{

    /**
     * Displays add form.
     *
     * @return string
     */
    public function actionAdd()
    {
        $model = new Book();

        if ($post = Yii::$app->request->post()) {

            $authorsSave = Author::find()->where(['id' => $post['Book']['authors']])->all();
            unset($post['Book']['authors']);
            if ($model->load($post) && $model->validate()) {
                $model->save();
                foreach ($authorsSave as $item) {
                    $model->link('authors', $item);
                }
            }

            $this->redirect(['/site/index']);
        }

        $authorModel = Author::find()->all();
        $authors = [];
        foreach ($authorModel as $item) {
            $authors[$item->id] = $item->surname . " " . $item->name . " " . $item->second_name;
        }
        return $this->render('form', compact('model', 'authors'));
    }
}