let loginjs = function() {
    let csrf_token = {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
    let _componentLadda = function() {
        if (typeof Ladda == 'undefined') {
            console.warn('Warning - ladda.min.js is not loaded.');
            return;
        }
        Ladda.bind('.btn-ladda-spinner', {
            dataSpinnerSize: 16,
            timeout: 1000
        });
    };

    let _componentForm = function () {
        $('.login-form').submit(function (e){
            e.preventDefault();
            let button = $('button'),
                initialText = button.data('initial-text'),
                loadingText = button.data('loading-text');
            button.html(loadingText).addClass('disabled');
            $.ajax({
                headers: csrf_token,
                url : '',
                type: 'post',
                dataType: 'json',
                data: {
                    'email': $('#email').val(),
                    'password': $('#password').val(),
                },
                success: function (resp){
                    if (resp.success === false){
                        new PNotify({
                            title: 'Kesalahan !!',
                            text: resp.message,
                            addclass: 'alert bg-danger text-white border-danger alert-styled-right',
                            type: 'error'
                        });
                        button.html(initialText).removeClass('disabled');
                    }
                    else {
                        setTimeout(function (){
                            window.location.href = resp.results.redirect;
                        }, resp.results.timeout);
                    }
                }
            })
        })
    }

    return {
        init: function() {
            _componentLadda();
            _componentForm();
        }
    }
}();

document.addEventListener('DOMContentLoaded', function() {
    loginjs.init();
});
