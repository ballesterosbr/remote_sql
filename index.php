<?php
ini_set('short_open_tag', 'on');
if (isset($_POST['submit'])) {
    $url = $_POST['Player'];
    echo "Player selected successfully. Now select an account, write your comment and send it.";
}
?>

<html>
   <head>
      <title>Comments</title>
   </head>
   <body>
      <h2>Select the player to edit</h2>
      <form action="#" method="post">
         <select name="Player">
            <option selected="selected" disabled>Select one player</option>
            <option value="http://192.168.1.47/web/show_comments.php?id=1">Castolo</option>
            <option value="http://192.168.1.47/web/show_comments.php?id=2">El Moubarki</option>
            <option value="http://192.168.1.47/web/show_comments.php?id=3">Espimas</option>
            <option value="http://192.168.1.47/web/show_comments.php?id=4">Minanda</option>
            <option value="http://192.168.1.47/web/show_comments.php?id=5">Iouga</option>
         </select>
         <input type="submit" name="submit" value="Save my election" />
      </form>
      <form action="<?php echo $url; ?>" method="post">
         <h2>Select the voting Account</h2>
         <select name="userId">
            <option selected="selected" disabled>Select one account</option>
            <option value="1">Pepito</option>
            <option value="2">Luis</option>
            <option value="3">Marcos</option>
            <option value="4">Lucas</option>
            <option value="5">Eduardo</option>
            <option value="6">Carlos</option>
            <option value="7">Ana</option>
            <option value="8">Lorena</option>
            <option value="9">Ignacio</option>
            <option value="10">Maria</option>
         </select>
         <h2>Add a new comment</h2>
         <textarea name="body"></textarea>
         <br>
         <input type="submit" value ="Send comment"><br>
      </form>
      <br>
   </body>
</html>