let index = 0
while (index <= 10) {
    console.log(`Value of Index: ${index}`)
    index = index + 2 ;  
}

// While With Array

let myarr = ['Akash','Rahul','Pinky','Rakesh']

let storeindex=0
while (storeindex<myarr.length) {
    console.log(`Value is ${myarr[storeindex]}`)
    storeindex = storeindex + 1;
}
console.log('\n')



// do while Loop

let score = 1

do {
    console.log(`Score is: ${score}`)
    score++
} while (score <= 10);