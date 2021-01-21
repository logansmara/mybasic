<?php if(!isset($_COOKIE["soglasye"])) { ?>
<div class="footer-soglasye">
<p>
В layouts/main_1.php внизу страницы
<br>
require_once('soglasye.php');
<br><br>
Также в style.css есть стили
</p>
<p>
В web/js/scripts.js
<br>
$('.sogl1').on('click', function(e) {
<br>
e.preventDefault();
<br>
$('.footer-soglasye').css('display','none');
<br>
document.cookie = "soglasye=sogl; max-age=180";
<br>
});

</p>
    <a href="#" class="sogl1">Согласие</a>
</div>
<?php } ?>