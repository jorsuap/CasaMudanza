"use strict";
// =================================
// Example
// =================================
const wElement = document.querySelector('.written-text');
const myTexts = [' Tu', 'Tipo de '];
let myWritterMachine = new WritterMachine(wElement, {
    texts: myTexts,
    speed: 400,
    prefix: '', //AQUI VA LAS PALABRAS PREVIAS
    sufix: ' ', //AQUI VA LAS ULTIMAS PALABRAS
    lowerLimit: 0,
    upperLimit: 0,
    enableStyles: true,
    customStyles: '' // You can set custom styles directly using a string;
});
