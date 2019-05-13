var mainBox = document.getElementById('boxes');
var clickBox = document.getElementById('boxButton');

var size = 80;

var Array = ['A', 'a', 'N', 'n', 'I', 'i', 'E', 'e', 'L', 'l'];
var pair = '';
var letters = [];
var count = 0;

var list = [];

 clickBox.onclick = function () { generateBox();};

generate = function(){
    var random = 0;

    if (count % 2 == 0) {
        random = Math.floor(Math.random() * Array.length);
        letters.push(Array[random]);
        letters.push(Array[random]);
        random = Math.floor(Math.random() * Array.length);
        letters.push(Array[random]);
        pair = Array[random];
    }

    else {
        letters.push(pair);
        random = Math.floor(Math.random() * Array.length);
        letters.push(Array[random]);
        letters.push(Array[random]);

    }

    ++count;
    letters = shuffle(letters);
};

generateBox = function () {

    var random = 0;

    generate();

    var i = 0;
    for (i = 0; i < 3; i++) {
        var box = document.createElement('div');
        box.style.height = size + 'px';
        box.style.width = size + 'px';
        box.className = 'box';

        var inLetter = document.createElement('p');
        inLetter.style.margin = 0.25 * size + 'px';
        inLetter.style.fontSize = 0.25 * size + 'px';
        inLetter.innerHTML = letters[i];
        box.appendChild(inLetter);

        size += 20;

        box.addEventListener('click', onBoxClick);
        mainBox.appendChild(box);
    }

    letters = [];
};

onBoxClick = function () {
    if (list.length >= 2) {
        clearItems();
    }
    console.log(this.className);
    if (!this.className.includes('show')) {
        if (!this.className.includes('correct')) {
            this.className = this.className + ' show';
            list.push(this);
            if (list.length == 2) {
                checkGame();
            }
        }
    }
    else {
        clearItems();
    }
};


var shuffle = function (sArray) {
    var i = 0;
    for (i = 0; i < sArray.length - 1; ++i) {
        var j = i + Math.floor(Math.random() * (sArray.length - i));

        var temp = sArray[j];
        sArray[j] = sArray[i];
        sArray[i] = temp;
    }
    return sArray;
};


var compareValues = function () {
    var str1 = list[0].innerHTML;
    var str2 = list[1].innerHTML;

    var index = str1.indexOf('">');
    var slashIndex = str1.indexOf('</p');
    var fstr1 = str1.substring(index + 2, slashIndex);

    index = str2.indexOf('">');
    slashIndex = str2.indexOf('</p');
    var fstr2 = str2.substring(index + 2, slashIndex);

    if (fstr1 == fstr2)
        return true;
    return false;
};


var clearItems = function () {
    var i = 0;
    for (i = 0; i < list.length; ++i) {
        list[i].className = list[i].className.replace('show', '');
    }
    list = [];
};


var checkGame = function () {
    if (compareValues()) {
        var i = 0;
        for (i = 0; i < list.length; ++i) {
            list[i].className = list[i].className.replace('show', 'correct');
        }
    }
    else {
        setTimeout(function () {
            clearItems();
        }, 500);
    }
};