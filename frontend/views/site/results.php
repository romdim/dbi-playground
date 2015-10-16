<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
* @var yii\web\View $this
* @var common\models\ResultsPage $resultsPage
* @var common\models\ResultFrom $resultsFrom[]
* @var common\models\Results $results[]
*/

$this->title = $resultsPage->name;
?>
<div class="part-view">

    <h1><?= $resultsPage->name ?> </h1>
    <h2>Results taken from <?php foreach($resultsFrom as $resultFrom) { echo $resultFrom->getPart0()->one()->name . ' '; } ?></h2>

    <div class="container-fluid">
        <div class="row-fluid">
            <div class="col-md-6">
            <?php foreach ($results as $key => $result) { ?>
                <?php if (($key%2) == 0) { ?>
                    <div class="row">
                        <div class="col-md-5">
                <?php } else { ?>
                        <div class="col-md-5 col-md-offset-2">
                <?php } ?>
                            <img src="..\frontend\assets\img\<?= $result->small_photo ?>" alt="<?= $result->description ?>">
                            <?= $result->description ?>
                        </div>
                <?php if (($key%2) != 0) { ?>
                    </div>
                <?php } ?>
            <?php } ?>
            </div>
            <div class="col-md-6">

            </div>
        </div>
    </div>

    <div class="form-group">
        <?= Html::a('Submit', [''], ['class' => 'btn btn-primary']) ?>
    </div>
</div>
