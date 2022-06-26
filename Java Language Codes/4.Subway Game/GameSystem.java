package subwayGame;

public class GameSystem
{
	static void startGame()
	{
		StartGame start = new StartGame();
		start.StartTheGame();
	}
	
	static void endGame()
	{
		GameOver end = new GameOver();
		end.EndTheGame();
	}
	
}
