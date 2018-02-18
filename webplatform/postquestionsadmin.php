<?php
   include('sessionadmin.php');
?>
<html>
      <head>
           <title>Admin|Questions</title>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
      </head>
      <style>
      .btn {

    position:absolute;
    right: 3%;
    background-color: rgba(255,255,255, 0.3);
    border: none;
    color: white;
    padding: 10px 40px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;


      }
      ul {

          width: 320px;

          list-style-type: none;
          margin: 0;
          padding: 0;
          overflow: hidden;

      }

      li {
          float: left;
      }

      li a {
          display: block;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
      }

      li a:hover {
            background:rgba(255,255,255, 0.3);
      }
      .active {
    opacity: 0.5;
}
h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table.questions-table{

  width:100%;
  height:100px;
  overflow-x:auto;
  overflow-y: auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);

}
.tbl-header{
  background-color: rgba(255,255,255,0.3);


  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);

 }
.tbl-content{
  height:300px;

  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);

}
th{
  background-color: rgba(255,255,255,0.3);


  margin-top: 0px;


  padding: 20px 15px;
  text-align: center;
  font-weight: 300;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 20px;
  text-align: center;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}


/* demo styles */

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background-image: url("adminbackground.jpg");

  font-family: 'Roboto', sans-serif;
}
section{
  margin: 50px;
}


/* follow me template */


/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
}
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
}
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
}
      </style>

      <body>
        <section>
  <!--for demo wrap-->
  <h1 align = "center">Welcome <?php echo $login_session; ?></h1>

  <ul>
  <li><a  href="answersadmin.php">Answers</a></li>
  <li><a  class="active" href="postquestionsadmin.php">Post Questions</a></li>
  <li><a href="logout.php">Logout</a></li>

</ul>
  <h1>Post your Questions</h1>

  <div class="questions" align = "center">
       <table class="questions-table">
            <tr>

                 <th>Question 1</th>
                 <th >Question 2</th>
                 <th >Question 3</th>
                 <th >Question 4</th>
                 <th >Question 5</th>
                 <th >Question 6</th>



            </tr>
            <tr>

                 <td id="question1"contenteditable></td>
                 <td id="question2"contenteditable></td>
                 <td id="question3"contenteditable></td>
                 <td id="question4"contenteditable></td>
                 <td id="question5"contenteditable></td>
                 <td id="question6"contenteditable></td>


           </tr>
         </table>
   </div>
   <div class="questions" align = "center">
        <table class="questions-table">
             <tr>


                  <th>Button1_1</th>
                  <th>Button1_2</th>
                  <th>Button1_3</th>
                  <th>Button1_4</th>


             </tr>
             <tr>


                  <td id="button1_1"contenteditable></td>
                  <td id="button1_2"contenteditable></td>
                  <td id="button1_3"contenteditable></td>
                  <td id="button1_4"contenteditable></td>


            </tr>
          </table>
    </div>

    <div class="questions" align = "center">
         <table class="questions-table">
              <tr>


                   <th>Button2_1</th>
                   <th>Button2_2</th>
                   <th>Button2_3</th>
                   <th>Button2_4</th>


              </tr>
              <tr>


                   <td id="button2_1"contenteditable></td>
                   <td id="button2_2"contenteditable></td>
                   <td id="button2_3"contenteditable></td>
                   <td id="button2_4"contenteditable></td>


             </tr>
           </table>
     </div>

     <div class="questions" align = "center">
          <table class="questions-table">
               <tr>


                    <th>Button3_1</th>
                    <th>Button3_2</th>
                    <th>Button3_3</th>
                    <th>Button3_4</th>


               </tr>
               <tr>


                    <td id="button3_1"contenteditable></td>
                    <td id="button3_2"contenteditable></td>
                    <td id="button3_3"contenteditable></td>
                    <td id="button3_4"contenteditable></td>


              </tr>
            </table>
      </div>

<button type="button" name="btn_add" id="btn_add" class="btn">Add</button></td>


</section>


<!-- follow me template -->


      </body>
      </html>
      <script>
      $(document).ready(function(){
      $(document).on('click', '#btn_add', function(){
           var question1 = $('#question1').text();
           var question2 = $('#question2').text();
           var question3 = $('#question3').text();
           var question4 = $('#question4').text();
           var question5 = $('#question5').text();
           var question6 = $('#question6').text();
           var button1_1 = $('#button1_1').text();
           var button1_2 = $('#button1_2').text();
           var button1_3 = $('#button1_3').text();
           var button1_4 = $('#button1_4').text();
           var button2_1 = $('#button2_1').text();
           var button2_2 = $('#button2_2').text();
           var button2_3 = $('#button2_3').text();
           var button2_4 = $('#button2_4').text();
           var button3_1 = $('#button3_1').text();
           var button3_2 = $('#button3_2').text();
           var button3_3 = $('#button3_3').text();
           var button3_4 = $('#button3_4').text();

           if(question1 == '')
           {
                alert("Enter Question 1");
                return false;
           }
           if(question2 == '')
           {
                alert("Enter Question 2");
                return false;
           }
           if(question3 == '')
           {
                alert("Enter Question 3");
                return false;
           }
           if(question4 == '')
           {
                alert("Enter Question 4");
                return false;
           }
           if(question5 == '')
           {
                alert("Enter Question 5");
                return false;
           }
           if(question6 == '')
           {
                alert("Enter Question 6");
                return false;
           }
           $.ajax({
               url:"insert.php",
               method:"POST",
               data:{question1:question1, question2:question2, question3:question3, question4:question4, question5:question5, question6:question6, button1_1:button1_1, button1_2:button1_2, button1_3:button1_3, button1_4:button1_4, button2_1:button2_1, button2_2:button2_2, button2_3:button2_3, button2_4:button2_4, button3_1:button3_1, button3_2:button3_2, button3_3:button3_3, button3_4:button3_4},
               dataType:"text",
               success:function(data)
               {
                    alert(data);
                  //  fetch_data();
               }
          })

      });
    });

      // '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .

      $(window).on("load resize ", function() {
        var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
        $('.tbl-header').css({'padding-right':scrollWidth});
      }).resize();

      </script>
      <script>

      </script>
