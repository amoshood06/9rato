<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Item Swap Marketplace</title>
  <!-- Tailwind -->
  @vite('resources/css/app.css')
  <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest"></script>
  <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">
  <div class="bg-white rounded-lg shadow-lg overflow-hidden max-w-4xl w-full">
    <div class="flex flex-col md:flex-row">
      <!-- Left Side - Swap Items -->
      <div class="w-full md:w-1/2 p-6 border-b md:border-b-0 md:border-r border-dashed border-gray-300">
        <h2 class="text-xl font-bold mb-4">Trade Items</h2>
        <div class="mb-4">
          <div class="bg-gray-900 rounded-lg overflow-hidden">
            <img
              src="https://placehold.co/300x400"
              alt="Phone in hand"
              class="w-full object-cover"
            >
          </div>
        </div>
        <div class="flex space-x-2 mb-6">
          <div class="w-1/3 h-16 bg-gray-200 rounded-md overflow-hidden">
            <img
              src="https://placehold.co/100x64"
              alt="Thumbnail 1"
              class="w-full h-full object-cover"
            >
          </div>
          <div class="w-1/3 h-16 bg-gray-200 rounded-md overflow-hidden">
            <img
              src="https://placehold.co/100x64"
              alt="Thumbnail 2"
              class="w-full h-full object-cover"
            >
          </div>
          <div class="w-1/3 h-16 bg-gray-200 rounded-md overflow-hidden">
            <img
              src="https://placehold.co/100x64"
              alt="Thumbnail 3"
              class="w-full h-full object-cover"
            >
          </div>
        </div>



        <div class="flex justify-between items-center">
          <div>
            <p class="text-gray-600 mb-1">Price:</p>
            <p class="text-2xl font-bold">$200</p>
          </div>
          <div>
            <p class="text-gray-600 mb-1">Star:</p>
            <div class="flex text-yellow-400">
              <i data-lucide="star" class="w-5 h-5 fill-current"></i>
              <i data-lucide="star" class="w-5 h-5 fill-current"></i>
              <i data-lucide="star" class="w-5 h-5 fill-current"></i>
              <i data-lucide="star" class="w-5 h-5 fill-current"></i>
              <i data-lucide="star" class="w-5 h-5 fill-current"></i>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Side - My Items -->
      <div class="w-full md:w-1/2 p-6">
        <h2 class="text-xl font-bold mb-4">My Items</h2>
        <div class="bg-white border border-emerald-500 rounded-lg p-4">
          <!-- Item 1 -->
          <div class="flex items-center justify-between py-2 border-b border-gray-100">
            <div class="flex items-center">
              <div class="w-8 h-8 bg-gray-200 rounded-full overflow-hidden mr-3">
                <img
                  src="https://placehold.co/32x32"
                  alt="User avatar"
                  class="w-full h-full object-cover"
                >
              </div>
              <div>
                <p class="font-semibold">Samsung s8</p>
                <p class="text-xs text-gray-500">John deal</p>
              </div>
            </div>
            <div class="text-right">
              <p class="font-semibold">$300</p>
              <p class="text-xs text-gray-500">12min</p>
            </div>
          </div>

          <!-- Item 2 -->
          <div class="flex items-center justify-between py-2 border-b border-gray-100">
            <div class="flex items-center">
              <div class="w-8 h-8 bg-gray-200 rounded-full overflow-hidden mr-3">
                <img
                  src="https://placehold.co/32x32"
                  alt="User avatar"
                  class="w-full h-full object-cover"
                >
              </div>
              <div>
                <p class="font-semibold">Samsung s8</p>
                <p class="text-xs text-gray-500">John deal</p>
              </div>
            </div>
            <div class="text-right">
              <p class="font-semibold">$300</p>
              <p class="text-xs text-gray-500">10min</p>
            </div>
          </div>

          <!-- Item 3 -->
          <div class="flex items-center justify-between py-2 border-b border-gray-100">
            <div class="flex items-center">
              <div class="w-8 h-8 bg-gray-200 rounded-full overflow-hidden mr-3">
                <img
                  src="https://placehold.co/32x32"
                  alt="User avatar"
                  class="w-full h-full object-cover"
                >
              </div>
              <div>
                <p class="font-semibold">Samsung s8</p>
                <p class="text-xs text-gray-500">John deal</p>
              </div>
            </div>
            <div class="text-right">
              <p class="font-semibold">$300</p>
              <p class="text-xs text-gray-500">8min</p>
            </div>
          </div>

          <!-- Item 4 -->
          <div class="flex items-center justify-between py-2 border-b border-gray-100">
            <div class="flex items-center">
              <div class="w-8 h-8 bg-gray-200 rounded-full overflow-hidden mr-3">
                <img
                  src="https://placehold.co/32x32"
                  alt="User avatar"
                  class="w-full h-full object-cover"
                >
              </div>
              <div>
                <p class="font-semibold">Samsung s8</p>
                <p class="text-xs text-gray-500">John deal</p>
              </div>
            </div>
            <div class="text-right">
              <p class="font-semibold">$300</p>
              <p class="text-xs text-gray-500">6min</p>
            </div>
          </div>

          <!-- Item 5 -->
          <div class="flex items-center justify-between py-2 border-b border-gray-100">
            <div class="flex items-center">
              <div class="w-8 h-8 bg-gray-200 rounded-full overflow-hidden mr-3">
                <img
                  src="https://placehold.co/32x32"
                  alt="User avatar"
                  class="w-full h-full object-cover"
                >
              </div>
              <div>
                <p class="font-semibold">Samsung s8</p>
                <p class="text-xs text-gray-500">John deal</p>
              </div>
            </div>
            <div class="text-right">
              <p class="font-semibold">$300</p>
              <p class="text-xs text-gray-500">4min</p>
            </div>
          </div>

          <!-- Item 6 -->
          <div class="flex items-center justify-between py-2">
            <div class="flex items-center">
              <div class="w-8 h-8 bg-gray-200 rounded-full overflow-hidden mr-3">
                <img
                  src="https://placehold.co/32x32"
                  alt="User avatar"
                  class="w-full h-full object-cover"
                >
              </div>
              <div>
                <p class="font-semibold">Samsung s8</p>
                <p class="text-xs text-gray-500">John deal</p>
              </div>
            </div>
            <div class="text-right">
              <p class="font-semibold">$300</p>
              <p class="text-xs text-gray-500">2min</p>
            </div>
          </div>

          <!-- Buttons -->
          <div class="flex justify-between mt-4">
            <button class="px-6 py-2 bg-gray-300 rounded-md font-medium">
              Cancel
            </button>
            <button class="px-6 py-2 bg-emerald-600 text-white rounded-md font-medium">
              Submit
            </button>
          </div>
                  <!-- Amount Input Field -->
        <div class="mb-4">
            <label for="amount" class="block text-gray-600 mb-1">Amount:</label>
            <div class="relative">
              <span class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500">$</span>
              <input
                type="number"
                id="amount"
                class="w-full pl-8 pr-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500"
                placeholder="Enter amount"
                value="200"
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Initialize Lucide Icons -->
  <script>
    lucide.createIcons();
  </script>
</body>
</html>
