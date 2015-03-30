<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
<span onclick="upload()" >upload</span>
<input type="file" name="PicForm[file]" id="file" accept="image/*" onchange="myFunction()"/>
<input type="submit" id="submit" />
<?php ActiveForm::end() ?>
<img src='../image/1.jpg'>
              </div> 
<script>
function myFunction()
{
    x=document.getElementById("submit");
    x.click();
}

function upload()
{
    var x = document.getElementById("file");
    x.click();
}
</script>
