// ************** COGS Javascript Library
/*jslint browser: true*/
/*global $, jQuery*/

var timeout   = 500;
var closetimer   = 0;
var ddmenuitem   = 0;

// close showed layer
function mclose() {
    "use strict";
    if (ddmenuitem) {
        ddmenuitem.style.visibility = 'hidden';
    }
}

// go close timer
function mclosetime() {
    "use strict";
    closetimer = window.setTimeout(mclose, timeout);
}

// cancel close timer
function mcancelclosetime() {
    "use strict";
    if (closetimer) {
        window.clearTimeout(closetimer);
        closetimer = null;
    }
}

// open hidden layer
function mopen(id) {
    "use strict";
    // cancel close timer
    mcancelclosetime();

    // close old layer
    if (ddmenuitem) {
        ddmenuitem.style.visibility = 'hidden';
    }

    // get new layer and show it
    ddmenuitem = document.getElementById(id);
    ddmenuitem.style.visibility = 'visible';
}

// close layer when click-out
document.onclick = mclose;

// functions to load included documents
function loadCOGSHeader() {
    "use strict";
    $("#COGSHeader").load("COGSContentPages/IncludeFiles/Include_COGSHeader.html");
}
function loadCOGSMenu() {
    "use strict";
    $("#COGSMenu").load("COGSContentPages/IncludeFiles/Include_COGSMenu.html");
}
function loadCOGSLeft() {
    "use strict";
    $("#COGSLeft").load("COGSContentPages/COGSLeftContent.html");
}
function loadCOGSFooter() {
    "use strict";
    $("#COGSFooter").load("COGSContentPages/IncludeFiles/Include_COGSFooter.html");
}
// ************** End of COGS Javascript Library

