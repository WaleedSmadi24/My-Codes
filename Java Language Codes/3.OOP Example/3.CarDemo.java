package OOPLab;

public class CarDemo 
{

	public static void main(String[] args) 
	{
		Main car1 = new Main();
		//Giving Values.
		car1.type = "4x4 Hybrid Car";
		car1.color = "White";
		car1.model = "Toyota Rav4";
		
		//Printing Attributes.
		System.out.println("Car Type = " + car1.type);
		System.out.println("Car Model = " + car1.model);
		System.out.println("Car Color = " + car1.color);

	}

}
