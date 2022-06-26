package subwayGame;

public class Player extends Human
{
	//Attributes
	private static String place;
		
	//Setter and Getter for Place
	public static String getPlace()
	{
		return place;
	}

	public static void setPlace(String place)
	{
		Player.place = place;
	}

		
	//Methods
	static void moveRight()
	{
		place = "right";
		System.out.println("Player Moved To Right");
	}
		
	static void moveLeft()
	{
		place = "left";
		System.out.println("Player Moved To Left");
	}
		
	static void collectCoin()
	{
		if(Coin.getCoinsArray().get(0).getPlace() == place)
		{
			System.out.println(" You collected A Coin");
			Coin.getCoinsArray().remove(0);
		}
			
		else
		{
			System.out.println("You Missed the Coin");
		}
	}
		
	static void run()
	{
		System.out.println("Player is running");
	}
}
