/* 
Write a JavaScript program to display the current day and time in the following format.

Today is : Tuesday.
Current time is : 10 PM : 30 : 38
*/



// Get the Current Time
console.log(`Get The Current Time:`);
const store_today = new Date();
console.log(`${store_today}\n`)

// Get the day of the week 0-6 Where 0 is Sunday
console.log(`Get the Day of the Week:`);
const store_day = store_today.getDay();
console.log(`${store_day}\n`);

// Array of day names
const daylist=['Sunday','Monday','Tuesday','Friday','Saturday'];

// Display the Current day
console.log(`Display the Current Day:`);
console.log(`Today is: ${daylist[store_day]}\n`);

// Get the Current hour , minute ,  second
let hr = store_today.getHours();
let min = store_today.getMinutes();
let sec = store_today.getSeconds();

// Determine if it's AM or PM
let prepand = (hr >= 12) ? "PM" : "AM";


// Convert 24 hour format to 12-hour format
console.log(`Convert 24 hour format to 12-hour format`);
hr = (hr >= 12 ) ? hr - 12 : hr;
console.log(`${hr}:${prepand}\n`);


// Check for special cases when hour is 0
if (hr === 0 && prepand === 'PM') {
    if(min === 0 && sec === 0){
        hr =12;
        prepand = 'Noon';
    }else{
        hr = 12
        prepand = ' PM';
    }
}

// Check for special cases when hour is 0
if(hr === 0 && prepand === 'AM'){
    if(min === 0 && sec === 0)
    {
        hr = 12;
        prepand = 'Midnight';
    }else{
        hr = 12;
        prepand = ' AM';   
     }
}


console.log(`${'Current Time: ' + hr+prepand+' : '}`+min + ' : '+sec);






