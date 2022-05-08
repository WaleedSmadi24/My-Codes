#include <stdio.h>
int main()
{ 
   double A; 
   double B;
   double H;
   double Area;
      
   printf("please enter Base 1 : ");
   scanf("%lf",&A);

   printf("\n");

   printf("please enter Base 2 : ");
   scanf("%lf",&B);

   printf("\n");

   printf("please enter the Height : ");
   scanf("%lf",&H);
   printf("\n");

   if(A>0 && B>0 && H>0)
   {   
      Area = ((A+B)/2)*H;
      printf("The area of Trapezoid = %lf \n",Area);
   }   
      
   else 
   {
      printf("The Base and Height of Trapzoid cannot be 0 or Negative \n");
   }
          
   return 0;
}       
          
