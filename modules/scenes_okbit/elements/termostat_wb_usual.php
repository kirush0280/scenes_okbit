<script language="javascript">
	
var val = $('#range{{ELEMENT_ID}}').val();
var minim = "{{CENTER_SHOW}}";
var maxim = '{{RIGHT_SHOW}}';
var relay_status{{ELEMENT_ID}}=('%{{OBJECT}}.relay_status%');
	
	 if( relay_status{{ELEMENT_ID}} == 1 ){  	
	$('#range{{ELEMENT_ID}}').css({'background-color':'green'});
}

$('#left').click(function(){
		var
		val = $('#range{{ELEMENT_ID}}').val();		
	val--;	
	 if( val < minim ){ val = minim; 
	$('#range{{ELEMENT_ID}}').css({'background-color':'red'});
}
	document.getElementById('range{{ELEMENT_ID}}').value = val;
	url_string ='/objects/?object={{OBJECT}}&op=set&p=normalTargetValue&v='+val;
        xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET", url_string, true);
		xmlhttp.send(null);
	document.getElementById('range{{ELEMENT_ID}}').value = val;
});

$('#right').click(function(){
		var
		val = $('#range{{ELEMENT_ID}}').val();	
	val++;
	 if( val > maxim ){ val = maxim ; 	
	$('#range{{ELEMENT_ID}}').css({'background-color':'red'});
}
	document.getElementById('range{{ELEMENT_ID}}').value = val;
	url_string ='/objects/?object={{OBJECT}}&op=set&p=normalTargetValue&v='+val;
        xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET", url_string, true);
		xmlhttp.send(null);
	document.getElementById('range{{ELEMENT_ID}}').value = val;
	

});

		function range_{{ELEMENT_ID}}(){
		var
		val = $('#range{{ELEMENT_ID}}').val();
		if( val < minim ){ val = minim; }
		if( val > maxim ){ val = maxim ;}
			
		$('#range{{ELEMENT_ID}}').html(val+'{{TEXTAREA}}');
		document.getElementById('rangeStyle{{ELEMENT_ID}}').innerHTML = val;
		document.getElementById('range{{ELEMENT_ID}}').innerHTML = val;
	}
	
	function rangeSend_{{ELEMENT_ID}}(){
        val = $('#range{{ELEMENT_ID}}').val();
		if( val < minim ){ val = minim; }
		if( val > maxim ){ val = maxim ;}
        url_string ='/objects/?object={{OBJECT}}&op=set&p=normalTargetValue&v='+val;
        xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET", url_string, true);
		xmlhttp.send(null); 
	}	

</script>
<style type="text/css">
	 
	.center-in.termostat {
    padding: 4px;
    height: 68px;
	 }	 
	 
	.termostat .left {
	float: left;
	 }

	 .termostat .right {	 
	 float: right;
	 }
	 
	 input.termostat{
	width:4em;
	}
	 
	.termostat .clear {
    clear: left; /* Отмена обтекания */
	}	 
</style>	 
<div class="center-in termostat">
	<span class="left">{{TITLE}}</span>
	<div class="clear"></div>
	<div  class="left">
		<div class="link-ico info-ico-4 left"></div>
		<span class="left">%{{OBJECT}}.value% °C</span>		
		
		</div>
	 		
	
	<div class="termostat right">
		<div id="left" class="btn btn-default btn-sm">-</div>
		<input class="termostat btn btn-default btn-sm" id="range{{ELEMENT_ID}}" oninput="range_{{ELEMENT_ID}}()" onchange="rangeSend_{{ELEMENT_ID}}()"  type="text" value="%{{OBJECT}}.normalTargetValue%">
		<div id="right" class="btn btn-default btn-sm">+</div>
	</div>
</div>



