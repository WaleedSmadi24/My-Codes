package OOPLab;

public class MobileDemo 
{

	public static void main(String[] args) 
	{
		Main mob1 = new Main();
		//Giving Values.
		mob1.brand = "Iphone XS";
		mob1.yearOfProduction = 2017;
		mob1.MobileColor = "Space Gray";
		mob1.camera = "12 MegaPixels";
		
		//Printing Attributes.
		System.out.println("Mobile Brand = " + mob1.brand);
		System.out.println("Mobile Year Of Production = " + mob1.yearOfProduction);
		System.out.println("Mobile Color = " + mob1.MobileColor);
		System.out.println("Mobile Camera Quality = " + mob1.camera);
		
	}

}
