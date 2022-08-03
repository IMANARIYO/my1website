// document.write("<h1>hello from javascript<br></h12>");
// // console.log("hello script");

//variables
// var fname="jean paul"
// var lname="kanyamahanga"
// document.write(fname+"<br> \n"+lname);
// var salary=2000;
// var vat=0.38;
// var net=salary-salary*vat;
// var decision=(net<2000)?"undersalary<br>":"over salary";
// document.write(fname+" "+lname+" with salary:" +net+" is "+decision);
// var d = new Date();
// theday = d.getDay();
// document.write(d);
//     function show_prompt()
// {var name=prompt("please  enter your name","harry potter");
// if(name!=null&&name!=" "){ document.write("hello"+name+"!how are you today?");
    
//     var num1 = parseInt(prompt('Enter the first number '));
//     var num2 = parseInt(prompt('Enter the second number ')); 
//     var sum = num1 + num2; 
//     document.write(sum);
// }
//  }


/* <input type="button"onclik=" alert()"value="show promt message"/> */
// switch(5)
// {
// case 5:
//     document.write("finally friday");
// break;
// case 6:
//     document.write("super saturday");
// break;
// case 0:
//     document.write("sleep sunday");
// break;
// defoult:
// document.write("i mlooking forward to this weekend!");
// }
// alert("DO YOU WANT TO CONTINUE?",ANY);
var i=0;

do{
  document.write("the number is "+i);
  document.write("<br/>");
  i++;
}
while(i<=5);
var num1 = parseInt(prompt('Enter the first number '));
     var num2 = parseInt(prompt('Enter the second number ')); 
  var sum = num1 + num2; 
   
  document.write("the sum is"+sum);
  document.write("<br/>the product is"+(num2*num1));
  document.write("<br/>the  diffrenceis"+(num2-num1));
  document.write("<br/>the division is"+(num2/num1));