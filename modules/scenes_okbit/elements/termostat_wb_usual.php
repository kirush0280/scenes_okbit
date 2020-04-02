<script language="javascript">
	
var val = $('#range{{ELEMENT_ID}}').val();
var minim = "{{CENTER_SHOW}}";
var maxim = '{{RIGHT_SHOW}}';
var relay_status{{ELEMENT_ID}}=('%{{OBJECT}}.relay_status%');
	
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
	
	function rangeSend_{{ELEMENT_ID}}(val){	
		val = Number(val);
		
	if ( isNaN(val) ) { alert(val + " - это не число"); val = "%{{OBJECT}}.normalTargetValue%";
	} else {
		if( val < minim ){ val = minim; }
		if( val > maxim ){ val = maxim; }
        url_string ='/objects/?object={{OBJECT}}&op=set&p=normalTargetValue&v='+val;
        xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET", url_string, true);
		xmlhttp.send(null); 		
		}
		document.getElementById('range{{ELEMENT_ID}}').value = val;
	}
</script>
<style type="text/css">
	 
	.center-in.termostat {
    padding: 1px;
    height: 68px;
	 }	 
	
	.termostat #left_{{ELEMENT_ID}}.btn {
	border-radius: 10px 0px 0px 10px;
    -webkit-border-radius: 10px 0px 0px 10px;
	border: 2px solid #36b636;
	}
	
	.termostat #right_{{ELEMENT_ID}}.btn {
	border-radius: 0px 10px 10px 0px;
    -webkit-border-radius: 0px 10px 10px 0px;
	border: 2px solid #36b636;
	}
	
	.termostat .left {
	float: left;
	
	 }

	 .termostat .right {	 
	 float: right;
	 }
	 
	 input.termostat{
	width:4em;
	border: 2px solid #36b636;
	background-color: transparent;	
	}
	 
	.termostat .clear {
    clear: left; /* Отмена обтекания */
	}	 
	
	.termostat .info-term-0 {
	width: 32px;
    height: 32px;		
    margin: 3px 0px 3px 6px;
	background-size: cover;

	background-image: url(../../templates/scenes_okbit/sc_templates/room_iOS_style/images/ico/gradus-t-0.png)!important;
}

	.termostat  .info-term-1 {
	margin: 3px 0px 3px 10px;
	width: 32px;
    height: 32px;
	background-size: cover;
	background-image: url(../../templates/scenes_okbit/sc_templates/room_iOS_style/images/ico/gradus-t-1.png)!important;
}
	.termostat span.termostat{
	margin: 8px;
	font-size: 14px;
	}
</style>	 
<div class="center-in termostat">
	<span class="left">{{TITLE}}</span>
	<div class="clear"></div>
	<div  class="left">
		<!--div class="link-ico info-ico-4 left"></div--><div class="left sys-link-ico info-term-%{{OBJECT}}.relay_status%"></div>
		<span class="termostat left">%{{OBJECT}}.value% °C</span>		
		
		</div>
	 		
	
	<div class="termostat right">
		<div id="left_{{ELEMENT_ID}}" class="btn btn-sm">-</div>
		<input class="termostat btn btn-sm" id="range{{ELEMENT_ID}}" oninput="range_{{ELEMENT_ID}}()" onchange="rangeSend_{{ELEMENT_ID}}(this.value)"  type="text" value="%{{OBJECT}}.normalTargetValue%">
		<div id="right_{{ELEMENT_ID}}" class="btn btn-sm">+</div>
	</div>
</div>











