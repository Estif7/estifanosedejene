'use strict';

// Get the modal
var modal = document.getElementById('modal');

// Get the object for the PDF
var pdfObject = document.getElementById('pdfObject');

// Get the close button
var span = document.getElementsByClassName('close')[0];

// Function to open the modal
function openModal(src) {
    modal.style.display = "block";
    pdfObject.data = src;
}

// Function to close the modal
function closeModal() {
    modal.style.display = "none";
}

// Add event listeners to the gallery items
var galleryItems = document.getElementsByClassName('gallery-item');
for (var i = 0; i < galleryItems.length; i++) {
    galleryItems[i].addEventListener('click', function() {
        openModal(this.getAttribute('data-modal-src'));
    });
}

// Add event listener to the close button
span.onclick = function() {
    closeModal();
}

// Close the modal when clicking outside of it
window.onclick = function(event) {
    if (event.target == modal) {
        closeModal();
    }
}
