<?php

use dmstr\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\DetailView;
use yii\widgets\Pjax;
use dmstr\bootstrap\Tabs;

/**
* @var yii\web\View $this
* @var common\models\TilesUsers $model
*/

$this->title = 'Tiles Users ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tiles Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'View';
?>
<div class="giiant-crud tiles-users-view">

    <!-- menu buttons -->
    <p class='pull-left'>
        <?= Html::a('<span class="glyphicon glyphicon-pencil"></span> ' . 'Edit', ['update', 'id' => $model->id],['class' => 'btn btn-info']) ?>
        <?= Html::a('<span class="glyphicon glyphicon-plus"></span> ' . 'New', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <p class="pull-right">
        <?= Html::a('<span class="glyphicon glyphicon-list"></span> ' . 'List TilesUsers', ['index'], ['class'=>'btn btn-default']) ?>
    </p>

    <div class="clearfix"></div>

    <!-- flash message -->
    <?php if (\Yii::$app->session->getFlash('deleteError') !== null) : ?>
        <span class="alert alert-info alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <?= \Yii::$app->session->getFlash('deleteError') ?>
        </span>
    <?php endif; ?>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h2>
                <?= $model->id ?>            </h2>
        </div>

        <div class="panel-body">



    <?php $this->beginBlock('common\models\TilesUsers'); ?>

    <?= DetailView::widget([
    'model' => $model,
    'attributes' => [
            'id',
// generated by schmunk42\giiant\generators\crud\providers\RelationProvider::attributeFormat
[
    'format' => 'html',
    'attribute' => 'tile',
    'value' => ($model->getTile0()->one() ? Html::a($model->getTile0()->one()->name, ['tiles/view', 'id' => $model->getTile0()->one()->id,]) : '<span class="label label-warning">?</span>'),
],
// generated by schmunk42\giiant\generators\crud\providers\RelationProvider::attributeFormat
[
    'format' => 'html',
    'attribute' => 'level',
    'value' => ($model->getLevel0()->one() ? Html::a($model->getLevel0()->one()->id, ['levels/view', 'id' => $model->getLevel0()->one()->id,]) : '<span class="label label-warning">?</span>'),
],
        'created_at',
        'updated_at',
        'created_by',
        'updated_by',
    ],
    ]); ?>

    <hr/>

    <?= Html::a('<span class="glyphicon glyphicon-trash"></span> ' . 'Delete', ['delete', 'id' => $model->id],
    [
    'class' => 'btn btn-danger',
    'data-confirm' => '' . 'Are you sure to delete this item?' . '',
    'data-method' => 'post',
    ]); ?>
    <?php $this->endBlock(); ?>


    
    <?= Tabs::widget(
                 [
                     'id' => 'relation-tabs',
                     'encodeLabels' => false,
                     'items' => [ [
    'label'   => '<b class=""># '.$model->id.'</b>',
    'content' => $this->blocks['common\models\TilesUsers'],
    'active'  => true,
], ]
                 ]
    );
    ?>
        </div>
    </div>
</div>