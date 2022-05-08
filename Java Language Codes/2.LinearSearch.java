public class LinearSearch
{
	  public static void main(String args[])
	  {
		  int array[] = { 0, 8, 30, 96, 26 };
		  int x = 30;

		  int result = Search(array, x);

		  System.out.println(result);
	  }
	  
	  public static int Search(int array[], int x)
	  {
		  int y = array.length;
		  for (int i = 0; i < y; i++)
		  {
			  if (array[i] == x)
			  return i;
		  }
		  
		  return -1;
	  }
}