# ========== MODUL ==========
# import function as fungsi
from fungsi import akuAdalah
import datetime

print(akuAdalah('odading'))

# ========== BUILT IN MODLE ==========
# Built in Module 
sekarang = datetime.datetime.now()
duatahunlalu = datetime.datetime(2018,1,1)
print(sekarang)
print(duatahunlalu)

print(duatahunlalu.strftime("%B %Y"))

# ========== LOCAL dan GLOBAL VARIABLE ==========
# Tidak bisa mengedit global variable dalam fungsi

name = "wau" #Global variable

def cetakNama():
    name2 = 'putra' # Tidak bisa diambil karena local
    global name
    name = name + " globalll "
    print('ini diakses dari dalam :  '+name)

cetakNama()
print('Ini diakses dari luar : '+name)


# ========== RAISE ==========
# untuk debug 

try:
    raise Exception('ada yg salah nih')
except:
    print('keknya ada yg salah nih')