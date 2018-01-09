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
  var id = parseInt(element.id.replace('delete', ''));
  parentElement = element.parentNode.parentNode;

  var xhttp = new XMLHttpRequest();
  xhttp.open('DELETE', '../app/deleteTask.php?idTask=' + id, false);
  //xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhttp.send(null);
  parentElement.parentNode.removeChild(parentElement);
}

function updateRow(element) {
  var id = parseInt(element.id.replace('change', ''));
  var state = parseInt(document.getElementById('state' + id).value);

  var xhttp = new XMLHttpRequest();
  xhttp.open('POST', '../app/updateTask.php', false);
  xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhttp.send('idTask=' + id + '&state=' + state);
  modifyStateHTML(id, state);
}

function modifyStateHTML(id, state) {
  var nameTask = document.getElementById(id);
  var nameText = nameTask.textContent;

  if (state === 0) {
    document.getElementById('state' + id).value = 1;
    nameTask.innerHTML = "<strike>" + nameText + "</strike>";
  } else if(state === 1) {
    document.getElementById('state' + id).value = 0;
    nameTask.innerHTML = nameText;
  }
}
