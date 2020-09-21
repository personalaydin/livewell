import '@babel/polyfill';

import 'jquery';
import 'bootstrap';

import './include/auto-scroll-element-with-hash';
import './include/scroll-to';
import './include/container-offset';
import './include/set-container-offset';
import './include/calculate-viewport-height';
import './include/form-validation-and-handle';
import './include/full-height';
import './include/magnific-popup';
import './include/slick';
import './include/shrink-header';
import './include/megamenu';
import './include/lightgallery';
import './include/hamburger-menu';
import './include/tab-menu';
import './include/main-scripts';
import './include/cre-animate';


$(function () {
  $('.scroll').on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({
      scrollTop: $($(this).attr('href')).offset().top - 140
    }, 500, 'linear');
  });
});

AOS.init({
  duration: 1200,
})

$("#information_text").change(function () {
  if (this.checked) {
    $('#submit_contact_form_button').prop('disabled', false);
    $('#submit_contact_form_button').removeClass('button-main--disabled');
    $('#submit_contact_form_button').addClass('button-main--fill');
  }
  if (!this.checked) {
    $('#submit_contact_form_button').prop('disabled', true);
    $('#submit_contact_form_button').removeClass('button-main--fill');
    $('#submit_contact_form_button').addClass('button-main--disabled');
  }
});