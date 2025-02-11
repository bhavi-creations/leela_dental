<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Chatbot</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .chat-container { width: 350px; border: 1px solid #ccc; padding: 10px; }
        .chat-box { height: 300px; overflow-y: auto; border-bottom: 1px solid #ccc; padding-bottom: 10px; }
        .input-box { width: 100%; padding: 5px; }
        .service { cursor: pointer; color: blue; text-decoration: underline; }
    </style>
</head>
<body>
    <div class="chat-container">
        <div class="chat-box" id="chatBox"></div>
        <input type="text" id="userInput" class="input-box" placeholder="Type a message..." onkeypress="handleKeyPress(event)">
    </div>

    <script>
        const services = {
            "Root Canal": "Dr. Smith (Endodontist)",
            "Teeth Whitening": "Dr. Johnson (Cosmetic Dentist)",
            "Implants": "Dr. Brown (Oral Surgeon)",
            "Braces": "Dr. Green (Orthodontist)"
        };

        function addMessage(sender, message) {
            const chatBox = document.getElementById("chatBox");
            const msgDiv = document.createElement("div");
            msgDiv.innerHTML = `<strong>${sender}:</strong> ${message}`;
            chatBox.appendChild(msgDiv);
            chatBox.scrollTop = chatBox.scrollHeight;
        }

        function handleKeyPress(event) {
            if (event.key === "Enter") {
                let userInput = document.getElementById("userInput").value;
                document.getElementById("userInput").value = "";
                addMessage("You", userInput);
                showServices();
            }
        }

        function showServices() {
            addMessage("Bot", "Please select a service:");
            const chatBox = document.getElementById("chatBox");
            for (let service in services) {
                let serviceElement = document.createElement("div");
                serviceElement.classList.add("service");
                serviceElement.innerText = service;
                serviceElement.onclick = function() { showDoctor(service); };
                chatBox.appendChild(serviceElement);
            }
        }

        function showDoctor(service) {
            addMessage("Bot", `The doctor for ${service} is: ${services[service]}`);
        }
    </script>
</body>
</html>
