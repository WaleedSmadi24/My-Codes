#include <stdio.h>
int main()
{
     int pass;
     int tries = 1;
     do
     {   
          tries += 1;
          printf("Please enter the password : \n");
          scanf("%d",&pass);
         
          if (pass == 1234567)
          {  
               printf("login successfully \n");
               break;
          }
         
          else
          { 
               printf("Incorrect Password \n");
          }
                
          if(tries > 3)       
          {  
               printf("blocked from login, please try again after 5 minutes \n");
               break;
          }
         
     }
     while(tries <= 3 && tries >=1);
         
     return 0;
}
            
              
            
      
    
