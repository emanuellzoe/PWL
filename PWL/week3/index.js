//1 pertemuan 3
//spread operator
const k1 = ['ayam', 'bebek', 'burung']
const k2 = ['serigala', 'harimau', 'singa']
const k3 = ['katak', 'kodok', 'kadal']

const hewan = [...k1, ...k2, ...k3]
document.getElementById('alpa').innerHTML = hewan

const p1 = [34,45,12,13]
const p2 = [67,89,90]
const p3 = [11,22,33,44]

const angka = [p1, p2, p3];
const NilaiTerbesar = angka.map(arr => Math.max(...arr))
document.getElementById('beta').innerHTML = `Nilai terbesar: ${NilaiTerbesar.join(', ')}`


// 2
// import { merek, warna } from './mobil.js';
// import j from './jw.js';
// let ket_mobil = `Merek mobil: ${merek}, Warna mobil: ${warna}`;
// document.getElementById('app').innerHTML = ket_mobil;
// document.getElementById('app').innerHTML = j()