
const weightInput = document.getElementById("weightInput");
const heightInput = document.getElementById("heightInput");
const calculateBtn = document.getElementById("calculateBtn");
const resultElement = document.getElementById("result");


calculateBtn.addEventListener("click", calculateBMI);



function calculateBMI() {
    const weight = Number(weightInput.value);
    const height = Number(heightInput.value);

    if (isNaN(weight) || isNaN(height) || !weight || !height) {
        resultElement.classList.remove('success')
        resultElement.innerText = "Please enter valid numbers.";    
    } else {
        const bmi = weight / (height * height);
        resultElement.innerText = `Your BMI is  ${bmi.toFixed(2)}.`;
        resultElement.classList.add('success')
    }
}