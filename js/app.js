$(document).foundation()

function getData(){
    fetch('./includes/config.php')
    .then(res => res.json())
    .then(data => {
        console.log(data);
        loadDoc(data);
    })
    .catch(function(error){
        console.log(error);
    });
}