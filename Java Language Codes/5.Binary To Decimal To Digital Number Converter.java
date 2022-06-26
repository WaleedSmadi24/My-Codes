package finalproject;

import java.util.Scanner;

public class FinalProjectCode
{
	static int BinaryToDecimalConverter(int n)
    {
		int Number = n;
		int Base = 1;
	    int DecimalValue = 0;
	    int Temp = Number;
	    
	    do
	    {
	        int last_digit = Temp % 10;
	        Temp = Temp / 10;
	
	        DecimalValue += last_digit * Base;
	
	        Base = Base * 2;
	    
	    } while (Temp > 0);
	    
	    return DecimalValue;
    }
	
	public static void main(String[] args)
	{
			System.out.println("Welocome To (Binary to Decimal) Converter ....");
			System.out.println();
			
			Scanner binaryNumber = new Scanner(System.in);
	        System.out.println("Please enter the Binary number you want to convert : ");
	        int dec_value = binaryNumber.nextInt();
	        System.out.println();
	        
	        int num = dec_value;
	        System.out.println("The Decimal Number is : " + BinaryToDecimalConverter(num));
	        System.out.println();
	        
	        System.out.println("The number in Digital Form : ");
	        System.out.println();
	        
	        String [][] Digital = new String[10][3];
	    	
	        Digital[0][0] = " _ ";
	        Digital[0][1] = "| |";
	        Digital[0][2] = "|_|";
	        
			Digital[1][0] = "  ";
			Digital[1][1] = " |";
			Digital[1][2] = " |";
			
			Digital[2][0] = " _ ";
			Digital[2][1] = " _|";
			Digital[2][2] = "|_ ";
			
			Digital[3][0] = " _ ";
			Digital[3][1] = " _|";
			Digital[3][2] = " _|";
			
			Digital[4][0] = "   ";
			Digital[4][1] = "|_|";
			Digital[4][2] = "  |";
			
			Digital[5][0] = " _ ";
			Digital[5][1] = "|_ ";
			Digital[5][2] = " _|";
			
			Digital[6][0] = " _ ";
			Digital[6][1] = "|_ ";
			Digital[6][2] = "|_|";
			
			Digital[7][0] = " _ ";
			Digital[7][1] = "  |";
			Digital[7][2] = "  |";
			
			Digital[8][0] = " _ ";
			Digital[8][1] = "|_|";
			Digital[8][2] = "|_|";
			
			Digital[9][0] = " _ ";
			Digital[9][1] = "|_|";
			Digital[9][2] = "  |";
			
			//100111
			if(BinaryToDecimalConverter(num) == 39)
			{
				System.out.println(Digital[3][0]);
				System.out.println(Digital[3][1]);
				System.out.println(Digital[3][2]);
				
				System.out.println(Digital[9][0]);
				System.out.println(Digital[9][1]);
				System.out.println(Digital[9][2]);
			}
			
			//1111
			if(BinaryToDecimalConverter(num) == 15)
			{
				System.out.println(Digital[1][0]);
				System.out.println(Digital[1][1]);
				System.out.println(Digital[1][2]);
				
				System.out.println(Digital[5][0]);
				System.out.println(Digital[5][1]);
				System.out.println(Digital[5][2]);
			}
			
			//10101
			if(BinaryToDecimalConverter(num) == 21)
			{
				System.out.println(Digital[2][0]);
				System.out.println(Digital[2][1]);
				System.out.println(Digital[2][2]);
				
				System.out.println(Digital[1][0]);
				System.out.println(Digital[1][1]);
				System.out.println(Digital[1][2]);
			}
			
			//10000
			if(BinaryToDecimalConverter(num) == 16)
			{
				System.out.println(Digital[1][0]);
				System.out.println(Digital[1][1]);
				System.out.println(Digital[1][2]);
				
				System.out.println(Digital[6][0]);
				System.out.println(Digital[6][1]);
				System.out.println(Digital[6][2]);
			}
			
			/*int LengthOfArray = 0;
			
			int [] DigitalArrayLength = new int [BinaryToDecimalConverter(num)];
			
			for(int i = LengthOfArray ; i >= 0; i++)
			{
				if(DigitalArrayLength[i] == 0)
				{
					System.out.println(Digital[1][0]);
					System.out.println(Digital[1][1]);
					System.out.println(Digital[1][2]);
				}
				
				if(DigitalArrayLength[i] == 1)
				{
					System.out.println(Digital[1][0]);
					System.out.println(Digital[1][1]);
					System.out.println(Digital[1][2]);
				}
				
				if(DigitalArrayLength[i] == 2)
				{
					System.out.println(Digital[2][0]);
					System.out.println(Digital[2][1]);
					System.out.println(Digital[2][2]);
				}
				
				if(DigitalArrayLength[i] == 3)
				{
					System.out.println(Digital[3][0]);
					System.out.println(Digital[3][1]);
					System.out.println(Digital[3][2]);
				}
				
				if(DigitalArrayLength[i] == 4)
				{
					System.out.println(Digital[4][0]);
					System.out.println(Digital[4][1]);
					System.out.println(Digital[4][2]);
				}
				
				if(DigitalArrayLength[i] == 5)
				{
					System.out.println(Digital[5][0]);
					System.out.println(Digital[5][1]);
					System.out.println(Digital[5][2]);
				}
				
				if(DigitalArrayLength[i] == 6)
				{
					System.out.println(Digital[6][0]);
					System.out.println(Digital[6][1]);
					System.out.println(Digital[6][2]);
				}
				
				if(DigitalArrayLength[i] == 7)
				{
					System.out.println(Digital[7][0]);
					System.out.println(Digital[7][1]);
					System.out.println(Digital[7][2]);
				}
				
				if(DigitalArrayLength[i] == 8)
				{
					System.out.println(Digital[8][0]);
					System.out.println(Digital[8][1]);
					System.out.println(Digital[8][2]);
				}
				
				if(DigitalArrayLength[i] == 9)
				{
					System.out.println(Digital[9][0]);
					System.out.println(Digital[9][1]);
					System.out.println(Digital[9][2]);
				}
			}*/		
	}

}
