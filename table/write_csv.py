import csv
import time

class write_csv():

	def __init__(self):
		t = time.localtime()
		t_result = time.strftime("%m%d%Y%H%M%S",t)
		self.filename =  'date/' + t_result + ".csv"

	def create_student_data_csv(self):
		path = self.filename
		writefile = open(path,'w',newline = '')
		csv_head = ["Student_id","College","Department","Class","Grade","Name","Email","Password","gender","Credit"]
		writer = csv.writer(writefile).writerow(csv_head)

	def write_student_data_csv(self,date):
		path  = self.filename
		writefile = open(path,'a',newline = '')
		writer = csv.writer(writefile).writerow(date)


	def read_csv(self):
		path = self.filename
		with open(path,"r") as f:
			csv_read = csv.reader(f)
			for line in csv_read:
				print(line)

