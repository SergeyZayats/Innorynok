<script>
  var tag = document.createElement('script');
  tag.src = "https://www.youtube.com/player_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);


  var playerInfoList = [
  {id:'ytplayer0', height:'{{$dataFromYoutube["height"]}}',width:'{{$dataFromYoutube["width"]}}', playlist_id: '{{$dataFromYoutube[0]["playlistId"]}}'},
  {id:'ytplayer1', height:'{{$dataFromYoutube["height"]}}',width:'{{$dataFromYoutube["width"]}}', playlist_id: '{{$dataFromYoutube[1]["playlistId"]}}'},
  {id:'ytplayer2', height:'{{$dataFromYoutube["height"]}}',width:'{{$dataFromYoutube["width"]}}', playlist_id: '{{$dataFromYoutube[2]["playlistId"]}}'},
  {id:'ytplayer3', height:'{{$dataFromYoutube["height"]}}',width:'{{$dataFromYoutube["width"]}}', playlist_id: '{{$dataFromYoutube[3]["playlistId"]}}'},
  {id:'ytplayer4', height:'{{$dataFromYoutube["height"]}}',width:'{{$dataFromYoutube["width"]}}', playlist_id: '{{$dataFromYoutube[4]["playlistId"]}}'},
  {id:'ytplayer5', height:'{{$dataFromYoutube["height"]}}',width:'{{$dataFromYoutube["width"]}}', playlist_id: '{{$dataFromYoutube[5]["playlistId"]}}'}
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
            playerVars: {listType: 'playlist',  list: playerInfo.playlist_id, origin: 'http://inno.local', modestbranding: 1, iv_load_policy: 3, showinfo: 0, rel: 0}
    })
  };

    function createPlayer1(playerInfo) {
    curplayer1 =  new YT.Player(playerInfo.id, {
            height: playerInfo.height,
            width: playerInfo.width,
            playerVars: {listType: 'playlist',  list: playerInfo.playlist_id, origin: 'http://inno.local', modestbranding: 1, iv_load_policy: 3, showinfo: 0, rel: 0}
    })
  };
  function createPlayer2(playerInfo) {
    curplayer2 =  new YT.Player(playerInfo.id, {
            height: playerInfo.height,
            width: playerInfo.width,
            playerVars: {listType: 'playlist',  list: playerInfo.playlist_id, origin: 'http://inno.local', modestbranding: 1, iv_load_policy: 3, showinfo: 0, rel: 0}
    })
  };

    function createPlayer3(playerInfo) {
    curplayer3 =  new YT.Player(playerInfo.id, {
            height: playerInfo.height,
            width: playerInfo.width,
            playerVars: {listType: 'playlist',  list: playerInfo.playlist_id, origin: 'http://inno.local', modestbranding: 1, iv_load_policy: 3, showinfo: 0, rel: 0}
    })
  };

    function createPlayer4(playerInfo) {
    curplayer4 =  new YT.Player(playerInfo.id, {
            height: playerInfo.height,
            width: playerInfo.width,
            playerVars: {listType: 'playlist',  list: playerInfo.playlist_id, origin: 'http://inno.local', modestbranding: 1, iv_load_policy: 3, showinfo: 0, rel: 0}
    })
  };

    function createPlayer5(playerInfo) {
    curplayer5 =  new YT.Player(playerInfo.id, {
             height: playerInfo.height,
            width: playerInfo.width,
            playerVars: {listType: 'playlist',  list: playerInfo.playlist_id, origin: 'http://inno.local', modestbranding: 1, iv_load_policy: 3, showinfo: 0, rel: 0}
    })
  };


</script>