
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link rel="icon" href="{{ asset('assets/image/logo.svg') }}" type="image/x-icon"/>
  <title>Sell Items</title>
</head>
<body class="w-full">
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
  <div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-md">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Left Side - Image Upload -->
                <div class="space-y-4">
                    <div class="font-semibold text-lg">
                        <span>Upload Items</span>
                        <p class="text-sm text-gray-600">Upload at least 5 images of item</p>
                    </div>
                    <div class="border border-gray-300 p-4 rounded-lg">
                    <!-- Preview Images Container -->
                    <div id="image-preview-container" class="grid grid-cols-3 gap-4"></div>
                </div>
                <input type="file" name="images[]" id="image-upload-input" multiple class="w-full py-2" accept="image/*">
                    <button id="upload-button" class="w-full py-2 bg-[#005C48] text-white font-semibold rounded-lg">Upload Image</button>
                    @error('images[]')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Right Side - Item Details Form -->
                <div class="space-y-4">
                    <input type="text" name="name" placeholder="Item Name" class="w-full p-2 border border-gray-300 rounded-lg">
                    <input type="number" name="price" placeholder="Price" class="w-full p-2 border border-gray-300 rounded-lg">
                    <select name="category" class="w-full p-2 border border-gray-300 rounded-lg">
                        <option value="">--Select Category--</option>
                        <option value="Swap">Swap</option>
                        <option value="Bid">Bid</option>
                        <option value="Trade">Trade</option>
                        <option value="Sell">Sell</option>
                    </select>
                    <textarea name="details" placeholder="Details" class="w-full p-2 border border-gray-300 rounded-lg"></textarea>
                    <input name="phone" type="tel" placeholder="Tele" class="w-full p-2 border border-gray-300 rounded-lg">
                    <div class="grid grid-cols-2 gap-4">
                        <select name="country" class="w-full p-2 border border-gray-300 rounded-lg">
                            <option value="">Country</option>
                            <option value="Nigeria">Nigeria</option>
                        </select>
                        <select name="state" class="w-full p-2 border border-gray-300 rounded-lg">
                            <option value="">State</option>
                            <option value="Imo">Imo</option>
                            <option value="Lagos">Lagos</option>
                        </select>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <select name="city" class="w-full p-2 border border-gray-300 rounded-lg">
                            <option value="">City</option>
                            <option value="Owerri">Owerri</option>
                        </select>
                        <input type="text" placeholder="Address" class="w-full p-2 border border-gray-300 rounded-lg">
                    </div>
                    <div class="flex justify-between">
                        <button class="py-2 px-6 bg-gray-300 text-gray-700 font-semibold rounded-lg">
                        <a href="{{url('/dashboard')}}">
                            Cancel
                        </a>
                        </button>
                        <button  type="submit" class="py-2 px-6 bg-[#005C48] text-white font-semibold rounded-lg">Submit</button>
                    </div>
                </div>
    
    </div>
</div>
</form>
</body>

<script>
  document.getElementById('image-upload-input').addEventListener('change', function(event) {
    const imageContainer = document.getElementById('image-preview-container');
    imageContainer.innerHTML = ''; // Clear previous images

    const files = event.target.files;

    if (files) {
        Array.from(files).forEach(file => {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                const imgElement = document.createElement('img');
                imgElement.src = e.target.result;
                imgElement.classList.add('w-full', 'h-32', 'object-cover', 'rounded-lg');
                imageContainer.appendChild(imgElement);
            };
            
            reader.readAsDataURL(file);
        });
    }
});

</script>
</html>
  