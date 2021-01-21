<!-- слайдер -->
<div id="slider1">

    <p class="prev1 strelka1"><i class="fa fa-chevron-left fa-3x"></i></p>
    <p class="next1 strelka1"><i class="fa fa-chevron-right fa-3x"></i></p>

    <div class="owl-carousel owl-theme qwe1">
        <?php foreach ($slides as $slide): ?>
            <div class="sl1"><img src="images/slider1/<?= $slide->image ?>"></div>
        <?php endforeach; ?>

    </div>
</div>
<!-- / слайдер -->