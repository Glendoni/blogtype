<?php
return [

/*
|--------------------------------------------------------------------------
| Laravel CORS
|--------------------------------------------------------------------------
|
| allowedOrigins, allowedHeaders and allowedMethods can be set to array('*')
| to accept any value.
|
*/

'supportsCredentials' => false,
'allowedOrigins' => ['http://localhost:8080'],// ex: ['abc.com', 'api.abc.com']
'allowedHeaders' => ['*'],
'allowedMethods' => ['*'],// ex: ['GET', 'POST', 'PUT', 'DELETE']
'exposedHeaders' => [],
'maxAge' => 0,

];
