// Write a JavaScript program to create a new string from a given string by changing the position of the first and last characters. The string length must be broader than or equal to 1.

function fl(str){
    // Check if the length of str is less than or equal to 1
    if(str.length <=1){
        // If true, return str as is
        return str;
    }

    // extract the substring from the second character to the second-to-last character
    mid_char = str.substring(1,str.length -1)

    // Return the last character to str followed by mid char
    return(str.charAt(str.lr))
}