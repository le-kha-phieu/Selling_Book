<div class="product-update" id="boxUpdateProduct">
    <i class="fa-regular fa-circle-xmark" id="closeUpdateProduct"></i>
    <div class="product-update-item">
        <h2 class="product-update-title">Sửa sản phẩm</h2>
        <p>Nhập tên sách:</p>
        <input type="text" class="product-update-input">
        <div class="product-update-image">
            <input type="file" id="inputImageBook">
            <button id="imageButton">Chọn ảnh sản phẩm</button>
            <div class="image-preview" id="imagePreview"></div>
        </div>
        <select class="product-update-category">
            <option value="Chọn loại sách">Chọn loại sách</option>
            <option value="Tình yêu">Tình yêu</option>
            <option value="Tiểu thuyết">Tiểu thuyết</option>
            <option value="Kinh dị">Kinh dị</option>
            <option value="Trẻ em">Trẻ em</option>
        </select>
        <p>Nhập tên tác giả:</p>
        <input type="text" class="product-update-input">
        <textarea class="product-update-content" rows="5" cols="20" placeholder="Nhập tóm tắt nội dung"></textarea>
        <p>Nhập giá bán:</p>
        <input type="number" class="product-update-input">
        <div class="product-update-submit">
            <button>Lưu</button>
        </div>
    </div>
</div>
