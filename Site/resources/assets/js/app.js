
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});

$(document).ready() {
$('.form-control').focusout(function() {
        $('.form-group').removeClass('focus');
    });
    $('.form-control').focus(function() {
        $(this).closest('.form-group').addClass('focus');
    });

    /// Input Kepress Filled  Focus
    $('.form-control').keyup(function() {
        if($(this).val().length > 0){
            $(this).closest('.form-group').addClass('filled');
        }

        else{
            $(this).closest('.form-group').removeClass('filled');
        }
    });

    /// Input Check Filled Focus
    var $formControl = $('.form-control');
    var values = {};
    var validate =    $formControl.each(function() {
        if($(this).val().length > 0){
            $(this).closest('.form-group').addClass('filled');
        }
        else{
            $(this).closest('.form-group').removeClass('filled');
        }
    });

// Button switching

$('.close').click(function(){
  $(this).closest('.register-form').toggleClass('open');
});

}