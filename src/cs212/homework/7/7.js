document.getElementById('actionButton').addEventListener('click', function () {
    var outputElement = document.getElementById('output');
    outputElement.innerHTML = 'Button clicked! Your JavaScript is working!';
});
document.getElementById('checkBox').addEventListener('click', function () {
    var outputElement = document.getElementById('output');
    if (this.checked) {
        outputElement.innerHTML = 'You have clicked the checkbox!';
    } else {
        outputElement.innerHTML = ''; // Clear the output if the checkbox is unchecked
    }
});

