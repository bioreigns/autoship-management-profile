require('./bootstrap');
// require('./jquery.mask.min');
// require('./jquery.min');
var Inputmask = require('inputmask');


$(document).ready(function() {
    $("#cardNumber").inputmask("9999-9999-9999");
});