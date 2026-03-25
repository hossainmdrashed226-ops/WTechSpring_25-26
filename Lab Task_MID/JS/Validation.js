function analyzeText() {

    const text = document.getElementById("inputText").value.trim();
    const resultDiv = document.getElementById("result");

    // Empty input check
    if (text === "") {
        resultDiv.innerHTML = "Please enter some text!";
        return;
    }

    // Character count
    const charCount = text.length;

    // Word count (multiple space handle)
    const words = text.split(/\s+/);
    const wordCount = words.length;

    // Reverse text
    const reversedText = text.split("").reverse().join("");

    // Show result
    resultDiv.innerHTML = `
        <p><strong>Total Characters:</strong> ${charCount}</p>
        <p><strong>Total Words:</strong> ${wordCount}</p>
        <p><strong>Reversed Text:</strong> ${reversedText}</p>
    `;
}