<div id="slider2">
    <p class="prev2 strelka2"><i class="fa fa-chevron-left fa-2x"></i></p>
    <p class="next2 strelka2"><i class="fa fa-chevron-right fa-2x"></i></p>

    <div class="owl-carousel owl-theme qwe2">
        <?php foreach ($carousel as $imagecarousel): ?>
            <div class="sl2"><img src="images/slider2/<?= $imagecarousel->image ?>"></div>
        <?php endforeach; ?>
    </div>	
</div>