document.addEventListener("DOMContentLoaded", function () {
    const menuItems = document.querySelectorAll(".menu-list a");
    const mainContent = document.querySelector(".dashboard");
  
    menuItems.forEach((item) => {
      item.addEventListener("click", function (e) {
        e.preventDefault();
        const targetPage = item.getAttribute("href").substring(1) + ".html";
        fetch(targetPage)
          .then((response) => response.text())
          .then((html) => {
            mainContent.innerHTML = html;
          })
          .catch((error) => console.error("Error fetching page:", error));
      });
    });
  });
  
  