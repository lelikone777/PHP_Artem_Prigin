 <?php $this->beginBlock('block1'); ?>
        <h1>Заголовок страницы</h1>
  <?php $this->endBlock(); ?>




     <h1>SHOW ACTION</h1>

<button class="btn btn-success" id="btn">Click me</button>



<?php

//$this->registerJsFile('@web/js/script.js', ['depends' => 'yii\web\YiiAsset']);
//$this->registerJs("alert(jQuery.fn.jquery);", \yii\web\View::POS_LOAD);

$js = <<<JS
    $('#btn').on('click', function () {
        $.ajax({
            url: 'index.php?r=post/index',
            data: {test: '123'},
            type: 'POST',
            success: function (res) {
                console.log(res);
            },
            error: function () {
                alert('Error!');
            }
        });
    });
JS;

$this->registerJs($js);

//$this->registerCss('.container{background: #ccc;}');
?>