// =================== Basic ===================

/*
    Ini adalah komentar panjang
*/
document.getElementById("wrap").innerHTML = "Wauputra";

// =================== VARIABLE ===================
// Deklarasi Variable = Ngasih nama ke suatu nilai
var tabunganku = 134234323;
document.getElementById("wrap").innerHTML = "Wauputra "+tabunganku;

// =================== TIPE DATA ===================
// yg diperbolehkan

var x = 10;
var $x = 10;
var _x = 10;

/*
variable semuanya case sensitive, contoh :
var tabunganku != var Tabunganku
*/ 

// Kata kata yg tidak boleh dipakai "reverved words"
// Semua fungsi, method yg sudah digunakan

// Tipe data string 
var myname = "wauputra";
// Tipe data angka
var gaji = 50000.3432;
var hari = 20;

var totGaji = gaji*hari;
myname = "Wahyu Adi Putra";
// Operator Matematika  + - / * %(sisa hasil dari pembagian)

console.log('TIPE DATA | Total gaji '+ myname +' adalah = '+totGaji);

// =================== METODE/ METHOD ===================
var tofix_coba = gaji.toFixed(2);
console.log('METHOD | toFixed gaji '+ tofix_coba);
var toString_coba = hari.toString();
console.log('METHOD | toString hari '+ toString_coba);
var random_string = Math.random();
console.log('METHOD | random hari '+ random_string.toFixed(2));
var min_fungsi = Math.min(1,2,3,4,5);
console.log('METHOD | min '+ min_fungsi);
var max_fungsi = Math.max(1,2,3,4,5);
console.log('METHOD | max '+ max_fungsi );
// round =  membulatkan yg terdekat
var round_coba = Math.round(gaji);
console.log('METHOD | round_coba '+ round_coba );
// ceil = membulatkan keatas
var ceil_coba = Math.ceil(gaji);
console.log('METHOD | ceil_coba '+ ceil_coba );
// ceil = membulatkan kebawah
var floar_coba = Math.floor(gaji);
console.log('METHOD | floar_coba '+ floar_coba );

// lnegth = jumlah character
console.log('METHOD | length '+myname+' '+ myname.length );
// indexof = cari text tertentu
console.log('METHOD | indexOf huruf P pada '+myname+' '+ myname.indexOf("P") );
// search  = mirip indexof
console.log('METHOD | search Adi pada '+myname+' '+ myname.search("Adi") );
// chartAt  = cari huruf pada index tertentu
console.log('METHOD | chartAt ke 3 pada '+myname+' = '+ myname.charAt(1) );
// replace = ubah replace("cari apa","ganti apa")
console.log('METHOD | Replace '+myname+' = '+ myname.replace("Adi","Adiii") );
// substring = mengambil tertentu = TIDAK AMBIL YG TERAKHIR
console.log('METHOD | substring '+myname.substring(1,4) );
// substr = ambil panjang
console.log('METHOD | substring '+myname.substr(1,4) );
// parseInt dan parseFloat
console.log('METHOD | parseInt '+(parseInt("10")+10) );

// =================== FUNGSI ===================
function contohFungsi(){
    console.log('ini contoh fungsi');
}

contohFungsi();

// parameter
function namaKu(parm1,parm2){
    console.log('contoh parameter : '+parm1+' adalah '+parm2);
}

namaKu('Saya','Iron Man');

// return 
function contohReturn(param){ 
    return param;
 }

 console.log(contohReturn('Ini contoh return woy'));

// =================== SCOPE ===================
// Lingkup variable
// Global Variable

var globalVarContoh = 'Ini variable global';
function contohFungsi() {  
    var localVariable = 'Ini Local Variable';
    localJadiGloabl = 'Ini local jadi global'
}

// console.log('localVariable '+localVariable);
console.log(localJadiGloabl);

// =================== ARRAY ===================
// dimulai dengan angka 0
var kotak = ["wahyu","adi","putra","wauputra",1,3];
kotak[4] = "hamba";
kotak[5] = "Allah";

