import json

data = {}
data['member'] = [
    {'nama':'wauputra','skill':'terbang','power':'50',},
    {'nama':'wahyu','skill':'ngilang','power':'70',},
    {'nama':'putra','skill':'makan','power':'80',},
]

with open('member.json','w') as memberfile:
    json.dump(data,memberfile)


with open('member.json','r') as memberfile:
    data = json.load(memberfile)

    for member in data['member']:
        print('Namanya adalah '+member['nama']+' skillnya '+member['skill'])