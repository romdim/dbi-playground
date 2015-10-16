<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var common\models\ResultFrom $model
*/

$this->title = 'Create';
$this->params['breadcrumbs'][] = ['label' => 'Result Froms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giiant-crud result-from-create">

    <p class="pull-left">
        <?= Html::a('Cancel', \yii\helpers\Url::previous(), ['class' => 'btn btn-default']) ?>
    </p>
    <div class="clearfix"></div>

    <?= $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
