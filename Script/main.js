// submenu show javascript

document.querySelectorAll('.dropdown-submenu').forEach(item => {
    item.addEventListener('click', event => {
        event.stopPropagation();
        const submenu = item.querySelector('.sub-menu');

        document.querySelectorAll('.dropdown-submenu.active').forEach(otherItem => {
            if (otherItem !== item) {
                otherItem.classList.remove('active');
                otherItem.querySelector('.sub-menu').style.display = 'none';
            }
        });

        item.classList.toggle('active');
        submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
    });
});


// for notification
let formCheckInput = document.getElementById("form-check-input");
let turnOff = document.getElementById("turn-off");
let exampleModalToggle = document.getElementById("exampleModalToggle");
let exampleModalToggle2 = document.getElementById("exampleModalToggle2");
let notification = document.getElementById("notification");

notification.addEventListener("click", function () {
    if (formCheckInput.checked) {
        exampleModalToggle2.classList.add("show");
        exampleModalToggle.classList.remove("show");
    } else {
        exampleModalToggle.classList.add("show");
        exampleModalToggle2.classList.remove("show");
    }
});

turnOff.addEventListener("click", function () {
    formCheckInput.checked = false;
});

let showNotification = document.getElementById("show-notification");
let notificationTitle = document.querySelector(".notification-title");

formCheckInput.addEventListener("click", function () {
    if (formCheckInput.checked) {
        showNotification.style.display = "block";
        notificationTitle.innerText = "Turn off the Notification";
    } else {
        showNotification.style.display = "none";
        notificationTitle.innerText = "Turn on the Notification";
    }
});


// personalization explore section
const exploreSections = document.querySelectorAll(".explore-section");

// Add click event listener to each explore section
exploreSections.forEach(function (exploreSection) {
    exploreSection.addEventListener("click", function () {
        // Get check icon and border
        const checkIcon = this.querySelector(".check-icon");
        const border = this.style.border;

        // Toggle check icon visibility
        if (checkIcon.style.display === "none" || border === "none") {
            checkIcon.style.display = "block";
            this.style.border = "3px solid #3DCBB1";
        } else {
            checkIcon.style.display = "none";
            this.style.border = "none";
        }
    });
});


document.addEventListener('DOMContentLoaded', function() {
    const wishlistBtn = document.querySelectorAll(".wishlistBtn");

    wishlistBtn.forEach((btn) => {
        btn.addEventListener("click", () => {
            btn.classList.toggle("bi-heart");
            btn.classList.toggle("bi-heart-fill");
        });
    });
});


function markAllRead() {
    console.log("vbnn")
    // Change alert color to success (green)
    document.querySelectorAll('.alert').forEach(alert => {
        alert.classList.remove('alert-dark');
        alert.classList.add('alert-success');
    });
}