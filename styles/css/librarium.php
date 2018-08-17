<?php
/*  --- STYLES FOR LIBRARIUM. V3 ---
	This is the stylesheet for Librarium. Version 3 incl. shelf styles.
	Most of the base shelf layout is based on V2, however, the majority of the
	general theming is from scratch.

	The new shelf styles consist of a base theme, and then a style on top
	of that. They're also defined as a class on the HTML element rather
	than as a different stylesheet.

	Themes:
	  - System (for login etc) [system] (system pages only)
	  - Niagara: a theme based around a greeny-blue colour [niagara] (default)
	  - Mahogany: a theme based around a mahogany wood texture [mahog]

	Styles:
	  - System (for login etc) [system] (system pages only)
	  - Basic: a simple, gradient based style [basic] (default)
	  - Bookcase: self-explanatory, adds shelves and sides [bkcase]
	  - Painted Bookcase: legacy style for those wanting the old feel [legacy]

	(C) 2018 Logan Burrell / Green Warrior Productions
	(C) 2017-2018 SPLITelevision Productions c/o Troy .J. Malcolm

	Version 3.180428                                                         */

// We're using PHP so that common elements can be reused and we don't need to
// compile anything

header('Content-type: text/css');

// Base Colours
$ngBase = "33,137,112";
$ngHiLi = "41,169,139";
$ngShad = "27,113,93";

$mhBase = "116,38,0";
$mhHiLi = "154,51,0";
$mhShad = "78,26,0";

$headBG = "linear-gradient(to bottom, rgba(155,13,47,0.95) 0%, rgba(155,13,47,0.95) 100%), url(../images/paper.png)";
$headErrBG = "linear-gradient(to bottom, rgba(245,158,0,0.95) 0%, rgba(245,158,0,0.95) 100%), url(../images/paper.png)";
$headSuccBG = "linear-gradient(to bottom, rgba(24,188,13,0.95) 0%, rgba(24,188,13,0.95) 100%), url(../images/paper.png)";

// Metrics
// We're going to try using Google's Material design metrics for some of the
// base elements, seems to fit well on both platforms
$headH = "56px";

// Shared Styles
$bscShlvs = "linear-gradient(to bottom, rgba(255,255,255,0.5) 0%, rgba(255,255,255,0) 100%) left top repeat";
$bscShlvsS = "170px 170px";
?>

/*  --- STYLES FOR LIBRARIUM. V3 ---
	This is the stylesheet for Librarium. Version 3 incl. shelf styles.
	Most of the base shelf layout is based on V2, however, the majority of the
	general theming is from scratch.

	(C) 2018 Logan Burrell / Green Warrior Productions
	(C) 2017-2018 SPLITelevision Productions c/o Troy .J. Malcolm

	Version 3.180412                                                         */

@import url("https://fonts.googleapis.com/icon?family=Material+Icons");

html {
  padding: 0;
  margin: 0;
  width: 100%;
  height: 100%;
  color: white;
}

body {
  padding: 0;
  margin: 0;
  height: 100%;
  width: 100%;
}

/* Use System Fonts */
body, select, input, .abcRioButtonContents {
  font-family: "Segoe UI", system-ui, -apple-system, BlinkMacSystemFont, Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol" !important;
}

html.legacyfnt body,
html.legacyfnt select,
html.legacyfnt input,
html.legacyfnt .abcRioButtonContents {
  font-family: "Courier" !important;
}

.abcRioButtonContents {
  font-weight: normal !important;
}

/* System Page Styling (i.e. login, registration etc) */
html.system {
  background:
	<?=$headBG?>;
}

/* BELOW IS COPIED FROM V2 AS A BASIS */
.vertAlignWrap {
	/*position: relative;*/
	position: fixed;
	top: 0;
	left: 0;
	display: flex;
	align-items: center;
	justify-content: center;
	height: 100%;
	width: 100%;
	color: white;
	text-align: center;
	/*text-shadow: 0px 0px 10px rgba(0,0,0,0.5);*/
}

.login .vertAlignWrap {
	position: initial;
	top: initial;
	left: initial;
	margin-left: auto;
	margin-right: auto;
	height: auto;
	width: auto;
	/*padding-top: 115px;*/
}

.vertAlignCont {
	box-sizing: border-box;
	position: absolute;
	top: 50%;
	/*width: 100%;*/
	transform: translateY(-50%);
}

.libLogo {
	background-image: url(../images/LibrariumLogo_dark.svg);
}

