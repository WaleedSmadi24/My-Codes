package OOPLab;

public class RoomDemo 
{

	public static void main(String[] args) 
	{
		Main room1 = new Main();
		//Giving Values.
		room1.roomNo = 5;
		room1.roomType = "2 Offices & 3 Labs";
		room1.roomBuilding = "Main Building";
		
		//Printing Attributes.
		System.out.println("Number Of Rooms = " + room1.roomNo);
		System.out.println("Room Types = " + room1.roomType);
		System.out.println("Room Building = " + room1.roomBuilding);

	}

}
