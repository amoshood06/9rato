<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Item Upload Form</title>
  @vite('resources/css/app.css')

</head>
<body class="bg-gray-100 p-4 font-sans">
  <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-md overflow-hidden">
    <div class="flex flex-col md:flex-row">
      <!-- Left Section - Upload Images -->
      <div class="w-full md:w-1/2 p-6 border-b md:border-b-0 md:border-r border-dashed border-gray-300">
        <h2 class="text-lg font-bold mb-2">upload items</h2>
        <ul class="list-disc ml-5 mb-4">
          <li>upload at least 5 images of item</li>
        </ul>

        <!-- Main Image Preview -->
        <div class="bg-gray-200 rounded-lg mb-4 overflow-hidden">
          <img id="mainPreview" src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Frame%2011-HyiiqExRVoIxEfZzQOyUd0mNKg2Fl0.png" alt="Main preview" class="w-full h-48 object-cover">
        </div>

        <!-- Thumbnail Previews -->
        <div class="grid grid-cols-3 gap-2 mb-4">
          <div class="bg-gray-200 rounded-lg overflow-hidden h-20">
            <img src="/placeholder.svg?height=80&width=80" alt="Thumbnail 1" class="w-full h-full object-cover">
          </div>
          <div class="bg-gray-200 rounded-lg overflow-hidden h-20">
            <img src="/placeholder.svg?height=80&width=80" alt="Thumbnail 2" class="w-full h-full object-cover">
          </div>
          <div class="bg-gray-200 rounded-lg overflow-hidden h-20">
            <img src="/placeholder.svg?height=80&width=80" alt="Thumbnail 3" class="w-full h-full object-cover">
          </div>
        </div>

        <!-- Upload Button -->
        <button class="w-full bg-[#006655] text-white py-3 rounded-md hover:bg-[#006655]/90 transition">
          upload image
        </button>
      </div>

      <!-- Right Section - Form Fields -->
      <div class="w-full md:w-1/2 p-6">
        <!-- Item Name -->
        <div class="mb-4">
          <label class="block font-medium mb-1">Items Name</label>
          <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#006655]/50">
        </div>

        <!-- Price and Category (2 columns) -->
        <div class="grid grid-cols-2 gap-4 mb-4">
          <div>
            <label class="block font-medium mb-1">Price:</label>
            <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#006655]/50">
          </div>
          <div>
            <label class="block font-medium mb-1">Category:</label>
            <select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#006655]/50">
              <option value="">--select--</option>
              <option value="electronics">Electronics</option>
              <option value="clothing">Clothing</option>
              <option value="furniture">Furniture</option>
            </select>
          </div>
        </div>

        <!-- Details -->
        <div class="mb-4">
          <label class="block font-medium mb-1">Details:</label>
          <textarea class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#006655]/50 h-24"></textarea>
        </div>

        <!-- Tele and Condition (2 columns) -->
        <div class="grid grid-cols-2 gap-4 mb-4">
          <div>
            <label class="block font-medium mb-1">Tele:</label>
            <input type="tel" placeholder="+1666000888" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#006655]/50">
          </div>
          <div>
            <label class="block font-medium mb-1">Condition</label>
            <select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#006655]/50">
              <option value="">--select--</option>
              <option value="new">New</option>
              <option value="used">Used</option>
              <option value="refurbished">Refurbished</option>
            </select>
          </div>
        </div>

        <!-- Type and City (2 columns) -->
        <div class="grid grid-cols-2 gap-4 mb-4">
          <div>
            <label class="block font-medium mb-1">Type</label>
            <select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#006655]/50">
              <option value="">--select--</option>
              <option value="personal">Swap</option>
              <option value="business">Bid</option>
              <option value="business">Trade</option>
              <option value="business">Sell</option>
              <option value="business">Rent</option>
            </select>
          </div>
          <div>
            <label class="block font-medium mb-1">City:</label>
            <select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#006655]/50">
              <option value="">--select--</option>
              <option value="newyork">New York</option>
              <option value="losangeles">Los Angeles</option>
              <option value="chicago">Chicago</option>
            </select>
          </div>
        </div>

        <!-- Address -->
        <div class="mb-6">
          <label class="block font-medium mb-1">Address</label>
          <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#006655]/50">
        </div>

        <!-- Address -->
        <div class="mb-6">
            <label class="block font-medium mb-1">Link</label>
            <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#006655]/50">
          </div>

        <!-- Action Buttons -->
        <div class="flex justify-between">
          <button class="px-6 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400 transition">
            Cancel
          </button>
          <button class="px-6 py-2 bg-[#006655] text-white rounded-md hover:bg-[#006655]/90 transition">
            Submit
          </button>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Simple image upload preview functionality
    document.addEventListener('DOMContentLoaded', function() {
      // This would be expanded in a real implementation to handle actual file uploads
      const uploadBtn = document.querySelector('button');
      uploadBtn.addEventListener('click', function() {
        alert('Image upload functionality would be implemented here');
      });
    });
  </script>
</body>
</html>
