// Write a JavaScript program to create a new string from a given string by changing the position of the first and last characters. The string length must be broader than or equal to 1.


// Define a function named first_last that takes a parameter str1

function first_last(str1){
 
    // check if the length of str1 is less than or equal to 1
    if(str1.length <= 1)
    {
        return str1;
    }

    // Extract the substring from the second character to the second_to_last character of str1

    mid_char = str1.substring(1, str1.length -1 );
    
    // Return the last character of  str1 followed by mid_char and then first character of str1 

    return (str1.charAt())
}