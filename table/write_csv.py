import csv
import time

class write_csv():

	def create_csv():
		t = time.localtime()
		result = time.strftime("%m%d%Y%H%M%S",t)
	    path = result + ".csv"
	    with open(path,'wb') as f:
	        csv_write = csv.writer(f)
	        csv_head = ["Class","Name","Code","Credit","Haveto"]
	        csv_write.writerow(csv_head)


	def write_csv():
	    path  = ".csv"
	    with open(path,'a+') as f:
	        csv_write = csv.writer(f)
	        data_row = ["1","2"]
	        csv_write.writerow(data_row)

	def read_csv():
	    path = "aa.csv"
	    with open(path,"rb") as f:
	        csv_read = csv.reader(f)
	        for line in csv_read: