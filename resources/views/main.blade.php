@include('layouts.navigation')

<!--css for title "Я хочу создать курс" !-->
<link rel="stylesheet" href="/css/title_create_course.css">

<!--form for searching courses and lessons !-->
<form action="/search" method="POST">
<div class="container">
  <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <div id="imaginary_container"> 
                <div class="input-group stylish-input-group">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <b>
                    <input type="text" name="search_phrase" class="form-control"  placeholder="Я хочу найти курс или урок..." style="color: black">
                    </b>
                    <span class="input-group-addon">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>  
                    </span>
                </div>
            </div>
        </div>
  </div>
</div>
</form>

<br>

<!-- linc leading to creating course !-->
<div class="harut">
  <section class="one">
  		
        <a href="/create" >Я хочу создать курс</a>
	</section>
</div>