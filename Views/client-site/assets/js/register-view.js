
//input sections
const firstSection = document.getElementById("first-art");
const secondSection = document.getElementById("second-art");
const thirdSection = document.getElementById("third-art");

//buttons
const btnNext = document.getElementById("next-btn");
const submitBtn = document.getElementById("submit-btn");
const returnBtn = document.getElementById("return");

//article conrtainer
const articlesContent = document.getElementById("art-content")

//progress bars
const progressOne = document.getElementById("progress-one")
const progressTwo = document.getElementById("progress-two")

//checks items
const checkOne = document.getElementById("check-one")
const checkTwo = document.getElementById("check-two")
const checkThree = document.getElementById("check-three")

//balls
const ballOne = document.getElementById('ball-one')
const ballTwo = document.getElementById('ball-two')
const ballThree = document.getElementById('ball-three')

//inputs first-section
const firstInputs = document.querySelectorAll('#first-art input');

//inputs first-section
const secondInputs = document.querySelectorAll('#second-art input');

//inputs third-section
const thirdInputs = document.querySelectorAll('#third-art input');

//lock icons
const firstIcon = document.getElementById('first-lock')
const secondIcon = document.getElementById('second-lock')
const thirdIcon = document.getElementById('third-lock')
//register form
const form = document.querySelector('form')

function counter() {
    let count = 0;

    btnNext.addEventListener('click', () => {
        if (count <= 1) count++;

        if (count == 1) {
            let inputCounter = 0;
            firstInputs.forEach((i) => {
                if (i.value == '') {
                    let lockErrIcon = ballOne.childNodes[5]
                    firstIcon.classList.replace('d-flex', 'd-none')
                    lockErrIcon.classList.replace('d-none', 'd-flex')

                    lockErrIcon.classList.add('animate__animated');
                    lockErrIcon.classList.add('animate__headShake');

                    setTimeout(() => {

                        lockErrIcon.classList.remove('animate__headShake');
                    }, 500);
                    count = 0;
                } else {
                    inputCounter++;
                    if (inputCounter == 4) {
                        setTimeout(() => {
                            firstSection.classList.replace('d-flex', 'd-none')
                            secondSection.classList.replace('d-none', 'd-flex')
                            thirdSection.classList.replace('d-flex', 'd-none')
                        }, 500);
                        progressOne.style.width = "100%"
                        checkOne.classList.replace('d-none', 'd-flex')
                    }
                }
            })
        }

        if (count == 2) {
            let inputCounter = 0;
            secondInputs.forEach((i) => {
                if (i.value == '') {

                    let lockErrIcon = ballTwo.childNodes[5];

                    secondIcon.classList.replace('d-flex', 'd-none')
                    lockErrIcon.classList.replace('d-none', 'd-flex')

                    lockErrIcon.classList.add('animate__animated');
                    lockErrIcon.classList.add('animate__headShake');
                    setTimeout(() => {
                        lockErrIcon.classList.remove('animate__headShake');
                    }, 500)
                    count = 1;
                } else {
                    inputCounter++;
                    if (inputCounter == 4) {
                        setTimeout(() => {
                            firstSection.classList.replace('d-flex', 'd-none')
                            secondSection.classList.replace('d-flex', 'd-none')
                            thirdSection.classList.replace('d-none', 'd-flex')
                        }, 500);
                        progressTwo.style.width = "100%";
                        btnNext.classList.replace('d-flex', 'd-none')
                        submitBtn.classList.replace('d-none', 'd-flex')
                        checkTwo.classList.replace('d-none', 'd-flex')
                    }
                }
            })
        }

    })

    returnBtn.addEventListener('click', () => {
        if (count >= 1) count--;

        if (count == 1) {
            setTimeout(() => {
                firstSection.classList.replace('d-flex', 'd-none')
                secondSection.classList.replace('d-none', 'd-flex')
                thirdSection.classList.replace('d-flex', 'd-none')
                checkTwo.classList.replace('d-flex', 'd-none')
            }, 500);
            progressTwo.style.width = "0%"
            submitBtn.classList.replace('d-flex', 'd-none')
            btnNext.classList.replace('d-none', 'd-flex')
        }

        if (count == 0) {
            setTimeout(() => {
                firstSection.classList.replace('d-none', 'd-flex')
                secondSection.classList.replace('d-flex', 'd-none')
                thirdSection.classList.replace('d-flex', 'd-none')
                checkOne.classList.replace('d-flex', 'd-none')
            }, 500);
            progressOne.style.width = "0%";
        }
    })


    submitBtn.onclick = () => {
        thirdInputs.forEach((i) => {
            if (i.value == '') {
                let lockErrIcon = ballThree.childNodes[5];
                
                thirdIcon.classList.replace('d-flex', 'd-none')
                lockErrIcon.classList.replace('d-none', 'd-flex')
                lockErrIcon.classList.add('animate__animated');
                lockErrIcon.classList.add('animate__headShake');
                checkThree.classList.replace('d-flex', 'd-none')
                setTimeout(() => {
                    lockErrIcon.classList.remove('animate__headShake');
                }, 500)
                form.onsubmit = (e) => {
                    e.preventDefault()
                }
            }else{
                checkThree.classList.replace('d-none', 'd-flex')
                setTimeout(() => {
                    form.onsubmit = () => true;
                }, 800);
            }

        })
    }


}

counter()