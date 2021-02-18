/* 
 * Funcion para retornar cantidad de letras repetidas en continuidad
 */

repeatedLetters = (input) => {
    
    var groups = [];
    
    var group = {};
    
    input.split("").forEach((a)=>{
        
        if (group.hasOwnProperty(a)) {
            
            group[a] += 1;
            
        }else{
            
            groups.push(group);
            
            group = {
                [a]:1
            };
            
        }
        
    });
    
    groups.push(group);
    
    return groups;
    
}

console.log(repeatedLetters("aaaabbbbbcca"));


