// Dates

let mydate = new Date()
console.log(mydate,'\n');
console.log(mydate.toString(),'\n');
console.log(mydate.toDateString(),'\n');
console.log(mydate.toLocaleString(),'\n');
console.log("Type of Mydate var: ",typeof(mydate),'\n'); // Object


// Create Own Date
let createmydate = new Date(2023,4,23)
console.log('Create Date: ',createmydate.toDateString(),'\n');

let createmydate1 = new Date(2024,2,25,6,30)
console.log('Create Second Date: ',createmydate1.toDateString(),'\n');

let createmydate2 = new Date("2024-05-25")
console.log('Create Third Date: ',createmydate2.toDateString(),'\n');

let createindiandate = new Date('01-05-2024')
console.log('Indian Date Format: ',createindiandate.toDateString(),'\n');

// TimeStamp 

let mytimestamp = Date.now()
console.log('Get Time From Current Date: ',mytimestamp,'\n'); // show millisecond value

console.log("Get Time from Date: ",createindiandate.getTime(),'\n');

console.log(Math.floor(Date.now()/1000),'\n');

// Get Date Month Day
let newdate = new Date()
console.log('Get Date',newdate,'\n');
console.log('Get Month',newdate.getMonth(),'\n');
console.log('Get Day',newdate.getDay(),'\n');


newdate.toLocaleDateString('default',{
    weekday:'long',
    // timeZone:''
})

