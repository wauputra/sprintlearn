# FILE I/O
# https://docs.python.org/3/library/functions.html

# w,
# r = baca
# ,r+
# a+ : nambahkan file
#  adalah option dari library function python
file = open('data.txt','a+')
# file.write('\nthis is wauputra12345 coy')
# file.seek(0)

# text = file.read()

# print(text)


def add_to_list(newtext):
    file.write('\n'+newtext)
    ask_user()

def ask_user():
    add_to_list(input("Mau nulis apa?"))

ask_user()




