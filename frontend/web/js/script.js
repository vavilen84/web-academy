$(document).ready(function () {

    $("textarea").keydown(function (e) {
        if (e.keyCode === 9) {
            var start = this.selectionStart;
            var end = this.selectionEnd;
            var $this = $(this);
            var value = $this.val();
            $this.val(value.substring(0, start) + "\t" + value.substring(end));
            this.selectionStart = this.selectionEnd = start + 1;
            e.preventDefault();
        }
    });

    $("textarea").keyup(function () {
        highlightCode();
    });

    highlightCode();

    function highlightCode() {
        var result = $('#highlighted-code');
        result.html('<pre><code class="php">' + $('.code-textarea').val() + '</code></pre>');
        $('#highlighted-code pre code').each(function (i, block) {
            hljs.highlightBlock(block);
        });
    }

    $('.code-form-btn').click(function (e) {
        e.preventDefault();
        submitCode();
    });

    function submitCode() {
        var form = $('.contact-form');
        var message = $('.result-message');
        var resultBlock = $('.result-output');
        var submitButton = $('.code-form-btn');
        var codeArea = $('.code-area');
        var codeTextArea = $('#taskform-code');
        if(codeTextArea.val().trim() != ''){
            codeArea.addClass('loading');
            submitButton.attr('disabled', 'disabled');
        }
        $.ajax({
            url: form.attr('action'),
            type: 'POST',
            data: form.serialize(),
            success: function (response) {
                codeArea.removeClass('loading');
                submitButton.removeAttr('disabled');
                response = $.parseJSON(response);
                message.html(response.message).removeClass('error').removeClass('success').addClass(response.status);
                resultBlock.html('<pre>' + response.output + '</pre>');
                if (response.status == 'success') {
                    var successOutput = '<br>' + response.successMessage;
                    successOutput += "<br><a class='btn btn-primary' href='/task/strpos'>Следующий Урок</a>";
                    resultBlock.html('<pre>' + resultBlock.html() + '</pre>' + successOutput);
                    submitButton.remove();
                }
                $('.result-block').fadeIn()
            }
        });
    }
});