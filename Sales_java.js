function Edit(target)
{
        var i = document.getElementById(target);
        i.contentEditable = "true";
}


function changeColor1(colorName, target)
{
	var i = document.getElementById(target);
	i.style.backgroundColor = colorName;
	
}


function changeFont(fontName, target)
{
	var i = document.getElementById(target);
	i.style.fontFamily = fontName;
}

function changeColor(colorName, target)
{
	var i = document.getElementById(target);
	i.style.color = colorName;
}

function changeSize(sizeName, target)
{
	var i = document.getElementById(target);
	i.style.fontSize = sizeName;
}

function changePosition(positionName, target)
{
	var i = document.getElementById(target);
	i.style.textAlign = positionName;
}

