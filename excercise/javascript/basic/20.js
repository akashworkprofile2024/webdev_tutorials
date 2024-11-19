// Write a JavaScript program to create another string by adding "Py" in front of a given string. If the given string begins with "Py" return the original string. 

function string_check(x)
    {
         if(x === null || x === undefined || x.substring(0,2) === 'Py'){
            return x;
         }else{
            return "Py" + x;
         }         
    }

console.log(string_check('Mython'))