var catAndActs = {};
catAndActs['Языки программирования'] = ['PHP', 'JavaScript'];
catAndActs['Менеджмент'] = ['Управление продуктом'];

function ChangecatList() {
    var catList = document.getElementById("validationCustom01");
    var actList = document.getElementById("validationCustom02");
    var selCat = catList.options[catList.selectedIndex].value;
    while (actList.options.length) {
        actList.remove(0);
    }
    var cats = catAndActs[selCat];
    if (cats) {
        var i;
        for (i = 0; i < cats.length; i++) {
            var cat = new Option(cats[i], i);
            actList.options.add(cat);
        }
    }
} 