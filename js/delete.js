
function deletar(id){
    alert("deletado")

var configuracao = { 
    method: 'POST',
    body: new URLSearchParams({ 'id': id, }),
 };

  fetch('./delet.php', configuracao)
  location.reload()
}