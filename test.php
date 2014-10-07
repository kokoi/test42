<?php

require_once('ListLexer.php');
require_once('Token.php');

$input = '[ a, b, c, d]';
$lexer = new ListLexer($input);
$token = $lexer->nextToken();

$result = array(); // La variable qui va rassembler tous les résultats des token

while($token->type != Lexer::EOF_TYPE) {
    echo $token . "\n";
    $result[] = $token; // L'opérateur [] lié à un tableau permet de rajouter une "stack" à un tableau
    $token = $lexer->nextToken();
}

?>
