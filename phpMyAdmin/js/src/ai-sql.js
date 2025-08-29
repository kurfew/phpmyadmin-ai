


document.addEventListener("DOMContentLoaded", function () {
  const btn = document.getElementById("generateQueryBtn");
  const promptBox = document.getElementById("aiPrompt");
  const tokenBox = document.getElementById("userToken");
  const outputCard = document.getElementById("aiOutput");
  const outputPre = document.getElementById("generatedQuery");
  const copyBtn = document.getElementById("copyQueryBtn");
  const sendBtn = document.getElementById("sendQueryBtn");
  //const sqlBox = document.getElementById("sqlquery"); // phpMyAdmin textarea if exists

  // --- Generate SQL from AI ---
  btn.addEventListener("click", async function () {
    const prompt = promptBox.value.trim();
    const token = tokenBox.value.trim();

    if (!prompt) {
      alert("⚠️ Please enter a description first.");
      return;
    }
    if (!token) {
      alert("⚠️ Please enter your token first.");
      return;
    }

    try {
      const response = await fetch("http://localhost/aiphpfront/api/ai/process.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({
          token: token,
          query: prompt
        })
      });

      const data = await response.json();

      // Show response or error
      if (data.response) {
        outputPre.textContent = data.response;
      } else if (data.error) {
        outputPre.textContent = "❌ " + data.error;
      } else {
        outputPre.textContent = "⚠️ Unexpected response.";
      }

      outputCard.classList.remove("d-none");

    } catch (err) {
      outputPre.textContent = "⚠️ Error: " + err.message;
      outputCard.classList.remove("d-none");
    }
  });

  // --- Copy button logic ---
  copyBtn.addEventListener("click", function () {
    const sql = outputPre.textContent.trim();
    if (!sql) {
      alert("⚠️ Nothing to copy!");
      return;
    }

    navigator.clipboard.writeText(sql);

    if (sqlBox) {
      sqlBox.value = sql;
    }

    copyBtn.textContent = "Copied!";
    setTimeout(() => (copyBtn.textContent = "Copy"), 1500);
  });

  // --- Send button logic (send to phpMyAdmin textarea) ---
  sendBtn.addEventListener("click", function () {
    const sql = outputPre.textContent.trim();
    if (!sql) {
      alert("⚠️ No SQL query to send!");
      return;
    }

    if (sqlBox) {
      sqlBox.value = sql;
      sqlBox.dispatchEvent(new Event("input", { bubbles: true }));
      sqlBox.scrollIntoView({ behavior: "smooth", block: "center" });
    } else {
      alert("⚠️ SQL editor not found in phpMyAdmin.");
    }
  });
});

