function changeTheme(themename) {
    $('html').removeClass('niagara mahogany');
    $('html').addClass(themename);
}

function changeStyle(stylename) {
    $('html').removeClass('basic bkcase legacy');
    $('html').addClass(stylename);
}

function changeFont() {
    $('html').toggleClass('legacyfnt');
}

function diagClose(diagid) {
    $(diagid).addClass('hidden');
}

function diagOpen(diagid) {
    $(diagid).removeClass('hidden');
}

function saveCancel(diagid) {
    diagClose(diagid);
}

function save(diagid) {
    diagClose(diagid);
}

function changeTab(currtab, changetab) {
    var ct = currtab + '-Tab';
    var gt = changetab + '-Tab';
    $(ct).removeClass('current');
    $(gt).addClass('current');
    $(currtab).removeClass('current');
    $(changetab).addClass('current');
}