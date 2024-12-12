const name = 'Akash'
const repocount = 50

// concatenate
console.log(`Hello is me ${name} and my repo ${repocount}`);

 
const gameNew = new String("Akash")
console.log(gameNew);

// Access VAlue
console.log('access Value',gameNew[0]);
console.log('access Value',gameNew.__proto__);

console.log('String Length: ',gameNew.length);
console.log('Convert Uppercase: ',gameNew.toUpperCase());

// Show data using position
console.log('Char at: ',gameNew.charAt(3));

// Show position of data
console.log('Position at: ',gameNew.indexOf('s'));

// Slicing String , substring not follow negative value
const slicegameNew = gameNew.substring(0,4)
console.log("Slicing: ",slicegameNew);

// Slicing reverse
const anotherstring = gameNew.slice(-4,1)
console.log(anotherstring);

// Trimming 

const newstring = "                  AKash Biswas "
console.log('Without String: ',newstring);
console.log('With String: ',newstring.trim(),'\n');


// Replace string

const linkurl = "https://www.akashworkprofile2005.com"
console.log("Original url: ",linkurl);
linkurl.replace('2005','2018')
console.log('Modified Link',linkurl,'\n')

// Includes
const var1 = 'Akash'
console.log("String includes or Not: ",var1.includes("Akash"));

// convert into  Arrays
const var2 = "html javascript css php"
console.log(var2.split(','));


