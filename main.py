#!/usr/bin/env python
#coding=utf-8

from table.create_student_data import create_student_data
from table.write_csv import write_csv
import os

stu1 = create_student_data()
st_csv = write_csv()

st_csv.create_student_data_csv()
for i in range(100):
	stu1 = create_student_data()
	dates = [stu1.Student_id,stu1.College,stu1.Department,stu1.Class,stu1.Grade,stu1.Name,stu1.Email,stu1.Password,stu1.Gender,stu1.Credit]
	st_csv.write_student_data_csv(dates)
#st_csv.read_csv()