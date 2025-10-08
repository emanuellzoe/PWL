
//Nomor 1
// function greet(name, callback) {
//     console.log("Halo, " + name);
//     callback();
// }

// function welcome() {
//     console.log("Selamat datang!");
// }

// greet("Moona", welcome);

//Nomor 2
// console.log("Step 1");

// setTimeout(() => {
//     console.log("Step 2");
//     setTimeout(() => {
//         console.log("Step 3");
//     }, 3000);
// }, 2000);

//Nomor 3
// function cekAngka(num) {
//     return new Promise((resolve, reject) => {
//         if (num % 2 === 0) {
//             resolve("Angka genap");
//         } else {
//             reject("Angka ganjil");
//         }
//     });
// }
// cekAngka(7)
//     .then(result => console.log(result))
//     .catch(error => console.log(error));
// cekAngka(4)
//     .then(result => console.log(result))
//     .catch(error => console.log(error));

//Nomor 4
// function getData() {
//     return new Promise((resolve) => {
//         setTimeout(() => {
//             resolve("Data ditemukan");
//         }, 2000);
//     });
// }
// async function showData() {
//     try {
//         const result = await getData();
//         console.log(result);
//     } catch (error) {
//         console.log(error);
//     }
// }
// showData();



