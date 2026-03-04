
let firstNumber= " ";
let secondNumber= " ";
let operator = " ";

function addNumber(num){

    let display = document.getElementById("display");
     
    if(operator == ""){
        firstNumber= firstNumber+ num;
        display.value= firstNumber;
    
    }
    else{
        secondNumber = secondNumber + num;
        display.value = secondNumber;
    }
}


function addDecimal(){

    let display = document.getElementById("display");

    if(operator == ""){
        firstNumber = firstNumber + ".";
        display.value = firstNumber;
    }
    else{
        secondNumber = secondNumber + ".";
        display.value = secondNumber;
    }

}

function setOperator(op){
    operator = op;
}

function calculate(){

    let result = 0;

    let n1 = parseFloat(firstNumber);
    let n2 = parseFloat(secondNumber);

    if(operator == "+"){
        result = n1 + n2;
    }

    else if(operator == "-"){
        result = n1 - n2;
    }

    else if(operator == "*"){
        result = n1 * n2;
    }

    else if(operator == "/"){
        result = n1 / n2;
    }

     let display = document.getElementById ("display");
    display.value = result;
    firstNumber = result;
    secondNumber = "";
    operator = "";
}

function clearDisplay(){

    firstNumber = "";
    secondNumber = "";
    operator = "";

    document.getElementById("display").value = "";

}