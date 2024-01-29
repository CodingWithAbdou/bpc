$(document).ready(function () {
    M.updateTextFields();

    $("select").formSelect();

    $(".datepicker").datepicker();

    document.querySelector(".menu").addEventListener("click", openMenu);

    function openMenu() {
        document.querySelector(".nav-info").classList.toggle("active");
    }
    let number = 0;
    let loopValue = 0;

    const peopleInput = document.getElementById("people");
    const roomInput = document.getElementById("room");

    const personsSection = document.getElementById("persons_section");
    peopleInput.addEventListener("focus", focusEvent);
    peopleInput.addEventListener("blur", blurEvent);
    peopleInput.addEventListener("input", validateNumericInput);
    roomInput.addEventListener("input", validateNumericInput);

    function focusEvent() {
        number = 0;
    }
    function blurEvent() {
        if (!isNaN(loopValue)) {
            loopValue = peopleInput.value;
            personsSection.innerHTML = "";
        }
        for (let i = 0; i < loopValue; i++) {
            ++number;
            let html_row_ar = `<div class="theard-section"><div class="label">شخص ${number}</div><div><div class="full-name"><input placeholder="الاسم واللقب" name='fullname[]' id="fullname" type="text" class="validate"></div><div class="age"><input placeholder="العمر" name="age[]" id="age" type="text" class="validate"></div><div class="input-field passport"><input placeholder="رقم جواز السفر" id="passport" type="text" class="validate" name="number_passport[]"></div><div class="nationality"><input placeholder="الجنسية" id="nationality" name="nationality[]" type="text" class="validate"></div></div></div>`;
            let html_row_en = `<div class="theard-section"><div class="label">person ${number}</div><div><div class="full-name"><input placeholder="name and surname" name='fullname[]' id="fullname" type="text" class="validate"></div><div class="age"><input placeholder="age" name="age[]" id="age" type="text" class="validate"></div><div class="input-field passport"><input placeholder="N.passport" id="passport" type="text" class="validate" name="number_passport[]"></div><div class="nationality"><input placeholder="nationality" id="nationality" name="nationality[]" type="text" class="validate"></div></div></div>`;
            let html_row_fr = `<div class="theard-section"><div class="label">personne ${number}</div><div><div class="full-name"><input placeholder="Nom et Prénom" name='fullname[]' id="fullname" type="text" class="validate"></div><div class="age"><input placeholder="âge" name="age[]" id="age" type="text" class="validate"></div><div class="input-field passport"><input placeholder="N.passeport" id="passport" type="text" class="validate" name="number_passport[]"></div><div class="nationality"><input placeholder="nationalité" id="nationality" name="nationality[]" type="text" class="validate"></div></div></div>`;
            if (document.body.classList.contains("ar")) {
                personsSection.innerHTML += html_row_ar;
            } else if (document.body.classList.contains("en")) {
                personsSection.innerHTML += html_row_en;
            } else {
                personsSection.innerHTML += html_row_fr;
            }
        }
    }
    function validateNumericInput() {
        peopleInput.value = peopleInput.value.replace(/[^0-9]/g, "");
        roomInput.value = roomInput.value.replace(/[^0-9]/g, "");
    }
    let currentYear = new Date().getFullYear();

    document.getElementById("year").innerHTML = currentYear;
});
