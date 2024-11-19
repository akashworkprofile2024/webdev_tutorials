// <!-- Write a JavaScript program to determine whether a given year is a leap year in the Gregorian calendar. -->

function geo_leap(year){
    return (year % 100 === 0 ) ? (year % 400 === 0 ) : (year % 4 === 0)
}

console.log(geo_leap(2016));
console.log(geo_leap(2000));
console.log(geo_leap(1700));
console.log(geo_leap(1800));
console.log(geo_leap(100));



/* 
1. year divisible by 4 true 
2. year divisible by 100 false
3. year divisible by 400 false
*/