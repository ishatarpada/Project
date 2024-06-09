function removeFromWishlist(event, courseId) {
    event.preventDefault();
    $.ajax({
        type: 'POST',
        url: 'remove_from_wishlist.php', // Change this to your PHP script handling the removal
        data: { courseId: courseId },
        success: function(response) {
            if (response.success) {
                // Update the heart icon to empty heart
                event.target.querySelector('i').classList.replace('bi-heart-fill', 'bi-heart');
                showAlert("success", "Item Removed from Wishlist!");
            } else {
                showAlert("error", "Failed to Remove Item from Wishlist!");
            }
        },
        error: function() {
            showAlert("error", "Failed to Remove Item from Wishlist!");
        }
    });
}
