##Laravel CRM 
CRM for Novin persian teachers.
made by Kasra Mehralizadeh.
____________________________
so in this project i tried to write a custumer relational managment for a company named novin parsian.
their goasl was to have access to their teachers via a panel.

##project format
the front-end is made by blade tempelating engine and the whole project is written with laravel 9.
the project contains login and register forms that are encrypted with csrf tokens(tokenised) and
AES(advanced encryption standard)-256 is used to encrypt the passwords.

experiance
in the first sight you will see a login panel and then when you enter the program you will see a panel that's used for 
qiuck and easy access for admins to see the teachers, delete them, edit them or search them(also ur name will be appeard 
in the head of the program and u can exit the program within).
the program containts a filter that filters the teachers and the subjects that they teach seperatedly.
the search box is also a cool idea, i've used two separeted tables and gave them to the search b box to search among them.(
    I mean if ur entry was not found in teachers, it will look for it in their courses.)

##challenges
and another thing is that the company didn't want me to have empty sluts and they've said that they wanted to have for-example five boxex for 
courses that the teachers teach but in the showing mood they didn't want that part of program to be empty. so i checked the form that they passed in 
and then i've replaced the empty sluts with '-' sign.(like the admin enters 2 enteries and the other ones are filled with '-').

that is my program, I hope you liked it.
wrote by Kasra Mehralizadeh.
