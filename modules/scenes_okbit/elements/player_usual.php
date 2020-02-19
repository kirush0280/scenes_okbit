<script language="javascript">

	function playControl(number){
		//url_string ='/objects/?object={{OBJECT}}&op=m&m={{METOD}}&';
		url_string ='/objects/?op=m&object={{OBJECT}}&m={{METOD}}&button='+number;
		xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET", url_string, true);
		xmlhttp.send(null); 
 	}

</script>

<div class="player"> 
	<div class="player-in">					
		<div class="circleP gray link-player link-player-prev" onclick="playControl(1)">
		</div>           
		<div class="circleP gray link-player link-player-pause" onclick="playControl(2)">
		</div>
		<div class="circleP gray link-player link-player-play" onclick="playControl(3); app_player_5ca27efec036e_action('play');">
		</div>
		<div class="circleP gray link-player link-player-stop" onclick="playControl(4)">
		</div>
		<div class="circleP gray link-player link-player-next" onclick="playControl(5)">
		</div>
		<div style="clear: left"></div>
	</div>
</div>
