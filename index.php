<!DOCTYPE html>
<html>
<head>
	<title>Kathlyn's To-Do List</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
  <div class="warp">
    <div class="task-list">
    <ul>
      <?php require("include/connect.php"); ?>
   </ul>
 </div>
  <form class="add-new-task" autocomplete="off">
   <input type="text" name="new-task" placeholder="Add new item..."/>
   </form>
   </div> 
</body>
 <script src="http//code.jquery.com/jquery-latest.min.js"></script>
<script>
  add_task // caling the add task function
  function add_task(){
    $(".add-newtask").submit(function){
      var new_task = $('add.new-task input[name=new-task]').val();
      if(new_task != ''){
        $.post('includes/add-task.php',{ task: new_task}, function(data){
           $(('add-newtask input[name=new-task]'].val();
            $(data).appendTo('task-list ul').hide().fadeIn();
         });
        }
        return false;
      });
    }
</script>
</html> 
