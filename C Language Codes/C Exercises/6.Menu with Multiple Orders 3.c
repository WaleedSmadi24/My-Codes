#include <stdio.h>
#define size 7

  int main()
  {
    int op1;
    double integers_array[size];
    
  do 
  {
        printf("Main Menu \n\n");
        printf("------------------------------------- \n\n");
        printf("1) Fill Array \n");
        printf("2) Print Array \n");
        printf("3) Find Element Occourance In Array \n");
        printf("4) Calculate The Summation Of Array Elements\n");
        printf("5) Multiply Single Array Element By 10 \n");
        printf("6) Increment All Array Elements \n");
        printf("7) Exit \n\n");
        
        printf("Please Enter Your Option : ");
        scanf("%d",&op1);
    
    
    switch(op1)
    {
       case 1:
       {
           printf("please enter %d numbers : ",size);
    
           for(int i=0; i < size; i++)
           {
               scanf("%lf",&integers_array[i]);
           }
           
           printf("\n");
           break;
       }
       
       case 2:
       {
           printf("Array Elements : ");
           
           for(int i=0; i<size; i++)
           {
               printf("%lf ",integers_array[i]);
           }
           
           printf("\n");
           break;
       }
       
       case 3:
       {   
           double num;
           
           printf("Please enter a number : ");
           scanf("%lf",&num);
           
           int count=0;
           
           for(int i=0; i < size; i++)
           {
               if(num == integers_array[i])
               {
                   count++;
               }
           }
           
           printf("The Number of Occourances of %lf In Array is %d \n",num,count);
           break;
       }
       
       case 4:
       {
           double sum;
           
           for(int i=0; i < size; i++)
           {
               sum += integers_array[i];
           }
           
           printf("The Summation of Array Elements is : %lf \n",sum);
           break;
       }
       
       case 5:
       {
           int i;
           printf("Please Enter An Array Index :");
           scanf("%d",&i);
           
           integers_array[i] = 10*integers_array[i];
           break;
       }
       
       case 6:
       {
           for(int i=0; i < size; i++)
           {
              integers_array[i] = integers_array[i] + 2;
           }
           break;
       }
       
       case 7:
       {
           printf("Thank you for using our program \n");
           break;
       }
       
       default:
       {
           printf("Invalid choice \n\n");
           break;
       }
       
    }
    
  }while(op1 != 7);  
    
    
    return 0;
  }
