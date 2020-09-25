var submit = document.getElementById('submit').addEventListener("click", submitMessage);
var clear = document.getElementById('clear').addEventListener("click", clearMessage);
var preview = document.getElementById('preview').addEventListener("click", preview);

function preview(e){
  var title = document.getElementById('titlebox');
  var post = document.getElementById('messagebox');
  document.getElementById('previewBox').innerHTML = "<div id='title'><p>" + title.value + "</p></div> <div id='post'><p>" + post.value + "</p></div>";
}

function clearMessage(e){
  var confirm = window.confirm("Are you sure you want to clear?");
  if(confirm){
    return true;
  }
  else{
    e.preventDefault();
    return false;
  }
}

function submitMessage(e){
  var title = document.getElementById('titlebox');
  var post = document.getElementById('messagebox');
  if(title.value == "" && post.value == ""){
    e.preventDefault();
    window.alert("You must enter a title and message to post.");
    document.getElementById('titlebox').style.borderColor = "red";
    document.getElementById('messagebox').style.borderColor = "red";
    return false;
  }
  else if (title.value == ""){
    e.preventDefault();
    window.alert("You must enter a title to post.");
    document.getElementById('titlebox').style.borderColor = "red";
    return false;
  }
  else if (post.value == ""){
    e.preventDefault();
    window.alert("You must enter a message to post.");
    document.getElementById('messagebox').style.borderColor = "red";
    return false;
  }
  else{
    return true;
  }
}
