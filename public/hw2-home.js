function likeit(event){
  event.stopPropagation();
  const orange = event.currentTarget.parentNode.parentNode;
  event.currentTarget.src = "IMG/like.png";
  const formData = new FormData();
  formData.append('title', orange.dataset.nome);
  formData.append('_token', csrf_token);
  const form_data = {method: 'post', body: formData};
  fetch(PREF, form_data).then(Response, Error);; 
}

function Response(response) {
  console.log(response); 
}

function Error(error) { 
  console.log("Errore");
}

const like = document.querySelectorAll('#like');
for(let l of like){
    l.addEventListener('click', likeit);
}