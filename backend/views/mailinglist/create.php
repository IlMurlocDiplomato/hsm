<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Mailinglist */

$this->title = 'Create Mailinglist';
$this->params['breadcrumbs'][] = ['label' => 'Mailinglists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mailinglist-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
