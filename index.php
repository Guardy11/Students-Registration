<html>
    <head>
        <title>Form</title>

    
    </head>
    <link href = "temp.css" rel = "stylesheet" type="type/css">
    <center><table border = "3" cellpadding = "10">
    <tr>
    <td colspan = "3">
    <h1><center>Student Registration Form</center></h1>
    </td>
    </tr>
    <body>
	<form method="POST" action="post.php">
    <center>
    <tr>
        <td>
            First Name
        </td>
        <td>
            Middle Name
        </td>
        <td>
            Last Name
        </td>
        </tr>
		<form>
        <tr>
        <td>
            <input type = "text"  name = "firstname" placeholder = "firstname">
        </td>
        <td>
            <input type = "text" name = "midname" placeholder = "middle name">
        </td>
        <td>
            <input type = "text" name = "lastname" placeholder = "lastname">
        </td>
        <tr>
        <td>
            Gender
        </td>
        <td>
            <input type ='radio' name = "gender" value = "male" name = "Gender" >male
        </td>
        <td>
            <input type = 'radio' name = "gender" value = "female" name = "Gender" >female
        </td>
        <tr>
        <td colspan = "3">
            Birthday
        </td>
        </tr>
        <tr><td>
            Month
            <select name = "mon">
            <option>January</option>
            <option>February</option>
            <option>March</option>
            <option>April</option>
            <option>May</option>
            <option>June</option>
            <option>July</option>
            <option>August</option>
            <option>September</option>
            <option>October</option>
            <option>November</option>
            <option>December</option>
        </td>
        <td>
            Day
            <select name = "day">
            <option>1
            <option>2
            <option>3
            <option>4
            <option>5
            <option>6
            <option>7
            <option>8
            <option>9
            <option>10
            <option>11
            <option>12
            <option>13
            <option>14
            <option>15
            <option>16
            <option>17
            <option>18
            <option>19
            <option>20
            <option>21
            <option>22
            <option>23
            <option>24
            <option>25
            <option>26
            <option>27
            <option>28
            <option>29
            <option>30
            <option>31
            </td>
        <td>
            Year
            <select name = "year">
            <option>1990
            <option>1991
            <option>1992
            <option>1993
            <option>1994
            <option>1995
            <option>1996
            <option>1997
            <option>1998
            <option>1999
            <option>2000
            <option>2001
            <option>2002
            <option>2003
            <option>2004
            <option>2005
            <option>2006
            <option>2007
            <option>2008
            <option>2009
            <option>2010
			<option>2012
			<option>2013	
			<option>2014
			<option>2015
	 <tr>
	 <td>
            Program
	 </td>
	 <td>
            <select name = "course">
            <option>AB Broadcasting
            <option>BS Accountancy
            <option>BS Accounting Technology
            <option>BS Information System
			<option>BS Social Works
            <option>Mass Communicaton Technology
            <option>Nursing Assistance
			<option>International Cookery
	    </td>
	    </tr>
         <tr>
         <td colspan = "3">
	    Student Type
	 </td>
	 </tr>
	 <tr>
	 <td colspan = "3">
	    <input type = 'radio' name = "ss" value = "Full Scholar"  name = "StudentType">Full Scholar<br>
	    <input type = 'radio' name = "ss" value = "Partial Scholar" name = "StudentType">Partial Scholar<br>
	    <input type = 'radio' name = "ss" value = "Payee" name = "StudentType">Payee<br>
	 </td>
	 </tr>
	 <tr>
	 <td colspan = "3">
	  Address
	 </td>
	 </tr>
	 <tr>
	 <td colspan="3">
	 <textarea style="width: 100%;height: 103px;" name = "add"></textarea>	
	 <input type = "submit" value = "submit registration">
	 </tr>
	 </td>
			
 


    </table></center>
</form>        
</body>
</html>

