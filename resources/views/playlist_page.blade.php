@include('layouts.navigation')

<div class="container">
  <div class='row'>
    <div class='col-md-12'>
<div class="panel-group" id="accordion">



  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#video0">
          {{$dataFromYoutube[0]['title']}}
        </a>
      </h4>
    </div>
    <div id="video0" class="panel-collapse collapse in">
    <div id="ytplayer0" class="center-block"></div>
      <div class="panel-body">
          {{$dataFromYoutube[0]['description']}}
      </div>
    </div>
  </div>

<script>
var playerInfoList = [];
playerInfoList[0] = 
  {id:'ytplayer0',height:'{{$dataFromYoutube["height"]}}',width:'{{$dataFromYoutube["width"]}}',videoId:'{{$dataFromYoutube[0]["videoId"]}}'};	

</script>

@for ($i =1; $i < $dataFromYoutube['totalAmount']; $i++)

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">

        <a data-toggle="collapse" data-parent="#accordion" href="#video{{$i}}">
          {{$dataFromYoutube[$i]['title']}}
        </a>

      </h4>
    </div>
    <div id="video{{$i}}" class="panel-collapse collapse">

    <div id="ytplayer{{$i}}" class="center-block"></div>

      <div class="panel-body">
          {{$dataFromYoutube[$i]['description']}}
      </div>
    </div>
  </div>

<script>
	
	 playerInfoList[{{$i}}] = {id:'ytplayer{{$i}}',height:'{{$dataFromYoutube["height"]}}',width:'{{$dataFromYoutube["width"]}}',videoId:'{{$dataFromYoutube[$i]["videoId"]}}'};
</script>


@endfor


<script> 
  var tag = document.createElement('script');
  tag.src = "https://www.youtube.com/player_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);


  var players = [];

  var playersCount = playerInfoList.length;

  var time_watching = [];

  var userId = {{ json_encode($authData['userId']) }};

  function onYouTubeIframeAPIReady() {
    if(typeof playerInfoList === 'undefined')
    return; 
	


	for (var i = 0; i < playersCount; i++) {
		players[i] = createPlayer(playerInfoList[i]);
	}

  }

  function createPlayer(playerInfo) {
    return  new YT.Player(playerInfo.id, {
            height: playerInfo.height,
            width: playerInfo.width,
            videoId: playerInfo.videoId,
            playerVars: {origin: 'http://inno.local', modestbranding: 1, iv_load_policy: 3, showinfo: 0, rel: 0},
            events: {'onStateChange': onPlayerStateChange}
    })
  };

   

    function onPlayerStateChange(event) {

      	var videoId;
      	var i;
      	var curplayer;
        

    	for (i = 0; i < playersCount; i++) {
    	
    		if (playerInfoList[i].id == event.target.a.id) {
    			curplayer = players[i];
          curplayer.videoId = playerInfoList[i].videoId;
    			break;
    		}
		}

	    switch (event.data) {

	        case YT.PlayerState.PLAYING:
          time_watching['start'] = Math.round(curplayer.getCurrentTime());
          start_timestamp = new Date().toISOString().slice(0, 19).replace('T', ' ');
	        break;

          case YT.PlayerState.PAUSED:
          time_watching['end'] = Math.round(curplayer.getCurrentTime());
          time_watching['duration'] = time_watching['end'] - time_watching['start'];
          video_duration = Math.round(curplayer.getDuration());
          end_timestamp = new Date().toISOString().slice(0, 19).replace('T', ' ');

          case YT.PlayerState.ENDED:
          time_watching['end'] = Math.round(curplayer.getCurrentTime());
          time_watching['duration'] = time_watching['end'] - time_watching['start'];
          video_duration = Math.round(curplayer.getDuration());
          end_timestamp = new Date().toISOString().slice(0, 19).replace('T', ' ');

            if (userId) 
                { 
                  $.ajax({
                    type: 'POST',
                    url: '/statistics',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        userId: userId,
                        videoId: curplayer.videoId,                       
                        time_watching_start: time_watching['start'],
                        time_watching_end: time_watching['end'],
                        time_watching_duration: time_watching['duration'],
                        video_duration: video_duration,
                        start_timestamp: start_timestamp,
                        end_timestamp: end_timestamp,
                        }
                  });
            };

          break;


	    };

	};

</script>


</div>
</div>
</div>
</div>