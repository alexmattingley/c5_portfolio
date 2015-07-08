# Grid System

We will be building a 12 column 960 grid system
- 960 refers to the total width of the grid in pixels

## Classes and Naming Convention

Create all of your classes in `grid.css`

First you will need a container class
- The class should be named - "container"
- Set to a width of 960px
- Have it center on the screen

Next you will need 12 column classes
- all need:
	- display set to inline-block
	- floated left
	- 10px left margin
	- 10px right margin
- The class names should be:
	- col-1 
		- Will span 1/12 of the container
		- width: 60px;
	- col-2
		- Will span 2/12 of the container
		- width: 140px;
	- col-3
		- Will span 3/12 of the container
		- width: 220px;
	- col-4
		- Will span 4/12 of the container
		- width: 300px;
	- col-5
		- Will span 5/12 of the container
		- width: 380px;
	- col-6
		- Will span 6/12 of the container
		- width: 460px;
	- col-7
		- Will span 7/12 of the container
		- width: 540px;
	- col-8
		- Will span 8/12 of the container
		- width: 620px;
	- col-9
		- Will span 9/12 of the container
		- width: 700px;
	- col-10
		- Will span 10/12 of the container
		- width: 780px;
	- col-11
		- Will span 11/12 of the container
		- width: 860px;
	- col-12
		- Will span 12/12 of the container
		- width: 940px;
- You will need to do some more fine tunning for this to work properly but this will give you a good start on it

## How to Use

To use your grid system you will have to create a div with a class of `container`

Nested inside your `container` you need to add columns
- The columns need to add up to 12
	- For example you could make 4 columns using 4 divs with the `col-3` class
		- 3 + 3 + 3 + 3 = 12
	- Or two columns using: col-8 and col-4
		- 8 + 4 = 12
	- Or five columns using: col-1 col-2 col-3 col-2 col-4
		- 1 + 2 + 3 + 2 + 4 = 12
- You can use any combination of columns as long as they add to 12 

## Use it

In the `index.html` file use your grid system to create some columns of dummy data on the page
- The data can be anything, even just different colored blocks
- You can do any amount of columns you like, just use more than two
- Don't worry about getting to fancy, the whole point is just to prove your grid system works

## Commits

##### Status Update due @ 9pm 7/8/2015

Commit message:
- `Grid System - [status]`
	- Replace "status" with:
		- complete
		- incomplete
		- roadblock 

## Pull Request

##### Pull Request due by 10am 7/9/2015

Title:
- `Your Name - PR#1 [grid-system]`
	- Replace "Your Name" with your first and last name