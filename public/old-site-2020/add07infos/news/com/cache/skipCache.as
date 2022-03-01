/*
**************************************************************
* Developed by R.Arul Kumaran [arul@shockwave-india.com]     *
* for more code keep visiting [www.shockwave-india.com/blog] *
**************************************************************
version 1.1 Last updated on 9, Jan 2004
*/
/*
| Useful when you don't want your server files to be cached by both server and browser
|
|   getSkipCacheString() - Return a blank string("") when the swf is running as a local file and
|                          returns a random string like "?CacheBuster=0.0308893630281091&timestamp=1073037565155"
|                          when the swf is from a web server
|       
*/
_global.getSkipCacheString = function() {
	if (getSkipCacheString.isLocalPlayback) {
		return "";
	}
	dStr = "&timestamp="+new Date().getTime();
	return "?CacheBuster="+Math.random()+dStr;
};
getSkipCacheString.isLocalPlayback = _url.indexOf("file") == 0;
/*
//sample usage
#include "skipCache.as"
my_xml = new XML();
my_xml.onData = function(dta) {
 trace(dta);
};
my_xml.load("myfile.xml"+getSkipCacheString());
*/