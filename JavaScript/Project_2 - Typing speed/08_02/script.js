const testWrapper = document.querySelector(".test-wrapper");
const testArea = document.querySelector("#test-area");
const originText = document.querySelector("#origin-text p").innerHTML;
const resetButton = document.querySelector("#reset");
const theTimer = document.querySelector(".timer");


// Add leading zero to numbers 9 or below (purely for aesthetics):

// Run a standard minute/second/hundredths timer:


// Match the text entered with the provided text on the page:
const spellCheck = function() {
    let textEntered = testArea.value;
    console.log(textEntered);
}

// Start the timer:
const start = function() {
    let textEnteredLength = testArea.value.length;
    console.log(textEnteredLength);
}

// Reset everything:
const reset = function() {
    
}

// Event listeners for keyboard input and the reset button:
testArea.addEventListener('keypress', start)
testArea.addEventListener('keyup', spellCheck)
resetButton.addEventListener("click", reset)