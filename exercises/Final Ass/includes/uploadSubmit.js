
var clickSubmit = document.getElementById('stepone-done');

console.log(clickSubmit);

clickSubmit.onclick = function () { showStepTwo();};

showStepTwo = function(){

var progToHide = document.getElementById('prog1');
progToHide.classList.add('hide');
clickSubmit.classList.add('hide');
var stepTwoBlock = document.getElementById("stepTwo");
console.log(stepTwoBlock);
stepTwoBlock.classList.remove('hide');
};