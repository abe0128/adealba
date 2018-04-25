var output;
var pacman;
var loopTimer;
var numLoops = 0;

var upArrowDown = false;
var downArrowDown = false;
var leftArrowDown = false;
var rightArrowDown = false;
var walls = new Array();


const PACMAN_SPEED = 10;

function loadComplete()
{
	output = document.getElementById('output');
	pacman = document.getElementById('pacman');
	pacman.style.left = '280px';
	pacman.style.top = '260px';
	pacman.style.width = '40px';
	pacman.style.height = '40px';
	
	loopTimer = setInterval(loop, 50);
	
	createWall(200, 300, 200, 40);
	
	createWall(-20, 0, 640, 40);
	
	createWall(0, 0, 40, 180);
	createWall(0, 220, 40, 180);
	
	createWall(560, 0, 40, 180);
	createWall(560, 220, 40, 180);
	
	createWall(-20, 360, 640, 40);
}

function createWall(left, top, width, height)
{
    var wall = document.createElement('div');
    wall.className = 'wall';
    wall.style.left = left + 'px';
    wall.style.top = top + 'px';
    wall.style.width = width + 'px';
    wall.style.height = height + 'px';
    gameWindow.appendChild(wall);
    
    walls.push(wall);
    output.innerHTML = walls.length;
}

function loop()
{
    numLoops++;
    tryToChangeDirection();
    
	if(upArrowDown)
	{
	    var pacmanY = parseInt(pacman.style.top) - PACMAN_SPEED;
	    if(pacmanY < -30)pacmanY = 390;
	    {
	        pacman.style.top = pacmanY + 'px';
	    }
	}
	if(downArrowDown)
	{
	    var pacmanY = parseInt(pacman.style.top) + PACMAN_SPEED;
	    if(pacmanY > 390)pacmanY = -30;
	    {
	        pacman.style.top = pacmanY + 'px';
	    }
	}
	if(leftArrowDown)
	{
	    var pacmanX = parseInt(pacman.style.left) - PACMAN_SPEED;
	    if(pacmanX < -30)pacmanX = 590;
	    {
	        pacman.style.left = pacmanX + 'px';
	    }
	}
	if(rightArrowDown)
	{
	    var pacmanX = parseInt(pacman.style.left) + PACMAN_SPEED;
	    if(pacmanX > 590)pacmanX = -30;
	    {
	        pacman.style.left = pacmanX + 'px';
	    }
	}
	if(hitWall() )
	{
	    pacman.style.left = originalLeft;
	    pacman.style.top = originalTop;
	}
}

function hitWall()
{
    var hit = false;
    for(var i=0; i<walls.length; i++)
    {
        if(hittest(walls[i], pacman) )
        {
            hit = true;
        }
    }
    return hit;
}

function tryToChangeDirection()
{
    var originalLeft = pacman.style.left;
	var originalTop = pacman.style.top;
	
    if(event.keyCode == 37)
    {
        pacman.style.left = parseInt(pacman.style.left) - PACMAN_SPEED +'px';
        if(! hitWall() ){
        direction = 'left';
        pacman.className = "flip-horizontal";
        }
    }
    if(event.keyCode == 38)
    {
        pacman.style.top = parseInt(pacman.style.top) - PACMAN_SPEED +'px';
        if(! hitWall() ){
        direction = 'up';
        pacman.className = "rotate270";
        }
    }
    if(event.keyCode == 39)
    {
        pacman.style.left = parseInt(pacman.style.left) + PACMAN_SPEED +'px';
        if(! hitWall() ){
        direction = 'right';
        pacman.className = "";
        }
    }
    if(event.keyCode == 40)
    {
        pacman.style.top = parseInt(pacman.style.top) + PACMAN_SPEED +'px';
        if(! hitWall() ){
        direction = 'down';
        pacman.className = "rotate90";
        }
    }
    
    pacman.style.left = originalLeft;
	pacman.style.top = originalTop;
}

document.addEventListener('keyup', function(event)
{
    if(event.keyCode == 37)
    {
        leftArrowDown = false;
    }
    if(event.keyCode == 38)
    {
        upArrowDown = false;
    }
    if(event.keyCode == 39)
    {
        rightArrowDown = false;
    }
    if(event.keyCode == 40)
    {
        downArrowDown = false;
    }
});