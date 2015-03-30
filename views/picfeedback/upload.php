<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
<span onclick="myFunction()" >upload</span>
<?php ActiveForm::end() ?>
<img src='/uploads/1.jpg'>
              </div> 
<script>
function myFunction()
{
    var x = document.createElement("INPUT");
    x.setAttribute("type", "file");
    x.setAttribute("name", "PicForm[file]");
    x.accept="image/*";
    x.click();
    x.onchange=upload();
    alert(x);
}

function upload()
{
    alert(111);
}
</script>
