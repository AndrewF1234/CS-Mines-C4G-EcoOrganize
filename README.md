## Introduction
This project is for the C4G group 3 project for creating and designing a website to address environmental concerns through access and creation of petitions.
# Getting Started

1. Clone the repo
a. git clone <github repository>
b. cd C4G-group3-enviro
c. code .

# Extensions for VSCode
1. PHP Server
2. MySQL
3. Liver Server (Optional)

You will these configurations to your .vscode/settings.json for your extensions to work properly

```
"phpserver.phpConfigPath": "C:\\xampp\\php\\php.ini",
"php.validate.executablePath": "c:\\xampp\\php\\php.exe",
```

If you did not install xammp to your C drive you will have to adjust the paths accordingly

# Installing XAMMP
In order to compile and execute php you will need to install the latest version of Xammp: https://www.apachefriends.org/.

Additionally, you will need to add Xammp's file, php, to your environment variables. 

When done restart your machine or IDE.




# Pulling you code to Github
You should make sure that your branch or code you are about to work on is up to date. Run the commands below in your terminal before making changes to ensure this.

```
git status
git pull origin main
```

If you have changes that your would like that conflict with the most recent change you can run the command:
```
git stash
```

# Pushing your code to Github
You should commit your code at least once a day towards the end of the day to GitHub.The following will add your files to your git, create a local commit and adding a message, and push your code to github. Run the commands below in your terminal to push up your changes: 
```
git add .
git commit -m "<commit message>"
git push
```
