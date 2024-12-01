@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-3xl mx-auto">
            <!-- Header with Profile Picture -->
            <div class="flex items-center justify-between mb-8">
                <h1 class="text-2xl font-semibold text-[#008000]">Manage My Account</h1>
                <div class="flex items-center">
                    <p class="mr-2">Welcome! {{ $user->first_name }} {{ $user->last_name }}</p>
                    <div class="relative group">
                        <img src="{{ asset('images/default-avatar.jpg') }}" alt="Profile Picture"
                            class="w-16 h-16 rounded-full object-cover border-2 border-[#4ade80]">
                        <label
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 rounded-full opacity-0 group-hover:opacity-100 cursor-pointer transition-opacity">
                            <span class="text-white text-sm">Change Photo</span>
                            <input type="file" name="avatar" class="hidden" accept="image/*">
                        </label>
                    </div>
                </div>
            </div>

            <!-- Edit Form -->
            <div class="bg-white rounded-lg shadow-lg p-6 border border-[#dcfce7]">
                <h2 class="text-xl text-[#008000] mb-6">Edit Your Profile</h2>

                <form action="{{ route('profile.update') }}" method="POST" class="space-y-6">
                    @csrf
                    @method('PUT')

                    <!-- Success Message -->
                    @if (session('success'))
                        <div class="bg-[#dcfce7] border border-[#4ade80] text-[#166534] px-4 py-3 rounded">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Error Message -->
                    @if (session('error'))
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                            {{ session('error') }}
                        </div>
                    @endif

                    <!-- Personal Information -->
                    <div class="mb-8">
                        <h3 class="text-lg font-medium text-[#166534] mb-4 flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            Personal Information
                        </h3>
                        <!-- Name Fields -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-[#166534] mb-2">First Name</label>
                                <input type="text" name="first_name" value="{{ old('first_name', $user->first_name) }}"
                                    class="w-full px-3 py-2 border @error('first_name') border-red-500 @else border-[#bbf7d0] @enderror rounded-md focus:outline-none focus:ring-2 focus:ring-[#008000] focus:border-transparent">
                                @error('first_name')
                                    <p class="mt-1 text-sm text-warning">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-[#166534] mb-2">Last Name</label>
                                <input type="text" name="last_name" value="{{ old('last_name', $user->last_name) }}"
                                    class="w-full px-3 py-2 border @error('last_name') border-red-500 @else border-[#bbf7d0] @enderror rounded-md focus:outline-none focus:ring-2 focus:ring-[#008000] focus:border-transparent">
                                @error('last_name')
                                    <p class="mt-1 text-sm text-warning">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Address -->
                        <div>
                            <label class="block text-sm font-medium text-[#166534] mb-2">Address</label>
                            <textarea name="address" rows="3"
                                class="w-full px-3 py-2 border @error('address') border-red-500 @else border-[#bbf7d0] @enderror rounded-md focus:outline-none focus:ring-2 focus:ring-[#008000] focus:border-transparent">{{ old('address', $user->address) }}</textarea>
                            @error('address')
                                <p class="mt-1 text-sm text-warning">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Password Section -->
                    <div class="border-t border-[#dcfce7] pt-6">
                        <h3 class="text-lg font-medium text-[#166534] mb-4 flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                            Password Changes
                        </h3>
                        <!-- Password fields here -->
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-[#166534] mb-2">Current Password</label>
                                <input type="password" name="current_password"
                                    class="w-full px-3 py-2 border @error('current_password') border-red-500 @else border-[#bbf7d0] @enderror rounded-md focus:outline-none focus:ring-2 focus:ring-[#008000] focus:border-transparent">
                                @error('current_password')
                                    <p class="mt-1 text-sm text-warning">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-[#166534] mb-2">New Password</label>
                                <input type="password" name="new_password"
                                    class="w-full px-3 py-2 border border-[#bbf7d0] rounded-md focus:outline-none focus:ring-2 focus:ring-[#008000] focus:border-transparent">
                                @error('new_password')
                                    <p class="mt-1 text-sm text-warning">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-[#166534] mb-2">Confirm New Password</label>
                                <input type="password" name="new_password_confirmation"
                                    class="w-full px-3 py-2 border border-[#bbf7d0] rounded-md focus:outline-none focus:ring-2 focus:ring-[#008000] focus:border-transparent">
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex justify-end space-x-4">
                        <button type="button" onclick="window.location.href='{{ route('home') }}'"
                            class="px-4 py-2 border border-[#86efac] rounded-md text-[#166534] hover:bg-[#f0fdf4] transition duration-150">
                            Cancel
                        </button>
                        <button type="submit"
                            class="px-4 py-2 bg-[#008000] text-white rounded-md hover:bg-[#006400] transition duration-150 disabled:opacity-50"
                            onclick="this.disabled=true; this.innerHTML='Saving...'; this.form.submit();">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function checkPasswordStrength(password) {
            const strengthBar = document.getElementById('password-strength');
            const strengthText = document.getElementById('password-strength-text');

            let strength = 0;
            if (password.match(/[a-z]/)) strength++;
            if (password.match(/[A-Z]/)) strength++;
            if (password.match(/[0-9]/)) strength++;
            if (password.match(/[^a-zA-Z0-9]/)) strength++;
            if (password.length >= 8) strength++;

            switch (strength) {
                case 0:
                    strengthBar.style.width = '0%';
                    strengthBar.className = 'h-1 rounded transition-all duration-300';
                    strengthText.textContent = '';
                    break;
                case 1:
                    strengthBar.style.width = '20%';
                    strengthBar.className = 'h-1 rounded transition-all duration-300 bg-red-500';
                    strengthText.textContent = 'Very Weak';
                    strengthText.className = 'text-sm mt-1 text-red-500';
                    break;
                case 2:
                    strengthBar.style.width = '40%';
                    strengthBar.className = 'h-1 rounded transition-all duration-300 bg-orange-500';
                    strengthText.textContent = 'Weak';
                    strengthText.className = 'text-sm mt-1 text-orange-500';
                    break;
                case 3:
                    strengthBar.style.width = '60%';
                    strengthBar.className = 'h-1 rounded transition-all duration-300 bg-yellow-500';
                    strengthText.textContent = 'Medium';
                    strengthText.className = 'text-sm mt-1 text-yellow-500';
                    break;
                case 4:
                    strengthBar.style.width = '80%';
                    strengthBar.className = 'h-1 rounded transition-all duration-300 bg-[#008000]';
                    strengthText.textContent = 'Strong';
                    strengthText.className = 'text-sm mt-1 text-[#008000]';
                    break;
                case 5:
                    strengthBar.style.width = '100%';
                    strengthBar.className = 'h-1 rounded transition-all duration-300 bg-[#006400]';
                    strengthText.textContent = 'Very Strong';
                    strengthText.className = 'text-sm mt-1 text-[#006400]';
                    break;
            }
        }

        let formChanged = false;
        const form = document.querySelector('form');

        form.addEventListener('input', () => {
            formChanged = true;
        });

        window.addEventListener('beforeunload', (e) => {
            if (formChanged) {
                e.preventDefault();
                e.returnValue = '';
            }
        });

        form.addEventListener('submit', () => {
            formChanged = false;
        });
    </script>
@endsection
