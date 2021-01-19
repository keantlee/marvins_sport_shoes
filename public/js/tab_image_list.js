function myFunction(imgs) {
    // Get the expanded image
    var expandImg = document.getElementById("show_img");

    // Use the same src in the expanded image as the image being clicked on from the grid
    expandImg.src = imgs.src;

    // Show the container element (hidden with CSS)
    expandImg.parentElement.style.display = "block";
}