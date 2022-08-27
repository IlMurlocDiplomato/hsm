<?php

use common\models\Mailinglist;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\MailinglistSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mailing list';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mailinglist-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Add new mail', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'attribute' => 'id',
                'contentOptions' => [
                    'style' => 'width:100px'
                ]
            ],
            'email:email',
            [
                'attribute' => 'status',
                'content' => function ($model) {
                    /** @var \common\models\Mailinglist $model */
                    return Html::tag('span', $model->status ? 'Active' : 'Draft', [
                        'class' => $model->status ? 'badge bg-success' : 'badge bg-danger'
                    ]);
                }
            ],
            [
                'attribute' => 'created_at',
                'format' => ['datetime'],
                'contentOptions' => ['style' => 'white-space: nowrap;']
            ],
            [
                'attribute' => 'updated_at',
                'format' => ['datetime'],
                'contentOptions' => ['style' => 'white-space: nowrap;']
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Mailinglist $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>
