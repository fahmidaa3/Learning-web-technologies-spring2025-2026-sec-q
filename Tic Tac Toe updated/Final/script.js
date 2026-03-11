let boxes = document.getElementsByClassName("cell");
let statusText = document.getElementById("status");
let resetButton = document.getElementById("reset");

let xScoreText = document.getElementById("xscore");
let oScoreText = document.getElementById("oscore");

let gameBoard = ["","","","","","","","",""];
let player = "X";
let isGameOver = false;

let xCount = 0;
let oCount = 0;


for(let i=0;i<boxes.length;i++){

    boxes[i].addEventListener("click", function(){
        startGame(i);
    });

}


function startGame(index){

    if(gameBoard[index] != "" || isGameOver == true){
        return;
    }

    gameBoard[index] = player;
    boxes[index].innerHTML = player;

    checkWin();

    if(isGameOver == false){

        if(player == "X"){
            player = "O";
        }
        else{
            player = "X";
        }

        statusText.innerHTML = "Current Player : " + player;

    }

}


function checkWin(){

    let winPattern = [
        [0,1,2],
        [3,4,5],
        [6,7,8],

        [0,3,6],
        [1,4,7],
        [2,5,8],

        [0,4,8],
        [2,4,6]
    ];


    for(let i=0;i<winPattern.length;i++){

        let a = winPattern[i][0];
        let b = winPattern[i][1];
        let c = winPattern[i][2];

        if(gameBoard[a] != "" && gameBoard[a] == gameBoard[b] && gameBoard[a] == gameBoard[c]){

            boxes[a].classList.add("win");
            boxes[b].classList.add("win");
            boxes[c].classList.add("win");

            statusText.innerHTML = "Winner : " + gameBoard[a];

            isGameOver = true;

            if(gameBoard[a] == "X"){
                xCount++;
                xScoreText.innerHTML = xCount;
            }
            else{
                oCount++;
                oScoreText.innerHTML = oCount;
            }

            return;
        }

    }


    let isDraw = true;

    for(let i=0;i<gameBoard.length;i++){

        if(gameBoard[i] == ""){
            isDraw = false;
        }

    }

    if(isDraw == true){

        statusText.innerHTML = "It's a Draw!";
        isGameOver = true;

    }

}


resetButton.addEventListener("click", resetGame);


function resetGame(){

    for(let i=0;i<boxes.length;i++){

        boxes[i].innerHTML = "";
        boxes[i].classList.remove("win");

    }

    gameBoard = ["","","","","","","","",""];

    player = "X";
    isGameOver = false;

    statusText.innerHTML = "Current Player : X";

}