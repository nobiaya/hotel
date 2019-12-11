<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="hotel.css">
    <title>Document</title>
</head>
<body style="background-color:lightblue">

     <table cellspacing="20px" cellpadding="20px" style="margin:10px auto;padding:10px;background-color:#ccc;">
    <h1 style="text-align:center; color:green;margin:10px;padding:10px;">Check All Payment<h1>
   <form>
      <tr>
        <td><label>First name</label></td>
        <td><input type="text" style="width:145px;height:25px;"></td>
    </tr>

    <tr>
        <td><label>Last name</label></td>
        <td><input type="text" style="width:145px;height:25px;"></td>
    </tr>

    <tr>
        <td><label>Surname</label></td>
        <td><input type="text" style="width:145px;height:25px;"></td>
    </tr>

    
    <tr>
        <td><label>Date of reservation</label></td>
        <td><input type="date" style="width:145px;height:25px;"></td>
    </tr>



    <tr>
        <td><label>Room type</label></td>
        <td>
        <select style="width:145px;height:25px;">
          <option>single</option>
          <option>family</option>
          <option>presidential</option>
        </select>
      </td>
    </tr>


    <tr>
        <td><label>Payment type</label></td>
        <td>
        <select style="width:145px;height:25px;">
          <option>1</option>
          <option>2</option>
          <option>3</option>
        </select>
      </td>
    </tr>


<tr>
   <td></td>
   <td><input type="submit" value="add" style="background-color:green;border:none;width:70px;height:20px;color:white;border-radius:5px;"></td> 
</tr>
   
<tr>
   <td></td>
   <td><a href="admindash.php" style="text-decoration:none;font-size:20px;margin:10px;color:green">back</a></td> 
</tr>

   </form>
 
</table>
</body>
</html>