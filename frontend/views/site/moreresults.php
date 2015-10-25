<?php

use dosamigos\chartjs\ChartJs;

/**
* @var yii\web\View $this
* @var common\models\TilesCategories $tilesCategories
* @var int $points[]
* @var int $outOf[]
* @var int $levels[]
* @var int $colors[]
* @var string $categoriesNames[]
* @var int $categoriesLevels[]
*/

$this->title = 'Digital Readiness Results';
?>
<div class="part-view">

    <h1><?= $this->title ?></h1>
    <br /><br />

    <div class="container-fluid">
        <div class="row-fluid">
            <div class="col-xs-4 blueish-bg">
                <h2>Segment</h2>
            </div>
            <div class="col-xs-2 blueish-bg">
                <h2>Points</h2>
            </div>
            <div class="col-xs-3 blueish-bg">
                <h2>Average Score</h2>
            </div>
            <div class="col-xs-3 blueish-bg">
                <h2>Average Levels</h2>
            </div>
        </div>

        <?php
            foreach($tilesCategories as $tilesCategory) {
                $toBeRounded = $points[$tilesCategory->name]/$outOf[$tilesCategory->name]
        ?>
                <div class="row-fluid">
                    <div class="col-xs-4 blueish-bg">
                        <h4><?= $tilesCategory->name ?></h4>
                    </div>
                    <div class="col-xs-2 blueish-bg">
                        <h4><?= $points[$tilesCategory->name] . '/' . ($outOf[$tilesCategory->name]*7) ?></h4>
                    </div>
                    <div class="col-xs-3 blueish-bg">
                        <h4><?= round($toBeRounded) . ' (' . number_format($toBeRounded, 2) . ' out of 7)' ?></h4>
                    </div>
                    <div class="col-xs-3 blueish-bg block-center text-center">
                        <h4 style="background-color: <?= $colors[$tilesCategory->name] ?>;"><?= $levels[$tilesCategory->name] ?></h4>
                    </div>
                </div>
        <?php } ?>
    </div>

    <div class="center-block text-center">
    <?= ChartJs::widget([
            'type' => 'Radar',
            'options' => [
                'height' => 800,
                'width' => 800,
            ],
            'clientOptions' => [

                'scaleOverride' => true,
                'scaleSteps' => 7,
                'scaleStepWidth' => 1,
                'scaleStartValue' => 0,

//                'scaleFontColor' => 'blue',
//                'pointHighlightFill' => 'blue',
//                'pointHighlightStroke' => 'blue',
                'scaleLineColor' => 'blue',
//                'tooltipFillColor' => 'blue',
//                'tooltipTitleFontColor' => 'blue',

                //String - Colour of the angle line
                'angleLineColor' => 'blue',

                //String - Point label font colour
                'pointLabelFontColor' => '#000',

                //Number - Point label font size in pixels
                'pointLabelFontSize' => 15,
            ],
            'data' => [
                'labels' => $categoriesNames,
                'datasets' => [
                    [
                        'fillColor' => 'rgba(220,220,220,0.5)',
                        'strokeColor' => 'black',
                        'pointColor' => 'white',
                        'pointStrokeColor' => '#fff',
                        'data' => $categoriesLevels
                    ]
                ]
            ]
        ]);
    ?>
    </div>
</div>