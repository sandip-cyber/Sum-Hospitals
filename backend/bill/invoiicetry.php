<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        .container {
            width: 80%;
            max-width: 800px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #2C3E50;
            font-size: 28px;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
            width: 90%;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #2C3E50;
        }

        input[type="text"], select {
            width: 100%;
            padding: 12px;
            margin: 5px 0 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 16px;
        }

        .table-container {
            margin-top: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #3498db;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .total {
            font-size: 18px;
            font-weight: bold;
            margin-top: 15px;
            text-align: right;
            color: #2C3E50;
        }

        .btn-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }

        button {
            padding: 12px 25px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 6px;
            transition: background-color 0.3s;
        }

        .btn-add {
            background-color: #28a745;
            color: white;
        }

        .btn-add:hover {
            background-color: #218838;
        }

        .btn-clear {
            background-color: #dc3545;
            color: white;
        }

        .btn-clear:hover {
            background-color: #c82333;
        }

        .btn-print {
            background-color: #007bff;
            color: white;
        }

        .btn-print:hover {
            background-color: #0069d9;
        }

    </style>
</head>
<body>

<div class="container">
    <h1>Hospital Management System</h1>

    <div class="form-group">
        <label for="userName">User Name:</label>
        <input type="text" id="userName" name="userName" placeholder="Enter User Name" required>
    </div>
    
    <div class="form-group">
        <label for="userId">User ID:</label>
        <input type="text" id="userId" name="userId" placeholder="Enter User ID" required>
    </div>

    <div class="form-group">
        <label for="testName">Test Name:</label>
        <input type="text" id="testName" name="testName">
            <!-- <option value="xray">X-Ray</option>
            <option value="mri">MRI</option>
            <option value="ultrasound">Ultrasound</option>
            <option value="bloodtest">Blood Test</option> -->
        <!-- </select> -->
    </div>

    <div class="form-group">
        <label for="testCost">Test Cost:</label>
        <input type="text" id="testCost" name="testCost" placeholder="Enter Test Cost" required>
    </div>

    <div class="table-container">
        <table id="testTable">
            <thead>
                <tr>
                    <th>Test Name</th>
                    <th>Cost</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>

        <div class="total">
            Total Amount: <span id="totalAmount">0</span>
        </div>
    </div>

    <div class="btn-container">
        <button class="btn-add" onclick="addTest()">Add</button>
        <button class="btn-clear" onclick="clearTable()">Clear</button>
        <button class="btn-print" onclick="printTable()">Print</button>
    </div>
</div>

<script>
    // ?
    let totalAmount = 0; // Initialize total amount

function addTest() {
    const testName = document.getElementById('testName').value;
    const testCost = document.getElementById('testCost').value;

    // Validate input
    if (!testName || !testCost || isNaN(testCost) || testCost <= 0) {
        alert("Please enter a valid test and cost.");
        return;
    }

    // Convert test cost to a number
    const cost = parseFloat(testCost);

    // Add row to the table
    const tableBody = document.querySelector('#testTable tbody');
    const row = document.createElement('tr');
    row.innerHTML = `<td>${testName}</td><td>₹${cost.toFixed(2)}</td>`;
    tableBody.appendChild(row);

    // Update total amount
    totalAmount += cost;
    document.getElementById('totalAmount').textContent = `₹${totalAmount.toFixed(2)}`;

    // Clear input field
    document.getElementById('testCost').value = '';
}

    // ?
    function printTable() {
        const userName = document.getElementById("userName").value;
        const userId = document.getElementById("userId").value;
        if (!userId || !userName) {
            alert("Please enter User Name and User ID before printing.");
            return;
        }

        const tableRows = document.querySelectorAll('#testTable tbody tr');
        let testDetails = [];
        tableRows.forEach(row => {
            let testName = row.cells[0].textContent;
            let testCost = row.cells[1].textContent;
            testDetails.push({ name: testName, cost: testCost });
        });

        let totalAmount = document.getElementById('totalAmount').textContent;
        let queryString = `data=${encodeURIComponent(JSON.stringify(testDetails))}&total=${encodeURIComponent(totalAmount)}&userId=${encodeURIComponent(userId)}&userName=${encodeURIComponent(userName)}`;
        let newWindow = window.open(`billtey.html?${queryString}`, '');

        newWindow.onload = function () {
            newWindow.print();
        };
    }
</script>

</body>
</html>
