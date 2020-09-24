import csv

rows = [
    {'nama':'wauputra','skill':'terbang','power':'50',},
    {'nama':'wahyu','skill':'ngilang','power':'70',},
    {'nama':'putra','skill':'makan','power':'80',},
]

with open('data.csv','a') as csvfile:
    fields = ['nama','skill','power']
    writer = csv.DictWriter(csvfile,fieldnames=fields)

    writer.writeheader()
    writer.writerow(csvfile,rows)