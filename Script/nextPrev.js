function nextPage(currentPageID, nextPageID) {
    
    // Get form data
    let formData = {
        courseTitle: document.getElementById('courseTitle').value,
        courseDescription: document.getElementById('description').value,
        courseCategory: document.getElementsByName('courseCategory')[0].value,
        courseLevel: document.getElementsByName('courseLevel')[0].value,
        courseLanguage: document.getElementsByName('courseLanguage')[0].value,
        checkPrivacy1: document.getElementById('checkPrivacy1').checked,
        courseTime: document.getElementsByName('courseTime')[0].value,
        totalLecture: document.getElementsByName('totalLecture')[0].value,
        instructor: document.getElementsByName('instructor')[0].value,
        channelName: document.getElementsByName('channelName')[0].value,
        channelLogo: document.getElementsByName('channelLogo')[0].files[0],
        coursePrice: document.getElementsByName('coursePrice')[0].value,
        discountPrice: document.getElementsByName('discountPrice')[0].value,
        enableDiscount: document.getElementById('checkBox1').checked ,
        videoURL: document.getElementsByName('videoURL')[0].value,
        videomp4: document.getElementsByName('videomp4')[0].files[0],
        videowebm: document.getElementsByName('videowebm')[0].files[0],
        videoogg: document.getElementsByName('videoogg')[0].files[0]
    };

    // Store data in session storage
    sessionStorage.setItem('formData', JSON.stringify(formData));

    document.getElementById(currentPageID).classList.remove('active', 'show');
    document.getElementById(nextPageID).classList.add('active', 'show');
}

function prevPage(currentPageID, prevPageID) {
    document.getElementById(currentPageID).classList.remove('active', 'show');
    document.getElementById(prevPageID).classList.add('active', 'show');
}