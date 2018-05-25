# Web Framework - Pallet

![alt text](https://github.com/smithymx67/Web-Framework/blob/master/Assets/PNG/Icons/Yellow-Js.png "Yellow - JS") 
![alt text](https://github.com/smithymx67/Web-Framework/blob/master/Assets/PNG/Icons/Blue-CSS.png "Blue - CSS") 
![alt text](https://github.com/smithymx67/Web-Framework/blob/master/Assets/PNG/Icons/Purple-Php.png "Purple - PHP")

Welcome to the web framework documentation site, here you can find information about features that the framework provides.

BluePallet - CSS Framework

YellowPallet - JavaScript Framework

PurplePallet - PHP Framework (Coming Soon)

This framework currently consists of two files, `bluePallet-vX.X.X.min.css` and `yellowPallet-vX.X.X.min.js`, although you can choose to only use the ones you need, 
some features in this framework require both files to work correctly. Features that require both files are clearly identified 
in the [documentation pages](https://samsmith.me/projects/webFramework/docSite/).

## How to use
All releases are available on GitHub, to use this framework first download the version you require from 
[here](https://github.com/smithymx67/Web-Framework/releases). Now you have the files, place them into to your project 
folder and create links to them. See the example below.

### Stylesheet Library lib.min.css

`<link rel="stylesheet" href="bluePallet-vX.X.X.min.css">`


### JavaScript Library lib.min.js

`<script src="yellowPallet-vX.X.X.min.css"></script>`

## Sourcemaps
Sourcemaps for both the CSS and JavaScript libraries are available to download if needed for debugging.

To use them simply download the sourcemap file that corresponds to your version and drop them into the same directory as 
the main library files.


## Setting up the development environment
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


## License
MIT License

Copyright (c) 2017 Sam Smith

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation 
files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, 
modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software 
is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES 
OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE 
LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN 
CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