.system .libLogo {
	width: 150px;
	height: 150px;
	display: inline-block;
	background-position: center;
	background-size: contain;
  margin-bottom: 20px;
}

.vertAlignCont {
	width: 280px;
}

.system input {
	width: 100%;
	height: 45px;
	line-height: 47px;
	font-size: 1em;
	padding: 0;
  margin: 0;
  margin-bottom: 10px;
	border: none;
	background: white;
	border: 1px solid rgba(0,0,0,0.1);
	color: rgb(20,20,20);
	padding: 0px 20px 0px 20px;
	box-sizing: border-box;
	border-radius: 22.5px;
}

.system input[type="submit"],
.system input[type="button"] {
	/*border-radius: 22.5px;*/
}

.login.system input[name="submit"] {
  width: 45px;
  margin-left: 10px;
  display: inline-block;
  vertical-align: middle;
  padding: 0px;
  text-align: center;
  font-size: 1.3em;
  line-height: 45px;
}

.login.system input[type="password"] {
  width: calc(100% - 55px);
  display: inline-block;
  vertical-align: middle;
}

.system input[type="checkbox"] {
	height: 21px;
	width: 21px;
	padding: 0;
	-webkit-appearance: none;
	appearance: none;
	/*border: 2px solid white;*/
	border-radius: 5px;
	margin:0;
  vertical-align: bottom;
  position: relative;
  top: -1px;
  *overflow: hidden;
}

.system input[type="checkbox"]:active,
.system input[type="checkbox"]:focus {
	background: white;
}

.system input[type="checkbox"]:checked{
	background-image: url(../images/tick.svg);
	background-size: 100%;
	background-position: center;
	background-repeat: no-repeat;
}

.loginCheckbox {
	margin-top: 25px;
}

.loginCheckbox label {
	display: inline-block;
  padding-left: 25px;
  text-indent: -15px;
}

.system input::-webkit-input-placeholder {
	color: rgb(150,150,150);
}

.system input:-ms-input-placeholder {
	color: rgb(150,150,150);
}

.system input::-moz-placeholder {
	color: rgb(150,150,150);
}

.system input:-moz-placeholder {
	color: rgb(150,150,150);
}

.system input:focus,
.system input[type="submit"]:active,
.system input[type="button"]:active,
.system .g-signin2:focus .abcRioButtonLightBlue {
	outline: none;
  background: white;
  box-shadow: 0 0 20px rgba(0,0,0,0.3) !important;
  border: 1px solid rgba(0,0,0,0.7) !important;
}

.system .g-signin2:focus {
  outline: none;
}

.system input:-webkit-autofill:hover,
.system input:-webkit-autofill:focus,
.system input:-webkit-autofill {
	background-color: transparent !important;
	background-image: none;
	color: rgb(250, 255, 189) !important;
}

.system .halfInput input {
	width: 50%;
	float: left;
}

.system .abcRioButton {
  box-shadow: none !important;
  border-radius: 22.5px !important;
}

.system .abcRioButtonLightBlue {
  color: rgb(20,20,20) !important;
  border: 1px solid rgba(0,0,0,0.1) !important;
}

.system #LoginFooter {
  height: 45px;
  width: 100%;
  position: fixed;
  bottom: 0;
  left: 0;
}

.system #LoginFooter div {
  width: auto;
  height: 45px;
  line-height: 45px;
  display: inline-block;
  cursor: pointer;
  padding: 0px 10px 0px 10px;
  box-sizing: border-box;
}

#FormButtons {
	margin-top: 25px;
}

/* END V2 */


/* Shelf Styling */

#ShelfScrollCont {
  position: fixed;
  z-index: 0;
  top: 56px;
  left: 0;
  height: calc(100% - 56px);
  width: 100%;
  overflow-x: hidden;
  overflow-y: scroll;
  /*-webkit-overflow-scrolling: touch;*/
  background: blue;
}

#Shelf {
  width: 100%;
  min-height: 100%;
  box-sizing: border-box;
  padding: 20px;
  padding-top: 50px;
  display: inline-grid;
  grid-template-columns: repeat(auto-fill, 140px);
  grid-auto-rows: 120px;
  grid-column-gap: 0px;
  grid-row-gap: 50px;
  justify-content: space-evenly;
}

html.legacy #Shelf {
	padding: 40px;
	padding-top: 50px;
	grid-column-gap: 20px;
	grid-row-gap: 50px;
	grid-template-columns: repeat(auto-fill, 140px);
	grid-auto-rows: 120px;
}

