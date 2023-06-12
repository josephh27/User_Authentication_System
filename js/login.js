let birthYear = document.querySelector("#birthyear");
for (let i = 2015; i > 1900; i--) {
    let optionElem = document.createElement('option');
    optionElem.value = i;
    optionElem.textContent = i;
    birthYear.appendChild(optionElem);
}