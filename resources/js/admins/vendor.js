import jquery from 'jquery';
import iziToast from "izitoast/dist/js/iziToast.min";

import accounting from "accounting-js";
window.$ = window.jQuery = jquery;
window.iziToast = iziToast;
window.accounting = accounting;
require('../bootstrap');
require('jquery-validation');
require('jquery-confirm');
require('datatables.net-bs4');
require('jquery.nicescroll');
require('select2');
require('bootstrap-daterangepicker');
require('./stisla');
require('./script');
