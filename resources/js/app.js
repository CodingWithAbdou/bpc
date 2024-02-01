import './bootstrap';
import 'animate.css';


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
    const phoneInput = document.getElementById("phone");
    let ages = document.querySelectorAll('.age_input')

    const personsSection = document.getElementById("persons_section");
    peopleInput.addEventListener("focus", focusEvent);
    peopleInput.addEventListener("blur", blurEvent);
    peopleInput.addEventListener("input", validateNumericInput);
    roomInput.addEventListener("input", validateNumericInput);
    phoneInput.addEventListener("input", validateNumericInput);



    function validateNumericInput() {
        peopleInput.value = peopleInput.value.replace(/[^0-9]/g, "");
        roomInput.value = roomInput.value.replace(/[^0-9]/g, "");
        phoneInput.value = phoneInput.value.replace(/[^0-9]/g, "");
    }

    function focusEvent() {
        number = 0;
        if(personsSection.classList.contains('animate__fadeInLeft')) {
            personsSection.classList.remove('animate__animated', 'animate__fadeInLeft')
        }else {
            personsSection.classList.remove('animate__animated', 'animate__fadeInRight')
        }
    }
    function blurEvent() {
        if (!isNaN(loopValue)) {
            loopValue = peopleInput.value;
            personsSection.innerHTML = "";
            if (document.body.classList.contains("ar")) {
                personsSection.classList.add('animate__animated', 'animate__fadeInRight')
            }else {
                personsSection.classList.add('animate__animated', 'animate__fadeInLeft')
            }


        }

        for (let i = 0; i < loopValue; i++) {
            ++number;
            let html_row_ar = `<div class="theard-section"><div class="label">شخص ${number}</div><div><div class="full-name"><input placeholder="الاسم واللقب" name='fullname[]' id="fullname-${number}" type="text" class="validate"></div><div class="age"><input placeholder="العمر" name="age[]" id="age-${number}" type="text" class="validate age_input"></div><div class="input-field passport"><input placeholder="رقم جواز السفر" id="passport-${number}" type="text" class="validate" name="number_passport[]"></div><div class="nationality"><input placeholder="الجنسية" id="nationality-${number}" name="nationality[]" type="text" class="validate nationality"></div></div></div>`;
            let html_row_en = `<div class="theard-section"><div class="label">person ${number}</div><div><div class="full-name"><input placeholder="name and surname" name='fullname[]' id="fullname-${number}" type="text" class="validate"></div><div class="age"><input placeholder="age" name="age[]" id="age-${number}" type="text" class="validate age_input"></div><div class="input-field passport"><input placeholder="N.passport" id="passport-${number}" type="text" class="validate" name="number_passport[]"></div><div class="nationality"><input placeholder="nationality" id="nationality-${number}" name="nationality[]" type="text" class="validate nationality"></div></div></div>`;
            let html_row_fr = `<div class="theard-section"><div class="label">personne ${number}</div><div><div class="full-name"><input placeholder="Nom et Prénom" name='fullname[]' id="fullname-${number}" type="text" class="validate"></div><div class="age"><input placeholder="âge" name="age[]" id="age-${number}" type="text" class="validate age_input"></div><div class="input-field passport"><input placeholder="N.passeport" id="passport-${number}" type="text" class="validate" name="number_passport[]"></div><div class="nationality"><input placeholder="nationalité" id="nationality-${number}" name="nationality[]" type="text" class="validate nationality"></div></div></div>`;
            if (document.body.classList.contains("ar")) {
                personsSection.innerHTML += html_row_ar;
            } else if (document.body.classList.contains("en")) {
                personsSection.innerHTML += html_row_en;
            } else {
                personsSection.innerHTML += html_row_fr;
            }

            document.querySelectorAll('.age_input').forEach(age =>{
                age.addEventListener("input", ()=> {
                    age.value = age.value.replace(/[^0-9]/g, "");
                });
            })
        }
    }

    let currentYear = new Date().getFullYear();

    document.getElementById("year").innerHTML = currentYear;

    function getCurrentDate() {
        const today = new Date();
        const year = today.getFullYear();
        const month = String(today.getMonth() + 1).padStart(2, '0'); // Months are zero-based
        const day = String(today.getDate()).padStart(2, '0');
        return `${year}-${month}-${day}`;
    }

    const checkin = document.getElementById('checkin');
    const checkout = document.getElementById('checkout');
    let checkInValue = ''
    let checkOutValue = ''
    checkin.min = getCurrentDate();
    checkout.min = getCurrentDate();

    checkin.addEventListener('input', calculateDateDifference);
    checkin.addEventListener('blur', ()=> {
        const year = checkin.value.split('-')[0];
        const month = checkin.value.split('-')[1];
        const day = checkin.value.split('-')[2];
        checkin.value = `${month}-${day}-${year}`
        checkInValue =  checkin.value

    });
    checkin.addEventListener('focus', ()=> {
        const month = checkInValue.split('-')[0];
        const day = checkInValue.split('-')[1];
        const year = checkInValue.split('-')[2];
        if(day > 0) {
            checkin.value = `${year}-${month}-${day}`
        }
    });
    checkout.addEventListener('input', calculateDateDifference);
    checkout.addEventListener('blur', ()=> {
        const year = checkout.value.split('-')[0];
        const month = checkout.value.split('-')[1];
        const day = checkout.value.split('-')[2];
        checkout.value = `${month}-${day}-${year}`
        checkOutValue =  checkout.value

    });
    checkout.addEventListener('focus', ()=> {
        const month = checkOutValue.split('-')[0];
        const day = checkOutValue.split('-')[1];
        const year = checkOutValue.split('-')[2];
        if(day > 0) {
            checkout.value = `${year}-${month}-${day}`
        }
    });

    function calculateDateDifference() {
        const startDateObj = new Date(checkin.value);
        const endDateObj = new Date(checkout.value);
        const timeDifference = endDateObj - startDateObj;

        // Calculate the difference in days
        const daysDifference = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
        if( !isNaN(daysDifference) ) {
            const dateDifferenceElement = document.getElementById('dateDifference');
            document.querySelector('.days').innerHTML =  (daysDifference)
            if(!dateDifferenceElement.classList.contains('show')) {
                dateDifferenceElement.classList.add('show')
                document.querySelector('.bar_last').classList.add('show')
            }

        }
        // Display the result
    }


    const yes = document.getElementById('yes')
    const no = document.getElementById('no')
    yes.addEventListener('change' , ()=> {
        if(!document.querySelector('.flight_div').classList.contains('hide'))return
        document.querySelectorAll('.bar.delivery')[0].classList.remove('hide')
        document.querySelectorAll('.bar.delivery')[1].classList.remove('hide')
        document.querySelector('.flight_div').classList.remove('hide')
        document.querySelector('.arrival_div').classList.remove('hide')
    })
    no.addEventListener('change' , ()=> {
        if(document.querySelector('.flight_div').classList.contains('hide'))return
        document.querySelectorAll('.bar.delivery')[0].classList.add('hide')
        document.querySelectorAll('.bar.delivery')[1].classList.add('hide')
        document.querySelector('.flight_div').classList.add('hide')
        document.querySelector('.arrival_div').classList.add('hide')
    })



    document.querySelector('.btn_profile').addEventListener('click' , ()=> {
        document.querySelector('.list').classList.toggle('show')
    })
});

