
function write_email( first, second ) {
    var string4 = first + "@" + second;
	document.write("<a href=" + "mail" + "to:" + first + "@" + second + ">" + string4 + "</a>");
}

function remove_frames()
{
  var thisPage = "http://www.sigcse.org" + self.location.pathname;
  var thisNoDub = "http://sigcse.org" + self.location.pathname;
  var thisLocal = "http://localhost" + self.location.pathname;
  if (top.location != thisPage && top.location != thisNoDub && top.location != thisLocal ) {
    top.location = thisPage;
  }
  //var sMyDom = 'www.sigcse.org';
  //if (document.domain != sMyDom && document.domain != 'sigcse.org' && document.domain != 'localhost') {
  //  top.location.replace(document.URL.replace(document.domain, sMyDom));
  //}
}
