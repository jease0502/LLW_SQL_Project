# Linux 網路設置

首先需要先去ifconfig查詢你電腦的網卡名稱

```bash
eno1: flags=4163<UP,BROADCAST,RUNNING,MULTICAST>  mtu 1500
        inet xxx.xxx.xxx.xxx  netmask 255.255.255.0  broadcast xxx.xxx.xxx.xxx
        ether ec:b1:d7:35:3d:3e  txqueuelen 1000  (Ethernet)
        RX packets 489655  bytes 548568225 (548.5 MB)
        RX errors 0  dropped 44  overruns 0  frame 0
        TX packets 133167  bytes 19130854 (19.1 MB)
        TX errors 0  dropped 0 overruns 0  carrier 0  collisions 0
        device interrupt 20  memory 0xf7c00000-f7c20000  

lo: flags=73<UP,LOOPBACK,RUNNING>  mtu 65536
        inet 127.0.0.1  netmask 255.0.0.0
        inet6 ::1  prefixlen 128  scopeid 0x10<host>
        loop  txqueuelen 1000  (Local Loopback)
        RX packets 5977  bytes 435860 (435.8 KB)
        RX errors 0  dropped 0  overruns 0  frame 0
        TX packets 5977  bytes 435860 (435.8 KB)
        TX errors 0  dropped 0 overruns 0  carrier 0  collisions 0
```

從上面可以知道我們的網卡名稱是eno1，這時候我們去配置固態網路訊息

首先編輯下面文檔
```bash
sudo vi /etc/network/interfaces
```

將裡面文字改成這種形式
```bash
# interfaces(5) file used by ifup(8) and ifdown(8)
auto lo
iface lo inet loopback

auto eno1
iface eno1 inet static # 固定 (靜態) IP。
address 140.xxx.xxx.xxx # IP 位址。
netmask 255.255.255.0 # 網路遮罩。
gateway 140.xxx.xxx.xxx # 預設閘道。
```

接下來我們重新讀取網路設定
```bash
sudo /etc/init.d/networking restart
```

這時候我們去測試看看是否有連線成功

```bash
pimg 8.8.8.8
```

如果發現你是沒有連線成功的，那有可能是你的網卡沒有開

打開方法:
```bash
sudo ip link set dev eno1 up
```

在打開後，這時候我們去ping的時候應該是不會丟封包的

接下來配置DNS

```bash
sudo vim /etc/resolv.conf
```

```bash
# 主要的 DNS 伺服器位址。
nameserver  140.xxx.xxx.xxx

# 次要的 DNS 伺服器位址。
nameserver  8.8.8.8
```

再都配置完成後，就可以正常的來使用網路了