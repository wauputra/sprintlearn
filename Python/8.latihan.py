# LATIHAN BUAT GAME SIMPLE

player1 = {"name":"wauputra","power":100}
player2 = {"name":"Wahyu","power":250}

def train(player):
    player['power'] += 100

def attack(penyerang,ygdiserang):
    if(penyerang['power'] > ygdiserang['power']):
        print('Selamat '+penyerang['name']+' kamu telah mengalahkan '+ygdiserang['name'])
    else:
        print('Maaf '+penyerang['name']+' kamu gagal mengalahkan '+ygdiserang['name'])

train(player1)
train(player1)
attack(player1,player2)