<?php
   include('session.php');
?>
<html>
      <head>
           <title>Curator|Answers</title>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
      </head>
      <style>
      .btn {
          background:rgba(255,255,255, 0.3); /* Green */
          border: none;
          color: white;


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
table.table-bordered{

  width:100%;
  height:300px;
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
  <li><a class="active" href="answerscurator.php">Answers</a></li>
  <li><a href="logout.php">Logout</a></li>

</ul>
  <h1>users' answers</h1>

      <div id="live_data"></div>




</section>


<!-- follow me template -->


      </body>
      </html>
      <script>
      $(document).ready(function(){
           function fetch_data()
           {
                $.ajax({
                     url:"selecttest.php",
                     method:"POST",
                     success:function(data){
                          $('#live_data').html(data);
                     }
                });
           }
           fetch_data();
        });
        function edit_data(id, text, column_name)
        {
             $.ajax({
                  url:"edit.php",
                  method:"POST",
                  data:{id:id, text:text, column_name:column_name},
                  dataType:"text",
                  success:function(data){
                       alert(data);
                  }
             });
        }
        $(document).on('blur', '.user_name', function(){
             var id = $(this).data("id1");
             var user_name = $(this).text();
             alert (user_name);
             //edit_data(id, user_name, "user_name");
        });
        $(document).on('blur', '.answer_1', function(){
             var id = $(this).data("id2");
             var answer_1 = $(this).text();
             edit_data(id,answer_1, "answer_1");
        });
        $(document).on('blur', '.answer_2', function(){
             var id = $(this).data("id4");
             var answer_2 = $(this).text();
             edit_data(id,answer_2, "answer_2");
        });
        $(document).on('blur', '.answer_3', function(){
             var id = $(this).data("id5");
             var answer_3 = $(this).text();
             edit_data(id,answer_3, "answer_3");
        });
        $(document).on('blur', '.answer_4', function(){
             var id = $(this).data("id6");
             var answer_4 = $(this).text();
             edit_data(id,answer_4, "answer_4");
        });
        $(document).on('blur', '.answer_5', function(){
             var id = $(this).data("id7");
             var answer_5 = $(this).text();
             edit_data(id,answer_5, "answer_5");
        });
        $(document).on('blur', '.answer_6', function(){
             var id = $(this).data("id8");
             var answer_6 = $(this).text();
             edit_data(id,answer_6, "answer_6");
        });
        $(document).on('click', '.image_posted', function(){
             var id = $(this).data("id9");
             var image_posted = $(this).text();
             window.open('../'+ image_posted);
          //   edit_data(id,image_posted, "image_posted");
        });
        $(document).on('blur', '.latitude_posted', function(){
             var id = $(this).data("id10");
             var latitude_posted = $(this).text();
             edit_data(id,latitude_posted, "latitude_posted");
        });
        $(document).on('blur', '.longitude_posted', function(){
             var id = $(this).data("id11");
             var longitude_posted = $(this).text();
             edit_data(id,longitude_posted, "longitude_posted");
        });
        $(document).on('blur', '.is_public', function(){
             var id = $(this).data("id12");
             var is_public = $(this).text();
             edit_data(id,is_public, "is_public");
        });
        $(document).on('blur', '.is_spam', function(){
             var id = $(this).data("id13");
             var is_spam = $(this).text();
             edit_data(id,is_spam, "is_spam");
        });


        $(document).on('click', '.btn_delete', function(){
             var id=$(this).data("id3");
             if(confirm("Are you sure you want to delete this?"))
             {
                  $.ajax({
                       url:"delete.php",
                       method:"POST",
                       data:{id:id},
                       dataType:"text",
                       success:function(data){
                            alert(data);
                            fetch_data();
                       }
                  });
             }
        });

      // '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .

      $(window).on("load resize ", function() {
        var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
        $('.tbl-header').css({'padding-right':scrollWidth});
      }).resize();

      </script>
      <script>

      </script>
