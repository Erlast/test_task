<?php

/* @var $this yii\web\View */
/* @var $books \yii\data\ActiveDataProvider */

$this->title = 'Главная - Моя библиотека';
?>
<div class="site-index">
    <div class="body-content">
        <?= \yii\grid\GridView::widget([
            'dataProvider' => $books,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                [
                    'label' => 'Название',
                    'attribute' => 'title',
                ],
                [
                    'label' => 'Год выпуска',
                    'attribute' => 'year',
                ],
                [
                    'label' => 'Количество страниц',
                    'attribute' => 'pages',
                ],
                [
                    'label' => 'Авторы',
                    'value' => function ($data) {
                        $authors = [];
                        if ($data->authors) {
                            foreach ($data->authors as $item) {
                                $authors[] = $item->surname . " " . $item->name . " " . $item->second_name;
                            }
                        }

                        return implode(", ", $authors);
                    },
                ],

            ]
        ]);
        ?>
    </div>
</div>
