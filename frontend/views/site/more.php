<?php

use kartik\slider\Slider;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
* @var yii\web\View $this
* @var common\models\ResultsPage $resultsPage
* @var common\models\Tiles $tiles
* @var common\models\Levels $levels
* @var array $tilesUsers
* @var bool $pass
*/

$this->title = $resultsPage->name;
?>
<div class="part-view">

    <h1><?= $resultsPage->name ?></h1>

<!--    Hard coded! -->
    <h2>Rate your readiness level per segment</h2>

    <?= (!$pass) ? '<div class="text-danger">Please select a Level for every tile</div><br />' : '' ?>
    <br /><br />

    <?php
    $form = ActiveForm::begin([
        'id' => 'part-form',
    ])
    ?>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="col-md-6">
                <?php
                    $firstTile = true;
                    $x = 0;
                    foreach($tiles as $key => $tile) {
                        $pieces = str_split($tile->name, 10);
                ?>
                <?php
                        if ($tile->x !== $x) {
                            $x++;
                            // Closing div for flex tiles-row - Reverse thinking
                            if ($key !== 0) {
                ?>
                </div>
                <?php } ?>
                <div class="flex tiles-row">

                    <?php
                    if ($key !== 0) {
                        for($i=1; $i<$tile->y; $i++) {
                    ?>

                            <div class="rectangle no-border">

                            </div>

                        <?php } ?>
                    <?php } ?>
                <?php } ?>
                    <div class="rectangle text-center" role="tablist" style="background-color: <?= $tile->getCategory0()->one()->color ?>;" id="tile<?= $tile->id ?>">
                        <div role="presentation"<?= ($firstTile) ? ' class="active"' : '' ?>>
                            <a href="#result<?= $tile->id ?>" aria-controls="result<?= $tile->id ?>" role="tab" data-toggle="tab" <?= ($tile->getCategory0()->one()->color === 'blue') || ($tile->getCategory0()->one()->color === 'purple') || ($tile->getCategory0()->one()->color === 'green') || ($tile->getCategory0()->one()->color === 'red')  ? 'style="color:white;"' : ''?>>
                                <?= $tile->name ?>
                            </a>
                        </div>
                    </div>
               <?php
                        $firstTile = false;
                        $last = $tile->id;
                    }
               ?>
                </div>
            </div>
            <div class="col-md-6 blueish-bg tab-content text-justify">
                <?php
                    $firstTile = true;
                    foreach($tiles as $key => $tile) {
                ?>
                    <div id="result<?= $tile->id ?>" role="tabpanel" class="tab-pane fade<?= ($firstTile) ? ' in active' : '' ?>">
                        <p>
                            <div class="form-group field-answersusers-answer has-success">
<!--                                <input type="hidden" name="TilesUsers[level--><?//= $key ?><!--]" value="">-->
                                <div id="tilesusers-level<?= $key ?>" class="text-center">
                                    <?= Slider::widget([
                                        'name' => 'TilesUsers['.$tile->id.']',
                                        'value' => $tilesUsers[$tile->id],
                                        'pluginOptions' => [
                                            'min' => -1,
                                            'max' => 14,
                                            'step' => 1,
                                            'tooltip'=>'always',
                                            'formatter'=>new yii\web\JsExpression('function(val) {
                                                switch(val) {
                                                    case -1:
                                                        return "Null"
                                                        break;
                                                    case 0:
                                                        return "Level 0"
                                                        break;
                                                    case 1:
                                                        return "Level 1"
                                                        break;
                                                    case 2:
                                                        return "Level 2"
                                                        break;
                                                    case 3:
                                                        return "Level 3"
                                                        break;
                                                    case 4:
                                                        return "Level 4"
                                                        break;
                                                    case 5:
                                                        return "Level 5"
                                                        break;
                                                    case 6:
                                                        return "Level 6"
                                                        break;
                                                    case 7:
                                                        return "Level 7"
                                                        break;
                                                    case 8:
                                                        return "Level 8"
                                                        break;
                                                    case 9:
                                                        return "Level 9"
                                                        break;
                                                    case 10:
                                                        return "Level 10"
                                                        break;
                                                    case 11:
                                                        return "Level 11"
                                                        break;
                                                    case 12:
                                                        return "Level 12"
                                                        break;
                                                }
                                            }')
                                        ]
                                    ]) ?>
                                </div>
                            </div>
                        </p>

                        <hr />

                        <h3 class="text-center"><?= $tile->name ?></h3>
                        <?= $tile->description ?>

                        <br /><br />

                        <a class="btn btn-primary pull-left" role="button" data-toggle="collapse" href="#tileText<?= $tile->id ?>" aria-expanded="false" aria-controls="#tileText<?= $tile->id ?>">More</a>

                        <div class="pull-right" role="tablist">
                            <div role="presentation">
                                <?php if ($tile->id !== $last) { ?>
                                <a href="#result<?= $tile->id + 1 ?>" aria-controls="result<?= $tile->id + 1 ?>" class="btn btn-primary" role="tab" data-toggle="tab">Next</a>
                                <?php } else { ?>
                                    <?= Html::submitButton('Submit', ['class' => 'btn btn-default btn-block']) ?>
                                <?php } ?>
                            </div>
                        </div>
                        <br />

                        <div class="collapse" id="tileText<?= $tile->id ?>">
                            <hr />
                            <?= $tile->text ?>
                        </div>

                        <hr />

                        <div class="row fluid">
                            <?php foreach($levels as $level) { ?>
                                <p>
                                    <div class="col-xs-2"><!--style='background-color:--><?//= $level-color ?><!--;'>-->
                                    Level <?= $level->level ?>
                                    </div>
                                    <div class="col-xs-10"><?= $level->description ?></div>
                                </p>
                            <?php } ?>
                        </div>
                    </div>
                <?php
                    $firstTile = false;
                    }
                ?>
            </div>
        </div>
    </div>

    <br /><br />

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary btn-block']) ?>
    </div>
    <?php ActiveForm::end() ?>
</div>
