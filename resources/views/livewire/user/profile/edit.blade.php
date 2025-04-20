<div class="p-6">
    <form id="profileForm" wire:submit="update" class="space-y-6">
        <!-- Profile Image Upload -->
        <div class="flex flex-col items-center space-y-4 mb-8">
            <div class="avatar-upload">
                <div class="avatar-edit">
                    @error('image')
                        <span class="text-red-600 text-sm font-medium">{{ $message }}</span>
                    @enderror
                    <input type="file" id="profileImageUpload" wire:model.live="image" accept="image/*" />
                    <label for="profileImageUpload">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="17 8 12 3 7 8"></polyline>
                            <line x1="12" y1="3" x2="12" y2="15"></line>
                        </svg>
                    </label>
                </div>
                <div class="avatar-preview">
                    <div id="imagePreview" class="avatar-default">
                        @if(Auth::user()->image)
                        <div class="w-20 h-20 rounded-full overflow-hidden border-4 border-white shadow-lg">
                            <img src="{{ asset('storage/'.Auth::user()->image) }}" alt="Profile" class="w-full h-full object-cover" />
                        </div>
                        @else
                        <div class="profile-image">
                            <div id="profileImage" class="avatar-default">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <p class="text-sm text-gray-500">Click the icon to upload a profile picture</p>
        </div>

        <!-- Personal Information Section -->
        <div class="bg-gray-50 p-4 rounded-lg">
            <h3 class="text-lg font-semibold text-[#005B49] mb-4">Personal Information</h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Full Name -->
                <div class="space-y-2">
                    <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                    <input
                        type="text"
                        id="name"
                        name="name" readonly
                        placeholder="Enter your full name"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#005B49] focus:border-[#005B49]"
                        wire:model="name"
                    >
                    @error('name')
                        <span class="text-red-600 text-sm font-medium">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Email -->
                <div class="space-y-2">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                    <input
                        type="email"
                        id="email"
                        name="email" readonly
                        placeholder="Enter your email"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#005B49] focus:border-[#005B49]"
                        wire:model="email"
                    >
                    @error('email')
                        <span class="text-red-600 text-sm font-medium">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Phone Number -->
                <div class="space-y-2">
                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                    <input
                        type="tel"
                        id="phone"
                        name="phone"
                        placeholder="Enter your phone number"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#005B49] focus:border-[#005B49]"
                        wire:model="phone"
                    >
                    @error('phone')
                        <span class="text-red-600 text-sm font-medium">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

        <!-- Location Section -->
        <div class="bg-gray-50 p-4 rounded-lg">
            <h3 class="text-lg font-semibold text-[#005B49] mb-4">Location</h3>
        
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Country -->
                <div class="space-y-2">
                    <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                    <select
                        id="country"
                        wire:model="country"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#005B49] focus:border-[#005B49]"
                    >
                        <option value="" selected disabled>Select your country</option>
                        @foreach($countries as $country)
                            <option value="{{ $country }}">{{ $country }}</option>
                        @endforeach
                    </select>
                    @error('country')
                        <span class="text-red-600 text-sm font-medium">{{ $message }}</span>
                    @enderror
                </div>
        
                <!-- State/Province -->
                <div class="space-y-2">
                    <label for="state" class="block text-sm font-medium text-gray-700">State/Province</label>
                    <input
                        type="text"
                        id="state"
                        name="state"
                        placeholder="Enter your state"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#005B49] focus:border-[#005B49]"
                        wire:model="state"
                    >
                    @error('state')
                        <span class="text-red-600 text-sm font-medium">{{ $message }}</span>
                    @enderror
                </div>
        
                <!-- City -->
                <div class="space-y-2">
                    <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                    <input
                        type="text"
                        id="city"
                        name="city"
                        placeholder="Enter your city"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#005B49] focus:border-[#005B49]"
                        wire:model="city"
                    >
                    @error('city')
                        <span class="text-red-600 text-sm font-medium">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        

        <!-- Business Account Section -->
        <div class="bg-gray-50 p-4 rounded-lg">
            <div class="flex justify-between items-center mb-4">
                <div>
                    <h3 class="text-lg font-semibold text-[#005B49]">Business Account</h3>
                    <p class="text-sm text-gray-600">Convert your personal account to a business account</p>
                </div>
                <label class="toggle-switch">
                    <input type="checkbox" wire:model.live="business">
                    <span class="toggle-slider"></span>
                </label>
            </div>
        
            <!-- Use Livewire's conditional rendering -->
            @if ($business)
                <div id="businessFields" class="space-y-4">
                    <div class="space-y-2">
                        <label for="businessName" class="block text-sm font-medium text-gray-700">Business Name</label>
                        <input
                            type="text" wire:model="business_name"
                            id="businessName"
                            name="businessName"
                            placeholder="Enter your business name"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#005B49] focus:border-[#005B49]"
                        >
                        @error('business_name')
                            <span class="text-red-600 text-sm font-medium">{{ $message }}</span>
                        @enderror
                    </div>
        
                    <div class="space-y-2">
                        <label for="businessType" class="block text-sm font-medium text-gray-700">Business Type</label>
                        <select
                            id="businessType" wire:model="business_type"
                            name="businessType"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#005B49] focus:border-[#005B49]"
                        >
                            <option value="" selected disabled>Select business type</option>
                            <option value="Retail">Retail</option>
                            <option value="Wholesale">Wholesale</option>
                            <option value="Manufacturing">Manufacturing</option>
                            <option value="Service">Service</option>
                            <option value="Other">Other</option>
                        </select>
                        @error('business_type')
                            <span class="text-red-600 text-sm font-medium">{{ $message }}</span>
                        @enderror
                    </div>
        
                    <div class="space-y-2">
                        <label for="taxId" class="block text-sm font-medium text-gray-700">Tax ID / Business Registration Number</label>
                        <input
                            type="text" wire:model="business_reg_no"
                            id="taxId"
                            name="taxId"
                            placeholder="Enter your tax ID or registration number"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#005B49] focus:border-[#005B49]"
                        >
                        @error('business_reg_no')
                            <span class="text-red-600 text-sm font-medium">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            @endif
        </div>        

        <!-- Submit Button -->
        <div class="flex justify-end">
            <button
                type="submit"
                class="py-2 px-6 bg-[#005B49] text-white rounded-md hover:bg-[#004a3b] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#005B49]"
            >
                Save Changes
            </button>
        </div>
    </form>
</div>