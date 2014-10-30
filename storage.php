<?php
//retour un array de tokken en prenant un array de caractères
public static function storage($source) {
    $tokens = array();
 
    foreach($source as $number => $line) {            
        $offset = 0;
        while($offset < strlen($line)) {
            $result = static::_match($line, $number, $offset);
            if($result === false) {
                throw new Exception("Unable to parse line " . ($line+1) . ".");
            }
            $tokens[] = $result;
            $offset += strlen($result['match']);
        }
    }
    return $tokens;
}


// vérifie si le modèle correspond bien à la chaine actuelle.
protected static function _match($line, $number, $offset) {
    $string = substr($line, $offset);
 
    foreach(static::$_terminals as $pattern => $name) {
        if(preg_match($pattern, $string, $matches)) {
            return array(
                'match' => $matches[1],
                'token' => $name,
                'line' => $number+1
            );
        }
    }
 
    return false;
}
?>
