let inURL = new URL(window.location.href).searchParams; // Permet de recupérer les informations de l'utilisateur de la page précédente et de les récupérer dans cette page
let firstName = inURL.get("firstName"); // récupère le contenu de la valeur de la variable "firstName"
let lastName = inURL.get("lastName"); // récupère le contenu de la valeur de la variable "lastName"
let login = inURL.get("login"); // récupère le contenu de la valeur de la variable "lognin"
let teacher = inURL.get("teacher"); // récupère le contenu de la valeur de la variable "teacher"
let id = document.getElementById("personne"); // met dans "personne" les infos récupérées précédemment
id.innerHTML = lastName + " " + firstName + " " + login + " " + teacher;
