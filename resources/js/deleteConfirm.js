// salvare tutti gli elementi con la classe "deleteForm" (buttons sumbit trash)
const deleteForms = document.querySelectorAll('.deleteForm');


deleteForms.forEach(element => {

    // salvare il valore di title di ogni comic attraverso l'attributo "data-name="{{$comic->title}}""
    const title = element.getAttribute('data-name');

    // quando si verifica l'evento "submit" del singolo "btn sumbit trash" (non facendo ricaricare la pagina con "preventDefault()")
    element.addEventListener('submit', (el)=> {
        el.preventDefault();

        // con il metodo "confirm('stringa')" viene visualizzata una finestra di dialogo con un messaggio, un btn "OK" e un btn "ANNULLA"
        // restituisce TRUE se viene cliccato OK, altrimenti FALSE
        const accept = confirm(`Sei sicuro di eliminare ${title}?`)

        // se viene cliccato OK il form viene inviato -> l'elemento viene eliminato
        if (accept) {
            el.target.submit();
        }
    })
});