package subwayGame;

import java.util.ArrayList;

public class Coin extends Collectables
{
	private static ArrayList <Coin> coinsArray = new ArrayList<Coin>();
	private String place = " ";
	
	//Setter and Getter for place.
	public String getPlace()
	{
		return place;
	}
	
	public void setPlace(String place)
	{
		this.place = place;
		System.out.println("A coin is generated on " + place);
	}
	
	//Methods 
	static void addCoinToArray(Coin coin)
	{
		getCoinsArray().add(coin);
	}

	public static ArrayList <Coin> getCoinsArray() {
		return coinsArray;
	}

	public static void setCoinsArray(ArrayList <Coin> coinsArray) {
		Coin.coinsArray = coinsArray;
	}
	
}
