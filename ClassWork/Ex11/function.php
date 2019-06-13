<?php

$CuteArr = array(
    array("1", "FluffyCat", "https://en.wikipedia.org/wiki/Siberian_cat", "http://images6.fanpop.com/image/photos/38500000/Persian-cat-iran-38517911-490-326.jpg"),
    array("2", "FluffyDog", "https://en.wikipedia.org/wiki/Australian_Shepherd", "https://s3.amazonaws.com/cdn-origin-etr.akc.org/wp-content/uploads/2017/11/03184922/Aussie.history.jpg"),
    array("3", "FluffyNoodle", "https://en.wikipedia.org/wiki/Ferret", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTG9kdjfxaHePG8WHvA9mTMO_zzyYHCOvz4uzgIu0ynqebqDVM9"),
    array("4", "DangerNoodle", "https://en.wikipedia.org/wiki/Hognose", "https://www.naturalworldpets.co.uk/wp-content/uploads/2016/05/305564_orig-968x727.jpg"),
);

echo "<h1>SO FLUFF</h1>";

echo "<ul>";

for ($row = 0; $row<count($CuteArr) ; $row++){
    echo "<li><a href=" . $CuteArr[$row][2] . "target='_blank'> <img id='" . $CuteArr[$row][0] . "' src ='" . $CuteArr[$row][3] . "' alt=" . $CuteArr[$row][1] . "></a></li>";

}

echo "</ul>";

?>