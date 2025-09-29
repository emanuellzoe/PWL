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

const today = {
    day: 1,
    name: "Monday"
}

const harilain = {
    day: 5,
    name: "Friday"
}

//Ternary
new Date().getDay() === today.day ? (console.log(`Today is ${today.name}`)) : (console.log ("NotToday"))

//Ternary single condition
new Date().getDay() === today.day
? (console.log(`Today is ${today.name}`))
: (console.log (`Today is not ${today.name} and not ${harilain.name}`))

//Multiple condition
new Date().getDay() === today.day
? (console.log(`Today is ${today.name}`))
: new Date().getDay() === harilain.day
    ? (console.log(`Today is ${harilain.name}`))
    : (console.log (`Today is not ${today.name} and not ${harilain.name}`))

    



