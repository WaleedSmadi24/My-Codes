#include <stdio.h>
 
void FindDivisors (int n);
double Minimum (double n1,double n2,double n3);
int main()
{
    do 
    {
        int op;
        int num;
        double n1;
        double n2;
        double n3;
      
        printf("3) Exit \n");
        printf("Main Menu \n");
        printf("------------------- \n");
        printf("1) Find Divisors of a Number. \n");
        printf("2) Find Minimum. \n");
        
        printf("Please enter your option \n");
        scanf("%d",&op);
      
       switch(op)
       {
            case 1:
                printf("please enter a number : ");
                scanf("%d",&num);
          
                FindDivisors(num);
          
            break;
          
            case 2: 
                printf("please enter the First number : ");
                scanf("%lf",&n1);
         
                printf("please enter the Second number : ");
                scanf("%lf",&n2);
         
                printf("please enter the Third number : ");
                scanf("%lf",&n3);
          
                Minimum (n1,n2,n3);
          
                break; 
                 
            case 3:
                
                return 0;
           
            default :
         
                printf("Invalid choice \n\n");
         
       }
    }
    while(1);
       
    return 0;
 }  
 
     void FindDivisors(int n)
     {
       int i;
       
       printf("The Divisors of %d are : \n",n);
       
       for(i = 1; i <= n; i++)
       {
	    	if((n%i) == 0)
	    	{
		    	printf("%d  \n",i);
            }
	   }
      
     }
     
     double Minimum(double n1, double n2, double n3)
     {
      if(n1 && n2 > n3)
      {
        printf("The Smallest number is : %lf \n",n3);
        return n3;
      }
      if(n1 && n3 > n2)
      {
        printf("The Smallest number is : %lf \n",n2);
        return n2;
      }
      if(n2 && n3 > n1)
      {
        printf("The Smallest number is : %lf \n",n1);
        return n1;
      }
     }   