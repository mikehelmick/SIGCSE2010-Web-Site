
function write_email( first, second ) {
    var string4 = first + "@" + second;
	document.write("<a href=" + "mail" + "to:" + first + "@" + second + ">" + string4 + "</a>");
}

function remove_frames()
{
  var sMyDom = 'sigcse.org';
  if (document.domain != sMyDom && document.domain != 'localhost') {
    top.location.replace(document.URL.replace(document.domain, sMyDom));
  }
}
