#!/usr/bin/env python
#coding=utf-8
import table.create_date as create_date
import random


class crate_teacher_table():

    def __init__(self):
        self.Teacher_id = self.create_teacher_id()
        self.Name = create_date.create_date().creat_name()
        self.Password = 0
        self.Department , self.College = create_date.create_date().creat_college_and_creat_department()
        self.Class = create_date.create_date().creat_class()
        self.Status = self.create_status()

    def create_teacher_id(self):
        id_head = "T"
        id_middle_limit = ["08","07","06","05","04","03","02","01","00"]
        id_middle = random.choice(id_middle_limit)
        Number = "0123456789"
        randomNumber = "".join(random.choice(Number) for i in range(2))
        student_id = (id_head + id_middle + randomNumber)
        return student_id

    def create_status(self):
    	status_limit = ["教授","副教授","助理教授","職員"]
    	status = random.choice(status_limit)
    	return status
