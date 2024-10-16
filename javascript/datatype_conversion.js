let score = 45
let score1="45"
let score3 = "33bac"

console.log('Number - 45 =',typeof score )
console.log('Number - 45 =',typeof store1)

// Convert into String to Number
let Valuein_num = Number(score1)
console.log("Convert string to integer: ",typeof Valuein_num)

// Convert into complex string to Number
let Valuein_num1 = Number(score3)
console.log("convert score3: ",Valuein_num1)
console.log("Convert string to Integer: ", typeof Valuein_num1)

//  null value
let score4 = null
console.log("Score4: ",score4)


// boolean value convert false and True into number
let bool = false
let bool1 = true
let convertbool = Number(bool)
let convertbool1 = Number(bool1)
console.log("bool: ",convertbool,"bool1: ",convertbool1)

// string convert into integer X

let stringvar = "Akash"
let convertstringvar = Number(stringvar)
console.log("stringvar: ",convertstringvar)


// convert Number into Boolean
let isLoggedIn = 1
let convertisLoggedIn = Boolean(isLoggedIn)
console.log("ConvertisLoggedIn: ",convertisLoggedIn)

// 1 = true ; 0 = false ; "" = false ; "1" or "Hitesh" = true

// convert using into String
let someNumber = 45
let changesomeNumber = String(someNumber)
console.log("Some Number: ", changesomeNumber ,"||",'Type: ',typeof(changesomeNumber))

