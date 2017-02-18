<html>
 <head>
 <title></title>
 </head>
 <body>
 <form method="post" action="/todo"> 
 To-do<br/>
  
 <input type="text" name="title" ><br/>
 <input type="submit" value="Sumbit">
 {{csrf_field()}}
 </form>
  </body>
 </html>