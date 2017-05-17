    <div class="savings saving--inline u-cf">
        
        <div class="flex--wrap">
            <?php foreach ($g->discounts->inline as $discount) { ?>
                <div class="flex--item savings--item">
                    <span class="title u-pull-left"><strong><?= $discount->title ?></strong> </span>
                    <p><strong><?= $discount->intro ?></strong> </p>
                    <small><?= $discount->text ?></small>
                </div>
            <?php } ?>
        </div>
    </div>