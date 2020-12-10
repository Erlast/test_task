<?php


namespace backend\controllers;


use common\models\Author;
use Yii;
use yii\web\Controller;

class AuthorController extends Controller
{
    /**
     * Displays add form.
     *
     * @return string
     */
    public function actionAdd()
    {
        $model = new Author();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->save();
            $this->redirect(['/site/index']);
        }
        return $this->render('form', ['model' => $model]);
    }

}