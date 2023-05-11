/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

import './bootstrap';
import '../css/app.css'
import swal from 'sweetalert';
/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import './components/Example';

/* ordering from */
let cost = document.querySelector("#cost");
let costValue = document.querySelector("#costValue");

costValue.oninput = (e) => {
    if(costValue.value === '' || costValue.value === false) {
        cost.value = '';
    } else {
        let chickenCost = 95;
        cost.value = 'K'+ chickenCost * parseInt(costValue.value);
    }
}

window.onload = () => {
    let orderlyNum = document.querySelector("#orderly-number");
    let numbers = 1234567890;
    let orderRam = Math.floor(Math.random() * numbers );
    orderlyNum.value = orderRam;
}





