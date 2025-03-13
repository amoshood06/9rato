<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swap History</title>
    @vite('resources/css/app.css')
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        '[#006655]': '#006655',
                        '[#f3f4f6]': '#f3f4f6',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-100 p-4 font-sans">
    <div class="max-w-4xl mx-auto">
        <!-- Swap History Card -->
        <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
            <!-- Header -->
            <div class="p-4 md:p-6">
                <h2 class="text-xl font-semibold text-gray-800">Swap History</h2>
            </div>

            <!-- Table Header - Hidden on mobile, visible on tablet/desktop -->
            <div class="hidden md:block px-4 md:px-6">
                <div class="grid grid-cols-5 gap-4 py-3 text-sm font-medium text-gray-500 border-b">
                    <div>Requested item</div>
                    <div>Offered item</div>
                    <div>Amount offer</div>
                    <div>Actions</div>
                    <div>Status</div>
                </div>
            </div>

            <!-- Table Body -->
            <div class="px-4 md:px-6">
                <!-- Swap Item Row - Responsive layout -->
                <div class="md:grid md:grid-cols-5 md:gap-4 py-4 border-b">
                    <!-- Mobile View - Card Layout -->
                    <div class="block md:hidden space-y-3 pb-3">
                        <!-- Item Details -->
                        <div class="flex justify-between items-center">
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-8 rounded-full bg-gray-200 overflow-hidden">
                                    <img src="/placeholder.svg?height=32&width=32" alt="Samsung s8" class="w-full h-full object-cover"/>
                                </div>
                                <span class="text-sm font-medium">Samsung s8</span>
                            </div>
                            <span class="px-3 py-1 text-xs font-medium text-green-700 bg-green-100 rounded-full">
                                Received
                            </span>
                        </div>
                        
                        <!-- Offered Item -->
                        <div class="flex items-center gap-2">
                            <span class="text-xs text-gray-500">Offered:</span>
                            <div class="flex items-center gap-2">
                                <div class="w-6 h-6 rounded-full bg-gray-200 overflow-hidden">
                                    <img src="/placeholder.svg?height=24&width=24" alt="iPhone X" class="w-full h-full object-cover"/>
                                </div>
                                <span class="text-sm font-medium">iPhone X</span>
                            </div>
                        </div>
                        
                        <!-- Amount -->
                        <div class="flex items-center gap-2">
                            <span class="text-xs text-gray-500">Amount:</span>
                            <span class="text-sm font-medium">N1000</span>
                        </div>
                        
                        <!-- Actions -->
                        <div class="flex gap-2 pt-1">
                            <button class="px-3 py-1 text-xs font-medium text-white bg-green-500 rounded-full hover:bg-green-600 transition-colors">
                                Accept
                            </button>
                            <button class="px-3 py-1 text-xs font-medium text-white bg-red-500 rounded-full hover:bg-red-600 transition-colors">
                                Cancel
                            </button>
                        </div>
                    </div>

                    <!-- Desktop View - Table Layout -->
                    <!-- Requested Item -->
                    <div class="hidden md:flex items-center gap-2">
                        <div class="w-8 h-8 rounded-full bg-gray-200 overflow-hidden">
                            <img src="/placeholder.svg?height=32&width=32" alt="Samsung s8" class="w-full h-full object-cover"/>
                        </div>
                        <span class="text-sm font-medium">Samsung s8</span>
                    </div>

                    <!-- Offered Item -->
                    <div class="hidden md:flex items-center gap-2">
                        <div class="w-8 h-8 rounded-full bg-gray-200 overflow-hidden">
                            <img src="/placeholder.svg?height=32&width=32" alt="iPhone X" class="w-full h-full object-cover"/>
                        </div>
                        <span class="text-sm font-medium">iPhone X</span>
                    </div>

                    <!-- Amount -->
                    <div class="hidden md:block text-sm font-medium">
                        N1000
                    </div>

                    <!-- Actions -->
                    <div class="hidden md:flex gap-2">
                        <button class="px-3 py-1 text-xs font-medium text-white bg-green-500 rounded-full hover:bg-green-600 transition-colors">
                            Accept
                        </button>
                        <button class="px-3 py-1 text-xs font-medium text-white bg-red-500 rounded-full hover:bg-red-600 transition-colors">
                            Cancel
                        </button>
                    </div>

                    <!-- Status -->
                    <div class="hidden md:block">
                        <span class="px-3 py-1 text-xs font-medium text-green-700 bg-green-100 rounded-full">
                            Received
                        </span>
                    </div>
                </div>

                <!-- Additional Swap Item Example -->
                <div class="md:grid md:grid-cols-5 md:gap-4 py-4 border-b">
                    <!-- Mobile View - Card Layout -->
                    <div class="block md:hidden space-y-3 pb-3">
                        <!-- Item Details -->
                        <div class="flex justify-between items-center">
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-8 rounded-full bg-gray-200 overflow-hidden">
                                    <img src="/placeholder.svg?height=32&width=32" alt="Macbook Pro" class="w-full h-full object-cover"/>
                                </div>
                                <span class="text-sm font-medium">Macbook Pro</span>
                            </div>
                            <span class="px-3 py-1 text-xs font-medium text-yellow-700 bg-yellow-100 rounded-full">
                                Pending
                            </span>
                        </div>
                        
                        <!-- Offered Item -->
                        <div class="flex items-center gap-2">
                            <span class="text-xs text-gray-500">Offered:</span>
                            <div class="flex items-center gap-2">
                                <div class="w-6 h-6 rounded-full bg-gray-200 overflow-hidden">
                                    <img src="/placeholder.svg?height=24&width=24" alt="Dell XPS" class="w-full h-full object-cover"/>
                                </div>
                                <span class="text-sm font-medium">Dell XPS</span>
                            </div>
                        </div>
                        
                        <!-- Amount -->
                        <div class="flex items-center gap-2">
                            <span class="text-xs text-gray-500">Amount:</span>
                            <span class="text-sm font-medium">N5000</span>
                        </div>
                        
                        <!-- Actions -->
                        <div class="flex gap-2 pt-1">
                            <button class="px-3 py-1 text-xs font-medium text-white bg-green-500 rounded-full hover:bg-green-600 transition-colors">
                                Accept
                            </button>
                            <button class="px-3 py-1 text-xs font-medium text-white bg-red-500 rounded-full hover:bg-red-600 transition-colors">
                                Cancel
                            </button>
                        </div>
                    </div>

                    <!-- Desktop View - Table Layout -->
                    <!-- Requested Item -->
                    <div class="hidden md:flex items-center gap-2">
                        <div class="w-8 h-8 rounded-full bg-gray-200 overflow-hidden">
                            <img src="/placeholder.svg?height=32&width=32" alt="Macbook Pro" class="w-full h-full object-cover"/>
                        </div>
                        <span class="text-sm font-medium">Macbook Pro</span>
                    </div>

                    <!-- Offered Item -->
                    <div class="hidden md:flex items-center gap-2">
                        <div class="w-8 h-8 rounded-full bg-gray-200 overflow-hidden">
                            <img src="/placeholder.svg?height=32&width=32" alt="Dell XPS" class="w-full h-full object-cover"/>
                        </div>
                        <span class="text-sm font-medium">Dell XPS</span>
                    </div>

                    <!-- Amount -->
                    <div class="hidden md:block text-sm font-medium">
                        N5000
                    </div>

                    <!-- Actions -->
                    <div class="hidden md:flex gap-2">
                        <button class="px-3 py-1 text-xs font-medium text-white bg-green-500 rounded-full hover:bg-green-600 transition-colors">
                            Accept
                        </button>
                        <button class="px-3 py-1 text-xs font-medium text-white bg-red-500 rounded-full hover:bg-red-600 transition-colors">
                            Cancel
                        </button>
                    </div>

                    <!-- Status -->
                    <div class="hidden md:block">
                        <span class="px-3 py-1 text-xs font-medium text-yellow-700 bg-yellow-100 rounded-full">
                            Pending
                        </span>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="p-4 md:p-6 flex justify-center">
                <button class="px-4 py-2 text-sm font-medium text-gray-600 bg-gray-200 rounded-lg hover:bg-gray-300 transition-colors">
                    Next page
                </button>
            </div>
        </div>
    </div>
</body>
</html>