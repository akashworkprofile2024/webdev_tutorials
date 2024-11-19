// Write a JavaScript program to check whether a given integer is within 20 of 100 or 400. 

function diff_20(x){
    
    if(Math.abs(100-x) <= 20 || Math.abs(400 - x) <= 20){
        console.log('True')
    }else{
         console.log('False')
    }
}
diff_20(85)
