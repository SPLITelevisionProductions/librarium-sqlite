var DEBUG = false;

$(document).ready(function() {
	// Get version
	$.get('/?version', function(response) {
		var libver = response;

		logstr = "" +
			"                        -+oooooooooo+-                       \n" +
			"                     :so:`          `:os:                    \n" +
			"                   :y/                 `/y:                  \n" +
			"                  so   /N-               `os                 \n" +
			"                 y/    /M:                 +y                \n" +
			"                +s     /M/                  s+               \n" +
			"                d-     :M+                  -d               \n" +
			"                m`     -Mo                  `m               \n" +
			"                d-     .Ms`                 -d               \n" +
			"                +s     .Ms.                 s+               \n" +
			"                 y+    `My---:::--.`       +y                \n" +
			"                  so`   ymddddddmmmmddhh/`os                 \n" +
			"                   :y/`                `/y:                  \n" +
			"                     :so:`          `:os:                    \n" +
			"                        -+oooooooooo+-                       \n\n" +
			"                  L  i  b  r  a  r  i  u  m  .               \n\n" +
			"======================= LIBRARIUM. V3 =======================\n\n" +
			"      (C) 2018 Logan Burrell / Green Warrior Productions     \n" +
			"(C) 2017-2018 SPLITelevision Productions c/o Troy .J. Malcolm\n\n" +
			"                      Version " + libver + "                       \n\n" +
			"=============================================================\n\n" +
			"For extra logging, type 'debug(true)', or 'debug(false)' to disable.";

		console.log(logstr);
	});
});

function version() {
	$.get('/?version', function(response) {
		console.log(response);
	});
}

function debug(enabled) {
	if(enabled) {
		console.log("Debug info enabled. Use 'debug(false)' to disable.");
		DEBUG = true;
	} else if (!enabled) {
		console.log("Debug info disabled.");
		DEBUG = false;
	}
}

function changeTheme(themename) {
    $('html').removeClass('niagara mahogany');
	$('html').addClass(themename);
	if(DEBUG) {console.log("Changed shelf theme to " + themename)}
}

function changeStyle(stylename) {
    $('html').removeClass('basic bkcase legacy');
	$('html').addClass(stylename);
	if(DEBUG) {console.log("Changed shelf style to " + stylename)}
}

function changeFont() {
	$('html').toggleClass('legacyfnt');
	if(DEBUG) {console.log("Toggled Courier")}
}

function diagClose(diagid) {
	$(diagid).addClass('hidden');
	if(DEBUG) {console.log("Closed dialogue " + diagid)}
}

function diagOpen(diagid) {
	$(diagid).removeClass('hidden');
	if(DEBUG) {console.log("Opened dialogue " + diagid)}
}

function saveCancel(diagid) {
	diagClose(diagid);
	if(DEBUG) {console.log("Save cancelled on " + diagid)}
}

function save(diagid) {
	diagClose(diagid);
	if(DEBUG) {console.log("Changed saved on " + diagid)}
}

function changeTab(currtab, changetab) {
    var ct = currtab + '-Tab';
    var gt = changetab + '-Tab';
    $(ct).removeClass('current');
    $(gt).addClass('current');
    $(currtab).removeClass('current');
	$(changetab).addClass('current');
	if(DEBUG) {console.log("Tab changed to " + changetab)}
}

function openSearch() {
	$('#SearchBar').fadeIn();
	$('#SearchField').focus();
	if(DEBUG) {console.log("Opened search bar")}
}

function closeSearch() {
	$('#SearchField').val("");
	$('#SearchField').keyup();
	if(DEBUG) {console.log("Cleared search")}
	$('#SearchBar').fadeOut();
	if(DEBUG) {console.log("Closed search bar")}
}

function openFilter() {
	closeSearch();
}