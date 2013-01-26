<!--************** COGS Javascript Library ****************-->

var timeout	= 500;
var closetimer	= 0;
var ddmenuitem	= 0;

// open hidden layer
function mopen(id)
{	
	// cancel close timer
	mcancelclosetime();

	// close old layer
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';

	// get new layer and show it
	ddmenuitem = document.getElementById(id);
	ddmenuitem.style.visibility = 'visible';

}
// close showed layer
function mclose()
{
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
}

// go close timer
function mclosetime()
{
	closetimer = window.setTimeout(mclose, timeout);
}

// cancel close timer
function mcancelclosetime()
{
	if(closetimer)
	{
		window.clearTimeout(closetimer);
		closetimer = null;
	}
}

// close layer when click-out
document.onclick = mclose; 

// functions to load included documents
function loadCOGSHeader(){$("#COGSHeader").load("COGSContentPages/IncludeFiles/Include_COGSHeader.html");}
function loadCOGSMenu(){$("#COGSMenu").load("COGSContentPages/IncludeFiles/Include_COGSMenu.html");}
function loadCOGSLeft(){$("#COGSLeft").load("COGSContentPages/COGSLeftContent.html");}
function loadCOGSFooter(){$("#COGSFooter").load("COGSContentPages/IncludeFiles/Include_COGSFooter.html");}
<!--************** End of COGS Javascript Library ****************-->