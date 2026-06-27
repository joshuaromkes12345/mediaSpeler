
const form = document.getElementById("uploadForm");
const laden = document.getElementById("status");

form.addEventListener("submit", async function(event) {

    event.preventDefault();

    const bestand = document.getElementById("bestand").files[0];

    if (!bestand) {
        alert("Kies eerst een bestand.");
        return;
    }
    laden.innerHTML = "Laden...";

    const soort = document.getElementById("soort").value;

    const chunkgrootte = 10 * 1024 * 1024;
    const aantalChunks = Math.ceil(bestand.size / chunkgrootte);
    for (let i = 0; i < aantalChunks; i++) {

        const start = i * chunkgrootte;
        const eind = Math.min(start + chunkgrootte, bestand.size);

        const chunk = bestand.slice(start, eind);

        const formData = new FormData();

        formData.append("chunk", chunk);
        formData.append("index", i);
        formData.append("total", aantalChunks);
        formData.append("filename", bestand.name);
        formData.append("soort", soort);

        await fetch("./upload.php", {
            method: "POST",
            body: formData
        });

        console.log(`Chunk ${i + 1} van ${aantalChunks} verstuurd`);
    }
    
    alert("Upload voltooid!");
    window.location.href = "index.php";
});