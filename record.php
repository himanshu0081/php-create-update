<html>
    <head>
    <title>Student Records</title>
</head>
<style>
     .txt{
    text-align: center;
   }
    #wrapper{
    width: 100%;
    max: width 1221px;
    margin: 50px auto 0;
    background-color: #fff;

}

table,td {
        border: 1px solid black;
        margin: 1px auto;
        padding: 8px 25px;
       background: silver;
}
</style>
    <body>
        <div>
            <h1 class="txt">STUDENT RECORDS</h1>
            <?php
        $conn = mysqli_connect("localhost","root","seasia@123","records") or die ("connection failed");
        $sql = "SELECT * FROM student";
        $result =mysqli_query($conn,$sql) or die ("query unsuccessfull.");
        if (mysqli_num_rows($result) > 0)
        {
    ?>
            <table cellpadding="10px">
                <thead>
                <th>id</th>
                <th>firstname</th>
                <th>lastname</th>
                <th>course</th> 
                <th>marks </th> 
                <th>email</th>
                <th>numbers</th>
                <th>gender</th>
                <th>hobbies</th>
                <th>comments</th>
                
                </thead>
                
                <tbody>  
                    <?php 
                         while($row = mysqli_fetch_assoc($result))
                            {
                        ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['firstname']; ?></td>
                            <td><?php echo $row['lastname']; ?></td>
                            <td><?php echo $row['course']; ?></td>
                            <td><?php echo $row['marks']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['numbers']; ?></td>
                            <td><?php echo $row['gender']; ?></td>
                            <td><?php echo $row['hobbies']; ?></td>
                            <td><?php echo $row['comments']; ?></td>

                            <td>
                                <a href='update.php?id=<?php echo $row['id'];?>'>Edit</a>
                                <a href='delete.php?id=<?php echo $row['id'];?>'>Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                </tbody>
            </table>
            <?php } ?>
    <form>
    </form>
        </div>
    </body>
</html>