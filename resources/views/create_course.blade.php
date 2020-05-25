@include('layouts.navigation')

<style>
.VideoList {
  align: center;
}
</style>

<!--js for input fields !-->
<script type="text/javascript" src="/js/input_fields_create_course.js"></script>

<script> 
    var getLocation = function(href) {
    var l = document.createElement("a");
    l.href = href;
    if (l.hostname !== "www.youtube.com") throw ("Not trusted hostname");
    l = "http://" + l.hostname + "/embed" + l.search;

    return l; 
  }

function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url)
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}


  function prepareFrame(url) {

      var ifrm = document.createElement("iframe");
      ifrm.setAttribute("src", url);
      ifrm.style.width = "480px";
      ifrm.style.height = "360px";
      ifrm.id = "ytplayer" + i; 
      
      ifrm.type = "text/html";
      ifrm.frameborder = 0;
      document.getElementById("VideoList"+i).appendChild(ifrm);
      i++;
  }


//creates field for entering video description
  function prepareDescription() {

      var div = document.createElement("div");
      div.id = "VideoList" + i;
      document.getElementById("VideoList").appendChild(div);

    document.getElementById("VideoList"+i).innerHTML += "<br> <li> <input id='videoLessonDescription" + i +"' type='text' maxlength=255  class='form-control' aria-label='Default' aria-describedby='inputGroup-sizing-default' placeholder='Введите название урока'> </li> <br>";

  }


  function saveDescription (e) {
    VideoLessons[e.target.id] = document.getElementById(e.target.id).value;
  }

//creates a listener for when you press a key
window.onkeyup = keyup;

//creates a global Javascript variable for storing entered url
var inputURLValue;

var inputLessonName;

//creates a global variable for storing videolessons added in course
var VideoLessons = [];
var i = 0;

function keyup(e) {
  //setting your input text to the global Javascript Variable for every key press
inputURLValue = e.target.value;

  //listens for you to press the ENTER key, at which point your web address will change to the one you have input in the search box
  if (e.keyCode == 13) {

    if (e.target.id == "YoutubeLink") {

      var fullAdressName = getLocation(inputURLValue);
      var query = getParameterByName("v", fullAdressName);
      fullAdressName = "http://www.youtube.com/embed/"+query;

      prepareDescription();
      prepareFrame(fullAdressName);

    }

  }
}

/*function mouseout(e) {
  //setting your input text to the global Javascript Variable for every key press
inputLessonName = e.fromElement.id;
    console.log(inputLessonName);
    if (inputLessonName.search("VideoLessons") != -1) {
      console.log(e);
      saveDescription(e);

    }
} */

</script>

<h2 align='center'>Создание курса</h2>

<form>

<div class="row">
  <div class="col-md-6 mb-3">
    <label for="validationCustom01">1. Категория, к которой относится курс</label>
      <select class="form-control form-control-lg" name="category" id="validationCustom01" onchange="ChangecatList()" required>
        <option value="">Выбери категорию </option>
        <option value="Языки программирования">Языки программирования</option>
        <option value="Менеджмент">Менеджмент</option>
      </select>
  </div>
  <div class="col-md-6 mb-3">
    <label for="validationCustom02">2. Тема, к которой относится курс</label>
     <select class="form-control form-control-lg" id="validationCustom02" name="topic" required></select>
  </div>
</div>

<br>

<div class="row">
  <div class="col-md-6 mb-3">
    <label for="validationCustom03">3. Введите наименование курса</label>
    <input type="text" maxlength=255  class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
  </div>
</div>

<br>

<h3 align='center'>Структура курса</h3>

<div class="row">
  <div class="col-md-6 mb-3">
    <label for="validationCustom04">4. Определите состав курса и последовательность уроков</label>
  </div>
</div>

<div class="row">
  <div class="col-md-6 mb-3">  
    <label for="Add lesson">Чтобы добавить урок необходимо ввести полную ссылку видео с Youtube</label>
    <input id="YoutubeLink" float="right" type="text" maxlength=255  class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Введите название урока">
  </div>
</div>

<div class="row">
  <div class="col-md-6 mb-3">
    <ol id="VideoList"></ol>
  </div>
</div>

<br>

</form>

</body>
</html>