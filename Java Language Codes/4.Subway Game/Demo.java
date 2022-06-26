package subwayGame;

public class Demo
{

	public static void main(String[] args)
	{
		GameSystem.startGame();
		
		Player.moveLeft();
		Player.collectCoin();
		
		Player.moveRight();
		Player.collectCoin();
		Player.collectCoin();
		
		GameSystem.endGame();
		
	}

}
