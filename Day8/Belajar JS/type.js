//Belajar Type Varaibel Var,let, dan const
// const a = 5;
// var b = "Dana";
// let c = true;

// //let b = 5;
// //const a = 6;
// console.log(b);
// console.log(b);
// console.log(a);

// const jenis_kelamin = [
//     "L",
//     "P"
// ]
// jenis_kelamin.push("Bencong");
// jenis_kelamin.pop("L"[0]);
// console.log(jenis_kelamin);

// //type/jenis data
// var var_string = "Dana";
// var var_number = 6;
// var var_bollean = true;
// var var_optional = null;

//Logic System (&&, ||, !)
// if ("dana" == "dan" && 5 === 5) 
//{
//     console.log("Benar");
// } else {
//     console.log("salah");
// }

//Array
// var arr = [];

// arr[0] = 1;
// arr[10] = "20"
// console.log(arr);



// //soal Buat Array Bersarang
// //Cara mas Ghoza
// var prov = [

// ];
// var Kab = [];
// var Kec = [];
// var Kel = [];

// // var array1 = [1, 2, 3, 4];
// // var array3 = [5, 6, 7, 8, 9];
// // Array.prototype.push.apply(array1, array3);
// // console.log(array1);

// //Cara Ku
// var prov = [
//     "Provinsi  Jawa Tengah", [
//         "Kabupaten Pati ", [
//             "Kecamatan Batangan ", [
//                 "Kelurahan Kedalon"
//             ]
//         ]
//     ]
// ]
// console.log(prov);

// //Cara mas Roni
// var arr2 = [
//     'Jawa Tengah', [
//         "Pati", [
//             "Batangan", [
//                 "Kedalon"
//             ]
//         ]
//     ]
// ]
// console.log(arr2);

//Object Isinya satu saja
// var Dosen = {
//     'Nama': "Susilo Wahyu Bagaskoro",
//     'Sifat': "Pemarah",
//     'Alamat': "Jalan Menco City no. 16",
//     'Umur': 35,
//     'Jabatan': "Wakil Dekan 1"
// };
// console.log(Dosen);
// console.log(Dosen.Nama);

// --------- Isi Object Banyak(Dibungkus didalam array) ---------------
// var Dosen = [
//     {
//         'Nama': "Susilo Wahyu Bagaskoro",
//         'Sifat': "Pemarah",
//         'Alamat': "Jalan Menco City no. 16",
//         'Umur': 35,
//         'Jabatan': "Wakil Dekan 1"
//     },
//     {
//         'Masa Pensiun': "5 Tahun",
//         'Sifat': "Pemarah, ",
//         'Alamat': "Jalan Kedalon City no. 16",
//         'Umur': 45,
//         'Jabatan': "Wakil Dekan 1"
//     }
// ];
// console.log(Dosen);
// console.log(Dosen[1].Umur);


// <--------- Penggunaan push,join,pop,forEach,map --------------->
// var non_numerik = [
//     "0",
//     "1",
//     "2"
// ]

// console.log("Hasil Join :" + non_numerik.join("5"));
// console.log("Hasil Push :" + non_numerik.push("dana"));



// <--------- Function --------------->
var warna = [
    "Merah",
    "Jingga",
    "Kuning",
    "Hijau",
    "Biru",
    "Nila",
    "Ungu"
];
var sort = warna.sort();
console.log(sort);

var hasil;
function Search(Key, value) {
    for (let i = 0; i < Key.length; i++) {
        if (value == Key[i]) {
            hasil = Key[i];
        }
    }
}
Search(warna, "Hijau");
console.log(hasil);


