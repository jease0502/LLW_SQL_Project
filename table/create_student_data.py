import random
from create_date import create_date

class create_student_data(create_date):

    def __init__(self, name):
        self.College = create_date.creat_college()
        self.Student_id = create_student_id()
        self.Department = create_date.creat_department()
        self.Class = create_date.creat_class()
        self.Grade = create_date.creat_grade()
        self.Name = create_date.creat_name()
        self.Email = create_date.create_email()
        self.Password = create_date.creat_password()
        self.Gender = create_date.create_gender()
        self.Credit = 0

    def create_student_id(self):
        id_head_limit = ["M","D","E"]
        id_head = random.choice(id_head_limit)
        id_middle_limit = ["08","07","06","05","04","03"]
        id_middle = random.choice(id_middle_limit)
        Number = "0123456789"
        randomNumber = "".join(random.choice(Number) for i in range(5))
        student_id = id_head + id_middle + randomNumber
        return student_id