@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-b from-blue-50 to-gray-100 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-3xl mx-auto">
        <div class="text-center mb-10">
            <h1 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">Support Our Cause</h1>
            <p class="mt-3 text-xl text-gray-600">Choose your preferred donation method to make an impact</p>
        </div>

        <!-- Payment Method Tabs -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="border-b border-gray-200">
                <nav class="flex -mb-px">
                    <button type="button" data-method="mobile-money" class="payment-method-tab active w-1/4 py-4 px-1 text-center border-b-2 font-medium text-sm border-blue-500 text-blue-600">
                        Mobile Money
                    </button>
                    <button type="button" data-method="bank-transfer" class="payment-method-tab w-1/4 py-4 px-1 text-center border-b-2 font-medium text-sm border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300">
                        Bank Transfer
                    </button>
                    <button type="button" data-method="western-union" class="payment-method-tab w-1/4 py-4 px-1 text-center border-b-2 font-medium text-sm border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300">
                        Western Union
                    </button>
                    <button type="button" data-method="gofundme" class="payment-method-tab w-1/4 py-4 px-1 text-center border-b-2 font-medium text-sm border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300">
                        GoFundMe
                    </button>
                </nav>
            </div>

            <div class="p-6 sm:p-8">
                <!-- Mobile Money Form (Default Visible) -->
                <div id="mobile-money-form" class="payment-method-form">
                    <form action=" " method="POST">
                        @csrf
                        <div class="mb-6">
                            <label for="mm-amount" class="block text-sm font-medium text-gray-700 mb-1">Amount (USD)</label>
                            <div class="relative rounded-md shadow-sm">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <span class="text-gray-500 sm:text-sm">$</span>
                                </div>
                                <input type="number" name="amount" id="mm-amount" min="1" step="0.01" required
                                    class="focus:ring-blue-500 focus:border-blue-500 block w-full pl-7 pr-12 py-3 border-gray-300 rounded-md"
                                    placeholder="0.00">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 mb-6">
                            <div>
                                <label for="mm-name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                                <input type="text" name="name" id="mm-name" required
                                    class="focus:ring-blue-500 focus:border-blue-500 block w-full py-3 px-4 border border-gray-300 rounded-md">
                            </div>
                            <div>
                                <label for="mm-phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                                <input type="tel" name="phone" id="mm-phone" required
                                    class="focus:ring-blue-500 focus:border-blue-500 block w-full py-3 px-4 border border-gray-300 rounded-md"
                                    placeholder="+1234567890">
                            </div>
                        </div>

                        <div class="mb-6">
                            <label for="mm-provider" class="block text-sm font-medium text-gray-700 mb-1">Mobile Money Provider</label>
                            <select id="mm-provider" name="provider" required
                                class="focus:ring-blue-500 focus:border-blue-500 block w-full py-3 px-4 border border-gray-300 rounded-md">
                                <option value="">Select Provider</option>
                                <option value="mtn">MTN Mobile Money</option>
                                <option value="airtel">Airtel Money</option>
                                <option value="vodafone">Vodafone Cash</option>
                                <option value="orange">Orange Money</option>
                                <option value="tigo">Tigo Pesa</option>
                            </select>
                        </div>

                        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-md transition duration-150 ease-in-out">
                            Donate via Mobile Money
                        </button>
                    </form>
                </div>

                <!-- Bank Transfer Form (Hidden by Default) -->
                <div id="bank-transfer-form" class="payment-method-form hidden">
                    <div class="mb-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Bank Transfer Details</h3>
                        <div class="bg-gray-50 p-4 rounded-md mb-4">
                            <div class="grid grid-cols-2 gap-4 text-sm">
                                <div>
                                    <p class="text-gray-500">Bank Name:</p>
                                    <p class="font-medium">Global Trust Bank</p>
                                </div>
                                <div>
                                    <p class="text-gray-500">Account Name:</p>
                                    <p class="font-medium">Our Charity Foundation</p>
                                </div>
                                <div>
                                    <p class="text-gray-500">Account Number:</p>
                                    <p class="font-medium">1234567890</p>
                                </div>
                                <div>
                                    <p class="text-gray-500">SWIFT/BIC:</p>
                                    <p class="font-medium">GTBKENYA</p>
                                </div>
                                <div>
                                    <p class="text-gray-500">Branch:</p>
                                    <p class="font-medium">Nairobi Main</p>
                                </div>
                                <div>
                                    <p class="text-gray-500">Currency:</p>
                                    <p class="font-medium">USD/EUR/GBP</p>
                                </div>
                            </div>
                        </div>
                        <p class="text-sm text-gray-500">Please use your name as reference when making the transfer.</p>
                    </div>

                    <form action=" " method="POST">
                        @csrf
                        <div class="mb-6">
                            <label for="bt-amount" class="block text-sm font-medium text-gray-700 mb-1">Amount (USD)</label>
                            <div class="relative rounded-md shadow-sm">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <span class="text-gray-500 sm:text-sm">$</span>
                                </div>
                                <input type="number" name="amount" id="bt-amount" min="1" step="0.01" required
                                    class="focus:ring-blue-500 focus:border-blue-500 block w-full pl-7 pr-12 py-3 border-gray-300 rounded-md"
                                    placeholder="0.00">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 mb-6">
                            <div>
                                <label for="bt-name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                                <input type="text" name="name" id="bt-name" required
                                    class="focus:ring-blue-500 focus:border-blue-500 block w-full py-3 px-4 border border-gray-300 rounded-md">
                            </div>
                            <div>
                                <label for="bt-email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                <input type="email" name="email" id="bt-email" required
                                    class="focus:ring-blue-500 focus:border-blue-500 block w-full py-3 px-4 border border-gray-300 rounded-md">
                            </div>
                        </div>

                        <div class="mb-6">
                            <label for="bt-reference" class="block text-sm font-medium text-gray-700 mb-1">Transaction Reference</label>
                            <input type="text" name="reference" id="bt-reference" required
                                class="focus:ring-blue-500 focus:border-blue-500 block w-full py-3 px-4 border border-gray-300 rounded-md">
                        </div>

                        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-md transition duration-150 ease-in-out">
                            Confirm Bank Transfer
                        </button>
                    </form>
                </div>

                <!-- Western Union Form (Hidden by Default) -->
                <div id="western-union-form" class="payment-method-form hidden">
                    <div class="mb-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Western Union Instructions</h3>
                        <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-4">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-yellow-700">
                                        Please use the exact details below when sending money via Western Union to ensure we can identify your donation.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-md mb-4">
                            <div class="grid grid-cols-1 gap-4 text-sm">
                                <div>
                                    <p class="text-gray-500">Receiver's Full Name:</p>
                                    <p class="font-medium">OUR CHARITY FOUNDATION</p>
                                </div>
                                <div>
                                    <p class="text-gray-500">Country:</p>
                                    <p class="font-medium">Kenya</p>
                                </div>
                                <div>
                                    <p class="text-gray-500">City:</p>
                                    <p class="font-medium">Nairobi</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form action=" " method="POST">
                        @csrf
                        <div class="mb-6">
                            <label for="wu-amount" class="block text-sm font-medium text-gray-700 mb-1">Amount Sent (USD)</label>
                            <div class="relative rounded-md shadow-sm">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <span class="text-gray-500 sm:text-sm">$</span>
                                </div>
                                <input type="number" name="amount" id="wu-amount" min="1" step="0.01" required
                                    class="focus:ring-blue-500 focus:border-blue-500 block w-full pl-7 pr-12 py-3 border-gray-300 rounded-md"
                                    placeholder="0.00">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 mb-6">
                            <div>
                                <label for="wu-name" class="block text-sm font-medium text-gray-700 mb-1">Your Full Name</label>
                                <input type="text" name="name" id="wu-name" required
                                    class="focus:ring-blue-500 focus:border-blue-500 block w-full py-3 px-4 border border-gray-300 rounded-md">
                            </div>
                            <div>
                                <label for="wu-email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                <input type="email" name="email" id="wu-email" required
                                    class="focus:ring-blue-500 focus:border-blue-500 block w-full py-3 px-4 border border-gray-300 rounded-md">
                            </div>
                        </div>

                        <div class="mb-6">
                            <label for="wu-mtc" class="block text-sm font-medium text-gray-700 mb-1">MTCN (10-digit number)</label>
                            <input type="text" name="mtcn" id="wu-mtc" required
                                class="focus:ring-blue-500 focus:border-blue-500 block w-full py-3 px-4 border border-gray-300 rounded-md"
                                placeholder="1234567890">
                        </div>

                        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-md transition duration-150 ease-in-out">
                            Confirm Western Union Transfer
                        </button>
                    </form>
                </div>

                <!-- GoFundMe Form (Hidden by Default) -->
                <div id="gofundme-form" class="payment-method-form hidden">
                    <div class="text-center mb-8">
                        <div class="mx-auto h-16 w-16 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                            <svg class="h-8 w-8 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.03 5.666c-2.642-.484-4.955.418-6.03 1.184-1.075-.766-3.388-1.668-6.03-1.184C2.737 5.884 1 7.812 1 10v9c0 1.103.897 2 2 2h18c1.103 0 2-.897 2-2v-9c0-2.188-1.737-4.116-4.97-4.334zM16 19H8v-2h8v2zm1-4H7v-2h10v2zm.538-9H15.5V3.5a1.5 1.5 0 00-3 0V6H6.462c-1.361 0-2.53.947-2.88 2.237A5.016 5.016 0 015 10h14c0-.712.148-1.387.418-2-.35-1.29-1.519-2.334-2.88-2.334z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Donate via GoFundMe</h3>
                        <p class="text-gray-600 mb-4">You'll be redirected to our official GoFundMe campaign page to complete your donation.</p>
                        <a href="https://www.gofundme.com/our-campaign" target="_blank" class="inline-block bg-green-600 hover:bg-green-700 text-white font-medium py-3 px-6 rounded-md transition duration-150 ease-in-out">
                            Go to GoFundMe
                        </a>
                    </div>

                    <div class="border-t border-gray-200 pt-6">
                        <form action=" " method="POST">
                            @csrf
                            <div class="mb-4">
                                <label class="inline-flex items-center">
                                    <input type="checkbox" name="notify_me" class="form-checkbox h-4 w-4 text-blue-600">
                                    <span class="ml-2 text-gray-700">Notify me when the campaign reaches its goal</span>
                                </label>
                            </div>
                            <button type="submit" class="w-full bg-gray-100 hover:bg-gray-200 text-gray-800 font-medium py-3 px-4 rounded-md transition duration-150 ease-in-out">
                                Continue Without Redirect
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Trust Indicators -->
        <div class="mt-8 grid grid-cols-2 gap-4 sm:grid-cols-4">
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <svg class="mx-auto h-8 w-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                </svg>
                <p class="mt-2 text-sm font-medium text-gray-900">Secure Payments</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <svg class="mx-auto h-8 w-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                </svg>
                <p class="mt-2 text-sm font-medium text-gray-900">Tax Deductible</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <svg class="mx-auto h-8 w-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <p class="mt-2 text-sm font-medium text-gray-900">Transparent</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <svg class="mx-auto h-8 w-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                </svg>
                <p class="mt-2 text-sm font-medium text-gray-900">Multiple Options</p>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const tabs = document.querySelectorAll('.payment-method-tab');
        const forms = document.querySelectorAll('.payment-method-form');

        tabs.forEach(tab => {
            tab.addEventListener('click', function() {
                // Remove active class from all tabs
                tabs.forEach(t => {
                    t.classList.remove('active', 'border-blue-500', 'text-blue-600');
                    t.classList.add('border-transparent', 'text-gray-500');
                });
                
                // Add active class to clicked tab
                this.classList.add('active', 'border-blue-500', 'text-blue-600');
                this.classList.remove('border-transparent', 'text-gray-500');
                
                // Hide all forms
                forms.forEach(form => form.classList.add('hidden'));
                
                // Show the selected form
                const method = this.getAttribute('data-method');
                document.getElementById(`${method}-form`).classList.remove('hidden');
            });
        });
    });
</script>


@endsection