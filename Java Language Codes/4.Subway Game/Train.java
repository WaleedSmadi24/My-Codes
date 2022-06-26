package subwayGame;

public class Train
{
	//Attributes
	private int id;
	private boolean movingState = false;
		
	//Setters and Getters for ID
	public int getId()
	{
		return id;
	}
	public void setId(int id)
	{
		this.id = id;
	}
		
	//Methods
	private void transport()
	{
		System.out.println("the train " + id + " is moving ...");
	}
		
	private void rigidTrain()
	{
		System.out.println("the train " + id + " is rigid ...");
	}
		
	//Setters and Getters for Moving State
	public boolean isMovingState()
	{
		return movingState;
	}
		
	public void setMovingState(boolean movingState)
	{
		if(movingState)
		{
			transport();
		}
			
		else
		{
			rigidTrain();
		}
	}
}
