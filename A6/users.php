<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
  <style>
    *{
      line-break: anywhere;
    }
    #users {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    #users td, #users th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    #users tr:nth-child(even){background-color: #f2f2f2;}

    #users tr:hover {background-color: #ddd;}

    #users th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #04AA6D;
      color: white;
    }
  </style>
</head>
<body>
    <h1>User List</h1>
    <table  id="users">
      <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Email</th>
          <th>Profile Picture File Name</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $fp = fopen('users.csv', 'r');
          while ($data = fgetcsv($fp)) {      
            echo "<tr>";
						echo "<td><img src='uploads/" . $data[2] . "' height='100' width='100' ></td>";
						echo "<td>" . $data[0] . "</td>";
						echo "<td>" . $data[1] . "</td>";
						echo "<td>" . $data[2] . "</td>";
						echo "</tr>";
          }
          fclose($fp);
        ?>
      </tbody>
    </table>
</body>
</html>
