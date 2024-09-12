function sortProducts() {
    const sortOrder = document.getElementById('sort').value;
    
    // Lấy tất cả sản phẩm
    const productList = document.querySelectorAll('.product-item');
    
    // Tạo mảng từ NodeList
    const productsArray = Array.from(productList);
    
    // Sắp xếp sản phẩm
    productsArray.sort((a, b) => {
        const priceA = parseFloat(a.querySelector('.inner-price').textContent.replace(' VND', ''));
        const priceB = parseFloat(b.querySelector('.inner-price').textContent.replace(' VND', ''));
        
        if (sortOrder === 'high') {
            return priceB - priceA; // Sắp xếp theo giá cao
        } else if (sortOrder === 'low') {
            return priceA - priceB; // Sắp xếp theo giá thấp
        } else {
            return 0; // Không sắp xếp
        }
    });
    
    // Gắn sản phẩm đã sắp xếp lại vào DOM
    const productContainer = document.querySelector('.col-large-2 .inner-wrap');
    productContainer.innerHTML = ''; // Xóa các sản phẩm hiện tại
    productsArray.forEach(product => {
        productContainer.appendChild(product); // Thêm lại các sản phẩm đã sắp xếp
    });
}
function filterProducts() {
    // Lấy giá trị từ dropdown chuyên mục và tác giả
    const category = document.getElementById('category').value;
    const brand = document.getElementById('brand').value;

    // Lấy tất cả các sản phẩm
    const products = document.querySelectorAll('.product-item a');

    products.forEach((product) => {
        // Lấy thuộc tính data-filter của từng sản phẩm
        const productFilter = product.getAttribute('data-filter');

        // Kiểm tra xem sản phẩm có thuộc chuyên mục và tác giả đã chọn không
        if ((category === "" || productFilter.includes(category)) &&
            (brand === "" || productFilter.includes(brand))) {
            product.closest('.product-item').style.display = "block";
        } else {
            product.closest('.product-item').style.display = "none";
        }
    });
}
function filterProducts() {
    const category = document.getElementById('category').value;
    const brand = document.getElementById('brand').value;

    // Lấy tất cả các sản phẩm
    const products = document.querySelectorAll('.product-item a');

    // Kiểm tra xem có chọn mặc định hay không (nếu cả hai là rỗng hoặc "default")
    if (category === "" && brand === "") {
        products.forEach((product) => {
            product.closest('.product-item').style.display = "block"; // Hiển thị tất cả sản phẩm
        });
        return; // Thoát khỏi hàm vì không cần lọc
    }

    // Lọc các sản phẩm theo chuyên mục và tác giả
    products.forEach((product) => {
        const productFilter = product.getAttribute('data-filter');

        if ((category === "" || productFilter.includes(category)) &&
            (brand === "" || productFilter.includes(brand))) {
            product.closest('.product-item').style.display = "block"; // Hiển thị sản phẩm phù hợp
        } else {
            product.closest('.product-item').style.display = "none"; // Ẩn sản phẩm không phù hợp
        }
    });
}


// Hàm chuyển đổi chuỗi có dấu thành không dấu
function removeAccents(str) {
    return str.normalize('NFD').replace(/[\u0300-\u036f]/g, '');
}

// Hàm tìm kiếm sản phẩm
function searchByNameAndCategory(event) {
    // Kiểm tra nếu người dùng nhấn Enter (keyCode 13)
    if (event.keyCode === 13) {
        event.preventDefault(); // Ngăn form reload trang

        // Lấy giá trị từ ô tìm kiếm và loại bỏ dấu
        let valueSearchInput = document.getElementsByName("keyword")[0].value;
        let normalizedSearchInput = removeAccents(valueSearchInput).toUpperCase();

        // Lấy tất cả các sản phẩm
        let productItems = document.querySelectorAll('.product-item');

        // Lặp qua từng sản phẩm
        productItems.forEach(function(item) {
            // Lấy tên sản phẩm (pname) và loại sản phẩm (cname), sau đó loại bỏ dấu
            let pname = removeAccents(item.querySelector('.inner-title').textContent).toUpperCase();
            let cname = removeAccents(item.querySelector('.inner-info-item b').textContent).toUpperCase();

            // Kiểm tra nếu từ khóa tìm kiếm có trong tên sản phẩm hoặc tên loại sản phẩm
            if (pname.includes(normalizedSearchInput) || cname.includes(normalizedSearchInput)) {
                // Hiển thị sản phẩm nếu khớp
                item.style.display = 'block';
            } else {
                // Ẩn sản phẩm nếu không khớp
                item.style.display = 'none';
            }
        });
    }
}

// Gắn sự kiện khi nhấn phím vào ô tìm kiếm
document.getElementsByName("keyword")[0].addEventListener('keydown', searchByNameAndCategory);


// Hàm tìm kiếm ở các file khác ngoài index.danhmuc.php
function searchByEnter() {
    const keyword = document.getElementById("keyword").value;
    if (keyword.trim() === "") {
        alert("Vui lòng nhập từ khóa tìm kiếm!");
        return; // Ngăn việc chuyển trang nếu không có từ khóa
    }

    // Chuyển đổi từ khóa thành dạng không có dấu
    const normalizedKeyword = removeAccents(keyword);

    // Chuyển hướng đến trang danh mục với từ khóa tìm kiếm
    window.location.href = `index.danhmuc.php?keyword=${encodeURIComponent(keyword)}&normalized=${encodeURIComponent(normalizedKeyword)}`;
}

// Gán sự kiện nhấn Enter cho input
document.addEventListener('DOMContentLoaded', function() {
    const keywordInput = document.getElementById("keyword");
    keywordInput.addEventListener('keydown', function(event) {
        if (event.key === 'Enter') {
            event.preventDefault(); // Ngăn hành động mặc định của phím Enter
            searchByEnter(); // Gọi hàm tìm kiếm
        }
    });

    // Gán sự kiện nhấn nút tìm kiếm
    const searchButton = document.getElementById("search-button");
    if (searchButton) {
        searchButton.addEventListener('click', function(event) {
            event.preventDefault(); // Ngăn hành động mặc định của nút
            searchByEnter(); // Gọi hàm tìm kiếm
        });
    }
});

// Hàm tìm kiếm sản phẩm dựa trên từ khóa
function searchProducts(keyword) {
    const products = document.querySelectorAll('.product-item'); // Chọn tất cả các sản phẩm

    // Lọc sản phẩm dựa trên từ khóa
    products.forEach(product => {
        const pname = removeAccents(product.querySelector('.inner-title').innerText.toLowerCase());
        const cname = removeAccents(product.querySelector('.inner-info-item b').innerText.toLowerCase());

        if (pname.includes(keyword.toLowerCase()) || cname.includes(keyword.toLowerCase())) {
            product.style.display = "block"; // Hiển thị sản phẩm nếu khớp
        } else {
            product.style.display = "none"; // Ẩn sản phẩm nếu không khớp
        }
    });
}

// Xử lý từ khóa khi trang được tải
window.addEventListener('load', function() {
    const urlParams = new URLSearchParams(window.location.search);
    const keyword = urlParams.get('keyword');
    
    if (keyword) {
        searchProducts(keyword);
    }
});
