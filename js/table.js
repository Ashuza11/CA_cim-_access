const ShowTableData = document.querySelectorAll('[data-table-target]');

ShowTableData.forEach(button => {
    button.addEventListener('click', () => {
        const table = document.querySelector(button.dataset.tableTarget);
        showTable(table);
    })
})


// Show table
function showTable(table) {
    if (table == null) return
    table.classList.add('showVisitor');
    table.classList.add('showStudent');
}
// Hide table after some seconds
setTimeout(hideTable(), 3000);

function hideTable() {
    document.querygetElementById('show').classList.remove('showVisitor');
}
