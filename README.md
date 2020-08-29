# list-all-files-and-directories-php
list all files and directories php

# installation
## for linux/macos
* clone/download this to your computer. and extract them to a directory. for example `/home/yourname/iwantlistallfileshere` (linux)
* download php from https://www.php.net/downloads. and extract the zip to a directory in your computer. for example `/home/yourname/php7`
* open the terminal and enter `cd /home/yourname/php7`
* then enter `php -S 127.0.0.1:8000 -t /home/yourname/iwantlistallfileshere`
* go to your browser and enter this address `http://localhost:8000`

## for windows
* clone/download this to your computer. and extract them to a directory. for example `d:/iwantlistallfileshere`
* download php from https://www.php.net/downloads. and extract the zip to a directory in your computer. for example `c:/php7`
* open the command line and enter `cd c:/php7`
* then enter `php -S 127.0.0.1:8000 -t d:/iwantlistallfileshere`
* go to your browser and enter this address `http://localhost:8000`

## public access
if you want to access to your computer publicly in your wi-fi network please change from localhost ip address (like this `127.0.0.1`) to your wi-fi ip address of your computer like this `192.168.1.100`

so the command is `php -S 192.168.1.100:8000 -t d:/iwantlistallfileshere` for windows or `php -S 192.168.1.100:8000 -t /home/yourname/iwantlistallfileshere` for linux

## how to check your ip address in wi-fi network?
* for windows: `ipconfig`
* for linux: `ifconfig`
