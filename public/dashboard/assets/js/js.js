// ! ||--------------------------------------------------------------------------------||
// ! ||                       start functions for date and clock                       ||
// ! ||--------------------------------------------------------------------------------||

function updateClock() {
    var now = new Date();
    var hours = now.getHours();
    var minutes = now.getMinutes();
    var seconds = now.getSeconds();

    // Convert hours to 12-hour format
    var ampm = hours >= 12 ? "PM" : "AM";
    hours = hours % 12 || 12; // Convert 0 to 12

    var timeString =
        padZero(hours) +
        ":" +
        padZero(minutes) +
        ":" +
        padZero(seconds) +
        " " +
        ampm;

    document.getElementById("clock").innerHTML = timeString;
}

function updateDate() {
    var now = new Date();
    var year = now.getFullYear();
    var month = now.getMonth() + 1; // Months are zero-based
    var day = now.getDate();

    var dateString = padZero(day) + "-" + padZero(month) + "-" + year;

    document.getElementById("date").innerHTML = dateString;
}

function padZero(num) {
    return (num < 10 ? "0" : "") + num;
}

setInterval(updateClock, 1000);
updateDate();

// ! ||--------------------------------------------------------------------------------||
// ! ||                 script to top content about work and education                 ||
// ! ||--------------------------------------------------------------------------------||

// Get the tab links and tab content
const tabLinks = document.querySelectorAll(".tab-links a");
const tabContent = document.querySelectorAll(".tab-content .tab");
tabLinks.forEach((tabLink) => {
    tabLink.addEventListener("click", (e) => {
        e.preventDefault();

        // Remove 'active' class from all tab links and tab content
        tabLinks.forEach((link) => {
            link.classList.remove("active");
        });

        tabContent.forEach((tab) => {
            tab.classList.remove("active");
        });

        // Add 'active' class to the clicked tab link and corresponding tab content
        const selectedTab = document.querySelector(
            tabLink.getAttribute("href")
        );
        tabLink.classList.add("active");
        selectedTab.classList.add("active");
    });
});
// ! ||--------------------------------------------------------------------------------||
// ! ||                               to repeate element work                          ||
// ! ||--------------------------------------------------------------------------------||

// document.getElementById("work_n").addEventListener("click", function () {
//     var element_work = document.getElementById("element_work");

//     var element_button = document.querySelector(".button");
//     var button = document.querySelector(".element_work");

//     // Create a new input element
//     var newInput = document.createElement("input");
//     newInput.type = "text";
//     newInput.classList.add("form-control", "mb-2", "mr-sm-2");
//     newInput.name = "work[]";
//     newInput.placeholder = "type your works ";

//     element_button.classList.remove("col-2");
//     element_button.classList.add("col-10", "text-center", "m-auto");
//     button.classList.remove("w-100");
//     button.classList.add("w-50");
//     element_work.classList.add("m-auto");
//     element_work.appendChild(newInput);
// });

// ! ||--------------------------------------------------------------------------------||
// ! ||                               to repeate element education                     ||
// ! ||--------------------------------------------------------------------------------||

// document.getElementById("education_n").addEventListener("click", function () {
//     var element_education = document.getElementById("element_education");

//     var element_button = document.querySelector(".button_education");
//     var button = document.querySelector(".element_education");

//     // Create a new input element
//     var newInput = document.createElement("input");
//     newInput.type = "text";
//     newInput.classList.add("form-control", "mb-2", "mr-sm-2");
//     newInput.name = "education[]";
//     newInput.placeholder = "type your education";

//     element_button.classList.remove("col-2");
//     element_button.classList.add("col-10", "text-center", "m-auto");
//     button.classList.remove("w-100");
//     button.classList.add("w-50");
//     element_education.classList.add("m-auto");
//     element_education.appendChild(newInput);
// });

$(document).ready(function () {
    $("#delete-button").click(function (e) {
        e.preventDefault(); // Prevent default button behavior

        var selectedIds = []; // Array to store selected IDs

        // Find all checkboxes that are checked
        $(".delete-checkbox:checked").each(function () {
            selectedIds.push($(this).val()); // Add the selected ID to the array
        });

        // Create a hidden input field to send the selected IDs
        var hiddenInput = $("<input>")
            .attr("type", "hidden")
            .attr("name", "selectedIds[]")
            .val(selectedIds.join(",")); // Convert the array to a comma-separated string

        // Append the hidden input field to the form
        $("#delete-form").append(hiddenInput);

        // Submit the form
        $("#delete-form").submit();
    });
});

$(document).ready(function () {
    // Click event handler for the "Check All" button
    $("#check-all-button").click(function () {
        // Get the state of the button (checked or unchecked)
        var isChecked = !$(this).hasClass("checked");

        // Set the state of all checkboxes to match the button state
        $(".delete-checkbox").prop("checked", isChecked);

        // Toggle the "checked" class on the button to change its label
        if (isChecked) {
            $(this).text("Uncheck All");
        } else {
            $(this).text("Check All");
        }
        $(this).toggleClass("checked");
    });
});

// ! ||--------------------------------------------------------------------------------||
// ! ||                              script to data table                              ||
// ! ||--------------------------------------------------------------------------------||

$(document).ready(function () {
    $("#example").DataTable();
    $("#table_education").DataTable();
});


// ! ||--------------------------------------------------------------------------------||
// ! ||               to show image when crete new project & edit project              ||
// ! ||--------------------------------------------------------------------------------||
// Get references to the file input and image preview elements
/*const imageInputs = document.querySelectorAll('.imageInput');
const imagePreviews = document.querySelectorAll('.imagePreview');

// Add event listeners to each file input to handle image selection
imageInputs.forEach((imageInput, index) => {

    imageInput.addEventListener('change', function () {
        const file = imageInput.files[0];

        if (file) {
            // Read the file as a data URL
            const reader = new FileReader();

            reader.addEventListener('load', function () {
                // Create a new image element
                const img = document.createElement('img');
                img.src = reader.result;
                img.style.maxWidth = '100%';
                img.style.maxHeight = '400px'; // You can adjust the maximum height as per your needs
                img.alt = 'Uploaded Image';

                // Remove any previously displayed images in the specific image preview container
                const imagePreview = imagePreviews[index];
                while (imagePreview.firstChild) {
                    imagePreview.removeChild(imagePreview.firstChild);
                }

                // Append the new image to the image preview container
                imagePreview.appendChild(img);
            });

            // Read the file as a data URL
            reader.readAsDataURL(file);
        }
    });
});*/
