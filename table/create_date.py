#!/usr/bin/env python
#coding=utf-8
import random
class create_date:

    def big5_tw(self):
        # big5第一個字節
        first = random.randint(0xA4, 0xC6)
        # big5第二個字節
        last = random.randint(0x40, 0x7E)

        #組合起來(x為轉成16進位)
        s = f'{first:x}{last:x}'
        #轉換成繁體
        tw = bytes.fromhex(s).decode('big5')
        # 返回
        return tw

    def creat_name(self):
        FIRST_NAME = ['陳', '林', '黃', '張', '李', '王', '吳', '劉', '蔡', '楊', '許','鄭',
    '謝', '郭', '洪', '曾', '邱', '廖', '賴', '周', '徐', '蘇', '葉', '莊', '呂','江',
     '何', '蕭', '羅', '高簡', '朱', '鍾', '施', '游', '詹', '沈', '彭', '胡', '余','盧',
    '潘', '顏', '梁', '趙', '柯', '翁', '魏', '方', '孫', '張簡', '戴', '范', '歐陽',
    '宋', '鄧', '杜', '侯', '曹', '薛', '傅', '丁', '溫', '紀', '范姜', '蔣', '歐', '藍',
    '連', '唐', '馬', '董', '石', '卓', '程', '姚', '康', '馮', '古', '姜', '湯', '汪',
    '白', '田', '涂', '鄒', '巫', '尤', '鐘', '龔', '嚴', '韓', '黎', '阮', '袁', '童',
    '陸', '金', '錢', '邵']
        name1 = self.big5_tw()
        name2 = self.big5_tw()
        first = random.choice(FIRST_NAME)
        name = (first + name1 + name2)
        return name

    def creat_password(self):
        seed = "1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_ =-"
        password = []
        for i in range(8):
            password.append(random.choice(seed))
            get_password = ''.join(password)
        return get_password

    def creat_college_and_creat_department(self):
        college = {'會計學系':'商學院','國際經營與貿易學系':'商學院','國際經營與貿易學系國際企業管理全英語學士班':'商學院','財稅學系':'商學院','合作經濟暨社會事業經營學系':'商學院','統計學系':'商學院','經濟學系':'商學院','企業管理學系':'商學院','行銷學系':'商學院','商學學士學位學程':'商學院',
                    '機械與電腦輔助工程學系':'工程與科學學院','纖維與複合材料學系':'工程與科學學院','工業工程與系統管理學系':'工程與科學學院','化學工程學系':'工程與科學學院','航太與系統工程學系':'工程與科學學院','精密系統設計學士學位學程':'工程與科學學院','應用數學系':'工程與科學學院','環境工程與科學學系':'工程與科學學院','材料科學與工程學系':'工程與科學學院','光電科學與工程學系':'工程與科學學院',
                    '資訊工程學系':'資電學院','電機工程學系':'資電學院','電子工程學系':'資電學院','自動控制工程學系':'資電學院','通訊工程學系':'資電學院','資訊電機學院學士班':'資電學院',
                    '土木工程學系':'建設學院','水利工程與資源保育學系':'建設學院','都市計畫與空間資訊學系':'建設學院','運輸與物流學系':'建設學院','土地管理學系':'建設學院'
        }

        department_name , college_name = random.choice(list(college.items()))
        return department_name , college_name

    def creat_class(self):
        class_list = ['甲','乙','丙','丁']
        class_name = random.choice(class_list)
        return class_name

    def creat_grade(self):
        grade = ['一','二','三','四']
        grade_name = random.choice(grade)
        return grade_name

    def create_gender(self):
        gender = ['男','女']
        gender_name = random.choice(gender)
        return gender_name

    def create_email(self):
        emailtype = ["@gmail.com", "@yahoo.com.tw", "@mail.fcu.edu.tw", "@o365.fcu.edu.tw"]
        randomEmail = random.choice(emailtype)
        rang = random.randint(4, 10)
        Number = "0123456789qbcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPWRSTUVWXYZ"
        randomNumber = "".join(random.choice(Number) for i in range(rang))
        email = randomNumber + randomEmail
        return email