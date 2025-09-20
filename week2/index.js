
//1
// console.log('Hello from week 2!');

// alert('Hello from week 2!');

// //akan mengeluarkan seperti biasa menggunakan getElementById
// // document.getElementById('app').innerHTML = `<p>Hello from week 2!</p>`;


//2
// //akan mengeluarkan tag html sebagai text
// document.getElementById('app').textContent = `<p>Hello from week 2!</p>`;

//aturan pembuatan variable
//1. tidak boleh spasi (simbol hanya bisa _ dan $)
//2. tidak boleh menggunakan keyword (while, for, if, dll)
//3. tidak boleh diawali 

// let while = 10 //aturan 
// let 4age = //aturan 1
// let firstName = 'John'; //camel case


//3
// //let adalah variable yang nilainya bisa diubah
// let first_name = 'Calvin'
// first_name = 'Joko' //bisa diubah nilainya
// console.log(first_name);

// //nilainya tidak bisa diubah atau immutable
// const PI = 3.14
// PI = 3.141592
// console.log(PI)


//4
// let isChar = "JS"
// let isNumber = 10
// let isDec = 3.14
// let isOnline = true

// let isA = 3
// let isB = 4

// let res = isA + isB
// console.log(res);




//5
// const testLet = () =>
// {
//     let num = 100 //let berlaku local scope
//     {
//         let num = 200
//     }
//     return num
// }

// console.log(testLet())

// // document.getElementById('app').textContent = testLet()

// const testVar = () =>
// {
//     var num = 100 //var tidak berlaku local scope/global scope
//     {
//         var num = 200
//     }
//     return num
// }

// // document.getElementById('app').innerHTML = testVar()
// console.log(testVar())



// //6
// try 
// {
//     const PI = 3.14
//     PI = 3.141592
//     // console.log(PI)

//     const num = 403 / 0
//     console.log(num)
// }
// catch (err)
// {
//     console.log(err)
// }

let nick_name = "Calvin"
let age = 20

let person = 
{
    nick_name,
    age
}

console.log("Person: ", person, "Name: ", person.nick_name, "Age: ", person.age)