#Shelf > div {
	text-align: center;
	overflow: hidden;
	padding: 0px 10px 0px 10px;
}

#Shelf > div > div {
	width: auto;
	min-width: 8px;
	height: 100%;
	box-sizing: border-box;
	display: inline-block;
	position: relative;
	border-radius: 5px 5px 0px 0px;
	box-shadow: 0px 20px 10px rgba(0,0,0,0.7);
	cursor: pointer;
	border: 2px solid black;
}

#Shelf > div.nocover > div {
	width: 70%;
	height: 100%;
	background: rgb(35,20,20);
}

html.legacy #Shelf > div.nocover > div {
	background: linear-gradient(to bottom, #3f3f3f 0%,#000000 100%);
	background-size: cover !important;
	background-repeat: no-repeat !important;
}

html.legacy #Shelf > div > div .itemTitle {
	font-weight: normal;
}

html.legacy #Shelf > div > div .itemAuthor {
	display: none !important;
}

#Shelf > div.landscape,
#Shelf > div.landscapeExt {
	grid-column: span 2;
}

#Shelf > div.landscapeExt {
	align-self: end;
}

#Shelf > div.landscapeExt > div {
	height: auto;
}

#Shelf > div > div img {
	border-radius: 3px 3px 0px 0px;
	max-height: 120px;
	max-width: 322px;
}

#Shelf > div > div div {
	display: none;
	position: absolute;
	left: 5px;
	margin-right: 5px;
	width: calc(100% - 10px);
	font-size: 10px;
	user-select: none;
}

#Shelf > div.nocover > div div {
	display: block;
}

#Shelf > div > div .itemTitle {
	top: 5px;
	font-weight: bold;
	font-size: 11px;
}

#Shelf > div > div .itemAuthor {
	bottom: 5px;
}

html.legacy #Shelf > div > div img {
	max-height: 100%;
	max-width: 100%;
}

html.niagara.basic #Shelf {
  background: <?=$bscShlvs?>;
  background-size: <?=$bscShlvsS?>;
}

html.niagara.basic #ShelfScrollCont {
  background: rgb(<?=$ngBase?>);
}

html.mahogany.basic #Shelf {
  background: <?=$bscShlvs?>;
  background-size: <?=$bscShlvsS?>;
}

html.mahogany.basic #ShelfScrollCont {
  background: rgb(<?=$mhBase?>);
}

html.niagara.legacy #Shelf {
  background:
	linear-gradient(to right, rgba(<?=$ngHiLi?>,1), rgba(<?=$ngHiLi?>,1) 20px, rgba(<?=$ngHiLi?>,0) 20px, rgba(<?=$ngHiLi?>,0) 170px) left top repeat-y,
	linear-gradient(to bottom, rgba(<?=$ngHiLi?>,1), rgba(<?=$ngHiLi?>,1) 20px, rgba(<?=$ngHiLi?>,0) 20px, rgba(<?=$ngHiLi?>,0) 170px) left top repeat,
	linear-gradient(to left, rgba(<?=$ngHiLi?>,1), rgba(<?=$ngHiLi?>,1) 20px, rgba(<?=$ngHiLi?>,0) 20px, rgba(<?=$ngHiLi?>,0) 170px) right top repeat-y,
	linear-gradient(to right, rgba(<?=$ngShad?>,1), rgba(<?=$ngShad?>,1) 20px, rgba(<?=$ngShad?>,1) 20px, rgba(<?=$ngBase?>,0) 40px, rgba(<?=$ngBase?>,0) 170px) left top repeat-y,
	linear-gradient(to left, rgba(<?=$ngShad?>,1), rgba(<?=$ngShad?>,1) 20px, rgba(<?=$ngShad?>,1) 20px, rgba(<?=$ngBase?>,0) 40px, rgba(<?=$ngBase?>,0) 170px) right top repeat-y,
	rgb(<?=$ngBase?>);
  background-size: <?=$bscShlvsS?>;
}

html.niagara.legacy #ShelfScrollCont {
  background: rgb(<?=$ngBase?>);
}

