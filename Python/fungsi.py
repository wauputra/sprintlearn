# =========== FUNCTION ==============


def iniGaris():
    print('---------------')

def akuAdalah(namalu='hamba allah'):
    print('saya adalah '+namalu)

def hitung(a,b):
    print('Jumlah A + b adalah '+ str(a + b))

# iniGaris()
# akuAdalah('wauputraaa')
# iniGaris()
# akuAdalah()

# nilaiA = input('masukin nilai a ')
# nilaiB = input('masukin nilai b ')

# hitung(int(nilaiA),int(nilaiB))

# ============== Return ==============
def kali(c,b):
    d = c*b
    return d

# hasil = kali(20,80)
# print(hasil+70)

# ============== Keywoard Argument ==============
def nyobaKeywoardArg(name,hobby):
    print('Nama saya '+name+' hobby saya adalah '+hobby)

# nyobaKeywoardArg(hobby='ngoding',name='wauputra')


# ============== Args dan Kwargs ==============
def daftarNama(*args):
    for name in args:
        print(name)

# daftarNama('wau','wahyu','adi','wauputra')

# kwargs khusus argument
def daftarHobby(**kwargs):
    for key,value in kwargs.items():
        print(key + ' - '+value)

# daftarNama('wau','wahyu','adi','wauputra')
# daftarHobby(name = 'wau', umur='23', hobby='ngoding')