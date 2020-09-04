<?php
echo "~~~simple text to html one~~~<br><br>";
$text_recipe = "

Party Sauce recipe:

1 can stewed tomatoes

3 tablespoons fresh lemon juice

Stir together, server cold.";

$htinl_recipe = nl2br($text_recipe);
echo $htinl_recipe . "<br><br><br>";
echo $text_recipe . "<br><br><br>";

echo "~~~html text to ordinary one~~~<br><br>";
echo "<br><br>";

$user_input = "I just <b>love</b> PHP and <i>gourment</i> recipes!";
$stripped_input = strip_tags($user_input);

echo $user_input . "<br><br>";
echo $stripped_input . "<br><br><br>";

$input = "I <b>love</b> to <a href = \"http://www.eating.com\">eat!</a>!";
$strip_input = strip_tags ($input, "<a>");

echo $input . "<br><br>";
echo $strip_input . "<br><br><br>";

$file = file('file.txt');
foreach ($file as $line_num => $line) {
    echo "#<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
}
