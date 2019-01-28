# job-posting-website

1. Make sure you download and install 2 softwares:  
- XAMPP: https://sourceforge.net/projects/xampp/
- MySQL Workbench: https://dev.mysql.com/downloads/workbench/5.2.html
2. Once, you have both softwares installed onto your computer, download the files from Github, related to this project
3. Once downloaded, save the files into a folder
4. Then save the folder in C:\xampp\htdocs folder (delete the other files within the folder)
5. Open the XAMPP Control Panel on your computer to run Apache and MySQL modules on your computer (make sure this is running on the background properly before executing the next steps).
- XAMP is to ensure there is a local server running on your laptop or desktop (make sure Apache and MySQL is green on XAMP)
6. Open MySQL Workbench and create a connection. 
7. Create a new SQL tab for executing queries.
8. Locate the MySQL script needed to create the login system and job postings listed on the project found within MySQL_Script
9. Copy everything and past it into MySQL Workbench tab and execute the query (ensuring XAMPP is running in the background)
10. Once you have executed the query, go onto any browser and type 'localhost'
11. In a moments time, you will be directed to the main page
- Main page consists of current job postings
- Issue is: you can only view the job postings, cannot edit, modify or delete
- To do that: you must login using username: Admin & password: admin
12. After you have logged in, you can create new, modify, edit or delete job postings to your liking

