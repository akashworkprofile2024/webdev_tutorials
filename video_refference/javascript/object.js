/* Literal && Constructor , Singleton */  
/* Using constructor Singleton object created */ 

// Object Literals
const mysym = Symbol('key1')
const userobj = {
     'fullName':'Akash Biswas',
      mysym:'Marklocation',
      age: 45, 
      address:['Madhyamgram' , 'Kolkata']
}
console.log('Name object: ',userobj.fullName,'Type-Of: ',typeof userobj.fullName,'\n')
console.log('Age object: ',userobj['age'],'Type-Of: ',typeof userobj.age)
console.log('Symbol object: ',userobj.mysym,'Type-Of: ',typeof(userobj.mysym),'\n')

// =========================================================================================

// Object Overwriting 
userobj.fullName = "Rahul Biswas"
console.log("Overwrite fullName Object: ",userobj.fullName,'\n')

// =========================================================================================


// function 
userobj.greeting = function(){
      console.log("Hello function") 
 }

 //  console.log(userobj.greeting) // Function reference
 console.log(userobj.greeting()) // perfectly run

// =========================================================================================


// Reffer the  properties of  the same object's (using string interpolation)
userobj.greeting1 = function(){
     console.log(`My Age is: ${this.age}`)
} 
 console.log(userobj.greeting1()) 

// =========================================================================================


// freeze the values (data not able to change after freeze)
Object.freeze(userobj)
console.log("Freeze Object: ",userobj);
 














