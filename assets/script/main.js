import {switchCurrency,getCurrency} from "./fonction.js";
let formSwitch = document.querySelector("#formSwitch");
let formConvert = document.querySelector("#formConvert");
let result = document.querySelector("#result");
let devises = document.querySelectorAll(".devise");
let devise1 = devises[0];
let devise2 = devises[1];


switchCurrency(formSwitch,devise1,devise2);

getCurrency(formConvert,devise1,devise2,result);