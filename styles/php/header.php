<!DOCTYPE html>
<?
  // Check if we are in Web App testing mode
  if ($webAppTesting) {
    $pageClass = $pageClass . " ios-app";
  }
?>
<html class="<?=$pageClass?>">
  <head>
    <title><?=$pageTitle?> - Librarium.</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="/styles/css/librarium.php" />
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="930983880341-12tpddkbnqosvopqbfubrbtsgfsuu2tp.apps.googleusercontent.com">
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
    <script src="/styles/js/ui.js" type="text/javascript"></script>
    <script type="text/javascript">
      if(window.navigator.standalone == true) {
        $('html').addClass('ios-app');
      }
    </script>
  </head>
  <body>
  <?//include server messages
	require('/var/www/html/servermsg.php');?>