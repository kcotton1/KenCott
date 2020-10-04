<html>
<head>
 <meta charset="UTF-8">
 <meta name="Kenji Cotton" content="calculator, basic math, it5236">
 <title>Calculator</title>
 <link rel="stylesheet" href="css/calccolor.css">
   <body>
      <form name="calc">
         <table>
            <tr>
               <td colspan="4">
                  <input type="text" name="display" id="display" disabled>
               </td>
            </tr>
            <tr>
               <td><input type="button" name="1" value="1" onclick="calc.display.value += '1'"></td>
               <td><input type="button" name="2" value="2" onclick="calc.display.value += '2'"></td>
               <td><input type="button" name="3" value="3" onclick="calc.display.value += '3'"></td>
               <td><input type="button" class="operator" name="plus" value="+" onclick="calc.display.value += '+'"></td>
            </tr>
            <tr>
               <td><input type="button" name="4" value="4" onclick="calc.display.value += '4'"></td>
               <td><input type="button" name="5" value="5" onclick="calc.display.value += '5'"></td>
               <td><input type="button" name="6" value="6" onclick="calc.display.value += '6'"></td>
               <td><input type="button" class="operator" name="minus" value="-" onclick="calc.display.value += '-'"></td>
            </tr>
            <tr>
               <td><input type="button" name="7" value="7" onclick="calc.display.value += '7'"></td>
               <td><input type="button" name="8" value="8" onclick="calc.display.value += '8'"></td>
               <td><input type="button" name="9" value="9" onclick="calc.display.value += '9'"></td>
               <td><input type="button" class="operator" name="times" value="x" onclick="calc.display.value += '*'"></td>
            </tr>
            <tr>	
               <td><input type="button" name="squared" value="^2" onclick="calc.display.value += '**2'"></td>
               <td><input type="button" name="cubed" value="^3" onclick="calc.display.value += '**3'"></td>
               <td><input type="button" name="toten" value="^10" onclick="calc.display.value += '**10'"></td>
               <td><input type="button" class="operator" name="power" value="x^y" onclick="calc.display.value += '**'"></td>
            </tr>
	    <tr>	
               <td><input type="button" name="bigO" value=".0" onclick="calc.display.value += '.0'"></td>
               <td><input type="button" name="bigduO" value=".00" onclick="calc.display.value += '.00'"></td>
               <td><input type="button" name="bigtriO" value=".000" onclick="calc.display.value += '.000'"></td>
               <td><input type="button" class="operator" name="decimal" value="." onclick="calc.display.value += '.'"></td>
            </tr>
            <tr>
               <td><input type="button" name="clear" value="c" onclick="calc.display.value = ''"></td>
               <td><input type="button" name="0" value="0" onclick="calc.display.value += '0'"></td>
		<td><input type="button" name="enter" value="=" onclick="calc.display.value = try: eval(calc.display.value)" except: calc.display.calue = "Invalid Value"></td>
               <td><input type="button" class="operator" name="div" value="/" onclick="calc.display.value += '/'"></td>
            </tr>
         </table>
      </form>
   </body>
</head>
</html>
