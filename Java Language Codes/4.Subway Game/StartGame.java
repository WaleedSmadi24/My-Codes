package subwayGame;

public class StartGame extends GameSystem
{
	public void StartTheGame()
	{
		System.out.println("The Game Started ...");
		
		Player.run();
		Guard.run();
		
		Train train01 = new Train();
		train01.setId(1);
		train01.setMovingState(true);
		
		Train train02 = new Train();
		train02.setId(2);
		train02.setMovingState(true);
		
		Coin coin01 = new Coin();
		coin01.setPlace("right");
		Coin.addCoinToArray(coin01);
		
		Coin coin02 = new Coin();
		coin02.setPlace("left");
		Coin.addCoinToArray(coin02);
		
		Coin coin03 = new Coin();
		coin03.setPlace("left");
		Coin.addCoinToArray(coin03);
	}
}
