//  Write a JavaScript program to find the area of a triangle where three sides are 5, 6, 7.  

side1 = 5;
side2 = 6;
side3 = 4;


// Calculate the semi-perimeter of the triangle

let sides = (side1 + side2 + side3) / 2

// Usee Heron's formula to calculate the area of the triangle
let area = Math.sqrt(sides + ((sides-side1)* (sides-side2)*(sides-side3)));
console.log(`Area of the Triangle: ${area}`);

