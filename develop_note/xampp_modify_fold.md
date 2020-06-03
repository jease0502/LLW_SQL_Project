# Xampp 修改檔案目錄

1.找到xampp目錄下的xampp\apache\conf/httpd.conf文件（或者直接打開xampp工具在apache一行點擊config後選中httpd.conf），找到

DocumentRoot “C:/xampp/htdocs”

<Directory “C:/xampp/htdocs”>

其中C:/xampp/htdocs是apache默認的啟動根目錄
2.手動修改你想指定的目錄，例如修改如下


DocumentRoot “D:/xx”

<Directory “D:/xx”> D:/xx就是你想要指定的目錄，一般來說指定你的工程的根目錄

3.重啟apache,之後就可以訪問到你想要的工程頁面了
