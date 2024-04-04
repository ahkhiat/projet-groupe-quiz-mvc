console.log("game loaded");

document.addEventListener("DOMContentLoaded", () => {

let gameContainer = document.getElementById("game_container");

    if(gameContainer)
    {
        console.log("toto")

        let questions;

        getListeQuestions();
        async function getListeQuestions() {
            const resType = await fetch("?controller=game&action=fetch_questions", {
                method: 'GET' ,
                headers: {
                    'Accept': 'application/json, text/plain, */*',
                    'Content-type': 'application/json'
                } 
            });
            
            questions = await resType.json();
            console.log(questions);
            }

        let question = document.querySelector("#question");
        let reponses = document.querySelector("#answers");
        let questionActuelle = 0;
        let score = 0;
        let bonneReponseIndex = questions[questionActuelle].correctAnswerIndex;
        let bonneReponse = questions[questionActuelle].answers[bonneReponseIndex];

        genererQuestion();

        function genererQuestion() {
            question.innerText = questions[questionActuelle].question;
            bonneReponseIndex = questions[questionActuelle].correctAnswerIndex;
            bonneReponse = questions[questionActuelle].answers[bonneReponseIndex];
                for (let i=0; i < questions[questionActuelle].answers.length; i++) {
                    // console.log(questions[questionActuelle].answers[i])
                    let reponse = document.createElement("li");
                    reponse.classList.add("answer");
                    reponse.innerText = questions[questionActuelle].answers[i]
                    reponses.appendChild(reponse)
                }
            console.log("Index Bonne reponse", bonneReponseIndex)
            console.log(bonneReponse)
        }

        function afficherScore() {
            let cadreScore = document.querySelector("#score")
            cadreScore.innerText = score
        }

        function questionSuivante () {
            reponses.innerHTML = "";

            if (questionActuelle < questions.length - 1) {
                    questionActuelle++;
                    genererQuestion();
                    afficherScore();
                } else {
                    question.innerText = "";
                    question.innerHTML = `Merci d'avoir participé à ce quiz, votre score est de ${score} bonnes réponses sur 4 !`
                    reponses.remove();
                    afficherScore();
            }
        }


        reponses.addEventListener("click", (event) => {
            let reponseChoisie = event.target.innerText
            console.log(reponseChoisie)

            if (reponseChoisie == bonneReponse) {
                console.log("c'est gagné")
                score++;
                console.log("score", score)
                console.log("question actuelle", questionActuelle)
                questionSuivante()
            } else {
                questionSuivante()
            }
        })
  


    }
})






