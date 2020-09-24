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
# cara untuk mencari kesaalahan

    # raise Exception('ada yg salah nih')

try:
    print(j+g)
except:
    print('keknya ada yg salah nih')

import sys
def is_it_linux():
    # fungsi ini hanya untuk linux
    assert('Linux' in sys.platform),'Fungsi ini hanya untuk Linux'

is_it_linux()
print('finish is_it_linux(), os ini adalah '.sys.platform)



