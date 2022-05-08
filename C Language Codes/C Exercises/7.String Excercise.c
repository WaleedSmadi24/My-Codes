#include stdio.h
#include string.h

#define SIZE 20

int main()
{
    char First_Name[SIZE];
    
    printf(Please enter your first namen);
    scanf(%s, First_Name);
    
    printf(The number of characters in your first name is %ldn, strlen(First_Name));
    
    char Last_Name[SIZE];
    
    printf(Please enter your last namen);
    scanf(%s, Last_Name);
    
    char Full_Name[SIZE];
    
    strcpy(Full_Name, First_Name);
    
    strcat(Full_Name,  );
    
    strcat(Full_Name, Last_Name);
    
    printf(nYour full name is %sn, Full_Name);
    
    char Email[SIZE];
    printf(nPlease enter your e-mail addressn);
    scanf(%s, Email);
    
    int pos;
    for(int i=0; Email[i] != '0'; i++)
     if(Email[i] == '@')
     {
         pos = i;
         break;
     }
     
     char Username[SIZE];
     strncpy(Username, Email, pos);
     
     char Domain[SIZE];
     strcpy(Domain, &Email[pos+1]);
     
     printf(nUsername %sn, Username);
     printf(Domain %sn, Domain);
     
     char System_Date[SIZE] = Tuesday-04-01-2022, Date[SIZE];
     
     printf(nPlease enter a daten);
     scanf(%s, Date);
     
     if(strcmp(System_Date, Date) == 0)
        printf(The entered date is today’s daten);
     
     else
        printf(The entered date is NOT today’s daten);
     
     
    

    return 0;
}