<!-- src/View/User/register_form.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #082B43;
            color: #FFFFFF;
            font-family: 'Arial', sans-serif;
        }

        h2 {
            color: #FDC040;
        }

        form {
            @apply max-w-md mx-auto p-8 bg-white rounded-lg shadow-md;
        }

        label {
            @apply block mb-2 text-blue-900;
        }

        input {
            @apply w-full px-4 py-2 mb-4 border rounded-md;
        }

        button {
            @apply bg-yellow-500 text-blue-900 px-6 py-3 rounded-md cursor-pointer;
        }

        button:hover {
            @apply bg-yellow-400;
        }
    </style>
</head>
<body>
    <h2 class="text-2xl font-bold mb-4">Nous envoyer un message</h2>

    <form action="/contact/send" method="post" class="max-w-md mx-auto p-8 bg-white rounded-lg shadow-md">

        <label for="objet" class="block mb-2 text-blue-900">Objet :</label>
        <input type="text" id="objet" name="objet" required class="text-blue-900 w-full px-4 py-2 mb-4 border rounded-md">

        <label for="message" class="block mb-2 text-blue-900">Message :</label>
        <input type="text" id="message" name="message" required class="text-blue-900 w-full px-4 py-2 mb-4 border rounded-md">

        <button type="submit" class="bg-yellow-500 text-blue-900 px-6 py-3 rounded-md cursor-pointer hover:bg-yellow-400">Envoyer</button>
    </form>
</body>
</html>
