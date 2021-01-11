<?php 
/* 
NAMESPACES-:

A namespace is a hierarchically labeled code block holding a regular PHP code.
A namespace can contain valid PHP code.
Namespace affects following types of code: classes (including abstracts and traits), interfaces, functions, and constants.
Namespaces are declared using the namespace keyword.

A namespace is used to avoid conflicting definitions and introduce more flexibility and 
organization in the code base. Just like directories, namespace can contain a hierarchy know as subnamespaces.
PHP uses the backslash as its namespace separator.
*/
namespace MyNamespace; 
function hello()  
    { 
        echo 'Hello I am a namespace!'; 
    } 
    
hello(); 
namespace\hello(); 
?> 