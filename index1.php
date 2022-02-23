<?php
    $conn = mysqli_connect("localhost", "root", "mypassword", "POSTS");
        
    if(!$conn) {
        die ("Connection failed: " . mysqli_connect_error());
    } 


    $res = $conn->query("SELECT * FROM last_news;");
    
    echo "<table border=1>";
    echo "<tr><th>ID</th><th>Title</th><th>Content</th><th>Postcard</th></tr>";
    
    for ($row_no = 0; $row_no <= $res->num_rows - 1; $row_no++) {
        $res->data_seek($row_no);
        $row = $res->fetch_assoc();
        echo "<tr><td>".$row['id_news']."</td><td>".$row['title']."</td><td>".$row['content']."</td><td><img src='".$row['postcard']."' width='150'/></td></tr>";
    }
    echo "</table>";
    
?>