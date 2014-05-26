<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Missing friends</title>

    <link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.min.css">   
    <link href="{{  asset('assets/css/picture.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/jquery.Jcrop.min.css') }}" rel="stylesheet">    
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">    
</head>
<body>
	<div class="container">@yield('container')
	</div>

	<div id="popup" class="popup" style="display: none;">
		<div class="popup__body"><div class="js-img"></div></div>
		<div style="margin: 0 0 5px; text-align: center;">
			<div class="js-upload btn btn_browse btn_browse_small">Upload</div>
		</div>
	</div>
    
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script>
    window.FileAPI = {
          debug: false // debug mode
        , staticPath: '/js/jquery.fileapi/FileAPI/' // path to *.swf
    };
</script>
<script src="{{ asset('assets/js/FileAPI.min.js') }}"></script>
<script src="{{ asset('assets/js/FileAPI.exif.js') }}"></script>
<script src="{{ asset('assets/js/jquery.fileapi.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.Jcrop.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.modal.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>


</body>
</html>
