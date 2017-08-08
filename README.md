# Web Project Template

This is a template for new web development projects.
It uses Node.js and Gulp to create sourcemaps, minify and optimize files for production.


## How to use
First take a copy of the repository.
Then copy the files to development location.


### Install Node.js
Now that you have the files locally it's time to spin up Gulp.
For Gulp to function you need to have Node.js installed.
Follow the link and download [Node.js](https://nodejs.org/en/download/)


### Install Gulp
Now that you have Node.js installed it's time to install Gulp.
Open up a Terminal or CMD/Powershell window and run the following command.

`npm install gulp -g`

Mac OSX users may need to run this command as `sudo`.

`sudo npm install gulp -g`


### Initilize the project
Point the Terminal or CMD/Powershell window to the location that contains the development files.
Run the following command to initilize the project.
This will install the files needed for Gulp to function.

`npm install --save-dev`

### Running Gulp
Now that everything is in place it's time to run Gulp.
Make sure that your Terminal or CMD/Powershell window is pointing to the development folder.
Run the command.

`gulp watch`

There may be some modules that did not get installed, these will be printed to the console and can be installed using the following command.

`npm install <module name>`


### Start coding
You will find that there are two folders, `src` and `build`.
Place all your source files in the `src` folder, these files will then be copied to the `build` folder apon saving.

If new files are created then you will need to restart Gulp using, `gulp watch`.

#### CSS and SCSS/SASS
Add stylesheets to the folder `src/styles`. Gulp will create sourcemaps, minify and copy the files to the `build/styles` folder automatically.

#### Javascript
Add Javascript files to the folder `src/scripts`. Gulp will create sourcemaps, minify and copy the files to the `build/scripts` folder automatically.

#### Images
Add image files to your folder `src/images`. Gulp will optimize and copy the files to the `build/images` folder automatically.
