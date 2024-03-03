const pElement = document.getElementById("imageButton")
const inputElement = document.getElementById("inputImageBook")
const imagePreview = document.getElementById("imagePreview")

let currentImage = null

pElement.addEventListener("click", function () {
  inputElement.click()
})

inputElement.addEventListener("change", function () {
  const selectedFileName = inputElement.value.split('\\').pop()

  if (selectedFileName) {
    const file = inputElement.files[0]

    if (file && file.type.startsWith('image/')) {
      const reader = new FileReader()

      reader.onload = function (e) {
        const imageUrl = e.target.result
        currentImage = `<img src="${imageUrl}" alt="Image Preview">`
        imagePreview.innerHTML = currentImage
        imagePreview.style.display = 'block'
      }

      reader.readAsDataURL(file)
    }
  } else {
    if (currentImage) {
      imagePreview.innerHTML = currentImage
      imagePreview.style.display = 'block'
    } else {
      imagePreview.innerHTML = ""
      imagePreview.style.display = 'none'
    }
  }
})

// const btnUpdate = document.getElementsByClassName('btn-update')
// const btnDelete = document.getElementsByClassName('btn-delete')
// const boxDelete = document.getElementsByClassName('box-delete')
// const btnClose = document.getElementsByClassName('btn-close')

// btnDelete.addEventListener('click', function() {
//   boxDelete.style.display = "block"
// })

// btnClose.addEventListener('click', function() {
//   boxDelete.style.display = "none"
// })

document.addEventListener('DOMContentLoaded', function() {
  // Lấy tất cả các button delete
  const btnDeletes = document.querySelectorAll('.btn-delete');
  const btnClose = document.querySelectorAll('.btn-close');

  // Lặp qua từng button delete để gắn sự kiện click
  btnDeletes.forEach(function(btnDelete, index) {
      btnDelete.addEventListener('click', function() {
          // Lấy box delete tương ứng
          let boxDelete = document.querySelectorAll('.box-delete')[index];
          boxDelete.style.display = 'block'; // Hiển thị box delete khi nút "Xóa" được click
      });
  });

  // Lặp qua từng button close để gắn sự kiện click
  btnClose.forEach(function(btn) {
      btn.addEventListener('click', function() {
          // Tìm box delete chứa nút "Cancel" được click và ẩn nó đi
          let boxDelete = this.parentElement.parentElement;
          boxDelete.style.display = 'none';
      });
  });
});