html.mahogany.legacy #Shelf {
  background:
	linear-gradient(to right, rgba(<?=$mhHiLi?>,1), rgba(<?=$mhHiLi?>,1) 20px, rgba(<?=$mhHiLi?>,0) 20px, rgba(<?=$mhHiLi?>,0) 170px) left top repeat-y,
	linear-gradient(to bottom, rgba(<?=$mhHiLi?>,1), rgba(<?=$mhHiLi?>,1) 20px, rgba(<?=$mhHiLi?>,0) 20px, rgba(<?=$mhHiLi?>,0) 170px) left top repeat,
	linear-gradient(to left, rgba(<?=$mhHiLi?>,1), rgba(<?=$mhHiLi?>,1) 20px, rgba(<?=$mhHiLi?>,0) 20px, rgba(<?=$mhHiLi?>,0) 170px) right top repeat-y,
	linear-gradient(to right, rgba(<?=$mhShad?>,1), rgba(<?=$mhShad?>,1) 20px, rgba(<?=$mhShad?>,1) 20px, rgba(<?=$mhBase?>,0) 40px, rgba(<?=$mhBase?>,0) 170px) left top repeat-y,
	linear-gradient(to left, rgba(<?=$mhShad?>,1), rgba(<?=$mhShad?>,1) 20px, rgba(<?=$mhShad?>,1) 20px, rgba(<?=$mhBase?>,0) 40px, rgba(<?=$mhBase?>,0) 170px) right top repeat-y,
	rgb(<?=$mhBase?>);
  background-size: <?=$bscShlvsS?>;
}

html.mahogany.legacy #ShelfScrollCont {
  background: rgb(<?=$mhBase?>);
}

html.mahogany.bkcase #Shelf {
  background:
	linear-gradient(to right, rgba(255,255,255,0), rgba(255,255,255,0.2) 10px, rgba(255,255,255,0) 10px, rgba(255,255,255,0) 170px) left top repeat-y,
	linear-gradient(to left, rgba(255,255,255,0), rgba(255,255,255,0.2) 10px, rgba(255,255,255,0) 10px, rgba(255,255,255,0) 170px) right top repeat-y,
	url(../images/mahogany-lside.png) left top repeat-y,
	url(../images/mahogany-rside.png) right top repeat-y,
	linear-gradient(to bottom, rgba(255,255,255,0.2), rgba(255,255,255,0) 10px, rgba(255,255,255,0) 10px, rgba(255,255,255,0) 170px) left top repeat,
	url(../images/mahogany-shelf.png) left top repeat,
	linear-gradient(to bottom, rgba(0,0,0,0.4), rgba(0,0,0,0.4) 10px, rgba(0,0,0,0.4) 10px, rgba(0,0,0,0) 65px, rgba(0,0,0,0) 170px) left top repeat,
	linear-gradient(to right, rgba(0,0,0,0.4), rgba(0,0,0,0.4) 10px, rgba(0,0,0,0.4) 10px, rgba(0,0,0,0) 30px, rgba(0,0,0,0) 170px) left top repeat-y,
	linear-gradient(to left, rgba(0,0,0,0.4), rgba(0,0,0,0.4) 10px, rgba(0,0,0,0.4) 10px, rgba(0,0,0,0) 30px, rgba(0,0,0,0) 170px) right top repeat-y;
  background-size: <?=$bscShlvsS?>;
}

html.mahogany.bkcase #Shelf > div.nocover > div {
	background: rgb(20, 10, 10)
}

html.mahogany.bkcase #ShelfScrollCont {
  background: url(../images/mahogany.jpg);
  background-size: <?=$bscShlvsS?>;
}

