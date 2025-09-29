//1
// const getDay = () => {
//     if (new Date().getDay() === 0) {
//         return "Sunday"
//     }
//     if (new Date().getDay() === 1) {
//         return "Monday"
//     }
//     if (new Date().getDay() === 2) {
//         return "Tuesday"
//     }
//     if (new Date().getDay() === 3) {
//         return "Wednesday"
//     }
//     if (new Date().getDay() === 4) {
//         return "Thursday"
//     }
//     if (new Date().getDay() === 5) {
//         return "Friday"
//     }
//     if (new Date().getDay() === 6) {
//         return "Saturday"
//     }                                    
// }

// document.getElementById("beta").innerHTML = `Today is ${getDay()}`

//2
//(boolean expression) ? true : false
//DATA

// const today = {
//     day: 1,
//     name: "Monday"
// }

// const harilain = {
//     day: 5,
//     name: "Friday"
// }

// //Ternary
// new Date().getDay() === today.day ? (console.log(`Today is ${today.name}`)) : (console.log ("NotToday"))

// //Ternary single condition
// new Date().getDay() === today.day
// ? (console.log(`Today is ${today.name}`))
// : (console.log (`Today is not ${today.name} and not ${harilain.name}`))

// //Multiple condition
// new Date().getDay() === today.day
// ? (console.log(`Today is ${today.name}`))
// : new Date().getDay() === harilain.day
//     ? (console.log(`Today is ${harilain.name}`))
//     : (console.log (`Today is not ${today.name} and not ${harilain.name}`))



//3
// // perbedaan if else dan switch case
// // if else akan mengecek kondisi satu persatu
// // switch case akan langsung menuju ke kondisi yang sesuai
// // switch case lebih efisien jika banyak kondisi

// //contoh switch case
// const day = () => {
//     switch (new Date().getDay()) {
//         case 0:
//             return "Sunday";
//             break;
//         case 1:
//             return "Monday";
//             break;
//         case 2:
//             return "Tuesday";
//             break;
//         case 3:
//             return "Wednesday";
//             break;
//         case 4:
//             return "Thursday";
//             break;
//         case 5:
//             return "Friday";
//             break;
//         case 6:
//             return "Saturday";
//             break;
//         default:
//             return "Not option";
//     }
// }
// document.getElementById("beta").innerHTML = `Today is ${day()}`;

//4
function prosesData(data, callback) {
    let res = data.topUpperCase()
    callback(res)
}
function showRes(output) {
    document.getElementById("beta").innerHTML = `Teks: ${output}`
}
prosesData("hello", showRes)

