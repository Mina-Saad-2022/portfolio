const switchers = [...document.querySelectorAll('.switcher')]

        switchers.forEach(item => {
            item.addEventListener('click', function() {
                switchers.forEach(item => item.parentElement.classList.remove('is-active'))
                this.parentElement.classList.add('is-active')
            })
        })


// ! ||--------------------------------------------------------------------------------||
// ! ||                                for upload image                                ||
// ! ||--------------------------------------------------------------------------------||
// // Get a reference to the file input and image preview elements
// const imageInput = document.getElementById('imageInput');
// const imagePreview = document.getElementById('imagePreview');

// // Add an event listener to the file input to handle image selection
// imageInput.addEventListener('change', function () {
//     const file = imageInput.files[0];

//     if (file) {
//         // Read the file as a data URL
//         const reader = new FileReader();

//         reader.addEventListener('load', function () {
//             // Create a new image element
//             const img = document.createElement('img');
//             img.src = reader.result;
//             img.style.maxWidth = '100%';
//             img.style.maxHeight = '400px'; // You can adjust the maximum height as per your needs
//             img.alt = 'Uploaded Image';

//             // Remove any previously displayed images
//             while (imagePreview.firstChild) {
//                 imagePreview.removeChild(imagePreview.firstChild);
//             }

//             // Append the new image to the image preview container
//             imagePreview.appendChild(img);
//         });

//         // Read the file as a data URL
//         reader.readAsDataURL(file);
//     }
// });
