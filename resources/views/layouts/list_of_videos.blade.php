<script>
  var tag = document.createElement('script');
  tag.src = "https://www.youtube.com/player_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);


  var playerInfoList = [
  {id:'ytplayer0',height:'{{$dataFromYoutube["height"]}}',width:'{{$dataFromYoutube["width"]}}',videoId:'{{$dataFromYoutube[0]["videoId"]}}'},
  {id:'ytplayer1',height:'{{$dataFromYoutube["height"]}}',width:'{{$dataFromYoutube["width"]}}',videoId:'{{$dataFromYoutube[1]["videoId"]}}'},
  {id:'ytplayer2',height:'{{$dataFromYoutube["height"]}}',width:'{{$dataFromYoutube["width"]}}',videoId:'{{$dataFromYoutube[2]["videoId"]}}'},
  {id:'ytplayer3',height:'{{$dataFromYoutube["height"]}}',width:'{{$dataFromYoutube["width"]}}',videoId:'{{$dataFromYoutube[3]["videoId"]}}'},
  {id:'ytplayer4',height:'{{$dataFromYoutube["height"]}}',width:'{{$dataFromYoutube["width"]}}',videoId:'{{$dataFromYoutube[4]["videoId"]}}'},
  {id:'ytplayer5',height:'{{$dataFromYoutube["height"]}}',width:'{{$dataFromYoutube["width"]}}',videoId:'{{$dataFromYoutube[5]["videoId"]}}'}
];

  function onYouTubeIframeAPIReady() {
    if(typeof playerInfoList === 'undefined')
    return; 

    var curplayer0 = createPlayer0(playerInfoList[0]);
    var curplayer1 = createPlayer1(playerInfoList[1]);
    var curplayer2 = createPlayer2(playerInfoList[2]);
    var curplayer3 = createPlayer3(playerInfoList[3]);
    var curplayer4 = createPlayer4(playerInfoList[4]);
    var curplayer5 = createPlayer5(playerInfoList[5]);
  }

  function createPlayer0(playerInfo) {
    curplayer0 =  new YT.Player(playerInfo.id, {
            height: playerInfo.height,
            width: playerInfo.width,
            videoId: playerInfo.videoId,
            playerVars: {origin: 'http://inno.local', modestbranding: 1, iv_load_policy: 3, showinfo: 0, rel: 0},
            events: {'onStateChange': onPlayerStateChange}
    })
  };

    function createPlayer1(playerInfo) {
    curplayer1 =  new YT.Player(playerInfo.id, {
            height: playerInfo.height,
            width: playerInfo.width,
            videoId: playerInfo.videoId,
            playerVars: {origin: 'http://inno.local', modestbranding: 1, iv_load_policy: 3, showinfo: 0, rel: 0},
            events: {'onStateChange': onPlayerStateChange}
    })
  };
  function createPlayer2(playerInfo) {
    curplayer2 =  new YT.Player(playerInfo.id, {
            height: playerInfo.height,
            width: playerInfo.width,
            videoId: playerInfo.videoId,
            playerVars: {origin: 'http://inno.local', modestbranding: 1, iv_load_policy: 3, showinfo: 0, rel: 0},
            events: {'onStateChange': onPlayerStateChange}
    })
  };

    function createPlayer3(playerInfo) {
    curplayer3 =  new YT.Player(playerInfo.id, {
            height: playerInfo.height,
            width: playerInfo.width,
            videoId: playerInfo.videoId,
            playerVars: {origin: 'http://inno.local', modestbranding: 1, iv_load_policy: 3, showinfo: 0, rel: 0},
            events: {'onStateChange': onPlayerStateChange}
    })
  };

    function createPlayer4(playerInfo) {
    curplayer4 =  new YT.Player(playerInfo.id, {
            height: playerInfo.height,
            width: playerInfo.width,
            videoId: playerInfo.videoId,
            playerVars: {origin: 'http://inno.local', modestbranding: 1, iv_load_policy: 3, showinfo: 0, rel: 0},
            events: {'onStateChange': onPlayerStateChange}
    })
  };

    function createPlayer5(playerInfo) {
    curplayer5 =  new YT.Player(playerInfo.id, {
            height: playerInfo.height,
            width: playerInfo.width,
            videoId: playerInfo.videoId,
            playerVars: {origin: 'http://inno.local', modestbranding: 1, iv_load_policy: 3, showinfo: 0, rel: 0},
            events: {'onStateChange': onPlayerStateChange}
    })
  };

    function onPlayerStateChange(event) {
      var videoId;
    switch (event.target.a.id) {
        case 'ytplayer0':
          curplayer = curplayer0;
          videoId = playerInfoList[0]['videoId'];
          break;
        case 'ytplayer1':
          curplayer = curplayer1;
          videoId = playerInfoList[1]['videoId'];
          break;
        case 'ytplayer2':
          curplayer = curplayer2;
          videoId = playerInfoList[2]['videoId'];
          break;
        case 'ytplayer3':
          curplayer = curplayer3;
          videoId = playerInfoList[3]['videoId'];
          break;
        case 'ytplayer4':
          curplayer = curplayer4;
          videoId = playerInfoList[4]['videoId'];
          break;
        case 'ytplayer5':
          curplayer = curplayer5;
          videoId = playerInfoList[5]['videoId'];
          break;              

    };
    switch (event.data) {
        case YT.PlayerState.PLAYING:
        console.log('started ' + Math.round(curplayer.getCurrentTime()));
        console.log(videoId);         
        break;
    };

};

</script>