#include <stdio.h>
int main()
{
    int num;
    int line_count;
    int num_count;
     
    printf("please enter the number of lines: ");
    scanf("%d",&num);
       
    if(num >= 1 && num <= 5)
    {
        for( line_count = num; line_count >= 1; line_count--)
        {
            for( num_count = line_count; num_count >= 1; num_count--)
            {
                printf("%d",num_count);
            }         
                       
            printf("\n");
        }        
    }
         
         
    else
    {
        printf("please enter a number between 1 and 5 \n");
    }
               
    return 0;      
}     
