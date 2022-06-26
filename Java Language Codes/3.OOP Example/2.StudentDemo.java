package OOPLab;

public class StudentDemo 
{

	public static void main(String[] args)
	{
		Main st1 = new Main();
		//Giving Values.
		st1.studentId = 6557545;
		st1.studentName = "Waleed";
		st1.studentMajor = "Computer Science";
		
		//Printing Attributes.
		System.out.println("Student Name = " + st1.studentName);
		System.out.println("Student Id = " + st1.studentId);
		System.out.println("Student Major = " + st1.studentMajor);
		
	}

}
