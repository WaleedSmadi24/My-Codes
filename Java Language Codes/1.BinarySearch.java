public class BinarySearch
{
	public static void main(String args[])
	{  
		int array[] = {2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20};  
		int Number = 13;  
		int high=array.length-1;  
		
		Search(array,0,high,Number);     
	}  
	
	public static void Search(int array[], int low, int high, int Number)
	{  
		int mid = (low + high)/2;  
		
		do
		{  
			if( array[mid] == Number )
			{  
				System.out.println("Number is found in Array index : " + mid);  
				break;  
			}
			
			else if ( array[mid] < Number ) 
			{  
				low = mid + 1; 
			}
			
			else
			{  
				high = mid - 1;  
			}  
			
			mid = (low + high)/2;  
			
		} while( low <= high );
		
		if ( low > high )
		{  
			System.out.println("Number is not found!");  
		}
		
	}  
	
}
















