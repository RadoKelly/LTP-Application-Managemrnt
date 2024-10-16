var link = document.getElementById('mylink');
link.addEventListener('click',function(event){
    $result = confirm('Voulez vous vraiment supprimer?');
    if(!$result){
        event.preventDefault();
    }
})