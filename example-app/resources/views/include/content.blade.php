<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center mb-4">Bill of Quantities (BOQ)</h1>

            <div class="mb-6">
                <label class="form-label" for="pasteArea">Paste Excel Data Here</label>
                <textarea id="pasteArea" class="form-control" placeholder="Paste Excel data here"></textarea>
                <button class="btn btn-primary mt-3" onclick="processPaste()">Process Paste</button>
            </div>

            <!-- BOQ Items Table -->
            <div class="table-responsive text-nowrap">
                <table class="table table-hover" id="boqTable">
                    <thead>
                        <tr>
                            <th scope="col">
                                <input type="checkbox" id="selectAll" onclick="toggleSelectAll(this)">
                            </th>
                            <th scope="col">Item No.</th>
                            <th scope="col">Description</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Rate</th>
                            <th scope="col">Amount (LKR)</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    </tbody>
                </table>
            </div>

            <!-- Add Row Button -->
            <button class="btn btn-primary my-3" onclick="addRow()"><i class="fas fa-plus-circle me-3"></i> Add Row</button>
            <button class="btn btn-danger my-3" onclick="reset()"><i class="fas fa-redo me-3"></i>Reset</button>

            <!-- Save BOQ Items and Subtotals Button -->
            <button class="btn btn-primary my-3" onclick="saveToDatabase()">Save to Database</button>
        </div>
    </div>
</div>

<script>

    function toggleSelectAll(selectAllCheckbox) {
    // Get all checkboxes in the table body
    let checkboxes = document.querySelectorAll('#boqTable tbody input[type="checkbox"]');
    
    // Set each checkbox's checked status to match the "Select All" checkbox
    checkboxes.forEach(checkbox => {
        checkbox.checked = selectAllCheckbox.checked;
    });
}

    function reset(){
        let table = document.getElementById('boqTable').getElementsByTagName('tbody')[0];
        table.innerHTML = '';
        document.getElementById('pasteArea').value = '';
        document.getElementById('selectAll').checked = false;
    }

    function processPaste() {
        let pasteArea = document.getElementById('pasteArea').value.trim();
        let rows = pasteArea.split("\n");
        let table = document.getElementById('boqTable').getElementsByTagName('tbody')[0];
        let invalidFormat = false;

        rows.forEach(row => {
            let cols = row.split("\t");
            if (cols.length >= 4) {
                let qty = parseFloat(cols[2].replace(/,/g, ''));
                let rate = parseFloat(cols[3].replace(/,/g, ''));
                let amount = qty * rate;

                let newRow = table.insertRow(-1);
                newRow.innerHTML = `
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>${cols[0]}</td>
                        <td>${cols[1]}</td>
                        <td>${qty.toLocaleString()}</td>
                        <td>${rate.toLocaleString()}</td>
                        <td>${amount.toLocaleString()}</td>
                        <td><button class="btn btn-danger btn-sm" onclick="removeRow(this)">Remove</button></td>
                    </tr>
                `;
            }
            else{
                invalidFormat = true;
            }
        });

        if(invalidFormat){
            toastr.warning('Please Inser Proppert Format');
            document.getElementsByClassName('warningSound')[0].play();
        }
        document.getElementById('pasteArea').value = '';
    }

    function addRow() {
        let table = document.getElementById('boqTable').getElementsByTagName('tbody')[0];
        let newRow = table.insertRow(-1);
        newRow.innerHTML = `
            <tr>
                <td><input type="checkbox"></td>
                <td><input type="text" class="form-control" placeholder="Item No." /></td>
                <td><input type="text" class="form-control" placeholder="Description" /></td>
                <td><input type="number" class="form-control" placeholder="Qty" oninput="updateAmount(this)" /></td>
                <td><input type="number" class="form-control" placeholder="Rate" oninput="updateAmount(this)" /></td>
                <td class="amount-cell">0</td>
                <td><button class="btn btn-danger btn-sm" onclick="removeRow(this)">Remove</button></td>
            </tr>
        `;
    }

    function updateAmount(element) {
        let row = element.closest('tr');
        let qty = parseFloat(row.cells[3].firstElementChild.value) || 0;
        let rate = parseFloat(row.cells[4].firstElementChild.value) || 0;
        let amount = qty * rate;
        row.cells[5].textContent = amount.toLocaleString();
    }

    function saveToDatabase() {
        let table = document.getElementById('boqTable').getElementsByTagName('tbody')[0];
        let items = [];

        Array.from(table.rows).forEach(row => {
            let checkbox = row.cells[0].firstChild;
            if (checkbox && checkbox.checked) {
                items.push({
                    itemNo: row.cells[1].textContent.trim(),
                    description: row.cells[2].textContent.trim(),
                    qty: parseFloat(row.cells[3].textContent.replace(/,/g, '')),
                    rate: parseFloat(row.cells[4].textContent.replace(/,/g, '')),
                    amount: parseFloat(row.cells[5].textContent.replace(/,/g, ''))
                });
            }
        });

        console.log('Items to be sent:', items); // Debugging: Check items being sent

        fetch('/save-boq', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ items: items })
        })
        .then(response => {
            console.log('Response:', response); // Debugging: Inspect response
            return response.json();
        })
        .then(data => {
            console.log('Data:', data); // Debugging: Inspect data
            if (data.status === 'success') {
                document.getElementsByClassName('successSound')[0].play();
                toastr.success('BOQ items saved successfully.');

                table.innerHTML = '';
                document.getElementById('pasteArea').value = '';
                document.getElementById('selectAll').checked = false;
            } else {
                toastr.warning('Failed to save BOQ items.');
                document.getElementsByClassName('warningSound')[0].play();
            }
        })
        .catch(error => {
            console.error('Error:', error); // Debugging: Inspect error
            toastr.error('An error occurred while saving BOQ items.');
            document.getElementsByClassName('errorSound')[0].play();
        });
    }

    function removeRow(button) {
        let row = button.closest('tr');
        row.parentNode.removeChild(row);
    }
</script>
