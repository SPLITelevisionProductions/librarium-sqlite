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

    Version 3.180412                                                         */

// We're using PHP so that common elements can be reused and we don't need to
// compile anything

header('Content-type: text/css');

// Base Colours
$ngBase = "33,137,112";
$ngHiLi = "41,169,139";
$ngShad = "27,113,93";

// Metrics
// We're going to try using Google's Material design metrics for some of the
// base elements, seems to fit well on both platforms
$headH = "56px";

// Shared Styles
$bscShlvs = "linear-gradient(to bottom, rgba(255,255,255,0.8) 0%, rgba(255,255,255,0.5) 100%) left $headH repeat";
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
  color: white;
  background-origin: border-box;
}

/* Use System Fonts */
body, select, input {
  font-family: "Segoe UI", system-ui, -apple-system, BlinkMacSystemFont, Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol" !important;
}

html.system {
  background:
    linear-gradient(to bottom, rgba(<?=$ngBase?>,0.85) 0%, rgba(<?=$ngBase?>,0.85) 100%),
    url(../images/paper.png);
}

html.niagara.basic {
  background:
    <?=$bscShlvs?>,
    rgb(<?=$ngBase?>);
  background-size: <?=$bscShlvsS?>;
}

html.mahogany.basic {
  background:
    <?=$bscShlvs?>,
    url(../images/mahogany.jpg);
  background-size: <?=$bscShlvsS?>, 150px auto;
}

html.niagara.legacy {
  background:
    linear-gradient(to right, rgba(<?=$ngHiLi?>,1), rgba(<?=$ngHiLi?>,1) 20px, rgba(<?=$ngHiLi?>,0) 20px, rgba(<?=$ngHiLi?>,0) 170px) left <?=$headH?> repeat-y,
    linear-gradient(to bottom, rgba(<?=$ngHiLi?>,1), rgba(<?=$ngHiLi?>,1) 20px, rgba(<?=$ngHiLi?>,0) 20px, rgba(<?=$ngHiLi?>,0) 170px) left <?=$headH?> repeat,
    linear-gradient(to left, rgba(<?=$ngHiLi?>,1), rgba(<?=$ngHiLi?>,1) 20px, rgba(<?=$ngHiLi?>,0) 20px, rgba(<?=$ngHiLi?>,0) 170px) right <?=$headH?> repeat-y,
    linear-gradient(to right, rgba(<?=$ngShad?>,1), rgba(<?=$ngShad?>,1) 20px, rgba(<?=$ngShad?>,1) 20px, rgba(<?=$ngBase?>,0) 40px, rgba(<?=$ngBase?>,0) 170px) left <?=$headH?> repeat-y,
    linear-gradient(to left, rgba(<?=$ngShad?>,1), rgba(<?=$ngShad?>,1) 20px, rgba(<?=$ngShad?>,1) 20px, rgba(<?=$ngBase?>,0) 40px, rgba(<?=$ngBase?>,0) 170px) right <?=$headH?> repeat-y,
    rgb(<?=$ngBase?>);
  background-size: <?=$bscShlvsS?>;
}

html.mahogany.bkcase {
  background:
    linear-gradient(to right, rgba(255,255,255,0), rgba(255,255,255,0.2) 10px, rgba(255,255,255,0) 10px, rgba(255,255,255,0) 170px) left <?=$headH?> repeat-y,
    linear-gradient(to left, rgba(255,255,255,0), rgba(255,255,255,0.2) 10px, rgba(255,255,255,0) 10px, rgba(255,255,255,0) 170px) right <?=$headH?> repeat-y,
    url(../images/mahogany-lside.png) left <?=$headH?> repeat-y,
    url(../images/mahogany-rside.png) right <?=$headH?> repeat-y,
    linear-gradient(to bottom, rgba(255,255,255,0.2), rgba(255,255,255,0) 10px, rgba(255,255,255,0) 10px, rgba(255,255,255,0) 170px) left <?=$headH?> repeat,
    url(../images/mahogany-shelf.png) left <?=$headH?> repeat,
    linear-gradient(to bottom, rgba(0,0,0,0.4), rgba(0,0,0,0.4) 10px, rgba(0,0,0,0.4) 10px, rgba(0,0,0,0) 65px, rgba(0,0,0,0) 170px) left <?=$headH?> repeat,
    linear-gradient(to right, rgba(0,0,0,0.4), rgba(0,0,0,0.4) 10px, rgba(0,0,0,0.4) 10px, rgba(0,0,0,0) 30px, rgba(0,0,0,0) 170px) left <?=$headH?> repeat-y,
    linear-gradient(to left, rgba(0,0,0,0.4), rgba(0,0,0,0.4) 10px, rgba(0,0,0,0.4) 10px, rgba(0,0,0,0) 30px, rgba(0,0,0,0) 170px) right <?=$headH?> repeat-y,
    url(../images/mahogany.jpg);
  background-size: <?=$bscShlvsS?>;
}

