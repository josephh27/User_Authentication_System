const civilStatusSelection = document.querySelector("#civil-status");
const sexSelection = document.querySelector("#sex");
const religioSelection = document.querySelector("#religion");

const regionSelection = document.querySelector("#region");
const provinceSelection  = document.querySelector("#province");
const municipalitySelection  = document.querySelector("#municipality");
const barangaySelection  = document.querySelector("#barangay");
const countrySelection = document.querySelector("#country");
const postalCode = document.querySelector("postal-code");

//data


async function fetchCountries() {
    const response = await fetch('data/data.json');
    const data = await response.json();;
    const countries = data['countries'];
    countries.forEach(country => {
        const newOpt = document.createElement('option');
        newOpt.textContent = country;
        newOpt.value = country;
        const clone = newOpt.cloneNode(true);
        countrySelection.appendChild(clone);
    })
}

fetchCountries();

