# SH scanner
SH scanner is an incident response utility written in PHP. It is a potentially malicious content analysis tool that provides the ability to easily and quickly detect how malicious files were located in an account. The tool is written and suited for shared hosting environments running cPanel. The tool requires ClamAV to be installed on the server.

![Preview](https://raw.githubusercontent.com/Keeperr/SH-scanner/master/assets/preview.png)

# Dependencies
Since SH scanner was primarily developed for shared hosting environments, the following dependencies must be met:
- ClamAV engine
- cPanel (_will soon remove this one_)

# Features

Currently SH scanner supports the following features:

### Scan with ClamAV
Initiates a clamscan with additional options for a specified directory.

> When starting ClamAV, in most cases PHP will not wait for its execution to finish and Internal Server Error 500 will return due to the maximum value of FcgidIOTimeout. For this purpose, this menu allows ClamAV to run in background, so we have a refresh button to understand when it's finished.

### Read ClamAV log file
Takes the content of a log file that we have generated from ClamAV and lists all files, their ctime and mtime stamps, and the signatures they are found on.

> Executes stat -c '%y' and stat -c '%z', to find mtime and ctime of all files in our ClamAV log file. It works with a regular expression written specifically for the ClamAV log files and can only work with them.

### Access log scanner
It shows all hits to the website 10 seconds back and forth from the ctime of the files in our ClamAV log file.

> With a log file provided on our side (the specified path to one on the account), the script takes ctime the stamp of each file from the ClamAV log file and searches 10 seconds back and forth for the access log file.

### FTP log scanner
Shows all FTP requests 10 seconds back and forth from the ctime timestamp.

> When scanning the FTP account log (/usr/local/apache/domlogs/ftp.{$USER_DOMAIN}-ftp_log), the script takes the ctime stamp of each file from a ClamAV log file, 10 seconds back and forth in the FTP log file.

### cPanel log scanner
Shows all requests from the cPanel access log 10 seconds back and forth from the ctime timestamp.

> With a specified log file (the specified path to one on the account), the script takes the ctime of each ClamAV log file and searches 10 seconds back and forth for the cPanel log file.

### Find extracted files
Shows us all the archive available in the account and looks into their content for files saved in a ClamAV log file.

> An option to check whether a file from a ClamAV log file already loaded / specified is available in one of the archives. It should be borne in mind that this option allows searching for specific files only in archives without being unzipped, with extensions .zip, .tar, .tar.gz, .tar.bz2.

### Last file inode changes
Shows us all files in a listed directory whose inode information has been modified in the last [N] days.

> Allows us to check for inode information of files in the account. Such changes occur most often when the account / web site has been compromised.

### Deobfuscation tools
A list of online tools that can help us read malicious code for the identification of it as such or as false positive.

> They can be used to read malicious or false positive code. At each link of the first link on the page there is an example code of how it looks and which of the balls to use for deobfuscate.

### Signature repositories
A list of online signature repositories.

> Includes a list of signatures that are used by ClamAV as external databases. Many of them can not be found locally unless explicitly added because external databases are used. It searches for the name of the database (for example, if we have Sanesecurity.Blurl.a8a9ed, it's searching in database called blurl.ndb).

### Scan malware online
A list of websites that allow for file or URL address scanning.

> It contains a list of online sites where we can scan an additional file for which we are not sure whether it is malicious or not. Sucuri's site only scans a client-side code such as HTML, JavaScript, and more, as Sucuri Scan can not readily access server applications (files).

### Search for log files
Check for ClamAV generated log files.

> This page helps us to find all ClamAV log files since it is possible to leave such behind. Runs a precise grep for a line which is the line with which every ClamAV log file starts (empty or not). By default, it searches in the home directory of the current user.

### Miscellaneous
Additional functionalities and extras.

>The menu contains useful links and tools that do not fit into other menus. The functionalities of this menu allow us to:
> (+) run stat(1) on an arbitrary file in the account specified by us;
> (+) find all cron jobs for the current user;
> (+) find the last logins via cPanel;
> (+) outputs the SSH history of the current user;

# Preview
Screenshots from SH scanner.

![Scan with ClamAV](https://raw.githubusercontent.com/Keeperr/SH-scanner/master/assets/preview2.png)
![Find extracted files](https://raw.githubusercontent.com/Keeperr/SH-scanner/master/assets/preview3.png)
![Last file inode change](https://raw.githubusercontent.com/Keeperr/SH-scanner/master/assets/preview4.png)
---
# To do
- Eliminate the cPanel dependency
- Provide an interface that allows settings adjustments (clamav binary path, toggle option on/off, etc)
