function myfun(x,y)
{
    return x + y ;
}

let x = myfun(1,2)
console.log("Adding Using Function: ", x)



// FUNCTION RETURN

let y = myfunreturn(4,3);

function myfunreturn(a,b)
{
    console.log("result: ",a*b)   
}

// THE () OPERATOR
function celsius(fah)
{
    console.log('Result Operator invokes: ',(5/9) * (fah-32)) 
}

let value = celsius(77);


// FUNCTIONS USED AS VARIABLE VALUES

function tocel(faren){
   console.log('Function used as variable: ',(5/9) * (faren-32));
}

let value1 = tocel(77)


// LOCAL VARIABLES

function myfun2(){
    let carname = 'Volvo'
    let text = 'Inside: ' + typeof carname + " " + carname;
    console.log(text); 
}
myfun2()

/*
Function parameters are listed inside the parentheses () in the function definition.

Function arguments are the values received by the function when it is invoked.

Inside the function, the arguments (the parameters) behave as local variables.
 
*/