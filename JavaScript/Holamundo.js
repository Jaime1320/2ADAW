javascript
let display = document.getElementById('display');
let operator = '';
let operand1 = 0;
let operand2 = null;

function appendNumber(number) {
    display.value = display.value + number;
}

function appendOperator(op) {
    operator = op;
    operand1 = parseFloat(display.value);
    display.value = '';
}

function calculateResult() {
    operand2 = parseFloat(display.value);
    switch (operator) {
        case '+':
            display.value = operand1 + operand2;
            break;
        case '-':
            display.value = operand1 - operand2;
            break;
        case '*':
            display.value = operand1 * operand2;
            break;
        case '/':
            display.value = operand1 / operand2;
            break;
    }
}