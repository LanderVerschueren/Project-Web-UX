/**$(document).ready(function() {
	console.log("ready");
		$('#register').click(function() {
            $('#myModal').modal();
            console.log("register click");
        });
 
        $(document).on('submit', '#formRegister', function(e) {  
            e.preventDefault();
             
            $('input+small').text('');
            $('input').parent().removeClass('has-error');
             
            $.ajax({
                method: $(this).attr('method'),
                url: $(this).attr('action'),
                data: $(this).serialize(),
                dataType: "json"
            })
            .done(function(data) {
                $('.alert-success').removeClass('hidden');
                $('#myModal').modal('hide');
            })
            .fail(function(data) {
                $.each(data.responseJSON, function (key, value) {
                    var input = '#formRegister input[name=' + key + ']';
                    $(input + '+small').text(value);
                    $(input).parent().addClass('has-error');
                });
            });
        });
})*/
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

