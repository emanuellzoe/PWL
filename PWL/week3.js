//1
// const names = ["Andi", "Budi", "Tono", "Joko", "Joni", "Jono"];
// let tampung = "";

// for(let i=0; i<6; i++)
// {
    
//     tampung += names[i] + ", ";
// }

// document.getElementById('app').innerHTML = tampung;

const mobil = [
    {merek : "Toyota", jum_kabin : 2, nama : "Supra"},
    {merek : "Honda", jum_kabin : 4, nama : "Civic"},
    {merek : "Lamborghini", jum_kabin : 2, nama : "Aventador"},
]
 
let tampung = "<table border='1'><tr><th>Merek</th><th>Jumlah Kabin</th><th>Nama</th></tr>";

for(let i=0; i<mobil.length; i++)
{
    tampung += "<tr><td>" + mobil[i].merek + "</td><td>" + mobil[i].jum_kabin + "</td><td>" + mobil[i].nama + "</td></tr>";
}
document.getElementById('app').innerHTML = tampung;
