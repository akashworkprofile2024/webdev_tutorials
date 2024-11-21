// Write a JavaScript program to remove a character at the specified position in a given string and return the modified string. 


 function rev_pos(str,char_pos)
{
    //   Extract the Substring from the Beginning of str
    part1 = str.substring(0,char_pos);

    // Extract the substring from char_pos + 1 to the end

    part2 = str.substring(char_pos + 1 , str.length);

    // Return the Concatenation of part1 and part2
    return "Python: " + (part1+part2)
}
console.log(rev_pos('python',0))
console.log(rev_pos('python',3))
console.log(rev_pos('python',2))
console.log(rev_pos('python',4))
