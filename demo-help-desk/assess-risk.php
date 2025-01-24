
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Breast Cancer Risk Assessment</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }
    .question {
      margin-bottom: 20px;
    }
    .result {
      margin-top: 20px;
      padding: 15px;
      border: 1px solid #ddd;
      background-color: #f9f9f9;
    }
    .hidden {
      display: none;
    }
    .progress {
      margin-bottom: 20px;
      font-size: 16px;
    }
    button {
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <h1>Breast Cancer Awareness Tool</h1>
  <p>Answer the following questions to assess your risk and receive personalized prevention tips.</p>

  <!-- Progress Tracker -->
  <div class="progress">
    Progress: <span id="currentStep">1</span>/<span id="totalSteps">8</span>
  </div>

  <form id="riskForm">
    <!-- Questions -->
    <div id="step-1" class="question">
      <label>What is your age?</label><br>
      <input type="radio" name="age" value="0"> Under 40<br>
      <input type="radio" name="age" value="1"> 40-49<br>
      <input type="radio" name="age" value="2"> 50+
    </div>

    <div id="step-2" class="question hidden">
      <label>Have you reached menopause?</label><br>
      <input type="radio" name="menopause" value="0"> No<br>
      <input type="radio" name="menopause" value="1"> Yes
    </div>

    <div id="step-3" class="question hidden">
      <label>Do you have a first-degree relative diagnosed with breast cancer?</label><br>
      <input type="radio" name="familyHistory" value="3"> Yes<br>
      <input type="radio" name="familyHistory" value="0"> No
    </div>

    <div id="step-4" class="question hidden">
      <label>Is there a history of ovarian cancer in your family?</label><br>
      <input type="radio" name="ovarianHistory" value="3"> Yes<br>
      <input type="radio" name="ovarianHistory" value="0"> No
    </div>

    <div id="step-5" class="question hidden">
      <label>Do you exercise regularly (at least 150 minutes per week)?</label><br>
      <input type="radio" name="exercise" value="-1"> Yes<br>
      <input type="radio" name="exercise" value="0"> No
    </div>

    <div id="step-6" class="question hidden">
      <label>Do you consume alcohol regularly?</label><br>
      <input type="radio" name="alcohol" value="1"> Yes<br>
      <input type="radio" name="alcohol" value="0"> No
    </div>

    <div id="step-7" class="question hidden">
      <label>Have you noticed unusual changes in your breasts (e.g., lumps, pain, or discharge)?</label><br>
      <input type="radio" name="symptoms" value="2"> Yes<br>
      <input type="radio" name="symptoms" value="0"> No
    </div>

    <div id="step-8" class="question hidden">
      <label>Have you undergone hormone replacement therapy?</label><br>
      <input type="radio" name="hormoneTherapy" value="2"> Yes<br>
      <input type="radio" name="hormoneTherapy" value="0"> No
    </div>

    <!-- Navigation Buttons -->
    <div>
      <button type="button" id="prevButton" class="hidden" onclick="prevStep()">Previous</button>
      <button type="button" id="nextButton" onclick="nextStep()">Next</button>
    </div>
  </form>

  <!-- Results Section -->
  <div id="result" class="result hidden">
    <h2>Your Results</h2>
    <p id="riskLevel"></p>
    <p id="recommendations"></p>
    <p><strong>Note:</strong> This tool provides general guidance. Always consult a healthcare professional for a detailed evaluation.</p>
  </div>

  <script>
    let currentStep = 1;
    const totalSteps = 8;

    // Update progress display
    function updateProgress() {
      document.getElementById("currentStep").innerText = currentStep;
      document.getElementById("totalSteps").innerText = totalSteps;
    }

    // Show the next question
    function nextStep() {
      if (currentStep < totalSteps) {
        document.getElementById(`step-${currentStep}`).classList.add("hidden");
        currentStep++;
        document.getElementById(`step-${currentStep}`).classList.remove("hidden");
        document.getElementById("prevButton").classList.remove("hidden");
      }

      if (currentStep === totalSteps) {
        document.getElementById("nextButton").innerText = "Submit";
        document.getElementById("nextButton").onclick = calculateRisk;
      }
      updateProgress();
    }

    // Show the previous question
    function prevStep() {
      if (currentStep > 1) {
        document.getElementById(`step-${currentStep}`).classList.add("hidden");
        currentStep--;
        document.getElementById(`step-${currentStep}`).classList.remove("hidden");
      }

      if (currentStep === 1) {
        document.getElementById("prevButton").classList.add("hidden");
      }
      document.getElementById("nextButton").innerText = "Next";
      document.getElementById("nextButton").onclick = nextStep;

      updateProgress();
    }

    // Calculate risk and show results
    function calculateRisk() {
      let score = 0;
      const form = document.forms["riskForm"];

      // Collect all inputs
      score += parseInt(form["age"].value || 0);
      score += parseInt(form["menopause"].value || 0);
      score += parseInt(form["familyHistory"].value || 0);
      score += parseInt(form["ovarianHistory"].value || 0);
      score += parseInt(form["exercise"].value || 0);
      score += parseInt(form["alcohol"].value || 0);
      score += parseInt(form["symptoms"].value || 0);
      score += parseInt(form["hormoneTherapy"].value || 0);

      // Display results
      const resultDiv = document.getElementById("result");
      const riskLevel = document.getElementById("riskLevel");
      const recommendations = document.getElementById("recommendations");

      if (score <= 3) {
        riskLevel.innerText = "Your risk is LOW.";
        recommendations.innerText = "Maintain a healthy lifestyle and stay informed about breast health.";
      } else if (score <= 6) {
        riskLevel.innerText = "Your risk is MODERATE.";
        recommendations.innerText = "Schedule regular screenings and consider lifestyle changes.";
      } else {
        riskLevel.innerText = "Your risk is HIGH.";
        recommendations.innerText = "Consult a healthcare provider for genetic testing or preventive strategies.";
      }

      resultDiv.classList.remove("hidden");
      document.getElementById("riskForm").classList.add("hidden");
      updateProgress();
    }
  </script>
</body>
</html>
