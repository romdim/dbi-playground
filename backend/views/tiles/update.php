<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var common\models\Tiles $model
 */

$this->title = 'Tiles ' . $model->name . ', ' . 'Edit';
$this->params['breadcrumbs'][] = ['label' => 'Tiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="giiant-crud tiles-update">

    <p>
        <?= Html::a('<span class="glyphicon glyphicon-eye-open"></span> ' . 'View', ['view', 'id' => $model->id], ['class' => 'btn btn-default']) ?>
    </p>

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
