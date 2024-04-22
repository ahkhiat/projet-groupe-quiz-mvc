// console.log("script game chargé");

document.addEventListener("DOMContentLoaded", () => {

let gameContainer = document.getElementById("game_container");

    if(gameContainer)
    {
        console.log("game container loaded")

        /* ---------------------- hide navbar & footer in-game ---------------------- */
       document.getElementById("navbar_main").style.display = "none";
    //    document.getElementById("footer_main").style.display = "none";

        let questions;
        let questionsArray;

        const images = [
            "./Content/img/brain1.png",
            "./Content/img/brain2.png",
            "./Content/img/brain3.png",
            "./Content/img/brain4.png",
            "./Content/img/brain5.png",
            "./Content/img/brain6.png",
            "./Content/img/brain7.png",
            "./Content/img/brain8.png",
        ];


    /* ------------------------------ quiz duration ----------------------------- */
        let quizDuration = document.querySelector(".quiz-duration").value
        // console.log('quiz duration', quizDuration)

    /* ---------------------------- barre progression --------------------------- */
        let progressBarBootstrap = document.querySelector(".progress-stacked");
    

    /* ---------------------------------- timer --------------------------------- */
        let timerContainer = document.querySelector(".timer");
        const quizDurationConst = quizDuration;
        let secondsDecrease = quizDurationConst;
        let runingChrono; 

    /* ------------------------------- chronometer ------------------------------ */
        let chronoSeconds = 0;
        let chronoMinutes = 0;
        let chronoRun;
        let runningChrono = false;

    /* ---------------------------- fetch JSON OBJECT---------------------------- */
        async function fetchQuestions() {
            const res = await fetch("./api/fetch_questions.php", {
                method: 'GET' ,
                headers: {
                    // 'Accept': 'application/json, text/plain, */*',
                    // 'Content-type': 'application/json'
                } 
            });
            questionsArray = await res.json();
            questions = questionsArray
            console.log(questions);
            }
        async function getListeQuestions() {
            await fetchQuestions();
        }
        

    /* -------------- waiting the fetch before generating questions ------------- */
        getListeQuestions().then(() => {
            // console.log('question test : ', questions);

            let question = document.querySelector("#question");
            let reponses = document.querySelector("#answers");
            let questionActuelle = 0;
            let score = 0;
            let bonneReponseIndex = 0;
            let bonneReponse = questions[questionActuelle].answers[bonneReponseIndex];
            let nombreQuestions = questions.length;
            // console.log('nombre de questions :' + nombreQuestions)

            // Hidden HTML form to store game data in DB
            let questionsQuantityInput = document.querySelector(".questions_quantity");
            let gameScoreInput = document.querySelector(".game_score");

            // Button appears at end to store score in DB
            let storeGameButton = document.querySelector('#store_game_button');

            // Mini cards appears at end to show scores
            let miniCard1 = document.querySelector("#mini_card_1");
            let miniCard2 = document.querySelector("#mini_card_2");
            let miniCard3 = document.querySelector("#mini_card_3");
            let miniCardBody1 = document.querySelector("#mini_card_body_1");
            let miniCardBody2 = document.querySelector("#mini_card_body_2");
            let miniCardBody3 = document.querySelector("#mini_card_body_3");
           
            // Interval for the progress bar
            let progressBarInterval = 100 / nombreQuestions;

            /* ------------------------------ Timer config ------------------------------ */
            function timerInit() {
                clearInterval(runingChrono);
                secondsDecrease = quizDurationConst;
                timerContainer.innerText = secondsDecrease;
            }
    
            function timerUpdate() {
                timerContainer.classList.remove("text-danger")

                if(secondsDecrease == 0) {
                    questionSuivante();
                    addProgressBarRed();
                } else {
                    secondsDecrease--;
                    if(secondsDecrease <4){
                        timerContainer.classList.add("text-danger")
                    } 
                    timerContainer.innerText = secondsDecrease;
                }
            }
                
            function timerStart(){
                timerInit()
                runingChrono = setInterval(timerUpdate, 1000);
            }

            function timerStop() {
                clearInterval(runingChrono)
            }

            /* --------------------------- Chronometer config --------------------------- */

            function updateMs() {
                chronoSeconds++;
                // To test and show permanently the chronometer, uncomment this line
                // testChrono();
                if(chronoSeconds == 60){
                    chronoMinutes++;
                    chronoSeconds = 0;
                }
            }

            function startChrono() {
                if(!runningChrono) {
                chronoRun = setInterval(updateMs, 1000);
                runningChrono = true;
                }
            }

            function stopChrono() {
                clearInterval(chronoRun);
                runningChrono = false;
            }

            function showChrono() {
                miniCardBody2.innerHTML = '<i class="fa-regular fa-clock fa-xl me-2" style="color: rgb(5, 142, 233);"></i>' + chronoMinutes + ":" + chronoSeconds;
            }

            function testChrono() {
                miniCard2.hidden = false;
                miniCardBody2.innerHTML = '<i class="fa-regular fa-clock fa-xl me-2" style="color: rgb(5, 142, 233);"></i>' + chronoMinutes + " : " + chronoSeconds;
            }
            



            /* ---------------------------- Generate question --------------------------- */
            genererQuestion()
            afficherTotalQuestions()

            function genererQuestion() {
                document.querySelector(".image-brain-container").innerHTML = "";
                genererImage();

                timerStart();
                startChrono();

                question.innerText = questions[questionActuelle].question;
                bonneReponse = questions[questionActuelle].answers[bonneReponseIndex];


                function tableauAleatoire(array) {
                    for (let i = array.length - 1; i > 0; i--) {
                        const j = Math.floor(Math.random() * (i + 1));
                        [array[i], array[j]] = [array[j], array[i]];
                    }
                    return array;
                }

                tableauAleatoire(questions[questionActuelle].answers);

                for (let i=0; i < questions[questionActuelle].answers.length; i++) {
                    let reponse = document.createElement("li");
                    reponse.classList.add("answer");
                    reponse.classList.add("col-xl-6");
                    reponse.classList.add("col-md-6");
                    reponse.classList.add("col-sm-9");
                    reponse.classList.add("col-9");
                    reponse.innerText = questions[questionActuelle].answers[i]
                    reponses.appendChild(reponse)
                }

                // console.log(bonneReponse)
            }

            function genererImage(){
                const cheminImageAleatoire = images[Math.floor(Math.random() * images.length)];

                let imageElement = document.createElement("img");
                imageElement.src = cheminImageAleatoire;
                imageElement.classList.add("image-brain");
                // imageElement.classList.add("col-xl-9");
                // imageElement.classList.add("col-lg-9");
                imageElement.classList.add("col-md-12");
                imageElement.classList.add("col-sm-12");
                imageElement.classList.add("col-12");
                document.querySelector(".image-brain-container").appendChild(imageElement);
            }

            function afficherScore() {
                let cadreScore = document.querySelector("#score")
                cadreScore.innerText = score
            }

            function afficherTotalQuestions(){
                let cadreTotalQuestions = document.querySelector("#total_questions")
                cadreTotalQuestions.innerText = questions.length
            }
    
            function questionSuivante() {
                reponses.innerHTML = "";
    
                if (questionActuelle < questions.length -1) {
                        questionActuelle++;
                        genererQuestion();
                        afficherScore();
                    } else {
                        question.innerText = "";
                        question.innerHTML = `Partie terminée !`
                        reponses.remove();
                        timerContainer.remove();
                        timerStop();
                        stopChrono();
                        showChrono();
                        afficherScore();
                        formFillResults();
                        miniCardsFill();
                        showMiniCards();
                        storeGameButton.hidden = false;
                }
            }

            function addProgressBarGreen(){
                let progressSection = document.createElement("div");
                progressSection.classList.add("progress");
                progressSection.style.width = progressBarInterval  + "%";
                progressBarBootstrap.appendChild(progressSection);

                let progressBarSection = document.createElement("div");
                progressBarSection.classList.add("progress-bar");
                progressBarSection.classList.add("bg-success");
                progressSection.appendChild(progressBarSection);
            }

            function addProgressBarRed(){
                let progressSection = document.createElement("div");
                progressSection.classList.add("progress");
                progressSection.style.width = progressBarInterval  + "%";
                progressBarBootstrap.appendChild(progressSection);

                let progressBarSection = document.createElement("div");
                progressBarSection.classList.add("progress-bar");
                progressBarSection.classList.add("bg-danger");
                progressSection.appendChild(progressBarSection);
            }

            function formFillResults() {
                questionsQuantityInput.value = nombreQuestions;
                gameScoreInput.value = score;
            }

            function miniCardsFill() {
                miniCardBody1.innerHTML = '<i class="fa-solid fa-bolt fa-xl me-2" style="color: rgb(255, 174, 0);"></i>' + score;
                miniCardBody3.innerHTML = '<i class="fa-solid fa-bullseye fa-xl me-2" style="color: rgb(38, 192, 18, 0.664);" ></i>' + Math.round((score*100)/nombreQuestions) + " %";
            } 

            function showMiniCards() {
                miniCard1.hidden = false;
                miniCard2.hidden = false;
                miniCard3.hidden = false;
            }

            /* ----------------------- When click on aswer button ----------------------- */
            reponses.addEventListener("click", (event) => {
                let reponseChoisie = event.target.innerText
                if (reponseChoisie == bonneReponse) {
                    score++;
                    addProgressBarGreen()
                    questionSuivante()
                } else {
                    questionSuivante()
                    addProgressBarRed()
                }
            })



        });

        

        


        
  


    }
})






