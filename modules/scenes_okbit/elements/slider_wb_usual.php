<script language="javascript">
var count = $('input').val();

$('#left').click(function(){
   count--;
   $('input').val(count);
});

$('#right').click(function(){
   count++;
   $('input').val(count);
});
</script>

<div id="left">
<
</div>
<div class="wrapper"><input type="number" 
class="input-text qty text" 
step="1" min="1" max="" 
name="quantity_12730" 
value="1" 
title="Кол-во" size="4" 
pattern="[0-9]*" inputmode="numeric"></div>
<div id="right">
>
</div>
<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>