html.niagara.bkcase #Shelf {
  background:
	linear-gradient(to right, rgba(255,255,255,0), rgba(255,255,255,0.2) 10px, rgba(255,255,255,0) 10px, rgba(255,255,255,0) 170px) left top repeat-y,
	linear-gradient(to left, rgba(255,255,255,0), rgba(255,255,255,0.2) 10px, rgba(255,255,255,0) 10px, rgba(255,255,255,0) 170px) right top repeat-y,
	linear-gradient(to right, rgba(<?=$ngHiLi?>,0.7), rgba(<?=$ngHiLi?>,0.7) 10px, rgba(255,255,255,0) 10px, rgba(255,255,255,0) 170px) left top repeat-y,
	linear-gradient(to left, rgba(<?=$ngHiLi?>,0.7), rgba(<?=$ngHiLi?>,0.7) 10px, rgba(255,255,255,0) 10px, rgba(255,255,255,0) 170px) right top repeat-y,
	url(../images/mahogany-lside.png) left top repeat-y,
	url(../images/mahogany-rside.png) right top repeat-y,
	linear-gradient(to bottom, rgba(255,255,255,0.2), rgba(255,255,255,0) 10px, rgba(255,255,255,0) 10px, rgba(255,255,255,0) 170px) left top repeat,
	linear-gradient(to bottom, rgba(<?=$ngHiLi?>,0.7), rgba(<?=$ngHiLi?>,0.7) 10px, rgba(255,255,255,0) 10px, rgba(255,255,255,0) 170px) left top repeat,
	url(../images/mahogany-shelf.png) left top repeat,
	linear-gradient(to bottom, rgba(0,0,0,0.4), rgba(0,0,0,0.4) 10px, rgba(0,0,0,0.4) 10px, rgba(0,0,0,0) 65px, rgba(0,0,0,0) 170px) left top repeat,
	linear-gradient(to right, rgba(0,0,0,0.4), rgba(0,0,0,0.4) 10px, rgba(0,0,0,0.4) 10px, rgba(0,0,0,0) 30px, rgba(0,0,0,0) 170px) left top repeat-y,
	linear-gradient(to left, rgba(0,0,0,0.4), rgba(0,0,0,0.4) 10px, rgba(0,0,0,0.4) 10px, rgba(0,0,0,0) 30px, rgba(0,0,0,0) 170px) right top repeat-y;
  background-size: <?=$bscShlvsS?>;
}

html.niagara.bkcase #ShelfScrollCont {
  background:
	linear-gradient(to bottom, rgba(<?=$ngBase?>,0.7) 0%, rgba(<?=$ngBase?>,0.7) 100%),
	url(../images/mahogany.jpg);
  background-size: <?=$bscShlvsS?>;
}

header {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 2;
  width: 100%;
  height: <?=$headH?>;
  text-align: center;
  box-sizing: border-box;
}

header input {
	width: calc(100% - (<?=$headH?> * 2));
	height: 100%;
	appearance: none;
	-webkit-appearance: none;
	box-sizing: border-box;
	border: none;
	background: transparent;
	color: white;
	font-size: 1em;
	font-family: inherit;
}

header input:focus {
	outline: none;
}

header input::-webkit-input-placeholder {
	color: rgba(255,255,255,0.5);
}

header, .tabbar, #ProfileBar, #LoginFooter {
  background:
	<?=$headBG?>;
}

header#SearchBar {
	display: none;
}

.system.login header.error {
  background:
	<?=$headErrBG?>;
}

.system.login header.success {
  background:
	<?=$headSuccBG?>;
}

header div {
  width: <?=$headH?>;
  height: <?=$headH?>;
  line-height: <?=$headH?>;
  display: inline-block;
  cursor: pointer;
}

header div.shelfselectbtn {
  width: auto;
  font-weight: bold;
  font-size: 1.1em;
  padding: 0px 5px 0px 10px;
  box-sizing: border-box;
  max-width: calc(100% - (<?=$headH?> * 3));
  margin-left: <?=$headH?>;
}

header div.diagtitle {
  width: calc(100% - (<?=$headH?> * 2));
  position: absolute;
  top: 0;
  left: <?=$headH?>;
  user-select: none;
  font-weight: bold;
  font-size: 1.2em;
  cursor: default;
}

.ios-app header div.diagtitle {
  top: 20px;
}

.system.login header div.diagtitle {
  font-weight: normal;
  font-size: 1.1em;
}

header div.shelfselectbtn span {
  display: inline-block;
  vertical-align: top;
  padding-left: 10px;
  height: <?=$headH?>;
}

header div.shelfselectbtn .material-icons {
  line-height: inherit;
}

header div.material-icons {
  line-height: <?=$headH?> !important;
  text-align: center;
}

.hdrleft,
.ftrleft {
  float: left;
}

.hdrright,
.ftrright {
  float: right;
}

.profimg {
  background: url(../images/profimgtemp.svg);
  background-size: cover;
  background-repeat: none;
}

.menubtn .profimg {
  width: 32px;
  height: 32px;
  border-radius: 16px;
  line-height: <?=$headH?>;
  margin-top: calc((<?=$headH?>/2) - 16px);
}

