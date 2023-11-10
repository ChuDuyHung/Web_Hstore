<!DOCTYPE html>
<html>
<head>
	<title>Admin</title> 
    <h2></h2>
	<style>
		table {
			border:1px solid #b3adad;
			border-collapse:collapse;
			padding:5px;
		}
		table th {
			border:1px solid #b3adad;
			padding:5px;
			background: #f0f0f0;
			color: #313030;
		}
		table td {
			border:1px solid #b3adad;
			text-align:center;
			padding:5px;
			background: #ffffff;
			color: #313030;
		}
	</style>
</head>
<body>
	<table>
			<tr>
				<th>Tên sản phẩm</th>
				<th>Mô tả sản phẩm</th>
				<th>Giá sản phẩm</th>
                <th>Ảnh</th>
                <th>Loại sản phẩm</th>
			</tr>
			<form action="" method="post">
			@csrf
			@foreach($showProduct as $item)
			<tr>  
				<td><input name="product_name" type="text" value="{{$item->product_name}}"></td>
                <td><input name="product_mota" type="text" value="{{$item->product_description}}"></td>
                <td><input name="product_price" type="text" value="{{$item->product_price}}"></td>
                <td><input name="product_image" type="file" value="{{$item->product_image}}"></td>
                <td><input name="id_category" type="text" value="{{$item->id_category}}"></td>
				<td><input  type="submit" value="Sửa"></td>
			</tr>
			@endforeach
		</form>

	</table>
	<br>
Loại sản phẩm:<br> 1 -> Máy tính<br> 2 -> Máy ảnh<br> 3 -> Phụ kiện
</body>
</html>