$(document).ready(function () {
    M.updateTextFields();

    $("select").formSelect();

    $(".datepicker").datepicker();

    document.querySelector(".menu").addEventListener("click", openMenu);

    function openMenu() {
        document.querySelector(".nav-info").classList.toggle("active");
    }
    let number = 1;
    let loopValue = 0;

    const peopleInput = document.getElementById("people");
    const roomInput = document.getElementById("room");

    const personsSection = document.getElementById("persons_section");
    peopleInput.addEventListener("focus", focusEvent);
    peopleInput.addEventListener("blur", blurEvent);
    peopleInput.addEventListener("input", validateNumericInput);
    roomInput.addEventListener("input", validateNumericInput);

    function focusEvent() {
        number = 1;
    }
    function blurEvent() {
        if (!isNaN(loopValue)) {
            loopValue = peopleInput.value;
            personsSection.innerHTML = "";
        }

        for (let i = 0; i < loopValue; i++) {
            personsSection.innerHTML += `<div class="theard-section"><div class="label">person ${number}</div><div><div class="full-name"><input placeholder="name and username" id="first_name" type="text" class="validate"></div><div class="age"><input placeholder="age" id="first_name" type="text" class="validate"></div><div class="input-field passport"><input placeholder="N.passport" id="first_name" type="text" class="validate"></div><div class="nationality"><input placeholder="nationality" id="first_name" type="text" class="validate"></div></div></div>`;
            number++;
        }
    }
    function validateNumericInput() {
        peopleInput.value = peopleInput.value.replace(/[^0-9]/g, "");
        roomInput.value = roomInput.value.replace(/[^0-9]/g, "");
    }
});
