<div id="depositSection" class="bg-white rounded-lg shadow-md overflow-hidden mb-6">
    <div class="p-6">
        <h3 class="text-lg font-semibold text-[#005B49] mb-4">Deposit Funds</h3>

        <form action="{{ route('wallet.fund') }}" method="post" class="space-y-6">
            @csrf
            <!-- Amount -->
            <div class="space-y-2">
                <label for="depositAmount" class="block text-sm font-medium text-gray-700">Amount (NGN)</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <span class="text-gray-500">N</span>
                    </div>
                    <input
                        type="number"
                        wire:model="amount"
                        name="amount"
                        placeholder="0.00"
                        min="100"
                        class="w-full pl-8 pr-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#005B49] focus:border-[#005B49]"
                        required
                    >
                    @error('amount')
                        
                    <span class="text-red-600 text-sm font-medium">{{ $message }}</span>
                @enderror
                </div>
                <p class="text-xs text-gray-500">Minimum deposit: N100</p>
            </div>

            <!-- Payment Method -->
            <div class="space-y-2">
                <p class="text-gray-600 text-sm">
                    Note: By clicking the "Proceed to Deposit" button, you will be redirected to a secure payment page where you can initiate your deposit.
                </p>
            </div>            

            <!-- Submit Button -->
            <div class="flex justify-end">
                <button
                    type="submit" wire:loading.disable
                    class="py-2 px-6 bg-[#005B49] text-white rounded-md hover:bg-[#004a3b] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#005B49]"
                >
                    <span wire:loading.remove>
                        Proceed to Deposit
                    </span>
                    <span wire:loading>
                        Checking...
                    </span>
                </button>
            </div>
        </form>
    </div>
</div>