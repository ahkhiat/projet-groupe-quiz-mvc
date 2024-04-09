console.log("game loaded");

document.addEventListener("DOMContentLoaded", () => {

let gameContainer = document.getElementById("game_container");

    if(gameContainer)
    {
        console.log("game container loaded")

        let questions;
        let questionsArray;

        async function fetchQuestions() {
            const res = await fetch("?controller=game&action=fetch_questions", {
                method: 'GET' ,
                headers: {
                    'Accept': 'application/json, text/plain, */*',
                    'Content-type': 'application/json'
                } 
            });
            questionsArray = await res.json();
            questions = questionsArray.game
            // console.log(questions);
            }
        async function getListeQuestions() {
            await fetchQuestions();
        }

        getListeQuestions().then(() => {
            console.log('question test : ', questions);

            let question = document.querySelector("#question");
            let reponses = document.querySelector("#answers");
            let questionActuelle = 0;
            let score = 0;
            let bonneReponseIndex = 0;
            let bonneReponse = questions[questionActuelle].answers[bonneReponseIndex];


            genererQuestion()
            afficherTotalQuestions()

            function genererQuestion() {
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
                    reponse.innerText = questions[questionActuelle].answers[i]
                    reponses.appendChild(reponse)
                }

                console.log(bonneReponse)
            }

            function afficherScore() {
                let cadreScore = document.querySelector("#score")
                cadreScore.innerText = score
            }

            function afficherTotalQuestions(){
                let cadreTotalQuestions = document.querySelector("#total_questions")
                cadreTotalQuestions.innerText = questions.length
            }
    
            function questionSuivante () {
                reponses.innerHTML = "";
    
                if (questionActuelle < questions.length -1) {
                        questionActuelle++;
                        genererQuestion();
                        afficherScore();
                    } else {
                        question.innerText = "";
                        question.innerHTML = `Merci d'avoir participé à ce quiz, votre score est de ${score} bonnes réponses sur ${questions.length} !`
                        reponses.remove();
                        afficherScore();
                }
            }

            reponses.addEventListener("click", (event) => {
                let reponseChoisie = event.target.innerText
                console.log('reponse choisie', reponseChoisie)
    
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



        });


        
        // let bonneReponseIndex = questions[questionActuelle].correctAnswerIndex;
        // let bonneReponse = questions[questionActuelle].answers[bonneReponseIndex];


        // genererQuestion();

        

        


        
  


    }
})






