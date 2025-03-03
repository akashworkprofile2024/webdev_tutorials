function diff(n){
    // Check if n is less than or equal to  13
    if(n<=13){
        // If true , return the difference between 13 and n
        return 13 - n; 
    }else{
        // If false, return the double of the difference between n and 13
        return(n - 13) * 2;
    }
}

console.log(diff(32));
console.log(diff(11));