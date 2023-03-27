<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>User Registration Form</title>
    <style>
        .content{
            max-width: 400px;
            margin:20px auto;
        }
        input, select {
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
        }
        
        input[type=submit] {
          width: 100%;
          background-color: #4CAF50;
          color: white;
          padding: 14px 20px;
          margin: 8px 0;
          border: none;
          border-radius: 4px;
          cursor: pointer;
        }
        
        input[type=submit]:hover {
          background-color: #45a049;
        }
        
        div {
          border-radius: 5px;
          background-color: #f2f2f2;
          padding: 20px;
        }
        </style>
  </head>
  <body>

    <div class="content">

        <h1>Login Form</h1>
        <form action="handle-login.php" method="post" enctype="multipart/form-data">

        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" ><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" ><br>


        <input type="submit" value="Submit">

        </form>
        
    </div>

  </body>
</html>
