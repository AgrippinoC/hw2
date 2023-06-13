function Response(response) {
  if (!response.ok) {
    return null;
  }
  //console.log(response);
  return response.json();
}

function AJSON(json) {
  if (!json.length) {
    return null;
  }
  console.log(json);
  container.textContent = null;
  for (let ara in json) {
    console.log(ara);
    const p = document.createElement("p");
    p.textContent = json[ara].arance + " ";
    container.appendChild(p);
  }
}

function commento(event){
  const form = document.querySelector("form");
  const formData = new FormData(form);
  formData.append('_token', csrf_token);
  const form_data = {method: 'post', body: formData};
  fetch(COMMENT, form_data);   
  event.preventDefault();
}

document.querySelector('form').addEventListener('submit', commento);
const container = document.getElementById('results');
container.textContent = "Nessuna";
fetch(PREFER).then(Response).then(AJSON);