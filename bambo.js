alert("gratulacje użytkowniku");

const aktywator = document.querySelector("#a");
const destruktator = document.querySelector("#b");
const koniecSwiata = document.querySelector("#dron");
let maciek = 0;

aktywator.addEventListener('click', () => {
    //tutaj sie zaczyna prawdziwy męski kod a nie jakies kłeryselektory i strzałki
    while (maciek < 15000) {
        koniecSwiata.appendChild(document.createElement("p"));
        koniecSwiata.appendChild(document.createTextNode("DUDU REALISTA"));
        maciek++;
    }
});
destruktator.addEventListener('click', () => {
    document.body.innerHTML = "no dobra"
});