console.log('Manggil array : '+kotak[3]);
console.log('Manggil array all : '+kotak);

// Method array
console.log('Sort array : '+kotak.sort());
// sebaliknya dari sort : 
console.log('Reverse array : '+kotak.reverse());

kotak2 = ["eka","saputri"];
console.log('Gabung array : '+kotak.concat(kotak2));

// length
console.log('contoh length : '+kotak.length);

// Join
console.log('contoh join array : '+kotak.join(" - "));

// splice(MulaiDariMana, berapaElementYangMauDihapus,apaYangMauDitambahkan,apaYangMauDitambahkan)
kotak.splice(2,0,"hambasahaya","nambahlagi");
// untuk hapus
kotak.splice(2,1);
console.log('contoh spllice : '+kotak);
// POP = menghapus nilai bagian terakhir 
kotak.pop();
console.log('contoh pop : '+kotak);
// PUSH = nambahin elemen baru
kotak.push('orang baru');
console.log('contoh pop : '+kotak);
// Shift = hapus nilai bagian awal
kotak.shift();
console.log('contoh shift  : '+kotak);
// Shift = tambah nilai dibagian awal
kotak.unshift('orangBaruLagi');
console.log('contoh unshift  : '+kotak);

// =================== IF dan ELSE ===================
// tipe data boolean
var contohTrue = true;
var contohFalse = false;

var uang = 2500;
var barang = 10000;

console.log('CONTOH IF : '); 

if(uang==barang){
   console.log('Transaksi Berhasil'); 
}else{
   console.log('Transaksi Gagal'); 
}

// Operator Logika : ==, !=, >, <
console.log('OPERATOR LOGIKAN DALAM IF '); 
if(uang>=barang){
    console.log('Uang Anda Cukup'); 
 }else{
    console.log('Uang Anda Kurang'); 
 }

//  DUA SYARAT  : && ||
var programmer = 2500;
var designer = 25000;
var barang = 25000;

 console.log('IF DUA SYARAT '); 
 if(programmer==barang){
     console.log('Uang Programmer Cukup'); 
  }else if(designer==barang){
     console.log('Uang Designer Cukup'); 
  }else{
      console.log('Uang Tidak ada yg cukup');
  }

// =================== SWITCH CASE ===================
// digunakan kalau kasusnya banyak, menguji variable
var namaMu = "Hamba Allah";
console.log('SWITCH CASE, contoh awal namaku : '+namaMu);

switch(namaKu){
    case 'Wahyu':
        console.log('Namanya adalah Wahyu');
        break;
    case 'Adi':
        console.log('Namanya adalah Adi');
        break;
    case 'Putra':
        console.log('Namanya adalah Putra');
        break;
    case 'Wauputra':
        console.log('Namanya adalah Wauputra');
        break;
    default:
        console.log('Engga ada namanya');
        break;
}

// =================== FOR LOOP ===================
console.log('CONTOH FOR LOOP ; ');
//for(mulai;sampai;perpindahan)
for(var i=0;i<5;i++){
    console.log('Ngellop 1-5 : '+i);
}

console.log('CONTOH WHILE LOOP ; ');
// while(syarat) { statment ; perubahan }
var i = 0;
while(i<3){
    console.log('Contoh while loop: '+i);
    i++;
}

// DO WHILE : EKSEKUSI KODE MINIMAL 1 KALI, KALU BETUL LANJUT
console.log('CONTOH WHILE LOOP ; ');

var i = 0;
do{
    console.log('Contoh Do While : '+ i);
    i++;    
}while(i<3);    

// =================== TIPE DATA ===================

// =================== TIPE DATA ===================
// =================== TIPE DATA ===================
// =================== TIPE DATA ===================
// =================== TIPE DATA ===================
// =================== TIPE DATA ===================
// =================== TIPE DATA ===================

