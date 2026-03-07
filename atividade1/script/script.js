
const input = document.getElementById("gameImage");
const preview = document.getElementById("preview");

input.addEventListener("change", function() {
    const file = this.files[0];
    if (file) {
        preview.src = URL.createObjectURL(file);
    }
});

function cleanPreview(){
    preview.src = '';
}



function handleSubmit(e){

    e.preventDefault();

    const name = document.getElementById("name");
    const desc = document.getElementById("desc");
    const date = document.getElementById("date");
    const rating = document.getElementById("rating");
    const cover = document.getElementById("cover");

    console.log(preview.src);

    document.getElementById("gameMenu").style.display = "block";

    name.innerHTML = document.getElementById("gameName").value;
    desc.innerHTML = document.getElementById("gameDesc").value;
    date.innerHTML = document.getElementById("gameDate").value;
    rating.innerHTML = document.querySelector('select').value == 'Classificações' ? '' : document.querySelector('select').value;
    cover.src = preview.src;
}