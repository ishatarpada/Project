$(document).ready(function () {
    $('#searchInput').on('input', function () {
        var searchQuery = $(this).val().toLowerCase();
        $('#searchResults').empty();

        // Loop through each card to check for matching names
        $('.card').each(function () {
            var cardName = $(this).find('.fs-3').text().toLowerCase();
            if (cardName.includes(searchQuery)) {
                $('#searchResults').append($(this).clone()); // Append the matching card to search results
            }
        });
    });
});