html.niagara.bkcase {
  background:
    /* Left Highlight */
    linear-gradient(to right, rgba(255,255,255,0), rgba(255,255,255,0.2) 10px, rgba(255,255,255,0) 10px, rgba(255,255,255,0) 170px) left <?=$headH?> repeat-y,
    /* Right Highlight */
    linear-gradient(to left, rgba(255,255,255,0), rgba(255,255,255,0.2) 10px, rgba(255,255,255,0) 10px, rgba(255,255,255,0) 170px) right <?=$headH?> repeat-y,
    /* Left Colour */
    linear-gradient(to right, rgba(<?=$ngHiLi?>,0.7), rgba(<?=$ngHiLi?>,0.7) 10px, rgba(255,255,255,0) 10px, rgba(255,255,255,0) 170px) left <?=$headH?> repeat-y,
    /* Right Colour */
    linear-gradient(to left, rgba(<?=$ngHiLi?>,0.7), rgba(<?=$ngHiLi?>,0.7) 10px, rgba(255,255,255,0) 10px, rgba(255,255,255,0) 170px) right <?=$headH?> repeat-y,
    url(../images/mahogany-lside.png) left <?=$headH?> repeat-y,
    url(../images/mahogany-rside.png) right <?=$headH?> repeat-y,
    /* Shelf Highlight */
    linear-gradient(to bottom, rgba(255,255,255,0.2), rgba(255,255,255,0) 10px, rgba(255,255,255,0) 10px, rgba(255,255,255,0) 170px) left <?=$headH?> repeat,
    /* Shelf Colour */
    linear-gradient(to bottom, rgba(<?=$ngHiLi?>,0.7), rgba(<?=$ngHiLi?>,0.7) 10px, rgba(255,255,255,0) 10px, rgba(255,255,255,0) 170px) left <?=$headH?> repeat,
    url(../images/mahogany-shelf.png) left <?=$headH?> repeat,
    linear-gradient(to bottom, rgba(0,0,0,0.4), rgba(0,0,0,0.4) 10px, rgba(0,0,0,0.4) 10px, rgba(0,0,0,0) 65px, rgba(0,0,0,0) 170px) left <?=$headH?> repeat,
    linear-gradient(to right, rgba(0,0,0,0.4), rgba(0,0,0,0.4) 10px, rgba(0,0,0,0.4) 10px, rgba(0,0,0,0) 30px, rgba(0,0,0,0) 170px) left <?=$headH?> repeat-y,
    linear-gradient(to left, rgba(0,0,0,0.4), rgba(0,0,0,0.4) 10px, rgba(0,0,0,0.4) 10px, rgba(0,0,0,0) 30px, rgba(0,0,0,0) 170px) right <?=$headH?> repeat-y,
    linear-gradient(to bottom, rgba(<?=$ngBase?>,0.7) 0%, rgba(<?=$ngBase?>,0.7) 100%),
    url(../images/mahogany.jpg);
  background-size: <?=$bscShlvsS?>;
}

header {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1;
  width: 100%;
  height: <?=$headH?>;
  background:
    linear-gradient(to bottom, rgba(155,13,47,0.95) 0%, rgba(155,13,47,0.95) 100%),
    url(../images/paper.png);
  text-align: center;
}

header .shelfSelect::after {
  content: " ";
}

header div {
  width: <?=$headH?>;
  height: <?=$headH?>;
  line-height: <?=$headH?>;
  display: inline-block;
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
  background: grey;
}

.menubtn .profimg {
  width: 32px;
  height: 32px;
  border-radius: 16px;
  line-height: <?=$headH?>;
  margin-top: calc((<?=$headH?>/2) - 16px);
}

.shelfselect {
  position: fixed;
  top: <?=$headH?>;
  z-index: 0;
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

@media only screen and (min-width: 1024px) {
  html {
    margin-left: 320px;
    width: calc(100% - 320px);
  }

  .menubtn {
    display: none;
  }

  .shelfselect {
    width: 704px;
    left: calc(((100% + 320px)/2) - (704px/2));
  }

  header {
    width: calc(100% - 320px); 
    left: 320px;
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