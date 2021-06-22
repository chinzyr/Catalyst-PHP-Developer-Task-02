# Catalyst-PHP-Developer-Task-02
### Developer Details
Name : Catalyst-PHP-Developer-Task-02

Date : 22-06-2021

Dev : Chinzy Ranasinghe

### Question
Create a PHP script that is executed form the command line. The script should:

• Output the numbers from 1 to 100

• Where the number is divisible by three (3) output the word “foo”

• Where the number is divisible by five (5) output the word “bar”

• Where the number is divisible by three (3) and (5) output the word “foobar”

• Only be a single PHP file

### Output(ex)

1, 2, foo, 4, bar, foo, 7, 8, foo, bar, 11, foo, 13, 14, foobar... 

### Logic Notes

--> The IF condition was used three times with the Modulus Arithmetic Operator.  The number was replaced by the appropriate text value when the result was 0 when divided by 3,5 or both.

--> The dividing by both 3 and 5 were initially tested. If not, the numbers divide by both values will be set to either "foo" or "bar" depending on the initial condition checked.

--> Finalised array was printed using an implode function output comma-separated values as shown in the output example.