#ShelfSelect {
  display: none;
  position: fixed;
  top: <?=$headH?>;
  z-index: 1;
  width: 100%;
  left: 0;
  height: auto;
  max-height: calc(100% - <?=$headH?>);
  overflow-y: auto;
  color: rgba(0, 0, 0, 0.54);
  background:
	linear-gradient(to bottom, rgba(255,255,255,0.75) 0%, rgba(255,255,255,0.75) 100%),
	url(../images/paper.png);
  box-shadow: 0 0 50px rgba(0,0,0,0.7);
}

ul.hhlist {
  list-style: none;
  text-indent: none;
  padding: 0;
  margin: 0;
}

ul.hhlist li {
  height: <?=$headH?>;
  line-height: <?=$headH?>;
  width: 100%;
}

ul.shelflist li .material-icons {
  height: <?=$headH?>;
  width: <?=$headH?>;
  line-height: <?=$headH?> !important;
  text-align: center;
}

ul.shelflist li span {
  display: inline-block;
  width: calc(100% - (<?=$headH?> * 2));
  vertical-align: top;
}

ul.shelflist li.current {
  font-weight: bold;
  color: rgba(0, 0, 0, 0.26);
  user-select: none;
}

.hidden {
  display: none;
}

#Sidebar {
  position: fixed;
  z-index: 3;
  width: 320px;
  height: 100%;
  top: 0;
  left: 0;
  background:
	linear-gradient(to bottom, rgba(255,255,255,0.85) 0%, rgba(255,255,255,0.85) 100%),
	url(../images/paper.png);
  box-shadow: 0 0 50px rgb(0,0,0,0.7);
  color: rgba(0, 0, 0, 0.54);
  transition: left .5s;
}

#Sidebar.hidden {
  display: initial;
  left: -360px;
}

#ProfileBar {
  width: 100%;
  height: calc(<?=$headH?> * 1.5);
  color: white;
}

#ProfileBar .profimg {
  position: absolute;
  top: calc(((<?=$headH?> * 1.5)/2) - ((<?=$headH?> * 1.1)/2));
  left: calc(((<?=$headH?> * 1.5)/2) - ((<?=$headH?> * 1.1)/2));
  height: calc(<?=$headH?> * 1.1);
  width: calc(<?=$headH?> * 1.1);
  border-radius: 100%;
}

#ProfileBar .publicname {
  position: absolute;
  top: 0;
  left: calc(<?=$headH?> * 1.5);
  width: calc(100% - (<?=$headH?> * 2.5));
  height: <?=$headH?>;
  line-height: calc(<?=$headH?> * 1.25);
  font-weight: bold;
  font-size: 1.1em;
}

#ProfileBar .username,
#ProfileBar .totalitems {
  position: absolute;
  top: <?=$headH?>;
  left: calc(<?=$headH?> * 1.5);
  width: calc(100% - (<?=$headH?> * 1.5));
  height: calc(<?=$headH?> * 0.5);
  line-height: calc(<?=$headH?> * 0.09);
  font-size: 0.9em;
}

#ProfileBar .totalitems {
  text-align: right;
  box-sizing: border-box;
  padding-right: calc(((<?=$headH?> * 1.5)/2) - ((<?=$headH?> * 1.1)/2));
}

#ProfileBar .sidebarclose {
  position: absolute;
  top: 0;
  left: calc(100% - (<?=$headH?> * 0.9));
  width: calc(<?=$headH?> * 0.9);
  height: calc(<?=$headH?> * 0.9);
  line-height: calc(<?=$headH?> * 0.9) !important;
  text-align: center;
}

#Sidebar nav {
  padding: 20px 0px;
  height: calc(100% - (<?=$headH?> * 1.5));
  overflow-x: hidden;
  overflow-y: auto;
  box-sizing: border-box;
  /*-webkit-overflow-scrolling: touch;*/
}

#Sidebar nav ul {
  padding: 0;
  margin: 0;
  list-style: none;
  width: 100%;
  text-indent: 0px;
}

#Sidebar nav ul li {
  height: 48px;
  line-height: 48px;
  width: 100%;
}

#Sidebar nav ul li.separator,
ul.shelflist li.separator {
  height: 1px;
  border-bottom: 1px solid rgba(0, 0, 0, 0.2);
  padding-bottom: 5px;
  margin-bottom: 5px;
}

#Sidebar nav ul li .material-icons {
  height: 48px;
  width: 48px;
  line-height: 48px !important;
  text-align: center;
}

#Sidebar nav ul li span {
  display: inline-block;
  width: calc(100% - 48px);
  vertical-align: top;
}

