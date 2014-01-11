PHPIssue
========
CreateIssue.php will call the Checkparm function of class CreateIssue which take user commandline input.
example - "$ CreateIssue -ujdoe -ppassword -shttps://github.com/example/test -tThe title of my issue -bHere what I did to reproduce the problem." and this will call the rest api example "https://api.github.com/repos/sabhinav1984/PHPIssue/issues" from rest-client-php post method.

This is also Simple implementation that supports PUT, GET, POST, DELETE and uses cURL. Based on rest-client-php

Supports GET, POST, PUT, DELETE HTTP methods. All options from cURL can be passed to constructor as an array.

Response from calling curl_getinfo() and curl_exec() are respectively in $client->response_info and $client->response_object.


