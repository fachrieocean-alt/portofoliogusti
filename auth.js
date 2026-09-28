document.addEventListener("DOMContentLoaded", async function () {

    try {

        const response = await fetch("status_session.php");
        const data = await response.json();

        const userLogin = document.getElementById("userLogin");
        const loggedUsername = document.getElementById("loggedUsername");
        const loggedRole = document.getElementById("loggedRole");
        const logoutButton = document.getElementById("logoutButton");

        // Belum login: biarkan portofolio tetap bisa dilihat publik,
        // cukup sembunyikan status login (sudah default hidden di HTML).
        if (!data.login) {
            return;
        }

        if (!userLogin) return;

        // Tampilkan status login memakai elemen yang sudah ada di index.html
        userLogin.style.display = "flex";

        if (loggedUsername) {
            loggedUsername.textContent = data.username.toUpperCase();
        }

        if (loggedRole) {
            loggedRole.textContent = data.role.toUpperCase();
        }

        // Kalau admin, tambahkan link ke dashboard admin di sebelah tombol logout
        if (data.role === "admin" && logoutButton) {
            const adminLink = document.createElement("a");
            adminLink.href = "admin.php";
            adminLink.className = "logout-button";
            adminLink.textContent = "ADMIN";
            adminLink.style.marginRight = "8px";
            logoutButton.parentNode.insertBefore(adminLink, logoutButton);
        }

        // Tombol logout
        if (logoutButton) {
            logoutButton.addEventListener("click", (event) => {
                event.preventDefault();

                document.body.classList.add("page-slide-out");

                setTimeout(() => {
                    window.location.href = "logout.php";
                }, 500);
            });
        }

    } catch (error) {

        console.error("Gagal mengecek session:", error);

    }

});