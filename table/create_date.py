import random
class create_date:
    
    def big5_tw():
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

    def creat_name():
        FIRST_NAME = ['陳', '林', '黃', '張', '李', '王', '吳', '劉', '蔡', '楊', '許','鄭',
    '謝', '郭', '洪', '曾', '邱', '廖', '賴', '周', '徐', '蘇', '葉', '莊', '呂','江',
     '何', '蕭', '羅', '高簡', '朱', '鍾', '施', '游', '詹', '沈', '彭', '胡', '余','盧',
    '潘', '顏', '梁', '趙', '柯', '翁', '魏', '方', '孫', '張簡', '戴', '范', '歐陽',
    '宋', '鄧', '杜', '侯', '曹', '薛', '傅', '丁', '溫', '紀', '范姜', '蔣', '歐', '藍',
    '連', '唐', '馬', '董', '石', '卓', '程', '姚', '康', '馮', '古', '姜', '湯', '汪',
    '白', '田', '涂', '鄒', '巫', '尤', '鐘', '龔', '嚴', '韓', '黎', '阮', '袁', '童',
    '陸', '金', '錢', '邵']
        name1 = big5_tw()
        name2 = big5_tw()
        first = random.choice(FIRST_NAME)
        name = (first + name1 + name2)
        return name

    def creat_password():
        seed = "1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_ =-"
        password = []
        for i in range(8):
            password.append(random.choice(seed))
            get_password = ''.join(password)
        return get_password

    def creat_college():
        college = []
        college_name = random.choice(college)
        return college_name

    def creat_department():
		department = []
		BusinessCollege = []
		EngineeringCollege = []
		InformationCollege = []
		ConstructionCollege = []
        department_name = random.choice(department)
        return department_name

    def creat_class():
        class_list = ['甲','乙','丙','丁']
        class_name = random.choice(class_list)
        return class_name

    def creat_grade():
        grade = ['1','2','3','4']
        grade_name = random.choice(grade)
        return grade_name

    def create_gender():
        gender = ['男','女']
        gender_name = random.choice(gender)
        return grade_name

    def create_email():
        emailtype = ["@gmail.com", "@yahoo.com.tw", "@mail.fcu.edu.tw", "@o365.fcu.edu.tw"]
        randomEmail = random.choice(emailtype)
        rang = random.randint(4, 10)
        Number = "0123456789qbcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPWRSTUVWXYZ"
        randomNumber = "".join(random.choice(Number) for i in range(rang))
        email = randomNumber + randomEmail
        return email