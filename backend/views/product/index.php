<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            [
                    'attribute' => 'id',
                    'contentOptions' => [
                            'style'=> 'width:60px'
                    ]
            ],


            [
                    'label' => 'Image',
                    'attribute' => 'image',
                    'content' => function($model) {
                    /** @var \common\models\Product $model */
                        return Html::img($model->getImageUrl(), ['style'=> 'width: 100px']);
                    }
            ],
            'name',
            [

                'attribute' => 'price',
                'format' => 'currency',
                'contentOptions' => [
                    'style' => 'width: 60px'
                ]
            ],

            [
                    'attribute' => 'status',
                     'content' => function($model) {
                         /** @var \common\models\Product $model */
                         return Html::tag('span', $model->status ? 'Active' : 'Draft', [
                             'class' => $model->status ? 'badge badge-success' : 'badge badge-danger'
                         ]);
                     },
                    'contentOptions' => [
                    'style' => 'width: 50px'
                    ]


            ],
            [
                'attribute' => 'created_at',
                'format' => ['date', 'Y-M-d'],
                'contentOptions' => ['style' => 'width: 125px']


            ],
            'updated_at:datetime',


            ['class' => 'common\grid\ActionColumn'],
        ],
    ]); ?>


</div>
