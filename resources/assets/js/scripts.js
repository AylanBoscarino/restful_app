const collection = document.getElementsByClassName("excluir");
for (index=0; index < collection.length; index++){
    let elem = collection[index]
    let route = elem.getAttribute('data-route');
    
    elem.addEventListener("click", function(event){
        event.preventDefault()
        fetch(route, {
            method: 'DELETE',
        }).then(function(response){
            //console.log(response)
            //return window.location.replace(response.url);
            document.getElementsByClassName("row")[0].removeChild(elem.parentElement);
        });  
    });
}