.dialogue {
  position: fixed;
  top: 0;
  z-index: 4;
  height: 100%;
  width: 100%;
  overflow-x: hidden;
  overflow-y: auto;
  background:
	linear-gradient(to bottom, rgba(255,255,255,0.85) 0%, rgba(255,255,255,0.85) 100%),
	url(../images/paper.png);
  box-sizing: border-box;
  transform: scale(1);
  transition: transform .4s;
}

.dialogue.hidden {
  display: initial;
  transform: scale(0);
}

.tabbar {
  position: fixed;
  top: <?=$headH?>;
  height: 48px;
  width: 100%;
  font-weight: 500;
  font-size: 0.9em;
  text-transform: uppercase;
  color: white;
}

.tabbar ul {
  padding: 0;
  margin: 0;
  list-style: none;
  width: 100%;
  height: 48px;
  white-space: nowrap;
}

.tabbar ul li {
  display: inline-block;
  height: 48px;
  line-height: 48px;
  box-sizing: border-box;
  text-align: center;
  cursor: pointer;
}

.tabbar.hlftabs ul li {
  width: 50%;
}

.tabbar ul li.current {
  border-bottom: 2px solid yellowgreen;
}

.diag-content {
  display: none;
  width: 100%;
  height: calc(100% - <?=$headH?>);
  overflow-x: hidden;
  overflow-y: auto;
  color: rgba(0, 0, 0, 0.74);
  padding: 10px;
  box-sizing: border-box;
  margin-top: <?=$headH?>;
  -webkit-overflow-scrolling: touch;
}

#ItemDets-NotesField {
	appearance: none;
	-webkit-appearance: none;
	border: none;
	resize: none;
	width: 100%;
	height: 100%;
	background: transparent;
	box-sizing: border-box;
	white-space: pre-wrap;
	word-wrap: break-word;
	padding: 10px;
	font-size: 1em;
	font-family: inherit;
}

#ItemDets-Details {
	text-align: center;
}

#ItemDets-Details h1 {
	font-size: 1.7em;
}

#ItemDets-Details h2 {
	font-size: 1.2em;
	opacity: 0.9;
}

#ItemDets-Details h2 span {
	font-style: italic;
	display: inline-block;
}

#ItemDets-Details h3 {
	font-size: 0.7em;
	opacity: 0.9;
	text-transform: uppercase;
	margin-bottom: 5px;
}

#ItemDets-Details p,
#ItemDets-Details div.ownButton {
	font-size: 1.1em;
	padding-top: 0;
	margin-top: 0;
}

#ItemDets-Details div.ownButton.inactive {
	margin-bottom: 1em;
	width: 100%;
	max-width: 320px;
}

.ownButton.inactive .ownColour {
	display: inline-block;
	width: 15px;
	height: 15px;
	background: black;
	margin-right: 10px;
	box-sizing: border-box;
	vertical-align: middle;
	border-radius: 100%;
	border: 1px solid rgba(0,0,0,0.5);
}

.ownButton.inactive .ownName {
	display: inline-block;
	vertical-align: middle;
}

.itemDetsRating {
	display: inline-block;
	width: 100%;
	margin-bottom: 1em;
}

.itemDetsRating div {
	display: inline-block;
	height: 44px;
	width: 22px;
	background-image: url(../images/rating-inactive.svg);
	background-size: 44px !important;
	background-repeat: no-repeat;
	float: left;
}

.itemDetsRating div:nth-child(even) {
	margin-right: 5px;
	background-position: right !important;
}
<?

for($i=0;$i<=5;$i=$i+0.5){
	for($s=0;$s<=$i;$s=$s+0.5){
		if($i == 5.0 && $s == 5.0) {
			echo '.itemDetsRating[data-val="' . number_format($i,1) .'"] div[data-val="' . number_format($s,1) . '"] {' . "\n";

		} else {
			echo '.itemDetsRating[data-val="' . number_format($i,1) .'"] div[data-val="' . number_format($s,1) . '"],' . "\n";
		}
	}
}

?>
	background-image: url(../images/rating-active.svg);
}

.ratingText {
	line-height: 44px;
	padding-left: 5px;
}

#ItemDets-Rating {

}

#ItemDets-Notes {
	padding: 0;
	overflow: hidden;
}

.itemDetsList {
	padding-top: 20px;
	text-align: left;
}

#CoverCrop .diag-content {
  padding: 0px;
  overflow: hidden;
}

#BKDCropImageWrap {
	overflow: hidden;
}

