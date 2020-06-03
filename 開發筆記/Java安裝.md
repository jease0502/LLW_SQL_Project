
# 安裝java

OpenJDK 是 Ubuntu Linux 預設的 JRE/JDK，我們可以使用 apt 安裝：
```
sudo apt-get update
sudo apt-get install default-jre
```
若只是要執行一般的 Java 應用程式，就只要安裝 JRE 即可，如果是要使用 Java 開發程式，就要加裝 JDK：
```
sudo apt-get install default-jdk
```
安裝完成後，可以檢查一下 java 的版本：
```
java -version
openjdk version "11.0.7" 2020-04-14
OpenJDK Runtime Environment (build 11.0.7+10-post-Ubuntu-2ubuntu218.04)
OpenJDK 64-Bit Server VM (build 11.0.7+10-post-Ubuntu-2ubuntu218.04, mixed mode, sharing)

```
javac -version
```
javac 11.0.7

