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

                <div class="tiles">
                    <div>
                        <svg class="octagon" width="50" height="50">
                            <rect width = "1em" height = "1em" stroke="#ccc" />
                        </svg >
                    </div>
                </div>

            <?php } ?>
        <?php } ?>
        <?php } ?>
        <div class="tiles" role="tablist">
            <div role="presentation"<?= ($firstTile) ? ' class="active"' : '' ?>>
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
        <?php
        $firstTile = false;
        $last = $tile->id;
        }
        ?>
    </div>
</div>