
  <body> <center>
   <table width="290px" cellspacing="0px" cellpadding="0px" border="2px">
   
      <?php
      for($row=1;$row<=8;$row++)
	  {
          echo "<tr>";
          for($col=1;$col<=8;$col++)
		  {
          $total=$row+$col;
          if($total%2==0)
		  {
          echo "<td height=30px width=50px bgcolor=white></td>";
          }
		  else
		  {
          echo "<td height=30px width=50px bgcolor=black></td>";
          }
          }
          echo "</tr>";
    }
          ?>
  </table>
  </body></center>
