#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#include "foc_fa22.h"
#include <string.h>

#define SIZE 20

//Function for First Game.
void startGuessTheNumberGame ();

//Function for Second Game.
void startHangmanGame();

int main()
{
    //Asking user for his name.

    int option1;
    char name[SIZE];
    printf("Please enter your name : ");
    scanf("%s", name);
    printf("\n");
    printf("Welcome %s !! \n",name);

    //Do-While loop for repeating the menu.   
    do
    {
        //Print Main Menu on screen and get user's Option.
        printf("Please enter the number of the game you wish to play, or choose Exit \n");
        printf("1. Guess the number.\n");
        printf("2. Hangman.\n");
        printf("3. Exit.\n");
        
        scanf("%d",&option1);
        printf("\n");

        //Switch Statment for options. 

        switch(option1)
        {
            case 1:
            {
                //Fuction for the First Game.
                startGuessTheNumberGame ();
                break;
            }

            case 2:
            {
                //Fuction for the Second Game.
                startHangmanGame ();
                break;
            }

            case 3:
            {
                break;
            }

            default :
            {
                printf("Invalid choice \n\n");
                break;
            }
        } 

    } while (option1 != 3);     
    
    return 0;
}

// Functions:

//Function For the First Game (Guess The Number).
void startGuessTheNumberGame()
{
    printf("Guess the number has started.... \n\n");

    //Declare Variables and get user's Secret Number.

    int secretnumber;
    
    printf("Enter a secret number between 1 and 10000 : ");
    printf("\n");
    scanf("%d",&secretnumber);

    int low = 1;
    int high = 10000;
    int mid;
    int tries = 1;
    
    //Repeating while low value is smaller than or equal the high value.

	
	
    do
    {
    	mid = (low + high)/2;
    	
        //To Print Computer's Guess. 

        printf("My guess is : %d \n",mid);
        printf("\n");
    
        int option2;
        
        //Menu where user choose if the Secret Number is correct or Larger than or Smaller than. 

        printf("Please choose one of the following 3 option : \n");
        printf("1. My guess is correct. \n");
        printf("2. The secret number is larger than %d \n",mid);
        printf("3. The secret number is smaller than %d \n",mid);
        printf("\n");
    
        scanf("%d",&option2);
        printf("\n");


        //if else Statment for options process. 

            if(secretnumber == mid)
            {
                printf("Secret Number Found! \n");
                printf("\n");

                //Code for showimg image.

                int x[150][150];
    
                for(int i=0; i<150; i++)
                {
                    for(int j=0; j<150; j++)
                    {
                        if(i<=149 && i>=149-(tries*10) && j>=64 && j<=84)
                        {
                            x[i][j] = 0;
                        }
           
                        else
                        {  
                            x[i][j] = 255;   
                        }  
                    }        
                }
    
                showArray(150,150,x);

                break;
            }
        
            else if(secretnumber > mid)
            {
                low = mid + 1;
                tries++;
            }
        
            else
            {
                high = mid - 1;
                tries++;
            }

        } while(low <= high); //End of Do-While Statment.
    
}//End of the First Game (Guess The Number Game).
 
