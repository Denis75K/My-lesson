"use ctrict"  // современный или строгий режим
/*alert("Привет,");
alert("МИР"); 
*/
/* много-
строчный комментарий*/
//---------------------------------------------
/*let greeting = "Привет, мир!";
// Нотации - comelCase (greetingMessage) snake_case(greeting_message)

alert(greeting);
greeting = "Привет, Все !!!";
alert(greeting);

let goodbye;
alert(goodbye); // - ошибка, значение не задано
goodbye = "Пока, Все";
alert(goodbye);

greeting = goodbye;
alert(greeting);
alert(goodbye);*/

//--------------Константы------------------
//-----------неизменяемая переменная---------

/*const myBirthay = "17.02.1975";

const COLOR_RED = "#F00";
const QUIT_MESSAGE = "Вы уверены что хотите выйти?";
*/

//---------------Типы данных-------------------
/*JS - язык с динамическим типом данных*/

/*let a = 42 //1. Number - число
alert( typeof(a) );
let a1 = Infinity;
let a2 = NaN 

let b = "foo" //2. String - строка
let b1 = 'bar'
let b3 = `foo${b2}`

/*конкатенация - строки складываються через +*/
/*let foobar = "foo" + "bar"

let c = true; // или false - Boolen - булевый/ логический (истина или ложь да или нет)
let d; // undefined - значение не определено
let e = null; // 5. Null - ничего*/

//-----------------преобразование типов

/*let resuit = 2 + "3"; // получим 23 так как 2 приравниваеться к текс
// Строковое
let a = true;
let string = String(a);*/




//Численное
/*let a = "10";
let b = "2";
let result = a / b;
alert(result);
let c = "123abc"
alert(Number(c)); //NaN
let e = Number(null);
let f = Number(true);
let g = Number(false);
let d = Number(undefined);

let result2 = +a + +b;
alert(result2);*/

//Логическое 
/*let a = Boolean(0) //false
let b = Boolean(1) //true
let c = Boolean(-1)//true 

let d = Boolean("abc")//true
let e = Boolean("")//false
let f = Boolean(" ")//true - пробел считается за символ, строка не пустая

let g = Boolean(null)//False
let h = Boolean(undefined)//False
let i = Boolean(NaN)//False*/

let a = 4;
let b = 2;


let result1 = a + b;
let result2 = a - b;
let result3 = a / b;
let result4 = a * b;
let result5 = a % b;

let result6 = a ** b; //возведение в степень

// Использование старого значения переменной
let c = 5;
c = c + 10;
alert(c);
let d = 10;
d += 5;
alert(d);

let i = 0;
i++;
alert(i);
let j = 10;
j--;
alert(j);















