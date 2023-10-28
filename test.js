/* Simple bracketMatcher 
Bracket Matcher
Have the function BracketMatcher(str) take the str parameter being passed and return 1 if the brackets are correctly matched and each one is accounted for. Otherwise return 0. For example: if str is "(hello (world))", then the output should be 1, but if str is "((hello (world))" the the output should be 0 because the brackets do not correctly match up. Only "(" and ")" will be used as brackets. If str contains no brackets return 1. 
*/
function BracketMatcher(str) { 
  let longitud = str.length;
  var aux = 0;
  var band1 = 0;
  var band2 = 0;
  while (longitud > aux) {
    if(str[aux]=='('){
      band1++;
      band2--;
    }
    if(str[aux]==')'){
      band1--;
      band2++;
    }
    if(band1==-1){
      return 0
    }
    aux++;
  }
  if(band1==band2 && band1 ==0)
    return 1;
  // code goes here  
  return 0; 

}
   
// keep this function call here 
console.log(BracketMatcher(readline()));

/* Number Encoding
Have the function NumberEncoding(str) take the str parameter and encode the message according to the following rule: encode every letter into its corresponding numbered position in the alphabet. Symbols and spaces will also be used in the input. For example: if str is "af5c a#!" then your program should return 1653 1#!.
Examples
Input: "hello 45"
Output: 85121215 45
Input: "jaj-a"
Output: 10110-1 */

function NumberEncoding(str) {
  
  let longitud = str.length;
  var salida = "";
  var aux = 0;
  while (longitud > aux) {
    let ascii = str.toUpperCase().charCodeAt(aux);
    if(ascii>=65 && ascii<=90){
      var posletra = ascii-64; 
      salida += posletra;
    }else{
      salida += str[aux]
    }
    aux++;
  }
  // code goes here
   
  return salida; 
}
   
// keep this function call here 
console.log(NumberEncoding(readline()));
