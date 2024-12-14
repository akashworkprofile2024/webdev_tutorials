/*  String
Number
Bigint
Boolean
Undefined
Null
Symbol
Object
The Object Datatype

The object data type can contain both built-in objects, and user defined objects:

Built-in object types can be:

objects, arrays, dates, maps, sets, intarrays, floatarrays, promises, and more. 
*/ 


// INTEGER TYPE

let length = 4
let weight = 7.5
console.log(length ,typeof(length), weight,typeof(weight),'\n')

// STRING TYPE
let namefile = 'Akash';
console.log(namefile , typeof(namefile),'\n')

// BOOLEAN TYPE
let x = true;
console.log(x , typeof(x),'\n')

// OBJECT
const person = {first_name:'Akash' , last_name:'Biswas'}
console.log(person , typeof(person))

// ARRAY OBJECT
const arr_data = ['saan' , 'Freeze' , 'Zee'];
console.log(arr_data , typeof(arr_data))

// DATE OBJECT
const date = new Date('2024-13-25')
console.log("date", typeof(date),'\n')


// CONCATINATE STRING {NUMBER + STRING / STRING + STRING}

let addjoin = 16 + "Akash"
console.log('concate: ',addjoin) 

let addjoinstring = '67' + 'Akash'
console.log('concate: ',addjoinstring , "\n")


// MIXED NUMBERS

let mixnum = 4+20+'Akash';
let mixnum1 = 4+'Akash'+20;
console.log("4+20+'Akash': ",mixnum)
console.log("4+'Akash'+20: ",mixnum1,'\n')



// DYANMIC DATA
let dynamicdata ;
dynamicdata = 5;
dynamicdata='Dynamic_Overwrite'


console.log("Dynamic_Data: ", dynamicdata)


// EXPONENTIAL NUMBERS
let expo1 = 31e5
let expo2 = 31e-5

console.log("expo1: ",expo1, "\n" ,"expo2: " ,expo2 , "\n")


// BIGINT

let bigint_var = BigInt(7980898263);
console.log(bigint_var,":",typeof(bigint_var),'\n')


// ARRAY    

let arr_var = ['Honda','Hero','Suzuki']
console.log(arr_var , ': ' , typeof(arr_data))


// OBJECTS

let persons = {fname:"Akash" , lname:"Biswas" , Age:24}
console.log(persons,': ',typeof(persons),'\n`')


// A JavaScript variable can hold any type of data. 
// When adding a number and a string, JavaScript will treat the number as a string.
// Javascript numbers are always one type: double (64-bit floating point).
// JavaScript evaluates expressions from left to right. Different sequences can produce different results:




