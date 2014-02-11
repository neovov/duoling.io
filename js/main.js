var
	form     = document.getElementById("form"),
	what     = document.getElementById("what"),
	language = document.getElementById("language");

form.addEventListener("submit", redirect, false);

function redirect(e) {
	e.preventDefault();
	window.location.href = "/" + what.value + "/" + language.value + ".html";
}