package proceduralProgramming;

public class ProceduralProgram
{
	public static void main(String[] args)
	{
		//Change the number to see if you can access or not.
		CheckAccess(16);
	}

	//Method to Check the Age in order to allow Access or not.
	public static boolean CheckAccess (int age)
	{
		//if age was 16 or above, the user can access into the website.
		if (age >= 16)
		{
			System.out.println("You are allowed to Access to the Website");
			return true;
		}
		
		//if the user was smaller than 16 he can't access to the website.
		else
		{
			System.out.println("You are not allowed to Access to the Website");
			return false;
		}
	}
}
