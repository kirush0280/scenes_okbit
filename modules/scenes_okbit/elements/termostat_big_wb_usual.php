<script language="javascript">
	
var val = $('#range{{ELEMENT_ID}}').val();
var minim = "{{CENTER_SHOW}}";
var maxim = '{{RIGHT_SHOW}}';
var relay_status{{ELEMENT_ID}}=('%{{OBJECT}}.relay_status%');
	
	var temp_val = Math.round('%{{OBJECT}}.value%');
	document.getElementById('info_t_{{ELEMENT_ID}}').innerHTML = temp_val + '°C';

	
	 if( relay_status{{ELEMENT_ID}} == 1 ){  	
	$('#range{{ELEMENT_ID}}').css({'background-color':'#36b636!important'});
		
}

$('#left_{{ELEMENT_ID}}').click(function(){
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

$('#right_{{ELEMENT_ID}}').click(function(){
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
		if( val > maxim ){ val = maxim; }
			
		$('#range{{ELEMENT_ID}}').html(val+'{{TEXTAREA}}');
		document.getElementById('rangeStyle{{ELEMENT_ID}}').innerHTML = val;
		document.getElementById('range{{ELEMENT_ID}}').innerHTML = val;
		document.getElementById('range{{ELEMENT_ID}}').value = val;	
		
	}
	
	function rangeSend_{{ELEMENT_ID}}(){
        val = $('#range{{ELEMENT_ID}}').val();
		if( val < minim ){ val = minim; }
		if( val > maxim ){ val = maxim ;}
        url_string ='/objects/?object={{OBJECT}}&op=set&p=normalTargetValue&v='+val;
        xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET", url_string, true);
		xmlhttp.send(null); 
		document.getElementById('range{{ELEMENT_ID}}').value = val;
	}	

	
		var info_t_{{ELEMENT_ID}}=Number('%{{OBJECT}}.value%');
	if(info_t_{{ELEMENT_ID}} >= 22 && info_t_{{ELEMENT_ID}} <= 26){
		document.getElementById("info_t_{{ELEMENT_ID}}").classList.toggle('info-green');
		document.getElementById("info_t_{{ELEMENT_ID}}_2").classList.toggle('info-green-2');
	} 
	else if(info_t_{{ELEMENT_ID}} > 26){
		document.getElementById("info_t_{{ELEMENT_ID}}").classList.toggle('info-red');
		document.getElementById("info_t_{{ELEMENT_ID}}_2").classList.toggle('info-red-2');
	}
	else if(info_t_{{ELEMENT_ID}} < 22){
		document.getElementById("info_t_{{ELEMENT_ID}}").classList.toggle('info-blue');
		document.getElementById("info_t_{{ELEMENT_ID}}_2").classList.toggle('info-blue-2');
	}
	
	
</script>
<style type="text/css">
	 
	.center-in.termostat_big {
    padding: 5px;
    height: 65px;
	 }	 
	
	.termostat_big #left_{{ELEMENT_ID}}.btn-default {
	border-radius: 10px 0px 0px 10px;
    -webkit-border-radius: 10px 0px 0px 10px;
	/*border: 2px solid #36b636;*/
	height: 50px;
	}
	
	.termostat_big #right_{{ELEMENT_ID}}.btn-default {
	border-radius: 0px 10px 10px 0px;
    -webkit-border-radius: 0px 10px 10px 0px;
	/*border: 2px solid #36b636;*/
	height: 50px;
	}
	
	.termostat_big .left {
	float: left;
	
	 }

	 .termostat_big .right {	 
	 float: right;
	 }
	
	.termbtn {
		height:50px;
		width:3em;
		 padding: 13px 4px;
		
	}
	
	 input.termostat_big{
	width:3.2em;
	font-size: 1.4em;
	font-weight: bold;
	border: 2px solid #36b636;
	}
	 
	.termostat_big .clear {
    clear: left; /* Отмена обтекания */
	}	 
	

	.termostat_big span.termostat{
	margin: 8px;
	font-size: 14px;		
	vertical-align: middle;
    font-weight: bold;
    font-family: okbit!important;	
	}
	

	span  .termostat_big.termtitle{
	vertical-align: middle;
	margin: 16px 1px 0px 1px;
	}
	.termostat_big .link-ico {
    margin: 0px 10px 0px 6px;
    width: 50px;
    height: 50px;
    padding: 1px;
    border-radius: 50%;
	/*border: 2px solid #36b636;*/
}
	.termostat_big .info-ico-in {
    font-size: 1.5em;
    font-weight: bold;
    margin-top: 12px;
}
	.info-blue-2 {
    border: 2px solid #0164b1;
}
	.info-green-2 {
    border: 2px solid #07a307;
}
	.info-red-2 {
    border: 2px solid #ce0101;
}
	.info-blue {
    color: #0164b1;
}
	.info-green {
    color: #07a307;
}
	.info-red {
    color: #ce0101;
}
	
</style>	 
<div class="center-in termostat_big">
	
	<div class="clear"></div>
	<div  class="left">		
		<div id="info_t_{{ELEMENT_ID}}_2" class="link-ico">
			<div id="info_t_{{ELEMENT_ID}}" class="info-ico-in"></div>
			
			
		</div>
		<span class="left termostat_big termtitle">{{TITLE}}</span>
		
		</div>
	 		
	
	<div class="termostat right">
		<div id="left_{{ELEMENT_ID}}" class="termbtn btn btn-default btn-sm info-green-2">-</div>
		<input class="termostat_big termbtn btn btn-default btn-sm" id="range{{ELEMENT_ID}}" oninput="range_{{ELEMENT_ID}}()" onchange="rangeSend_{{ELEMENT_ID}}()"  type="text" value="%{{OBJECT}}.normalTargetValue%">
		<div id="right_{{ELEMENT_ID}}" class="termbtn btn btn-default btn-sm info-green-2">+</div>
	</div>
</div>






