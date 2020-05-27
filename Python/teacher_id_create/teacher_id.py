import csv
import random

with open('DB_Table_course.csv', newline='',encoding="utf-8") as csvfile:

	rows = csv.reader(csvfile)
	teacher_name = []
	for row in rows:
		teacher_name.append(row[8])
teacher_name = set(teacher_name)

def create_teacher_id():
	id_head = "T"
	id_middle_limit = ["08","07","06","05","04","03","02","01","00"]
	id_middle = random.choice(id_middle_limit)
	Number = "0123456789"
	randomNumber = "".join(random.choice(Number) for i in range(2))
	student_id = (id_head + id_middle + randomNumber)
	return student_id

path =  "test.csv"
writefile = open(path,'w',newline = '')
csv_head = ["Teacher_id","Name"]
writer = csv.writer(writefile).writerow(csv_head)

for i in teacher_name:
	if i == '授課教師':
		continue
	writefile = open(path,'a',newline = '')
	date = [create_teacher_id(),i]
	writer = csv.writer(writefile).writerow(date)