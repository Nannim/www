<head>
<title>Nannim</title>
<link rel="shortcut icon" href="icon.png" type="image/png"/>
<link rel="stylesheet" href="morphena.css" type="text/css"/>
</head>
<body>
    <div class="menu-slab">
        <a href="#home"><button>Home</button></a>
        <a href="#music"><button>Music</button></a>
        <a href="#videos"><button>Videos</button></a>
        <a href="#images"><button>Images</button></a>
        <a href="#locations"><button>Locations</button></a>
        <a href="#people"><button>People</button></a>
    </div>
    <br>
    <style>
        *{font-family:Cursive;text-align:center;}
        button{padding:10px 10px 10px 10px; background:url("log.png");border:0px;}
        .footer{text-align:center;bottom:0;}
        hr{width:50%;opacity:10%;margin-top:50px;}
        img{text-align:center; width:800px;}
        table{position:relative;text-align:center;font-size:12px;}
    </style>
    <div class="body-content">
        <audio controls poster="image.png" absolute>
            <source src="audio.mp3" type="audio/mp3"/>
        </audio>





        <br>
        <hr>






        <video controls poster="icon.png" style="width:57%;">
            <source src="play.mp4" type="video/mp4" width="7%"/>
        </video>





        <br>
        <hr>
        <br>








	<figure id="video_player">
		<div id="video_container">
			<video controls poster=".png">
				<source src='.webm' type='video/webm'>
      			<source src='play.mp4' type='video/mp4'>
      			<track kind="chapters" label="locations" src="">
      			</video>
		</div>
		<figcaption>
			<a href=".mp4" class="currentVid">
				<img src=".png" alt="Welcome, Human">
			</a>
			<a href=".mp4">
				<img src=".png" alt="Welcome, Human">
			</a>
			<a href=".mp4">
				<img src=".png" alt="Welcome, Human">
			</a>
			<a href=".mp4">
				<img src=".png" alt="Welcome, Human">
			</a>
			<a href=".mp4">
				<img src=".png" alt="Welcome, Human">
			</a>
		</figcaption>
	</figure>

	<style type="text/css">
#video_player{display:table;line-height:0;font-size:0;background:#000;max-width:0 auto;}	#video_container{position:relative;}
#video_player div, #video_player figcaption{display:table-cell;vertical-align:top;}
#video_container video{position:absolute;display:block;width:100%;height:100%;top:0;}
#video_player figcaption{width:25%;}
#video_player figcaption a{display:block;}
#video_player figcaption a{opacity:.5;transition:1s opacity;}
#video_player figcaption a img, figure video{width:100%;height:auto;}
#video_player figcaption a.currentvid,
#video_player figcaption a:hover,
#video_player figcaption a:focus{		opacity:1;}
@media (max-width: 700px) {
#video_player video,
#video_player figcaption{display:table-row;
}
#video_container{padding-top:56.25%;}
#video_player figcaption a{display:inline-block;width:33.33%;}
}
	</style>
	<script type="text/javascript">
var video_player = document.getElementById("video_player");
video = video_player.getElementsByTagName("video")[0],
video_links = video_player.getElementsByTagName("figcaption")[0],
source = video.getElementsByTagName("source"),
link_list = [],
path = '',
currentVid = 0,
allLnks =video_links.children,
lnkNum = allLnks.length;
video.removeAttribute("controls");
video.removeAttribute("poster");

function playVid(index){
	video_links.children[index].classList.add("currentvid");
	source[0].src = path + link_list[index] + ".mp4";
	source[1].src = path + link_list[index] + ".webm";
	currentVid = index;
	video.load();
	video.play();
}
for (var i=0; i<lnkNum; i++) {
	var filename = allLnks[i].href;
	link_list[i] = filename.match(/([^\/]+)(?=\.\w+$)/)[0];
	(function(index)){
		allLnks[i].onClick = function(i){
			i.preventDefault();
				for (var i = 0; i<=lnkNum; i++) {
					allLnks[i].classList.remove("currentvid");
				}
				playVid(index);
		}
	})(i);
}
video.addEventListener('ended', function() {
	allLnks[currentVid].classList.remove("currentvid");
	if ((currentVid + 1) >= lnkNum){
		nextVid = 0;
	}
	else {
		nextVid = currentVid+1;
	}
	playVid(nextVid);
})
video.addEventListener('mouseenter',
	function(){
		video.setAttribute("controls","true");
	})
video.addEventListener('mouseleave', function() {
	video.removeAttribute("controls");
})
</script>




        <br>
        <hr>





<img src="image.png" type="image/png"/>
    </div>
</body>




<hr>





<div class="footer bottom" id="footer bottom">
  <table>
  <tr><td>Mail</td><td>Partners</td><td>Mobile</td><td>Extensions</td></tr>
  <tr><td>Feedback</td><td>Support</td><td>Developer</td><td>Open Source</td></tr>
  <tr><td>Connect</td><td>Help</td><td>Tools</td><td>EULA</td></tr>
  <tr><td>nannim.com@gmail.com</td><td>Copyright &copy;</td><td>Nannim 2017</td><td>La Paix Universal Resources LTD</td></tr>
</table>
</div>
