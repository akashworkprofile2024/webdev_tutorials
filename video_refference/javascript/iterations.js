// for loop  basic 

 for (let index = 0; index < 10; index++) {
    const element = index;
    console.log(element,'\n');
    
}
// console.log(element,'br');   //not accessible from outside

// ===================================

for (let index1 = 0; index1 <= 10; index1++) {
    const element1 = index1
    if(element1 == 5 ){
        console.log("We got number 5") // first execute this line
    }
    console.log(element1) // secondly execute this line
}


// Nested for loop

for (let i = 1; i <=10; i++) {
       console.log(`outer loop value: ${i}`)
    for (let j = 1; j<=10; j++) {
        // console.log(`Inner Loop Value: ${j} and inner lopp ${i}`)
        console.log(i+ '*' + j + '= ' + j*i );
    }
    
}


// for loop using array

let arrayvar = ['Akash',45,'rahul',2.5,'sharma','pinky']

// console.log(arrayvar.length)
console.log('\n','All Data: ')
for (let i1 = 0; i1 < arrayvar.length; i1++) {
    const element = arrayvar[i1];
    console.log(element)    
}


// for loop with break and continue

for (let inum=1; inum <= 20; inum++) {
    if(inum == 8)
    {
        console.log('Found Number: ',inum)
        break
    }
     
}











