function login(email, password) {
  const userStr = localStorage.getItem(email);
  if (userStr) {
    const userObj = JSON.parse(userStr);

    const isLogged = userObj.password === password;

    if (isLogged) {
      return userObj;
    } else {
      return null;
    }
  }

  return false;
}

const form = document.getElementById("login-form-id");

form.addEventListener("submit", (event) => {
  event.preventDefault();
  // handle the form data
  console.log(event);
  const username = form.elements["login-input"].value;
  const password = form.elements["password-input"].value;

  const loggedUser = login(username, password);

  // if (loggedUser) { // bypass na autenticação //
    if (true){
    alert("Usuário autenticado com sucesso");
    window.location = "../pages/administrador.html";
  } else {
    alert("Credenciais incorretas");
  }
  console.log({
    loggedUser,
  });
});
