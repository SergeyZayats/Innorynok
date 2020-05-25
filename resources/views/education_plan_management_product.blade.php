@include('layouts.navigation')
@include('layouts.education')

<h2 align='center'>План изучения курса</h2>
<h2 align='center' class="course_name">Управление продуктом от Mail.ru и Алексея Моисеенкова, создателя Prisma </h2>
<br>

<div class="container">
	<div class="row">
		<div class="col-md-12">
		    <ol class="tree-structure" course_id="{{$contentData[0]->course_id}}">
          
          @foreach ($contentData as $video)
			    <li>
            <span class="num">{{$video->sequence_number}}</span>
            <a href="{{\Request::url()}}/{{$video->course_id}}/{{$video->video_id}}">{{$video->video_name}}</a>
            <input type="checkbox" class="css-checkbox" id="checkbox{{$video->sequence_number}}"/>
  	        <label for="checkbox{{$video->sequence_number}}" name="checkbox{{$video->sequence_number}}_lbl" class="css-label dark-check-green"></label>
  	        <i class="video_desc">
              <b>{!! $video->video_description !!}</b>
            </i>
					  <ol></ol>
	        </li>
          @endforeach

        </ol>
		</div>
	</div>
</div>	