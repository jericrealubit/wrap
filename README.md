# wrap

- This function will accept 2 arguments: $string and $length.
- Will return a string with "\n" added to ensure that no line is longer than $length
- implement the function directly, rather than using any built-in function (for example the wordwrap() function in PHP

# Acceptance

- function should return the string, but with new lines ("\n") added to ensure that no line is longer than $length characters
- Always wrap at word boundaries if possible, only break a word if it is longer than $length characters

# Output
http://localhost/wrap/?string=hello%20world%20how%20are%20you%20today%20abcdefghijklmnopqrstuvwxyz&length=10

![alt output](https://github.com/jericrealubit/wrap/blob/main/output.png?raw=true)
