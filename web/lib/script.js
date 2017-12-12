function send() {
  var value = document.getElementById('task').value;
  var xhttp = new XMLHttpRequest();
  xhttp.open('POST', '../app/insertTask.php', true);
  xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhttp.send('task=' + value);

}
