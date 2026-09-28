/* =========================
   LOGIN SYSTEM
========================= */

const loginForm = document.getElementById("loginForm");
const username = document.getElementById("username");
const password = document.getElementById("password");
const loginMessage = document.getElementById("loginMessage");
const showPassword = document.getElementById("showPassword");


/* =========================
   SHOW / HIDE PASSWORD
========================= */

if (showPassword) {

    showPassword.addEventListener("click", () => {

        if (password.type === "password") {

            password.type = "text";
            showPassword.textContent = "HIDE";

        } else {

            password.type = "password";
            showPassword.textContent = "SHOW";

        }

    });

}


/* =========================
   LOGIN
========================= */

if (loginForm) {

    loginForm.addEventListener("submit", (event) => {

        event.preventDefault();

        const usernameValue = username.value.trim();
        const passwordValue = password.value;


        /*
         * LOGIN DEMO
         * Username : admin
         * Password : 12345
         */

        if (
            usernameValue === "admin" &&
            passwordValue === "12345"
        ) {

            // Simpan status login
            localStorage.setItem("isLoggedIn", "true");
            localStorage.setItem("username", usernameValue);


            loginMessage.textContent =
                "LOGIN SUCCESS — Welcome back, " + usernameValue + "!";

            loginMessage.style.color = "#4d9c59";


            // Pindah ke portfolio
            setTimeout(() => {

                window.location.href = "index.html";

            }, 1000);


        } else {

            loginMessage.textContent =
                "Username atau password salah.";

            loginMessage.style.color = "#b64b4b";

        }

    });

}

