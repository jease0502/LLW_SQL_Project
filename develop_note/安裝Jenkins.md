 # Installing Jenkins

 預設 Ubuntu 套件中包含的 Jenkins 版本通常位於專案本身的最新可用版本後面。為了利用最新的修補程式和功能,我們將使用專案維護的包來安裝 Jenkins。

首先,我們將存儲庫密鑰添加到系統中。

```bash
wget -q -O - https://pkg.jenkins.io/debian/jenkins-ci.org.key | sudo apt-key add -
```
新增金鑰時,系統會傳回 。接下來,我們將 Debian 套件儲存函式庫位址到伺服器的 :OKsources.list

```bash
echo deb https://pkg.jenkins.io/debian-stable binary/ | sudo tee /etc/apt/sources.list.d/jenkins.list
```

當這兩個都到位時,我們將運行,以便使用新的存儲庫:updateapt-get

```bash
sudo apt-get update
```
最後,我們將安裝 Jenkins 及其依賴項,包括 JAVA:

```bash
sudo apt-get install jenkins
```
現在,Jenkins 及其依賴項已到位,我們將啟動 Jenkins 伺服器。

```bash
sudo systemctl start jenkins
```

由於不顯示輸出,我們將使用其命令來驗證它是否成功啟動:systemctlstatus
```
sudo systemctl status jenkins
```
如果一切順利,輸出的開頭應顯示服務處於活動狀態並配置為從啟動開始:

Output
```bash
 六  03 02:13:28 aiot-HP-EliteDesk-800-G1-TWR systemd[1]: Starting LSB: Start Je
 六  03 02:13:28 aiot-HP-EliteDesk-800-G1-TWR jenkins[28216]: Correct java versi
 六  03 02:13:28 aiot-HP-EliteDesk-800-G1-TWR jenkins[28216]:  * Starting Jenkin
 六  03 02:13:39 aiot-HP-EliteDesk-800-G1-TWR su[28284]: Successful su for jenki
 六  03 02:13:39 aiot-HP-EliteDesk-800-G1-TWR su[28284]: + ??? root:jenkins
 六  03 02:13:39 aiot-HP-EliteDesk-800-G1-TWR su[28284]: pam_unix(su:session): s
 六  03 02:13:39 aiot-HP-EliteDesk-800-G1-TWR su[28284]: pam_unix(su:session): s
 六  03 02:13:40 aiot-HP-EliteDesk-800-G1-TWR jenkins[28216]:    ...done.
 六  03 02:13:40 aiot-HP-EliteDesk-800-G1-TWR systemd[1]: Started LSB: Start Jen
```

現在 Jenkins 正在運行,我們將調整防火牆規則,以便我們可以從 Web 瀏覽器聯繫到 Jenkins 以完成初始設置。