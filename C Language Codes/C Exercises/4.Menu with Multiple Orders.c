#include <stdio.h>
#include <stdlib.h>
   
int main()
{
    do 
    {
        int a;
        int b;
        char c;
        
        printf("Main menu \n");
        printf("---------------------------------- \n");
        printf("1) Check if character is capital or small letter \n");
        printf("2) Compute absolute value \n");
        printf("3) Exit \n");
    
        printf("choose an operation or 3 to exit \n");
        scanf("%d",&a);
    
        switch(a)
        {    
            case 1:  
        
            printf("please enter any letter :\n");
            scanf("%c",&c);
          
            if(c >= 'A' && c <= 'Z')
            {
                printf("capital letter \n");
            }
            else if(c >= 'a' && c <= 'z')
            {
                printf("small letter \n");
            }
            else
            {
                printf("Not a letter \n");
            }
                
            break;
          
          
            case 2: 
     
            printf("please enter a number \n");
            scanf("%d",&b);
         
            printf("the absolute number is : %d \n", abs(b));
         
            break;
        
            case 3 :
     
            return 0;
     
            default :
        
            printf("Invalid choice \n \n");

        }
    }
    while (0);
  
    return 0;
}