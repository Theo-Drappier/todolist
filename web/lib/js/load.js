var xhttp = new XMLHttpRequest();
xhttp.open('GET', 'index.php', false);
xhttp.send();
console.log(xhttp.response);
document.documentElement.outerHTML = xhttp.responseText;
