<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
<span onclick="loadXMLDoc()" >upload</span>
<input type="file" name="PicForm[file]" id="file" accept="image/*" onchange="myFunction()"/>
<input type="submit" id="submit" />
<?php ActiveForm::end() ?>
<img src='../image/1.jpg'>
              </div> 
<div id="myDiv"></div>
<script>
function myFunction()
{
}

function upload()
{
    var x = document.getElementById("file");
    x.click();
}
function loadXMLDoc()
{
    var xmlhttp;
    if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    }
    else
    {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","http://localhost/~trylen/yii/web/index?r=size/ajax",true);
    xmlhttp.send();
}
</script>
