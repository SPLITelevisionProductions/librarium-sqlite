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
body, select, input {
  font-family: "Segoe UI", system-ui, -apple-system, BlinkMacSystemFont, Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol" !important;
}

html.legacyfnt body,
html.legacyfnt select,
html.legacyfnt input {
  font-family: "Courier" !important;
}

html.system {
  background:
    linear-gradient(to bottom, rgba(<?=$ngBase?>,0.85) 0%, rgba(<?=$ngBase?>,0.85) 100%),
    url(../images/paper.png);
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

header, .tabbar, #ProfileBar {
  background:
    linear-gradient(to bottom, rgba(155,13,47,0.95) 0%, rgba(155,13,47,0.95) 100%),
    url(../images/paper.png);
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

.hdrleft {
  float: left;
}

.hdrright {
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

#ShelfScrollCont {
  position: fixed;
  z-index: 0;
  top: 56px;
  left: 0;
  height: calc(100% - 56px);
  width: 100%;
  overflow-x: hidden;
  overflow-y: scroll;
  -webkit-overflow-scrolling: touch;
  background: blue;
}

#Shelf {
  width: 100%;
  min-height: 100%;
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
  -webkit-overflow-scrolling: touch;
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
  top: 56px;
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
}

@media only screen and (min-width: 540px) and (orientation: landscape) {
  html.ios-app {
    margin-top: 20px;
  }
}