//Function For the Second Game.
void startHangmanGame()
{
    printf("Hangman has started.... \n");
    printf("\n");
    
    int option3;
    do
    {
        //Print the menu and ask user for his option.
        
        printf("Choose a category : ");
        printf("\n");

        printf("1. Food. \n");
        printf("2. Objects \n");
        printf("3. Names. \n");
        printf("4. Colors. \n");

        scanf("%d",&option3);

        //Pointer For Files.

        FILE *food;
        FILE *objects;
        FILE *names;
        FILE *colors;

        //Switch Statment for options.

    	switch(option3)
    	{
            //Food part in the game. 
        	case 1:
        	{
                //Declare variables and open the file.
            	char letter;
            	int tries = 5;
            	int counter = 0;
            	char random_word[20];
            	food = fopen("food.txt", "r");

                //Generate random number from the file.
            	srand(time(NULL));
            	int x = rand() % 15;
            
            	int count = 1;
                
                while(count <= x)
                {
                    fscanf(food, "%s", random_word);
                    count++;
                    
                }
                
            	fclose(food);
            
            	int length_of_word = strlen(random_word);
                
            	char guess[20];

                //For loop to replace word letters with underscores(_).
            	for(int i = 0; random_word[i] != '\0'; i++)
            	{
                	guess[i] = '_';
            	} 
            
            	guess[length_of_word] = '\0';

                //For loop for running the game.
            	for(tries = 5; tries > 0; tries)
            	{
                    //Print the word as secret word and remaining attempts, Get the letter from user.
            		printf("The word so far is : %s \n", guess);
            		printf("You have %d remaining attempts. \n", tries);
            
            		printf("\n");
            	
            		printf("Please enter a letter : ");
            		scanf(" %c",&letter);
            
            		printf("\n");
            
            		int j = 0;

                    //For loop to replace the correct entered letter with an underscore. 
            		for(int i = 0; random_word[i] != '\0'; i++)
            		{
                		if(letter == random_word[i] && guess[i] == '_')
                		{
                			guess[i] = letter;
                			j++;
                		}
                	
            		}

                    //To check if the letter is correct and print massage.
            		if(j == 1)
            		{
            			printf("Correct! Keep going! \n");
            		}

                    //To check if the letter is wrong and print massage.
            		if(j == 0)
            		{
            	    	tries--;
            			printf("Not quite! Try again! \n");	
            		}	
            	
            	
            	
            	}

                //To print to user that he found the word.
                if(1)
                {
                    printf("Congratulations! You found the word! \n");
                    printf("\n");
                    break;
                }

                //To print to user that he could not find the word.
                else
                {
            	    printf("Hard Luck, You were not able to find the word. :( \n");
            	    printf("\n");
            	    break;
                }	    
                
       	        break;
        
		    }//End of Case 1 (Food Part in the Game).
		
            //objects part in the game. 
		    case 2:
		    {
                //Declare variables and open the file.
			    char letter;
                int tries = 5;
                int counter = 0;
                char random_word[20];
                objects = fopen("objects.txt", "r");

                //Generate random number from the file.
                srand(time(NULL));
                int x = rand() % 15;
            
                int count = 1;
                
                while(count <= x)
                {
                    fscanf(objects, "%s", random_word);
                    count++;
                    
                }
                
                fclose(objects);
            
                int length_of_word = strlen(random_word);
                
                char guess[20];

                //For loop to replace word letters with underscores(_).
                for(int i = 0; random_word[i] != '\0'; i++)
                {
                guess[i] = '_';
                } 
            
                guess[length_of_word] = '\0';

                //For loop for running the game.
                for(tries = 5; tries > 0; tries)
                {
                    //Print the word as secret word and remaining attempts, Get the letter from user.
            	    printf("The word so far is : %s \n", guess);
            	    printf("You have %d remaining attempts. \n", tries);
            
            	    printf("\n");
            	
            	    printf("Please enter a letter : ");
            	    scanf(" %c",&letter);
            
            	    printf("\n");
            
            	    int j = 0;
            	    
                    //For loop to replace the correct entered letter with an underscore. 
            	    for(int i = 0; random_word[i] != '\0'; i++)
            	    {
                	    if(letter == random_word[i] && guess[i] == '_')
                	    {
                		    guess[i] = letter;
                		    j++;
                	    }
                	
            	    }

                    //To check if the letter is correct and print massage.
            	    if(j == 1)
            	    {
            		    printf("Correct! Keep going! \n");
            	    }
            	
                    //To check if the letter is wrong and print massage.
            	    if(j == 0)
            	    {
            	        tries--;
            		    printf("Not quite! Try again! \n");	
            	    }	
            	
            	
            	
                }

                //To print to user that he found the word.
                if(1)
                {
                    printf("Congratulations! You found the word! \n");
                    printf("\n");
                    break;
                }

                //To print to user that he could not find the word.
                else
                {
            	    printf("Hard Luck, You were not able to find the word. :( \n");
            	    printf("\n");
            	    break;
                }	    
		
		        break;
		
		    }//End of Case 2 (Objects Part in the Game).
		
            //Names part in the game. 
		    case 3:
		    {
                //Declare variables and open the file.
			    char letter;
                int tries = 5;
                int counter = 0;
                char random_word[20];
                names = fopen("names.txt", "r");

                //Generate random number from the file.
                srand(time(NULL));
                int x = rand() % 15;
            
                int count = 1;
                
                while(count <= x)
                {
                    fscanf(names, "%s", random_word);
                    count++;
                    
                }
                
                fclose(names);
            
                int length_of_word = strlen(random_word);
                
                char guess[20];

                //For loop to replace word letters with underscores(_).
                for(int i = 0; random_word[i] != '\0'; i++)
                {
                    guess[i] = '_';
                } 
            
                guess[length_of_word] = '\0';

                //For loop for running the game.
                for(tries = 5; tries > 0; tries)
                {
                    //Print the word as secret word and remaining attempts, Get the letter from user.
            	    printf("The word so far is : %s \n", guess);
            	    printf("You have %d remaining attempts. \n", tries);
            
            	    printf("\n");
            
            	    printf("Please enter a letter : ");
            	    scanf(" %c",&letter);
            
            	    printf("\n");
            
            	    int j = 0;

                    //For loop to replace the correct entered letter with an underscore. 
            	    for(int i = 0; random_word[i] != '\0'; i++)
            	    {
                	    if(letter == random_word[i] && guess[i] == '_')
                	    {
                		    guess[i] = letter;
                		    j++;
                	    }
                	
            	    }

                    //To check if the letter is correct and print massage.
            	    if(j == 1)
            	    {
            		    printf("Correct! Keep going! \n");
            	    }

                    //To check if the letter is wrong and print massage.
            	    if(j == 0)
            	    {
            	        tries--;
            		    printf("Not quite! Try again! \n");	
            	    }	
            	
            	
            	
                }

                //To print to user that he found the word.
                if(1)
                {
                    printf("Congratulations! You found the word! \n");
                    printf("\n");
                    break;
                }

                //To print to user that he could not find the word.
                else
                {
            	    printf("Hard Luck, You were not able to find the word. :( \n");
            	    printf("\n");
            	    break;
                }	    
		
		        break;
		
		    }//End of Case 3 (Names Part in the Game).
		
            //colors part in the game. 
		    case 4:
		    {
                //Declare variables and open the file.
			    char letter;
                int tries = 5;
                int counter = 0;
                char random_word[20];
                colors = fopen("colors.txt", "r");

                //Generate random number from the file.
                srand(time(NULL));
                int x = rand() % 15;
            
                int count = 1;
                
                    while(count <= x)
                    {
                        fscanf(colors, "%s", random_word);
                        count++;
                    
                    }
                
                fclose(colors);
            
                int length_of_word = strlen(random_word);
                
                char guess[20];

                //For loop to replace word letters with underscores(_).
                for(int i = 0; random_word[i] != '\0'; i++)
                {
                    guess[i] = '_';
                } 
            
                guess[length_of_word] = '\0';

                //For loop for running the game.
                for(tries = 5; tries > 0; tries)
                {
                    //Print the word as secret word and remaining attempts, Get the letter from user.
            	    printf("The word so far is : %s \n", guess);
            	    printf("You have %d remaining attempts. \n", tries);
            
            	    printf("\n");
            
            	    printf("Please enter a letter : ");
            	    scanf(" %c",&letter);
            
            	    printf("\n");
            
            	    int j = 0;

                    //For loop to replace the correct entered letter with an underscore.
            	    for(int i = 0; random_word[i] != '\0'; i++)
            	    {
                	    if(letter == random_word[i] && guess[i] == '_')
                	    {
                		    guess[i] = letter;
                		    j++;
                	    }
                	
            	    }

                    //To check if the letter is correct and print massage.
            	    if(j == 1)
            	    {
            		    printf("Correct! Keep going! \n");
            	    }

                    //To check if the letter is wrong and print massage.
            	    if(j == 0)
            	    {
            	        tries--;
            		    printf("Not quite! Try again! \n");	
            	    }	
            	
            	
                }
            
                //To print to user that he found the word.
                if(1)
                {
                    printf("Congratulations! You found the word! \n");
                    printf("\n");
                    break;
                }

                //To print to user that he could not find the word.
                else
                {
            	    printf("Hard Luck, You were not able to find the word. :( \n");
            	    printf("\n");
            	    break;
                }	    
		
		        break;
		
		    }//End of Case 4 (Colors Part in the Game).

            
		    default:
		    {
			    printf("Invalid Choice \n");
			    printf("\n");
		    }	
		
		  
	    }//End of Switch Statment.

	}while(option3 < 5); //End of Do-While Statment.
	
}//End of The Second Game (HangMan Game).	          
