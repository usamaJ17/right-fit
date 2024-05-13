/*
Template Name: Toner eCommerce + Admin HTML Template
Author: Themesbrand
Version: 1.2.0
Website: https://Themesbrand.com/
Contact: Themesbrand@gmail.com
File: product category init File
*/
var prevButton = document.getElementById('page-prev');
var nextButton = document.getElementById('page-next');
var currentPage = 1;
var itemsPerPage = 9;
var categoryListData = [];
loadcategoryList(categoryListData, currentPage);
paginationEvents();

function loadcategoryList(datas = [], page) {
    var categoryListData = [];
    $.ajax({
        url: $('meta[name="base-url"]').attr('content') + '/admin/catagory',
        type: 'GET',
        dataType: 'json',
        success: function(response) {
            // Loop through each category in the response
            $.each(response, function(index, category) {
                var categoryData = {
                    'id': category.id,
                    'categoryImg': category.image, // Assuming the image URL is stored in 'image' attribute
                    'categoryTitle': category.title,
                    'subCategory': [], // Assuming subCategory data is not available in the response
                    'description': category.description
                };

                categoryListData.push(categoryData);
            });
            datas = categoryListData;
            var pages = Math.ceil(datas.length / itemsPerPage)
            if (page < 1) page = 1
            if (page > pages) page = pages;
            document.getElementById("categories-list").innerHTML = "";
            for (var i = (page - 1) * itemsPerPage; i < (page * itemsPerPage) && i < datas.length; i++) {
                if (datas[i]) {
                    // Array.from(datas).forEach(function (listdata) {
                    var showElem = 4;
                    var subCategoryElem = datas[i].subCategory;
                    var subCategoryHtml = '';
                    if (datas[i].subCategory) {
                        Array.from(subCategoryElem.slice(0, showElem)).forEach(function (elem) {
                            subCategoryHtml += '<li><a href="#!" class="text-muted">' + elem + '</a></li>';
                        });
                    }
                    document.getElementById("categories-list").innerHTML += '<div class="col-xl-4 col-md-6">\
                            <div class="card card-height-100 categrory-widgets overflow-hidden">\
                                <div class="card-body p-4">\
                                    <div class="d-flex align-items-center mb-3">\
                                        <h5 class="flex-grow-1 mb-0">'+ datas[i].categoryTitle + '</h5>\
                                        <ul class="flex-shrink-0 list-unstyled hstack gap-1 mb-0">\
                                            <li><a href="#!" class="badge bg-info-subtle text-info  edit-list" data-edit-id="'+ datas[i].id + '">Edit</a></li>\
                                            <li><a href="#delteModal" data-bs-toggle="modal" class="badge bg-danger-subtle text-danger  remove-list" data-remove-id="'+ datas[i].id + '">Delete</a></li>\
                                        </ul>\
                                    </div>\
                                    <ul class="list-unstyled vstack gap-2 mb-0">'+ subCategoryHtml + '</ul>\
                                    <div class="d-none">'+ datas[i].description + '</div>\
                                    <div class="mt-3">\
                                        <a data-bs-toggle="offcanvas" href="#overviewOffcanvas"  data-view-id="'+ datas[i].id + '" class="overview-btn fw-medium link-effect">Read More <i class="ri-arrow-right-line align-bottom ms-1"></i></a>\
                                    </div>\
                                    <img src="'+ datas[i].categoryImg + '" alt="" class="img-fluid category-img object-fit-cover">\
                                </div>\
                            </div>\
                        </div>';
                };
            };
        
            selectedPage();
            currentPage == 1 ? prevButton.parentNode.classList.add('disabled') : prevButton.parentNode.classList.remove('disabled');
            currentPage == pages ? nextButton.parentNode.classList.add('disabled') : nextButton.parentNode.classList.remove('disabled');
            editCategoryList();
            removeItem();
            overViewList();
        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });
};


function selectedPage() {
    var pagenumLink = document.getElementById('page-num').getElementsByClassName('clickPageNumber');
    for (var i = 0; i < pagenumLink.length; i++) {
        if (i == currentPage - 1) {
            pagenumLink[i].parentNode.classList.add("active");
        } else {
            pagenumLink[i].parentNode.classList.remove("active");
        }
    }
};

// paginationEvents
function paginationEvents() {
    var numPages = function numPages() {
        return Math.ceil(categoryListData.length / itemsPerPage);
    };

    function clickPage() {
        document.addEventListener('click', function (e) {
            if (e.target.nodeName == "A" && e.target.classList.contains("clickPageNumber")) {
                currentPage = e.target.textContent;
                loadcategoryList(categoryListData, currentPage);
            }
        });
    };

    function pageNumbers() {
        var pageNumber = document.getElementById('page-num');
        pageNumber.innerHTML = "";
        // for each page
        for (var i = 1; i < numPages() + 1; i++) {
            pageNumber.innerHTML += "<div class='page-item'><a class='page-link clickPageNumber' href='javascript:void(0);'>" + i + "</a></div>";
        }
    }

    prevButton.addEventListener('click', function () {
        if (currentPage > 1) {
            currentPage--;
            loadcategoryList(categoryListData, currentPage);
        }
    });

    nextButton.addEventListener('click', function () {
        if (currentPage < numPages()) {
            currentPage++;
            loadcategoryList(categoryListData, currentPage);
        }
    });

    pageNumbers();
    clickPage();
    selectedPage();
}

// Search product list
var searchInputList = document.getElementById("searchInputList");
searchInputList.addEventListener("keyup", function () {
    var inputVal = searchInputList.value.toLowerCase();
    function filterItems(arr, query) {
        return arr.filter(function (el) {
            return el.categoryTitle.toLowerCase().indexOf(query.toLowerCase()) !== -1
        })
    }
    var filterData = filterItems(categoryListData, inputVal);
    searchResult(filterData);
    loadcategoryList(filterData, currentPage);
});

var editlist = false;

// category image
document.querySelector("#category-image-input").addEventListener("change", function () {
    var preview = document.querySelector("#category-img");
    var file = document.querySelector("#category-image-input").files[0];
    var reader = new FileReader();
    reader.addEventListener("load", function () { 
        preview.src = reader.result;
    }, false);
    if (file) {
        reader.readAsDataURL(file);
    }
});


var createCategoryForm = document.querySelectorAll('.createCategory-form')
Array.prototype.slice.call(createCategoryForm).forEach(function (form) {
    form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
            form.classList.add('was-validated');
        } else {
            event.preventDefault();
            var inputTitle = document.getElementById('categoryTitle').value;
            var categoryImg = document.getElementById("category-img").src;
            var categoryDesc = document.getElementById("descriptionInput").value;

            var imgArray = window.location.href.split("#");

            if (inputTitle !== "" && categoryImg !== imgArray[0] && !editlist) {
                var formData = $('#createCategory-form').serialize();
                $.ajax({
                    url: $('#createCategory-form').attr('action'), // URL to submit the form data
                    type: 'POST', // Method type
                    data: formData, // Form data
                    success: function(response) { // On success
                        categoryListData = [];
                        searchResult(categoryListData);
                        loadcategoryList(categoryListData, currentPage);
                        form.classList.remove('was-validated');
                    },
                    error: function(xhr, status, error) { // On error
                        // Handle error here, you can display error message or handle errors as needed
                        console.error(xhr.responseText);
                    }
                });
            } else if (inputTitle !== "" && categoryImg !== imgArray[0] && editlist) {
                getEditid = document.getElementById("categoryid-input").value;
                categoryListData = categoryListData.map(function (item) {
                    if (item.id == getEditid) {
                        var editObj = {
                            'id': getEditid,
                            "categoryImg": categoryImg,
                            "categoryTitle": inputTitle,
                            "subCategory": item.subCategory,
                            "description": categoryDesc,
                        }
                        return editObj;
                    }
                    return item;
                });
                loadcategoryList(categoryListData, currentPage);
                clearVal();
                form.classList.remove('was-validated');

                editlist = false;

            } else {
                form.classList.add('was-validated');
            }
            
            sortElementsById();
        }
    }, false)
});

