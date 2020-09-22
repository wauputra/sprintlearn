# ============= SEQUENCES ============

# ============= LIST ============
# adalah kumpulan beberapa data dalam 1 variable
# mirip array

orang = ['wau','putra','wauputra','wahyu']
umur = [10,30,100,5,7]
mixed = [1,'text','wkwkwk',0.7]

print(mixed)
print('manggil wkwkkw',mixed[2])

# menambahkan
orang.append('komeng')
print(orang)

#  edit
orang[1] = 'putraaaa'
print(orang)

# hapus
del orang[2]
print(orang)

# ============= TUPPLES ============
# List yg sifatnya imutable/ tidak bisa diganti / read only
# Sifatnya permanent

sifat = ('emosian','galak','baik','datar')
print (len(sifat[2]))

print(list(sifat))

# ============= DICTIONARY ============
# Seperti array associative

data = {
    'name' : 'wahyu',
    'age' : '22',
    'hobby' : 'ngoding'
}

data['nama'] = 'Wauputra'
data['mimpi'] = 'Bikin perusahaan'
del data['hobby']

print(data)

# Looop key dan value
for key,value in data.items():
    print(key + ' - ' + value)


# ============= Nested Dictionary ============
# Seperti array associative

data2 = {
    1 : {
        'nama' : 'wauputra',
        'umur' : '22'
    },
    2 : {
        'nama' : 'wahyu',
        'umur' : '23'
    }
}

print(data2)
print('umur wahyu '+data2[2]['umur'])

# Loop semua
for key, value in data2.items():
        print("Keynya : "+str(key))
        for key2 in value:
            print(key2+' - '+ value[key2])

# ============= SET ============

organisasi = {'wahyu','adi','putra'}
organisasi.add('wauputra')
organisasi.remove('adi')

print('organisasi : ',organisasi)

# Operasi Matematika

angka1 = {1,2,3,4,5}
angka2 = {4,5,6,7,8}

print(angka1 | angka2)
print(angka1 & angka2)
print(angka1 - angka2)