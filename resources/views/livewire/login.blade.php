<!-- resources/views/livewire/login.blade.php -->
<div class="min-h-screen flex">
    <!-- Left Side - Form -->
    <div class="w-full md:w-1/2 flex items-center justify-center bg-[#eff9ff]">
        <div class="max-w-lg w-full px-6">
            <div class="mb-12">
                <img src="/images/logo-2.png" alt="CRI Group" />
            </div>
            @if ($step === 'credentials')
                <h2 class="text-[40px] font-bold text-gray-900 mb-2 leading-tight">Welcome Back!</h2>
                <p class="text-[36px] leading-10 mb-10">Sign In to your account below</p>

                <form wire:submit.prevent="submitCredentials" class="space-y-6">
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                            <span class="text-red-500">*</span> E-mail
                        </label>
                        <div class="relative">
                            <div
                                class="absolute inset-y-0 left-0 w-[45px] rounded-md flex items-center justify-center pointer-events-none border border-r-1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M21 4.5H3C2.80109 4.5 2.61032 4.57902 2.46967 4.71967C2.32902 4.86032 2.25 5.05109 2.25 5.25V18C2.25 18.3978 2.40804 18.7794 2.68934 19.0607C2.97064 19.342 3.35218 19.5 3.75 19.5H20.25C20.6478 19.5 21.0294 19.342 21.3107 19.0607C21.592 18.7794 21.75 18.3978 21.75 18V5.25C21.75 5.05109 21.671 4.86032 21.5303 4.71967C21.3897 4.57902 21.1989 4.5 21 4.5ZM19.0716 6L12 12.4828L4.92844 6H19.0716ZM20.25 18H3.75V6.95531L11.4928 14.0531C11.6312 14.1801 11.8122 14.2506 12 14.2506C12.1878 14.2506 12.3688 14.1801 12.5072 14.0531L20.25 6.95531V18Z"
                                        fill="#687076" />
                                </svg>

                            </div>
                            <input wire:model="email" id="email" type="email" required
                                class="pl-14 pr-4 py-3 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 sm:text-base"
                                placeholder="example@gmail.com">
                        </div>
                        @error('email')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                            <span class="text-red-500">*</span> Password
                        </label>
                        <div class="relative">
                            <div
                                class="absolute inset-y-0 left-0 w-[45px] rounded-md flex items-center justify-center pointer-events-none border border-r-1">
                                <svg width="18" height="21" viewBox="0 0 18 21" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9 10.5C8.36962 10.5002 7.76037 10.7273 7.28361 11.1397C6.80684 11.552 6.4944 12.1222 6.40339 12.746C6.31238 13.3698 6.44887 14.0055 6.78793 14.5369C7.12699 15.0683 7.64596 15.46 8.25 15.6403V17.25C8.25 17.4489 8.32902 17.6397 8.46967 17.7803C8.61032 17.921 8.80109 18 9 18C9.19891 18 9.38968 17.921 9.53033 17.7803C9.67098 17.6397 9.75 17.4489 9.75 17.25V15.6403C10.354 15.46 10.873 15.0683 11.2121 14.5369C11.5511 14.0055 11.6876 13.3698 11.5966 12.746C11.5056 12.1222 11.1932 11.552 10.7164 11.1397C10.2396 10.7273 9.63038 10.5002 9 10.5ZM9 14.25C8.7775 14.25 8.55999 14.184 8.37498 14.0604C8.18998 13.9368 8.04578 13.7611 7.96064 13.5555C7.87549 13.35 7.85321 13.1238 7.89662 12.9055C7.94002 12.6873 8.04717 12.4868 8.2045 12.3295C8.36184 12.1722 8.56229 12.065 8.78052 12.0216C8.99875 11.9782 9.22495 12.0005 9.43052 12.0856C9.63609 12.1708 9.81179 12.315 9.9354 12.5C10.059 12.685 10.125 12.9025 10.125 13.125C10.125 13.4234 10.0065 13.7095 9.79549 13.9205C9.58452 14.1315 9.29837 14.25 9 14.25ZM16.5 7.5H13.5V5.25C13.5 4.05653 13.0259 2.91193 12.182 2.06802C11.3381 1.22411 10.1935 0.75 9 0.75C7.80653 0.75 6.66193 1.22411 5.81802 2.06802C4.97411 2.91193 4.5 4.05653 4.5 5.25V7.5H1.5C1.10218 7.5 0.720644 7.65804 0.43934 7.93934C0.158035 8.22064 0 8.60218 0 9V19.5C0 19.8978 0.158035 20.2794 0.43934 20.5607C0.720644 20.842 1.10218 21 1.5 21H16.5C16.8978 21 17.2794 20.842 17.5607 20.5607C17.842 20.2794 18 19.8978 18 19.5V9C18 8.60218 17.842 8.22064 17.5607 7.93934C17.2794 7.65804 16.8978 7.5 16.5 7.5ZM6 5.25C6 4.45435 6.31607 3.69129 6.87868 3.12868C7.44129 2.56607 8.20435 2.25 9 2.25C9.79565 2.25 10.5587 2.56607 11.1213 3.12868C11.6839 3.69129 12 4.45435 12 5.25V7.5H6V5.25ZM16.5 19.5H1.5V9H16.5V19.5Z"
                                        fill="#687076" />
                                </svg>

                            </div>
                            <input wire:model="password" id="password" type="password" required
                                class="pl-14 pr-4 py-3 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 sm:text-base"
                                placeholder="Type your password">
                        </div>
                        @error('password')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="text-right mt-2">
                        <a href="{{ route('forgot-password') }}" class="text-sm hover:text-blue-500 underline">Forget
                            Password</a>
                    </div>

                    <button type="submit"
                        class="w-full mt-8 flex justify-center py-3.5 px-4 border border-transparent rounded-lg shadow-sm text-base font-medium text-white bg-[#054166] hover:bg-blue-950 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Next
                    </button>
                </form>
            @elseif($step === 'otp')
                <button wire:click="goBack" class="mb-8 bg-[#def2ff] p-2 rounded-full">
                    <svg class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                </button>

                <h2 class="text-[40px] font-bold text-gray-900 mb-2 leading-tight">Enter OTP!</h2>
                <p class="mb-12">An OTP has been sent to your registered E-mail.</p>

                <form wire:submit.prevent="submitOTP" class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-4">Enter OTP</label>
                        <div class="flex items-center justify-center">
                            <!-- First group of 3 digits - rounded corners only on first and last -->
                            @for ($i = 0; $i < 3; $i++)
                                <input wire:model="otp.{{ $i }}" type="text" maxlength="1"
                                    class="w-14 h-16 text-center text-3xl font-bold border {{ $i > 0 ? '-ml-px' : '' }}
                                    {{ $i === 0 ? 'rounded-l-md' : '' }}
                                    {{ $i === 2 ? 'rounded-r-md' : '' }}
                                    {{ $errors->has('otp') ? 'border-red-500' : 'border-gray-300' }}
                                    focus:border-blue-500 focus:outline-none focus:z-10">
                            @endfor

                            <!-- Hyphen separator -->
                            <span class="text-3xl font-bold text-gray-400 mx-3">-</span>

                            <!-- Second group of 3 digits - rounded corners only on first and last -->
                            @for ($i = 3; $i < 6; $i++)
                                <input wire:model="otp.{{ $i }}" type="text" maxlength="1"
                                    class="w-14 h-16 text-center text-3xl font-bold border {{ $i > 3 ? '-ml-px' : '' }}
                                    {{ $i === 3 ? 'rounded-l-md' : '' }}
                                    {{ $i === 5 ? 'rounded-r-md' : '' }}
                                    {{ $errors->has('otp') ? 'border-red-500' : 'border-gray-300' }}
                                    focus:border-blue-500 focus:outline-none focus:z-10">
                            @endfor
                        </div>
                        @error('otp')
                            <div class="flex items-center mt-4 text-red-500">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-sm">{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <div class="text-center mt-8">
                        <button wire:click="resendOTP" type="button"
                            class="text-blue-600 hover:text-blue-500 font-medium flex items-center justify-center gap-1 mx-auto">
                            Resend OTP
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                            </svg>
                        </button>
                    </div>

                    <button wire:click="submitOTP" type="button"
                        class="w-full mt-16 flex justify-center py-3.5 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-[#054166] hover:bg-blue-950 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Next
                    </button>
                </form>
            @elseif($step === 'verification')
                <h2 class="text-[40px] font-bold text-gray-900 mb-2 leading-tight">Almost There!</h2>
                <p class="text-gray-500 mb-12">Please complete the last step of verification to be able to Sign In
                    Successfully.</p>

                <form wire:submit.prevent="submitVerification" class="space-y-6">
                    <div class="g-recaptcha border border-gray-300 rounded-lg p-4 bg-gray-50"
                        data-sitekey="your-site-key">
                        <div class="flex items-center">
                            <input type="checkbox" id="recaptcha"
                                class="w-6 h-6 border-2 border-gray-300 rounded mr-3 checked:bg-blue-600 checked:border-blue-600">
                            <label for="recaptcha" class="text-sm text-gray-700">I'm not a robot</label>
                        </div>
                    </div>

                    <button type="submit"
                        class="w-full mt-20 flex justify-center py-3.5 px-4 border border-transparent rounded-lg shadow-sm text-base font-medium text-white bg-[#054166] hover:bg-blue-950 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Sign In
                    </button>
                </form>
            @endif
        </div>
    </div>

    <!-- Right Side - Image -->
    <div class="hidden md:block md:w-1/2 bg-[#caf2de] relative">
        <div class="h-[70vh]">
            <img src="/images/db-view.png" alt="Dashboard preview" class="w-full h-full object-cover">
        </div>
        <div class="bg-white h-[30vh] p-10">
            <div class="relative">
                <h2 class="text-center text-[20px] font-medium ">Back screening got more easier!</h2>
                <div class="absolute top-[-50px] transform -translate-x-1/2 right-[170px]">
                    <svg width="103" height="103" viewBox="0 0 103 103" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1_9199)">
                            <path
                                d="M45.9126 28.0792C45.5366 28.1905 44.5074 30.155 43.2435 33.1708C38.9399 43.4913 38.4142 42.9252 39.0345 43.7697C39.6985 44.6737 39.9354 44.2982 43.0232 37.7821C46.3311 30.7931 47.2563 27.7148 45.9126 28.0792Z"
                                fill="black" />
                            <path
                                d="M32.1126 36.9882C31.8444 36.9471 31.7746 37.1266 31.5818 38.1105C31.3044 39.5777 31.9403 41.2164 32.5945 40.7359C33.121 40.3308 32.7109 37.0798 32.1126 36.9882Z"
                                fill="black" />
                            <path
                                d="M26.8705 37.8535C24.5628 30.7227 23.5796 28.3869 22.6772 28.0059C21.9455 27.6828 21.9522 28.1905 22.7041 30.037C23.3614 31.605 24.4062 34.5731 25.3565 37.5373C26.1351 39.9685 26.3957 40.4729 26.9997 40.8715C27.8475 41.4024 27.8097 40.7527 26.8705 37.8535Z"
                                fill="black" />
                            <path
                                d="M55.6806 35.3704C55.3165 35.473 53.0503 38.0714 51.7663 39.8384C51.458 40.2663 50.5797 41.3142 49.8274 42.1598C48.3529 43.7921 48.3013 43.9215 48.7993 44.5995C49.2711 45.2418 49.2474 45.2592 51.5818 42.3544C55.6496 37.2975 56.9918 35.0116 55.6806 35.3704Z"
                                fill="black" />
                            <path
                                d="M32.8772 30.4754C32.7173 32.0028 32.2014 32.8212 32.8479 33.7013C33.8875 35.1168 34.0263 35.1063 34.4867 32.1681C35.3411 26.7248 35.3281 22.1199 34.4519 21.7747C33.602 21.4651 33.8338 24.8471 32.8772 30.4754Z"
                                fill="black" />
                            <path
                                d="M67.1127 71.6524C68.5379 71.9973 69.7598 72.0154 70.188 71.7009C70.7827 71.2641 70.4196 70.3955 69.4927 70.1058C63.3519 68.1523 55.7608 67.1909 55.6697 68.3382C55.5816 69.4649 56.5491 69.8347 61.8123 70.6931C64.1285 71.0794 66.512 71.5077 67.1127 71.6524Z"
                                fill="black" />
                            <path
                                d="M64.4681 48.0326C62.9959 48.5462 59.8855 50.2448 52.8106 53.1524C51.4028 53.7286 51.3791 53.746 51.3019 54.3887C51.2435 54.9076 51.5732 55.581 51.9819 55.7386C52.32 55.8748 62.105 51.7458 65.3209 50.1162C66.5613 49.4615 66.1536 47.4355 64.4681 48.0326Z"
                                fill="black" />
                            <path
                                d="M66.1167 80.6422C62.4499 77.7689 54.9577 73.1275 54.0803 73.2043C53.4717 73.2484 53.8449 74.604 54.6188 75.1342L57.5185 77.0878C61.9781 80.093 67.8057 83.5399 68.0793 83.3389C68.6296 82.9164 68.0966 82.191 66.1167 80.6422Z"
                                fill="black" />
                            <path
                                d="M68.7572 58.6336C68.2638 58.6848 66.8786 58.7683 62.9997 58.7974C61.2463 58.8035 57.854 59.171 57.5686 59.3807C56.9976 59.8 60.1602 59.9674 66.136 59.8265C67.4292 59.7922 68.6629 59.8016 68.8867 59.857C69.9412 60.0712 69.6791 58.5425 68.7572 58.6336Z"
                                fill="black" />
                        </g>
                        <defs>
                            <clipPath id="clip0_1_9199">
                                <rect width="73.252" height="73.252" fill="white"
                                    transform="translate(59.0391) rotate(53.7032)" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
            </div>
            <div class="grid grid-cols-2 mt-10">
                <div class="flex items-center gap-2 mt-2">
                    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 2C6.49 2 2 6.49 2 12C2 17.51 6.49 22 12 22C17.51 22 22 17.51 22 12C22 6.49 17.51 2 12 2ZM16.78 9.7L11.11 15.37C10.97 15.51 10.78 15.59 10.58 15.59C10.38 15.59 10.19 15.51 10.05 15.37L7.22 12.54C6.93 12.25 6.93 11.77 7.22 11.48C7.51 11.19 7.99 11.19 8.28 11.48L10.58 13.78L15.72 8.64C16.01 8.35 16.49 8.35 16.78 8.64C17.07 8.93 17.07 9.4 16.78 9.7Z"
                            fill="#1fbd88" />
                    </svg>
                    <p class="text-[#575c6a]">Upload thousands of applicant in no time!</p>
                </div>
                <div class="flex items-center gap-2 mt-2">
                    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 2C6.49 2 2 6.49 2 12C2 17.51 6.49 22 12 22C17.51 22 22 17.51 22 12C22 6.49 17.51 2 12 2ZM16.78 9.7L11.11 15.37C10.97 15.51 10.78 15.59 10.58 15.59C10.38 15.59 10.19 15.51 10.05 15.37L7.22 12.54C6.93 12.25 6.93 11.77 7.22 11.48C7.51 11.19 7.99 11.19 8.28 11.48L10.58 13.78L15.72 8.64C16.01 8.35 16.49 8.35 16.78 8.64C17.07 8.93 17.07 9.4 16.78 9.7Z"
                            fill="#1fbd88" />
                    </svg>
                    <p class="text-[#575c6a]">24/7 Coustomer Support</p>
                </div>
                <div class="flex items-center gap-2 mt-2">
                    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 2C6.49 2 2 6.49 2 12C2 17.51 6.49 22 12 22C17.51 22 22 17.51 22 12C22 6.49 17.51 2 12 2ZM16.78 9.7L11.11 15.37C10.97 15.51 10.78 15.59 10.58 15.59C10.38 15.59 10.19 15.51 10.05 15.37L7.22 12.54C6.93 12.25 6.93 11.77 7.22 11.48C7.51 11.19 7.99 11.19 8.28 11.48L10.58 13.78L15.72 8.64C16.01 8.35 16.49 8.35 16.78 8.64C17.07 8.93 17.07 9.4 16.78 9.7Z"
                            fill="#1fbd88" />
                    </svg>
                    <p class="text-[#575c6a]">Get real time screening update.</p>
                </div>
                <div class="flex items-center gap-2 mt-2">
                    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 2C6.49 2 2 6.49 2 12C2 17.51 6.49 22 12 22C17.51 22 22 17.51 22 12C22 6.49 17.51 2 12 2ZM16.78 9.7L11.11 15.37C10.97 15.51 10.78 15.59 10.58 15.59C10.38 15.59 10.19 15.51 10.05 15.37L7.22 12.54C6.93 12.25 6.93 11.77 7.22 11.48C7.51 11.19 7.99 11.19 8.28 11.48L10.58 13.78L15.72 8.64C16.01 8.35 16.49 8.35 16.78 8.64C17.07 8.93 17.07 9.4 16.78 9.7Z"
                            fill="#1fbd88" />
                    </svg>
                    <p class="text-[#575c6a]">No hidden charges.</p>
                </div>
                <div class="flex items-center gap-2 mt-2">
                    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 2C6.49 2 2 6.49 2 12C2 17.51 6.49 22 12 22C17.51 22 22 17.51 22 12C22 6.49 17.51 2 12 2ZM16.78 9.7L11.11 15.37C10.97 15.51 10.78 15.59 10.58 15.59C10.38 15.59 10.19 15.51 10.05 15.37L7.22 12.54C6.93 12.25 6.93 11.77 7.22 11.48C7.51 11.19 7.99 11.19 8.28 11.48L10.58 13.78L15.72 8.64C16.01 8.35 16.49 8.35 16.78 8.64C17.07 8.93 17.07 9.4 16.78 9.7Z"
                            fill="#1fbd88" />
                    </svg>
                    <p class="text-[#575c6a]">Customizable Packages</p>
                </div>
                <div class="flex items-center gap-2 mt-2">
                    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 2C6.49 2 2 6.49 2 12C2 17.51 6.49 22 12 22C17.51 22 22 17.51 22 12C22 6.49 17.51 2 12 2ZM16.78 9.7L11.11 15.37C10.97 15.51 10.78 15.59 10.58 15.59C10.38 15.59 10.19 15.51 10.05 15.37L7.22 12.54C6.93 12.25 6.93 11.77 7.22 11.48C7.51 11.19 7.99 11.19 8.28 11.48L10.58 13.78L15.72 8.64C16.01 8.35 16.49 8.35 16.78 8.64C17.07 8.93 17.07 9.4 16.78 9.7Z"
                            fill="#1fbd88" />
                    </svg>
                    <p class="text-[#575c6a]">Get real time screening update.</p>
                </div>
            </div>
        </div>
    </div>
</div>
