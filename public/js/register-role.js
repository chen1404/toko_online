function enggak() {
    var openStore = document.getElementById('namaToko');
    var disable = document.createAttribute('disabled');

    openStore.setAttributeNode(disable);

    document.getElementById("role").value = "pembeli";
}

function boleh() {
    var openStore = document.getElementById('namaToko');
    var able = document.createAttribute('required');

    openStore.removeAttribute('disabled');
    openStore.setAttributeNode(able);

    document.getElementById("role").value = "penjual";
}