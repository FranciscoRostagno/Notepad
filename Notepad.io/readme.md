Hello, my name is Francisco Rostagno and this it's my first website!

It has things that I don't like, such as errors in understanding, but I put all my effort into trying to learn new technologies that I didn't know about and to improve my performance with those that I already understood.

Some things were left unfinished such as:

Login
Login visual change
Filter/Tag system
Visual Improvements


Without further ado I leave you the readme.

|||||||||||||||||||||
||||||Database|||||||
|||||||||||||||||||||

	***************************************************
	*Please respect the syntax for testing the website*
	***************************************************

	The database must consist of 3 entities:

	notes = {N_Cod, N_Cont, N_State, N_Archived}
		_______
	
		N_Cod  = Primary key, int, autoincremental.
		N_Cont = Varchar(700).
		N_State = int {0,1} 0 = pending, 1 = complete.
		N_Archived = int {-1, 0, 1} -1 = discarded, 0 = Unnarchived, 1 = archived.

	users = {UName, UMail, UPassword}
		 _____  _____

		UName = Unique, Varchar(50).
		UMail = Primary Key, Varchar(50).
		UPassword = Varchar(50).

	/*There is no controls in the program about password, I forgot that*/

	tags = {T_Tag, T_Code}
        	_____________

		T_Tag = varchar(15)
		T_Code = Foreign Key N_Cod REFERENCE notes.

		Primary Key (T_Tag, T_Code)

	I thought of 2 relationships for the entities

	note ----> Pertains ----> user

	Pertains = {(X,Y), X is a note ^ Y is an user ^ "A user Y can have many notes but each note X belongs to a single user"}

	Pertains = (n:1)

	note ----> Tag ----> tags 

	Tag = {(X,Y), X is a note ^ Y is a tag ^ "A tag Y can have many notes and each note X can have many tags"}

	Tag = (n,m)

	
|||||||||||||||||||||
|||||||Server||||||||
|||||||||||||||||||||

	
	In my case I used XAMPP(MySQL, Apache) to connect my website to a database, I recommend that you also use XAMPP to avoid problems or errors.


	In the ../backend/php folder there is a file called connections.php with the following function:
	
		$conection = mysqli_connect('localhost', 'root','','notepad')

	If you use XAMPP, please remember to edit the connection

|||||||||||||||||||||||||||||
||Speech and recommendation||
|||||||||||||||||||||||||||||

	It's really my first website and I couldn't understand very well the separation of backend and frontend layers, but I did the best I could, I don't have much knowledge about APIS or BASH so I recommend testing the website with XAMPP and on a computer that does not use Linux, I apologize for the low quality of the code and the lack of knowledge about certain sectors, I am very grateful that you have taken me into account anyway, I am willing to accept your verdict with my head held high. thank you so much.





	