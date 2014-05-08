<?php

require_once("../../vendor/autoload.php");

use Symfony\Component\HttpFoundation\Response;

$gets = array();
$response = new Response("Hello World");


//Prepare the Response before it send to the client
//$response->prepare($request);

//Sends HTTP headers
//$response->sendHeaders();

//Sends content for the current web response
//$response->sendContent();

//Gets the current response content
//Should be "Hello World"
$gets['content'] = $response->getContent(); 

//Sets the HTTP protocol version(1.0 or 1.1)
//$response->setProtocolVersion("1.0");

//Gets the Http protocol version
$gets['ProtocolVersion'] = $response->getProtocolVersion();

//Sets the response status code
//Default is 200
//Also can be passed by the second param of contructor
$response->setStatusCode(200);

//Retrieves the status code for the current web response
$gets['StatusCode'] = $response->getStatusCode();

//Sets the response charset
$response->setCharset('utf-8');

//Retrieves the reponse charset
$gets['Charset'] =  $response->getCharset();

//Returns true if the response is worth caching 
$gets['IsCacheable'] = $response->isCacheable();

//Returns true if the response is "fresh"
$gets['IsFresh'] = $response->IsFresh();

//Returns true if the response inlucdes headers that can be
//used to validate the response with the origin server
$gets['IsValidateable'] = $response->isValidateable();

//Marks the response as "private"
//$response->setPrivate();

//Marks the response as "public"
//$response->setPublic();

//Returns true if the response must be revalidated by cahces
$gets['MustRevalidate'] = $response->mustRevalidate();

//Returns the Date header as a DateTime instance
$gets['DateHeader'] = $response->getDate();

//Sets the date header
//$response->setDate(DateTime $date)

//Returns the age of the response
$gets['Age'] = $response->getAge();

//Marks the response stale by setting the age header
//to be equal to the maximum age of the response
//$response->expire();

//Returns the value of the Expires header as a DateTime instance
$gets['Expires'] = $response->getExpires();

//Sets the Expires HTTP header with a DateTime instance
//$response->setExpires(DateTime $date)

//Returns the number of seconds after the time spcified
//in the response's Date header when the response 
//should no longer be considered fresh.
$gets['MaxAge'] = $response->getMaxAge();

//Sets the number of seconds after which the response
//should no longer be considered fresh
//$response->setMaxAge(integer $value)

//Sets the number of seconds after the the response
//should no longer be considered fresh by shared caches
//$response->setSharedMaxAge(integer $value)

//Returns the response's time-to-live in seconds
$gets['TimeToLive'] = $response->getTtl();

//Sets the response's time-to-live for shared caches
//$response->setTtl(integer $seconds)

//Sets the response's time-to-live for private/client caches
//$response->setClientTtl(integer $seconds)

//Returns the Last-Modified HTTP header as a DateTime instance
$gets['LastModified'] = $response->getLastModified();

//Sets the Last-Modified HTTP header with a DateTime instance
//$response->setLastModified(DateTime $date);

//Returns the literal value of the ETag HTTP header
$gets['Etag'] = $response->getEtag();

//Sets the ETag value
//$response->setEtag(string $etag, boolean $weak)

//Sets the response's cache header(validation and/or expiration)
//$response->setCache(array $options)

//Modifies the response so that is conforms to the rules
//defined for a 304 status code
//$response->setNOtModified()


//Retursn true if the resonse inlcudes a Vary Header
$gets['HasVary'] = $response->hasVary();

//Returns an array of header names given in the vary header
$gets['Vary'] = $response->getVary();

//Sets the Vary Header
//$response->setVary(string|array $headers, boolean $replace)

//Determines if the Response validators(ETag,Last-Modified)
//match a conditional value specified in the Request
//$response->isNotModified(Request $request)

///Is response invalid?
$gets['IsInvalid'] = $response->isInvalid();

//Is response informative?
$gets['IsInformative'] = $response->isInformational();

//Is Response successful?
$gets['IsSuccessful'] = $response->isSuccessful();

//Is the response a redirect?
$gets['IsRedirection'] = $response->isRedirection();

//Is there a client error?
$gets['IsClientError'] = $response->isClientError();

//Was there a sever side error?
$gets['IsServerError'] = $response->isServerError();

//Is the response OK?
$gets['IsOK'] = $response->isOk();

//is the response forbidden
$gets['IsForbidden'] = $response->isForbidden();

//is the response a not found error?
$gets['IsNotFound'] = $response->isNotFound();

//isRedirect(string $location = null)
$gets['IsRedirect'] = $response->isRedirect();

//Is the reponse empty?
$gets['IsEmpty'] = $response->isEmpty();

$content = "";
foreach($gets as $key => $value)
{
	$content .="<br/>".$key.":".(is_object($value)?'object':$value);
}

$response->setContent($content);

//Send HTTP headers and content
$response->send();

