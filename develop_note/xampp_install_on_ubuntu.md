# 安裝xampp on linux

首先先前往官網把他下載下來，[網址](https://www.apachefriends.org/zh_tw/download.html)

選擇合適的版本，去進行下載

![](https://i.imgur.com/JLmcnZE.png)

在下載後，切換到下載資料夾

```bash
cd Download
```

接下來更改權限

```bash
chmod +x xampp-linux-x64-7.2.12-0-installer.run
```

開始安裝~
```bash
sudo ./xampp-linux-x64-7.2.9-0-installer.run
```

接下來就持續下一步到底就可以了

開啟Xampp方法，兩種方法都可以
```bash
sudo ./manager-linux-x64.run﻿
sudo /opt/lampp/lampp start
```