#BKDCropImageWrap img {
  max-width: 100%;
}

.dialogue.tabbed .diag-content {
  height: calc(100% - (<?=$headH?> + 48px));
  margin-top: calc(<?=$headH?> + 48px);
}

.diag-content.current {
  display: block;
}

.list-title {
  text-transform: uppercase;
  font-weight: 500;
  font-size: 0.7em;
}

.diag-content ul.iconlist li {
  margin-left: -10px;
  width: calc(100% + 20px);
}

ul.iconlist li .material-icons {
  height: <?=$headH?>;
  width: <?=$headH?>;
  line-height: <?=$headH?> !important;
  text-align: center;
}

ul.iconlist li span {
  display: inline-block;
  width: calc(100% - (<?=$headH?> * 2));
  vertical-align: top;
}

ul.iconlist li .tick {
  color: rgba(0,0,0,0.3);
}

@media only screen and (min-width: 1024px) {
  html #ShelfScrollCont {
	width: calc(100% - 320px);
	left: 320px;
  }

  .menubtn {
	display: none;
  }

  #ShelfSelect {
	width: 704px;
	left: calc(((100% + 320px)/2) - (704px/2));
  }

  header {
	width: calc(100% - 320px);
	left: 320px;
	border-left: 1px solid rgba(0,0,0,0.2);
  }

  #Sidebar {
	box-shadow: none;
	left: 0 !important;
  }

  #ProfileBar .sidebarclose {
	display: none;
  }
}

@media only screen and (min-width: 768px) and (min-height: 480px) {
  .dialogue header,
  .dialogue .tabbar {
	width: 540px;
	left: calc(50% - 270px);
  }

  .dialogue {
	width: 540px;
	height: 70%;
	top: 15%;
	left: calc(50% - 270px);
	box-shadow: 0 0 50px rgba(0,0,0,0.7);
	border-radius: 5px;
  }

	#Shelf {
		padding: 20px;
		grid-template-columns: repeat(auto-fill, 170px);
		grid-auto-rows: 150px;
		grid-gap: 0px;
    grid-row-gap: 20px;
	}

	html.legacy #Shelf {
		padding: 40px;
		grid-gap: 20px;
		grid-template-columns: repeat(auto-fill, 150px);
		grid-auto-rows: 130px;
	}

  #Shelf > div div img {
	  max-height: 150px;
	  max-width: 310px;
  }

  html.legacy #Shelf > div div img {
	  max-height: 130px;
	  max-width: 280px;
  }
}

@media only screen and (max-width: 540px) {
  header div.shelfselectbtn {
	margin: 0;
	width: calc(100% - (<?=$headH?> * 3));
  }

  header div.shelfselectbtn span {
	max-width: calc(100% - 100px);
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
  }
}

@media only screen and (max-width: 768px) and (orientation: portrait) {

  html.ios-app {
	margin-top: 20px;
  }

  html.ios-app #ShelfSelect {
	top: calc(<?=$headH?> + 20px);
	max-height: calc(100% - (<?=$headH?> + 20px));
  }

  html.ios-app #ShelfScrollCont {
	top: calc(<?=$headH?> + 20px);
	height: calc(100% - (<?=$headH?> + 20px));
  }

  html.ios-app header {
	padding-top: 20px;
	height: calc(<?=$headH?> + 20px);
  }

  html.ios-app #ProfileBar {
	padding-top: 20px;
  }

  html.ios-app #ProfileBar .publicname,
  html.ios-app #ProfileBar .sidebarclose {
	top: 20px;
  }

  html.ios-app #ProfileBar .username,
  html.ios-app #ProfileBar .totalitems {
	top: calc(<?=$headH?> + 20px);
  }

  html.ios-app #ProfileBar .profimg {
	top: calc((((<?=$headH?> * 1.5)/2) - ((<?=$headH?> * 1.1)/2)) + 20px);
  }

	html.ios-app .diag-content {
		height: calc((100% - <?=$headH?>) + 20px);
		margin-top: calc(<?=$headH?> + 20px);
	}

	html.ios-app .dialogue.tabbed .diag-content {
		height: calc(100% - (<?=$headH?> + 68px));
		margin-top: calc(<?=$headH?> + 68px);
	}

	html.ios-app .tabbar {
		top: calc(<?=$headH?> + 20px);
	}
}

@media only screen and (min-width: 540px) and (orientation: landscape) {
  html.ios-app {
	margin-top: 20px;
  }
}
