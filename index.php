<?php

/* 
 * Funcion para retornar cantidad de letras repetidas en continuidad
 */

function repeatedLetters(string $string):array {
    
    $groups = [];
    
    $group = [];
    
    foreach (str_split($string) as $value) {
        
        if (isset($group[$value])) {
            
            $group[$value] += 1;
            
        }else{
            
            if (count($group)>0) {
                
                $groups = addResult($groups, $group);
                
            }
            
            $group = [
                $value => 1
            ];
            
        }
        
    }
    
    $groups = addResult($groups, $group);
    
    return $groups;
    
}

function addResult(array $groups, array $group): array{
    
    array_push($groups, [array_key_first($group), reset($group)]);
    
    return $groups;
    
}

echo json_encode(repeatedLetters("aaaabbbbbcca"));

