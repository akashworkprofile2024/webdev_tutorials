// Write a JavaScript program to check a pair of numbers and return true if one of the numbers is 50 or if their sum is 50.  


function check_50num(x,y)
{
    let storesum = x + y
    console.log(storesum)
    if( x == 50 || y == 50 || storesum == 50 )
    {
         console.log('True') 
    }else{
         console.log('False') 
    }
}
check_50num(5,45)