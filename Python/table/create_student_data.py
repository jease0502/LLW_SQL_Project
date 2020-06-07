#!/usr/bin/env python
#coding=utf-8
import random
import table.create_date as create_date

class create_student_data():

    def __init__(self):
        self.Student_id = self.create_student_id()
        self.Department , self.College = create_date.create_date().creat_college_and_creat_department()
        self.Grade = create_date.create_date().creat_grade()
        self.Class = self.Department + self.Grade + create_date.create_date().creat_class()
        self.Name = create_date.create_date().creat_name()
        self.Email = create_date.create_date().create_email()
        #self.Password = create_date.create_date().creat_password()
        self.Password = 0
        self.Gender = create_date.create_date().create_gender()
        self.Credit = 0

    def create_student_id(self):
        id_head_limit = ["M","D","E"]
        id_head = random.choice(id_head_limit)
        id_middle_limit = ["08","07","06","05","04","03"]
        id_middle = random.choice(id_middle_limit)
        Number = "0123456789"
        randomNumber = "".join(random.choice(Number) for i in range(5))
        student_id = (id_head + id_middle + randomNumber)
        return student_id