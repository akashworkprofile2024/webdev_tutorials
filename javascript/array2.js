const numarr = [1,2,3,4]
const mixarr = ["akash" , "biswas" , 25 , 'west bengal']


// Concat one array to another array
const hybirdarr = numarr.concat(mixarr)
console.log('After Concate: ',hybirdarr,'\n','Typeof: ',typeof(hybirdarr),'\n');


// Spread operate concator

const hybirdarr1 = [...numarr, ...mixarr]
console.log('After Spread: ',hybirdarr1,'\n');  

// Push one array to another array
numarr.push(mixarr)
console.log('After Push: ',numarr,'\n','TypeOf: ', typeof(numarr),'\n')

// Solve Unusual Array Problem
const messyarr = [1,2,3,[4,5,6],7,[8,[9,10]]]
const shortarr = messyarr.flat(Infinity)
console.log('After flat the Messy_Array: ', shortarr,'\n');

console.log('Using IsArray: ',Array.isArray("Akash"))
console.log('Convert into Array: ',Array.from("Akash"),'\n')
console.log('Empty Array Return: ',Array.from({name:'Akash'}),'\n') // empty Array return


// Create Array Using Allotted Variable
let Name = "Rahul"
let Lname = 'Ghosh'
let age=45

console.log('Create New Array Using Var: ',Array.of(Name,Lname,age));




