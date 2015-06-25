# gitHub

We will be covering some of the basic gitHub functionality including:
	- Forking
	- Cloning
	- Adding
	- Commiting
	- Pushing

## Fork and Clone the Repo

### Step 1 - Forking the Repo
- You fork a repo by clicking the "Fork" button located on the top right of the page
    <br><img src="https://github.com/Learning-Fuze/git-workflow/blob/assets/assets/fork-circle.jpg?raw=true" height='75'>

#### Since you have already forked this repo "Prep-Work", you don't need to do it again.

### Step 2 - Opening Command Line & navigating to your sandbox
The below describes steps to open up the command line in on a OSX ([Mac](https://github.com/Learning-Fuze/git-workflow#mac)) or Windows ([PC](https://github.com/Learning-Fuze/git-workflow#windows)). On a Mac the application we will be using is **Terminal** and the application on windows is **Git Bash**. We will be opening up the sandbox folder in the command line. <a href="https://docs.google.com/document/d/1GYqDtY12-RgzrbbHzY7kqxpqP_y_X6c5sNKH9NLqMPM/pub" target="_blank">Where is my sandbox Folder?</a>.

#### Mac - Option 1 (Right Click)
- If you have not done so already, enable [Easy osx terminal window opening](https://github.com/Learning-Fuze/git-workflow/blob/osx_easy_terminal/osx_easy_terminal.md)
1. Go to a folder in your finder 
	- ![Folder](https://github.com/Learning-Fuze/git-workflow/blob/assets/assets/sandbox-finder.jpg?raw=true) 
2. Right click on the folder and look for **Services** at the bottom. Then select the option **New Terminal Tab at Folder**
	- ![Folder](https://github.com/Learning-Fuze/git-workflow/blob/assets/assets/new-terminal-tab-finder.jpg?raw=true)

##### Mac - Option 2 (Direct Terminal Access)
1. Press the command key and space bar
	- You should see the spotlight search appear
	- type in Terminal and hit enter
2. Type in `cd ` (which stands for change directory) then drag your folder into the terminal window
3. For a computer user of "test" the line would look like this
	- `cd /Users/test/Desktop/sandbox`
	- *You should see "test" replaced with your computer username*
4. Hit Enter

#### Windows
1. Open windows explorer to the sandbox folder
2. Right click and select "Git Bash" as shown in the image below
	<br><img src="https://github.com/Learning-Fuze/git-workflow/blob/assets/assets/windows-git-bash-alt.jpg?raw=true" height="300">

### Step 3 - Cloning the repo
1. Type in the following into your command line 
	- `git clone https://github.com/your-user-name/Prep-Work.git` and hit enter
		- **Note** The portion of the url that reads **your-user-name here** needs to change
		- The **clone** command tells git to save the contents of the master branch onto your computer within the current directory.
		- **Note**
			- Using the command above will automatically create a directory with the same name as the Repo. In this example **git-workflow**
			- The url after the word **clone** can be found in the right hand side panel of this page under the Settings link. You can click the button to the right of the url that will automatically copy this url for you
2. Then type `cd Prep-Work` and hit enter
- Leave your console window open, we will be using it again shortly.

#### Congratulations you have cloned your Github Repository

## Add Some Files

### Step 1 - Open Sublime and Create a File
	- Open your "Prep-Work" folder in Sublime
	- You should see the file structure on the left side of your screen
	<img src="#9">
	- Click the week 1 folder to expand it out
	- Click the gitHub folder to expand it out
	<img src="#10">
	- Right-click on the gitHub folder and create a new file
	<img src="#11">
	- Save the file as "index.html"
### Step 3 - Build out a Standard HTML skeleton
	- Build a basic skeleton 
		- DOCTYPE tag
		- HTML tag
		- Head tag
		- Body tag
	- Make sure to include a title
### Step 4 - Add some content
	- Add a few elements to the body of your page
	- Can be whatever you want
	- Don't spend a lot of time on this, it is just for demonstration purposes
	- **Save your work when you are done**

## Add, Commit and Push

### Return to your console/command line window
	- You will need to go back to your console window (See, told you we would need it again)
		- If your console is not open, open it, make sure you are at the appropriate directory
		- The right directory is the folder where your assignment files are located
		- If you need help <a href="https://github.com/Learning-Fuze/git-workflow/tree/fork_clone#step-2---opening-command-line--navigating-to-your-sandbox" target="_blank">Click Here</a>
	- To push your files to gitHub you will need to type the following commands into your command line
		- Type `git add . ` Then hit 'Enter' *Don't forget the period*
		- Type `git commit -m "Your Message here" ` Then hit 'Enter'
			- The part between the " " can contain any message you would like.  This is often used to describe what was changed / added.
		- Type `git push origin master ` Then hit 'Enter'
		- Depending on your settings you may now be asked for a user-name then password
			- Use your gitHub user-name and password
	- Your files are now updated on gitHub!
	- You can now view all of your updated files on gitHub under your repo
	- It is recommended that you push to gitHub frequently not just when you have completed your project
		- Pushing frequently gives you a backup of your files on gitHub and allows you to easily revert back to previous versions
		- It is a good habit to get into

## Create a CSS File

### Return to Sublime
	- Create a CSS file in the gitHub Folder
	- Add some style to your page
	- Once again, DON'T spend a lot of time on this
	- **Save your work**

## Add, Commit and Push (Again)
	- Follow the steps from above to push your new CSS file to gitHub
	- After you have pushed your files go to gitHub and verify that everything worked

#### For a more in-depth version of the gitHub work flow <a href="https://github.com/Learning-Fuze/git-workflow" target="_blank">CLICK HERE</a>