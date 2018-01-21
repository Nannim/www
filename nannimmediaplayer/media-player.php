<?php
$handle = opendir('.');
$projectContents .= '';
while ($file = readdir($handle)) 
{
  if (is_dir($file)) 
  {   
    $projectContents = '<li><a style="color:blue;" href='.$file.'>'.$file.'</a></li>';
  }
}
closedir($handle);
if (!isset($projectContents))
{
  echo 'No Files In List';
}
?>
	<head>
		<meta charset='utf-8'/>
		<title>Employed Video Player For Nims Corp.</title>
		<link href='media-player.css' rel='stylesheet'/>
		<script src='media-player.js'></script>
	</head>
<body>
	<h1 id="title">Nims Corportion</h1>
	<div id='media-player'>
		<video id='media-video' controls>
			<source src='1555239_10152593091809829_2103247055_n.mp4' type='video/mp4'>
		</video>



<div id='media-controls'>
<progress id='progress-bar' min='0' max='100' value='0'>0% played</progress>
<button id='replay-button' class='replay' title='replay' onclick='replayMedia();'>Replay</button>	
<button id='play-pause-button' class='play' title='play' onclick='togglePlayPause();'>Play</button>
<button id='stop-button' class='stop' title='stop' onclick='stopPlayer();'>Stop</button>
<button id='volume-inc-button' class='volume-plus' title='increase volume' onclick='changeVolume("+");'>Increase volume</button>
<button id='volume-dec-button' class='volume-minus' title='decrease volume' onclick='changeVolume("-");'>Decrease volume</button>
<button id='mute-button' class='mute' title='mute' onclick='toggleMute("true");'>Mute</button>	
</div>



		<div id='media-play-list'>
			<h2>Playlist</h2>
				<ul id='play-list'>			
				<div style = "width:100%;">
					<div style="float:left; width:80%;">
<ol class="projects play-item" onclick='loadVideo("<?php echo $projectContents; ?>")';>
<?php echo $projectContents; ?>
</ol>
					</div>
					
					<div style="float:right;">
					
					</div>
					
					<div style="clear:both">

					<div>
				</div>
				</ul>
		</div>	
</body>
</html>