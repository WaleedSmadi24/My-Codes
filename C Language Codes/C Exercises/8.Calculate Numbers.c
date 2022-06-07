#include <stdio.h>

int main()
{
    int n;
    int total = 0;
    
    printf("Enter cost of books, to stop enter a zero or a negative number.... \n");
    
    
    while(1)
    {
        scanf("%d", &n);
        if(n > 0)
        {
            total += n;
        }
        
        if(n <= 0)
        {
            printf("%d \n",total);
            return 0;
        }
        
    }

    
}
