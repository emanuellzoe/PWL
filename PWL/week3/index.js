//1 pertemuan 3
//spread operator
// const k1 = ['ayam', 'bebek', 'burung']
// const k2 = ['serigala', 'harimau', 'singa']
// const k3 = ['katak', 'kodok', 'kadal']

// const hewan = [...k1, ...k2, ...k3]
// document.getElementById('app').innerHTML = hewan

// const p1 = [34,45,12,13]
// const p2 = [67,89,90]
// const p3 = [11,22,33,44]

// const angka = Math.max(...p1, ...p2, ...p3)
// document.getElementById('app').innerHTML = angka


// 12
import { merek, warna } from './mobil.js';
import j from './jw.js';
let ket_mobil = `Merek mobil: ${merek}, Warna mobil: ${warna}`;
document.getElementById('app').innerHTML = ket_mobil;
document.getElementById('app').innerHTML = j()