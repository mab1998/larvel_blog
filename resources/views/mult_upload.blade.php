<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">



<title>jQuery File Upload Example</title>
</head>
<body>
<script src="{{ asset('js/jquery-3.4.1.js') }}" defer></script>
	<link href = {{ asset("css/bootstrap.css") }} rel="stylesheet" />
<input id="fileupload" type="file" name="files[]" data-url="server/php/" multiple>

<script src="{{ asset('js/vendor/jquery.ui.widget.js') }}" defer></script>
<script src="{{ asset('js/jquery.iframe-transport.js') }}" defer></script>
<script src="{{ asset('js/jquery.fileupload.js') }}" defer></script>



<script>
$(function () {
    $('#fileupload').fileupload({
        dataType: 'json',
        done: function (e, data) {
            $.each(data.result.files, function (index, file) {
                $('<p/>').text(file.name).appendTo(document.body);
            });
        }
    });
});
</script>
</body> 
</html>