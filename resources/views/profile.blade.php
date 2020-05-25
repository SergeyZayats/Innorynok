@include('layouts.navigation')

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="/css/profile_style.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Личная информация</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Имя</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Фамилия</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

</fieldset>
</form>

<br>

<legend>Изучаемые курсы</legend>

<div class="container">
  <div class="row">                   
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100" style="width: 14%;">
                <span class="sr-only">14% Complete</span>
            </div>
            <span class="progress-type">Управление продуктом от Mail.ru и Алексея Моисеенкова, создателя Prisma</span>
            <span class="progress-completed">14%</span>
        </div>
        <div class="progress">
            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width: 67%">
                <span class="sr-only">67% Complete</span>
            </div>
            <span class="progress-type">Основы JavaScript от Sorax</span>
            <span class="progress-completed">67%</span>
        </div>
  </div>
</div>