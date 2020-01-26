<?php
## Note: Please first read what is call by value and reference in PHP and post increment and decrement oprators definition.

## 1) Tell the output of the below code?

/***
** Description: PHP Interview Question and Answer based on Post increment operator(i.e.++) and decrement operator(i.e.--)
** Added By : Neha Khemchandani
** Date Added : 26th January,2020
***/
 
$x = 5;
echo $x;            // Here $x value is 5
echo "<br/>";
echo $x+++$x++;     // Here it is post increment operator so, value of $x will be 5+6 = 11
echo "<br/>";
echo $x;       		// Here after last post increment value of $x will be 7 	
echo "<br/>";
echo $x---$x--;     // Here it is post decrement so, value of $x will be 7-6 = 1
echo "<br/>";
echo $x;			// Here after last post decrement operator the value of $x will be 5

## 1) -> Answer : 

/******
Output :
5
11
7
1
5
******/

## 2) Write down the ouput of the below given code?

/***
** Description: PHP Interview Question and Answer based on call by Reference
** Added By : Neha Khemchandani
** Date Added : 26th January,2020
***/
$a = '1';
$b = &$a;   // Call by reference so,value of $b becomes 1 here
$b = "2$b"; // so the final output value of $b will be 21 here

## 2)-> Answer :

/******
Output :
21
******/

?>