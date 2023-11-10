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
                <th>Tùy chỉnh</th>
			</tr>
            @foreach($showProduct as $item)
			<tr>  
				<td>{{$item->product_name}}</td>
                <td>{{$item->product_description}}</td>
                <td>{{$item->product_price}}</td>
                <td>{{$item->product_image}}</td>
                <td>{{$item->id_category}}</td>
                <td><a href="{{route('admin.editProduct')}}?id={{$item->id}}">Sửa</a>| <a href="{{route('admin.deleteProduct')}}?id={{$item->id}}">Xóa</a></td>
			</tr>
            @endforeach
	</table>
</body>
</html>