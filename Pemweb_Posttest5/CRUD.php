<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watches CRUD</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }

        header {
            text-align: center;
            margin-bottom: 20px;
        }

        .crud {
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        #watchForm {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }

        #watchForm input {
            margin: 5px 0;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        #watchList {
            margin-top: 20px;
        }

        #watchList ul {
            list-style-type: none;
            padding: 0;
        }

        #watchList li {
            margin: 5px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #watchList button {
            margin-left: 10px;
            padding: 5px 10px;
            border: none;
            background-color: #007bff;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }

        #watchList button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <header>
        <h1>Watches CRUD Application</h1>
    </header>
    
    <main>
        <section class="crud section container" id="crud">
            <h2 class="section__title">Manage Watches</h2>
            
            <form id="watchForm">
                <input type="text" id="watchName" placeholder="Watch Name" required>
                <input type="text" id="watchPrice" placeholder="Watch Price" required>
                <button type="submit">Add Watch</button>
            </form>

            <div id="watchList">
                <h3>Watch List</h3>
                <ul id="watches"></ul>
            </div>
        </section>
    </main>

    <script>
        // Watch list array
        let watches = [];

        // Function to render watches
        function renderWatches() {
            const watchList = document.getElementById('watches');
            watchList.innerHTML = '';
            watches.forEach((watch, index) => {
                const li = document.createElement('li');
                li.innerHTML = `
                    ${watch.name} - Rp ${watch.price} 
                    <button onclick="editWatch(${index})">Edit</button>
                    <button onclick="deleteWatch(${index})">Delete</button>
                `;
                watchList.appendChild(li);
            });
        }

        // Add watch
        document.getElementById('watchForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const name = document.getElementById('watchName').value;
            const price = document.getElementById('watchPrice').value;

            watches.push({ name, price });
            renderWatches();

            // Clear the input fields
            this.reset();
        });

        // Edit watch
        function editWatch(index) {
            const watch = watches[index];
            document.getElementById('watchName').value = watch.name;
            document.getElementById('watchPrice').value = watch.price;
            deleteWatch(index); // Remove from list after editing
        }

        // Delete watch
        function deleteWatch(index) {
            watches.splice(index, 1);
            renderWatches();
        }
    </script>
</body>
</html>