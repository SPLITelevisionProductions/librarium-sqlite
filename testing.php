<!DOCTYPE html>
<html class="niagara bkcase">
  <head>
    <title>Testing</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="/styles/css/librarium.php" />
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
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
    <header>
      <div class="menubtn hdrleft" onclick="$('#Sidebar').toggleClass('hidden')">
        <div class="profimg"></div>
      </div>
      <div class="shelfselectbtn" onclick="$('#ShelfSelect').slideToggle()"><i class="material-icons">all_inclusive</i><span>My Collection</span> <i class="material-icons">arrow_drop_down</i></div>
      <div class="addbtn material-icons hdrright">add</div>
      <div class="filterbtn material-icons hdrright">search</div>
    </header>
    <div id="ShelfSelect">
      <ul class="hhlist shelflist">
        <li class="current"><i class="material-icons">all_inclusive</i><span>My Collection</span><i class="material-icons selected">check</i></li>
        <li><i class="material-icons">mode_edit</i><span>Edit Shelves</span></li>
        <li><i class="material-icons">add</i><span>New Shelf...</span></li>
        <li class="separator"></li>
        <li><i class="material-icons">movie</i><span>DVDs</span></li>
        <li><i class="material-icons">music_note</i><span>CDs</span></li>
        <li><i class="material-icons">videogame_asset</i><span>Games</span></li>
        <li><i class="material-icons">person</i><span>J.K. Rowling</span></li>
        <li><i class="material-icons">print</i><span>Harper Collins</span></li>
      </ul>
    </div>
    <div class="dialogue tabbed hidden" id="AccountSett">
      <header>
        <div class="diagtitle">Settings</div>
        <div class="closebtn material-icons hdrright" onclick="saveCancel('#AccountSett')">close</div>
      </header>
      <div class="tabbar hlftabs">
        <ul>
          <li id="AccSett-Account-Tab" class="current" onclick="changeTab('#AccSett-Profile','#AccSett-Account')">Account</li>
          <li id="AccSett-Profile-Tab" onclick="changeTab('#AccSett-Account','#AccSett-Profile')">Profile</li>
        </ul>
      </div>
      <div class="diag-content current" id="AccSett-Account">
        <p><i>Settings will automatically save when this screen is closed</i></p>
        <p class="list-title">Name</p>
        <ul class="hhlist">
          <li><span>First Name</span></li>
          <li><span>Last Name</span></li>
        </ul>
        <p class="list-title">Username &amp; Email</p>
        <ul class="hhlist">
          <li><span>Username</span></li>
          <li><span>Contact Email</span></li>
        </ul>
        <p class="list-title">Look &amp; Feel</p>
        <ul class="hhlist iconlist">
          <li onclick="changeFont()"><i class="material-icons">text_fields</i><span>Use 'Courier' Font</span><i class="material-icons tick">check</i></li>
          <li onclick="changeFont()"><i class="material-icons">format_paint</i><span>Set Default Theme</span><i class="material-icons">chevron_right</i></li>
        </ul>
        <p class="list-title">Data</p>
        <ul class="hhlist iconlist">
          <li onclick="changeFont()"><i class="material-icons">input</i><span>Migrate Collection</span><i class="material-icons">chevron_right</i></li>
          <li onclick="changeFont()"><i class="material-icons">public</i><span>Public Shelves</span><i class="material-icons">chevron_right</i></li>
          <li onclick="changeFont()"><i class="material-icons">cloud_download</i><span>Download Data</span><i class="material-icons">chevron_right</i></li>
          <li onclick="changeFont()"><i class="material-icons">delete_sweep</i><span>Start Fresh</span><i class="material-icons">chevron_right</i></li>
        </ul>
        <p class="list-title">Security</p>
        <ul class="hhlist iconlist">
          <li onclick="changeFont()"><i class="material-icons">vpn_key</i><span>Change Password</span><i class="material-icons">chevron_right</i></li>
          <li onclick="changeFont()"><i class="material-icons">exit_to_app</i><span>Log Out All Devices</span><i class="material-icons">chevron_right</i></li>
          <li onclick="changeFont()"><i class="material-icons">delete_forever</i><span>Delete Account</span><i class="material-icons">chevron_right</i></li>
        </ul>
      </div>
      <div class="diag-content" id="AccSett-Profile">
          <p>No 'Blah's here</p>
        </div>
    </div>
    <div id="Sidebar" class="hidden">
      <div id="ProfileBar">
        <div class="profimg"></div>
        <div class="publicname">SPLITelevision</div>
        <div class="sidebarclose material-icons" onclick="$('#Sidebar').toggleClass('hidden')">close</div>
        <div class="username">@SPLITelevision</div>
        <div class="totalitems">1000 items</div>
      </div>
      <nav>
        <ul>
          <li onclick="diagOpen('#AccountSett')"><i class="material-icons">account_circle</i><span>Account &amp; Profile</span></li>
          <li><i class="material-icons">settings</i><span>Shelf Settings</span></li>
          <li class="separator"></li>
          <li><i class="material-icons">assignment_ind</i><span>Edit Owners</span></li>
          <li><i class="material-icons">assignment_return</i><span>Edit Loaners</span></li>
          <li class="separator"></li>
          <li onclick="changeTheme('niagara')"><i class="material-icons">format_paint</i><span>Use "Niagara" Theme</span></li>
          <li onclick="changeTheme('mahogany')"><i class="material-icons">format_paint</i><span>Use "Mahogany" Theme</span></li>
          <li onclick="changeStyle('basic')"><i class="material-icons">border_style</i><span>Use "Basic" Style</span></li>
          <li onclick="changeStyle('bkcase')"><i class="material-icons">border_style</i><span>Use "Book Case" Style</span></li>
          <li onclick="changeStyle('legacy')"><i class="material-icons">border_style</i><span>Use "Legacy" Style</span></li>
          <li onclick="changeFont()"><i class="material-icons">text_fields</i><span>Toggle System Font</span></li>
          <li class="separator"></li>
          <li><i class="material-icons">exit_to_app</i><span>Log Out</span></li>
        </ul>
      </nav>
    </div>
    <div id="ShelfScrollCont">
      <div id="Shelf">
        
      </div>
    </div>
  </body>
</html>
