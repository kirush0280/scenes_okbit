<script language="javascript">
	

	function  button_{{ELEMENT_ID}}_2(){
		url_string ='/objects/?object={{OBJECT}}&op=set&p={{PROPERTY}}&button=2';
		xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET", url_string, true);
		xmlhttp.send(null); 

	}

	function  button_{{ELEMENT_ID}}_1(){
		url_string ='/objects/?object={{OBJECT}}&op=set&p={{PROPERTY}}&button=1';
		xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET", url_string, true);
		xmlhttp.send(null); 

	}
	
	function  button_{{ELEMENT_ID}}_0(){
		url_string ='/objects/?object={{OBJECT}}&op=set&p={{PROPERTY}}&button=0';
		xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET", url_string, true);
		xmlhttp.send(null); 

	}
	
</script>



	<div class="center-in">
		<div class="link-ico link-curtains-{{ICO}}"></div>
		<span>{{TITLE}}</span>

		<div class="win-close" onclick="button_{{ELEMENT_ID}}_0();">
			
		</div>
		<div class="win-stop" onclick="button_{{ELEMENT_ID}}_2();">
			
		</div>

		<div class="win-open" onclick="button_{{ELEMENT_ID}}_1();">
			
		</div>
	</div>

	
