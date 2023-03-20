<?php
$menu =
[
'home' =>
    [ 'path' => 'index.php', 'name' => 'Domov', ],
'portfolio' =>
[ 'path' => 'portfolio.php', 'name' => 'Portfólio', ],
'faq' => [ 'path' => 'qna.php', 'name' => 'Q&A', ],
'contact' => [
'path' => 'kontakt.php',
'name' => 'Kontakt', ], ];
$file = fopen("csvFile.csv","w"); foreach ($menu as $line) { fputcsv($file, $line); }
fclose($file);

?>