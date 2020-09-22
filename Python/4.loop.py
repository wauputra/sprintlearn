# ================= While Loop =================
# Selama syaratnya memenuhi maka lakukan sesuatu

count = 0

while count<5:
    print("Alhamdulillah nikah")
    count = count+1
else: # dijalankan ketika berhenti
    print("Selesai deh")

# ================= For In =================
# Pengulangan

text = 'python'
orang = ['wau','putra','wahyu']

for nama in orang:
    print('nama namanya adalah',nama)

for huruf in text:
    print('huruf ',huruf)

# ================= Loop bercabang =================
a = 1

while a < 5:
    b = 0;
    while b < a:
        print('*', end='')
        b = b+1
    print()
    a = a+1

# for in system perkalian
for i in range(1,5):
    for j in range(1,5):
        c = i*j
        print(c,end=" ")
    print()