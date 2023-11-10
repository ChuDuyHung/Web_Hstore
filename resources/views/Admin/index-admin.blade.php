<html>
    <form action="#" method="post">
        
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <h2>Them san pham</h2>
        <input name="product_name" type="text" placeholder="Tên sản phẩm">
        <input name="product_description" type="text" placeholder="Mô tả sản phẩm">
        <input name="product_price" type="text" placeholder="Giá tiền">
        <input name="product_image" type="file" placeholder="image">
        <select name="id_Category">
            @foreach($showCategory as $item )
            <option value="{{$item->id}}">{{$item->category_name}}</option>
            @endforeach
        </select>
        <input type="submit" value="thêm">
    </form>
</html>