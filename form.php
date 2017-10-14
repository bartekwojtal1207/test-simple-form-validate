<?php
/**
 * Created by PhpStorm.
 * User: Bartek
 * Date: 2017-10-14
 * Time: 15:46
 */

$name = $_POST["name"];
$pattern = '/[a-zA-ZąćęłńóśżźĄĆĘŁŃÓŚŻŹ ]/';
$subject = $name;


echo $name;

if (empty($name)) {
    echo "brak imienia";
}elseif (! empty($name)){
    echo "elo mordo";
    echo "<br/>";

   if ((preg_match($pattern, $subject))) {
        echo'dobry napis';
    } else {
        echo 'zly napis';
    };

}

?>

