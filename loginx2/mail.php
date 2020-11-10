<meta http-equiv='refresh' content='5; url=index.html'>

<?php
if (isset($_POST['name'])) {$name = $_POST['name']; if ($name == '') {unset($name);}}
if (isset($_POST['email'])) {$email = $_POST['email']; if ($email == '') {unset($email);}}
if (isset($_POST['sub'])) {$sub = $_POST['sub']; if ($sub == '') {unset($sub);}}
if (isset($_POST['body'])) {$body = $_POST['body']; if ($body == '') {unset($body);}}

if (isset($name) && isset($email) && isset($sub) && isset($body)){

$address = "test-bloggood@rambler.ru";
$mes = "???: $name \nE-mail: $email \n????: $sub \n?????: $body";
$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
if ($send == 'true')
{echo "Jesteś zapisany, my zadzwonimy do ciebie w ciągu 1 godziny. Za 5 sekund zostaniesz przekierowany na stronę główną 
<a href='index.html'>MOMO</a>,gdzie można kontynuować przeglądanie";}
}
else
{
echo "Nie uzupełniono wszystkich pól, prosimy wrócić i wypełnić wymagane pola.";
}
?>