<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex justify-center items-center min-h-screen bg-gray-100">

<div class="relative flex flex-col w-full max-w-lg overflow-hidden bg-white shadow-md rounded-xl">
    <table class="w-full text-left table-auto min-w-max">
        <thead>
            <tr>
                <th class="p-4 border-b border-gray-200 bg-gray-50">
                    <p class="font-sans text-sm font-normal text-gray-900 opacity-70">Name</p>
                </th>
                <th class="p-4 border-b border-gray-200 bg-gray-50">
                    <p class="font-sans text-sm font-normal text-gray-900 opacity-70">Gender</p>
                </th>
                <th class="p-4 border-b border-gray-200 bg-gray-50">
                    <p class="font-sans text-sm font-normal text-gray-900 opacity-70">Email</p>
                </th>
                <th class="p-4 border-b border-gray-200 bg-gray-50">
                    <p class="font-sans text-sm font-normal text-gray-900 opacity-70">Class</p>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "GET") {
                $name = trim($_GET['name']);
                $gender = trim($_GET['gender']);
                $email = trim($_GET['email']);
                $class = trim($_GET['class']);

                if (!empty($name) && !empty($email) && !empty($class) && !empty($gender)) {
                    echo "<tr>";
                    echo "<td class='p-4 border-b border-gray-200'>" . htmlspecialchars($name) . "</td>";
                    echo "<td class='p-4 border-b border-gray-200'>" . htmlspecialchars($gender) . "</td>";
                    echo "<td class='p-4 border-b border-gray-200'>" . htmlspecialchars($email) . "</td>";
                    echo "<td class='p-4 border-b border-gray-200'>". htmlspecialchars($class) ."</td>";
                    echo "</tr>";
                } else {
                    echo "<tr><td colspan='3' class='p-4 text-red-600 text-center'>All fields are required!</td></tr>";
                }
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>