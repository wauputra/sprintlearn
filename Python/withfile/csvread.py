import csv

rows = []

# Kasih nama variable
with open('MOCK_DATA.csv','r') as csvfile:
    # csvreader = nama modul dari csv
    # csvreader = csv.reader(csvfile)
    csvreader = csv.DictReader(csvfile)
    # for row in csvreader:
    #     rows.append(row)

    # METODE LIST
    rows = list(csvreader)
    
    # UNTUK HITUNG JUMLAH
    print('Total baris : ', csvreader.line_num)

# CETAK SEMUA BARIS
# print(rows)


# LOOP supaya bagus

for row in rows:
    print(row['first_name'] + "-" + row['last_name'])