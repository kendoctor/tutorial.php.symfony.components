<?php

// require composer's autolaod.php at the beginning 

require_once("../../vendor/autoload.php");

use Symfony\Component\HttpFoundation\Request;

/* 
 * Create a new request with values from PHP's super globals
 */

$request = Request::createFromGlobals();

$gets = array();

//Returns the client ip address
$gets['ClientIp'] = $request->getClientIp();

//Returns the port on which the request is executed
$gets['Port'] = $request->getPort();

//Returns the path being requested relative to the script executed
$gets['PathInfo'] = $request->getPathInfo();

//Returns the root path from which this request is executed
$gets['BasePath'] = $request->getBasePath();

//Returns the root URL from which this request is executed
$gets['BaseUrl'] =  $request->getBaseUrl();

//Returns current script name
$gets['ScriptName'] = $request->getScriptName();

//Get user info
$gets['UserInfo'] = $request->getUserInfo();

//Returns the user
$gets['User'] = $request->getUser();

//Returns the password
$gets['Password'] = $request->getPassword();

//Returns the HTTP host being requested
$gets['HttpHost'] = $request->getHttpHost();

//Returns the host name
$gets['Host'] = $request->getHost();

//Gets the request's scheme.
$gets['Scheme'] = $request->getScheme();

//Get the scheme and HTTP host
$gets['SchemeAndHttpHost'] = $request->getSchemeAndHttpHost();

//Generates a normalized URI for the Request
$gets['URI'] =  $request->getUri();

//Generates the normalized query string  for the Request
$gets['QueryString'] = $request->getQueryString();

//Checks whether the request is secure or not
$gets['Secure'] = $request->isSecure();

//Gets the request "intended" method
$gets['Method'] = $request->getMethod();

//Gets the "real" request method
$gets['RealMethod'] = $request->getRealMethod();

//Gets the format associated with the mime type
$gets['Format'] = $request->getFormat('text/css');

//Gets the mime type associated with the format
$gets['MimeType'] = $request->getMimeType($gets['Format']);

//Gets the request format, default is 'html'
$gets['RequestFormat'] = $request->getRequestFormat();

//Gets the content type associated with the request
$gets['ContentType'] = $request->getContentType();

//Get the locale
$gets['Locale'] = $request->getLocale();

//Returns the request body content
$gets['content'] = $request->getContent();

//Gets the Etags. It's a array. $request->getETags();


//Returns the preferred langauge
$gets['PreferredLanguage'] = $request->getPreferredLanguage();

//Gets a list of languages acceptalbe by the client browser
$gets['Languages'] = $request->getLanguages();

//Gets a list of charsets acceptable by the client browser
$gets['Charsets'] = $request->getCharsets();

//Gets a list of encodings acceptable by the client browser
$gets['Encodings'] = $request->getEncodings();

//Gets a list of content types acceptable by the client browser
$gets['AcceptableContentTypes'] = $request->getAcceptableContentTypes();

//Return true if the request is a XMLHttpRequest. Ajax request
$gets['IsXmlHttpRequest'] = $request->isXmlHttpRequest(); 

//Get values from url ?id=1&key=yes
$gets['GetValues'] = $request->query->has('id') ? $request->query->get('id') : 'N/A';

//Get values from post form <input name='username' value='kendoctor'>
$gets['PostValues'] = $request->request->has('kendoctor') ? $request->request->get('kendoctor') : 'N/A';


//Get file from upload request
//$request->files->get('upload_file_field_name');

//Get cookies form on the cliennt: 
//NOTE cookie only can be get in request 
//set cookie via response 
//$request->cookies->get('a_key');

//Get request header info
//$request->headers->get('a_key');


echo '<ul>';
foreach($gets as $key=>$value)
{
	echo '<li>'.$key.':'.$value.'</li>';
}
echo '</ul>';
