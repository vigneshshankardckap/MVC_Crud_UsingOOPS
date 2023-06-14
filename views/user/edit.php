

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php foreach($fetch as $user):?>
    <form action="index.php" method="POST">
      <label for="">UserName</label>
      <input type="hidden" name="action" value ="update">
      <input type="text" placeholder="UserName" name="username" value="<?=$user->name;?>">
      <label for="">email</label>
      <input type="text" placeholder="email" name="email" value="<?=$user->email;?>">
      <label for="">password</label>
      <input type="text" placeholder="password" name="password" value="<?=$user->pass;?>">
        <button type="submit"  value="<?=$user->id;?>" name="update">update</button>
    </form>
    <?php endforeach;?>
</body>

</html>
