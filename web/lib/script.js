function send() {
  var value = document.getElementById('task').value;
  var testValue = value.replace(' ', '');
  if (testValue === '') {
    document.getElementById('error').classList.remove('hidden');
  } else {
    var xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../app/insertTask.php', true);
    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhttp.send('task=' + value);
    window.location.href = '.';
  }
}
