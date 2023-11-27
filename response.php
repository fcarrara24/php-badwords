<h1>risposta</h1>

<?php
#creating variables to store all responses
$paragraph = $_POST["paragraph"];
$wordToCensor = $_POST["wordToCensor"];

//simple printing response
echo $paragraph ."<br/>";
//printing paragraph and its length
$paragraphLength = strlen($paragraph);
echo  "paragraph length: ".$paragraphLength."<br/>";

// replacing all instances if world to censor in paragraph
$paragraph = str_replace($wordToCensor, '***', $paragraph);
echo "new paragraph: <br/>".$paragraph;
echo "<br/>new paragraph length: ".$paragraphLength = strlen($paragraph);
?>