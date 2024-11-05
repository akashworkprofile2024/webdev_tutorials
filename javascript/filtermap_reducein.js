
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


// Filtering using arrow function if else condition
console.log('\nFiltering using arrow function if else condition')

const newnum = []

mynum.forEach((num)=>{
    if(num > 4){
        newnum.push(num)
    }
})

console.log(newnum)


// Filter basic
console.log('\nBasic Filter Operation')
const books = [
    {title: 'Book One', genre: 'Fiction', publish: 1981},
    {title: 'Book Two', genre: 'Thriller', publish: 2000},
    {title: 'Book Three', genre: 'Mystery', publish: 1999},
    {title: 'Book Four', genre: 'Mystery', publish: 2011},
    {title: 'Book Five', genre: 'Detective', publish: 2024}

]


let userbooks = books.filter((bk) => {
       return bk.genre === 'Mystery' 
} )
userbooks = books.filter((bk) => {
    return bk.publish <= 2000 && bk.genre === 'Fiction'
})
console.log(userbooks)


 
// add number with array elements using map
console.log('\nadd number with array elements using map')
const addnum = mynum.map((number) => {
    return number + 10
})
console.log(addnum)


// map using chaining
console.log('\nMap Using Chaining')
const chanfunction = mynum.map((mulnum)=> mulnum * 10).map((addnum1)=>addnum1 + 1)

console.log('Original Number: ',mynum,'\n',chanfunction)

