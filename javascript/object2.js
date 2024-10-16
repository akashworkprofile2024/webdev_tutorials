
// const appUser = new Object() //Singleton Object

const appUser = {}   // Non Single object
appUser.id = '1452akdpcd'
appUser.Name = 'Ram'
appUser.islogin = false
console.log(appUser,'\n')

// =====================================
/* Nested object */
const refularUser = {
    email: 'akash51.50500@gmail.com',
    fullName: { username:{ fname: 'Akash', lname:'Biswas', age:25  }}
}

console.log(refularUser.fullName.username.fname, refularUser.fullName.username.lname,'\n')

// =====================================
/* Combining objects */

const obj1 = {1:'a',2:'b'}
const obj2 = {3:'c',4:'d'}
const obj3 = {5:'e' , 6:'f'} 
// const objstore1 = {obj1,obj2}
const objstore2 = Object.assign({},obj1,obj2)
const objstore3 = {...obj1,...obj2,...obj3}
console.log('Combine Two Object: ',objstore2,'\n')
console.log('Combine Two Object using Spread: ',objstore3,'\n')


// =====================================
/* Data Fetch From Database */

const users = [
    {id:1},
    {email:'akash.bisvas2000@gmail.com'},
    {uname:'Akash'},
    {lname:'biswas'}]

console.log('User Id: ',users[0].id)
console.log('User email: ',users[1].email)
console.log('User uname: ',users[2].uname)
console.log('User lname: ',users[3].lname,'\n')

// =====================================
/* Fectch all keys value and entries of the objects */

let storeappUser_keys = (Object.keys(appUser))
let storeappUser_values = (Object.values(appUser))
let storeappUser_entries = (Object.entries(appUser))
console.log(storeappUser_keys,'Type of: ', typeof(storeappUser_keys))
console.log(storeappUser_values,'Type of: ', typeof(storeappUser_values))
console.log(storeappUser_entries,'Type of: ', typeof(storeappUser_entries),'\n')

// Check property is present in the object or not
console.log('Property is Present or Not in appUser: ',appUser.hasOwnProperty('Name'))




