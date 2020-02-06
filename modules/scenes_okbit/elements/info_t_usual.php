<script language="javascript">
	var info_t_{{ELEMENT_ID}}=Number('%{{OBJECT}}.{{PROPERTY}}%');
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

<div class="link-ico-out">
	<div id="info_t_{{ELEMENT_ID}}_2" class="link-ico">
		<div id="info_t_{{ELEMENT_ID}}" class="info-ico-in">%{{OBJECT}}.{{PROPERTY}}%°C</div>
	</div>
	<span>{{TITLE}}</span>
</div>
