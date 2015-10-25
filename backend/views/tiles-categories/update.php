<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var common\models\TilesCategories $model
 */

$this->title = 'Tiles Categories ' . $model->name . ', ' . 'Edit';
$this->params['breadcrumbs'][] = ['label' => 'Tiles Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="giiant-crud tiles-categories-update">

    <p>
        <?= Html::a('<span class="glyphicon glyphicon-eye-open"></span> ' . 'View', ['view', 'id' => $model->id], ['class' => 'btn btn-default']) ?>
    </p>

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
