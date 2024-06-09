// add city

const cityDropdown = document.getElementById("cityDropdown");

cities.forEach(city => {
    let newOption = new Option(city);
    cityDropdown.add(newOption);
});

cityDropdown.addEventListener("change", (evt) => {
    updateFlag(evt.target);
});