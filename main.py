#!/usr/bin/env python
#coding=utf-8

from table.create_student_data import create_student_data
from table.crate_teacher_table import crate_teacher_table

from table.write_csv import write_csv
import os

stu1 = create_student_data()
st_csv = write_csv()

st_csv.create_student_data_csv()
for i in range(100):
	stu1 = create_student_data()
	dates = [stu1.Student_id,stu1.College,stu1.Department,stu1.Class,stu1.Grade,stu1.Name,stu1.Email,stu1.Password,stu1.Gender,stu1.Credit]
	st_csv.write_data_csv(dates)
#st_csv.read_csv()

tea1 = crate_teacher_table()
tea1_csv = write_csv()

tea1_csv.create_teacher_data_csv()
for i in range(100):
	tea1 = crate_teacher_table()
	dates = [tea1.Teacher_id,tea1.Name,tea1.Password,tea1.Department,tea1.College,tea1.Class,tea1.Status]
	tea1_csv.write_data_csv(dates)
tea1_csv.read_csv()