### 1. What IP addresses did busybox1, busybox2, busybox3 and busybox4 obtain? You can also solve this task withdocker inspect
![BusyNetCreation](./Screenshots/BusyNetCreation.png)
![InspectBusy](./Screenshots/InspectBusy.png)
##### Explanation of command docker inspect -f '{{range .NetworkSettings.Networks}}{{.IPAddress}}{{end}}' busybox1
The part of the command that is 'docker inspect' does exactly what it says it inspect containers, yet it appeared a lot of information so i wanted to only receive only the IP Adress so i specified it.The part '-f '{{...}}'' lets me format the output using Go templating instead of dumping the full JSON. Then {{range .NetworkSettings.Networks}} loops through all networks the container is connected to. Then {{.IPAddress}} makes that for each network, it fetches the IP address assigned to the container in that network. And last but not least {{end}} ends the loop as well says.
### 2. Start an interactive session on busybox1 and enter the following commands, or find the correct commands: 
##### 1. Which default gateway is entered? Which container has the same?
![Busy1Ip](./Screenshots/Busy1Ip.png)
##### 2. ping busybox2
![Busy1Ping2](./Screenshots/Busy1Ping2.png)
##### 3. ping busybox3
![Busy1Ping3](./Screenshots/Busy1Ping3.png)
##### 4. ping IP-by-busybox2
![Busy1PingIP2](./Screenshots/Busy1PingIP2.png)
##### 5. ping IP-from-busybox3
![Busy1PingIP3](./Screenshots/Busy1PingIP3.png)


### 3. Start an interactive session on busybox3 and enter the following commands: 
##### 1. Which default gateway is entered? Which container has the same?
##### 2. ping busybox1
##### 3. ping busybox4
##### 4. ping IP-from-busybox1
##### 5. ping IP-from-busybox4
