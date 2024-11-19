/* 

Write a JavaScript program to get the current date.  
Expected Output :
mm-dd-yyyy, mm/dd/yyyy or dd-mm-yyyy, dd/mm/yyyy

*/

// Get the Current Date
let today = new Date();
console.log(`${today}\n`);

//Get the Day of the Month
let dd = today.getDate();
console.log(`Get the Day of the month\n${dd}\n`);


// Get the month adding 1 because months are zero based
let mm = today.getMonth()+1;
console.log(`Get the month in Number:\n${mm}\n`);

// Get the Year
let yy = today.getFullYear();
console.log(`Get current Year:\n${yy}\n`);

// Add leading zero if the day is less than 10

if (dd < 10){
    dd = '0'+ dd;
}

// Add leading zero if the month is less than 10

if(mm < 10){
    mm = '0'+mm;
}

// format the date

console.log(`date/month/year: ${dd}-${mm}-${yy}`);



