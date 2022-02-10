const testWrapper = document.querySelector(".test-wrapper");
const testArea = document.querySelector("#test-area");
const originText = document.querySelector("#origin-text p").innerHTML;
const resetButton = document.querySelector("#reset");
const theTimer = document.querySelector(".timer");


// Add leading zero to numbers 9 or below (purely for aesthetics):

// Run a standard minute/second/hundredths timer:
function runTimer() {
    let currentTime = timer[0] + ":" + timer[1] + ":" + timer[2];
    theTimer.innerHTML = currentTime;
    timer[3]++;

    timer[0] = Math.floor((timer[3]/100)/60);
    timer[1] = Math.floor((timer[3]/100) - (timer[0] * 60));
    timer[2] = Math.floor(timer[3] - (timer[1] * 100) - (timer[0] * 6000));
}

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