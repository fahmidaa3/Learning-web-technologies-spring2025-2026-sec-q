let cells = document.getElementsByClassName("cell");
let gameStatus = document.getElementById("status");
let resetBtn = document.getElementById("reset");

let xscore = document.getElementById("xscore");
let oscore = document.getElementById("oscore");

let board = ["","","","","","","","",""];
let currentPlayer = "X";
let gameOver = false;

let xWin = 0;
let oWin = 0;


for(let i=0;i<cells.length;i++){

    cells[i].addEventListener("click", function(){
        playGame(i);
    });

}


function playGame(index){

    if(board[index] != "" || gameOver == true){
        return;
    }

    board[index] = currentPlayer;
    cells[index].innerHTML = currentPlayer;

    checkWinner();

    if(gameOver == false){

        if(currentPlayer == "X"){
            currentPlayer = "O";
        }
        else{
            currentPlayer = "X";
        }

        gameStatus.innerHTML = "Current Player : " + currentPlayer;

    }

}


function checkWinner(){

    let win = [
        [0,1,2],
        [3,4,5],
        [6,7,8],

        [0,3,6],
        [1,4,7],
        [2,5,8],

        [0,4,8],
        [2,4,6]
    ];


    for(let i=0;i<win.length;i++){

        let a = win[i][0];
        let b = win[i][1];
        let c = win[i][2];

        if(board[a] != "" && board[a] == board[b] && board[a] == board[c]){

            cells[a].classList.add("win");
            cells[b].classList.add("win");
            cells[c].classList.add("win");

            gameStatus.innerHTML = "Winner : " + board[a];

            gameOver = true;

            if(board[a] == "X"){
                xWin++;
                xscore.innerHTML = xWin;
            }
            else{
                oWin++;
                oscore.innerHTML = oWin;
            }

            return;
        }

    }


    let draw = true;

    for(let i=0;i<board.length;i++){

        if(board[i] == ""){
            draw = false;
        }

    }

    if(draw == true){

        gameStatus.innerHTML = "It's a Draw!";
        gameOver = true;

    }

}


resetBtn.addEventListener("click", resetGame);


function resetGame(){

    for(let i=0;i<cells.length;i++){

        cells[i].innerHTML = "";
        cells[i].classList.remove("win");

    }

    board = ["","","","","","","","",""];

    currentPlayer = "X";
    gameOver = false;

    gameStatus.innerHTML = "Current Player : X";

}