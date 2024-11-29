let addRow = document.getElementById("add-row");
addRow.addEventListener("click", function () {
    let table = document.getElementById("table-peminjaman").getElementsByClassName("table-row")[0];
    // console.log(table)
    let newRow = table.insertRow(table.rows.length);

    let namaBukuCell = newRow.insertCell(0);
    let aksiCell = newRow.insertCell(1);
    let bukuName = document.getElementById("id_buku");
    bukuName = bukuName.options[bukuName.selectedIndex] .text;
    let bukuId = document.getElementById("id_buku").value;
    if(bukuId == ""){
        alert('Nama buku tidak boleh kosong');
    }
    namaBukuCell.innerHTML = bukuName + "<input type='hidden' name='id_buku[]' value='" + bukuId + "'>";
    aksiCell.innerHTML = "<button type='button' onclick='deleteRow(this)' class='btn btn-sm btn-danger'>Hapus</button>";
});

function deleteRow(button){
    let row = button.parentNode.parentNode;
    row.parentNode.removeChild(row);
}