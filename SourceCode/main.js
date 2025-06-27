function drawDices(numberOfFirstDice, numberOfSecondDice)
{
	const canvas = document.getElementById("DicesCanvas");
	if(canvas.getContext)
	{
		const canvasContext = canvas.getContext("2d");

		canvasContext.fillStyle = "rgb(0 0 0 / 50%)";
		canvasContext.fillRect(4,4,32,32);
		canvasContext.fillStyle = "rgb(128 128 128 / 50%)";
		canvasContext.fillRect(44,4,32,32);

		drawDiceDots(numberOfFirstDice, 0, canvasContext);
		drawDiceDots(numberOfSecondDice, 40, canvasContext);
	}
}

function drawDiceDot(dotSize, centerX, centerY, dotColorR, dotColorG, dotColorB, canvasContext)
{
	canvasContext.fillStyle = "rgb(".concat(dotColorR, " ", dotColorG, " ", dotColorB, ")");
	canvasContext.beginPath();
	canvasContext.arc(centerX, centerY, dotSize, 0, 2 * Math.PI);
	canvasContext.fill();
}

function drawDiceDots(numberOfTheDice, offsetX, canvasContext)
{
		switch (numberOfTheDice)
		{
			case 6:
				drawDiceDot(3, offsetX + 27, 20, 0, 0, 0, canvasContext);
				drawDiceDot(3, offsetX + 12, 20, 0, 0, 0, canvasContext);
			case 4:
				drawDiceDot(3, offsetX + 12, 27, 0, 0, 0, canvasContext);
				drawDiceDot(3, offsetX + 27, 12, 0, 0, 0, canvasContext);
			case 2:
				drawDiceDot(3, offsetX + 12, 12, 0, 0, 0, canvasContext);
				drawDiceDot(3, offsetX + 27, 27, 0, 0, 0, canvasContext);
				break;
			case 5:
				drawDiceDot(3, offsetX + 12, 27, 0, 0, 0, canvasContext);
				drawDiceDot(3, offsetX + 27, 12, 0, 0, 0, canvasContext);
			case 3:
				drawDiceDot(3, offsetX + 12, 12, 0, 0, 0, canvasContext);
				drawDiceDot(3, offsetX + 27, 27, 0, 0, 0, canvasContext);
			case 1:
				drawDiceDot(3, offsetX + 20, 20, 0, 0, 0, canvasContext);
				break;
		}
}

function getDiceNumber()
{
  const minCeiled = Math.ceil(1);
  const maxFloored = Math.floor(7);
  return Math.floor(Math.random() * (maxFloored - minCeiled) + minCeiled);
}
window.addEventListener("load",drawDices(getDiceNumber(), getDiceNumber()));
