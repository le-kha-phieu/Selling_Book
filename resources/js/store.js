const categorySelect = document.querySelector('.book-categories');

if (categorySelect) {
  categorySelect.addEventListener('change', function () {
    const selectedValue = categorySelect.value;
    window.location.href = selectedValue;
  });
}
