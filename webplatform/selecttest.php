<?php
 $connect = mysqli_connect('servername', 'yourusername', 'yourpassword', 'yourdatabasename');
 $output = '';
 $sql = "SELECT * FROM ANSWERS ORDER BY id";
 $result = mysqli_query($connect, $sql);
 $output .= '
          <div class="table-responsive">
          <table class="table table-bordered">
             <thead>
             <tr>
                      <th>Id</th>
                      <th>User Name</th>
                      <th>Answer 1</th>
                      <th>Answer 2</th>
                      <th>Answer 3</th>
                      <th>Answer 4</th>
                      <th>Answer 5</th>
                      <th>Answer 6</th>
                      <th>Image</th>
                      <th>Latitude</th>
                      <th>Longitude</th>
                      <th>Public</th>
                      <th>Spam</th>
                      <th>Delete</th>
                 </tr>
                 </thead>

               </div>

               ';
 if(mysqli_num_rows($result) > 0)
 {
      while($row = mysqli_fetch_array($result))
      {
           $output .= '

               <tr>
                     <td>'.$row["id"].'</td>
                     <td class="user_name" data-id1="'.$row["id"].'" contenteditable>'.$row["user_name"].'</td>
                     <td class="answer_1" data-id2="'.$row["id"].'" contenteditable>'.$row["answer_1"].'</td>
                     <td class="answer_2" data-id4="'.$row["id"].'" contenteditable>'.$row["answer_2"].'</td>
                     <td class="answer_3" data-id5="'.$row["id"].'" contenteditable>'.$row["answer_3"].'</td>
                     <td class="answer_4" data-id6="'.$row["id"].'" contenteditable>'.$row["answer_4"].'</td>
                     <td class="answer_5" data-id7="'.$row["id"].'" contenteditable>'.$row["answer_5"].'</td>
                     <td class="answer_6" data-id8="'.$row["id"].'" contenteditable>'.$row["answer_6"].'</td>
                     <td class="image_posted" data-id9="'.$row["id"].'">'.$row["image_posted"].'</td>
                     <td class="latitude_posted" data-id10="'.$row["id"].'" contenteditable>'.$row["latitude_posted"].'</td>
                     <td class="longitude_posted" data-id11="'.$row["id"].'" contenteditable>'.$row["longitude_posted"].'</td>
                     <td class="is_public" data-id12="'.$row["id"].'" contenteditable>'.$row["is_public"].'</td>
                     <td class="is_spam" data-id13="'.$row["id"].'" contenteditable>'.$row["is_spam"].'</td>
                     <td><button type="button" name="delete_btn" data-id3="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>
                </tr>

           ';
      }
    $output .= '
      </div>';
 }
 else
 {
      $output .= '<tr>
                          <td colspan="4">Data not Found</td>
                     </tr>';
 }
 $output .= '</table>
      </div>';
 echo $output;
 ?>
