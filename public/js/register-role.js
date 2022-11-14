function enggak() {
    var openStore = document.getElementById('namaToko');
    var disable = document.createAttribute('hidden');

    openStore.setAttributeNode(disable);

    document.getElementById("role").value = "pembeli";
}

function boleh() {
    var openStore = document.getElementById('namaToko');
    var able = document.createAttribute('required');

    openStore.removeAttribute('hidden');
    openStore.setAttributeNode(able);

    document.getElementById("role").value = "penjual";
}

function onLoad(kelas, kelas2) {
    var group1 = document.getElementById('tokoDiv');
    group1.classList.remove(kelas);
    group1.classList.add(kelas2);
    
    // var group2 = document.getElementById('tokoDiv');
    // group2.classList.remove('show');
    // group2.classList.add('hide');
}