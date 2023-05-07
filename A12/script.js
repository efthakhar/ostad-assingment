// Get the input elements and the result element
const weightInput = document.getElementById("weightInput");
const heightInput = document.getElementById("heightInput");
const calculateBtn = document.getElementById("calculateBtn");
const resultElement = document.getElementById("result");

// Add event listener to the calculate button
calculateBtn.addEventListener("click", calculateBMI);

// Calculate BMI and display the result
function calculateBMI() {
    const weight = Number(weightInput.value);
    const height = Number(heightInput.value);

    if (isNaN(weight) || isNaN(height)) {
        resultElement.innerText = "Please enter valid numbers.";
    } else {
        const bmi = weight / (height * height);
        resultElement.innerText = `Your BMI is ${bmi.toFixed(2)}.`;
    }
}