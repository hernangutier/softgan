<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\IntervalosPrenez */

$this->title = $model->cod;
$this->params['breadcrumbs'][] = ['label' => 'Intervalos Prenezs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="intervalos-prenez-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->cod], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->cod], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'cod',
            'vmax',
            'vmin',
            'descripcion',
        ],
    ]) ?>

</div>
