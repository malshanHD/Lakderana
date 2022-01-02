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
    <h3>Inventory Report</h3>
    <table id="customers">
        <tr>
          <th>#</th>
          <th>Liquor name</th>
          <th>Quantity</th>
          <th>Cost</th>
        </tr>
        @foreach ($inventory as $datas)
        <tr>
          <td>{{$datas->id}}</td>
          <td>{{$datas->itemName}}</td>
          <td style="text-align: center;">{{$datas->qty}}</td>
          <td style="text-align: right;">{{$datas->costPrice}}.00</td>
        </tr>
        @endforeach
      </table>

      
</body>
</html>