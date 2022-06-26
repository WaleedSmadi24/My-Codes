package subwayGame;

public class Human
{
	//Attributes
	private String gender;
	private int age;
		
	//Setter and Getter for Gender
	public String getGender()
	{
		return gender;
	}
	public void setGender(String gender)
	{
		this.gender = gender;
	}
		
	//Setter and Getter for Age
	public int getAge()
	{
		return age;
	}
	public void setAge(int age)
	{
		this.age = age;
	}
		
	//Method
	static void run()
	{
		System.out.println("Human is running");
	}
		
}
