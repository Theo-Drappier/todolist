function addRow() {
  var value = document.getElementById('task').value;
  var testValue = value.replace(' ', '');
  if (testValue === '') {
    document.getElementById('error').classList.remove('hidden');
  } else {
    var xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../app/insertTask.php', false);
    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhttp.send('task=' + value);
    window.location.href = '.';
  }
}

function deleteRow(element) {
  var id = element.id.replace('delete', '');

  var xhttp = new XMLHttpRequest();
  xhttp.open('POST', '../app/deleteTask.php', false);
  xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhttp.send('idTask=' + id);
  window.location.reload();
}

function updateRow(element) {
  var id = element.id.replace('change', '');
  var state = document.getElementById('state' + id).value;

  var xhttp = new XMLHttpRequest();
  xhttp.open('POST', '../app/updateTask.php', false);
  xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhttp.send('idTask=' + id + '&state=' + state);
  window.location.reload();
}
