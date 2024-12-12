// create an array
const arraymain = ["Akash","Biswas",25]
console.log('ArrayMain Elements: ',arraymain,'\n');

const diffarraymain = new Array('Akash', 'Biswas', 25)
console.log('DiffarrayMain Elements: ',diffarraymain,'\n');

// fetch element using indexing
console.log("Fecth 2nd element: ",arraymain[2]);

// check array length
console.log("Length of the Array: ",arraymain.length,'\n');

// Push elements
arraymain.push("West Bengal" , 2024)
console.log("Push New Element: ",arraymain,'\n');

// Pop Elements
console.log("Pop Elements: ",arraymain.pop());
console.log("Print after Pop: ",arraymain,'\n');

// insert Elements on the first place 
arraymain.unshift(9)
console.log("Array Unshift: ",arraymain,'\n');

// Shift Elements of the array
arraymain.shift()
console.log('Array Shift: ',arraymain,'\n');

// Including
console.log("Check Included or Not: ",arraymain.includes("Akash"),'\n');

// Indexing of the elements
console.log("Show Index of the Element: ",arraymain.indexOf("Biswas"),'\n');

const newarr = arraymain.join()
console.log(arraymain);
console.log("After Join: ", newarr ,'\n',"Type of array: ",typeof(newarr),'\n');


// Slice // Splice
const arraymain1 = ['Akash','Biswas',20,"West Bengal"]

console.log("A: ",arraymain1);
const newarr1 = arraymain1.slice(1,3)
console.log("After Slice: ",newarr1);
console.log('B: ',arraymain1,'\n');

// Splice

const newarr2 = arraymain1.splice(1,3)
console.log('After Splice: ',newarr2,'\n','Type of Splice Array: ',typeof(newarr2)),'\n';


/*
 Shallow copy = using reference of original copy 
 Deep Copy = don't use refrence of original copy  
*/