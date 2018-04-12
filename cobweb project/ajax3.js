var xmlHttp = createXmlHttpRequestObject();
function createXmlHttpRequestObject()
{

var xmlHttp;
if(window.ActiveXObject)
{
try
{
xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
}
catch (e)
{
xmlHttp = false;
}
}
else
{
try
{
xmlHttp = new XMLHttpRequest();
}
catch (e)
{
xmlHttp = false;
}
}
if (!xmlHttp)
alert("Error creating the XMLHttpRequest object.");
else
return xmlHttp;
}
function ajax()
{

if (xmlHttp.readyState == 4 || xmlHttp.readyState == 0)
{
name = encodeURIComponent(document.getElementById("Name").value);
phone = encodeURIComponent(document.getElementById("Phone").value);
email = encodeURIComponent(document.getElementById("Email").value);
xmlHttp.open("GET", "ajax3.php?name=" + name +"&email=" + email + "&phone="  + phone , true);
//xmlHttp.open("GET", "ajax2.php?data=" + name +"^" + email + "^" + phone , true); 
xmlHttp.onreadystatechange = processServerResponse;
xmlHttp.send(null);
}
else
setTimeout('ajax()', 1000);
}
function processServerResponse()
{
if (xmlHttp.readyState == 4)
{
if (xmlHttp.status == 200)
{
xmlResponse = xmlHttp.responseXML;
xmlDocumentElement = xmlResponse.documentElement;
helloMessage = xmlDocumentElement.firstChild.data;
document.getElementById("OurMessage").innerHTML =
'<i>' + helloMessage + '</i>';
setTimeout('ajax()', 1000);
}
else
{
alert("Error accessing the server: " +
xmlHttp.statusText);
}
}
}