const modal = document.getElementById("modal-cliente");

function chamaModal(){
    modal.classList.remove('oculta');
    modal.classList.add('mostra');
}

let nome = document.getElementById("nome");

nome.addEventListener('change', async function(event) {
    event.preventDefault();
    try {
        const response = await fetch('/api/action_cadastro_cliente.php');
        const result = await response.json();

        if(result.status == 200){
            chamaModal();
        }else{
            console.log(result.status);
            alert("Não chama modal!");
        }
    } catch (error) {   
        console.log("Deu erro mano:", error);
    }
});
