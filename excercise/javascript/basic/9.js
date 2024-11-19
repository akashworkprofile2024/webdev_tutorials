// Write a JavaScript program to calculate the days left before Christmas.

// store current date first
let today = new Date()
// console.log(`${today}`);

// destination date
let Christmas = new Date(today.getFullYear(),11,25)
// console.log(`${Christmas}`);

// check current date is after December 25th
if(today.getMonth() == 11 && today.getDate == 25)
{
    Christmas.setFullYear(Christmas.getFullYear()+1)
}


// Calculate day left to arrive christmas
let one_day = 1000 * 60 * 60 * 24
// console.log(`${one_day}`);


// store the number of days left util Christmas to the console
console.log(`${ Math.ceil((Christmas.getTime() -today.getTime())/(one_day)) } days left until Christmas ❄️`);

// console.log(Math.ceil((Christmas.getTime()-today.getTime())/(one_day)) + " Days left until Christmas ❄️");

