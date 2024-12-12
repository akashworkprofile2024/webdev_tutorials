// Immediately Invoked Function Expressions

function expres(){
    console.log(`Normal Function:DB Connected`);

}

expres();


// ==============================
// to remove polluted by the Global scope 
(function expres1() {
    console.log('Normal IIFE: DB Connected');

})();

// ==============================

((name) =>{
    console.log(`Using Arrow Fcuntion in IIFE: DB Connectedd2 to ${name}`)
})('Akash')




