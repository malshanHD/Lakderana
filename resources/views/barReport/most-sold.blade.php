<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        #customers {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        #customers td, #customers th {
          border: 1px solid #ddd;
          padding: 8px;
        }
        
        #customers tr:nth-child(even){background-color: #f2f2f2;}
        
        #customers tr:hover {background-color: #ddd;}
        
        #customers th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #04AA6D;
          color: white;
        }
        h3 {
            text-align: center;
            text-transform: uppercase;
            color: #4CAF50;
            }
    </style>

     

</head>
<body>
    <h3>Most Sold Items</h3>
    <table id="customers">
        <tr>
          <th>No.</th>
          <th>Liquor name</th>
          <th>Sold times</th>
        </tr>
        @foreach ($mostsold as $datas)
        <tr>
          <td>#</td>
          <td>{{$datas->item_id}}</td>
          <td>{{$datas->magnitude}}</td>
        </tr>
        @endforeach
      </table>

      
</body>
</html>