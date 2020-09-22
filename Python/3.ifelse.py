#T==================ipe data Boolean==================
angka1 = 10
angka2 = 20
text = "wkwkwk"

#print(text.isalnum())

#T==================If else==================
# if angka1 == angka2: #==, >, <
#     print('Betul angka 1 lebih gedee')
#     print('Angka satunya adalah ',angka1)
# else:
#     print('Salah bro')


#T==================Logic Input==================

# uang = input("Uang mu berapa ? ")
# utang = 1000000

# if int(uang) < utang:
#     print('kurang bosss')
# elif int(uang) == utang:
#     print('makasih udah bayar')
# else:
#     print('kelebihan bosss, nih kembalian ', int(uang) - utang )


#==================Logic Operator Lebih dari 1 syarat (LOGICAL OPERATOR)==================
"""
    and or not
    & | != == ===
"""

# syarat1 = True
# syarat2 = False

# if syarat1 & syarat2:
#     print('bener')
# else:
#     print('salah')

#==================Mencari Jodoh==================

tamu = "pria"
baik = True
rajin = False

if baik & rajin:
    if tamu == "pria":
        print('kita nikah yuk!')
    else:
        print('kita jadi saudara')
else:
    print('pergi sana')