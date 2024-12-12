const score = 400

const balance = new Number(100)
console.log(balance, 'Type: ',typeof(balance));

console.log('Covert Number into String: ',balance.toString());
console.log('Fixed number: ',balance.toFixed(2));
console.log("Length number string",balance.toString().length,'\n')

// Precision (Return String and range 1 - 21)
const othernumber = 23.499
console.log(othernumber.toPrecision(3));

// currency format
const num = 10000000
console.log(num.toLocaleString('en-IN'),'\n');

// Maths

console.log(Math,'\n');

console.log('Absolute: ',Math.abs(-4),'\n');

console.log('Rounding: ',Math.round(4.6),'\n');

console.log('Celing: ',Math.ceil(4.2),'\n');

console.log('Floor: ',Math.floor(4.9),'\n');

console.log('square root: ',Math.sqrt(25),'\n');

console.log('Min Value: ',Math.min(4 , 3 , 2 , 1 ),'\n');

console.log('Max Value: ',Math.max(4 , 3 , 2 , 1 ),'\n');

console.log('Random: ',Math.random(),'\n');
console.log('Random: ',Math.random()*10,'\n');
console.log('Random: ',(Math.random()*10) + 1,'\n');

const min = 10
const max = 20

console.log(Math.floor(Math.random()*(max-min+1))+min); 


