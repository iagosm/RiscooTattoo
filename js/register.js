function register(email, data) {
  console.log({
    email,
    data,
  });
  localStorage.setItem(email, JSON.stringify(data));
}

const form = document.getElementById("register-form-id");

form.addEventListener("submit", (event) => {
  event.preventDefault();
  // handle the form data
  console.log(event);
  const name = form.elements["name-input"].value;
  const username = form.elements["login-input"].value;
  const password = form.elements["password-input"].value;

  register(username, {
    name,
    username,
    password,
  });

  alert("Usuário registrado com sucesso");
  window.location = "/page/agendamento.html";
});
