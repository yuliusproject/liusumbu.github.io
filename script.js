function calculate() {
    const operand1 = parseFloat(document.getElementById("operand1").value);
    const operand2 = parseFloat(document.getElementById("operand2").value);
    const operator = document.getElementById("operator").value;
  
    let result;
  
    if (operator === "+") {
      result = operand1 + operand2;
    } else if (operator === "-") {
      result = operand1 - operand2;
    } else if (operator === "*") {
      result = operand1 * operand2;
    } else if (operator === "/") {
      if (operand2 === 0) {
        result = "Division by zero is not allowed!";
      } else {
        result = operand1 / operand2;
      }
    } else if (operator === "%") {
      result = operand1 % operand2;
    } else {
      result = "Invalid operator!";
    }
  
    const resultElement = document.getElementById("result");
    resultElement.innerHTML = "Hasil: " + result;
  
    // **Optional: Send calculation data to PHP for server-side processing (if needed)**
    // fetch('/calculate.php', {
    //   method: 'POST',
    //   body: JSON.stringify({ operand1, operand2, operator })
    // })
    // .then(response => response.json())
    // .then(data => {
    //   // Handle server-side response (e.g., display additional information)
    //   console.log(data);
    // })
    // .catch(error => console.error(error));
  }
  