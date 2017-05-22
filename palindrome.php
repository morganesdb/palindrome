<?php

if (empty($_POST['saisie'])) {
 exit();
}

$mot = $_POST['saisie'];$a=0;
$result = true;
$b=strlen($mot)-1;

while ($a <= $b) {
 if ($mot[$a] != $mot[$b]) {
   $result = false;
 }

 $a++;
 $b--;
}

if ($result) {
 echo $mot." est un palindrome";
}
else {
 echo $mot." n'est pas un palindrome";
}
