<html>
<head>
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
               <td><input type="button" name="1" value="1" onclick="calculator.display.value += '1'"></td>
               <td><input type="button" name="2" value="2" onclick="calculator.display.value += '2'"></td>
               <td><input type="button" name="3" value="3" onclick="calculator.display.value += '3'"></td>
               <td><input type="button" class="operator" name="plus" value="+" onclick="calculator.display.value += '+'"></td>
            </tr>
            <tr>
               <td><input type="button" name="4" value="4" onclick="calculator.display.value += '4'"></td>
               <td><input type="button" name="5" value="5" onclick="calculator.display.value += '5'"></td>
               <td><input type="button" name="6" value="6" onclick="calculator.display.value += '6'"></td>
               <td><input type="button" class="operator" name="minus" value="-" onclick="calculator.display.value += '-'"></td>
            </tr>
            <tr>
               <td><input type="button" name="7" value="7" onclick="calculator.display.value += '7'"></td>
               <td><input type="button" name="8" value="8" onclick="calculator.display.value += '8'"></td>
               <td><input type="button" name="9" value="9" onclick="calculator.display.value += '9'"></td>
               <td><input type="button" class="operator" name="multiply" value="x" onclick="calculator.display.value += '*'"></td>
            </tr>
            <tr>
               <td><input type="button" name="clear" value="c" onclick="calculator.display.value = ''"></td>
               <td><input type="button" name="0" value="0" onclick="calculator.display.value += '0'"></td>
               <td><input type="button" name="enter" value="=" onclick="calculator.display.value = eval(calculator.display.value)"></td>
               <td><input type="button" class="operator" name="divide" value="/" onclick="calculator.display.value += '/'"></td>
            </tr>
         </table>
      </form>
  </body>
</head>
</html>
