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

    <?= (!$pass) ? '<div class="text-danger">Please select a Level for every tile</div><br />' : '' ?>
    <br /><br />

    <?php
    $form = ActiveForm::begin([
        'id' => 'part-form',
    ])
    ?>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="col-md-7">
                <?php
                    $first = true;
                    foreach($tiles as $key => $tile) {
                        $pieces = str_split($tile->name, 10);
                ?>
                <?php if (($key !== 0) && ($key%7) === 0) { ?>
                    <div class="row flex">
                <?php } ?>
                    <div class="col-xs-1 tiles" role="tablist">
                        <div role="presentation"<?= ($first) ? ' class="active"' : '' ?>>
                            <a href="#result<?= $tile->id ?>" aria-controls="result<?= $tile->id ?>" role="tab" data-toggle="tab">
                                <svg class="octagon" width="50" height="50">
<!--                                    <use xlink:href="#rect"/>-->
<!--                                    <rect class="tiles-border" width = "1em" height = "1em" stroke="--><?//= $tile->getCategory0()->one()->color ?><!--"/>-->
                                    <rect width = "1em" height = "1em" stroke="<?= $tile->getCategory0()->one()->color ?>" />
                                    <text text-anchor = "middle" x = "50%" y = "20%" font-size = "12" ><?php foreach($pieces as $piece) {
                                            echo '<tspan x = "50%"  text-anchor = "middle" dy="1.4em">'.$piece.'</tspan>';
                                        } ?></text >
                                </svg >
                            </a>
                        </div>
                    </div>
                <?php if (($key !== 0) && ($key%7) === 0) { ?>
                    </div>
                <?php } ?>
               <?php
                        $first = false;
                        $last = $tile->id;
                    }
               ?>
            </div>
            <div class="col-md-5 blueish-bg tab-content text-justify">
                <?php
                    $first = true;
                    foreach($tiles as $key => $tile) {
                ?>
                    <div id="result<?= $tile->id ?>" role="tabpanel" class="tab-pane fade<?= ($first) ? ' in active' : '' ?>">
                        <p>
                            <div class="form-group field-answersusers-answer has-success">
<!--                                <input type="hidden" name="TilesUsers[level--><?//= $key ?><!--]" value="">-->
                                <div id="tilesusers-level<?= $key ?>" class="text-center">
                                    <?= Slider::widget([
                                        'name' => 'TilesUsers['.$tile->id.']',
                                        'value' => $tilesUsers[$tile->id],
                                        'pluginOptions' => [
                                            'min' => -1,
                                            'max' => 12,
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
                                <a href="#result<?= ($tile->id !== $last) ? $tile->id + 1 : 1 ?>" aria-controls="result<?= ($tile->id !== $last) ? $tile->id + 1 : 1 ?>" class="btn btn-primary" role="tab" data-toggle="tab">Next</a>
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
                                    <div class="col-xs-3" style='background-color:<?= $level->color ?>;'>Level <?= $level->level ?></div>
                                    <div class="col-xs-9"><?= $level->description ?></div>
                                </p>
                            <?php } ?>
                        </div>
                    </div>
                <?php
                    $first = false;
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
