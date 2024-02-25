if (document.getElementById("contact-form")) {
  const button = document.getElementById("cform-button");
  document
    .getElementById("contact-form")
    .addEventListener("submit", function (e) {
      e.preventDefault();
      button.innerText = "Enviado";
      button.disabled = true;
      button.style.backgroundColor = "#FFCD94";
      const formData = new FormData(this);
      formData.append("action", "submit_form");
      formData.append("_ajax_nonce", my_ajax_object.nonce); // Send the nonce

      fetch(my_ajax_object.ajax_url, {
        method: "POST",
        credentials: "same-origin",
        body: formData,
      })
        .then()
        .catch((error) => console.error("Error:", error));
    });
}
