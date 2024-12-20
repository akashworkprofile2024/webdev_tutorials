function person(fname,lname,age,email){
      this.fname = fname,
      this.lname = lname,
      this.age = age,
      this.email = email
}

// CONST A PERSON OBJECT
const emp1 = new person('John','Foster',50,'john.foster@gmail.com')
const emp2 = new person('Riya','Das',25,'riya.das@gmail.com')

// DISPLAY VALUES 
console.log('Fname: ',emp1.fname+" "+ 'Lname: ',emp1.lname,'\n');
console.log('Fname: ',emp2.fname+" "+ 'Lname: ',emp2.lname,'\n');

// ADDING A PROPERTY TO AN OBJECT
// person.nationality = "English";


// CONSTRUCTOR FUNCTIONS METHODS

function emplist(emp_fname,emp_lname,emp_age,emp_email){
      this.emp_fname =  emp_fname;
      this.emp_lname =  emp_lname;
      this.emp_age =  emp_age;
      this.emp_email =  emp_email;
      this.fullname = function(){
            return this.emp_fname+" "+this.emp_lname
      };
}

const emp3 = new emplist('Rahul','Sharma',25,'rahul.sharma@gmail.com')

console.log(emplist.fullname());








