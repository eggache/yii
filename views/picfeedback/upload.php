<?php
use yii\widgets\ActiveForm;
?>
<div class="upimg">
              <div class="btn" style="height:20px;">
                   <span onclick='myFunction()'>添加图片</span>
              </div>
              </div> 
<script>
function myFunction()
{
    var x = document.createElement("INPUT");
    x.setAttribute("type", "file");
    x.accept="image/*";
    var a = x.click();
    alert(a);
    
}
</script>
