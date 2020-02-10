window.Popper = require('popper.js').default;
window.$ = window.jQuery = require('jquery');
const WOW = require('wowjs'); window.wow = new WOW.WOW({ live: false });

require('bootstrap');
window.bsCustomFileInput = require('bs-custom-file-input');
require('../mdb-pro/js/mdb');
// require('wowjs');
require('datatables.net');
require('datatables.net-select');
require('datatables.net-bs4');
require('ellipsis.js');

window.wow.init();
require('../mdb-pro/js/mdb-file-upload.min.js');


//Tutup Navbar Dropdown ketika klik
$(document).on('click', function () {
  $(".dropdown-menu").removeClass('show');
});
//cari navbar
$("#navbarCari").on("keyup", function () {
  if (this.value.length > 0) {
    $("#menuSamping > li").hide().filter(function () {
      return $(this).text().toLowerCase().indexOf($("#search").val().toLowerCase()) != -1;
    }).show();
  } else {
    $("#menuSamping > li").show();
  }
});

$('.file-upload').file_upload();
