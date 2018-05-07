<!DOCTYPE html>
<html class="">
    <head>
		<title>Testing</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="/styles/css/librarium.php" />
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<link  href="/styles/js/cropperjs/cropper.css" rel="stylesheet">
		<script src="/styles/js/cropperjs/cropper.js"></script>
		<script src="/styles/js/ui.js" type="text/javascript"></script>
		<script src="/collmanage/covermanage.js" type="text/javascript"></script>
		<meta name="viewport" content="width=device-width, user-scalable=no, viewport-fit=cover">
		<link rel="manifest" href="/styles/manifest.webmanifest" />
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-title" content="Librarium.">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
		<link rel="apple-touch-icon" sizes="57x57" href="/styles/images/webapp/icon-57.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/styles/images/webapp/icon-72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/styles/images/webapp/icon-76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/styles/images/webapp/icon-114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/styles/images/webapp/icon-120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/styles/images/webapp/icon-144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/styles/images/webapp/icon-152.png">
		<link rel="apple-touch-icon" sizes="167x167" href="/styles/images/webapp/icon-167.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/styles/images/webapp/icon-180.png">
		<script type="text/javascript">
			if(window.navigator.standalone == true) {
				$('html').addClass('ios-app');
			}
		</script>
	</head>
	<body>
		<?//include server messages
		require('/var/www/html/servermsg.php');?>
		<div class="bookImage">
			<div id="Book01Det" class="bookItem">
              <input type="file" id="BKDCoverUp" name="coverimage" accept="image/*" onchange="startCropper(this)" />
            </div>
        </div>
		<img id="IMGResult" />

		<div class="dialogue hidden" id="CoverCrop">
			<header>
	  			<div class="rotleftbtn material-icons hdrleft" id="CVRCRRotateL">rotate_left</div>
				<div class="rotrightbtn material-icons hdrleft" onclick="$('#BKDCropImage').cropper.rotate(90)">rotate_right</div>
        		<div class="diagtitle">Crop</div>
				<div class="savebtn material-icons hdrright" id="CVRCRSave">save</div>
        		<div class="closebtn material-icons hdrright" onclick="saveCancel('#CoverCrop')">close</div>
      		</header>
			<div class="diag-content current">
				<div id="BKDCropImageWrap">
					<img id="BKDCropImage" />
				</div>
				<input style="display: none;" id="BKDCropX" />
				<input style="display: none;" id="BKDCropY" />
				<input style="display: none;" id="BKDCropW" />
				<input style="display: none;" id="BKDCropH" />
      		</div>
		</div>
	</body>
</html>