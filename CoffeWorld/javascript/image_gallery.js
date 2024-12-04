
function displayLargeImage(src, caption) {
    // Get the large image container and elements
    const largeImageContainer = document.getElementById('large-image-container');
    const largeImage = document.getElementById('large-image');
    const imageCaption = document.getElementById('image-caption');

    // Update the source and caption of the large image
    largeImage.src = src;
    imageCaption.textContent = caption;

    // Display the large image container
    largeImageContainer.style.display = 'block';
}