function searchResult(data) {
    if (data.length == 0) {
        document.getElementById("pagination-element").style.display = "none";
        // document.getElementById("search-result-elem").classList.remove("d-none");
    } else {
        document.getElementById("pagination-element").style.display = "flex";
        // document.getElementById("search-result-elem").classList.add("d-none");
    }

    var pageNumber = document.getElementById('page-num');
    pageNumber.innerHTML = "";
    var dataPageNum = Math.ceil(data.length / itemsPerPage)
    // for each page
    for (var i = 1; i < dataPageNum + 1; i++) {
        pageNumber.innerHTML += "<div class='page-item'><a class='page-link clickPageNumber' href='javascript:void(0);'>" + i + "</a></div>";
    }
}


function fetchIdFromObj(category) {
    return parseInt(category.id);
}

function findNextId() {
    if (categoryListData.length === 0) {
        return 0;
    }
    var lastElementId = fetchIdFromObj(categoryListData[categoryListData.length - 1]),
        firstElementId = fetchIdFromObj(categoryListData[0]);
    return (firstElementId >= lastElementId) ? (firstElementId + 1) : (lastElementId + 1);
}

function sortElementsById() {
    var manyCategory = categoryListData.sort(function (a, b) {
        var x = fetchIdFromObj(a);
        var y = fetchIdFromObj(b);

        if (x > y) {
            return -1;
        }
        if (x < y) {
            return 1;
        }
        return 0;
    })
    loadcategoryList(manyCategory, currentPage);
}
sortElementsById();

