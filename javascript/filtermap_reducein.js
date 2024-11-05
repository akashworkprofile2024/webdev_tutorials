
const lang = ['c++','pythoon','Ruby','Html']


const values = lang.forEach((item) => {
    console.log(item);
    return item
})

// console.log(values) // ForEach Doesn't retur nany value


// Filtering
console.log('\nFiltering')
const mynum = [1,2,3,4,5,6,7,8,9,10]

const filternum = mynum.filter((num) => num > 4)
console.log(filternum,'\n')


// Filtering using arrow function scope
console.log('\nFiltering using arrow function scope')
const filternum1 = mynum.filter((storenum)=>{
    return storenum > 4
})
console.log(filternum1)


// 