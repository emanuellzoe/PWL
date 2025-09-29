const names = ["Andi", "Budi", "Tono", "Joko", "Joni", "Jono"];
let tampung = "";
for(let i=0; i<6; i++)
{
    
    tampung += names[i] + ", ";
}
document.getElementById('alpa').innerHTML = tampung;

// const mobil = [
//     {merek : "Toyota", jum_kabin : 2, nama : "Supra"},
//     {merek : "Honda", jum_kabin : 4, nama : "Civic"},
//     {merek : "Lamborghini", jum_kabin : 2, nama : "Aventador"},
// ]
 
// // let tampung = "<table border='1'><tr><th>Merek</th><th>Jumlah Kabin</th><th>Nama</th></tr>";

// // for(let i=0; i<mobil.length; i++)
// // {
// //     tampung += "<tr><td>" + mobil[i].merek + "</td><td>" + mobil[i].jum_kabin + "</td><td>" + mobil[i].nama + "</td></tr>";
// // }
// // document.getElementById('app').innerHTML = tampung;

// let ket = "<table border='1'><tr><th>Merek</th><th>Jumlah Kabin</th><th>Nama</th></tr>";
// for (let x in mobil)
// {
//     ket += "<tr><td>" + mobil[x].merek + "</td><td>" + mobil[x].jum_kabin + "</td><td>" + mobil[x].nama + "</td></tr>";
// }
// document.getElementById('app').innerHTML = ket;


// let buahan = new Map([
//     ["Apel", 5000],
//     ["Jeruk", 8000],
//     ["Mangga", 10000],
//     ["Duku", 15000],
//     ["Durian", 20000],
//     ["Salak", 12000]
// ])

// document.getElementById('app').innerHTML = buahan.get("Mangga") 

// // for (let b of buahan.values())
// // {
// //     document.getElementById('app').innerHTML = b
// // }

// // for (let b of buahan.keys())
// // {
// //     document.getElementById('app').innerHTML = b
// // }

// // for (let b of buahan)
// // {
// //     document.getElementById('app').innerHTML = b
// // }


// let map = new Map([
//     ['1', 'String'],
//     [1, 'Number'],
//     [true, 'Boolean']
// ])

// console.log(map.get(1))

// let obj = {
//     name : 'Andi',
//     age : 20,
// }

// let mp = new Map(Object.entries(obj))
// console.log(obj['name'])


// let set = new Set();

// let john = { name : "John"};
// let pete = { name : "Pete"};
// let mary = { name : "Mary"};

// set.add(john);
// set.add(pete);
// set.add(mary);


// let dara = { name : "Dara"};
// set.add(dara);

// console.log(set.size)

// for (let usr of set)
// {
//     console.log(usr.name)
// }



//filter data
// const usia = [32, 15, 19, 12, 25, 16, 28];

// const cek_usia = (u) => u < 20
// const res = usia.filter(cek_usia)

// const cek = cek_usia(25)

// console.log(cek)


