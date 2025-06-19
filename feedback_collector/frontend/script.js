document.getElementById("feedbackForm").addEventListener("submit", function(event) {
  event.preventDefault();

  var feedback = {
    name: document.getElementById("name").value,
    email: document.getElementById("email").value,
    phone: document.getElementById("phone").value,
    message: document.getElementById("message").value
  };

  var abc = new XMLHttpRequest();
  abc.open("POST", "../backend/feedback_add.php");
  abc.setRequestHeader("Content-Type", "application/json");
  abc.onload = function() {
    if (xhr.responseText === "ok") {
      alert("Thank you!");
      document.getElementById("feedbackForm").reset();
    } else {
      alert("Error!");
    }
  };
  abc.send(JSON.stringify(feedback));
});