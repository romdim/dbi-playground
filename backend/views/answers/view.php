<?php

use dmstr\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\DetailView;
use yii\widgets\Pjax;
use dmstr\bootstrap\Tabs;

/**
* @var yii\web\View $this
* @var common\models\Answers $model
*/

$this->title = 'Answers ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Answers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'View';
?>
<div class="giiant-crud answers-view">

    <!-- menu buttons -->
    <p class='pull-left'>
        <?= Html::a('<span class="glyphicon glyphicon-pencil"></span> ' . 'Edit', ['update', 'id' => $model->id],['class' => 'btn btn-info']) ?>
        <?= Html::a('<span class="glyphicon glyphicon-plus"></span> ' . 'New', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <p class="pull-right">
        <?= Html::a('<span class="glyphicon glyphicon-list"></span> ' . 'List Answers', ['index'], ['class'=>'btn btn-default']) ?>
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



    <?php $this->beginBlock('app\models\Answers'); ?>

    <?= DetailView::widget([
    'model' => $model,
    'attributes' => [
            'id',
        'answer',
        'answer_num',
// generated by schmunk42\giiant\generators\crud\providers\RelationProvider::attributeFormat
[
    'format' => 'html',
    'attribute' => 'question',
    'value' => ($model->getQuestion0()->one() ? Html::a($model->getQuestion0()->one()->question, ['questions/view', 'id' => $model->getQuestion0()->one()->id,]) : '<span class="label label-warning">?</span>'),
],
        'created_at',
        'updated_at',
// generated by schmunk42\giiant\generators\crud\providers\RelationProvider::attributeFormat
[
    'format' => 'html',
    'attribute' => 'created_by',
    'value' => ($model->getCreatedBy()->one() ? Html::a($model->getCreatedBy()->one()->id, ['user/view', 'id' => $model->getCreatedBy()->one()->id,]) : '<span class="label label-warning">?</span>'),
],
// generated by schmunk42\giiant\generators\crud\providers\RelationProvider::attributeFormat
[
    'format' => 'html',
    'attribute' => 'updated_by',
    'value' => ($model->getUpdatedBy()->one() ? Html::a($model->getUpdatedBy()->one()->id, ['user/view', 'id' => $model->getUpdatedBy()->one()->id,]) : '<span class="label label-warning">?</span>'),
],
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


    
<?php $this->beginBlock('PasswordAnswers'); ?>
<div style='position: relative'><div style='position:absolute; right: 0px; top 0px;'>
  <?= Html::a(
            '<span class="glyphicon glyphicon-list"></span> ' . 'List All' . ' Password Answers',
            ['password-answers/index'],
            ['class'=>'btn text-muted btn-xs']
        ) ?>
  <?= Html::a(
            '<span class="glyphicon glyphicon-plus"></span> ' . 'New' . ' Password Answer',
            ['password-answers/create', 'PasswordAnswer' => ['answer' => $model->id]],
            ['class'=>'btn btn-success btn-xs']
        ); ?>
</div></div><?php Pjax::begin(['id'=>'pjax-PasswordAnswers', 'enableReplaceState'=> false, 'linkSelector'=>'#pjax-PasswordAnswers ul.pagination a, th a', 'clientOptions' => ['pjax:success'=>'function(){alert("yo")}']]) ?>
<?= '<div class="table-responsive">' . \yii\grid\GridView::widget([
    'layout' => '{summary}{pager}<br/>{items}{pager}',
    'dataProvider' => new \yii\data\ActiveDataProvider(['query' => $model->getPasswordAnswers(), 'pagination' => ['pageSize' => 20, 'pageParam'=>'page-passwordanswers']]),
    'pager'        => [
        'class'          => yii\widgets\LinkPager::className(),
        'firstPageLabel' => 'First',
        'lastPageLabel'  => 'Last'
    ],
    'columns' => [[
    'class'      => 'yii\grid\ActionColumn',
    'template'   => '{view} {update}',
    'contentOptions' => ['nowrap'=>'nowrap'],
    'urlCreator' => function ($action, $model, $key, $index) {
        // using the column name as key, not mapping to 'id' like the standard generator
        $params = is_array($key) ? $key : [$model->primaryKey()[0] => (string) $key];
        $params[0] = 'password-answers' . '/' . $action;
        return $params;
    },
    'buttons'    => [
        
    ],
    'controller' => 'password-answers'
],
// generated by schmunk42\giiant\generators\crud\providers\RelationProvider::columnFormat
[
    'class' => yii\grid\DataColumn::className(),
    'attribute' => 'password',
    'value' => function ($model) {
        if ($rel = $model->getPassword()->one()) {
            return Html::a($rel->id, ['passwords/view', 'id' => $rel->id,], ['data-pjax' => 0]);
        } else {
            return '';
        }
    },
    'format' => 'raw',
],
        'created_at',
        'updated_at',
]
]) . '</div>' ?>
<?php Pjax::end() ?>
<?php $this->endBlock() ?>


    <?= Tabs::widget(
                 [
                     'id' => 'relation-tabs',
                     'encodeLabels' => false,
                     'items' => [ [
    'label'   => '<b class=""># '.$model->id.'</b>',
    'content' => $this->blocks['app\models\Answers'],
    'active'  => true,
],[
    'content' => $this->blocks['PasswordAnswers'],
    'label'   => '<small>Password Answers <span class="badge badge-default">'.count($model->getPasswordAnswers()->asArray()->all()).'</span></small>',
    'active'  => false,
], ]
                 ]
    );
    ?>
        </div>
    </div>
</div>