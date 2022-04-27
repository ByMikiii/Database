function pushtask(task) {
  let cb = document.querySelector("#chtask" + task);

  if (cb.checked == true) {
    document.getElementById("taski" + task).style.textDecoration =
      "line-through 2px";
  } else {
    document.getElementById("taski" + task).style.textDecoration = "none";
  }
}

function minusTask(list) {
  for (i = 6; i > 0; i--) {
    if (getVisibility(list, i) == "visible") {
      document.getElementById("task" + list + i).style.visibility = "hidden";
      i = 0;
    }
  }
}

function plusTask(list) {
  for (i = 1; i <= 6; i++) {
    if (getVisibility(list, i) == "hidden") {
      document.getElementById("task" + list + i).style.visibility = "visible";
      document.getElementById("btn" + list + i).style.textDecoration = "none";
      i = 8;
    }
  }
}

function getVisibility(list, task) {
  let btnSel = document.querySelector("#task" + list + task);
  let compStyles = window.getComputedStyle(btnSel);
  let getVisibility = compStyles.getPropertyValue("visibility");
  return getVisibility;
}

function plusList() {
  for (i = 1; i < 7; i++) {
    let btnSel = document.querySelector("#todo-list" + i);
    let compStyles = window.getComputedStyle(btnSel);
    let getDisplay = compStyles.getPropertyValue("display");

    if (getDisplay == "none") {
      document.getElementById("todo-list" + i).style.display = "inline-block";
      for (j = 2; j <= 6; j++) {
        document.getElementById("task" + i + j).style.visibility = "hidden";
      }
      i = 7;
    }
  }
}

function minusList() {
  for (i = 6; i > 0; i--) {
    let btnSel = document.querySelector("#todo-list" + i);
    let compStyles = window.getComputedStyle(btnSel);
    let getDisplay = compStyles.getPropertyValue("display");
    console.log(getDisplay);

    if (getDisplay == "inline-block") {
      document.getElementById("todo-list" + i).style.display = "none";
      i = 0;
    }
  }
}

function erase(list) {
  document.getElementById("heading" + list).value = "";
  for (i = 1; i <= 6; i++) {
    document.getElementById("taski" + list + i).value = "";
    document.getElementById("chtask" + list + i).checked = false;
    document.getElementById("taski" + list + i).style.textDecoration = "none";
  }
}
