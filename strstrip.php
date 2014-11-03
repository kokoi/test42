<?php
  function arraytolower($array, $include_leys=false) { 
    
    if($include_leys) { 
      foreach($array as $key => $value) { 
        if(is_array($value)) 
          $array2[strtolower($key)] = arraytolower($value, $include_leys); 
        else 
          $array2[strtolower($key)] = strtolower($value); 
      } 
      $array = $array2; 
    } 
    else { 
      foreach($array as $key => $value) { 
        if(is_array($value)) 
          $array[$key] = arraytolower($value, $include_leys); 
        else 
          $array[$key] = strtolower($value);   
      } 
    } 
    
    return $array; 
  } 
?>
