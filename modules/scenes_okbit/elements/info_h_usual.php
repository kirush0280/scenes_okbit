<script language="javascript">
	var info_h_{{ELEMENT_ID}}=Number('%{{OBJECT}}.{{PROPERTY}}%');
	if(info_h_{{ELEMENT_ID}} >= 40 && info_h_{{ELEMENT_ID}} <= 60){
		document.getElementById("info_h_{{ELEMENT_ID}}").classList.toggle('info-green');
		document.getElementById("info_h_{{ELEMENT_ID}}_2").classList.toggle('info-green-2');
	} 
	else if(info_h_{{ELEMENT_ID}} < 40 ){
		document.getElementById("info_h_{{ELEMENT_ID}}").classList.toggle('info-red');
		document.getElementById("info_h_{{ELEMENT_ID}}_2").classList.toggle('info-red-2');
}
	else if(info_h_{{ELEMENT_ID}} > 60 ){
		document.getElementById("info_h_{{ELEMENT_ID}}").classList.toggle('info-red');
		document.getElementById("info_h_{{ELEMENT_ID}}_2").classList.toggle('info-red-2');
	}
</script>

<div class="link-ico-out">
	<div id="info_h_{{ELEMENT_ID}}_2" class="link-ico">
		<div id="info_h_{{ELEMENT_ID}}" class="info-ico-in">%{{OBJECT}}.{{PROPERTY}}%%</div>
	</div>
	<span>{{TITLE}}</span>
</div>