// editCategoryList
function editCategoryList() {
    var getEditid = 0;
    Array.from(document.querySelectorAll(".edit-list")).forEach(function (elem) {
        elem.addEventListener('click', function (event) {
            getEditid = elem.getAttribute('data-edit-id');
            categoryListData = categoryListData.map(function (item) {
                if (item.id == getEditid) {
                    editlist = true;
                    document.getElementById("categoryid-input").value = item.id;
                    document.getElementById('categoryTitle').value = item.categoryTitle;
                    document.getElementById("category-img").src = item.categoryImg;
                    document.getElementById("descriptionInput").value = item.description;
                }
                return item;
            });
        });
    });
}

// overViewList
function overViewList() {
    var getViewid = 0;
    Array.from(document.querySelectorAll(".overview-btn")).forEach(function (elem) {
        elem.addEventListener('click', function (event) {
            getViewid = elem.getAttribute('data-view-id');
            categoryListData = categoryListData.map(function (item) {
                if (item.id == getViewid) {
                    document.querySelector('#overviewOffcanvas .overview-id').innerHTML = item.id;
                    document.querySelector('#overviewOffcanvas .overview-img').src = item.categoryImg;
                    document.querySelector('#overviewOffcanvas .overview-title').innerHTML = item.categoryTitle;
                    document.querySelector('#overviewOffcanvas .overview-desc').innerHTML = item.description;
                    document.querySelector('#overviewOffcanvas .subCategory').innerHTML = "";
                    item.subCategory.map(function(subItem){
                        document.querySelector('#overviewOffcanvas .subCategory').innerHTML += '<li><a href="#!" class="text-reset">'+subItem+'</a></li>'
                    });

                    document.querySelector('#overviewOffcanvas .edit-list').setAttribute("data-edit-id", getViewid);
                    document.querySelector('#overviewOffcanvas .remove-list').setAttribute("data-remove-id", getViewid);
                }

                return item;
            });
        });
    });
}

// removeItem
function removeItem() {
    var getid = 0;
    Array.from(document.querySelectorAll(".remove-list")).forEach(function (item) {
        item.addEventListener('click', function (event) {
            getid = item.getAttribute('data-remove-id');
            document.getElementById("remove-category").addEventListener("click", function () {
                $.ajax({
                    url: '/admin/catagory/delete/' + getid,
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        // Handle success response
                        console.log(response);
                    },
                    error: function(xhr, status, error) {
                        // Handle error response
                        console.error(xhr.responseText);
                    }
                });
                // var filtered = arrayRemove(categoryListData, getid);
                // categoryListData = filtered;
                categoryListData = [];
                searchResult(categoryListData);
                loadcategoryList(categoryListData, currentPage);
                document.getElementById("close-removecategoryModal").click();
            });
        });
    });
}

function clearVal() {
    document.getElementById('categoryTitle').value = "";
    document.getElementById("category-img").src = "";
    document.getElementById("slugInput").value = "";
    document.getElementById("descriptionInput").value = "";
    document.getElementById("category-image-input").value = "";
}