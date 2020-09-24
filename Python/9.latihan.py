# Latihan Game Tamagochi


name = input("Siapa nama monstermu ? ")
monster = {"nama": name,"power": 100}


def gameMulai():
    pilihan = input(monster['nama']+" ngapaian? 1.Makan, 2.Lihat Status, 3. Tidur, 4. Keluar ")
    if(pilihan=="1"):
        mulaiMakan()
    elif(pilihan=="2"):
        lihatStatus()
    elif(pilihan=="3"):
        mulaiTidur()
    else:
        mulaiKeluar()

    
def mulaiMakan():
    print("Mipan zuzuzu zuzuzu, Mipan Nyam nyam nyam")
    monster['power'] += 100
    gameMulai()

def mulaiTidur():
    print("Hoaaam, zzzzzzzzzz")
    monster['power'] += 50
    gameMulai()
    
def lihatStatus():
    print("ini adalah kondisi monstermu ",monster['power'])
    gameMulai()

def mulaiKeluar():
    print("Bye bye")



gameMulai()