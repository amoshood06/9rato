<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bid Page</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-6">

    <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg flex p-4">
        <!-- Left Section -->
        <div class="w-1/2 pr-4">
            <h2 class="text-lg font-semibold mb-2">Bid Items</h2>
            <img src="path_to_image.jpg" alt="Bid Item" class="w-full h-auto rounded-lg mb-4">
            <div class="flex items-center space-x-2 mb-4">
                <!-- Small Images -->
                <img src="path_to_small_image1.jpg" alt="Small Item 1" class="w-16 h-16 rounded-lg">
                <img src="path_to_small_image2.jpg" alt="Small Item 2" class="w-16 h-16 rounded-lg">
                <img src="path_to_small_image3.jpg" alt="Small Item 3" class="w-16 h-16 rounded-lg">
            </div>
            <p class="text-xl font-bold mb-2">Price: $200</p>
            <div class="flex items-center mb-4">
                <!-- Star Ratings -->
                <div class="flex text-yellow-500">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <!-- Star SVG Path -->
                    </svg>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <!-- Star SVG Path -->
                    </svg>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <!-- Star SVG Path -->
                    </svg>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <!-- Star SVG Path -->
                    </svg>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <!-- Star SVG Path -->
                    </svg>
                </div>
            </div>
            <button class="bg-[#00372B] text-white px-4 py-2 rounded-lg">Details</button>
        </div>

        <!-- Right Section -->
        <div class="w-1/2 pl-4">
            <div class="bg-gray-200 p-4 rounded-lg h-64 overflow-y-auto mb-4">
                <!-- Bid List -->
                <div class="flex justify-between items-center mb-3">
                    <p class="text-xl font-bold">$10000</p>
                    <p class="text-sm text-gray-500">John Davi</p>
                    <p class="text-sm text-green-500">13min</p>
                </div>
                <div class="flex justify-between items-center mb-3">
                    <p class="text-xl font-bold">$9000</p>
                    <p class="text-sm text-gray-500">John Davi</p>
                    <p class="text-sm text-red-500">13min</p>
                </div>
                <!-- Repeat above for each bid -->
            </div>

            <!-- Enter Price Section -->
            <div class="flex items-center space-x-2">
                <input type="text" placeholder="Enter Price" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none">
                <button class="bg-gray-300 text-black px-4 py-2 rounded-lg">Cancel</button>
                <button class="bg-[#00372B] text-white px-4 py-2 rounded-lg">Submit</button>
            </div>
        </div>
    </div>

</body>
</html>
