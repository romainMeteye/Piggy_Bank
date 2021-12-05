function showLayer() {
    let layer = document.createElement("div");
    layer.classList.add("layer")
    getLayerInfo()
    document.body.appendChild(layer); //palaref
} 

let httpRequest = new XMLHttpRequest();

function getLayerInfo() {
    httpRequest.onreadystatechange = function() {
        if (httpRequest.readyState === XMLHttpRequest.DONE) {
            if (httpRequest.status === 200) {
                let data = JSON.parse(httpRequest.responseText)
                let p = document.getElementsByClassName("layer");
                p[0].innerText = data.lorem + " " + data.security;
                p.innerHTML = `<button onclick="removeLayer()">Compris !</button>`
            } else {
                console.log("Une erreur est survenue");
            }
        }
    }
    httpRequest.open('GET', 'doc/layerInfo.json');
    httpRequest.send();
}
function removeLayer() {
    
}