
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

// //7
// let nick_name = "Calvin"
// let age = 20

// let person = 
// {
//     nick_name,
//     age
// }

// // console.log("Person: ", person, "Name: ", person.nick_name, "Age: ", person.age)

// // console.log(person['nick_name'])
// // console.log(person['age'])


// //8
// let isArray = ['Red', "yellow"]
// console.log(isArray)
// isArray.push('Blue')
// console.log(isArray)
// isArray.pop()
// console.log(isArray)
// isArray.push(1)
// console.log(isArray)

// //9
// function rectangle(w,h)
// {
//     return w * h
// }
// console.log(rectangle(10,5))

// const rectangle2 = function(wd,hg)
// {
//     return wd * hg
// }
// console.log(rectangle2(7,3))


// //10
// const rectangle = (h,w) =>
// {
//     return h * w
// }
// console.log(rectangle(10,5))

// const rec = (h,w) => h * w //jika hanya 1 baris return bisa seperti ini
// console.log(rec(7,3))  

// //11
// var person =
// {
//     nname : "john",
//     sisters : ["jane", "jill", "udin"],
//     showData: function()
//     {
//         this.sisters.map(
//             function(sister)
//             {
//                 console.log(this.nname + " has a sister named " + sister)
//             }.bind(this)
//         )
//     },
// }
// person.showData()

// var person2 = 
// {
//     nname : "john",
//     sisters : ["jane", "jill", "udin"],
//     showData: function()
//     {
//         this.sisters.map(
//             (sister) =>
//             {
//                 console.log(`${sister} is a sister of ${this.nname}`)
//             }
//         )
//     },
// }
// person2.showData()



// //12
// const rec = (h=1, w=1) => {return h * w}

// console.log(rec())
// console.log(rec(10))
// console.log(rec(10,5))


// //13
// const Mess = (Nama, usia) =>
// {
//     return{
//         Nama,
//         usia
//     }
// }

// const pesan = Mess('Calvin', 20)
// console.log(pesan.Nama)

// //14
// let person = {
//     first_name: "John",
//     last_name: "Doe",
// }
// let { first_name: fname, last_name: lname } = person
// document.getElementById('app').innerHTML = `${fname} ${lname}`
