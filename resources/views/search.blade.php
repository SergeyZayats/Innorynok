@include('layouts.navigation')

<div class="tab-content">
  <div id="menu1" class="tab-pane fade in active">
    <div id="top-courses-developer" role="tabpanel" class="tab-pane active">
      <ul class="row" id="ul_search_videos">

@for ($i =0; $i < 6; $i++)

        <li role="presentation" class="card-cont col-xs-12 col-sm-6 col-md-4">
          <div class="card card-preview rotate-in">
            <div class="card-content">
              <div class="col-xs-4 col-sm-12 image-column">


                <div id="ytplayer{{$i}}"></div>


              </div>
            </div>
          </div>
        </li>

@endfor
      
      </ul>


@include('layouts.list_of_videos')


</body>
</html>