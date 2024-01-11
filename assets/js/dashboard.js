const dashboard = document.getElementById("dashboard");
const user = document.getElementById("user");
const product = document.getElementById("product");
const usersSection = document.getElementById("user_section");
const product_section = document.getElementById("product_section");
const dashboard_section = document.getElementById("dashboard_section");

// Function to hide all sections
function hideAllSections() {
    usersSection.classList.add('hidden');
    product_section.classList.add('hidden');
    dashboard_section.classList.add('hidden');
}

// Initially display the dashboard section
hideAllSections();
dashboard_section.classList.remove('hidden');

// Show only dashboard section
dashboard.addEventListener("click", () => {
    hideAllSections();
    dashboard_section.classList.remove('hidden');
});

// Show only user section
user.addEventListener("click", () => {
    hideAllSections();
    user_section.classList.remove('hidden');
});

// Show only product section
product.addEventListener("click", () => {
    hideAllSections();
    product_section.classList.remove('hidden');
});


// // for tags crud
//
const addTagBtn = document.getElementById("addTagBtn");
const addTagInput = document.getElementById("tag-input");
const editTagInput = document.getElementById("edit-tag-input");
const tagSection = document.getElementById("tag-section");
let currentTagId;
let currentTag;

addTagBtn.addEventListener("click", (event) => {
    console.log("test");
    event.preventDefault();
    if (addTagInput.value.length !== 0) {
        $.post(
            "index.php?page=dashboard",
            {
                add_tag: true,
                tag: addTagInput.value
            },
            (data) => {
                console.log(data);
                document.querySelector("#modal_body").classList.add("hidden");
                addTagInput.style.border = ""
                addTagInput.value = "";
                window.location.href = "index.php?page=dashboard&add_tag=true";
            }
        )
    } else
        addTagInput.style.border = "1px solid red";
})

const addCategoryBtn = document.getElementById("addCategoryBtn");
const addCategoryInput = document.getElementById("category-input");
const editCategoryInput = document.getElementById("edit-category-input");
const categorySection = document.getElementById("category-section");
let currentCategoryId;
let currentCategory;

addCategoryBtn.addEventListener("click", (event) => {
    event.preventDefault();
    console.log("test");
    if (addCategoryInput.value.length !== 0) {
        $.post(
            "index.php?page=dashboard",
            {
                add_category: true,
                category: addCategoryInput.value
            },
            (data) => {
                console.log(data);
                addCategoryInput.style.border = ""
                addCategoryInput.value = "";
                window.location.href = "index.php?page=dashboard&add_category=true";

            }
        )
    } else
        addCategoryInput.style.border = "1px solid red";
})
//
// // function getCategories() {
// //     categorySection.innerHTML = "";
// //     $.get(
// //         "index.php?page=dashboard&get_categories=true",
// //         (data) => {
// //             console.log(data);
// //             let categories = JSON.parse(data);
// //
// //             categories.forEach((category) => {
// //                 categorySection.innerHTML += `<tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
// //                                             <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">${category.category_id}</td>
// //                                             <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">${category.category}</td>
// //                                             <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
// //                                                 <a href="#category-form" class="edit-category text-blue-600 dark:text-blue-500 hover:underline"
// //                                                 data-category-id="${category.category_id}" data-category-name="${category.category}">Edit</a>
// //                                             </td>
// //                                             <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
// //                                                 <a data-category-id="${category.category_id}" class="delete-category cursor-pointer text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
// //                                             </td>
// //                                         </tr>`;
// //             })
// //         }
// //     )
// //
// //     $(categorySection).ready(() => {
// //         $(categorySection).on("click", ".edit-category", function () {
// //             currentCategoryId = $(this).data("category-id");
// //             currentCategory = $(this).data("category-name");
// //             console.log(document.querySelector("#edit-category-form").classList);
// //             document.querySelector("#edit-category-form").classList.remove("hidden");
// //             document.querySelector("#category-form").classList.add("hidden");
// //             document.querySelector("#edit-category-input").value = currentCategory;
// //         })
// //
// //         $(categorySection).on("click", ".delete-category", function () {
// //             currentCategoryId = $(this).data("category-id");
// //             deleteCategory(currentCategoryId);
// //         });
// //     })
// //
// //
// // }
//
// function updateCategory(categoryId) {
//     event.preventDefault();
//     if (editCategoryInput.value.length !== 0) {
//         $.post(
//             "index.php?page=dashboard",
//             {
//                 edit_category: true,
//                 category: editCategoryInput.value,
//                 category_id: categoryId
//             },
//             (data) => {
//                 console.log(data);
//                 editCategoryInput.style.border = ""
//                 editCategoryInput.value = "";
//             }
//         )
//     } else
//         editCategoryInput.style.border = "1px solid red";
// }
//
// function deleteCategory(categoryId) {
//     $.post(
//         "index.php?page=dashboard",
//         {
//             category_id: categoryId,
//             delete_category: true
//         },
//         (data) => {
//             console.log(data);
//             getCategories();
//         }
//     )
// }
//
// // getCategories();
//
// function showForm() {
//     document.querySelector("#edit-category-form").classList.add("hidden");
//     document.querySelector("#category-form").classList.remove("hidden");
// }
//
//
// function runWhenJQueryLoaded() {
//     if (window.jQuery) {
//         $("#editCategoryBtn").on("click", () => {
//             updateCategory(currentCategoryId);
//             // getCategories();
//             getTags();
//         })
//     } else {
//         // Check again after a short delay
//         setTimeout(runWhenJQueryLoaded, 50);
//     }
// }
//
// runWhenJQueryLoaded();
//

const editBtn = document.querySelectorAll(".editBtn");
const inputTag = document.getElementById("editInput");
const inputTagId = document.getElementById("editTagId");

editBtn.forEach(function(button) {
    button.addEventListener("click", function() {
        inputTag.value = this.getAttribute("data-tag-name");
        inputTagId.value = this.getAttribute("data-tag-id");
    });
});


const categoryEditBtn = document.querySelectorAll(".categoryEditBtn");
const inputCategory = document.getElementById("categoryEditInput");
const inputCategoryId = document.getElementById("editCategoryId");


categoryEditBtn.forEach(function(button) {
    button.addEventListener("click", function() {
        console.log(this.getAttribute("data-category-name"));
        inputCategory.value = this.getAttribute("data-category-name");
        inputCategoryId.value = this.getAttribute("data-category-id");
    });
});