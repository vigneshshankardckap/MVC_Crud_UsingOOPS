<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table>
    <tr>
        <a href="/views/user/create.php">create one new </a>
    </tr>
    <tr>
        <th > Users Details</th>
    </tr>
    <?php foreach ($users as $index =>$user): ?>

        <tr>
            <th >id</th>
            <th>Name</th>
            <th>email</th>
            <th>password</th>
            <th>Action</th>
        </tr>

        <tr>
            <td><?php echo $index +1 ?></td>
            <td><?php echo $user->name ?></td>
            <td><?php echo $user->email ?></td>
            <td><?php echo $user->pass ?></td>
            <td>
                <form action="index.php" method="post">
                    <input  type="hidden" name="id" value =" <?php echo $user->id ?>">
                    <button type ="submit" name ="action" value ="edit">edit</button>
                </form>
            </td>
            <td>
            <form action="index.php" method="post">
                    <input  type="hidden" name="id" value =" <?php echo $user->id ?>">
                    <button type ="submit" name ="action" value ="delete">delete</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<a href="/views/user/create.php">Back</a>
</body>
</html>
